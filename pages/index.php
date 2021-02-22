<?php include('../admin/partials/header.php'); ?>

<div id="header">

    <div class="header-items">
        <div class="header-item">
            <button type="submit" class="btn form-submit"><a class="text-white" href="login.php">Log
                    in</a></button>
        </div>
        <div class="header-item">
            <a href="#social">Contact Us</a>
        </div>
        <div class="header-item">
            <a href="#women-section">
                <img class="cart" src="../img/cart.png" alt="myCart">
            </a>
        </div>
    </div>

    <div class="brand-logo">
        <a href="index.php"><img src="../img/trac-logo.svg" alt="logo"></a>
    </div>

</div>

<!-- NAVBAR SECTION -->
<div id="navbar">
    <div class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="#top-select">Top Selects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#women-section">Women</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#men-section">Men</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>


<!-- TOP SELECTS SECTION -->
<div id="top-select">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <a href="cart.php">
                    <img src="../img/top-select/top-select1.jpg" class="top-select-img d-block" alt="top-select1">
                </a>
                <div class="carousel-caption ">
                    <p>CONTRAST</p>
                </div>
            </div>
            <div class="carousel-item">
                <a href="cart.php">
                    <img src="../img/top-select/top-select2.jpg" class=" top-select-img d-block" alt="top-select2">
                </a>
                <div class="carousel-caption d-none d-md-block">
                    <p>WESTERN ASIA</p>
                </div>
            </div>
            <div class="carousel-item">
                <a href="cart.php">
                    <img src="../img/top-select/top-select3.jpg" class="top-select-img d-block" alt="top-select3">
                </a>
                <div class="carousel-caption d-none d-md-block">
                    <p>COLORS</p>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- WOMEN SECTION -->

<div id="women-section">

    <h2 class="section-heading">WOMEN'S</h2>
    <div class="row card-collection">

        <div class="card col-lg-3 col-sm-6">
            <img src="../img/women/women1.jpg" class="card-img" alt="women1">
            <div class="card-body">
                <h5 class="card-title">$499 <br>
                    <strong>30% OFF</strong>
                </h5>
                <a href="cart.php"> <button class="add-to-cart" value="Red-Frok (F)">Add to cart</button></a>
            </div>
        </div>
        <div class="card col-lg-3 col-sm-6">
            <img src="../img/women/women2.jpg" class="card-img" alt="women2">
            <div class="card-body">
                <h5 class="card-title">$699<br>
                    <strong>69% OFF</strong>
                </h5>
                <a href="cart.php"><button class="add-to-cart" value="Black-Top (F)">Add to cart</button></a>
            </div>
        </div>
        <div class="card col-lg-3 col-sm-6">
            <img src="../img/women/women3.jpg" class="card-img" alt="women3">
            <div class="card-body">
                <h5 class="card-title">$749<br>
                    <strong>40% OFF</strong>
                </h5>
                <a href="cart.php"><button class="add-to-cart" value="Pink-Frok (F)">Add to cart</button></a>
            </div>
        </div>
        <div class="card col-lg-3 col-sm-6">
            <img src="../img/women/women4.jpg" class="card-img" alt="women4">
            <div class="card-body">
                <h5 class="card-title">$899<br>
                    <strong>10% OFF</strong>
                </h5>
                <a href="cart.php"><button class="add-to-cart" value="White-Hoodie (F)">Add to
                        cart</button></a>
            </div>
        </div>
    </div>

</div>

<!-- MEN SECTION -->

<div id="men-section">

    <h2 class="section-heading">MEN'S</h2>
    <div class="row card-collection">

        <div class="card col-lg-3 col-md-6">
            <img src="../img/men/men1.jpg" class="card-img" alt="men1">
            <div class="card-body">
                <h5 class="card-title">$499 <br>
                    <strong>30% OFF</strong>
                </h5>
                <a href="cart.php"><button class="add-to-cart" value="Retro-Pants (M)">Add to
                        cart</button></a>
            </div>
        </div>
        <div class="card col-lg-3 col-md-6">
            <img src="../img/men/men2.jpg" class="card-img" alt="men2">
            <div class="card-body">
                <h5 class="card-title">$699<br>
                    <strong>69% OFF</strong>
                </h5>
                <a href="cart.php"><button class="add-to-cart" value="Sweaters (M)">Add to cart</button></a>
            </div>
        </div>
        <div class="card col-lg-3 col-md-6">
            <img src="../img/men/men3.jpg" class="card-img" alt="men3">
            <div class="card-body">
                <h5 class="card-title">$749<br>
                    <strong>40% OFF</strong>
                </h5>
                <a href="cart.php"><button class="add-to-cart" value="Grey-Jacket (M)">Add to
                        cart</button></a>
            </div>
        </div>
        <div class="card col-lg-3 col-md-6">
            <img src="../img/men/men4.jpg" class="card-img" alt="men4">
            <div class="card-body">
                <h5 class="card-title">$899<br>
                    <strong>10% OFF</strong>
                </h5>
                <a href="cart.php"><button class="add-to-cart" value="Coral-Coat (M)">Add to cart</button></a>
            </div>
        </div>
    </div>
</div>

<!-- SOCIAL MEDIA -->

<div id="social">

    <div class="social-icons">
        <a href="https://www.instagram.com/">
            <img class="social-icon" src="../img/social/instagram.png" alt="instagram">
        </a>
        <a href="https://www.linkedin.com/feed/">
            <img class="social-icon" src="../img/social/linkedin.png" alt="Linkedin">
        </a>

        <a href="https://github.com/vatsal-git/Fashion-Track">
            <img class="social-icon" src="../img/social/github.png" alt="Github">
        </a>
    </div>

    <div class="feedback">
        <a href="contact.php">
            <h5>Please write a Feedback -></h5>
        </a>
    </div>
</div>

<?php include('../admin/partials/footer.php'); ?>