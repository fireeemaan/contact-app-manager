<?php $title = 'Home'; ?>

<?php ob_start(); ?>
<div class="hero is-fullheight">
    <div class="hero-body">
        <div
            class="container has-text-centered is-flex is-flex-direction-column is-justify-content-center is-align-items-center">
            <a class="button mb-5" href="<?= urlpath('login'); ?>">Login</a>
            <a class="button" href="<?= urlpath('register'); ?>">Register</a>
        </div>
    </div>
</div>

<?php $body = ob_get_clean(); ?>

<?php include 'master.php'; ?>