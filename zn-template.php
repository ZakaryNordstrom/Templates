<?php
  include 'components/head.html';
  include_once 'components/mobile_header.php';
  include_once 'components/tablet_header.php';
  include_once 'components/desktop_header.php';
?>

<main>
  <?php
    include_once 'components/mobile_main.php'; 
    include_once 'components/tablet_main.php'; 
    include_once 'components/desktop_main.php';
  ?>
</main>
 
<?php
    include 'components/footer.php';
?>

<script src="scripts/navi.js" type="text/javascript"></script>