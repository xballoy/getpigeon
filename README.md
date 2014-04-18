# Pigeon
## Introduction
This project was build during the first European Startup Weekend Makers edition in Lille (France).

The aim of the project was to build a connected mailbox which tells you when you have a new mail.

## pigeon-configurator
pigeon-configurator is a small website used to configure the numbers to send the SMS. It creates a file which name is the phone number.

### Initialize
Run `composer update` to initialize the project

You have to configure the path of the folder to save the files in `pathConfiguration` in `app/config/app.php`.

## Scripts
### motion.conf
- Set the path to the motion folder in `target_dir`. It will contains all the pictures taken by the camera when a motion is detected

### pigeon-init.sh
- Set the path to motion.conf at the end of the file

### pigeon-send-sms.sh
- Set your API keys in the curl request to Nexmo to send SMS

### pigeon-upload.sh
- Set a valid URL to upload files, the URL is included in the SMS
