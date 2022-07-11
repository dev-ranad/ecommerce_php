<?php
include("../../layouts/header.views.php");
?>
<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <!-- Main-body start -->
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-header start -->
                <div class="page-header card">
                    <div class="card-block">
                        <h5 class="m-b-10">Product Create</h5>
                        <p class="text-muted m-b-10">Create your Products</p>
                        <ul class="breadcrumb-title b-t-default p-t-10">
                            <li class="breadcrumb-item">
                                <a href="index.html"> <i class="fa fa-home"></i> </a>
                            </li>
                            <li class="breadcrumb-item"><a href="#!">Product</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#!">Product Create</a>
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
                        <form>
                            <div class="form-group row">
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="col">
                                </div>
                                <div class="col-sm-4">
                                    <input type="text" class="form-control" placeholder="col-sm-4">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="col">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="col">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" placeholder="col-sm-6">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="col">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" placeholder="col-sm-8">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="col">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="col">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="col">
                                </div>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" placeholder="col-sm-10">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="col">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary" >Primary button</button>
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