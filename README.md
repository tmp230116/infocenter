I. Task (quoted):

1) Создать базу данных где будут храниться города от 100 штук
2) Создать страницу где в popup окне будут выводиться список городов 
Создать поле типа input через которое будет фильтроваться города 
popup окно написанно должно быть без плагинов и фраемворков 
фильтрация должна быть написана на js 
подгрузка списка городов должна быть реализована через ajax

II. Result package:

Result package consist of:

a). "database.sql" - Query file for filling server database.
It must be executed on the Web-server for target database.

b). "infocenter_cities_request.php" - PHP-script which required for back-end
functionality. There are some constants needed to be setted up:
"DATABASE_HOST" - ip-address (or network path) to DB server;
"DATABASE_USER" - MySQL username (this user must have at least SELECT
privelegies for target DB!);
"DATABASE_PASSWORD" - password for DATABASE_USER account;
"DATABASE_NAME" - name of the target DB;
"SEARCH_RESULT_COUNT" - count of suggestion entrien for dynamic cities search.

c). "index.html" - main client file. Contains HTML/CSS markup, ECMA scrips,
hardcoded font and images. Need to be placed at the web-shared catalogue of your
Web-server.

All files are coded in UTF-8 with LF EOL convention.

Tested on stack of:
Apache 2.4.52 (PHP 8.1.1 stdlib + PHP 8.1.1 MySQL provider)
MariaDB 10.4.22 (tested DB with UTF8mb4 general_ci encoding)
Ungoogled-chromium/104.0.5112.81 (Slackware GNU/Linux 14.2)
