<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<title>OMNEST - The Open Simulator</title>
	<meta name="robots" content="INDEX,FOLLOW" />
	<meta name="revisit-after" content="30" />
	<meta name="description" content="OMNEST Discrete Event Network Simulator" />
	<meta name="keywords" content="embeddable, discrete event simulator, simulation, c++, c, high-performance, open source, performance modeling, network simulation, protocol design, architecture verification, simulation framework"  />
	<link rel="stylesheet" type="text/css" href="common/omnest.css">

<!--
************Script*************

If you are using the dropdowns
for Images per page and sort
order then you need this script
snippet.

*******************************
//-->

<script type="text/javascript">
<!--
function phpSG_Dropdown(){
	window.location = '?sort=' + document.phpSG.sortOrd.options[document.phpSG.sortOrd.selectedIndex].value + "&perPage=" + document.phpSG.perPage.options[document.phpSG.perPage.selectedIndex].value + "&album=" + document.phpSG.album.value;
}
//-->
</script>
</head>

<body>

<!-- Start Container -->
<div id="container">

<?php include("common/top_inc.php"); ?>
	</div>
	<!-- End Main Menu -->

	<div style="clear: both;">

<?php
// -------------------phpSimpleGallery v2.1.1 ---------------------------
//
// author: Craig Atkins from original code by ricocheting.com
// date: 18/03/2004 (18th March 05)
// version: 2.1.1 (Branched from Gallery 1.01 by ricocheting.com)
// description: gallery script that creates it's own thumbnails if GD or imagemagick is installed
// Displays comment under the image where appropriate, and uses 'bordered' resizing if needed (GD Only).
// license: freeware
// updates at: http://coding.1-fix.com


// +++++++++++++++USER UPDATABLE VARIABLES BELOw:

// Template path (relative to this script)
$config['template'] = "gallery.tpt";

// Image Display Template path (this file is only needed if internalDisplay is true)
$config['templateImage'] = "galleryImage.tpt";

// max image width/height
$config['size'] = 150;

// Make thumbnails universal height/width (GD Only at present)
$config['universal'] = true;

// If using Universal height - what colour do you want the border? (RGB)
$config['borderR'] = 255;
$config['borderG'] = 255; // 255,255,255 = White. 0,0,0 = Black
$config['borderB'] = 255;

// Fix the width of the table columns to what size?
$config['columnsize'] = $config['size']; //Defaulted to the same size as the image

// Use subdirectories of the Image folder as seperate albums?
$config['albums'] = false;

// jpeg thumbnail image quality
$config['imagequality'] = 70;

// rows of images per page
$config['rows'] = 3;

// columns of images per page
$config['cols'] = 3;

// max page numbers to show at once
$config['maxShow'] = 10;

// Show file names under the image? (i.e: image1.jpg)
$config['fileName'] = false;

// Display images within phpSimpleGallery
// Setting true will show images within your template when clicked
// Setting false will make the images open in a new window on their own (with no html)
$config['internalDisplay'] = true;

// default sort order. Values 'nameASC','nameDESC','oldFIRST','newFIRST'.
$config['sortOrder'] = "nameASC"; //Defaulted to show newest images first.

// folder where full size images are stored (include trailing slash)
$config['fulls']="images/gallery";

// name of subfolder where thumbnails are to be created
$config['thumbs'] = $config['fulls']."Thumbs";

// delete redundant thumbnails? 0 - No, 1 - Yes, check monthly, 2 - Yes, check every time
$config['deleteThumbs'] = 2;

// method to create thumbnails. options: gd2, imagemagick
$config['imagemethod'] = "gd2";

// (if imagemagick) - Path to Imagemagick "convert" program
$config['convert'] = "/usr/bin/convert";
// (if imagemagick) - Path to Imagemagick "identify" program
$config['identify'] = "/usr/bin/identify";

// +++++++++++++++ONLY CHANGE HTML CODE BELOW THIS LINE!

$config['start'] = 0;
$config['max'] = 0;
$config['page'] = isset($_GET['page'])?$_GET['page']:"0";
$config['version'] = "<a href=\"http://coding.1-fix.com/php-scripts.htm\" target=\"_BLANK\">Powered by phpSimpleGallery 2.1.1</a>";

$sortOrd = isset($_GET['sort'])?$_GET['sort']:"";
$IMperPage = isset($_GET['perPage'])?$_GET['perPage']:"";

$config['album'] = isset($_GET['album'])?$_GET['album']:"";

