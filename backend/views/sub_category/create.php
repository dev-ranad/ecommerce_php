<?php
include("../../layouts/header.views.php");

$sub_category_obj = new SubCategory();
$category_data = $sub_category_obj->categories();
if (isset($_POST['submit'])) {
    $message = $sub_category_obj->create($_POST);
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
                        <h5 class="m-b-10">Sub Category Create</h5>
                        <p class="text-muted m-b-10">Create your Sub Categories</p>
                        <ul class="breadcrumb-title b-t-default p-t-10">
                            <li class="breadcrumb-item">
                                <a href="../../index.php"> <i class="fa fa-home"></i> </a>
                            </li>
                            <li class="breadcrumb-item"><a href="index.php">Sub Category</a>
                            </li>
                            <li class="breadcrumb-item"><a href="">Sub Category Create</a>
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
                                    <select type="select" name="category_id" class="form-control">
                                        <option>Select One..</option>
                                        <?php while ($category = mysqli_fetch_assoc($category_data)) { ?>
                                            <option value="<?php echo $category['id'] ?>"><?php echo $category['name'] ?></option>
                                        <?php } ?>
                                    </select>
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
                                <div class="col-sm-6">
                                    <input type="text" name="description" class="form-control" placeholder="Description">
                                </div>
                                <div class="col"></div>
                            </div>
                            <div class="form-group row">
                                <div class="col"></div>
                                <div class="col-sm-6">
                                    <select name="status" class="form-control" id="">
                                        <option value="1">Published</option>
                                        <option value="0">Unpublished</option>
                                    </select>
                                </div>
                                <div class="col"></div>
                            </div>
                            <div class="form-group row">
                                <div class="col"></div>
                                <div class="col-sm-1">
                                    <input type="submit" value="Save" name="submit" class="btn btn-primary">
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