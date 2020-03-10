Включение и выключение модулей apache

Включение модуля
a2enmod dav

Выключенеие модуля
a2dismod dav

Рестарт apache
systemctl restart apache2

Настройки sql (Ubuntu)
/etc/mysql/my.cnf
Настройка Bitrix VM
/etc/my.cnf

[mysqld]
sql_mode=
innodb_strict_mode=OFF

примр файла

!includedir /etc/mysql/conf.d/
!includedir /etc/mysql/mysql.conf.d
[mysqld]
local-infile=0
sql_mode=
innodb_strict_mode=OFF



Перезапуск slq
systemctl restart mysql.service

Ошибка pcre.recursion_limit
В настройка php установить
pcre.jit = 0

Редирект на https
с добавлением слеша в конце

<VirtualHost 82.146.60.41:80>
	ServerName site.ru
	ServerAlias www.site.ru
	RedirectMatch permanent ^(.*[^\/])$ https://site.ru$1/
	RedirectMatch permanent ^/(.*)$ https://site.ru/$1
</VirtualHost>

Редиректы nginx
server {
	listen 5.253.60.226:80;
	server_name woodworkspb.ru www.woodworkspb.ru;
	rewrite ^(.*[^\/])? https://www.woodworkspb.ru$1/ permanent;
}
