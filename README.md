Установка интернет магазина
---------------
Для установки 

1. В командной строке напишем `init`. Загружаем базу, база находиться в папке DATABASE
2. Добавляем базу данных в  `components['db']` она находиться `common/config/main-local.php`.
3. становим миграцию `yii migrate`.
4. Установка в Веб сервак:

- для frontend `/path/to/shop/frontend/web/`  URL `http://shop.local/`
- для  backend `/path/to/shop/backend/web/`   URL `http://admin.shop.local/`

Админка: 
- Login:        admin  
- password:  230230
- Потом можете регнусться и дальше работать ))) 