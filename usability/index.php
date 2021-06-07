<?php
$error = false;
if( $_POST )
{
  $error = true;
}
?>
<!DOCTYPE html>
<html data-whatinput="keyboard" data-whatintent="keyboard" class=" whatinput-types-initial whatinput-types-keyboard"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="UTF-8">
        <title>Post Method</title>
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
        <h4>Form</h4>
        <form method="POST">
          <div class="row">
            <div class="medium-2  columns">
              <label>Country Code</label>
              <select name="phone1">
                <?php
                for($i = 0; $i < 9; $i++)
                {
                ?>
                <option><?php echo $i; ?></option>
                <?php
                }
                ?>
              </select>
            </div>
            <div class="medium-10  columns">
              <label>&nbsp;</label>
              <input type="text" name="">
            </div>
          </div>
          <div class="medium-12  columns">
            <label>Name</label>
            <input type="text" name="">
            <?php
            if( $error )
            {
            ?>
            <div class="callout warning">
              <p class="help-text" id="passwordHelpText">Error message</p>
            </div>
            <?php } ?>
          </div>          <div class="medium-8  columns">
            <label>Address</label>
            <textarea rows="3"></textarea>
            <?php
            if( $error )
            {
            ?>
            <div class="callout warning">
              <p class="help-text" id="passwordHelpText">Error message</p>
            </div>
            <?php } ?>
          </div>
          
          <select>
            <option>Mexico</option>
            <option>Argentina</option>
            <option>Venezuela</option>
            <option>Colombia</option>
            <option>Chile</option>
            <option>Guatemala</option>
            <option>Ecuador</option>
            <option>Spain</option>
          </select>
            
          <div class="medium-12  columns">
            <label>Are you an adult?</label>
            Yes <input type="radio" name="radio" value="1" checked="true" /> No <input type="radio" name="radio" value="0" />
            <?php
            if( $error )
            {
            ?>
            <div class="callout warning">
              <p class="help-text" id="passwordHelpText">Error message</p>
            </div>
            <?php } ?>
          </div>
          <div class="medium-12  columns">
            <label>Subscribe to our developer newsletter?</label>
            PHP <input type="checkbox" name="radio" value="1" /> JS <input type="checkbox" name="radio" value="0" />
            <?php
            if( $error )
            {
            ?>
            <div class="callout warning">
              <p class="help-text" id="passwordHelpText">Error message</p>
            </div>
            <?php } ?>
          </div>
          <div class="medium-12  columns">
            <input value="SEND" class="button success hollow" type="submit">
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