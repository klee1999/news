<div id="content-2" style="display: none;" class="col-xs-12 col-sm-12 col-lg-12">
    <div class="row">
        <div class="col-sm-12 col-lg-6 " id="content-left-1">
            <?php   
            $sql="SELECT * FROM tbl_news  WHERE status = 1 ORDER BY  create_at DESC LIMIT 1 " ;
            $result=$conn->query($sql);
            if($result->num_rows>0)
                {
                while($row=$result->fetch_assoc())
                {
            ?>
            <div>
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
                <a href="index.php?page=detail&id=<?php echo $row['id']; ?>">
                    <img src="backend/images/<?php echo $row['avatar']; ?>" class="avt3" style="height: 400px;" alt="" />
                    <div class="caption" id="cap" style=" border-radius: 0px;margin-right: 5px;    height: 130px;">
                        <h5> <?php echo $row['title']; ?></h5>
                        
                    </div>
                </a>
            </div>
            <?php
                }
                }  else
                {  
                    ?>
            <h1 style="text-align: center; color:#c3beb6">Hiện tại không có bài viết! </h1>
            <?php
            } 
            ?>
        </div>

        <div class="col-sm-12 col-lg-3 " id="content-left-1">
            <?php   
      $sql="SELECT * FROM tbl_news WHERE status = 1 ORDER BY create_at DESC LIMIT 1,1 " ;
      $result=$conn->query($sql);
      if($result->num_rows>0)
          {
          while($row=$result->fetch_assoc())
          {
      ?>
            <div>
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
                <a href="index.php?page=detail&id=<?php echo $row['id']; ?>">
                    <img src="backend/images/<?php echo $row['avatar']; ?>" class="avt2" alt="" />
                    <div class="caption" id="cap2">
                        <h5> <?php echo $row['title']; ?></h5>
                        
                    </div>
                </a>
            </div>
            <?php
      }
      }  else
      {  
        ?>
            <h1 style="text-align: center; color:#c3beb6">Hiện tại không có bài viết! </h1>
            <?php
      } 
    ?>

        </div>
        <div class="col-sm-12 col-lg-3 " id="content-left-1">
            <?php   
      $sql="SELECT * FROM tbl_news WHERE status = 1 ORDER BY create_at DESC LIMIT 2,1 " ;
      $result=$conn->query($sql);
      if($result->num_rows>0)
          {
          while($row=$result->fetch_assoc())
          {
      ?>
            <div>
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
                <a href="index.php?page=detail&id=<?php echo $row['id']; ?>">
                    <img src="backend/images/<?php echo $row['avatar']; ?>" class="avt2" alt="" />
                    <div class="caption" id="cap2">
                        <h5> <?php echo $row['title']; ?></h5>
                        
                    </div>
                </a>
            </div>
            <?php
      }
      }  else
      {  
        ?>
            <h1 style="text-align: center; color:#c3beb6">Hiện tại không có bài viết! </h1>
            <?php
      } 
    ?>

        </div>
        <div class="row" id="row2">

            <?php  
        
      $sql = "SELECT * FROM tbl_news WHERE status =1  ORDER BY create_at  DESC  LIMIT 3,100   ";
      $query = mysqli_query($conn, $sql);
    ?>
            <?php  
      while ($row = mysqli_fetch_array($query)) {
    ?>
            <div class="col-sm-12 col-lg-3" id="content-left-1">
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
</div>