<?php
  //call to header
  require "header.php";
?>

    <main>
      <div class="wrapper-main">
          <!--showing content based on state of login -->
          <?php
          if (!isset($_SESSION['id'])) {
            echo '<p class="login-status">You are logged out!</p>';
          }
          else if (isset($_SESSION['id'])) {
            echo '<p class="login-status">You are logged in!</p>';
          }
          ?>


<?php
  // call to footer
  require "footer.php";
?>
