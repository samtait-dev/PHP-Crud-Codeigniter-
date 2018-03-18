<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foundation for Sites</title>
    <link rel="stylesheet" href="assets/css/foundation.css">
    <link rel="stylesheet" href="assets/css/app.css">
  </head>


  <body>
    <div class="grid-container">
      <div class="row">
        <div class="small-12 medium-6 large-6 columns">
        <h1>Simple Blogging System using PHP Codeigniter MVC</h1>
          <div class = "row">
            <div class="small-12 medium-9 large-9 columns">
            <h3>Sign in</h3>
            <?php echo form_open('welcome/signin'); ?>

              <div class="row">
              <div class="small-12 medium-12 large-12 columns">
              <?php echo form_input(['name' => 'email','placeholder' => 'Email','class' => 'textbox']);  ?>  
              <?php echo form_password(['name' => 'password','placeholder' => 'Password','class' => 'textbox']);  ?> 
              <?php echo form_submit(['name' => 'submit','value' => 'Signin','class' => 'hollow button secondary textbox']);  ?>
              <?php echo form_reset(['name' => 'Reset','value' => 'Reset','class' => 'hollow button secondary textbox']);  ?>
              </div>


            <?php echo form_close(); ?>
            </div>
          </div>
        </div>

        <div class="small-12 medium-6 large-6 columns">
          <h3>Register</h3>
           <?php echo form_open('Welcome/signup'); ?>
           <?php if($msg = $this->session->flashdata('response')): ?>
             <div class="response">
             <?php echo $msg; ?>
            </div>
          <?php endif;  ?>

           <?php 
           $data = array(
           'user_role_id' => '2'
            );
            ?>
            <?php echo form_hidden($data);?>

            <div class = "row">
               <div class="small-12 medium-12 large-12 columns">
                 <?php echo form_input(['name' => 'username','placeholder' => 'Username','class' => 'textbox']);  ?>  
                   <?php echo form_error('username','<div class="text-danger">','</div>');  ?> 

                   <?php echo form_input(['name' => 'email','placeholder' => 'Email','class' => 'textbox']);  ?>  
                   <?php echo form_error('email','<div class="text-danger">','</div>');  ?> 

                   <?php echo form_password(['name' => 'password','placeholder' => 'Password','class' => 'textbox']);  ?>  
                   <?php echo form_error('password','<div class="text-danger">','</div>');  ?> 

                   <?php echo form_input(['name' => 'mobile','placeholder' => 'Mobile','class' => 'textbox']);  ?>  
                   <?php echo form_error('mobile','<div class="text-danger">','</div>');  ?> 

                   <?php echo form_submit(['name' => 'submit','value' => 'Signup','class' => 'hollow button secondary textbox']);  ?>
                   <?php echo form_reset(['name' => 'Reset','value' => 'Reset','class' => 'hollow button secondary textbox']);  ?>
               </div>
            </div>
 <?php echo form_close(); ?>
        </div>

      </div>
    </div>





    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>
