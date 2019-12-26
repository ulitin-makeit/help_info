Включение и выключение модулей apache

Включение модуля
a2enmod dav

Выключенеие модуля
a2dismod dav

Рестарт apache
systemctl restart apache2

Настройки sql (Ubuntu)
/etc/mysql/my.cnf

[mysqld]
sql_mode=
innodb_strict_mode=OFF

Перезапуск slq
systemctl restart mysql.service