$tpt_position = "0";
$tpt_totalimages = "0";
$tpt_imagetable = "";
$tpt_linknext ="";
$tpt_linkprev = "";
$tpt_firstdivide = "-";
$tpt_lastdivide = "-";
$tpt_pages = "";
$tpt_sortorder = "";
$tpt_imgperpage = "";

$imageFolder = "";

if (!file_exists($config['template'])) {
	oops("Template file for gallery: <b>$config[template]</b> does not exist. Check gallery.php - the value of config[template] is probably incorrect.");
	die;
}else{
	$html_out = file_get_contents($config['template']);
}

#######################################################################
// see if we have been given an image to view.
// if so, open it up (if viewing internal)
if((isset($_GET['entry'])) && ($config['internalDisplay'] == true)){
	GetEntry();
}else{
	PrintThumbs();
}
#######################################################################


#-#############################################
# desc: prints out html for thumbnails of images in directory
function PrintThumbs(){
	global $config;
	global $html_out;
	global $sortOrd;
	global $IMperPage;
	global $imageFolder;
	global $tpt_position, $tpt_totalimages, $tpt_imagetable, $tpt_linknext, $tpt_linkprev, $tpt_firstdivide, $tpt_lastdivide, $tpt_pages, $tpt_sortorder, $tpt_imgperpage;

	if (!file_exists($config['fulls'])) {
		oops("directory <b>$config[fulls]</b> does not exist");
		die;
	}
	//thumb directory
	if (!file_exists($config['thumbs'])) {
		if (!mkdir($config['thumbs'], 0755)) {
			oops("Could not create thumb directory <b>$config[thumbs]</b> - check write permissions");
			die;
		}
	}

	// Check if thumbs need deletion
	ProcessThumbDelete();

	if ($config['albums'] == true){
		$albumlist = GetAlbumList($config['fulls']);
	}


	if (!empty($sortOrd)) {

		$config['sortOrder'] = $sortOrd;
	}

	if (!empty($IMperPage)) {
		if($IMperPage=="9"){
			$config['rows'] = 3;
			$config['cols'] = 3;
		}elseif($IMperPage=="15"){
			$config['rows'] = 5;
			$config['cols'] = 3;
		}elseif($IMperPage=="25"){
			$config['rows'] = 5;
			$config['cols'] = 5;
		}elseif($IMperPage=="50"){
			$config['rows'] = 10;
			$config['cols'] = 5;
		}
	}

	if($config['albums'] == true){
	// If we are working with albums, then get the image list for the selected album

		if (empty($config['album'])){
			$imageFolder = $config['fulls'];
		}else{
			$imageFolder = $config['fulls'].$config['album']."/";
		}

		if ((GetFileCount($imageFolder) == 0) && (empty($config['album'])) && (count($albumlist) > 0)){
			$config['album'] = $albumlist[0];
			$imageFolder = $config['fulls'].$config['album']."/";
		}

		$imagelist = GetFileList($imageFolder,0);
	}else{
		$imageFolder = $config['fulls'];
		$imagelist = GetFileList($imageFolder,0);
	}

//   echo count($imagelist);

	//processing for how many images to do on current page
	$config['start']=($config['page']*$config['cols']*$config['rows']);
	$config['max']=( ($config['page']*$config['cols']*$config['rows']) + ($config['cols']*$config['rows']) );

	if($config['max'] > count($imagelist)){$config['max']=count($imagelist);}

	#if there is 0 matches, show 0. otherwise show ($start+1)
	if ($config['max'] == "0"){$tpt_position = "0 - 0"; $tpt_totalimages = "0";}
	else{$tpt_position = ($config['start']+1)." - $config[max]"; $tpt_totalimages = count($imagelist)."";}

	$temp=1;
	//for all the images on the page
	for($i=$config['start']; $i<$config['max']; $i++){

		if (preg_match("/\.(bmp)$/i",$imagelist[$i])) {
			$thumb_image = $config['thumbs']."/".$config['album'].$imagelist[$i].".jpg";
			$thumb_exists = file_exists($thumb_image);
		}else{
			$thumb_image = $config['thumbs']."/".$config['album'].$imagelist[$i];
			$thumb_exists = file_exists($thumb_image);
		}

		$desc_file = $imageFolder.$imagelist[$i].".txt";
		$desc_exists = file_exists($desc_file);

		// create thumb if not exist
		if(!$thumb_exists){
			// Check for safe mode
			if( !ini_get('safe_mode') ){
				set_time_limit(30);
			}
			$thumb_exists = ResizeImage("$imageFolder$imagelist[$i]", $thumb_image, $config['size']);
		}else{
		// If a thumbnail exists then check it's newer than the source.. otherwise, make a new thumb

			if(strftime(filemtime($thumb_image)) < strftime(filemtime("$imageFolder$imagelist[$i]"))){
				// Check for safe mode
				if( !ini_get('safe_mode') ){
					set_time_limit(30);
				}
				$thumb_exists = ResizeImage("$imageFolder$imagelist[$i]", $thumb_image, $config['size']);
			}
		}

		$imagelist[$i] = rawurlencode($imagelist[$i]);
		if (preg_match("/\.(bmp)$/i",$imagelist[$i])) {
			$thumb_image = $config['thumbs']."/".$config['album'].$imagelist[$i].".jpg";
		}else{
			$thumb_image = $config['thumbs']."/".$config['album'].$imagelist[$i];
		}

		$tpt_imagetable = $tpt_imagetable . "<td class=\"border\" style=\"padding-bottom: 3px;\" width=\"$config[columnsize]\"><div align=\"center\">";

		if($config['internalDisplay'] == true){
		// If we are displaying internally then point the link back to this program
			$tpt_imagetable = $tpt_imagetable . "<a href=\"".GetBaseURL()."?entry=$imageFolder$imagelist[$i]\" title=\"$imagelist[$i]\">";
		}else{
		// Otherwise point it to the image file itself
			$tpt_imagetable = $tpt_imagetable . "<a href=\"$imageFolder$imagelist[$i]\" title=\"$imagelist[$i]\" target=\"_blank\">";
		}

		if ($thumb_exists) {
			$tpt_imagetable = $tpt_imagetable . "<img src=\"$thumb_image\" border=\"0\" vspace=\"5\" alt=\"$imagelist[$i]\">";
		} else {
			if($config['fileName'] == false){
			// We don't want to write out the Image Name if we are showing the filenames
			// otherwise we will end up with it twice!!
				$tpt_imagetable = $tpt_imagetable . "$imagelist[$i]";
			}

		}

		if(!$desc_exists){
		// Check if the file has a description txt file, and then display the description
			if($config['fileName'] == true){
			// If we are showing file names then add this under the image
				$tpt_imagetable = $tpt_imagetable . "<br>$imagelist[$i]</a></div></td>\n";
			}else{
				$tpt_imagetable = $tpt_imagetable . "</a></div></td>\n";
			}
		}else{
			$handle = fopen($desc_file, "r");
			if (!feof($handle)) {
   				$desc_text = fgetss($handle, 1024);
  			}
			fclose($handle);
			if($config['fileName'] == true){
				$tpt_imagetable = $tpt_imagetable . "<br>$imagelist[$i]</a><br>" . $desc_text . "</div></td>\n";
			}else{
				$tpt_imagetable = $tpt_imagetable . "</a><br>" . $desc_text . "</div></td>\n";
			}
		}


		//if the max cols is reached, start new col
		if(($temp == $config['cols']) && ($i+1 != $config['max'])){
			$tpt_imagetable = $tpt_imagetable . "</tr><tr><td colspan=\"$config[cols]\" class=\"spacer\">&nbsp;</td></tr><tr>\n";
			$temp=0;
		}
		$temp++;
	}//foreach img

	//if there are no results
	if($config['start'] == $config['max']){
		$tpt_imagetable = "<td align=\"center\" colspan=\"$config[cols]\" class=\"spacer\">No Entries found</td>\n";
	}
	//if there are empty "boxes" in the row (ie; last page)
	elseif($temp != $config['cols']+1){
		$tpt_imagetable = $tpt_imagetable . "<td align=\"center\" colspan=\"".($config['cols']-$temp+1)."\">&nbsp;</td>\n";
	}


	$tpt_imagetable = $tpt_imagetable . "</tr>";

	$tpt_imgperpage = "<select name=\"perPage\" onChange=\"phpSG_Dropdown();\">\n";
	if($IMperPage=="9"){
		$tpt_imgperpage = $tpt_imgperpage . "<option value=\"9\" selected>9</option>";
	}else{
		$tpt_imgperpage = $tpt_imgperpage . "<option value=\"9\">9</option>";
	}
	if($IMperPage=="15"){
		$tpt_imgperpage = $tpt_imgperpage . "<option value=\"15\" selected>15</option>";
	}else{
		$tpt_imgperpage = $tpt_imgperpage . "<option value=\"15\">15</option>";
	}
	if($IMperPage=="25"){
		$tpt_imgperpage = $tpt_imgperpage . "<option value=\"25\" selected>25</option>";
	}else{
		$tpt_imgperpage = $tpt_imgperpage . "<option value=\"25\">25</option>";
	}
	if($IMperPage=="50"){
		$tpt_imgperpage = $tpt_imgperpage . "<option value=\"50\" selected>50</option>";
	}else{
		$tpt_imgperpage = $tpt_imgperpage . "<option value=\"50\">50</option>";
	}
	$tpt_imgperpage = $tpt_imgperpage . "</select>";



	$tpt_sortorder = "<select name=\"sortOrd\" onChange=\"phpSG_Dropdown();\">\n";
	if($config['sortOrder'] == "nameASC"){
		$tpt_sortorder = $tpt_sortorder . "<option value=\"nameASC\" selected>Name Ascending</option>";
	}else{
		$tpt_sortorder = $tpt_sortorder . "<option value=\"nameASC\">Name Ascending</option>";
	}
	if($config['sortOrder'] == "nameDESC"){
		$tpt_sortorder = $tpt_sortorder . "<option value=\"nameDESC\" selected>Name Descending</option>";
	}else{
		$tpt_sortorder = $tpt_sortorder . "<option value=\"nameDESC\">Name Descending</option>";
	}
	if($config['sortOrder'] == "newFIRST"){
		$tpt_sortorder = $tpt_sortorder . "<option value=\"newFIRST\" selected>Newest First</option>";
	}else{
		$tpt_sortorder = $tpt_sortorder . "<option value=\"newFIRST\">Newest First</option>";
	}
	if($config['sortOrder'] == "oldFIRST"){
		$tpt_sortorder = $tpt_sortorder . "<option value=\"oldFIRST\" selected>Oldest First</option>";
	}else{
		$tpt_sortorder = $tpt_sortorder . "<option value=\"oldFIRST\">Oldest First</option>";
	}
	$tpt_sortorder = $tpt_sortorder . "</select><input type=\"hidden\" name=\"album\" value=\"".$config['album']."\">";

GetPageNumbers(count($imagelist));

// Do our template Replaces

$html_out = str_replace("<!--Columns//-->", $config['cols'], $html_out);
$html_out = str_replace("<!--Position//-->", $tpt_position, $html_out);
$html_out = str_replace("<!--Max//-->", $tpt_totalimages, $html_out);
$html_out = str_replace("<!--TotalPages//-->", $config['totalPages'], $html_out);
$html_out = str_replace("<!--LinkPrev//-->", $tpt_linkprev, $html_out);
$html_out = str_replace("<!--LinkNext//-->", $tpt_linknext, $html_out);
$html_out = str_replace("<!--FirstDivide//-->", $tpt_firstdivide, $html_out);
$html_out = str_replace("<!--LastDivide//-->", $tpt_lastdivide, $html_out);
$html_out = str_replace("<!--Pages//-->", $tpt_pages, $html_out);
$html_out = str_replace("<!--ImgPerPage//-->", $tpt_imgperpage, $html_out);
$html_out = str_replace("<!--SortOrder//-->", $tpt_sortorder, $html_out);
$html_out = str_replace("<!--ImageTable//-->", $tpt_imagetable, $html_out);
if ($config['albums'] == true){
	$html_out = str_replace("<!--AlbumList//-->", BuildAlbumList($albumlist), $html_out);
}else{
	$html_out = str_replace("<!--AlbumList//-->", "", $html_out);
}
$html_out = str_replace("<!--VersionFooter//-->", $config['version'], $html_out);

echo $html_out;

}#-#PrintThumbs()

