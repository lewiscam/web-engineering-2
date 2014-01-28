  <!doctype html>
  <html class="no-js" lang="en">
    <head>
      <?php include $_SERVER['DOCUMENT_ROOT'] . '/modules/head.php'; ?>
    </head>
    <body>
      <?php include $_SERVER['DOCUMENT_ROOT'] .'/modules/header.php'; ?>
      <div class="row">
        <div class="large-12 columns">
        	<div class="panel">
  	        <h3>NFL Honors</h3>
            <div class="row">
  	        	<div class="large-8 medium-8 columns">
                <?php
        //set cookie        
        setcookie('voted', 'true', time() + 3600000);

        //open file
        $fh = 'data.txt';
        $file = file_get_contents('data.txt');

        //explode file into array
        $array = explode(";", $file);

        $position = count($array);

        //loop through the array.  If something matches, add 1 to it's count.
        for ($i = 0; $i < $position; $i++) {
          if($array[$i] == $_POST['rookie'] || $array[$i] == $_POST['off'] ||
              $array[$i] == $_POST['def'] || $array[$i] == $_POST['mvp']) {
              $array[$i + 1] += 1;
          }
        }

        $fileImploded = implode(";", $array);

        $file = file_put_contents('data.txt', $fileImploded);

        //display results
        for($i = 0; $i < $position; $i += 3) {
                echo $array[$i] ."<br>";
                echo $array[$i + 1] ."<br>";
                echo $array[$i + 2] ."<br>";
        }


                ?>
  	        	</div>       
  					</div>
        	</div>
        </div>
      </div>
      
      <script src="js/jquery.js"></script>
      <script src="js/foundation.min.js"></script>
      <script>
        $(document).foundation();
      </script>
    </body>
  </html>