<!-- <?php
$pdo = new PDO("mysql:host=localhost;dbname=ddb_luc;charset=utf8", "root", "root");
$stmt = $pdo->prepare("SELECT * FROM users");
$stmt->execute();
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
$stmt->closeCursor();
$infosusers = json_encode($users);
?> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="style.css" media="screen" type="text/css" />

</head>

<body>
    <div id="container">

        <form action="verification.php" method="POST">
            <h1>Connexion</h1>

            <label><b>Nom d'utilisateur</b></label>
            <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>

            <label><b>Mot de passe</b></label>
            <input type="password" placeholder="Entrer le mot de passe" name="password" required>

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

</body>

</html>