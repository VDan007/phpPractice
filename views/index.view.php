<?php

    echo  '<h1>' . $view_bag['title'] . '</h1>' ;

?>

<div style="margin-bottom: 2em;">
                <h3>Search</h3>
                <form action="" method="GET">
                    <input type="text" name="search" id="search" placeholder="search for something">
                    <input type="submit" value="xt">
                </form>
</div>

<div style="display:flex; justify-content: space-between; ">
    
         <?php foreach ($model as $item) : ?>
            <div style="border: 5px solid red; display:flex;justify-content: center; align-items:center; gap:20px;">
                <a href="detail.php?term=<?=$item->term?>">
                    <h1> <?= $item->term ?>: </h1>
                </a>
                <h3> <?= $item->definition ?> </h3>

            </div> 

            
         <?php endforeach; ?>

         
         
         
         
</div>
        
        
           