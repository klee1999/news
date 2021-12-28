
<div id="content-1" class="col-xs-12 col-sm-12 col-lg-12">

    <div id="content-left-1" class="col-xs-8 col-sm-3   col-lg-3" style="margin-top: 0px;">
        <?php
        $sql="SELECT * FROM tbl_news ORDER BY create_at DESC LIMIT 2,1 " ;
        $result=$conn->query($sql);
        if($result->num_rows>0)
          {
          while($row=$result->fetch_assoc())
          {
      ?>
        <div id="news-content1-3" class="" style="padding: 0;margin: 0;">
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
                <img src="backend/images/<?php echo $row['avatar']; ?>" class="avt5" alt="" />
                <div class="caption" id="cap2">
                    <h5> <?php echo $row['title']; ?></h5>
                    <h5 class="h-at"><?php echo $row['create_at']; ?></h5>
                </div>
            </a>
        </div>
        <?php
      }
      
      } 
        ?>
    </div>
    <div id="content-left-1" class="col-xs-8  col-sm-6   col-lg-6">
        <?php   
      $sql="SELECT * FROM tbl_news ORDER BY create_at DESC LIMIT 1 " ;
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
                <img src="backend/images/<?php echo $row['avatar']; ?>" class="avt" alt="" />
                <div class="caption" id="cap">
                    <h5> <?php echo $row['title']; ?></h5>
                    <h5 class="h-at"><?php echo $row['create_at']; ?></h5>
                </div>
            </a>
        </div>
        <?php
      }
      }  
     ?>
    </div>
    <div id="content-left-1" class="col-xs-8  col-sm-3    col-lg-3">
        <?php
      $sql="SELECT * FROM tbl_news ORDER BY create_at DESC LIMIT 1,1 " ;
      $result=$conn->query($sql);
      if($result->num_rows>0)
          {
          while($row=$result->fetch_assoc())
          {
      ?>
        <div class="">
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
            
                <div class="caption" id="cap1">
                    <h5> <?php echo $row['title']; ?></h5>
                    </a>
                    <h5 class="h-at"> <?php echo $row['create_at']; ?></h5>
                    
                    <h5> <?php echo $row['description']; ?></h5>
                </div>
            
        </div>
        <?php
        }
        } 
      ?>
    </div>
    <div class="row" id="row3" >
        <?php
            $sql="SELECT * FROM tbl_news ORDER BY create_at DESC LIMIT 3,2 " ;
            $result=$conn->query($sql);
            if($result->num_rows>0)
                {
                while($row=$result->fetch_assoc())
                {
            ?>
        <div class="col-xs-8  col-sm-3    col-lg-3" id="content-up">



            <a href="index.php?page=detail&id=<?php echo $row['id']; ?>">
                <div class="caption" id="cap3" style="padding-top: 30px;">
                    <h5> <?php echo $row['title']; ?></h5>
                    <h5 class="h-at"><?php echo $row['create_at']; ?></h5>
                </div>
            </a>
        </div>
        <?php
        }
        } 
        ?>
    </div>
    <div class="row" id="row2">

        <?php  

        $sql = "SELECT * FROM tbl_news   ORDER BY create_at  DESC  LIMIT 5,4   ";
        $query = mysqli_query($conn, $sql);
        ?>
        <?php  
            while ($row = mysqli_fetch_array($query)) {
            ?>
        <div class="col-xs-8  col-sm-3    col-lg-3" id="content-left-1">
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
                        <h5 class="h-at"><?php echo $row['create_at']; ?></h5>
                    </div>
                </a>
            </div>

        </div>
        <?php
        }
        ?>
    </div>
    <div class="row" id="row2">
        <div class="col-xs-8  col-sm-6   col-lg-6" id="content-left-1">
            <?php   
            $sql="SELECT * FROM tbl_news  WHERE status = 1 ORDER BY  create_at DESC LIMIT 9,1 " ;
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
                        <h5 class="h-at"><?php echo $row['create_at']; ?></h5>
                    </div>
                </a>
            </div>
            <?php
                }
                } 
            ?>
        </div>

        <div class="col-xs-8  col-sm-3    col-lg-3" id="content-left-1">
            <?php   
            $sql="SELECT * FROM tbl_news ORDER BY create_at DESC LIMIT 10,1 " ;
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
                        <h5 class="h-at"><?php echo $row['create_at']; ?></h5>
                    </div>
                </a>
            </div>
            <?php
            }
            }  
            ?>

        </div>
        <div class="col-xs-8  col-sm-3    col-lg-3" id="content-left-1">
            <?php   
            $sql="SELECT * FROM tbl_news ORDER BY create_at DESC LIMIT 11,1 " ;
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
                        <h5 class="h-at"><?php echo $row['create_at']; ?></h5>
                    </div>
                </a>
            </div>
                    <?php
            }
            }  
            ?>

        </div>
        <div class="row" id="row2">

            <?php  
        
            $sql = "SELECT * FROM tbl_news   ORDER BY create_at  DESC  LIMIT 12,12   ";
            $query = mysqli_query($conn, $sql);
            ?>
                    <?php  
            while ($row = mysqli_fetch_array($query)) {
            ?>
            <div class="col-xs-8  col-sm-3    col-lg-3" id="content-left-1">
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
                            <h5 class="h-at"><?php echo $row['create_at']; ?></h5>
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
