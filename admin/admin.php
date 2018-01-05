<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Admin — TFARA</title>
        <link rel="stylesheet" href="css/style.css">
        <style>
        .user_type{
          text-decoration: underline; 
          color: white;
        }      
        </style>
  </head>
  <body bgcolor= "#000	">
<?php 
include 'connect.php';
include 'functions.php';
include 'title_bar.php' ;

if($c_user_level == 3){
  header('location: profile.php');
}
?>

<br><br><br>
<p>
  <a href="admin.php?order=user_set" style="text-decoration: none; color: white;">User Setting</a> | 
  <a href="" style="text-decoration: none; color: white;">Level Setting</a>
</p>
<br><br>

<?php
if(isset($_GET['order']) && !empty($_GET['order'])){
?>
  <table>
    <tr>
      <td width="150px"><strong>Users</strong></td>
      <td><strong>Option</strong></td>
    </tr>
  
  <?php
    if($c_user_level==1){
      $query = mysql_query("SELECT user_id, username, type, user_level FROM users WHERE user_level != '1'" );}
      else{
        $query = mysql_query("SELECT user_id, username, type, user_level FROM users WHERE user_level != '1' AND user_level!='2' " );
      }
    while($each_query =  mysql_fetch_array($query)){
      $u_user_level = $each_query['user_level'];
      $u_user_id = $each_query['user_id'];
      $u_username = $each_query['username'];
      $u_type = $each_query['type']; 
  ?>
  <tr>
      <td width="250px"><strong>
        <?php echo $u_username; 
        if($u_user_level == 3){
          echo " [ Admin ]";
        }
        else if($u_user_level== 2){
          echo " [ Super Admim ]";
        }
        else if ($u_user_level == 1){
          echo " [ Owner ]";
        }

        ?></strong></td>
      <td><strong><?php 
      if($u_type == 'a'){ 
        echo "<a href='option.php?id=$u_user_id&type=$u_type' class='user_type'>Deactive</a>";}  else{echo "<a href='option.php?id=$u_user_id&type=$u_type' class='user_type'>Active</a>";}?>
      </strong></td>
    </tr>
  <?php
    }
  ?>
  </table>

<?php
}
else{
  echo "you haven't click to the user setting yet";
}
?>
    
    
    
  </body>
</html>
