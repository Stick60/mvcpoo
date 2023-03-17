<?php
$pdo = new PDO("mysql:host=localhost;dbname=ddb_luc;charset=utf8", "root", "root");
$stmt = $pdo->prepare("SELECT * FROM users");
$stmt->execute();
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
$stmt->closeCursor();
$infosusers = json_encode($users);

session_start();
print_r($_POST);
if (isset($_POST['username']) && isset($_POST['password'])) {
    // connexion à la base de données
    $db_username = 'root';
    $db_password = 'jo161086';
    $db_name = 'ddb_luc';
    $db_host = 'localhost';
    $db = new mysqli($db_host, $db_username, $db_password, $db_name)
        or die('could not connect to database');

    // on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
    // pour éliminer toute attaque de type injection SQL et XSS
    $username = mysqli_real_escape_string($db, htmlspecialchars($_POST['username']));
    $password = mysqli_real_escape_string($db, htmlspecialchars($_POST['password']));

    if ($username !== "" && $password !== "") {
        $requete = "SELECT count(*) FROM users WHERE 
 username=? AND password=?";
        $query = $db->prepare($requete);
        $query->bind_param("ss", $username, $password);
        $query->execute();
        $response = $query->get_result();
        print_r($response);
        print_r($requete);
        if ($response->num_rows > 0) // nom d'utilisateur et mot de passe correctes
        {
            $_SESSION['username'] = $username;
            header('Location: principale.php');
        } else {
            //   header('Location: login.php?erreur=1'); // utilisateur ou mot de passe incorrect
        }
    } else {
        header('Location: login.php?erreur=2'); // utilisateur ou mot de passe vide
    }
} else {
    header('Location: login.php');
}
mysqli_close($db); // fermer la connexion
?>