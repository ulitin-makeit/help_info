<?php

// Запрет сбора статистики
define(NO_KEEP_STATISTIC, true);
// Отключение проверки прав на доступ к файлам и каталогам
define(NOT_CHECK_PERMISSIONS, true);
// Установка id сайта
define(LID, 's1');

$_SERVER['DOCUMENT_ROOT'] = '/home/bitrix/www';

// Подключаем ядро
require($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php');

// Снятие ограничение времени выполнения скрипта
set_time_limit(0);

// Сброс буферов
while (ob_get_level()) {
	ob_end_flush();
}

// Снятие ограничения на память
ini_set('memory_limit', -1);

// Снятие ограничение на выполнения скрипта
set_time_limit(0);

while () {
	// Вывод в консоль
	echo $i . PHP_EOL;
	flush();
}
