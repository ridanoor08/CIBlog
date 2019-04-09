<h2><?php echo $post['fld_title']; ?></h2>
<small class="text-white">Posted On: <?php echo $post['fld_date']; ?> </small> <br>
<img class="post-thumb thumbnail" src="<?php echo site_url(); ?>assets/images/posts/<?php echo $post['fld_post_image'] ; ?>">
<div class="body">
    <?php echo $post['fld_body']; ?>
</div>

<hr>

<?php echo form_open('posts/delete/'. $post['fld_post_id']); ?>
    <a href="edit/<?php echo $post['fld_slug'];?>" class="btn btn-success btn-sm ">&nbsp;&nbsp;&nbsp;EDIT&nbsp;&nbsp;&nbsp;</a>
    <input type="submit" class="btn btn-danger btn-sm" value="DELETE" >
</form>

<hr color="white">
<h3>Comments</h3>
<?php if($comments): ?>
<?php foreach ($comments as $comment): ?>
        <div>
            <h5 class="text-primary"><?php echo $comment['fld_comment']; ?> <small>[by <strong class="text-secondary"> <?php echo $comment['fld_name'];?> </small></strong>]</h5>
        </div>
    <?php endforeach; ?>
<?php else: ?>
<p>No Comments to Dispaly</p>
<?php endif; ?>



<hr color="white">

<h2>COMMENTS</h2>

<?php echo validation_errors(); ?>
<?php echo form_open('comments/create/'. $post['fld_post_id']); ?>
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" name="name">
    </div>

    <div>
    <label for="form-group">Email</label>
    <input type="text" class="form-control" name="email">
    </div>


    <div>
        <label for="form-group">Comment</label>
        <textarea class="form-control" name="comment" row="4"></textarea><br>
    </div>

    <input type="hidden" name="slug" value="<?php echo $post['fld_slug']; ?>" >

    <input type="submit" class="btn btn-danger btn-sm" value="SUBMIT" >
</form>