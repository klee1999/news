<?php  

	
	$sql = "SELECT * FROM tbl_contacts ORDER BY id ";
    
    
    $query = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($query);

?>
<section>
    <div class="container">
        <div class="row">      
            <div class="col-lg-12" style="padding-top:60px;">
                <h4 class="page-header" style="text-align: center;">
                ĐƯỜNG DÂY NÓNG PHÒNG, CHỐNG COVID-19
                </h4>
                <h4 style="text-align: center;">NGÀNH Y TẾ</h4>


                <ol class="breadcrumb" style="margin-top:40px">
                    <li class="active">
                        <i class="fa fa-dashboard"></i> DANH SÁCH LIÊN HỆ
                    </li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-xs-12 col-sm-12 col-md-12">
            <div class="table-responsive" style="color:#fff">
				<table class="table table-hover" >
					<?php if($count > 0){ ?>
					<thead>
						<tr>
							<th>STT</th>
							<th>ĐƠN VỊ/NGƯỜI PHỤ TRÁCH</th>
							<th>SỐ ĐIỆN THOẠI</th>
                            <th>CHI TIẾT</th>
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
									<td><a><?php echo $row['name']; ?></a></td>
									<td><?php echo $row['phone']; ?></td>
                                    <td><?php echo $row['detail']; ?></td>
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