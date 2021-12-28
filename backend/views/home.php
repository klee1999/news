<?php  
    // Số lượng tin tức
    $sql_news = "SELECT COUNT(id) as id FROM tbl_news";
    $query_news = mysqli_query($conn, $sql_news);
    $rs_news = mysqli_fetch_array($query_news);

    // Số lượng thành viên
    $sql_users = "SELECT COUNT(id) as id FROM tbl_users";
    $query_users = mysqli_query($conn, $sql_users);
    $rs_users = mysqli_fetch_array($query_users);

    // Số lượng liên hệ
    $sql_contacts = "SELECT COUNT(id) as id FROM tbl_contacts";
    $query_contacts = mysqli_query($conn, $sql_contacts);
    $rs_contacts = mysqli_fetch_array($query_contacts);


   

?>


<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Tổng quan <small>hệ thống</small>
            </h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> Dashboard
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

    <div class="row">
        
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-yellow">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-newspaper-o fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge"><?php if($rs_news['id']  > 0) { echo $rs_news['id']; } ?></div>
                            <div>Tin Tức</div>
                        </div>
                    </div>
                </div>
                <a href="index.php?page=news">
                    <div class="panel-footer">
                        <span class="pull-left">Xem chi tiết</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-green">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-user fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge"><?php if($rs_contacts['id']  > 0) { echo $rs_contacts['id']; } ?></div>
                            <div>Liên hệ!</div>
                        </div>
                    </div>
                </div>
                <a href="index.php?page=contacts">
                    <div class="panel-footer">
                        <span class="pull-left">Xem chi tiết</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="panel panel-red">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="fa fa-user fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge"><?php if($rs_users['id']  > 0) { echo $rs_users['id']; } ?></div>
                            <div>thành viên!</div>
                        </div>
                    </div>
                </div>
                <a href="index.php?page=users">
                    <div class="panel-footer">
                        <span class="pull-left">Xem chi tiết</span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </div>

    </div>
    <!-- /.row -->

</div>