#!/bin/bash

rm /etc/nginx/sites-enabled/*
cp /var/www/mazor/nginx_autoindex_off.conf /etc/nginx/sites-enabled/
service nginx restart