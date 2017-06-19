<?php
require 'config.php';
include 'config.php';
header("Content-type: text/css");
$fadenums=$fadenum;
$slidenums=$slidenum;


//Background Screen Movement

//Right to left
if ($bgsliding == "0") { 

	$prcntbg = "100";
	$prcntbg2 = "0";
	$pxbg = "1920";
	$pxbg2 = "0";
	$bgpx3 = "0";
	$bgpx4 = "0";	
	
//Left to Right
} elseif ($bgsliding == "1") {

	$prcntbg = "0";
	$prcntbg2 = "100";
	$pxbg = "1920";
	$pxbg2 = "0";
	$bgpx3 = "0";
	$bgpx4 = "0";	
	
//Top to Bottom
} elseif ($bgsliding == "2") {

	$prcntbg = "0";
	$prcntbg2 = "100";
	$pxbg = "0";
	$pxbg2 = "1200";
	$bgpx3 = "0";
	$bgpx4 = "0";	

//Bottom to Top	
} elseif ($bgsliding == "3") {

	$prcntbg = "100";
	$prcntbg2 = "0";
	$pxbg = "0";
	$pxbg2 = "1200";
	$bgpx3 = "0";
	$bgpx4 = "0";	

//Top Left to bottom Right
} elseif ($bgsliding == "4") {

	$prcntbg = "0";
	$prcntbg2 = "100";
	$pxbg = "1920";
	$pxbg2 = "1200";
	$bgpx3 = "0";
	$bgpx4 = "0";	

//Bottom Right to Top Left
} elseif ($bgsliding == "5") {

	$prcntbg = "100";
	$prcntbg2 = "0";
	$pxbg = "1920";
	$pxbg2 = "1200";
	$bgpx3 = "0";
	$bgpx4 = "0";	

//Bottom Left to Top Right	
} elseif ($bgsliding == "6") {

	$prcntbg = "0";
	$prcntbg2 = "100";
	$pxbg = "1920";
	$pxbg2 = "0";
	$bgpx3 = "0";
	$bgpx4 = "1200";
	
//Top Right to Bottom Left
} elseif ($bgsliding == "7") {

	$prcntbg = "100";
	$prcntbg2 = "0";
	$pxbg = "1920";
	$pxbg2 = "0";
	$bgpx3 = "0";
	$bgpx4 = "1200";
	
}
// Spinning Logo Vars

if ($spinnum == "0") {
	
	$numnum = "0";

	} elseif ($spinnum == "1") {
	
		$numnum = "360";
		
}
//Logo Vars Slide

if ($slidedir == "0") {

	$numslidepx = "270";
	$numslidepxx = "100";
	$dir = "top";
	$dir1 = "bottom";
	
} elseif ($slidedir == "1") {

	$numslidepx = "900";
	$numslidepxx = "100";
	$dir = "top";
	$dir1 = "bottom";

} elseif ($slidedir == "2") {

	$numslidepx = "230";
	$numslidepxx = "100";
	$dir = "left";
	$dir1 = "bottom";

} elseif ($slidedir == "3") {

	$numslidepx = "1700";
	$numslidepxx = "100";
	$dir = "left";
	$dir1 = "bottom";

}


//End
echo"html, body {  margin: 0;  padding: 0;}";
echo "#logo_box{";
echo "    position:relative;";
echo "  z-index: 3;";
echo"";
echo "}";
echo "#logo {";
echo "    position:fixed;";
echo "    left:50%;";
echo "    top:60%;";
echo "    margin:-340px 0 0 -400px;";
echo "    max-width: 100%;";
echo "    max-height: 100%;";
echo "     z-index: 2;";
echo" 	animation: mymove, spinner, fadein;";
echo"   animation-timing-function: ease, linear, ease;";
echo"	animation-iteration-count: 1, infinite, 1;";
echo"   animation-duration: {$slidenums}s, {$fastspin}s, {$fadenums}s;";
echo"   animation-delay: 0s, {$delayspin}s, 0s;";
echo"   transform-style: flat, preserve-3d, flat;";
echo"}";
echo"";
echo" @keyframes mymove {";
echo"    0%   {{$dir}: {$numslidepx}px;}";  //$numslidepx $dir
echo"    100% {{$dir1}: {$numslidepxx}px;}"; //$numslidepxx $dir1
echo"}";
echo"";
echo"@keyframes fadein {";
echo"    from { opacity: 0; }";
echo"    to   { opacity: 1; }";
echo"}";

//Logo Spin KeyFrames

echo"  @keyframes spinner {";
echo"    from {";
echo"      -moz-transform: rotateY(0deg);";
echo"      -ms-transform: rotateY(0deg);";
echo"      transform: rotateY(0deg);";
echo"    }";
echo"    to {";
echo"      -moz-transform: rotateY({$numnum}deg);";
echo"      -ms-transform: rotateY({$numnum}deg);";
echo"      transform: rotateY({$numnum}deg);";
echo"    }";
echo"  }";
echo "";


//BackGround
echo "#bgbgbg";
echo "{";
echo"";
echo "    background: url(images/background/$backgroundurl);";
echo "    height: 100%;";
echo "    width: 100%;";
echo"    padding: 100%px;";
echo"    margin: 0px;";
echo"  z-index: 1;";
echo"	overflow-x: hidden; ";
echo "    -webkit-animation: slide 20s linear infinite;";
echo "       -moz-animation: slide 20s linear;";
echo "            animation: slide 20s linear infinite;";
echo "}";
echo "";
echo "";
echo "@-webkit-keyframes slide";
echo "{";
echo "    {$prcntbg}%   {background-position: {$bgpx3}px {$bgpx4}px;}"; //$prcntbg
echo "    {$prcntbg2}% {background-position: {$pxbg}px {$pxbg2}px;}";//$prcntbg2, $bgpx, $bgpx2
echo "}";
echo "";
echo "@-moz-keyframes slide";
echo "{";
echo "    {$prcntbg}%   {background-position: {$bgpx3}px {$bgpx4}px;}";
echo "    {$prcntbg2}% {background-position: {$pxbg}px {$pxbg2}px;}";
echo "}";
echo "";
echo "@keyframes slide";
echo "{";
echo "    {$prcntbg}%   {background-position: {$bgpx3}px {$bgpx4}px;}";//$prcntbg, $bgpx3, $bgpx
echo "    {$prcntbg2}% {background-position: {$pxbg}px {$pxbg2}px;}";//$prcntbg2, $bgpx, $bgpx2
echo "}";
?>