#!/bin/bash


if [ `id -u` -ne 0 ]
then
        echo "Pigeon-init : must be root"
        exit 1
fi


previous=`cat /sys/class/gpio/gpio22/value`
next=`expr 1 - $previous`
#if [ "$" = "0" ] || [ "$1" = "1" ];then
	echo $next > /sys/class/gpio/gpio22/value
	echo $next > /sys/class/gpio/gpio23/value
#fi

exit 0