#-#############################################
# desc: ProcessThumbDelete()
# param: none
# returns: nothing
function ProcessThumbDelete(){

	global $config;

	$totalImgCount = 0;
	$totalThumbCount = 0;

	if(($config['deleteThumbs'] == 2) || ($config['deleteThumbs'] == 1 && date(j) == 1)){

		//Let's count the total thumbnails we have

		$totalThumbCount = GetFileCount($config['thumbs']);

		//Now let's count the total images we have in all directories
		if ($config['albums'] == true){
			// Count the files in the root folder
			$totalImgCount = GetFileCount($config['fulls']);
			$albumlist = GetAlbumList($config['fulls']);

			// Loop through the album list counting the images in folders
			for($i=0; $i<count($albumlist) ; $i++){
				$totalImgCount = $totalImgCount + GetFileCount($config['fulls'].$albumlist[$i]."/");
			}

			if($totalThumbCount > $totalImgCount){
				$thumbFiles = GetFileList($config['thumbs'],1);
				for($i=0; $i<count($albumlist) ; $i++){
					$imageFiles = GetFileList($config['fulls'].$albumlist[$i]."/",1);
					for($j=0; $j<count($imageFiles) ; $j++){
						if (preg_match("/\.(bmp)$/i",$imageFiles[$j])) {
							$imgFileName = $albumlist[$i].$imageFiles[$j].".jpg";
						}else{
							$imgFileName = $albumlist[$i].$imageFiles[$j];
						}

						$key = array_search($imgFileName, $thumbFiles);
						if($key !== false){
							$thumbFiles = array_trim($thumbFiles, $key);
						}
					}
				}

				// Now loop through our array of remaining items and kill off the files that are misfits
				for($i=0; $i<count($thumbFiles); $i++){
					unlink($config['thumbs']."/".$thumbFiles[$i]);
				}
			}

		}else{

			$totalImgCount = GetFileCount($config['fulls']);

			if($totalThumbCount > $totalImgCount){
				$thumbFiles = GetFileList($config['thumbs'],1);
				$imageFiles = GetFileList($config['fulls'],1);

				for($i=0; $i<$totalImgCount ; $i++){
					if (preg_match("/\.(bmp)$/i",$imageFiles[$i])) {
						$imgFileName = $imageFiles[$i].".jpg";
					}else{
						$imgFileName = $imageFiles[$i];
					}

					$key = array_search($imgFileName, $thumbFiles);
					if($key !== false){
						$thumbFiles = array_trim($thumbFiles, $key);
					}
				}
				// Now loop through our array of remaining items and kill off the files that are misfits
				for($i=0; $i<count($thumbFiles); $i++){
					unlink($config['thumbs']."/".$thumbFiles[$i]);
				}
			}
		}
	}

}#-#ProcessThumbDelete()

