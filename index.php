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
     class Accessory extends Product{
        public $materials;
        public $size;

        // CONSTRUCT ACCESSORY 
        function __construct($_name, $_image, $_available, $_price, $_materials, $_size){
            parent::__construct($_name, $_image, $_available, $_price);
            $this->materials = $_materials;
            $this->size = $_size;

        }
    }

    // CLASS CATEGORY 
    class Category{
        public $name;
        public $icon;

        function __construct($_name, $_icon,){
            $this->name = $_name;
            $this->icon = $_icon;
        }
    }

    // ARRAY CATEGORIES 
    $categories = [
        'cane' => new Category('cane','fas fa-dog'),
        'gatto' => new Category('gatto','fas fa-cat'),
        'uccello' => new Category('uccello','fas fa-dove'),
        'pesce' => new Category('pesce','fas fa-fish')
    ];

    $products = [
        'Canin_mini' => new Food ('Royal Canin Mini Adult', 'https://arcaplanet.vtexassets.com/arquivos/ids/284621/Mini-Adult.jpg?v=638182891693570000', true, 37.98, $categories['cane'], '550g', ['Prosciutto', 'Manzo']),

        'Almo_holistic' => new Food ('Almo Nature Holistic Maintenance Medium Large Tonno e Riso', 'https://arcaplanet.vtexassets.com/arquivos/ids/245173/almo-nature-holistic-cane-adult-medium-pollo-e-riso.jpg', true, 42.45, $categories['cane'], '600g', ['Riso', 'Pollo']),

        'Almo_nature' => new Food ('Almo Nature Cat Daily Lattina', 'https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg', true, 28.90, $categories['gatto'], '450g', ['Cereali', 'Vitello']),

        'Guppy' => new Food ('Mangime per Pesci Guppy in Fiocchi', 'https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg', true, 7.98, $categories['pesce'], '50g', ['Cereali', 'Pesce']),

        'Voliera' => new Accessory ('Voliera Wilma in Legno', 'https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg', true, 237.50, $categories['uccello'], 'Legno', '80x70x155 cm'),

        'EasyCrystal' => new Accessory ('Cartucce Filtranti per Filtro EasyCrystal', 'https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg', true, 3.98, $categories['pesce'], 'Materiale espando', 'ND'),

        'Kong' => new Toy ('Kong Classic', 'https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg', true, 17.98, $categories['cane'], 'Rimbalza', '9 x 10 cm'),

        'Trixie' => new Toy ('Topini di peluche Trixie', 'https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg', true, 23.45, $categories['gatto'], 'codina in corda', '9 x 10 cm'),
    ]
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