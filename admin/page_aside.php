<?php
include 'connect.php';
    $sqlp = "SELECT COUNT(bid) FROM blog where post_status='published'";
    $queryp = mysql_query( $sqlp);
    $rowp = mysql_fetch_row($queryp);
    $total_pup = $rowp[0];

    $sqld = "SELECT COUNT(bid) FROM blog where post_status='draft'";
    $queryd = mysql_query( $sqld);
    $rowd = mysql_fetch_row($queryd);
    $total_dft = $rowd[0];

?>
<aside id="left_part">
    <nav>
      <ul>
        <?php echo '<li id="nav_new_post"><button type="button" class="btn btn-warning" onclick="location.href=\''.$_SERVER['PHP_SELF'].'?nav=new\';" ><img style="width: 15px; height: auto;" src="../images/document302.svg"/>&nbsp;New Post</button></li><br>' ?>
        <?php echo '<a href="'.$_SERVER['PHP_SELF'].'?nav=allpost"><li class="post_aside" id="nav_post"><span><img style="width: auto; height: 15px;" src="../images/bikini60s_edit.svg" />&nbsp;Posts</span></li></a>' ?>
          
            <?php echo '<a href="'.$_SERVER['PHP_SELF'].'?nav=allpost"><li class="post_aside_cat" id="nav_allpost"><span>All ('.$totalfacts.')</span></li></a>' ?>
            <?php echo '<a href="'.$_SERVER['PHP_SELF'].'?nav=published_post"><li class="post_aside_cat" id="nav_published_post"><span>Published ('.$total_pup.')</span></li></a>' ?>
            <?php echo '<a href="'.$_SERVER['PHP_SELF'].'?nav=draft_post"><li class="post_aside_cat" id="nav_draft_post"><span>Draft ('.$total_dft.')</span></li></a>' ?>
          
        <?php if($c_user_level != 3){echo '<a href="'.$_SERVER['PHP_SELF'].'?nav=setting"><li class="set_aside" id="nav_setting_page"><span><img style="width: 15px; height: 15px;" src="../images/bikini60s_settings.svg" />&nbsp;Setting</span></li></a>';} ?>

      </ul>
    </nav>
  </aside>