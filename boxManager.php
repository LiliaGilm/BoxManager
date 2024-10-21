<?php
require_once 'main.php';
class BoxManager
{
public const MAX_COUNT = 2;
public const MAX_WEIGHT = 5.0;


   /* public static function getCount($boxes): void
    {
        for ($i = 0; $i < count($boxes); $i++) {
            $weight = 5.0;
            if ($boxes[$i] < $weight) {
                $boxArray =+ $boxes[$i];
                $boxsCount++;
                self::$trepsCount++;
            }
            if ($boxes[$i] == $weight) {
                self::$trepsCount++;
            }
                else{
                echo "Вес превышан" . PHP_EOL;
                return;
            }
                echo "Количество поездок составляет: " . self::$trepsCount . PHP_EOL;
        }
}
   */

    public static function getCount($boxes): void
    {
        $trips = 0;
        $i = 0;
        while ($i < count($boxes)) {
            $currentBox = $boxes[$i];
          $i++;

          if ($i < count($boxes) && ($currentBox + $boxes[$i] < self::MAX_WEIGHT)){
              echo "номер i: $i " . PHP_EOL;
              echo 'мы здесь' . PHP_EOL;
              $i++;
          }
          $trips++;
          echo "значение трип $trips". PHP_EOL;
        }
        echo $trips . PHP_EOL;
    }
}


