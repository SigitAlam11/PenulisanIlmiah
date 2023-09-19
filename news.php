<?php
session_start();
include('includes/config.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>News Portal | Home Page</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="./assets/css/style.css" />
    <link rel="icon" href="assets/images/image 1.svg" type="image/x-icon" />
    <link rel="shortcut icon" href="assets/images/image 1.svg" type="image/x-icon" />

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">

</head>

<body>
    <nav class="navbar navbar-expand-lg bg-white sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="./assets/images/image 1.svg" alt="" width="100px" />
            </a>
            <button class="navbar-toggler mr-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNews" aria-controls="navbarNews" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNews">
                <ul class="navbar-nav ms-auto ps-2 pe-2">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#about">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#blog">Kegiatan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#portfolio">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#team">Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#team">Berita</a>
                    </li>
                </ul>
                <a href="product.php" class="btn btn-outline-success ms-3">Produk Kami</a>
                <a href="daftar.html" class="btn btn-success ms-3">Daftar Sekarang</a>
            </div>
        </div>
    </nav>
    <!-- Navigation -->
    <!-- <?php include('includes/header.php'); ?> -->

    <!-- Page Content -->
    <div class="container">



        <div class="row" style="margin-top: 4%">

            <!-- Blog Entries Column -->
            <div class="col-md-8">

                <!-- Blog Post -->
                <?php
                if (isset($_GET['pageno'])) {
                    $pageno = $_GET['pageno'];
                } else {
                    $pageno = 1;
                }
                $no_of_records_per_page = 8;
                $offset = ($pageno - 1) * $no_of_records_per_page;


                $total_pages_sql = "SELECT COUNT(*) FROM tblposts";
                $result = mysqli_query($con, $total_pages_sql);
                $total_rows = mysqli_fetch_array($result)[0];
                $total_pages = ceil($total_rows / $no_of_records_per_page);


                $query = mysqli_query($con, "select tblposts.id as pid,tblposts.PostTitle as posttitle,tblposts.PostImage,tblcategory.CategoryName as category,tblcategory.id as cid,tblsubcategory.Subcategory as subcategory,tblposts.PostDetails as postdetails,tblposts.PostingDate as postingdate,tblposts.PostUrl as url from tblposts left join tblcategory on tblcategory.id=tblposts.CategoryId left join  tblsubcategory on  tblsubcategory.SubCategoryId=tblposts.SubCategoryId where tblposts.Is_Active=1 order by tblposts.id desc  LIMIT $offset, $no_of_records_per_page");
                while ($row = mysqli_fetch_array($query)) {
                ?>

                    <div class="card mb-4">
                        <img class="card-img-top" src="admin/postimages/<?php echo htmlentities($row['PostImage']); ?>" alt="<?php echo htmlentities($row['posttitle']); ?>">
                        <div class="card-body">
                            <h2 class="card-title">
                                <?php echo htmlentities($row['posttitle']); ?>
                            </h2>
                            <p><b>Category : </b> <a href="category.php?catid=<?php echo htmlentities($row['cid']) ?>"><?php echo htmlentities($row['category']); ?></a> </p>

                            <a href="news-details.php?nid=<?php echo htmlentities($row['pid']) ?>" class="btn btn-primary">Read More
                                &rarr;</a>
                        </div>
                        <div class="card-footer text-muted">
                            Posted on
                            <?php echo htmlentities($row['postingdate']); ?>

                        </div>
                    </div>
                <?php } ?>




                <!-- Pagination -->


                <ul class="pagination justify-content-center mb-4">
                    <li class="page-item"><a href="?pageno=1" class="page-link">First</a></li>
                    <li class="<?php if ($pageno <= 1) {
                                    echo 'disabled';
                                } ?> page-item">
                        <a href="<?php if ($pageno <= 1) {
                                        echo '#';
                                    } else {
                                        echo "?pageno=" . ($pageno - 1);
                                    } ?>" class="page-link">Prev</a>
                    </li>
                    <li class="<?php if ($pageno >= $total_pages) {
                                    echo 'disabled';
                                } ?> page-item">
                        <a href="<?php if ($pageno >= $total_pages) {
                                        echo '#';
                                    } else {
                                        echo "?pageno=" . ($pageno + 1);
                                    } ?> " class="page-link">Next</a>
                    </li>
                    <li class="page-item"><a href="?pageno=<?php echo $total_pages; ?>" class="page-link">Last</a></li>
                </ul>

            </div>

            <!-- Sidebar Widgets Column -->
            <?php include('includes/sidebar.php'); ?>
        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <?php include('includes/footer.php'); ?>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>

    </head>
</body>

</html>