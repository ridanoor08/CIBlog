<div class="jumbotron">
    <h2 class="display-6"><?php echo $post['fld_title']; ?></h2>
    <hr class="my-4">

    <div class="row">
        <div class="col-md-3">
            <img class="post-thumb " src="<?php echo site_url(); ?>assets/images/posts/<?php echo $post['fld_post_image'] ; ?>"> <br>
            <small>Posted On: <?php echo $post['fld_date']; ?> </small>
        </div>
        <div class="col-md-9">
            <?php echo $post['fld_body'];?>
            <?php if($this->session->userdata('user_id') == $post['fld_usr_id']): ?>
            <?php echo form_open('posts/delete/'. $post['fld_post_id']); ?>
                <a href="edit/<?php echo $post['fld_slug'];?>" class="btn btn-success btn-sm ">&nbsp;&nbsp;&nbsp;EDIT&nbsp;&nbsp;&nbsp;</a>
                <input type="submit" class="btn btn-danger btn-sm" value="DELETE" >
            <?php echo form_close();?>
            <?php endif; ?>
        </div>
    </div>


    <hr>
    <h3>Comments</h3>
    <?php if($comments): ?>
    <?php foreach ($comments as $comment): ?>
            <div>
                <p><?php echo $comment['fld_comment']; ?> <small>[by <strong class="text-secondary"> <?php echo $comment['fld_name'];?> </small></strong>]</p>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
    <p>No Comments to Dispaly</p>
    <?php endif; ?>
    <hr>

    <h2>ADD COMMENTS</h2>

    <?php echo form_open('comments/create/'. $post['fld_post_id']); ?>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name">
            <div style="color: red"><?= form_error('name') ?></div>
        </div>

        <div>
            <label for="form-group">Email</label>
            <input type="text" class="form-control" name="email">
            <div style="color: red"><?= form_error('email') ?></div>
        </div>


        <div>
            <label for="form-group">Comment</label>
            <textarea class="form-control" name="comment" row="4"></textarea>
            <div style="color: red"><?= form_error('comment') ?></div><br>
        </div>

        <input type="hidden" name="slug" value="<?php echo $post['fld_slug']; ?>" >

        <input type="submit" class="btn btn-outline-primary btn-block" value="SUBMIT" >
    </form>
</div>