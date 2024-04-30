<div class="hero is-fullheight">
    <div class="hero-body">
        <div class="container is-flex is-flex-direction-column is-justify-content-center is-align-items-center">
            <form action="<?= urlpath('login'); ?>" method="post" class="field">
                <h1 class="title">Login</h1>
                <h2 class="subtitle">Masuk ke sistem</h2>
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
                <button class="button is-fullwidth is-primary" type="submit">Login</button>
            </form>
        </div>
    </div>
</div>