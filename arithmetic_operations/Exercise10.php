<?php
echo "Geometry Calculator\n";
echo "1. Calculate the Area of a Circle\n";
echo "2. Calculate the Area of a Rectangle\n";
echo "3. Calculate the Area of a Triangle\n";
echo "4. Quit\n";
$choice = readline("Enter your choice (1-4) : ");

class Geometry{
    public static function circleArea(): float{
        $radius = (float) readline('Enter radius: ');

        if ($radius<0){
            echo "Radius cant be negative!";
            exit;
        }

        return $radius * 2 * M_PI;
    }

    public static function rectangleArea(): float{
        $length = (float) readline('Enter length: ');
        $width = (float) readline('Enter width: ');

        if ($length<0 OR $width<0){
            echo "Length and width cant be negative!";
            exit;
        }

        return $length * $width;
    }

    public static function triangleArea(): float
    {
        $base = (float) readline('Enter base length: ');
        $height = (float) readline('Enter height: ');

        if ($base<0 OR $height<0){
            echo "Base and height cant be negative!";
            exit;
        }

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