find . -name "*.jpg" -delete

find . -name "install" -type d -exec rm -r "{}" \;

find . -type d -empty -delete

### Создание архива из одной папки (каталога)

Команда tar сопровождается рядом опций, когда архив создается из каталога. Далее приведен пример использования команды tar:

`tar -cvf Имя.tar /путь/к/каталогу`

`tar` — команда, которая запускает архиватор Tar.

`c` — опция, которая отвечает за создание файла с расширением .tar. Эта опция всегда идет первой.

`v` — опция, которая отвечает за вывод на экран подробной информации. То есть в процессе архивирования на экране будут отображаться файлы, которые отправляются в файл с расширением .tar. Вводите эту опцию по желанию.

`f` — опция, которая отвечает за присвоение имени файлу с расширением .tar. Эта опция всегда идет последней.

`Имя.tar` — это имя архива. Введите любое имя по своему желанию, но в конце имени не забудьте добавить расширение .tar. К имени файла можно также добавить путь к файлу, если вы хотите создать архив в другой директории (то есть отличной от текущей).

`/путь/к/каталогу` — это путь к каталогу, из которого создается архив. Этот путь соотносится с вашим текущим каталогом.

### Распаковка архива

`tar -xvf`
