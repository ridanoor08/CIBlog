<h2> <?= $title; ?> </h2>

<?php echo validation_errors(); ?>

<?php echo form_open_multipart('posts/create'); ?>
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" name="title" placeholder="Enter Title">
    </div>

    <div class="form-group">
        <label for="category">Category</label>
        <select type="text" class="form-control" name="category_id">
            <?php foreach ($categories as $category): ?>
            <option value="<?php echo $category['fld_category_id'];?>"> <?php echo $category['fld_category_name'];?> </option>
            <?php endforeach;?>
        </select>
    </div>

    <div class="form-group">
        <label for="body">Body</label>
        <textarea id="post_body" class="form-control" name="body" rows="3"></textarea>
    </div>

    <div class="form-group">
        <label for="upload_img">Upload Image</label>
        <input type="file" name="userfile" size="20">
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-default">SUBMIT</button>
    </div>
</form>
