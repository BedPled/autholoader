<?php

require_once dirname(__DIR__) . '/autholoader.php';

$shape1 = new \shapes\circle(5);
$shape2 = new \shapes\square(5);

echo "Радиус окружности: $shape1->radius <br>
      Диаметр окружности: {$shape1->get_diametr()}<br>
      Площадь окружности: {$shape1->get_area()} <br>
      Длина окружности: {$shape1->get_length()}<br><br>";

echo "Сторона квадрата: $shape2->side_length <br>
      Периметр квадрата: {$shape2->get_perimeter()}<br>
      Площадь квадрата: {$shape2->get_area()}<br>
      Диоганаль квадрата: {$shape2->get_diagonal()}<br>";
