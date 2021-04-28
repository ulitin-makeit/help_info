Вариант импотра ядра с исключением лишних файлов

```bash
rsync -a --exclude '*.js' --exclude '*.css' --exclude '*.scss' --exclude '*.jpg' --exclude '*.jpeg' --exclude '*.bmp' --exclude '*.svg' --exclude '*.gif' --exclude '*.png' --exclude 'lang/*' --exclude 'install/*' --exclude 'fonts/*' --exclude 'managed_cache/*' --exclude 'cache/*' --exclude 'wizards/*' --exclude 'sounds/*' --exclude 'backup/*' --exclude 'themes/*' --exclude 'stack_cache/*' root@marvel.loc:/home/bitrix/www/bitrix/ ./bitrix/
```
