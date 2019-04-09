<div class="jumbotron">
    <h2 class="display-6"><?= $title; ?></h2>

<!-- To display all messages on same place --><?php
/*    $errorMsg = validation_errors();
    if ($errorMsg){
        echo '<div class="alert alert-danger" style="color: red">'. $errorMsg. '</div>';
    }
    */?>

<hr class="my-4">

<?php echo form_open('users/register'); ?>
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" name="name" placeholder="Enter Name">
        <div style="color: red"><?= form_error('name') ?></div>
    </div>

    <div>
        <label for="form-group">Email</label>
        <input type="text" class="form-control" name="email" placeholder="Enter Email">
        <div style="color: red"><?= form_error('email') ?></div>

    </div>

    <div>
        <label for="form-group">Password</label>
        <input type="password" class="form-control" name="password" placeholder="Enter Password">
        <div style="color: red"><?= form_error('password') ?></div>
    </div>

    <div>
        <label for="form-group">Confirm Password</label>
        <input type="password" class="form-control" name="password2" placeholder="Enter Confirm Passord">
        <div style="color: red"><?= form_error('password2') ?></div>
    </div>

    <div>
        <label for="form-group">Zip</label>
        <input type="text" class="form-control" name="zipcode" placeholder="Enter Zip Code"> <br>
        <div style="color: red"><?= form_error('zipcode') ?></div>
    </div>

    <input type="submit" class="btn btn-primary btn-block" value="Sign Up" >
</form>

</div>