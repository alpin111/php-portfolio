<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="styles.css">

<html>

<?php $page = "portfolio" ?>

<?php include_once "json.php"; ?>
<?php include_once "nav.php"; ?>


<body>



  <div class = "projects">









<?php
$dirname = "./portfoliofolder/";
$folders = glob($dirname."*");

foreach($folders as $link) {

    $link = substr($link,18);

    if (defined($link) ) {
       eval('$name = $' . $link . '->name;');
       eval('$client = $' . $link . '->client;');


    echo '<a href=project?name='.$link.' /><span class="project_client_span">    '.$client.' :</span> '.$name.'   <br />'; }
}
?>
  </div>








</body>


</html>
