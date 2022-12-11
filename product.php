<?php

session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function getProduct($itemId)
{
    $serverhost = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "shop";

    // Create connection
    $connect = new mysqli($serverhost, $username, $password, $dbname);

    // Begin prepare statement
    $sql = "SELECT * FROM products WHERE ID = ?";
    $stmt = $connect->prepare($sql);

    // Bind passed variable to prepare statement
    $stmt->bind_param("s", $itemId);
    $stmt->execute();
    $result = $stmt->get_result();
    $product = $result->fetch_assoc();
    return $product;
}

$itemId = $_GET['itemId'];
$result = getProduct($itemId);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" , href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" , integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" , crossorigin="anonymous">
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
    <title>Apex SkateShop</title>


<body>

    <?php include __DIR__ . "/bars/header.php"; ?>

    <section style="background-image: url(src/images/skateshop.jpg)">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-4">
                    <div class="card text-black">
                        <i class="fab fa-apple fa-lg pt-3 pb-1 px-3"></i>
                        <img src="<?php echo $result['image'] ?>" alt="skateboard" />
                        <div class="card-body">
                            <div class="text-center">
                                <h5 class="card-title">Apex skateshop</h5>
                                <p class="text-muted mb-4"><?php echo $result['name'] ?></p>
                            </div>
                            <div>
                                <div class="d-flex justify-content-between">
                                    <span>R <?php echo $result['price'] ?></span>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <span><?php echo $result['description'] ?></span>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between total font-weight-bold mt-4">
                                <span>Rating </span><span><?php echo $result['rating'] ?>/10</span>
                            </div>
                            <button class="btn btn-outline-dark" type="button" href="#">product.php?itemId=<?php echo $item['id'] ?>">
                                <i class="bi-cart-fill me-1"></i>
                                add to Cart
                                <span class="badge bg-dark text-white ms-1 rounded-pill"></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2022</p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <?php include __DIR__ . "/bars/footer.php"; ?>
</body>

</html>