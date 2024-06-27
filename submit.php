<?php 
session_start();
function erreur($errors){   
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  if (empty($errors)) {
          $_SESSION['nom'] = $_POST ["nom"]; 
          $_SESSION['email'] = $_POST ["email"];
          $_SESSION['message'] = $_POST ["message"];
          $_SESSION['form_errors'] = $errors;
     
  $file = 'contact.txt';
  $data = "Nom: ".$_SESSION['nom']."\nEmail:  ".$_SESSION['email']."\nMessage:".$_SESSION['message']."\n\n";
          
          file_put_contents($file, $data, FILE_APPEND);
      echo nl2br(htmlentities($data));
      header("Location: http://localhost:8000/index.php?page=Contact");
      exit();
      
    
      } 
    
    }
   
  } 