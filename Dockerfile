FROM tiagofranca/php-81-fpm-dev:22-06-01

USER  root

# Set working directory
WORKDIR /var/www/app

RUN apt-get -qq update

## Install dependencies
RUN DEBIAN_FRONTEND=noninteractive apt-get install -y zip 
    
# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

##################################################
## Install extensions

RUN docker-php-ext-install pdo_mysql

RUN rm -rf /tmp/pear
##################################################

# Copy existing application directory contents
COPY . /var/www/app

# Copy existing application directory permissions
COPY --chown=www:www . /var/www/app

# Change current user to www
USER www

# Expose port 9000, start php-fpm server and others
EXPOSE 9000 8000 8080
CMD ["php-fpm"]
