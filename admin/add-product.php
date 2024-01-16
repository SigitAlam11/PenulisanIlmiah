<?php
session_start();
include('includes/config.php');
error_reporting(0);
if (strlen($_SESSION['login']) == 0) {
    header('location:index.php');
} else {

    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];

        // Mengunggah gambar 1
        $targetDir = "uploads/"; // Ganti dengan direktori tujuan Anda
        $originalName1 = $_FILES['picture1']['name'];
        $ext1 = pathinfo($originalName1, PATHINFO_EXTENSION);
        $picture1 = uniqid() . "." . $ext1;
        $targetFilePath1 = $targetDir . $picture1;
        move_uploaded_file($_FILES['picture1']['tmp_name'], $targetFilePath1);

        // Mengunggah gambar 2
        $originalName2 = $_FILES['picture2']['name'];
        $ext2 = pathinfo($originalName2, PATHINFO_EXTENSION);
        $picture2 = uniqid() . "." . $ext2;
        $targetFilePath2 = $targetDir . $picture2;
        move_uploaded_file($_FILES['picture2']['tmp_name'], $targetFilePath2);

        // Mengunggah gambar 3
        $originalName3 = $_FILES['picture3']['name'];
        $ext3 = pathinfo($originalName3, PATHINFO_EXTENSION);
        $picture3 = uniqid() . "." . $ext3;
        $targetFilePath3 = $targetDir . $picture3;
        move_uploaded_file($_FILES['picture3']['tmp_name'], $targetFilePath3);
        $query = mysqli_query($con, "INSERT INTO tblproducts (name,description,price,quantity,picture1,picture2,picture3) values('$name','$description','$price','$quantity','$picture1','$picture2','$picture3')");
        if ($query) {
            $msg = "Produk Berhasil Ditambahkan";
        } else {
            $error = "Terdapat Kesalahan, Silahkan Tambahkan Ulang!";
        }
    }
?>


    <!DOCTYPE html>
    <html lang="en">

    <head>
        <title>P4S Purileisa| Add Product</title>
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="../plugins/switchery/switchery.min.css">
        <link rel="icon" href="assets/images/image 1.svg" type="image/x-icon" />
        <link rel="shortcut icon" href="assets/images/image 1.svg" type="image/x-icon" />
        <script src="assets/js/modernizr.min.js"></script>

    </head>

    <body class="fixed-left">
        <div id="wrapper">
            <?php include('includes/topheader.php'); ?>
            <?php include('includes/leftsidebar.php'); ?>
            <div class="content-page">
                <div class="content">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Add Product</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Admin</a>
                                        </li>
                                        <li>
                                            <a href="#">Product </a>
                                        </li>
                                        <li class="active">
                                            Add Product
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box">
                                    <h4 class="m-t-0 header-title"><b>Add Product </b></h4>
                                    <hr />
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <?php if ($msg) { ?>
                                                <div class="alert alert-success" role="alert">
                                                    <?php echo htmlentities($msg); ?>
                                                </div>
                                            <?php } ?>
                                            <?php if ($error) { ?>
                                                <div class="alert alert-danger" role="alert">
                                                    <?php echo htmlentities($error); ?>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <form class="form-horizontal" method="post" enctype="multipart/form-data">
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Product Name</label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" value="" name="name" required>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Description</label>
                                                    <div class="col-md-10">
                                                        <textarea class="form-control" rows="5" name="description" required></textarea>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Price</label>
                                                    <div class="col-md-10">
                                                        <input type="number" class="form-control" value="" name="price" required>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Picture 1</label>
                                                    <div class="col-md-10">
                                                        <input type="file" name="picture1">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Picture 2</label>
                                                    <div class="col-md-10">
                                                        <input type="file" name="picture2">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Picture 3</label>
                                                    <div class="col-md-10">
                                                        <input type="file" name="picture3">
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">&nbsp;</label>
                                                    <div class="col-md-10">

                                                        <button type="submit" class="btn btn-custom waves-effect waves-light btn-md" name="submit">
                                                            Submit
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- container -->
                </div> <!-- content -->
                <?php include('includes/footer.php'); ?>
            </div>
        </div>
        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>
        <script src="../plugins/switchery/switchery.min.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>

    </html>
<?php } ?>