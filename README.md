# Damn Vulnerable Web Service Docker Container
[![Docker Pulls](https://img.shields.io/docker/pulls/cyrivs89/web-dvws.svg?style=plastic)](https://hub.docker.com/r/cyrivs89/web-dvws/)
![License](https://img.shields.io/badge/License-GPL-blue.svg?style=plastic)

Damn Vulnerable Web Services is an insecure web application with multiple vulnerable web service components that can be used to learn real world web service vulnerabilities. The aim of this project is to help security professionals learn about Web Application Security through the use of a practical lab environment.

**WARNING** Do not host this application on live or production environment.

## Run this image

To run this image you need [docker](http://docker.com) installed. Just run the command:

    docker run --rm -it -p 80:80 cyrivs89/web-dvws

And wait until it download the image and start it, after that you can see the image running in your local machine.

Just click on ```Setup Instructions``` and then ```Reset database``` button and it will generate any aditional configuration needed.

## About DVWS

You can visit DVWS official [github repository](https://github.com/snoopysecurity/dvws) if you want more information.

## About image

This image is based in opsxcq [DVWA image](https://hub.docker.com/r/vulnerables/web-dvwa/) and his official [github repository](https://github.com/opsxcq/docker-vulnerable-dvwa)

## Disclaimer

This or previous program is for Educational purpose ONLY. Do not use it without permission. The usual disclaimer applies, especially the fact that me (cyrivs89) is not liable for any damages caused by direct or indirect use of the information or functionality provided by these programs. The author or any Internet provider bears NO responsibility for content or misuse of these programs or any derivatives thereof. By using these programs you accept the fact that any damage (dataloss, system crash, system compromise, etc.) caused by the use of these programs is not cyrivs89's responsibility.
