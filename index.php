<?php
  ob_start();
  require_once('includes/load.php');
  if($session->isUserLoggedIn(true)) { redirect('home.php', false);}
?>
<?php include_once('layouts/header.php'); ?>
<style>
  body {
    background-image: url('BG.jpeg'); 
    background-size: cover; 
    background-repeat: no-repeat; 
    background-attachment: fixed; 
  }
.login-page{
  width: 350px;
  margin: 7% auto;
  padding: 0 20px;
  background-color: #f9f9f9;
  border: 1px solid #f2f2f2;
}.login-page .text-center{
  margin-bottom: 25px;
}.box{
  padding: 20px;
  background-color: #f9f9f9;
  border: 1px solid #f2f2f2;
}.page{
  position: relative;
  display: block;
  top: 85px;
  left: 0;
  padding: 35px 250px 20px 290px;
}
</style>
<div class="login-page login-page-background">
    <div class="text-center">
       <h1>Welcome</h1>
       <p>Sign in to start your session</p>
       <br>
     </div>
     <?php echo display_msg($msg); ?>
      <form method="post" action="auth.php" class="clearfix">
        <div class="form-group">
              <label for="username" class="control-label">Username</label>
              <input type="name" class="form-control" name="username" placeholder="Username">
        </div>
        <div class="form-group">
            <label for="Password" class="control-label">Password</label>
            <input type="password" name= "password" class="form-control" placeholder="password">
        </div>
        <div class="form-group">
                <button type="submit" class="btn btn-info  pull-right">Login</button>
                <br><br>
        </div>
    </form>
</div>
<?php include_once('layouts/footer.php'); ?>
