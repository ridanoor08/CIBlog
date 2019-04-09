<div class="jumbotron">
    <h2 class="display-6"><?= $title; ?></h2>

    <hr class="my-4">

    <?php echo form_open('categories/create'); ?>
    <div class="form-group">
        <label for="category_name">Category Name</label>
        <input type="text" class="form-control" name="category_name" placeholder="Enter Category">
        <div style="color: red"><?= form_error('category_name') ?></div>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-primary">SUBMIT</button>
    </div>

    <?php echo form_close(); ?>
</div>