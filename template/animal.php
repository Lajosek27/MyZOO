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
                        <h4><?=sprintf('%s',$param['animal'])?></h4>
                    </div>
                    <div class="flags">
                        <div class="capture flag">
                            <p>
                                <?php if($param['captured'] == false): ?>
                                    <span class="free">Na wolności</span>
                                <?php else: ?>
                                    <span class="zoo">W ZOO</span>
                                <?php endif ?>
                            </p>
                        </div>
                        <div class="food flag">
                            <p> 
                                <?php if(method_exists($param['animal'],'feedWithMeat') && method_exists($param['animal'],'feedWithVeggies')): ?>
                                    <span class="all">Wszystkożerne</span>
                                <?php elseif(method_exists($param['animal'],'feedWithMeat')): ?>
                                    <span class="meat">Mięsożerne</span>
                                <?php else: ?>
                                    <span class="vaggies">Roślinożerne</span>
                                <?php endif ?>
                            </p>
                        </div>
                        <?php if(method_exists($param['animal'],'brushFur')): ?>
                            <div class="fur flag">
                                <p> 
                                    <span class="all">Futrzak</span>
                                </p>
                            </div>
                        <?php endif ?>
                   </div>
                  
                </div>
                <div class="right">
                    <div class="czat">
                        <div id="cursor">|</div>
                    </div>
                    <div class="actions">
                        <div class="captureForm">
                            <form action="/<?= sprintf('%s',$param['animalType'])?>" method="post">
                            <?php if($param['captured'] == false): ?>
                                    <input type="checkbox" name="ZOO" id="ZOO"  style="display:none;" checked>
                                    <button type="submit">Zamknij w ZOO</button>
                                <?php else: ?>
                                    <input type="checkbox" name="wild" id="wild"  style="display:none;" checked>
                                    <button type="submit">Uwolnij</button>
                                <?php endif ?>
                                
                            </form>
                        </div>
                        <?php if(method_exists($param['animal'],'feedWithMeat')): ?>
                            <div class="FeedMeatForm">
                                <form action="/<?= sprintf('%s',$param['animalType'])?>" method="post">
                                    <input type="hidden" name="feedWithMeat">
                                    <button type="submit">Nakarm Mięsem</button>
                                </form>
                            </div>
                        <?php endif; ?>
                        <?php if(method_exists($param['animal'],'feedWithVeggies')): ?>
                            <div class="FeedVeggiesForm">
                                <form action="/<?= sprintf('%s',$param['animalType'])?>" method="post">
                                    <input type="hidden" name="FeedVeggiesForm">
                                    <button type="submit">Nakarm Mięsem</button>
                                </form>
                            </div>
                        <?php endif; ?>
                        <?php if(method_exists($param['animal'],'brushFur')): ?>
                            <div class="brushFurForm">
                                <form action="/<?= sprintf('%s',$param['animalType'])?>" method="post">
                                    <input type="hidden" name="brushFur">
                                    <button type="submit">Wyczesz</button>
                                </form>
                            </div>
                        <?php endif; ?>
                    </div>          
                </div>
            </section>
       </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>

