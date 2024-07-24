FROM nginx:stable-alpine

ADD ./dockerfiles/nginx/default.conf /etc/nginx/conf.d/default.conf

RUN mkdir -p /var/www/html
