<?php
include("../../layouts/header.views.php");

$category_obj = new Category();
$data = $category_obj->index();

if (isset($_GET['sender'])) {
    $id = $_GET['id'];
    if ($_GET['sender'] == 'update_status') {
        $status = $_GET['status'];
        $category_obj->update_status($id, $status);
    } elseif ($_GET['sender'] == 'delete') {
        $message = $category_obj->delete($id, null);
    }
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
                        <h5 class="m-b-10">Category List</h5>
                        <p class="text-muted m-b-10">Manage your Categories</p>
                        <ul class="breadcrumb-title b-t-default p-t-10">
                            <li class="breadcrumb-item">
                                <a href="../../index.php"> <i class="fa fa-home"></i> </a>
                            </li>
                            <li class="breadcrumb-item"><a href="index.php">Category</a>
                            </li>
                            <li class="breadcrumb-item"><a href="">Category List</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Page-header end -->
                <!-- Hover table card start -->
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
                    <div class="card-block table-border-style">
                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while ($category = mysqli_fetch_assoc($data)) { ?>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td><?php echo $category['name']; ?></td>
                                            <td><?php echo $category['description']; ?></td>
                                            <td>
                                                <?php if ($category['status'] == 0) { ?>
                                                    <a class="btn btn-sm btn-info" href="?sender=update_status&&id=<?php echo $category['id']; ?>&&status=0">Published</a>
                                                <?php } else { ?>
                                                    <a class="btn btn-sm btn-warning" href="?sender=update_status&&id=<?php echo $category['id']; ?>&&status=1">Unpublished</a>
                                                <?php } ?>
                                            </td>
                                            <td>
                                                <a class="btn btn-sm btn-success" href="edit.php?sender=edit&&id=<?php echo $category['id']; ?>">Edit</a>
                                                <a class="btn btn-sm btn-danger" href="?sender=delete&&id=<?php echo $category['id']; ?>">Delete</a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Hover table card end -->
            </div>
        </div>
    </div>
</div>
<?php
include("../../layouts/footer.views.php");
?>