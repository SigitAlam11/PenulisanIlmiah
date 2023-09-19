<?php
session_start();
include('includes/config.php');


$query = mysqli_query($con, "SELECT * FROM tblproducts");


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>P4SPurileisa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/produk.css">
    <link rel="icon" href="assets/images/image 1.png" type="image/x-icon">
    <link rel="shortcut icon" href="assets/images/image 1.png" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar">

    <div class="container">
        <div class="headdaftar">
            <h1 class="text-center text-success font-weight-bold">Produk Kami<br> apa yang kami buat pasti Bermanfaat!
            </h1>
            <p>Produk kami adalah produk yang terbuat dari bahan alam dan juga pemanfaatan bahan tersebut berguna untuk
                memastikan tidak adanya pembuangan limbah yang tidak berarti namun lebih ke arah pemanfaatan sehingga
                dapat menjadi produk yang bermanfaat bagi kehidupan kita!</p>
        </div>
    </div>
    </nav>


    <div class="content-product">
        <div class="row">
            <?php
            while ($row = mysqli_fetch_assoc($query)) {
            ?>
                <!-- Product -->
                <div class="col-md-12 mb-4">
                    <div class="product-item">
                        <div class="row">
                            <div class="col-md-6">
                                <div id="<?php echo $carouselID; ?>" class="carousel slide product-image" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <?php
                                        // Mengambil gambar dari database
                                        $images = array($row['picture1'], $row['picture2'], $row['picture3']);

                                        foreach ($images as $index => $image) {
                                            $activeClass = ($index === 0) ? 'active' : '';
                                        ?>
                                            <div class="carousel-item <?php echo $activeClass; ?>">
                                                <img src="admin/uploads/<?php echo $image; ?>" alt="Product Image<?php echo $index + 1; ?>" class="carousel-image" />
                                            </div>
                                        <?php
                                        }
                                        ?>
                                    </div>

                                    <button class="carousel-control-prev" type="button" data-bs-target="#<?php echo $carouselID; ?>" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#<?php echo $carouselID; ?>" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="product-detail">
                                    <div class="text-product-detail px-2">
                                        <h1>
                                            <?php echo $row['name']; ?>
                                        </h1>
                                        <h2>Rp
                                            <?php echo $row['price']; ?>
                                        </h2>
                                        <p>
                                            <?php echo $row['description']; ?>
                                        </p>
                                    </div>
                                    <button class="buy-btn mx-auto fw-bold">Beli Sekarang</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>



    <!-- Product 1 -->
    <!-- <div class="content-product d-flex">
        <div id="productCarousel" class="carousel slide product-image">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#productCarousel" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#productCarousel" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#productCarousel" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#productCarousel" data-bs-slide-to="3"
                    aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./assets/images/produk.png" alt="produk" class="carousel-image" />
                </div>
                <div class="carousel-item">
                    <img src="./assets/images/produk.png" alt="produk" class="carousel-image" />
                </div>
                <div class="carousel-item">
                    <img src="./assets/images/produk.png" alt="produk" class="carousel-image" />
                </div>
                <div class="carousel-item">
                    <img src="./assets/images/produk.png" alt="produk" class="carousel-image" />
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#productCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#productCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="product-detail">
            <div class="text-product-detail px-2">
                <h1>Produk Alami</h1>
                <h2>Rp 10.000/botol</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur. Viverra a mauris convallis in et. Volutpat amet ut
                    scelerisque leo
                    congue ut suspendisse amet amet. Tempor molestie mattis metus pellentesque nullam aliquam. Arcu
                    dictum
                    ipsum ante euismod ut et orci lacus.
                </p>
            </div>
            <button class="buy-btn mx-auto fw-bold">Beli Sekarang</button>
        </div>
    </div> -->
    <!-- product-content -->
    <!-- <div class="content-product">
        <div id="productCarousel2" class="carousel slide product-image">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#productCarousel2" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#productCarousel2" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#productCarousel2" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#productCarousel2" data-bs-slide-to="3"
                    aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./assets/images/produk.png" alt="produk" class="carousel-image" />
                </div>
                <div class="carousel-item">
                    <img src="./assets/images/produk.png" alt="produk" class="carousel-image" />
                </div>
                <div class="carousel-item">
                    <img src="./assets/images/produk.png" alt="produk" class="carousel-image" />
                </div>
                <div class="carousel-item">
                    <img src="./assets/images/produk.png" alt="produk" class="carousel-image" />
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#productCarousel2" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#productCarousel2" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="product-detail">
            <div class="text-product-detail px-2">
                <h1>Produk Alami</h1>
                <h2>Rp 10.000/botol</h2>
                <p>
                    Lorem ipsum dolor sit amet consectetur. Viverra a mauris convallis in et. Volutpat amet ut
                    scelerisque leo
                    congue ut suspendisse amet amet. Tempor molestie mattis metus pellentesque nullam aliquam. Arcu
                    dictum
                    ipsum ante euismod ut et orci lacus.
                </p>
            </div>
            <button class="buy-btn mx-auto fw-bold">Beli Sekarang</button>
        </div>
    </div>
    </div> -->

    <!-- FOOTER -->
    <?php include('includes/footer.php'); ?>
    
</body>

</html>