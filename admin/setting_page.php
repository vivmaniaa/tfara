<?php
include_once 'functions.php';
if(!loggedIn()){
  header('location: index.php');
}
if($_SERVER['PHP_SELF'] == '/tafara/admin/setting_page.php'){
  header('location: index.php');
}
  

?>
<div id="main_container">
  <?php include_once 'page_head_and_aside.php'; ?>	
  <article id="main_article">    
  	setting.
  </article>

  <?php include_once 'page_footer.php'; ?>
</div>