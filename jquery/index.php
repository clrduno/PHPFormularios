<!DOCTYPE html>
<html data-whatinput="keyboard" data-whatintent="keyboard" class=" whatinput-types-initial whatinput-types-keyboard"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="UTF-8">
        <title>JQuery</title>
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
        <h4>JQuery</h4>
        <form method="POST" id="frmForm">
          <div class="medium-12  columns">
            <label>Name</label>
            <input type="text" name="name" id="name">
          </div>
          <div class="medium-4  columns">
            <label>Last Name</label>
            <input type="text" name="last_name" id="last_name">
          </div>
          <div class="medium-12  columns">
            <input value="SEND" id="btnSend" class="button success hollow" type="submit">
          </div>
        </form>
      </div>
    </div>
    <div class="row">
      <div class="callout primary" id="divResponse"></div>
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
        <script>
        function init()
        {
            $('#btnSend').click( function( event )
            {
              event.preventDefault();
              //alert('Clicked!');
              var data_to_be_sent = $('#frmForm').serialize();
              $.ajax({
                url: "./process_data.php",
                method: 'POST',
                data: data_to_be_sent,
                dataType: 'html',
                success: function( result ) {
                  console.log(result);
                  $('#divResponse').html(result);
                }
              });

            } 
            );
            
        }
        
        

        $( init );
        </script>

    </body>
</html>