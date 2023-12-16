

<h1>Edit Term</h1>
<div>
    <form action="" method="POST">
        <input type="hidden" name="original-term" value="<?= $model->term ?>" />
        <label for="term">Term:</label>
        <input type="text" name="term" id="term" value="<?= $model->term ?>" />

        <label for="definition">Definition:</label>
        <input type="text" name="definition" id="definition" value="<?= $model->definition ?>" />

        <input type="submit" value="modify this thang">
    </form>
</div>