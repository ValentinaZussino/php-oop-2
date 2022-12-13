<!-- fatto con l'aiuto di Leonardo, Lorenzo, Fabio -->

<?php
include_once __DIR__ . '/Models/Product.php';
include_once __DIR__ . '/Models/Food.php';
include_once __DIR__ . '/Models/Game.php';
include_once __DIR__ . '/Models/Kennel.php';




$categoryDog = new Category('cane', 'dog.png');
$categoryCat = new Category('gatto', 'cat.jpg');

// var_dump($categoryDog);
// var_dump($categoryCat);

$product = new Product('Scatoletta', 'dog.jpg', 2.85, $categoryDog);
// var_dump($product);

$foodDog = new Food('Scatoletta', 'scatoletta.jpg', 2.85, $categoryDog, 200, ['manzo', 'carote', 'patate'], '2023/12/20');
// var_dump($foodDog);

$gameDog = new Game('Pallina', 'pallina.jpg', 5.50, $categoryDog, '2x5.2cm', ['rubber']);
// var_dump($gameDog);

$kennelDog = new Kennel('Materassino', 'materassino.jpg', 19.99, $categoryDog, '90x63x18cm', ['polyester', 'faux fur']);
// var_dump($kennelDog);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Teko:wght@400;700&display=swap" rel="stylesheet">
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi' crossorigin='anonymous'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css' integrity='sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==' crossorigin='anonymous' referrerpolicy='no-referrer' />
    <link rel='stylesheet' href='./css/style.css'>
    <title>Shop</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-3">
                <div><?php echo $foodDog->getTitle() ?></div>
                <div><img src="./img/<?php echo $foodDog->category->getIcon() ?>" alt=""></div>
                <div><img src="./img/<?php echo $foodDog->getImage() ?>" alt=""></div>
                <div><?php echo $foodDog->getPrice() . ' Euro' ?></div>
                <div><?php echo $foodDog->getExpirationDate() ?></div>
                <div><?php foreach($foodDog->getIngredients() as $ingredient) echo $ingredient . ' ' ?></div>
                <div><?php echo $foodDog->getWeight() . ' gr' ?></div>
            </div>
            <div class="col-3">
                <div><?php echo $foodDog->getTitle() ?></div>
                <div><img src="./img/<?php echo $foodDog->category->getIcon() ?>" alt=""></div>
                <div><img src="./img/<?php echo $foodDog->getImage() ?>" alt=""></div>
                <div><?php echo $foodDog->getPrice() . ' Euro' ?></div>
                <div><?php echo $foodDog->getExpirationDate() ?></div>
                <div><?php foreach($foodDog->getIngredients() as $ingredient) echo $ingredient . ' ' ?></div>
                <div><?php echo $foodDog->getWeight() . ' gr' ?></div>
            </div>
            <div class="col-3">
                <div><?php echo $foodDog->getTitle() ?></div>
                <div><img src="./img/<?php echo $foodDog->category->getIcon() ?>" alt=""></div>
                <div><img src="./img/<?php echo $foodDog->getImage() ?>" alt=""></div>
                <div><?php echo $foodDog->getPrice() . ' Euro' ?></div>
                <div><?php echo $foodDog->getExpirationDate() ?></div>
                <div><?php foreach($foodDog->getIngredients() as $ingredient) echo $ingredient . ' ' ?></div>
                <div><?php echo $foodDog->getWeight() . ' gr' ?></div>
            </div>
            <div class="col-3">
                <div><?php echo $foodDog->getTitle() ?></div>
                <div><img src="./img/<?php echo $foodDog->category->getIcon() ?>" alt=""></div>
                <div><img src="./img/<?php echo $foodDog->getImage() ?>" alt=""></div>
                <div><?php echo $foodDog->getPrice() . ' Euro' ?></div>
                <div><?php echo $foodDog->getExpirationDate() ?></div>
                <div><?php foreach($foodDog->getIngredients() as $ingredient) echo $ingredient . ' ' ?></div>
                <div><?php echo $foodDog->getWeight() . ' gr' ?></div>
            </div>
        </div>
    </div>
</body>
</html>