#-#############################################
# desc: BuildAlbumList($dirArr)
# param: dirArr - Array of folders to look at
# returns: html listing of folders
function BuildAlbumList($dirArr){

	global $config,$sortOrd,$IMperPage;

	$albumhtml = "";

	// If we have a 'root' image directory with files, then show a link back to it
	if(GetFileCount($config['fulls']) > 0){
		if ($config['album'] == ""){
			$albumhtml = $albumhtml."<h1>Gallery Home</h1>";
		}else{
			$albumhtml = $albumhtml."<img src=\"common/images/list_03.gif\" width=\"11\" height=\"9\"><a href=\"".GetBaseURL()."?page=&sort=$sortOrd&perPage=$IMperPage&album=\" class=\"albums\">Gallery Home</a><br>";
		}
	}

	for($i=0; $i<count($dirArr) ; $i++){

		if($dirArr[$i] == $config['album']){

			$albumhtml = $albumhtml."<h1 style=\"margin-top:10px;\">".$dirArr[$i]."</h1>";

		}else{

			$albumhtml = $albumhtml."<img src=\"common/images/list_03.gif\" width=\"11\" height=\"9\"><a href=\"".GetBaseURL()."?page=&sort=$sortOrd&perPage=$IMperPage&album=".$dirArr[$i]."\" class=\"albums\">".$dirArr[$i]."</a><br>";

		}

	}

	return $albumhtml;

}#-#BuildAlbumList()


