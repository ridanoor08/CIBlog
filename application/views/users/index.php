<h2> <?= $title; ?> </h2>
<div>
    <table>
        <tr>
            <td>
                Email:
            </td>
            <td>
                <?php if($this->session->has_userdata('email')) {
                    echo $this->session->userdata('email');
                }?> <br>
            </td>
        </tr>
        <tr>
            <td>
                Password:
            </td>
            <td>

            </td>
        </tr>
    </table>
</div>


    <a class="nav-link" href="<?php echo base_url('users/logout');?>">LOGOUT</a>
