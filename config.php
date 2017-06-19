<?php


//////////////////////////////////////////BackGrounds//////////////////////////////////////


/////Don't Touch This Piece of Code here//////
$rannynum = "7";//Background Direction # For Rando// DON'T TOUCH
//////Now you can touch the code again :D//////

//Which Direction do you want the backgrounds to go?

// 0 = Right To Left
// 1 = Left To Right
// 2 = Top To Bottom
// 3 = Bottom To Top
// 4 = Top Left To Bottom Right
// 5 = Bottom Right To Top Left
// 6 = Bottom Left To Top Right
// 7 = Top Right To Bottom Left

// Put the number in here!
//Here is another cool thing. I made it so it picks out a random direction every time the page loads.
//If you want to set it to your own direction simply just comment out the piece of code by doing "//$bgsliding = $rannum;" without quotation marks!
//But make sure if you change that then uncomment the '$bgsliding = "0";' by removing the '//'
//Below is the code

//$bgsliding = "0";
$bgsliding = $rannum;


//Put the background image file in here. It cannot be a url. It has to be an image in your database/FTP. Make sure to put custom images in the images/backrounds folder.
//If you only want one background then just put the one file name in there without a comma. Because if you use a comma with only one string (a string is a line of text within these things --> "" <--) then it might break.
//Only use commas if you have more than one file name

$background = array (

"bg1.jpg",
"bg2.jpg",
"bg3.jpg",
"bg4.jpg",
"bg5.jpg",
"bg6.jpg",
"bg7.jpg",
"bg8.jpg",
"bg9.jpg",
"bg10.jpg",
"bg11.jpg"

);

//////////////////////////////////////////BackGrounds//////////////////////////////////////






//////////////////////////////////////////Logo//////////////////////////////////////

//Put the logo file in here. It can be in the form of a url.
//Again if you want only one logo it is the same exact explation as the background. Just have only one file name in there.
//And Remember! No Commas if there is only one file name!

$logomix = array (


"logo1.png",
"logo2.png",
"logo3.gif",
"logo4.png"

);

//Do you want your logo to spin/rotate (Kinda like a coin spinning on a table)?
// 0 = No Spin
// 1 = Spinning

$spinnum = "0";

//If your logo is spinning, how fast do you want it to spin? 
// Defualt is 6. 
//The lower the number the faster it spins, the higher it is, the slower it spins. (The number represents how many seconds it takes for the logo to do one full spin.)

$fastspin = "6";

//How many seconds would you like to delay before the logo starts spinning?
//I automaticlly put it so that the number always = how long it takes for the logo to slide in. So if it takes the logo 10 seconds to slide in (configured below) 
//it will be delayed 10 seconds so that it would start spinning when the logo finishes sliding in (so it doesn't spin while the logo is sliding in).
//If you want to set your own custom delay then uncomment the line below by taking out the '//' in the begining and make sure to put '//' without the qoutation marks
//in front of the current line that sets the value of the varible ( the $delayspin = $slidenum )

//$delayspin == "2";
$delayspin = $slidenum;


// How long will it take for the logo to fade in (in seconds)?
// If you don't want a fade in then set the number to 0.

$fadenum = "2";


/////Don't touch this part of the code/////
$slidedir12 = "3";
/////Ok you can touch the code again! :D/////

//Which directions do you want the logo to slide in from?
// 0 is from top to bottom
// 1 is from bottom to top
// 2 is from left to right
// 3 is from right to left
// The image/logo will always end up in the middle.
//Again like with all the rest I made this random. So it will randomly slide in from any direction.
//If you do not like this then and  just set it to one of the directions you like then uncomment the '$slidedir = "0";' by removing the '//'
//Add the '//' to "$slidedir = $slidedir1;" to comment it out. It should look green.
//F.Y.I If you want to turn it off then you do not need to uncomment and comment these things. All you have to do is look below and put "0" for the amount of seconds it take for it to slide.


//$slidedir = "0";
$slidedir = $slidedir1;

//How many seconds will it take for the Logo to slide? (Put "0" for no sliding)

$slidenum = "2";


//////////////////////////////////////////Logo//////////////////////////////////////






//////////////////////////////////////////Music//////////////////////////////////////


 //Put the ID of a youtube video here. https://www.youtube.com/watch?v=JGNwEvhNsjk where it says v=JGNwEvhNsjk that is the ID. To put something in simply goto line 10, press enter and copy/pasta this code
 //         'putidhere',
 // in there. Keep doing that for as many songs as you want!. 
$music = array (

"JGNwEvhNsjk",
"PblG_PtUGQI",
"9ElHm1eOw6w",
"jy-3RzmF_NU",
"0b1LeqS667Q",
"TqeNqEKDtOo",
"8fNHhrvc0mc",
"oC1gSYV9OWM",
"DmFMJKTqlqQ",
"8hWVSvzh9os",
"KULNm2QN9gY",
"a__Nr1FV7Es",
"nVx-d8-kxjY",
"PVftd0uJVg0",
"C_olgockRzg",
"X6vMye_Os64",
"B4oR7Tdfy6c",
"hiSsrEg3tks",
"XYjqBqrZVTY",
"LkjsPuCl0p4",
"wCgx8zM3woQ",
"IoVb6-s-wEA",
"aRvKDTYIRYE",
"85tr8h0BjVk",
"Z6xXEaWz5Iw",
"sNK2qwx99Hc",
"4tjpPxX9x-c",
"ZJ84HFlFsgc",
"ZJfUB_GRzEk",
"jVIxe3YLNs8",
"xQDPuODPLDw",
"f3IgwLT_mYc",
"hMtZfW2z9dw",
"b4S-O1vXoZ0",
"jutSZVzV5QI",
"_GxK5bafAok",
"X1M69l7ZGlw",
"ETfiUYij5UE",
"rnQBF2CIygg",
"SW-BU6keEUw",
"h9tJ57Qao_Y",
"bkj2kD4CM0Y",
"0eQd9AksGQE",
"wSoPwNc4Adg",
"baUY9LFlYh0",
"X2WH8mHJnhM",
"K5tVbVu9Mkg",
"uE-1RPDqJAY",
"JImcvtJzIK8",
"gRcj6CAhe7s"

);
 
 //////////////////////////////////////////Music//////////////////////////////////////

 
 ///////////////////DON'T TOUCH ANYTHING BELOW HERE//////////////////////
 
 
 /////BackGround direction
 $rannum = rand(0,255) % $rannynum;

// Background Get All Array

$bgnum = count($background);
 
//Background Rando

$bg = rand(0,255) % $bgnum;
$backgroundurl=$background[$bg];
 

 //Logo Sliding
 $slidedir1 = rand(0,255) % $slidedir12;
  
 // Logo Get All Array
 
$lgnum = count($logomix);

//Logo Rando

$dsd = rand(0,255) % $lgnum;
$logo = $logomix[$dsd];


//YouTube Get All Array (Set this before the rando so the rando has a var.)

$msnum = count($music);
 
 //YouTube Rando

$ids = rand(0,255) % $msnum;
$song = $music[$ids];

 
?>

