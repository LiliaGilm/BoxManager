<?php
require_once 'boxManager.php';
$box = [
    2.5,
    1.5,
    4.0,
    1.5,
    1.0,
    2.0,
    1.0
];
$boxManager = new BoxManager();
BoxManager::getCount($box);






// В массиве содержится вес коробок которые должен увести курьер. За раз курьер не може увести более 2 коробок и 5 кг
// Нужно создать класс BoxManager который будет содержать статический метод getCount  который
//получает массив и выводит на экран количество выездов курьера