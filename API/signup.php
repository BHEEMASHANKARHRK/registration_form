<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="signup-check.php" method="post" class="cap">
     	<h2 style="font-family: Algerian">SIGN UP</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label style="font-family: Algerian">Name</label>
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="name" 
                      placeholder="Name"><br>
          <?php }?>

          <label style="font-family: Algerian">Email Id</label>
          <?php if (isset($_GET['email'])) { ?>
               <input type="text" 
                      name="email" 
                      placeholder="Email id"
                      value="<?php echo $_GET['email']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="email" 
                      placeholder="Email ID"><br>
          <?php }?>


     	<label style="font-family: Algerian">mobile</label>
     	<input type="mobile" 
                 name="mobile" 
                 placeholder="mobile"><br>

          <label style="font-family: Algerian">Password</label>
          <input type="password" 
                 name="password" 
                 placeholder="Password"><br>

     	<button type="submit">Sign Up</button>
     </form>
</body>
</html>