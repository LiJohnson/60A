<?php 
global $aoplanOption;
$data = $aoplanOption->exportJson();
echo '<a href="data:text/text;base64,'. base64_encode($data ) .'" download="export-aoplan.json" >export</a>';
echo "<textarea>$data</textarea>";
?>