FROM php:8.1-fpm

# copiar composer.lock y composer.json
COPY composer.lock composer.json /var/www/

# establecer directorio de trabajo
WORKDIR /var/www

RUN apt-get update \
  && apt-get install -y  \
    curl \
    unzip \
    zlib1g-dev \
    libmemcached-dev \
    libz-dev \
    libjpeg-dev \
    libpng-dev \
    libfreetype6-dev \
    libssl-dev \
    libmcrypt-dev \
    libxml2-dev \
    libzip-dev \
  && rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-install zip
RUN docker-php-ext-install pdo_mysql
RUN docker-php-ext-install bcmath
RUN docker-php-ext-install gd

COPY --from=mlocati/php-extension-installer /usr/bin/install-php-extensions /usr/bin/
RUN install-php-extensions imagick

# Instalar composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# añadir usuario para la aplicacion laravel
RUN groupadd -g 1000 www
RUN useradd -u 1000 -ms /bin/bash -g www www

# copiar el contenido del directorio de la aplicacion existente
COPY . /var/www

#  copiar  aplicacion y establecer permisos
COPY --chown=www:www . /var/www

# cambiar usuario actual a www
USER www

# abir puerto 9000 y empezar proceso php-fpm server
EXPOSE 9000
CMD ["php-fpm"]
