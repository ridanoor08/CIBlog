<h2> <?= $title; ?> </h2>

<?php foreach ($posts as $post): ?>
    <h2><?php echo $post['fld_title']; ?></h2>
    <div class="row">
        <div class="col-md-3">
            <img src="<?php echo site_url(); ?>assets/images/posts/<?php echo $post['fld_post_image'] ; ?>" class="post-thumb">
        </div>

        <div class="col-md-9">
            <small class="text-white">Posted On: <?php echo $post['fld_date']; ?> in <?php echo $post['fld_category_name']; ?>  </small> <br>
            <?php echo word_limiter($post['fld_body'], 60); ?>
            <br><br>
            <p><a class="btn btn-outline-light" href="<?php echo site_url('/posts/'.$post['fld_slug']); ?>">Read More</a></p>
        </div>
    </div>
<?php endforeach; ?>
