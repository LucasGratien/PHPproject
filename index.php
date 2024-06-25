<!-- <?php 
$title = 'control';
include 'Header.php';?>
<div class="container">
  <?php
  $file = 'pages/' . $page . '.php';
  if (file_exists($file)) {
      include $file;
  } else {
      echo '<h1>404 - Page Not Found</h1>';
      echo '<p>The page you are looking for does not exist.</p>';
  }
  ?>
</div>
<?php include 'footer.php';?> -->