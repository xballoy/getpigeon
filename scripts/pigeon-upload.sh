#! /bin/bash


if [ $# -ne 1 ]
then
        echo "Pigeon-upload : 1 argument necessaire"
        echo "Arg1 : nom de fichier"
	exit 1
fi

FILENAME=`basename $1`

echo "Pigeon-upload  : upload de $FILENAME"

curl -i -F name=$FILENAME -F file=@$1 upload.php

