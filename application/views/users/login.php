<div class="jumbotron">
    <h2 class="display-6"><?= $title; ?></h2>
    <div class="col-md-8">
        <?php echo form_open('users/checkLogin'); ?>
            <div class="row">
                <div class="col-md-2"><label for="email">Name</label></div>
                <div class="col-md-6"><input type="text" class="form-control" name="email" placeholder="Enter Email"><div style="color: red"><?= form_error('email') ?><br></div></div>
            </div>
            <div class="row">
                <div class="col-md-2"><label for="password">Password</label></div>
                <div class="col-md-6"><input type="password" class="form-control" name="password" placeholder="Enter Password"><div style="color: red"><?= form_error('password') ?><br></div></div>
            </div>
            <div class="row">
                <button type="submit" class="btn btn-outline-primary btn-block">SIGN IN</button>
            </div>
        </form>
    </div>
</div>
