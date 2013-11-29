#!/bin/bash
apt-get update
apt-get install nginx
apt-get install php5-fpm php5-cli php5-mysql -y
apt-get install php5-gd
cp .travis_nginx.conf /etc/nginx/nginx.conf
/etc/init.d/nginx restart
chmod 777 /home/travis/build/vo-yen-mulodo/testgit/fuel/app/logs
#cat /etc/php5/fpm/php.ini
mv /etc/php5/fpm/php.ini php.ini.old
cp /home/travis/.phpenv/versions/5.3.3/etc/php.ini /etc/php5/fpm/php.ini
/etc/init.d/php5-fpm restart
find / -name php.ini
