<?php /*
* f2r@TODO CUSTOM
 */?>
<div class="user-panel">
    <div class="pull-left image">
        <?php
        if ($User) {
            echo $this->Html->image(!empty($User->photo) ? $User->photo : '', array('class' => 'img-circle', 'alt' => 'User Image'));
        }
        ?>
    </div>
    <div class="pull-left info">
        <p><?php
            if ($User) {
                echo $User->first_name . ' ' . $User->last_name;
            }
            ?></p>
        <?php //<a href="#"><i class="fa fa-circle text-success"></i> Online</a>?>
    </div>
</div>
