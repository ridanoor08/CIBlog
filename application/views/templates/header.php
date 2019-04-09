<html>
<head>
    <title> TestApp </title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css">
    <script src="https://cdn.ckeditor.com/4.11.3/standard/ckeditor.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
    <a class="navbar-brand" href="<?php echo base_url();?>">Test App</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor02" aria-controls="navbarColor02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor02">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url();?>">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url();?>about">ABOUT</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url();?>categories">CATEGORIES</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url();?>posts">BLOG</a>
            </li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
            <li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>posts/create">CREATE POST</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>categories/create">CREATE CATEGORY</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>users/register">SIGN UP</a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo base_url();?>users/checkLogin">SIGN IN</a></li>
        </ul>

    </div>
    </div>
</nav>
<div class="container">
    <!-- Flash Messages -->
    <?php if( $this->session->flashdata('user_registered')): ?>
    <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_registered').'</p>' ;?>
    <?php endif; ?>
    <!-- Flash Messages -->
    <?php if( $this->session->flashdata('post_created')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_created').'</p>' ;?>
    <?php endif; ?>
    <!-- Flash Messages -->
    <?php if( $this->session->flashdata('post_updated')): ?>
    <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_updated').'</p>' ;?>
    <?php endif; ?>
    <!-- Flash Messages -->
    <?php if( $this->session->flashdata('post_deleted')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('post_deleted').'</p>' ;?>
    <?php endif; ?>
    <!-- Flash Messages -->
    <?php if( $this->session->flashdata('category_created')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('category_created').'</p>' ;?>
    <?php endif; ?>

    <?php if( $this->session->flashdata('login_failed')): ?>
    <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>' ;?>
    <?php endif; ?>