#-#############################################
# desc: Displays image passed from querystring
# returns: (bool) worked
function GetEntry(){
	global $config;

if(!file_exists("$_GET[entry]")){
	oops("Sorry, the image you have chosen to view does not exist");
	return false;
}

if (!file_exists($config['templateImage'])) {
	oops("Template file for image display: <b>$config[templateImage]</b> does not exist. Check gallery.php - the value of config[templateImage] is probably incorrect.");
	die;
}else{
	$html_out = file_get_contents($config['templateImage']);
}

$desc_file = $_GET['entry'].".txt";
$desc_exists = file_exists($desc_file);

if ($desc_exists) {
	$handle = fopen($desc_file, "r");
	if (!feof($handle)) {
   		$desc = fgetss($handle, 1024);
  	}
	fclose($handle);
}else{
	$desc = "No Description";
}

// Do our template Replaces

$html_out = str_replace("<!--LinkBack//-->", "<a href=\"$_SERVER[HTTP_REFERER]\">Back</a>", $html_out);
$html_out = str_replace("<!--Modified//-->", date ("F d Y H:i:s.", filemtime($_GET['entry'])), $html_out);
$html_out = str_replace("<!--Filename//-->", basename($_GET['entry']), $html_out);
$html_out = str_replace("<!--Description//-->", $desc, $html_out);
$html_out = str_replace("<!--Image//-->", "<img src=\"" . $_GET['entry'] . "\">", $html_out);
$html_out = str_replace("<!--VersionFooter//-->", $config['version'], $html_out);

echo $html_out;


}#-#GetEntry()

