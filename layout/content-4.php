<div id="content-4" style="display: none;" class="col-xs-12 col-sm-12 col-lg-12">
    <div class="row" id="row2">

        <?php  

            $sql = "SELECT * FROM tbl_news WHERE status = 4  ORDER BY create_at  DESC    ";
            $query = mysqli_query($conn, $sql);
            ?>
            <?php  
            while ($row = mysqli_fetch_array($query)) {
            ?>
        <div class="col-xs-8 col-sm-6 col-lg-3" id="content-left-1">
            <div id="getdate">
                <?php $status = $row['status'];
                switch ($status) {
                case 1:
                    echo "Trung ương";
                    break;
                case 2:
                    echo "Tỉnh";
                    break;
                case 4:
                    echo "Huyện";
                    break;
                }
                ?>
            </div>
            <div class="thumbnail">
                <a href="index.php?page=detail&id=<?php echo $row['id']; ?>">
                    <img class="avt2" src="backend/images/<?php echo $row['avatar']; ?>" alt="" />
                    <div class="caption" id="cap2">
                        <h5><?php echo $row['title']; ?></h5>
                    </div>
                </a>
            </div>

        </div>
            <?php
            }
            ?>
    </div>
</div>
