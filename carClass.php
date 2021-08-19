<!DOCTYPE html>
<html lang="en">
<body>
    <?php 
        class Car {
            public $color;
            public $model;

            public function __construct($color, $model) {
                $this->color = $color;
                $this->model = $model;
            }

            public function message() {
                return "Your car color is: " . $this->color . " model is: " . $this->model;
            }
        }

        $myCar = new Car("Silver","Toyota");
        echo $myCar->message();
        $myCar2 = new Car("Black","BMW");
        echo $myCar2->message();
    ?>
</body>
</html>