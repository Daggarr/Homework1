<?php
echo "Geometry Calculator\n";
echo "1. Calculate the Area of a Circle\n";
echo "2. Calculate the Area of a Rectangle\n";
echo "3. Calculate the Area of a Triangle\n";
echo "4. Quit\n";
$choice = readline("Enter your choice (1-4) : ");

class Geometry{
    public static function circleArea(){
        $radius = (float) readline('Enter radius: ');

        return $radius * 2 * M_PI;
    }

    public static function rectangleArea(){
        $length = (float) readline('Enter length: ');
        $width = (float) readline('Enter width: ');

        return $length * $width;
    }

    public static function triangleArea(){
        $base = (float) readline('Enter base length: ');
        $height = (float) readline('Enter height: ');

        return $base * $height * 0.5;
    }
}

switch ($choice){
    case '1':
        echo Geometry::circleArea();
        break;
    case '2':
        echo Geometry::rectangleArea();
        break;
    case '3':
        echo Geometry::triangleArea();
        break;
    case '4':
        exit;
    default:
        echo "Invalid choice.\n";
        exit;
}