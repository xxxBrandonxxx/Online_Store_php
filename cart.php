

<?php

function getAllProducts() {
    $serverhost = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "shop";

    // Create connection
    $connect = new mysqli($serverhost, $username, $password, $dbname);

    // Begin prepare statement
    $sql = "SELECT * FROM products";
    $result = mysqli_query($connect, $sql);
    return mysqli_fetch_all ($result, MYSQLI_ASSOC);
}
$results = getAllProducts();
?>


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" , href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" , integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" , crossorigin="anonymous">
    <link rel="stylesheet" href="src/styles.css">
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
    <title>Apex SkateShop</title>
</head>


<body>
<body id="wallpaperLogin"> <?php include __DIR__ . "/bars/header.php"; ?>
    <main>
        <!-- Hero -->
        <div class="jumbotron mt-5 p-3 p-md-5 text-dark bg-light">
            <div class="col-md-6 px-0">
                <h1 class="display-4">Your shopping <i>Cart</i></h1>
                <p class="lead my-3">You Have no Skate Equipment here</p>
            </div>
        </div>
        <!-- Hero END -->

    <!-- Cart List  -->
    <div class="table-responsive m-5">

<table class="table table-hover table-responsive-md">
<?php if(!empty($_SESSION['Cart'])) : ?>
    <thead>
        <tr>
            <th>Game Name</th>
            <th>Platform</th>
            <th>Rating</th>
            <th>Genre</th>
            <th>Price</th>
        </tr>
    </thead>
    <?php endif ?>
    <tbody class="table-group-divider">
        <?php $cart_total = 0; ?>
        <?php if (!empty($_SESSION['Cart'])) : ?>
            <?php foreach ($_SESSION['Cart'] as $id) : ?>
                <?php $item = new Product($id); ?>
                <?php $cart_total = $cart_total + $item->getPrice(); ?>
                <tr>
                    <td><?= $item->getName() ?></td>
                    </td>
                    <td><?= $item->getRating() ?></td>
                    <td>R <?= $item->getPrice() ?></td>
                    <td>
                        <form action="./processing/remove-cart-item.php" method="post">
                            <input type="hidden" name="productId" value="<?= $item->getId() ?>">
                            <button type="submit" name="Submit" class="btn btn-light">
                                <i class="fa-solid fa-trash-can"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            <?php endforeach ?>
        <?php else : ?>
        <?php endif ?>
    </tbody>
    <?php if(!empty($_SESSION['Cart'])) : ?>
        <thead>
            <tr>
                <th></th>
                <th></th>
                <th></th>
                <th>Total</th>
                <th>R <?= $cart_total ?></th>
                <th><form action="./processing/cart-pay.php" method="post">
                        <button type="submit" name="Submit" class="btn btn-light">
                            <i>Pay</i>
                        </button>
                    </form>
                </th>
            </tr>
        </thead>
    <?php endif ?>
</table>
<?php if(!empty($_SESSION['Cart'])) : ?>
    <form action="./processing/clear-cart.php" method="post">
        <button type="submit" name="Submit" class="btn btn-primary">
            Clear Cart
        </button>
    </form>
<?php endif ?>
</div>
</main>

    <?php include __DIR__ . "/bars/footer.php"; ?>
</body>

</html>