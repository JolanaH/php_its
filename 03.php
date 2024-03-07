<?php
include("päis.php");?>

<?php
if (isset($_GET["page"])) {
    $page = $_GET["page"];
    if ($page=="teenused"){
        include("teenused.php");
    }else if($page=="kontaktid"){
        include("kontaktid.php");
    }

}else{
?>
<h1>Avaleht</h1>
<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.stiae quidem?</p>
<?php 
}
?>
<?php include("jalus.php"); ?>