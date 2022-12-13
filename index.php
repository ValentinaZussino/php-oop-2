<!-- fatto con l'aiuto di Leonardo, Lorenzo, Fabio -->

<?php
include_once __DIR__ . '/Models/Product.php';
include_once __DIR__ . '/Models/Food.php';
include_once __DIR__ . '/Models/Game.php';
include_once __DIR__ . '/Models/Kennel.php';


$categoryDog = new Category('cane', 'icondog.png');
$categoryCat = new Category('gatto', 'cat.png');

// var_dump($categoryDog);
// var_dump($categoryCat);

$product = new Product('Scatoletta', 'dog.jpg', 2.85, $categoryDog);
// var_dump($product);

$foodDog = new Food('Scatoletta Pedigree', 'scatoletta.jpg', 2.85, $categoryDog, 200, ['manzo', 'carote', 'patate'], '2023/12/20');
// var_dump($foodDog);
$foodCat = new Food('Natural Trainer Secco', 'catfood.jpg', 2.99, $categoryCat, 300, ['anatra', 'ananas', 'mirtillo'], '2025/8/20');

$gameDog = new Game('Pallina', 'ball.jpg', 5.50, $categoryDog, '2x5.2', ['gomma']);
// var_dump($gameDog);
$gameDog2 = new Game('Gioco strategico', 'doggame2.jpg', 5.92, $categoryDog, '29', ['plastica']);
$gameCat = new Game('Tiragraffi con pallina a circuito', 'catgame.jpg', 14.90, $categoryCat, '7,5 x 23,5', ['plastica', 'cartone', 'gomma']);

