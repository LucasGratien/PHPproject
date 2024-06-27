<?php

$page = isset($_GET['page']) ? $_GET['page'] : 'home';


$title = ucfirst($page);


include 'Header.php';
?>

<div class="control">
  <?php

  switch ($page) {
      case 'Home':
          include 'Home.php';
          break;
      case 'histoire':
          include 'histoire.php';
          break;
      case 'catalogue':
          include 'catalogue.php';
          break;
      case 'Contact':
          include 'Contact.php';
          break;
      default:
          include 'notfound.php';
          break;
  }
  ?>
</div>

<?php  
function bonjour(){
    echo 'Bonjour à tous';
}
bonjour();
 ?>
<?php include 'footer.php'; ?>













