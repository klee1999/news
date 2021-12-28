<?php  

	if (isset($_POST['submit_search'])) {
        $key = $_POST['keyw'];
        $sql = "SELECT *FROM tbl_news WHERE title LIKE '%$key%' ORDER BY create_at DESC";
    }else{
        $sql = "SELECT *FROM tbl_news ORDER BY create_at DESC";
    }
    
    $query = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($query);

?>

<div class="container-fluid">
	 <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
               TIN TỨC
            </h1>   
            <ol class="breadcrumb">
                <li class="active">
                     DANH SÁCH BÀI VIẾT
                </li>
            </ol>
        </div>

    </div>
    <!-- /.row -->

	<div class="row">
        <div class="col-lg-12 col-xs-12 col-sm-12 col-md-12">
			<div class="table-responsive">
				<table class="table table-hover" style="color:#fff">
					<?php if($count > 0){ ?>
					<thead>
						<tr>
							<th>STT</th>			
							<th>Tiêu đề bài viết</th>
							<th>Ngày đăng</th>
							<th>Loại tin</th>
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
									
									<td><a href="index.php?page=detail&id=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a></td>
									<td><?php echo date('d-m-Y H:m:s', strtotime($row['create_at'])); ?></td>
									<td>
										<?php if($row['status'] == 1)
												{ echo "<p style='color: green;font-weight: bold;'>Trung ương</p>"; }
										else{ if($row['status'] == 2)
												{ echo "<p style='color: green;font-weight: bold;'>Tỉnh</p>"; } 
												else{
													if($row['status'] == 3)
												{ echo "<p style='color: green;font-weight: bold;'>Sở, ngành</p>"; }
													else{ echo "<p style='color:green;font-weight:bold;'>Huyện - Thị xã - Thành phố</p>";}
												}
											}
										?>
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
						<strong>Không tìm thấy </strong> bài viết!
					</div>
				<?php
				} ?>
				</table>
			</div>

		</div>
    </div>
	

</div>