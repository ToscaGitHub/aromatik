<?php include("includes/headerBack.inc.php"); ?>
<form method="post" class="formCo">
    <div class="form-group">
        <label for="exampleInputEmail1">User Name</label>
        <input type="text" class="form-control" id="username" name="username" placeholder="Enter email">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="pw" name="password" placeholder="Password">
    </div>
    <button type="submit" class="btn btn-dark" id="btnEnvoyerRegister">Connexion</button>
</form>
<?php
if (!empty($_POST)) {
    if (!empty($_POST['username']) && !empty($_POST['password'])) {
        $recupName = 'SELECT COUNT(id_login) FROM admin_aromatik WHERE admin_name="' . $_POST["username"] . '"';
        $resultName = $pdo->query($recupName);
        $verifName = $resultName->fetch();
        if ($verifName["COUNT(id_login)"] == 0) {
            ?> <p>Erreur</p> <?php
        } else {
            $testmdp = 'SELECT admin_password FROM admin_aromatik WHERE admin_name="' . $_POST["username"] . '"';
            $mdpbrut = $pdo->query($testmdp);
            $mdp = $mdpbrut->fetch();
            if ($mdp["admin_password"] == md5($_POST['password'])) {
                $repupUserName = $pdo->query('SELECT admin_name FROM admin_aromatik WHERE admin_name="' . $_POST["username"] . '"');
                $userName = $repupUserName->fetch();
                session_start();
                if (empty($_SESSION["connect"])) {
                    $_SESSION["connect"] = true;
                    $_SESSION["user"] = $userName["admin_name"];
                }
                header("Location:admin.php");
                exit;
            }
        }
    }
}

?>
<?php include("includes/footerBack.inc.php"); ?>