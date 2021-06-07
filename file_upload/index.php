<?php

echo '<pre>';
var_dump( $_FILES );
echo '</pre>';

if($_FILES){
move_uploaded_file($_FILES['image_file']['tmp_name'], 'uploads/'.basename($_FILES['image_file']['name']));
//move_uploaded_file($_FILES['image_file']['tmp_name'], 'uploads/'.basename($_FILES['image_file']['tmp_name']));
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
        <form method="POST" enctype="multipart/form-data">
          <div class="row">
            <div class="medium-4  columns">
              <label>Title</label>
              <input type="text" name="title">
            </div>
          </div>
          <div class="row">
            <div class="medium-4  columns">

              <label for="exampleFileUpload" class="button">Upload File</label>
              <input type="file" id="exampleFileUpload" class="show-for-sr"  name="image_file">

            </div>          
          </div>
          <div class="row">
            <div class="medium-12  columns">
              <input value="SEND" class="button success hollow" type="submit">
            </div>
          </dif>
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