<?php if($_COOKIE['voted'] == 'true') {
        header('Location: http://54.200.11.150/form_action.php');
        }
?>
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
	        <h1>NFL Honors</h1><br>
          <div class="row">
	        	<div class="large-8 medium-8 columns">
	        		<form action="/form_action.php" method="post">
                <h3>Rookie of the Year</h3>
                <input type="radio" name="rookie" value="Eddie Lacy"> Eddie Lacy<br>
                <input type="radio" name="rookie" value="Keenan Allen"> Keenan Allen<br>
                <input type="radio" name="rookie" value="Kiko Alonso"> Kiko Alonso<br>
                <input type="radio" name="rookie" value="Giovanni Bernard"> Giovanni Bernard<br>
                <input type="radio" name="rookie" value="Cordarrelle Patterson"> Cordarrelle Patterson<br><br>
                <h3>Offensive Player of the Year</h3>
                <input type="radio" name="off" value="Peyton Manning"> Peyton Manning<br>
                <input type="radio" name="off" value="Jamaal Charles"> Jamaal Charles<br>
                <input type="radio" name="off" value="LeSean McCoy"> LeSean McCoy<br>
                <input type="radio" name="off" value="Calvin Johnson"> Calvin Johnson<br>
                <input type="radio" name="off" value="Josh Gordon"> Josh Gordon<br><br>
                <h3>Devensive Player of the Year</h3>
                <input type="radio" name="def" value="Luke Kuechley"> Luke Kuechley<br>
                <input type="radio" name="def" value="Robert Mathis"> Robert Mathis<br>
                <input type="radio" name="def" value="Robert Quinn"> Robert Quinn<br>
                <input type="radio" name="def" value="Richard Sherman"> Richard Sherman<br>
                <input type="radio" name="def" value="NaVarro Bowman"> NaVarro Bowman<br><br>
                <h3>Most Valuable Player</h3>
                <input type="radio" name="mvp" value="Peyton Manning"> Peyton Manning<br>
                <input type="radio" name="mvp" value="Jamaal Charles"> Jamaal Charles<br>
                <input type="radio" name="mvp" value="Drew Brees"> Drew Brees<br>
                <input type="radio" name="mvp" value="Nick Foles"> Nick Foles<br>
                <input type="radio" name="mvp" value="Philip Rivers"> Philip Rivers<br><br>
                <input type="submit" name="Submit">
                <a href="/form_action.php">View Results</a>
              </form>
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
