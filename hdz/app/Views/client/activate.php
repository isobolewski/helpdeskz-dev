<?php

/**
 * @var $this \CodeIgniter\View\View
 */
$this->extend('client/template');
$this->section('window_title');
echo lang('Client.activate.menu');
$this->endSection();
$this->section('content');
?>
<div class="container mt-5">
    <h1 class="heading mb-5">
        <?php echo lang_replace('Client.activate.title', ['%site_name%' => site_config('site_name')]); ?>
    </h1>
    <?php
    if (isset($error_msg)) {
        echo '<div class="alert alert-danger">' . $error_msg . '</div>';
    } else {
        if (\Config\Services::session()->has('activation_success')) {
            echo '<div class="alert alert-success">' . \Config\Services::session()->getFlashdata('activation_success') . '</div>';
        }
    ?>
        <!-- Account activation -->
        <div class="row">
            <div class="col-lg-6">
                <a href="<?php echo site_url(route_to('login')); ?>"><?php echo lang('Client.register.loginLink'); ?></a>
            </div>
        </div>
        <!-- Account activation -->
    <?php
    }
    ?>
</div>

<?php
$this->endSection();
