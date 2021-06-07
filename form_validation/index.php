<?php

$errors = false;
$arr_errors['name']['message'] = '';
$arr_errors['name']['error'] = false;
$name = isset( $_POST['name'] ) ? $_POST['name'] : '';

if( $_POST )
{
  //$name = isset( $_POST['name'] ) ? $_POST['name'] : '';
  $name = clean_data($name);
  
  if(strlen($name) < 4 ){
    $error = true;
    $arr_errors['name']['message']='Your name should have at least 4 letter';
    $arr_errors['name']['error']=true;
  }
}

function clean_data( $input )
{
  $input=trim($input);
  $input = stripcslashes($input);
  return $input;
}

?>
<!DOCTYPE html>
<html data-whatinput="keyboard" data-whatintent="keyboard" class=" whatinput-types-initial whatinput-types-keyboard"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="UTF-8">
        <title>Form Validation</title>
            <link rel="icon" type="image/x-icon" href="favicon.ico" />
            <link rel="stylesheet" href="../assets/css/foundation.css">
            <link rel="stylesheet" href="../assets/css/app.css">
    <meta class="foundation-mq"></head>
    <body>

        <!-- Start Top Bar -->
    <div class="top-bar">
      <div class="row">
        <div class="top-bar-left">
          <ul class="dropdown menu" data-dropdown-menu="tckp8q-dropdown-menu" role="menubar">
            <li role="menuitem">Advanced PHP: Forms</li>
          </ul>
        </div>
      </div>
    </div>
    <!-- End Top Bar -->

    <br>
    
    
    <div class="row">
      <div class="medium-12 large-12 columns">
        <h4>Form Validation</h4>

        <form method="POST" data-abide novalidate>
          <?php 
          if($errors){
          
          ?>            
          <div data-abide-error class="warning callout" style="display: all;">
            <p><i class="fi-alert"></i> There are some errors in your form.</p>
          </div>
          <?php } ?>
          <div class="row">
            <div class="small-12 columns">
              <label>Name
                <input name="name" value="<?php echo $name ?>" type="text" placeholder="John Doe" class="<?php echo $arr_errors['name']['error'] ? 'is-invalid-input' : '' ?>"  aria-describedby="exampleHelpText">
                <?php
                if($arr_errors['name']['error']){
              
                ?>
                <span class="form-error is-visible">
                  <?php echo $arr_errors['name']['message'] ?>
                </span>
              <?php } ?>
              </label>
              <p class="help-text" id="exampleHelpText">Type your name</p>
            </div>
          </div>
          <div class="row">
            <fieldset class="large-6 columns">
              <button class="button" type="submit" value="Submit">Submit</button>
            </fieldset>
          </div>
        </form>

      </div>
    </div>

    

    <div class="row column">
      <hr>
      <ul class="menu">
        <li class="float-right">Copyright Footer</li>
      </ul>
    </div>

        <script src="../assets/js/vendor/jquery.js"></script>
        <script src="../assets/js/vendor/what-input.js"></script>
        <script src="../assets/js/vendor/foundation.js"></script>
        <script src="../assets/js/app.js"></script>
    </body>
</html>