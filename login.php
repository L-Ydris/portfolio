<?php // CONNEXION
      $auth = 0;
      include 'partials/utils.inc.php';
      include 'lib/includes.php';

//      TRAITEMENT DU FORMULAIRE

    if(isset($_POST['username']) && isset($_POST['password'])){
        $db = new PDO('mysql:host=localhost;dbname=my_user', 'root', '');
        $username = $db ->quote( $_POST['username']);
        $password = sha1($_POST['password']);
        $sql ="SELECT * FROM user WHERE username = $username  AND password = '$password' ";
        $select = $db->query($sql);
        if($select->rowCount() > 0){
          $_SESSION['Auth'] = $select->fetch();
          setFlash('Vous êtes maintenant connecté');
          header('Location:' . WEBROOT . 'portfolio/index.php');
          die();
        }

}
    // INCLUSION HEADER
    start_page('Login');
?>

<form action = "#" method ="post" >
    <div class ="form-group">
       <?php echo input('username'); ?>

    </div>
    <div class ="form-group">
        <input type="password" class ="form-control" name ="password" id="password" placeholder="Password" >
    </div>
    <button type = "submit" class = "btn btn-default">Se connecter</button>

</form>

<?php end_page(); ?>