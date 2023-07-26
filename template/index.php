<!DOCTYPE html>
<html lang="en">

<?php require(TEMPLATE_PATH.'header.php'); ?>

<body  id="index">
  <main>  
    <div class="mainWrapper">
      <div id="content">
        <h3>
            <?php 
            echo $param['message'];
            ?>
          </h3>
      </div>
    </div>
  </main>
    
    <?php require(TEMPLATE_PATH.'footer.php'); ?>
  </body>
</html>