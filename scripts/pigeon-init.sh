#! /bin/bash


if [ `id -u` -ne 0 ]
then
        echo "Pigeon-init : must be root"
        exit 1
fi

echo "Pigeon : Init GPIO"
PATH_GPIO=/sys/class/gpio
echo 22 > $PATH_GPIO/export
echo 23 > $PATH_GPIO/export
echo out > $PATH_GPIO/gpio22/direction 
echo out > $PATH_GPIO/gpio23/direction 


echo "Pigeon : Lancement demon motion"
/usr/bin/motion -nd -c /home/pigeon/scripts/motion.conf & 
