<?php  

	
        $sql = "SELECT * FROM tbl_contacts ORDER BY id DESC";
    
    
    $query = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($query);

?>
<section>
    <div class="container">
        <div class="row">      
            <div class="col-lg-12">
                
                <h2 style="text-align: center;">LIÊN HỆ</h2>

                <ol class="breadcrumb">
                    <li class="active">
                        <i class="fa fa-dashboard"></i> DANH SÁCH LIÊN HỆ
                    </li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-xs-12 col-sm-12 col-md-12">
            <?php 
		if (isset($_SESSION['check']) && $_SESSION['check'] == 1) {
	?>
		<div class="alert alert-danger noti_admin">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Thêm liên hệ</strong> thành công!
		</div>
	<?php
		}else if(isset($_SESSION['check']) && $_SESSION['check'] == 3){
	?>
		<div class="alert alert-danger noti_admin">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Xóa liên hệ</strong> thành công!
		</div>
	<?php
		}else if(isset($_SESSION['check']) && $_SESSION['check'] == 2){
	?>
		<div class="alert alert-danger noti_admin">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
			<strong>Cập nhập liên hệ</strong> thành công!
		</div>
	<?php
		}
		unset($_SESSION['check']);
	?>
            <div class="table-responsive">
				<table class="table table-hover">
					<?php if($count > 0){ ?>
					
					<thead>
						<tr>
							<th>STT</th>
							<th>ĐƠN VỊ/NGƯỜI PHỤ TRÁCH</th>
							<th>SỐ ĐIỆN THOẠI</th>
                            <th>Chi Tiết</th>
                            <th>CHỨC NĂNG</th>
						</tr>
					</thead>
					<tbody>
						<?php  
							$stt = 0;
							while ($row = mysqli_fetch_array($query)) {
								$stt += 1;
						?>
                        <tr>
                            <td><?php echo $stt; ?></td>
                            <td><a href="index.php?page=edit-contacts&id=<?php echo $row['id']; ?>"><?php echo $row['name']; ?></a></td>
                            <td><?php echo $row['phone']; ?></td>
                            <td><?php echo $row['detail']; ?></td>
                            <td>
                            <a href="index.php?page=edit-contacts&id=<?php echo $row['id']; ?>"><button class="btn btn-primary">Sửa</button></a>
                            <a onclick="return confirm('Bạn có muốn xóa liên hệ này không? ');" href="index.php?page=del-contacts&id=<?php echo $row['id']; ?>">
                                <button class="btn btn-danger">Xóa</button>
                            </a>
                            </td>
                        </tr>
						<?php
							}
						?>
						
					</tbody>
				<?php }else{
				?>
					<div class="alert alert-danger">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<strong>Dữ liệu</strong> không có!
					</div>
				<?php
				} ?>
				</table>
			</div>
            </div>
        </div>
    </div>
</section>