<?php $title = 'Home'; ?>

<?php ob_start(); ?>
<main class="container">
    <article>
        <div role="group">
            <a role="button" href="<?= urlpath('login'); ?>">Login</a>
            <a role="button" href="<?= urlpath('register'); ?>" )>Register</a>
        </div>
    </article>
</main>

<?php $body = ob_get_clean(); ?>

<?php include 'master.php'; ?>