<?php

require_once './maharder/admin/index.php';



// Как добавить свои стили?
// 1. Вариант
// добавляем дополнительные стили в существующий массив: $variables['css'][] = htmlStatic("путь/к/стилям.css");
// тем самым добавив новый стиль к существующим
// 
// 2. Вариант
// создаём новый массив с новыми стилями и перезаписываем переменную для рендера
// $variables['css'] = htmlStatic($newCssArray); 

// Как добавить свои сkripty?
// 1. Вариант
// добавляем дополнительные скрипты в существующий массив: $variables['js'][] = htmlStatic("путь/к/скриптам.js", "html", "js");
// тем самым добавив новый скрипт к существующим
// 
// 2. Вариант
// создаём новый массив с новыми скриптами и перезаписываем переменную для рендера
// $variables['js'] = htmlStatic($newJssArray, "js"); 


$template = $mh_admin->load('base.html');
echo $template->render($variables);
