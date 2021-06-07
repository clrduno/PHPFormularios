<?php

echo '<pre>';
var_dump( $_REQUEST );
var_dump( $_FILES );
echo '</pre>';

?>
<!DOCTYPE html>
<html data-whatinput="keyboard" data-whatintent="keyboard" class=" whatinput-types-initial whatinput-types-keyboard"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="UTF-8">
        <title>Encryption Types</title>
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
        <h4>Encryption Types</h4>
        <!-- para enviar archivos debemos definir el tipo en enctype -->
        <form method="post" enctype="multipart/form-data">
          <div class="row">
            <div class="medium-4  columns">
              <label>Select</label>
              <select name="select">
                <option>Mr.</option>
                <option>Ms.</option>
                <option>Mrs.</option>
                <option>Dr.</option>
              </select>
            </div>
          </div>

          <div class="row">
            <div class="medium-4  columns">
              <label>Text</label>
              <input type="text" name="text">
            </div>
          </div>

          <div class="row">
            <div class="medium-4  columns">
              <label>Text Area</label>
              <textarea cols="30" rows="3" name="text_area"></textarea>
            </div>
          </div>
          
          <div class="row">
            <div class="medium-4  columns">
              <label>Checkbox</label>
              <input type="checkbox" name="checkbox" value="option1">
            </div>
          </div>

          <div class="row">
            <div class="medium-4  columns">
              <label>Checkbox</label>
              1 <input name="radio" type="radio" value="radio1">
              2 <input name="radio" type="radio" value="radio1">
            </div>
          </div>

          <div class="row">
            <div class="medium-4  columns">
              <label>Hidden</label>
              <input type="hidden" name="hidden">
            </div>
          </div>

          <div class="row">
            <div class="medium-4  columns">

              <label for="exampleFileUpload" class="button">Upload File</label>
              <input type="file" id="exampleFileUpload" class="show-for-sr" name="image_file">

            </div>          
          </div>

          <div class="row">
            <div class="medium-4  columns">
              <input value="SEND" class="button success hollow" type="submit">
            </div>
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