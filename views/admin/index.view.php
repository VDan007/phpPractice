

<div style="margin-bottom: 2em;">
               
                <a href="create.php">Create New Term</a>
</div>

<div style="display:flex; flex-direction:column; justify-content: space-between; ">
    
         <?php foreach ($model as $item) : ?>
            <div style="border: 5px solid red; display:flex;justify-content: center; align-items:center; gap:20px;">
                <a href="detail.php?term=<?=$item->term?>">
                    <h1> <?= $item->term ?>: </h1>
                </a>
                <h3> <?= $item->definition ?> </h3>
                <a href="edit.php?key=<?=$item->term?>">edit</a>
            </div> 

            
         <?php endforeach; ?>

         
         
         
         
</div>
        
        
           