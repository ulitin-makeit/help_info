### Настройки xdebug на виртуальной машиене Bitrix

`/etc/php.d/15-xdebug.ini`

#### на локальной машине

file **15-xdebug.ini**

```
zend_extension=xdebug.so
xdebug.remote_enable=on
xdebug.remote_connect_back=on
```

#### на удалённом сервере

file **15-xdebug.ini**

```
zend_extension=xdebug.so
xdebug.remote_enable=on
xdebug.remote_host=127.0.0.1
```

проброс тунеля на удалённый сервер `ssh -R 83.220.172.223:9000:127.0.0.1:9000 root@83.220.172.223`
