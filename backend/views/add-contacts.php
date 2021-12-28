<div class="container-fluid">    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                LIÊN HỆ
            </h1>

            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> Thêm mới liên hệ
                </li>
            </ol>
        </div>

    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-lg-12 col-xs-12 col-sm-12 col-md-12">
            <form action="" method="POST" enctype="multipart/form-data">
            
                <div class="form-group">
                    <label for="">Tiêu đề </label>
                    <input type="text" required="" class="form-control" name="name"  required="">
                </div>

                <div class="form-group">
                    <label for="">Số điện thoại</label>
                    <input type="number" required="" class="form-control" name="phone"  required="">
                </div>
                 
                <div class="form-group">
                    <label for="">Ghi Chú</label>
                    <input type="text" required="" class="form-control" name="detail" required="">
                </div>

                <button type="submit" name="submit" class="btn btn-primary">Thêm mới</button>
            </form>
        </div>
    </div>
    <!-- /.row -->

</div>

<?php  
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $detail = $_POST['detail'];
       
        $sql = "INSERT INTO tbl_contacts(name, phone, detail) VALUES('$name', '$phone', '$detail')";
        $query = mysqli_query($conn, $sql);
        if ($query) {
           $_SESSION['check'] = 1;
           header("Location: index.php?page=contacts");
        }
     }

    

?>