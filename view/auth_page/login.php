<fieldset class="container">
    <!-- <a role="button" href="<?= urlpath('login'); ?>">Login</a> -->
    <form action="<?= urlpath('login'); ?>" method="post">
        <label>
            Username
            <input name="username" placeholder="Username" autocomplete="given-name" />
        </label>
        <label>
            Password
            <input type="password" name="password" placeholder="Password" />
        </label>
        <button type="submit">Login</button>
    </form>
</fieldset>