#-#############################################
# desc: GetFileCount
# param: directory to look through
# returns: number of images in folder
function GetFileCount($dirname="."){

	$filecnt = 0;

	if ($handle = opendir($dirname)) {
		while (false !== ($file = readdir($handle))) {
			if (preg_match("/\.(jpe?g|gif|png|bmp)$/i",$file)) {
				$filecnt++;
			}
		}
		closedir($handle);
	}

	return $filecnt;

}#-#GetFileCount()


#-#############################################
# desc: GetFileList
# param: [optional] directory to look through
# returns: array with list of images
function GetFileList($dirname=".",$nosort=0){
	global $config;
	$list = array();

	if ($handle = opendir($dirname)) {
		while (false !== ($file = readdir($handle))) {
			if (preg_match("/\.(jpe?g|gif|png|bmp)$/i",$file)) {
				$list[] = $file;
			}
		}
		closedir($handle);
	}

	if($nosort == 0){

		if($config['sortOrder'] == "nameASC"){

			sort($list);
			reset($list);

		}elseif($config['sortOrder'] == "nameDESC"){

			rsort($list);
			reset($list);

		}elseif($config['sortOrder'] == "oldFIRST"){

			usort($list, 'sortOld');

		}elseif($config['sortOrder'] == "newFIRST"){

			usort($list, 'sortNew');

		}else{

			sort($list);
			reset($list);

		}

	}

	return $list;
}#-#GetFileList()

#-#############################################
# desc: GetAlbumList
# param: StartFolder - Folder to look through
# returns: array with list of albums
function GetAlbumList($dirname){

	global $config;

	$oldDir = getcwd();

	$list = array();

	if ($handle = opendir($dirname)) {

		chdir($dirname);

		while (false !== ($file = readdir($handle))) {
			if ((is_dir($file)) && ($file != ".") && ($file != "..")) {

				if ($config['fulls'].$file != $config['thumbs']){
					$list[] = $file;
				}
			}
		}
		closedir($handle);

		chdir($oldDir);

	}

	sort($list);
	reset($list);

	return $list;

}#-#GetAlbumList()

#-#############################################
# desc: sorts an array of filenames based on file dates - Old to New

function sortOld($x, $y)
{

global $config;
global $imageFolder;

 if (strftime(filemtime($imageFolder.$x)) == strftime(filemtime($imageFolder.$y)))
  return 0;
 else if (strftime(filemtime($imageFolder.$x)) < strftime(filemtime($imageFolder.$y)))
  return -1;
 else
  return 1;
}


#-#############################################
# desc: sorts an array of filenames based on file dates - New to Old

function sortNew($x, $y)
{

global $config;
global $imageFolder;

 if (strftime(filemtime($imageFolder.$x)) == strftime(filemtime($imageFolder.$y)))
  return 0;
 else if (strftime(filemtime($imageFolder.$x)) > strftime(filemtime($imageFolder.$y)))
  return -1;
 else
  return 1;
}


#-#############################################
# desc: throw an error message
# param: [optional] any custom error to display
function oops($msg) {
?>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<title>phpSimpleGallery Error</title>
</head>
<body>
<table align=center>
<tr><td class=header>
Error
</td></tr>

<tr><td class=entry>
	<br><?=$msg?>
	<br><br>
	<hr size=1 noshade width="80%" class=desc>
	<center>Please hit the <a href="javaScript:history.back();"><b>back button</b></a> on your browser to try again.</center>

</td></tr></table>
</body>
</html>
<?php
}#-#oops()


#-#############################################
# desc: chooses method to resize image to correct ratio
# param: ($image) image reference of full size img to use ($newimage) what to save thumbnail as ($size) max width or height to resize to
# returns: (bool) if image was created
function ResizeImage($image, $newimage, $size) {
   global $config;

	switch ($config['imagemethod']) {
		case "imagemagick":
		return ResizeImageUsingIM($image, $newimage, $size);
			break;
		case "gd1":
		case "gd2":
			return ResizeImageUsingGD($image, $newimage, $size);
			break;
		default:
			return false;
			break;
	}
}#-#ResizeImage()


