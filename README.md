## На чем написан

Back: PHP 8.0, фреймворк Laravel
Front: JavaScript, JQuery 3.6.4, HTML, CSS
Код страниц можно посмотреть по директории resouces/views. Код контроллеров можно посмотреть в app/Http/Controllers. js в public.

## О сайте

Сайт для продажи какого-либо ассортимента(в данном случае стилистика под цветочный магазин).

## Настройка

Для начала работы с сайтом нужно запустить его к примеру в OSPanel и произвести миграцию БД.
Для первичной настройки, вводим любую почту, далее копируем из БД код и логинимся с помощью него, затем меняем роль этого пользователя на "Админ".
Под ролью "Админ" открывается доступ к изменению каталога и отслеживанию заказов.
По умолчанию выдается роль "Пользователь".
Без авторизации из функционала будет доступен лишь просмотр каталога и постов.
Для отправки кода на почту необходимо подключить SMTP-сервер.

## Дополнительно

Есть роль поставщика, но она недоработана, можно проверить установив роль пользователя на "Поставщик"

