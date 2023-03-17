<div id="container">

    <form class="marginform" action="auth/models/login.php" method="POST">

        <h1>Connexion</h1>

        <label><b>Nom d'utilisateur</b></label>
        <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>
        <br />
        <label><b>Mot de passe</b></label>
        <input type="password" placeholder="Entrer le mot de passe" name="password" required>
        <br />
        <input type="submit" id='submit' value='LOGIN'>


        <?php if (isset($_POST['email']) && isset($_POST['password'])) {
            foreach ($users as $user) {
                if (
                    $user['email'] === $_POST['username'] &&
                    $user['password'] === $_POST['password']
                ) {
                    //passer la variable is_active a 1
                    //header('Location:http://localhost/blog-de-luc/admin.php;)
                } else {
                    $errorMessage = sprintf(
                        'Les informations envoyées ne permettent pas de vous identifier : (%s/%s)',
                        $_POST['email'],
                        $_POST['password']
                    );
                }
            }
        }
        ?>
    </form>
</div>
</form>
</div>