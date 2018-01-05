<?php
include_once 'functions.php';
if(!loggedIn()){
  header('location: index.php');
}
if($_SERVER['PHP_SELF'] == '/tafara/admin/all_post.php'){
  header('location: index.php');
}
  

?>
<div id="main_container">
  <?php include_once 'page_head_and_aside.php'; ?>	
  <article id="main_article">    
  	<div id="load_screen">Loading page...</div> 
    <div class='paging_Ctrl'><?php echo $paginationCtrls; ?></div> 
    <div id="list"><?php echo $list; ?></div>
    <div class='paging_Ctrl'><?php echo $paginationCtrls; ?></div>
  </article>

  <?php include_once 'page_footer.php'; ?>
</div>