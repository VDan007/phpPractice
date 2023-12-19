

<h1>Delete Term</h1>
<div>
    <div>
        <h2>Are you sure to delet this  <?= $model->term ?>  </h2>
    </div>
    <form action="" method="POST">
        <input type="hidden" name="term" value="<?= $model->term ?>" />
        

        <input type="submit" value="delete this thang">
    </form>
</div>