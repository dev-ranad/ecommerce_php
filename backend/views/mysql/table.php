<?php
include("../../layouts/header.views.php");

$category_obj = new Category();
if (isset($_POST['submit'])) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = $_POST['dbname'];
    $name = $_POST['name'];

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        $message = "Connection failed: " . mysqli_connect_error();
    }

    $sql = "CREATE TABLE $name (
            id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            category_id int,
            CONSTRAINT FK_Cat_SubCategory FOREIGN KEY (category_id) REFERENCES categories(id),
            name VARCHAR(30) NOT NULL,
            description VARCHAR(255) NOT NULL,
            status BOOLEAN,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
            )";

    if (mysqli_query($conn, $sql)) {
        $message = "Table $name created successfully";
    } else {
        $message = "Error creating table: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}

?>
<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <!-- Main-body start -->
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-header start -->
                <div class="page-header card">
                    <div class="card-block">
                        <h5 class="m-b-10">Table Create</h5>
                        <p class="text-muted m-b-10">Create your Table</p>
                        <ul class="breadcrumb-title b-t-default p-t-10">
                            <li class="breadcrumb-item">
                                <a href="../../index.php"> <i class="fa fa-home"></i> </a>
                            </li>
                            <li class="breadcrumb-item"><a href="index.php">Table</a>
                            </li>
                            <li class="breadcrumb-item"><a href="">Table Create</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Page-header end -->
                <!-- Input Grid card start -->
                <div class="card">
                    <div class="card-header">
                        <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                                <li><i class="fa fa-chevron-left"></i></li>
                                <li><i class="fa fa-window-maximize full-card"></i></li>
                                <li><i class="fa fa-minus minimize-card"></i></li>
                                <li><i class="fa fa-refresh reload-card"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-block">
                        <form action="" method="post">
                            <?php if (isset($message)) { ?>
                                <div class="form-group row">
                                    <div class="col"></div>
                                    <div class="col-sm-6">
                                        <?php echo $message; ?>
                                    </div>
                                    <div class="col"></div>
                                </div>
                            <?php } ?>
                            <div class="form-group row">
                                <div class="col"></div>
                                <div class="col-sm-6">
                                    <input type="text" name="dbname" class="form-control" placeholder="Database Name">
                                </div>
                                <div class="col"></div>
                            </div>
                            <div class="form-group row">
                                <div class="col"></div>
                                <div class="col-sm-6">
                                    <input type="text" name="name" class="form-control" placeholder="Name">
                                </div>
                                <div class="col"></div>
                            </div>
                            <div class="form-group row">
                                <div class="col"></div>
                                <div class="col-sm-1">
                                    <input type="submit" value="Create" name="submit" class="btn btn-primary">
                                </div>
                                <div class="col"></div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Input Grid card end -->
            </div>
        </div>
    </div>
</div>
<?php
include("../../layouts/footer.views.php");
?>