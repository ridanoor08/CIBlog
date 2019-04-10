<div class="jumbotron">
    <h2 class="display-6"><?= $title; ?></h2>
    <hr class="my-4">

        <?php foreach($categories as $category): ?>
        <div class="row">
            <div class="col-md-6"><a href="<?php echo site_url('/categories/posts/').$category['fld_category_id'] ?>"><?php echo $category['fld_category_name']; ?></div>
            <div class="col-md-6">
                <?php if($this->session->userdata('user_id') == $category['fld_user_id']): ?>
                    <?php echo form_open('categories/delete/'. $category['fld_category_id']); ?>
                        <input type="submit" class="btn btn-danger btn-sm" value="DELETE" >
                    <?php echo form_close();?>
                <?php endif; ?></div>
        </div>
        <?php endforeach; ?>


</div>
