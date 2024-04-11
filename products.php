<!DOCTYPE html>
<html lang="en">

<head>
    <?php
     $page ="Product";
    include 'inc/meta.php';
    ?>
    <title>OUR PRODUCTS || CHIC THE BOTANICAL BEAUTY</title>
</head>

<body>

   
    <?php
    include 'inc/header.php';
    ?>

    <div class="breadcrumb-section">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home </a><i class="fa-solid fa-chevron-right"></i></li>
                    <li class="breadcrumb-item active" aria-current="page">Our Products </li>
                </ol>
            </nav>
        </div>
    </div>


    <?php
    include 'inc/product.php';
    include 'inc/insta.php';
    include 'inc/footer.php';
    ?>

    <script src="assets/js/jquery-3.6.0.min.js"></script>

    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>

    <script src="assets/js/jquery.fancybox.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/slick.js"></script>

    <script src="assets/js/swiper-bundle.min.js"></script>

    <script src="assets/js/jquery.fancybox.min.js"></script>

    <script src="assets/js/main.js"></script>
</body>

</html>