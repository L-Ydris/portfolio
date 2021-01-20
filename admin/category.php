<?php
include '../lib/includes.php';
include '../partials/adminHeader.php';

$db =new PDO('mysql:host=localhost;dbname=my_user', 'root', '');;
$select = $db->query('SELECT id,name, slug FROM categories');
$categories = $select->fetchAll();
?>

<h1>Les catégories </h1>

<?= var_dump($categories) ?>

<table class = "tablet table-striped">



</table>


<?php
include '../partials/utils.inc.php';
end_page();
?>





