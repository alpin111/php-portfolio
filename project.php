<!DOCTYPE html>
<link rel="stylesheet" type="text/css" href="styles.css">

<html>

<?php include_once "json.php"; ?>
<?php include_once "nav.php"; ?>


<?php
#gets the project name
$pname = $_GET["name"];
?>

<body>

<div class="backbutton">
  <li><a href='portfolio'> <- back</a></li>

</div>






 <?php ########################### gets project info if there is any
   if (defined($pname) ) {
      eval('$name = $' . $pname . '->name;');
      eval('$client = $' . $pname . '->client;');
      eval('$project = $' . $pname . '->project;');
      eval('$special = $' . $pname . '->special;');
       ?>


<div class="info">
  <p>
  Client:
  <?php echo $client?>
  </p>
<p><h1>
<?php echo $name?>
</h1></p>

<p>
<?php echo $project?>
</p>
<p>
<?php echo $special?>
</p>

</div>

 <?php   }
 ?>


<div class="scroll">
  scroll<br>V
</div>


 <div class="gallery">



<?php include_once "video.php"; ?>




<!--
<?php

$dirname = "./portfoliofolder/$pname/";
$images = glob($dirname."*.jpg");

foreach($images as $image) {
    echo '<img src="'.$image.'" /><br />';
}
?> -->



<script>
var projectname = location.search;
// function you can use:
function getSecondPart(str) {
    return str.split('=')[1];
}
// use the function:
var slice =getSecondPart(projectname);

  var dir = "portfoliofolder/" + slice;
  var fileextension = ".jpg";
  $.ajax({
      //This will retrieve the contents of the folder if the folder is configured as 'browsable'
      url: dir,
      success: function (data) {
          //Lsit all png file names in the page
          $(data).find("a:contains(" + fileextension + ")").each(function () {
              var filename = this.href.replace(window.location.host, "").replace("http:///", "").replace("portfolio", "").replace("php", "");;
              $(".gallery").append($("<img src=" + dir + filename + "><br />"));
          });
      }
  });
  </script>




</div>

<div class="backbutton_end">
  <li><a href='portfolio'> <- back</a></li>
</div>

</body>


</html>
