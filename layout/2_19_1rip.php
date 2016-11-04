<?php
header('Content-type: text/css');
$bgcolor = 'white';
$headercolor = '#555555';
$headerheight = '80px'; //(normi = 40px, pieni 20px ja iso 80px ja medium 60px)
$picaddress = '../images/topbar.png'; //(oli: ../images/topbar.png, defaultiksi ../userContent/layout/logo.png)
$textpic = 1;           // onko Jenkins tekstillä(0) vai kuvana(1)
$textpicaddress = '../userContent/layout/text.png';
$textpictext = 'Jenkins';
$font = 'Helvetica, Arial, sans-serif'; //Helvetica, Arial, sans-serif
$fontcolor = '#333';
$fontsize = '13px';
$crumbarcolor = '#f6faf2';
$nameicon="position: absolute; bottom: 3px; left: 32px;";
$headicon="position: absolute; bottom: 0px;";
$linkwidth="180px";
foreach($_GET as $key=>$value){
	if (!empty($value)){
		$$key = $value;
	}
	if(!empty($_GET["picaddress"])){
		$picaddress="../userContent/layout/" . $_GET["picaddress"] . ".png";
		$nameicon="position: absolute; bottom: 3px; left: 32px; display: none;";
		$headicon="display: block; -moz-box-sizing: border-box; box-sizing: border-box; width: " . $linkwidth . "; height: " . $headerheight . "; padding-left: 180px; background-image: url(" . $picaddress . "); background-repeat: no-repeat;";
	}
}
?>

body {
  margin: 0;
  padding: 0;
  background: <?php echo($bgcolor);?>;
  margin-right: auto;
  margin-left: auto;
}

#header {
  background-color: <?php echo($headercolor);?>;
  height: <?php echo($headerheight);?>;
}

#jenkins-head-icon {
  <?php echo($headicon);?>;
}
#jenkins-name-icon {
  <?php echo($nameicon);?>;
}


#breadcrumbBar, #footer-container, .top-sticker-inner {
  background-color: <?php echo($crumbarcolor);?>;
}

/* Fonts etc */

body, table, form, input, td, th, p, textarea, select
{
  font-family: <?php echo ($font);?>;
  font-size: <?php echo ($fontsize);?>;
}

body, table, form, td, th, p
{
  color: <?php echo ($fontcolor);?>;
}


#top-panel {
  margin-bottom: 3pt;
  height: 34px;
  background: url(<?php echo ($picaddress);?>) repeat-x;
}

