
<?php  
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $sql = "SELECT *FROM tbl_contacts WHERE id = $id";
        $query = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($query);

       if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $phone = $_POST['phone'];
            $detail = $_POST['detail'];
       

            $sql = "UPDATE tbl_contacts 
                    SET name = '$name', phone = '$phone', detail = '$detail' 
                    WHERE id = $id";
            $query = mysqli_query($conn, $sql);
            if ($query) {       
               $_SESSION['check'] = 2;
               header("Location: index.php?page=contacts");
            }
       }
    }

?>

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-dashboard"></i> Sửa bài viết
                </li>
            </ol>
        </div>

    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-lg-12 col-xs-12 col-sm-12 col-md-12">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name">Tiêu đề tin</label>
                    <input type="text" value="<?php echo $row['name']; ?>" required="" class="form-control" name="name" id="name" required="">
                </div>

                <div class="form-group">
                    <label for="phone">Số điện thoại</label>
                    <input type="text" value="<?php echo $row['phone']; ?>" required="" class="form-control" name="phone" id="phone" required="">
                </div>
                

                <div class="form-group">
                    <label for="detail">Chi tiết</label>
                    <input type="text" value="<?php echo $row['detail']; ?>" required="" class="form-control" name="detail" id="detail" required="">
                </div>
                
            
                <button type="submit" name="submit" class="btn btn-primary">Câp nhật</button>
            </form>
        </div>
    </div>
    <!-- /.row -->

</div>
