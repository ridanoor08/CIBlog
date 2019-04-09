<div class="jumbotron">
    <h2 class="display-6"><?= $title; ?></h2>
    <hr class="my-4">

        <?php foreach($categories as $category): ?>
       <a href="<?php echo site_url('/categories/posts/').$category['fld_category_id'] ?>"><?php echo $category['fld_category_name']; ?></a><br><br>
        <?php endforeach; ?>


</div>
