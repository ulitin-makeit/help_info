### Включение и выключение модулей apache
*Зачастую нужно на серверах ubuntu*
*У битрикса свои технологии безопасности*


Включение модуля
**a2enmod dav**

Выключенеие модуля
**a2dismod dav**

Рестарт apache
`systemctl restart apache2`

------------


### Настройки sql

**Ubuntu** `/etc/mysql/my.cnf`

**Настройка Bitrix VM** `/etc/my.cnf`

```
[mysqld]
innodb_strict_mode = OFF
```

**Перезапуск slq**
`systemctl restart mysql.service`

------------

### Ошибка pcre.recursion_limit
В настройка php установить
`pcre.jit = 0`

------------


### Редирект на https с добавлением слеша в конце

**Apache**
```
<VirtualHost 82.146.60.41:80>
	ServerName site.ru
	ServerAlias www.site.ru
	RedirectMatch permanent ^(.*[^\/])$ https://site.ru$1/
	RedirectMatch permanent ^/(.*)$ https://site.ru/$1
</VirtualHost>
```

**Nginx**
```
server {
	listen 5.253.60.226:80;
	server_name woodworkspb.ru www.woodworkspb.ru;
	rewrite ^(.*[^\/])? https://www.woodworkspb.ru$1/ permanent;
}
```

------------


### Изменения языка консоли CentOS 7 на UTF-8 RU

Меняем язык `localectl set-locale LANG=ru_RU.UTF-8` 

Перезагружаем сервер `reboot` 

------------


### Пути на виртуальной машине bitrix

Настройки mysql `/etc/mysql/conf.d/z_bx_custom.cnf` 

Модули Apache `/etc/php.d` 

------------


### Настройки xdebug на виртуальной машиене Bitrix

`/etc/php.d/15-xdebug.ini`

#### на локальной машине

file **15-xdebug.ini**

```
zend_extension=xdebug.so
xdebug.remote_enable=on
xdebug.remote_connect_back=on
```

##### на удалённом сервере

file **15-xdebug.ini**

```
zend_extension=xdebug.so
xdebug.remote_enable=on
xdebug.remote_host=127.0.0.1
```

проброс тунеля на удалённый сервер `ssh -R 83.220.172.223:9000:127.0.0.1:9000 root@83.220.172.223`
