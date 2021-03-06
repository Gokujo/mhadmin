<?php

// Настройка хлебных крошек
// Крошки это массив с массивами, которые содержат информацию о ссылке (url) и её названии (name)
// Крошки добавляются в каждом файле модуля с исключением самого главного

$logs = [
	'2.0' => [
		'Полностью новая админпанель, которая не зависит от оформления и функционала самой DLE',
		'Необходим модуль DLE-API для дальнейшего использования',
		'За основу панели был взят движок Twig, создавать свои шаблоны будет проще',
		'Очищать кеш в админке стало проще - кнопка была выведена в ряд с "Добавить новость" и "Редактировать новости"',
//		'Внедрён i18n в систему DLE, это даёт возможность создавать мультиязычные сайты (модуль отдельно продаваться или делаться не будет)',
//		'i18n: не зависит от базы данных, все фразы хранятся в файлах json',
//		'i18n: в шаблонах достаточно использовать тег {trans text="сюда переводимый текст"}, чтобы перевести фразу',
//		'i18n: в скриптах PHP достаточно использовать функцию translate("сюда переводимый текст"), чтобы перевести фразу',
//		'i18n: в скриптах JS достаточно использовать функцию translateJS("сюда переводимый текст"), чтобы перевести фразу. Желательно подгружать фразы при загруженной странице, т.к. async не доработан',
//		'i18n: мультиязычность поддерживается в "Новости", "Баннеры", "Категории", "Электорнная почта / Рассылки", "Метатеги", "Опросы", "Вопросы и ответы", "Статические страницы", "Группы пользователей", а так-же вывод новостей и статических страниц на сайте',
//		'i18n: поддерживается машинный перевод через сервис RapidApi',
//		'i18n: динамичное использование, не требующее массивов данных - достаточно указать текст',
	],
	'1.7.1' => [
		'небольшой фикс в языковом файле',
	],
	'1.7' => [
		'Обновление иконок от fontawesome глобально',
		'Обновление многих функций',
		'Добавление языковых файлов (в дальнейшем будет проще локализовать модули)',
		'Добавлен немецкий язык к оболочке',
	],
	'1.6' => [
		'Фикс',
	],
	'1.5' => [
		'Новые модальные и всплывающие окна',
		'Улучшены некоторые функции',
		'Добавлен скрипт DateTimePicker',
		'Добавлены несколько украшательств',
	],
	'1.4' => [
		'Вывод категорий',
	],
	'1.3' => [
		'Автоматический вывод доп. полей в админке',
		'Автоматический вывод пользователей',
		'Исправлены баги в JS',
	],
	'1.1' => [
		'Обновление до актуальных версий DLE',
		'Мелкие правки',
	],
	'1.0.0' => [
		'Основной релиз',
	],
];

$modVars = [
	'title' => 'История изменений',
	'module_icon' => 'fad fa-robot',
	'logs' => $logs,
];

$breadcrumbs[] = [
	'name' => $modVars['title'],
	'url' => THIS_SELF.'?sites=changelog',
];

$htmlTemplate = 'modules/changelog.html';