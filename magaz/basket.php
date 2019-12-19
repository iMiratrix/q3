<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/4361691883.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style/basket.css">
    <title>Magaz</title>
</head>
<body>

<header>

    <div class="wrap-logo">
        <a href="index.php" class="logo">Magaz</a>
    </div>
    <nav>
        <a class="" href="index.php">Главная</a>
        <a href="signUp.php">Регистрация</a>
        <a href="basket.php">Корзина</a>
    </nav>

</header>

<main>

    <div class="shopping-cart">

        <div class="title">
            Ваша корзина
        </div>

        Товар #1
        <div class="item" id="item">
            <div class="buttons">
                <span class="delete-btn" onclick="del()"><i class="far fa-trash-alt"></i></span>
            </div>

            <div class="image">
                <img src="img/1017285601.jpg" alt="" width=""/>
            </div>

            <div class="description">
                <span>Common Projects</span>
                <span>Bball High</span>
                <span>White</span>
            </div>

            <div class="quantity" id="quantity">
                <button class="plus-btn" type="button" name="button" onclick="plus()">
                    <i class="fas fa-plus"></i>
                </button>
                <input type="text" name="name" value="1" id="val">
                <button class="minus-btn" type="button" name="button" onclick="minus()">
                    <i class="fas fa-minus"></i>
                </button>
            </div>
            <div class="total-price" id="total-price">$549</div>
        </div>
    </div>

    </div>
</main>
<script src="js/js.js"></script>
<script src="js/js1.js">
</script>
</body>