#-#############################################
# desc: resizes image if GD was used
# param: ($image) image reference of full size img to use ($newimage) what to save thumbnail as ($size) max width or height to resize to
# returns: (bool) if image was created
function ResizeImageUsingGD($image, $newimage, $size) {
	global $config;

	list ($width,$height,$type) = GetImageSize($image);

	if($im = ReadImageFromFile($image,$type)){
		//if image is smaller than the $size, make it actual $size
		if($height < $size && $width < $size){
			$newheight=$height;
			$newwidth=$width;
		}
		//if image height is larger, height=$size, then calc width
		else if($height > $width){
			$newheight=$size;
			$newwidth=($width / ($height/$size));//cast the resized width as int
		}
		//if image width is larger, width=$size, then calc width
		else{
			$newwidth=$size;
			$newheight=($height / ($width/$size));//cast the resized height as int
		}

		if(!$config['universal']){

			$im2=ImageCreateTrueColor($newwidth,$newheight);
			ImageCopyResampled($im2,$im,0,0,0,0,$newwidth,$newheight,$width,$height);

		}else{
			$im2=ImageCreateTrueColor($size,$size);
			$background = imagecolorallocate($im2, $config['borderR'], $config['borderG'], $config['borderB']);
			imagefilledrectangle($im2, 0, 0, $size - 1, $size - 1, $background);
			if($newwidth==$size){
				ImageCopyResampled($im2,$im,0,(($size-$newheight)/2),0,0,$newwidth,$newheight,$width,$height);
			}else if($newheight==$size){
				ImageCopyResampled($im2,$im,(($size-$newwidth)/2),0,0,0,$newwidth,$newheight,$width,$height);
			}
		}

		if(WriteImageToFile($im2,$newimage,$type)){
			return true;
		}
	}

return false;
}#-#ResizeImageUsingGD()


#-#############################################
# desc: resizes image using imagemagick
# param: ($image) image reference of full size img to use ($newimage) what to save thumbnail as ($size) max width or height to resize to
# returns: (bool) if image was created
function ResizeImageUsingIM($image, $newimage, $size) {
   global $config;

   Exec("$config[identify] -ping -format \"%w %h\" \"$image\"", $sizeinfo);

   if (! $sizeinfo ) {
      return false;
   }
   $size = explode(" ", $sizeinfo[0]);
   $width  = $size[0];
   $height = $size[1];

   if (!$width) {
      return false;
   }

		//if image is smaller than the 160 container, make it actual size
		if($height < $size && $width < $size){
			$newheight=$height;
			$newwidth=$width;
		}
			//if image height is larger, height=$size, then calc width
		else if($height > $width){
			$newheight=$size;
			$newwidth=($width / ($height/$size));//cast the resized width as int
		}
			//if image width is larger, width=$size, then calc width
		else{
			$newwidth=$size;
			$newheight=($height / ($width/$size));//cast the resized height as int
		}


   Exec("$config[convert] -geometry \"$newwidth"."x"."$newheight\" -quality \"$config[imagequality]\" \"$image\" \"$newimage\"");

   return file_exists($newimage);
}#-#ResizeImageUsingIM()


#-#############################################
# desc: resizes image using imagemagick
# param: ($filename) filename of image to create ($type) int of type. 1=gif,2=jpeg,3=png
# returns: binary img
function ReadImageFromFile($filename, $type) {
	$imagetypes = ImageTypes();

	switch ($type) {
		case 1 :
			if ($imagetypes & IMG_GIF){
				return $im = ImageCreateFromGIF($filename);
			}
		break;
		case 2 :
			if ($imagetypes & IMG_JPEG){
				return ImageCreateFromJPEG($filename);
			}
		break;
		case 3 :
			if ($imagetypes & IMG_PNG){
				return ImageCreateFromPNG($filename);
			}
		case 6 :
			if (!include_once('phpthumbs.bmp.php')) {
			    	oops("You do not appear to have phpthumbs.bmp.php installed in the same path as gallery.php. Please add this file, or remove .bmp files from your image directory");
			}

				$phpThumbBMP = new phpthumb_bmp();
				return $phpThumbBMP->phpthumb_bmpfile2gd($filename);
		break;
		default:
		return 0;
	}
}#-#ReadImageFromFile()


