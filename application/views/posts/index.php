<div class="jumbotron">
    <h2 class="display-6"><?= $title; ?></h2>
    <hr class="my-4">

<?php foreach ($posts as $post): ?>
    <h2><?php echo $post['fld_title']; ?></h2>
    <div class="row">
        <div class="col-md-3">
            <img src="<?php echo site_url(); ?>assets/images/posts/<?php echo $post['fld_post_image'] ; ?>" class="post-thumb">
        </div>

        <div class="col-md-9">
            <small class="text-dark">Posted On: <?php echo $post['fld_date']; ?> in <?php echo $post['fld_category_name']; ?>  </small> <br><br>
            <?php echo word_limiter($post['fld_body'], 60); ?>

            <p><a class="btn btn-outline-primary" href="<?php echo site_url('/posts/'.$post['fld_slug']); ?>">Read More</a></p>
        </div>
    </div>
    <hr>
<?php endforeach; ?>
</div>