<?php
include("../../layouts/header.views.php");


$category_obj = new Category();
if (isset($_GET['sender'])) {
    $id = $_GET['id'];
    if ($_GET['sender'] == 'edit') {
        $category = $category_obj->edit($id);
    }
}
if (isset($_POST['submit'])) {
    $message = $category_obj->update($_POST);
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
                        <h5 class="m-b-10">Category Edit</h5>
                        <p class="text-muted m-b-10">Edit your Categories</p>
                        <ul class="breadcrumb-title b-t-default p-t-10">
                            <li class="breadcrumb-item">
                                <a href="../../index.php"> <i class="fa fa-home"></i> </a>
                            </li>
                            <li class="breadcrumb-item"><a href="index.php">Category</a>
                            </li>
                            <li class="breadcrumb-item"><a href="">Category Edit</a>
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
                            <input type="hidden" name="id" class="form-control" value="<?php echo $category['id']; ?>">
                            <div class="form-group row">
                                <div class="col"></div>
                                <div class="col-sm-6">
                                    <input type="text" name="name" class="form-control" value="<?php echo $category['name']; ?>">
                                </div>
                                <div class="col"></div>
                            </div>
                            <div class="form-group row">
                                <div class="col"></div>
                                <div class="col-sm-6">
                                    <input type="text" name="description" class="form-control" value="<?php echo $category['description']; ?>">
                                </div>
                                <div class="col"></div>
                            </div>
                            <div class="form-group row">
                                <div class="col"></div>
                                <div class="col-sm-1">
                                    <input type="submit" value="Update" name="submit" class="btn btn-primary">
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