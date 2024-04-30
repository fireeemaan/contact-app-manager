<div class="hero is-fullheight">
    <div class="hero-body">
        <div class="container is-flex is-flex-direction-column is-justify-content-center is-align-items-center">
            <form action="<?= urlpath('register'); ?>" method="post" class="field">
                <h1 class="title">Register</h1>
                <h2 class="subtitle">Daftar akun baru.</h2>
                <div class="field">
                    <label class="label">
                        Username
                        <div class="control">

                            <input class="input" name="username" placeholder="Username" autocomplete="given-name" />
                        </div>
                    </label>
                </div>
                <div class="field">
                    <label class="label">
                        Password
                        <div class="control">
                            <input class="input" type="password" name="password" placeholder="Password" />
                        </div>
                    </label>
                </div>
                <button class="button is-fullwidth is-primary" type="submit">Register</button>
            </form>
        </div>
    </div>
</div>