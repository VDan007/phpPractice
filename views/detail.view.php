<div style="display:flex; justify-content: space-between; ">

        <h1><?= $view_bag['title'] ?></h1>
        <div class="main_cont">

        
                <div class='cont'>
        
                        <?= $model->definition; ?>
        
                </div>
        </div>

    

    



</div>

<style>
        .main_cont{
                border:1px solid gray;
                display: flex;
                justify-content: center;
                gap:20px;
                align-items: center;
                width:80%;
                margin: 0 auto;
        }

        h1{
                color:blue;
        }
        .cont{
                border: 2px solid orange;
                min-width: 10px;
                min-height: 10px;
        }

</style>