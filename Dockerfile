FROM php:8-cli

# install composer
RUN apt-get update \
    && apt-get install -y git zip \
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /app

# install dependencies
COPY composer.json composer.json
RUN composer install --prefer-dist --no-scripts --no-dev --no-autoloader && rm -rf /root/.composer
COPY . ./
RUN composer dump-autoload --no-scripts --no-dev --optimize

# ADD ./ .
# RUN php /usr/local/bin/composer install

# make app globally executable
RUN ln -s /app/app /usr/local/bin/app

CMD ["php", "-a"]
