<h2> <?= $title; ?> </h2>

<?php echo validation_errors(); ?>
<?php echo form_open('users/register'); ?>
<div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" name="name" placeholder="Enter Name">
</div>

<div>
    <label for="form-group">Email</label>
    <input type="text" class="form-control" name="email" placeholder="Enter Email">
</div>

<div>
    <label for="form-group">Password</label>
    <input type="password" class="form-control" name="password" placeholder="Enter Password">
</div>

<div>
    <label for="form-group">Confirm Password</label>
    <input type="password" class="form-control" name="password2" placeholder="Enter Confirm Passord">
</div>

<div>
    <label for="form-group">Zip</label>
    <input type="text" class="form-control" name="zipcode" placeholder="Enter Zip Code"> <br>
</div>

<input type="submit" class="btn btn-outline-light btn-block" value="Sign Up" >
</form>