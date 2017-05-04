
<?php
$page_title = "startpage";
include("includes/header.php");
?>

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <link rel="stylesheet" href="css/index.css" type="text/css">
</head>

<?php
include("includes/Oauth.php");
       ?>
<?php
include("data.php");
       ?>
<div id="graf" style="width: 1200px; height: 400px;"><!-- Plotly ritas här --></div>

	<h1>Plott av data</h1>
	<p>Data hämta från php, som i sin tur hämtar från en annan server via REST.</p>

	<button type="button" onclick="loadDoc()">Ladda om</button>
<?php
include("includes/footer.php");
       ?>

