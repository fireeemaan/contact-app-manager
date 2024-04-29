<fieldset class="container">
    <!-- <a role="button" href="<?= urlpath('login'); ?>">Login</a> -->
    <form action="<?= urlpath('register'); ?>" method="post">
        <label>
            Username
            <input name="username" placeholder="Username" autocomplete="given-name" />
        </label>
        <label>
            Password
            <input type="password" name="password" placeholder="Password" />
        </label>
        <!-- <input type="submit" value="Register" /> -->
        <button type="submit">Register</button>
    </form>
</fieldset>