FROM debian:jessie

MAINTAINER Cyrivs89 <1.marioromero1989@gmail.com>

RUN apt-get update && \
    apt-get upgrade -y && \
    DEBIAN_FRONTEND=noninteractive apt-get install -y \
    debconf-utils && \
    echo mysql-server-5.5 mysql-server/root_password password | debconf-set-selections && \
    echo mysql-server-5.5 mysql-server/root_password_again password | debconf-set-selections && \
    DEBIAN_FRONTEND=noninteractive apt-get install -y \
    apache2 \
    mysql-server \
    php5 \
    php5-mysql \
    php-pear \
    php5-gd \
    && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/*

COPY 000-default.conf /etc/apache2/sites-enabled/000-default.conf
COPY dvws /var/www/html/dvws

RUN chown www-data:www-data -R /var/www/html && \
    rm /var/www/html/index.html

EXPOSE 80

COPY main.sh /
ENTRYPOINT ["/main.sh"]