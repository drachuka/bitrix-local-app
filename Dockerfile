FROM php:8.2-cli

WORKDIR /app

COPY . .

# Включаем веб-сервер
CMD php -S 0.0.0.0:10000
