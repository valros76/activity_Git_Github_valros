<?php
	$title="Activité Git/Github - Valros";
	$locateCss="css/style.css";
?>

<?php ob_start();
echo '<h1>Bienvenue sur la page</h1>';
$header = ob_get_clean();?>

<?php ob_start();
echo '<p>Cette page sert d\'exemple pour l\'activité sur les repositories de GitHub.</p>';
echo '<br/>';
echo '<p>J\'ai tenu à faire court, l\importance de l\'activité est de se familiariser avec Git et GitHub.</p>';
$content = ob_get_clean();?>
<?php require('templates/template.php'); ?>
