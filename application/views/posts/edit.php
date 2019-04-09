<div class="jumbotron">
    <h2 class="display-6"><?= $title; ?></h2>
    <hr class="my-4">


        <?php echo form_open('posts/update'); ?>
        <input type="hidden" name="id" value="<?php echo $post['fld_post_id'];?>">
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" placeholder="Enter Title" value="<?php echo $post['fld_title'];?>">
            <!--<div style="color: red"><?/*= form_error('title') */?></div>-->
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
            <textarea id="post_body" class="form-control" name="body" ><?php echo $post['fld_body'];?></textarea>
           <!-- <div style="color: red"><?/*= form_error('body') */?></div>-->
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">UPDATE</button>
        </div>
    </form>

</div>
