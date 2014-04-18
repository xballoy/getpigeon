#! /bin/bash

if [ $# -ne 1 ]
then
        echo "Pigeon-sendSms : 1 argument necessaire"
        echo "Arg1 : nom de fichier"
	exit 1
fi



echo "send SMS - detection mouvement - verification delai"

PATH_LOCK=/var/tmp/pigeon

current_date=`date +%Y%m%d%H%M`
filename="$PATH_LOCK-$current_date.lock"

# Do not send more than 1 SMS per hour
if [ -f $filename ]
then
    exit 1
fi


PICNAME=`basename $1`
URLPIC="http://chaire-ecommerce.ec-lille.fr/pigeon/motion/$PICNAME"

echo "send SMS - Upload de $1"
pigeon-upload $1

touch $filename

echo "send SMS - envoi en cours"

for tel in `ls /home/pigeon/config`
do
# Send SMS
curl -X POST -H Cache-Control:no-cache -H Content-Type:application/x-www-form-urlencoded -d "api_key=API_KEY&api_secret=API_SECRET&from=GetPigeon&to=$tel&text=Nouveau%20Courrier%20:%20$URLPIC%20!" https://rest.nexmo.com/sms/json
done

exit 0
