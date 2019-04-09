<h2> <?= $title; ?> </h2>
<div align="center">

    <?php
    $errorMsg = validation_errors();
    if ($errorMsg){
        echo '<div class="alert alert-error" style="color: red">'. $errorMsg. '</div>';
    }
    ?>
    <?php echo form_open('users/checkLogin'); ?>
<div>
    <h2>TEST LOGIN</h2> <br>
</div>

<div>
    <div class="form-group">
        <table>
            <tr>
                <td>
                    <label for="email" class="form-control-label">Email</label>
                </td>
                <td>
                    <input type="text" placeholder="Enter Email" class="form-control is-valid" name="email"><br><br>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="password" class="form-control-label">Password</label>
                </td>
                <td>
                    <input type="password" placeholder="Enter Password" class="form-control is-valid" name="password"><br><br>
                </td>
            </tr>
        </table>
    </div>
    <div>
        <button type="submit" class="btn btn-default">Login</button>
    </div>
</div>
</form>
</div>