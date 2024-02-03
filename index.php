<?php 
    // CLASS PRODUCT 
    class Product{
        public $name;
        public $image;
        public $available;
        public $price;
        // CONSTRUCT PRODUCT 
        function __construct($_name, $_image, $_available, $_price){
            $this->name = $_name;
            $this->image = $_image;
            $this->available = $_available;
            $this->price = $_price;
        }
    }
    // CLASS FOOD 
    class Food extends Product{
        public $weight;
        public $ingredients;

        // CONSTRUCT FOOD 
        function __construct($_name, $_image, $_available, $_price, $_weight, $_ingredients){ 
            parent::__construct($_name, $_image, $_available, $_price);
            $this->weight = $_weight;
            $this->ingredients = $_ingredients;

        }
    }
    // CLASS TOY 
    class Toy extends Product{
        public $features;
        public $size;

        // CONSTRUCT TOY 
        function __construct($_name, $_image, $_available, $_price, $_features, $_size){
            parent::__construct($_name, $_image, $_available, $_price);
            $this->features = $_features;
            $this->size = $_size;

        }
    }
     // CLASS ACCESSORY
     class accessory extends Product{
        public $materials;
        public $size;

        // CONSTRUCT ACCESSORY 
        function __construct($_name, $_image, $_available, $_price, $_materials, $_size){
            parent::__construct($_name, $_image, $_available, $_price);
            $this->materials = $_materials;
            $this->size = $_size;

        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    
</body>
</html>