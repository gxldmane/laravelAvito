# Проект "Avito-подобный сайт на Laravel"

Этот проект представляет собой веб-приложение, разработанное на Laravel, которое служит аналогом популярного сайта объявлений Avito. Он использует базу данных MySQL для хранения информации о объявлениях, пользователях и других сущностях.

## Особенности

- Создание и управление объявлениями.
- Регистрация и аутентификация пользователей.
- Категоризация объявлений.
- Детали объявлений с изображениями и контактной информацией.
- Интеграция с базой данных MySQL.

## Требования

- PHP >= 10
- MySQL
- Composer (для установки зависимостей)
- Laravel (подробнее о настройке см. в разделе "Установка")

## Установка

1. Клонируйте репозиторий:

   ```bash
   git clone https://github.com/gxldmame/laravelAvito.git
   ```

2. Перейдите в директорию проекта:

   ```bash
   cd laravelAvito
   ```

3. Установите зависимости с помощью Composer:

   ```bash
   composer install
   ```

4. Создайте файл `.env` на основе `.env.example` и настройте соединение с базой данных MySQL:

   ```bash
   cp .env.example .env
   ```

   Отредактируйте `.env`:

   ```ini
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=your_database_name
   DB_USERNAME=your_database_username
   DB_PASSWORD=your_database_password
   ```

5. Сгенерируйте ключ приложения:

   ```bash
   php artisan key:generate
   ```

6. Выполните миграции для создания таблиц в базе данных:

   ```bash
   php artisan migrate
   ```
6.1 (Опцианально) Запустите фабрики для заполнения бд:

 ```bash
   php artisan migrate:fresh --seed
   ```

7. Запустите веб-сервер Laravel:

   ```bash
   php artisan serve
   ```

   По умолчанию, приложение будет доступно по адресу http://127.0.0.1:8000/.

## Использование

1. Зарегистрируйтесь или войдите, чтобы размещать объявления.
2. Добавьте объявление, указав категорию, название, описание и другие детали.
3. Фильтруйте обьявления
4. Просматривайте детали объявлений и связывайтесь с продавцами.

## Дополнительные настройки

Вы можете настроить многое в этом проекте, такое как добавление дополнительных функциональностей, улучшение интерфейса и т.д. Чтобы узнать больше о Laravel, посетите [официальную документацию Laravel](https://laravel.com/docs).

## Автор

[gxldmane]
---