$kennelDog = new Kennel('Cuccia morbida', 'cuccia-04.jpg', 19.99, $categoryDog, '90x63x18', ['poliestere', 'eco-pelliccia']);
// var_dump($kennelDog);
$kennelCat = new Kennel('Cuccia morbida', 'bed.jpg', 23, $categoryCat, '100x65x20', ['poliestere']);

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
    <div class="container py-5">
        <h1 class="text-center">MaxiZoo Shop</h1>
        <div class="card-group my-5">
            <div class="card position-relative">
                <img src="./img/<?php echo $foodDog->getImage() ?>" alt="">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $foodDog->getTitle() ?></h5>
                    <p class="card-text"><?php echo "<span>Ingredienti: </span>"; foreach($foodDog->getIngredients() as $ingredient) echo $ingredient . ' ' ?></p>
                    <p class="card-text"><?php echo "<span>Peso: </span>"; echo $foodDog->getWeight() . ' gr' ?></p>
                    <p class="card-text"><?php echo "<span>Scadenza: </span>"; echo $foodDog->getExpirationDate() ?></p>    
                </div>
                <div class="card-footer">
                    <small class="text-muted"><?php echo "<span>Prezzo: </span>"; echo $foodDog->getPrice() . ' Euro' ?></small>
                </div>
                <div class="vz_icon_dog">
                    <img src="./img/<?php echo $foodDog->category->getIcon() ?>" alt="">
                </div>
            </div>
            <div class="card position-relative">
                <img src="./img/<?php echo $gameDog->getImage() ?>" alt="">
                <div class="card-body">
                <h5 class="card-title"><?php echo $gameDog->getTitle() ?></h5>
                <p class="card-text"><?php echo "<span>Composizione: </span>"; foreach($gameDog->getMaterial() as $material) echo $material . ' ' ?></p>
                <p class="card-text"><?php echo "<span>Dimensioni: </span>"; echo $gameDog->getSize() . ' cm' ?></p> 
                </div>
                <div class="card-footer">
                <small class="text-muted"><?php echo "<span>Prezzo: </span>"; echo $gameDog->getPrice() . ' Euro' ?></small>
                </div>
                <div class="vz_icon_dog">
                    <img src="./img/<?php echo $gameDog->category->getIcon() ?>" alt="">
                </div>
            </div>
            <div class="card position-relative">
                <img src="./img/<?php echo $foodCat->getImage() ?>" alt="">
                <div class="card-body">
                <h5 class="card-title"><?php echo $foodCat->getTitle() ?></h5>
                <p class="card-text"><?php echo "<span>Ingredienti: </span>"; foreach($foodCat->getIngredients() as $ingredient) echo $ingredient . ' '  ?></p>
                <p class="card-text"><?php echo "<span>Peso: </span>"; echo $foodCat->getWeight() . ' gr' ?></p>    
                <p class="card-text"><?php echo "<span>Scadenza: </span>"; echo $foodCat->getExpirationDate() ?></p>    
                </div>
                <div class="card-footer">
                <small class="text-muted"><?php echo "<span>Prezzo: </span>"; echo $foodCat->getPrice() . ' Euro' ?></small>
                </div>
                <div class="vz_icon_cat">
                    <img src="./img/<?php echo $foodCat->category->getIcon() ?>" alt="">
                </div>
            </div>
            <div class="card position-relative">
                <img src="./img/<?php echo $kennelDog->getImage() ?>" alt="">
                <div class="card-body">
                <h5 class="card-title"><?php echo $kennelDog->getTitle() ?></h5>
                <p class="card-text"><?php echo "<span>Composizione: </span>"; foreach($kennelDog->getMaterial() as $material) echo $material . ' '  ?></p>
                <p class="card-text"><?php echo "<span>Dimensioni: </span>"; echo $kennelDog->getSize() . ' cm' ?></p>    
                </div>
                <div class="card-footer">
                <small class="text-muted"><?php echo "<span>Prezzo: </span>"; echo $foodDog->getPrice() . ' Euro' ?></small>
                </div>
                <div class="vz_icon_dog">
                    <img src="./img/<?php echo $kennelDog->category->getIcon() ?>" alt="">
                </div>
            </div>
        </div>
        <div class="card-group my-5">
            <div class="card position-relative">
                <img src="./img/<?php echo $gameCat->getImage() ?>" alt="">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $gameCat->getTitle() ?></h5>
                    <p class="card-text"><?php echo "<span>Composizione: </span>"; foreach($gameCat->getMaterial() as $material) echo $material . ' ' ?></p>
                    <p class="card-text"><?php echo "<span>Dimensioni: </span>"; echo $gameCat->getSize() . ' cm' ?></p>    
                </div>
                <div class="card-footer">
                    <small class="text-muted"><?php echo "<span>Prezzo: </span>"; echo $gameCat->getPrice() . ' Euro' ?></small>
                </div>
                <div class="vz_icon_cat">
                    <img src="./img/<?php echo $gameCat->category->getIcon() ?>" alt="">
                </div>
            </div>
            <div class="card position-relative">
                <img src="./img/<?php echo $kennelCat->getImage() ?>" alt="">
                <div class="card-body">
                <h5 class="card-title"><?php echo $kennelCat->getTitle() ?></h5>
                <p class="card-text"><?php echo "<span>Composizione: </span>"; foreach($kennelCat->getMaterial() as $material) echo $material . ' ' ?></p>
                <p class="card-text"><?php echo "<span>Dimensioni: </span>"; echo $kennelCat->getSize() . ' cm' ?></p> 
                </div>
                <div class="card-footer">
                <small class="text-muted"><?php echo "<span>Prezzo: </span>"; echo $kennelCat->getPrice() . ' Euro' ?></small>
                </div>
                <div class="vz_icon_cat">
                    <img src="./img/<?php echo $kennelCat->category->getIcon() ?>" alt="">
                </div>
            </div>
            <div class="card position-relative">
            <img src="./img/<?php echo $foodDog->getImage() ?>" alt="">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $foodDog->getTitle() ?></h5>
                    <p class="card-text"><?php echo "<span>Ingredienti: </span>"; foreach($foodDog->getIngredients() as $ingredient) echo $ingredient . ' ' ?></p>
                    <p class="card-text"><?php echo "<span>Peso: </span>"; echo $foodDog->getWeight() . ' gr' ?></p>
                    <p class="card-text"><?php echo "<span>Scadenza: </span>"; echo $foodDog->getExpirationDate() ?></p>    
                </div>
                <div class="card-footer">
                    <small class="text-muted"><?php echo "<span>Prezzo: </span>"; echo $foodDog->getPrice() . ' Euro' ?></small>
                </div>
                <div class="vz_icon_dog">
                    <img src="./img/<?php echo $foodDog->category->getIcon() ?>" alt="">
                </div>
            </div>
            <div class="card position-relative">
                <img src="./img/<?php echo $gameDog2->getImage() ?>" alt="">
                <div class="card-body">
                <h5 class="card-title"><?php echo $gameDog2->getTitle() ?></h5>
                <p class="card-text"><?php echo "<span>Composizione: </span>"; foreach($gameDog2->getMaterial() as $material) echo $material . ' ' ?></p>
                <p class="card-text"><?php echo "<span>Dimensioni: </span>"; echo $gameDog2->getSize() . ' cm' ?></p> 
                </div>
                <div class="card-footer">
                <small class="text-muted"><?php echo "<span>Prezzo: </span>"; echo $gameDog2->getPrice() . ' Euro' ?></small>
                </div>
                <div class="vz_icon_dog">
                    <img src="./img/<?php echo $gameDog2->category->getIcon() ?>" alt="">
                </div>
            </div>
        </div>
    </div>
</body>
</html>