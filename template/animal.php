<!DOCTYPE html>
<html lang="en">

<?php require(TEMPLATE_PATH.'header.php'); ?>

<body>
    <main>
       <div class="mainWrapper">
            <section id="animalInfo">
                <div class="left">
                    <div class="imgWrapper">
                        <img src="public/img/tiger-normal.webp" >
                    </div>
                    <div class="name">
                        <h4><?=sprintf('%s',$param['name'])?></h4>
                    </div>
                </div>
                <div class="right">
                    <div class="info">
                        <div class="capture">
                            <p>Status: 
                                <?php if($param['captured'] == false): ?>
                                    <span class="free">Na wolności</span>
                                <?php else: ?>
                                    <span class="zoo">W ZOO</span>
                                <?php endif ?>
                            </p>
                        </div>
                   </div>
                    <div class="actions">
                        <div class="captureForm">
                            <form action="/<?= sprintf('%s',$param['animalType'])?>" method="post">
                                <?php if($param['captured'] == false): ?>
                                    <input type="checkbox" name="ZOO" id="ZOO"  style="display:none;" checked>
                                <?php else: ?>
                                    <input type="checkbox" name="wild" id="wild"  style="display:none;" checked>
                                <?php endif ?>
                                <button type="submit">capture</button>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
       </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>