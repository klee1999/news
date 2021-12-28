<?php  
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM tbl_news WHERE id = $id";
    $query = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($query);
  }
?>

<section id="details" class="details" style="overflow:auto;background: #1b1d1f;">
    <div class="container-fiuld" style="padding-top: 40px;">
        <div class="container" id="ctn">
            <div class="portfolio-description" style="color:#c3beb6">
                <h2 style="font-size:24px;font-weight:500">
                    <?php echo $row['title']; ?>
                </h2>
                <h3 style="font-size:14px">
                    <?php echo "Ngày đăng : ",'<span style="color:red;text-align:center;">' , $row['create_at'] ,'</span>' ?>
                </h3>
                <p style="font-size:14px ;padding-top:20px">
                    <?php echo $row['description']; ?>
                </p>
            </div>
            <div>
                <h3 style="color:blue">Tin liên quan</h3>
                <?php  
 
             $sql = "SELECT * FROM tbl_news WHERE id != $id ORDER BY create_at  DESC  ";
            $query = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($query);

            ?>
                <a  href="index.php?page=detail&id=<?php echo $row['id']; ?>">

                    <p><?php echo $row['title']; ?></p>
                </a>
            </div>
        </div>

    </div>

</section>