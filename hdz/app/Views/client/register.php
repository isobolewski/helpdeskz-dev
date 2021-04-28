<?php

/**
 * @var $this \CodeIgniter\View\View
 */
$this->extend('client/template');
$this->section('window_title');
echo lang('Client.register.menu');
$this->endSection();
$this->section('content');
?>
<div class="container mt-5">
    <h1 class="heading mb-5">
        <?php echo lang_replace('Client.register.title', ['%site_name%' => site_config('site_name')]); ?>
    </h1>

    <!-- Register Box -->
    <div class="row">
        <div class="col-lg-6">
            <?php echo form_open('', [], ['do' => 'submit']); ?>
            <?php

            if (\Config\Services::session()->has('form_success')) {
                echo '<div class="alert alert-success">' . \Config\Services::session()->getFlashdata('form_success') . '</div>';
            }

            if (isset($error_msg)) {
                echo '<div class="alert alert-danger">' . $error_msg . '</div>';
            }
            ?>
            <div class="form-group">
                <div class="input-group">
                    <input type="text" name="fullname" placeholder="<?php echo lang('Client.form.fullName'); ?>" class="form-control" value="<?php echo set_value('fullname'); ?>">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <input type="email" name="email" placeholder="<?php echo lang('Client.form.email'); ?>" class="form-control" value="<?php echo set_value('email'); ?>">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <input type="password" name="password" placeholder="<?php echo lang('Client.form.password'); ?>" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <input type="password" name="repeatPassword" placeholder="<?php echo lang('Client.form.repeatPassword'); ?>" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-lg-6 mb-3">
                        <button class="btn btn-primary btn-block"><?php echo lang('Client.register.button'); ?></button>
                    </div>
                    <div class="col-lg-6 text-lg-right">
                        <a href="<?php echo site_url(route_to('login')); ?>"><?php echo lang('Client.register.loginLink'); ?></a>
                    </div>
                </div>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
    <!-- End Register Box -->
</div>

<?php
$this->endSection();
