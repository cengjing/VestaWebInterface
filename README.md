![VWI Banner](https://raw.githubusercontent.com/cdgco/VestaWebInterface/master/VWI%20Banner.png)

Demo: http://cdgphp70.epizy.com

Username: demo

Password: demo123


[![Codacy Badge](https://api.codacy.com/project/badge/Grade/7e9666795d6b4aa1a7838f7af599b720)](https://www.codacy.com/app/carter/VestaWebInterface?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=cdgco/VestaWebInterface&amp;utm_campaign=Badge_Grade)
[![Maintainability](https://api.codeclimate.com/v1/badges/89b83ed998d2615a4bd6/maintainability)](https://codeclimate.com/github/cdgco/VestaWebInterface/maintainability)
[![GitHub repo size in bytes](https://img.shields.io/github/repo-size/cdgco/vestawebinterface.svg)](https://github.com/cdgco/VestaWebInterface/releases)
[![GitHub (pre-)release](https://img.shields.io/github/release/cdgco/vestawebinterface/all.svg)](https://github.com/cdgco/VestaWebInterface/releases)

## Requirements
* Server with root access and VestaCP installed.
* Web server with php and php-curl installed (Does not have to be powered by VestaCP)

(Tested on Ubuntu Server 14.04 - 17.04, CentOS 5 - 7, VestaCP 0.9.8-17 - 0.9.8-18, PHP 5.4 - 7.0)

## Install

#### Method 1

1. Run the command `bash <(curl -s https://cdgco.github.io/full)` while inside of the desired web directory on the VestaCP machine.
2. Visit the url of the web directory to complete configuration.
3. Chmod 'includes' folder to 755 (`chmod 755 includes`) after configuration is complete.

#### Method 2

1. Download and extract the latest release to a web server (Does not have to be running VestaCP).
2. Chmod 'includes' folder to 777 (`chmod 777 includes`).
3. Run the command `bash <(curl -s https://cdgco.github.io/backend)` on your vesta server to install the backend files.
4. Visit the url of the web directory to complete configuration.
5. Chmod 'includes' folder to 755 (`chmod 755 includes`) after configuration is complete.
6. If desired, run `bash <(curl -s https://cdgco.github.io/lang)` on your frontend server to add support for translations.

Note: If you cannot chmod files, manually configure the includes/config-example.php file as in step 3 of method 3.


#### Method 3

1. Download and extract the latest release to a web server (Does not have to be running VestaCP).
2. Copy the contents of the 'install/web' folder in the release to the '/usr/local/vesta/web' directory of your vesta server.
3. Edit the 'includes/config-example.php' file and rename it to config.php.
4. If desired, run `bash <(curl -s https://cdgco.github.io/lang)` on your frontend server to add support for translations.

## What method should I use?

* Method 1 is used to install VWI automatically if the frontend is on the same server as VestaCP.
* Method 2 is used to install the VWI frontend manually and the backend automatically if the frontend is not hosted by a VestaCP server. 
* Method 3 is used to install VWI manually in case of any errors or other circumstances with other installation methods.
 
## Support

For support regarding Vesta Web Interface, you can email me at support [at] cdgtech.one, visit the support portal online at http://support.cdgtech.one, or click the buttons in the bottom left and right hand corners of the live demo to chat or leave feedback.