#-#############################################
# desc: resizes image using imagemagick
# returns: binary img
function WriteImageToFile($im, $filename, $type) {
	global $config;

	switch ($type) {
		case 1 :
			return ImageGIF($im, $filename);
		case 2 :
			return ImageJpeg($im, $filename, $config['imagequality']);
		case 3 :
			return ImagePNG($im, $filename);
		case 6:
			return ImageJpeg($im, $filename, $config['imagequality']);
		default:
			return false;
	}
}#-#WriteImageToFile()


#-#############################################
# sub: GetPageNumbers
# desc: gets the pages in the list
function GetPageNumbers($entries) {
	global $config;
	global $sortOrd, $IMperPage;
	global $tpt_pages, $tpt_firstdivide, $tpt_lastdivide, $tpt_linknext, $tpt_linkprev;

	if (!empty($IMperPage)){
		$perPage = $IMperPage;
	}else{
		$perPage = "";
	}

	$config['totalPages']=Ceil(($entries)/($config['cols']*$config['rows']));

	// echo out PREV
	if( ($config['page']-1) >= 0){
	$tpt_linkprev = "<a href=\"".GetBaseURL()."?page=".($config['page']-1)."&sort=$sortOrd&perPage=$perPage&album=".$config['album']."\" class=page><b>&laquo;Prev</b></a>";}
	// else no link
	else{$tpt_linkprev = "<b>&laquo;Prev</b>";}

		// for each link, echo out page link
		$start=0; // starting image number
		$end=$config['totalPages']-1; // ending image number (total / number image on page)

		// cutoff size < page. or . page != last page (otherwise keep above values)
		if($config['maxShow'] < $config['page'] || (($config['cols']*$config['rows']*$config['maxShow'])< $entries) ){
			// if page >= cutoff size+1 -> start at page - cutoff size
			if($config['page'] >= ($config['maxShow']+1) && $config['page'] < $end-$config['maxShow']){ $start = $config['page']-$config['maxShow'];}
			elseif($end < $config['page']+$config['maxShow']+1 && $config['totalPages']-1 >= $config['maxShow']*2+1){$start = $config['totalPages']-1-$config['maxShow']*2;}
			else{$start=0;} // else start at 0

			// if page+cutoff+1 > number of pages total -> end= number of pages total
			if( $config['page']+$config['maxShow']+1 > $config['totalPages']-1 ){$end = $entries/($config['cols']*$config['rows']);}
			#&oops("$end,$config['maxShow']");
			elseif($start == 0 && $end > $config['maxShow']*2){$end = $config['maxShow']*2;}
			elseif($start == 0 && $config['totalPages'] <= $config['maxShow']*2){$end = $config['totalPages']-1;}
			else{$end = ($config['page']+$config['maxShow']);} //end = page+cutoff+1
		}


	// echo out divide marker
	if($start > 0){$tpt_firstdivide = "...";}
	else{$tpt_firstdivide = "-";}


	// echo out each of the numbers
	for($i=$start; $i<=$end ; $i++){
		if($config['page']==$i){$tpt_pages = $tpt_pages . "<b>[".($i+1)."]</b> \n";}
		else{$tpt_pages = $tpt_pages . "<a href=\"".GetBaseURL()."?page=$i&sort=$sortOrd&perPage=$perPage&album=".$config['album']."\" class=page><b>".($i+1)."</b></a> \n";}
	}


	// echo out divide marker
	if(Ceil($end) < $config['totalPages']-1){$tpt_lastdivide = "...";}
	else{$tpt_lastdivide = "-";}

	// echo out NEXT
	if( ($config['page']+1) <= $config['totalPages']-1){
	$tpt_linknext =  "<a href=\"".GetBaseURL()."?page=".($config['page']+1)."&sort=$sortOrd&perPage=$perPage&album=".$config['album']."\" class=page><b>Next&raquo;</b></a> ";}
	// else no link
	else{$tpt_linknext = " <b>Next&raquo;</b> ";}

}#-#end GetPageNumbers()

function GetBaseURL(){

	$script_path = pathinfo($_SERVER['SCRIPT_NAME']);

	return $script_path['basename']; // Returns "test.php"

}

/* Usage:
   $array : Array
   $indey : Integer

   The value of $array at the index $index will be
   deleted by the function.
*/
function array_trim ( $array, $index ) {
   if ( is_array ( $array ) ) {
     unset ( $array[$index] );
     array_unshift ( $array, array_shift ( $array ) );
     return $array;
     }
   else {
     return false;
     }
   }

?>




	<!-- Start Right -->
	<!-- End Right -->


	</div>

</div>
<!-- End Container -->

<?php include("common/footer_inc.php"); ?>

</body>
</html>
