

<?php include('public_header.php'); ?>

<div class="container">


  <?php echo form_open('Login/admin_login'); ?>
  <fieldset>
    <legend>Admin Login</legend>
    <div class="row">
      <div class="col-lg-6">
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Username</label>
      <div class="col-lg-10">
       <?php echo form_input(['name'=>'username','class'=>'form-control','placeholder'=>'User Name','value'=> set_value('username')]); ?> 
   </div>
    </div>
</div>
<div class="col-lg-6">
  
  <?php echo form_error('username'); ?>
</div>
</div>
    <div class="row">
      <div class="col-lg-6">
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Password</label>
      <div class="col-lg-10">
       <?php echo form_input(['name'=>'password','class'=>'form-control','placeholder'=>'Password']); ?> 
   </div>
    </div>
</div>
<div class="col-lg-6">
  
  <?php echo form_error('password'); ?>
</div>
</div>
   </br>
   </br>
   </br>
            
    
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="reset" class="btn btn-default">Reset</button>
        
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </fieldset>


  



<?php include('public_footer.php'); ?>