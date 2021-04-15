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


### Очистка boot раздела СentOS 7

Чтобы безопасно очистить от лишнего раздел /boot и не допустить его дальнейшего переполнения, необходимо проделать следующее:
1. Отредактируем /etc/yum.conf и установим:  
`installonly_limit=2`  
Это заставит пакетный менеджер держать только 2 последних ядра, включая используемое.
2. Оставим yum-utils и удалим старые ядра:  
`yum install yum-utils`  
`package-cleanup --oldkernels --count=2`

------------


### Обновление до BitrixVm 7.5  

1) консоль: `yum clean all && yum update`  
2) меню машины: `2. Configure localhost settings -> 6. Update server`


### Пути на виртуальной машине bitrix

Настройки mysql `/etc/mysql/conf.d/z_bx_custom.cnf` 

Модули Apache `/etc/php.d` 

------------


### Установка composer global

`php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"`  
`php composer-setup.php`  
`php -r "unlink('composer-setup.php');"`  
`mv composer.phar /usr/local/bin/composer`  
`chmod +x /usr/local/bin/composer`  
`composer -V`  

Оф. Документация Bitrix по composer https://dev.1c-bitrix.ru/learning/course/index.php?COURSE_ID=43&LESSON_ID=4637
