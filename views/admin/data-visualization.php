<?php
  session_start();
  
  if(isset($_SESSION['useremail']))
  {
    $email = $_SESSION['useremail'];
    $section = 'data-visualization';
  }
  else
  {
    header("Location: ../auth");
  }

  if($_SESSION['isAdmin']==0){
    header("Location: ../accessDenied");
  }

?>




<?php include 'templates/admin/header.php'?>

<h3>Data Visualatitation</h3>

<?php include 'templates/admin/footer.php'?>