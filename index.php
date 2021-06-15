<!DOCTYPE html>
<html>
 <head>
  <script src="jquery.min.js"></script>
  <script src="chat.js"></script>
  <link href="chat.css" rel="stylesheet"/>
 </head>
 <body>
	<div id="konten">
	<div class="tabs"><div class="tab" data-dip="chat">SuperKids Chat</div><div class="tab" data-dip="users">Super Usuarios</div></div>
   <div class="chat">
     <?php 
	 include("config.php");include("login.php");
     if(isset($_SESSION['user'])){
      include("chatbox.php");
     }else{
      $display_case=true;
      include("login.php");
     }
     ?>
   </div>
   <div class="users" style='display:none'>
     <?php include("users.php");?>
    </div>
	</div>
 </body>
</html>
