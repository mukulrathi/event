<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<style type="text/css">

	 .error{color:red	;}
     .form-control{border-radius: 0px;}
     p{color:black;}

	</style>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<div class="contanier">
<div class="col-md-12" style="background-color: rgba(85, 107, 47, 0.33);">
<div class="col-md-6" style="background-color: white">
	<h2>New login</h2>
	<?php $this->form_validation->set_error_delimiters('<div class="error">', '</div>'); ?>
	<form action="<?php echo base_url().'client/checkform'?>" method="post">
  <fieldset>
  <legend>Personal details</legend>
  <p>Name:-<input type="text" name="name1" class="form-control" value="<?php echo set_value('name1');?>"><?php echo form_error('name1'); ?></p>
  <p>Contact number:-<input type="number" name="number1" class="form-control" value="<?php echo set_value('number1');?>"><?php echo form_error('number1'); ?></p>
  <p>Email:-<input type="email" name="email1" class="form-control" value="<?php echo set_value('email1');?>"><?php echo form_error('email1'); ?></p>
  
   </fieldset>
  <fieldset>
  <legend>Venue details</legend>
  <p>Venue Name:-<input type="text" name="venuename1" class="form-control" value="<?php echo set_value('venuename1 ');?>"><?php echo form_error('venuename1'); ?></p>
  <p>Address<input type="text" name="address1"  class="form-control" value="<?php echo set_value('address1');?>"><?php echo form_error('address1'); ?></p>
<p>Price:-<input type="number" name="price1" class="form-control" value="<?php echo set_value('price1');?>"><?php echo form_error('price1'); ?></p></fieldset>
   <fieldset>
  <legend>Login details</legend>
  <p>Username<input type="text" name="user" class="form-control"  value="<?php echo set_value('user');?>"><?php echo form_error('user'); ?></p>
  <p>Password<input type="text" name="pass" class="form-control" value="<?php echo set_value('pass');?>"><?php echo form_error('pass'); ?></p>
<p>Confirm Password<input type="text" name="pass1" class="form-control"><?php echo form_error('pass1'); ?></p> 
   </fieldset>
   
   <input type="submit" class="btn btn-info">


	</form>
</div>
<div class="col-md-6">
	<h2>Already Registred</h2>
	<?php $this->form_validation->set_error_delimiters('<div class="error">', '</div>'); ?>
	<form action="<?php echo base_url().'client/checkdetails'?>" method="post">
	<fieldset>
	<legend>Login</legend>
	<label>Username:-<input type="text" name="name11" class="form-control" value="<?php echo set_value('name11');?>"><?php echo form_error('name11');?></label><br>
  <label>Password:-<input type="text" name="name21" class="form-control"><?php echo form_error('name21');?></label><br>
   <input type="submit" class="btn btn-success">
</fieldset>

	</form>



</div>







</div>
</div>