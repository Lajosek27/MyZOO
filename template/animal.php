<!DOCTYPE html>
<html lang="en">

<?php require(TEMPLATE_PATH.'header.php'); ?>

<body>
    <main>
       <div class="mainWrapper">
            <section id="animalInfo">
                <div class="imgWrapper"><img src="public/img/tiger-normal.webp" ></div>
                <div class="contentWrapper">
                    <div class="info">
                        <h4><?=sprintf('%s',$param['name'])?></h4>
                    </div>
                </div>
            </section>
       </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>