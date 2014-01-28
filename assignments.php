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
	        <h3>Assignments</h3>
          <div class="row">
	        	<div class="large-8 medium-8 columns">
              <h5><a href="/form.php">PHP Survey</a></h5>
	        		<p>A simple PHP survey that asks users to vote for the annual NFL awards.  The page uses sessions to only allow users to vote once.  After they have voted, they will be brought to a results page.</p>
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