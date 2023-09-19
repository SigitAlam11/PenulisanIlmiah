<?php
session_start();
include('includes/config.php');
error_reporting(0);
if (strlen($_SESSION['login']) == 0) {
    header('location:index.php');
} else {
    if (isset($_POST['update'])) {
        $catid = intval($_GET['cid']);
        $name = $_POST['name'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $quantity = $_POST['quantity'];

        $targetDir = "uploads/"; // Ganti dengan direktori tujuan Anda

        // Mengunggah gambar 1
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

        $query = mysqli_query($con, "UPDATE tblproducts SET name='$name', description='$description', price='$price', quantity='$quantity', picture1='$picture1', picture2='$picture2', picture3='$picture3' WHERE id='$catid'");

        if ($query) {
            $msg = "Product updated";
        } else {
            $error = "Something went wrong. Please try again.";
        }
    }
    ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">
        <!-- App title -->
        <title>Newsportal | Edit Product</title>
        <!-- Summernote css -->
        <link href="../plugins/summernote/summernote.css" rel="stylesheet" />
        <!-- Select2 -->
        <link href="../plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <!-- Jquery filer css -->
        <link href="../plugins/jquery.filer/css/jquery.filer.css" rel="stylesheet" />
        <link href="../plugins/jquery.filer/css/themes/jquery.filer-dragdropbox-theme.css" rel="stylesheet" />
        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="../plugins/switchery/switchery.min.css">
        <script src="assets/js/modernizr.min.js"></script>
        <script>
            function getSubCat(val) {
                $.ajax({
                    type: "POST",
                    url: "get_subcategory.php",
                    data: 'catid=' + val,
                    success: function (data) {
                        $("#subcategory").html(data);
                    }
                });
            }
        </script>
    </head>

    <body class="fixed-left">
        <!-- Begin page -->
        <div id="wrapper">
            <!-- Top Bar Start -->
            <?php include('includes/topheader.php'); ?>
            <!-- Left Sidebar Start -->
            <?php include('includes/leftsidebar.php'); ?>
            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Edit Product</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Admin</a>
                                        </li>
                                        <li>
                                            <a href="#">Product</a>
                                        </li>
                                        <li class="active">
                                            Edit Product
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box">
                                    <h4 class="m-t-0 header-title"><b>Edit Product</b></h4>
                                    <hr />

                                    <div class="row">
                                        <div class="col-sm-6">

                                        </div>
                                    </div>
                                    <!-- Success Message -->
                                    <?php if ($msg) { ?>
                                        <div class="alert alert-success" role="alert">
                                            <strong>Well done!</strong>
                                            <?php echo htmlentities($msg); ?>
                                        </div>
                                    <?php } ?>
                                    <!-- Error Message -->
                                    <?php if ($error) { ?>
                                        <div class="alert alert-danger" role="alert">
                                            <strong>Oh snap!</strong>
                                            <?php echo htmlentities($error); ?>
                                        </div>
                                    <?php } ?>
                                    <?php
                                    $catid = intval($_GET['cid']);
                                    $query = mysqli_query($con, "SELECT * FROM tblproducts WHERE id='$catid'");
                                    while ($row = mysqli_fetch_array($query)) {
                                        ?>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <form class="form-horizontal" name="" method="post"
                                                    enctype="multipart/form-data">
                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label">Product Name</label>
                                                        <div class="col-md-10">
                                                            <input type="text" class="form-control"
                                                                value="<?php echo htmlentities($row['name']); ?>" name="name"
                                                                required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label">Description</label>
                                                        <div class="col-md-10">
                                                            <textarea class="form-control" rows="5" name="description"
                                                                required><?php echo htmlentities($row['description']); ?></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label">Price</label>
                                                        <div class="col-md-10">
                                                            <input type="number" class="form-control"
                                                                value="<?php echo htmlentities($row['price']); ?>" name="price"
                                                                required>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-md-2 control-label">Quantity</label>
                                                        <div class="col-md-10">
                                                            <input type="number" class="form-control"
                                                                value="<?php echo htmlentities($row['quantity']); ?>"
                                                                name="quantity" required>
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
                                                            <button type="submit" name="update"
                                                                class="btn btn-success waves-effect waves-light">Update</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- container -->
                </div>
                <!-- content -->
                <?php include('includes/footer.php'); ?>
            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->
        </div>
        <!-- END wrapper -->
        <script>
            var resizefunc = [];
        </script>
        <!-- jQuery -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>
        <script src="../plugins/switchery/switchery.min.js"></script>
        <!-- Summernote js -->
        <script src="../plugins/summernote/summernote.min.js"></script>
        <!-- Select 2 -->
        <script src="../plugins/select2/js/select2.min.js"></script>
        <!-- Jquery filer js -->
        <script src="../plugins/jquery.filer/js/jquery.filer.min.js"></script>
        <!-- page specific js -->
        <script src="assets/pages/jquery.blog-add.init.js"></script>
        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>
        <script>
            jQuery(document).ready(function () {
                $('.summernote').summernote({
                    height: 240,
                    minHeight: null,
                    maxHeight: null,
                    focus: false
                });
                $(".select2").select2();
                $(".select2-limiting").select2({
                    maximumSelectionLength: 2
                });
            });
        </script>
        <script src="../plugins/switchery/switchery.min.js"></script>
        <!-- Summernote js -->
        <script src="../plugins/summernote/summernote.min.js"></script>
    </body>

    </html>
<?php } ?>