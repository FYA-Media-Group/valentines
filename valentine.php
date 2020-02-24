<!DOCTYPE html>
<html lang="en" >

<?php
ob_start();
require_once("./setting.php"); 


if(!isset($_GET['love'])){
	header("Location: https://www.fyagroup.com/valentines-love/"); 
	exit; 
}else{
	$id = $_GET['love'];
	if($id == "" || $id ==null){
		header("Location: https://www.fyagroup.com/valentines-love/"); 
		exit; 
	}else{
		$decodedid = Decode($id);
		//$decodedid = $id;
	}
}
?>

<head>
	<meta charset="UTF-8">
	<title>Happy Valentines Day</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
	<link rel="stylesheet" href="./css/style.css">
	<link rel="stylesheet" href="./css/style2.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Cabin&display=swap" rel="stylesheet">
	
	
	<title>Valentines Day Wishes | Best Romantic Valentine Day Songs</title>

	<meta name="description"  content="Listen to romantic valentine day songs. Dedicate best love song to your Valentine from our list of valentine day songs on https://www.fyagroup.com/valentines-love/" />

	<meta name="keywords"  content="Valentines Day Wishes, Best Romantic Valentine Day Songs, Valentine Wishes for Husband, Happy Valentine Day Wishes Status, Happy Valentine Day Wishes, Valentines Day Wishes for Husband, Valentine Day Msg, Valentine Day Wishes for Girlfriend, Happy Valentine Day Status, Valentine Wishes for Boyfriend, Valentines Greetings, Valentines Day Wishes for Boyfriend, Valentine Wishes for Friends, Valentine Wishes for Girlfriend, Valentine Day Msg for Husband, Valentine Day Wishes for Friends, Valentines Day Wishes for Wife, Valentine Wishes for Wife, Valentine Wishes for Lover, Valentine Day Wishes for Lover, Happy Valentines Day Wishes Quotes, Valentine Day Msg for Girlfriend, Valentines Day Wishes Images, Happy Valentines Day Greetings, Valentine Day Msg for Wife, Advance Valentines Day Wishes, Happy Valentine Day 2019 Status, Valentine Day Romantic Songs, Valentine Love Songs, Best Love Song to Your Valentine," />

	
	
	<script>
		var isMobile = /iPhone|iPad|iPod|Android/i.test(navigator.userAgent);
		if (isMobile) {
			var linkish = "whatsapp://send?text=Listen to romantic valentines day songs. Dedicate best love song and your message to your Valentine from our list of valentine day songs https://bit.ly/2OHoPAQ";
		} else {
			var linkish = "whatsapp://send?text=Listen to romantic valentines day songs. Dedicate best love song and your message to your Valentine from our list of valentine day songs https://bit.ly/2OHoPAQ";
		}
		
		function f1(){
			document.getElementById("whatsapp").href = linkish;
		}
		
	
		function lovefunction(){
			var x = document.getElementById("myAudio"); 
			
			if($('#lovelife').prop("checked") == true){
				$("#hideandseek").slideDown();
			}else{
				$("#hideandseek").slideUp();
				return false;
			}
		}
	</script>
	
	<style>
		@font-face {
		  font-family: 'Cabin', sans-serif;
		}
		
	
		input[type=text], select,textarea {
		  width: 80%;
		  padding: 12px 20px;
		  margin: 8px 0;
		  display: inline-block;
		  border: 1px solid #ccc;
		  border-radius: 4px;
		  box-sizing: border-box;
		  font-family: 'Cabin', sans-serif;
		}
		
		textarea{
			background-image: linear-gradient(#ffffff61,#ff3636a6);;    
			text-align: -webkit-center; 
			padding-left: 0px !important; 
			color: black; 
			border: none; 
			border-radius: 45px;
		}

		input[type=submit] {
		  width: 50%;
		  background-color: #ff566f;
		  color: white;
		  padding: 14px 20px;
		  margin: 8px 0;
		  border: none;
		  border-radius: 4px;
		  cursor: pointer;
		  font-family: 'Cabin', sans-serif;
		}
		

		input[type=submit]:hover {
		  background-color: #f8062a;
		}

		div {
		  border-radius: 5px;
		  background-color: #f2f2f2;
		  padding: 20px;
		}
		
		body{
			background-size: cover;
			//background: linear-gradient(0deg, rgba(13, 13, 13, 0.78), rgba(32, 30, 32, 0.88)), url(img.jpg);
			font-family: 'Cabin', sans-serif;
		}
		
		body .twitter svg {
			width: 32px;
			height: 32px;
			//fill: #17990e;
			font-family: 'Cabin', sans-serif;
		}
		
		* { font-family: 'Cabin', sans-serif; }
		
		.logo{
			position: fixed;
			display: block;
			left: 2px;
			top: 1px;
			background-color: transparent;
		}
		
		.whatsapp {
			position: fixed;
			display: block;
			right: 114px;
			bottom: 20px;
		}
		
		body .whatsapp img {
			display: block;
			height: 28px;
		}
		
		body .dribbble img {
			height: 31px;
		}
		
		/* ----------- iPhone 5, 5S, 5C and 5SE ----------- */

		/* Portrait and Landscape */
		@media only screen 
		  and (min-device-width: 320px) 
		  and (max-device-width: 568px)
		  and (-webkit-min-device-pixel-ratio: 2) {
			.logo{
				left: unset;
				top: 40px;
			}
			
			input[type=text], select, textarea, input[type=submit], p {
				font-size: 40px;
				padding-left: 85px;
			}
			
			body .dribbble img {
				height: 75px;
			}
			
			body .whatsapp img {
				height: 69px;
			}
			
			body .twitter svg {
				width: 90px;
				height: 80px;
			}
			
			.whatsapp {
				right: 207px;
				bottom: 29px;
			}
			
			body .dribbble {
				right: 27px;
				bottom: 28px;
			}
			
			body .twitter {
				right: 105px;
				bottom: 20px;
			}
			
			#logol{
				height:380px;
				margin-left: 270px;
			}
			
			.heart-switch input + svg {
				width: 110px;
				height: 138px;
				margin-left: 396px;
			}
			
		}

		/* ----------- iPhone 6, 6S, 7 and 8 ----------- */

		/* Portrait and Landscape */
		@media only screen 
		  and (min-device-width: 375px) 
		  and (max-device-width: 667px) 
		  and (-webkit-min-device-pixel-ratio: 2) { 
			.logo{
				left: unset;
				top: 40px;
			}
			
			input[type=text], select, textarea, input[type=submit], p {
				font-size: 40px;
				padding-left: 85px;
			}
			
			body .dribbble img {
				height: 75px;
			}
			
			body .whatsapp img {
				height: 69px;
			}
			
			body .twitter svg {
				width: 90px;
				height: 80px;
			}
			
			.whatsapp {
				right: 207px;
				bottom: 29px;
			}
			
			body .dribbble {
				right: 27px;
				bottom: 28px;
			}
			
			body .twitter {
				right: 105px;
				bottom: 20px;
			}
			
			#logol{
				height:380px;
				margin-left: 270px;
			}
			
			.heart-switch input + svg {
				width: 110px;
				height: 138px;
				margin-left: 396px;
			}
		}

		/* ----------- iPhone 6+, 7+ and 8+ ----------- */

		/* Portrait and Landscape */
		@media only screen 
		  and (min-device-width: 414px) 
		  and (max-device-width: 736px) 
		  and (-webkit-min-device-pixel-ratio: 3) { 
			.logo{
				left: unset;
				top: 40px;
			}
			
			input[type=text], select, textarea, input[type=submit], p {
				font-size: 40px;
				padding-left: 85px;
			}
			
			body .dribbble img {
				height: 75px;
			}
			
			body .whatsapp img {
				height: 69px;
			}
			
			body .twitter svg {
				width: 90px;
				height: 80px;
			}
			
			.whatsapp {
				right: 207px;
				bottom: 29px;
			}
			
			body .dribbble {
				right: 27px;
				bottom: 28px;
			}
			
			body .twitter {
				right: 105px;
				bottom: 20px;
			}
			
			#logol{
				height:380px;
				margin-left: 270px;
			}
			
			.heart-switch input + svg {
				width: 110px;
				height: 138px;
				margin-left: 396px;
			}
		}

		/* ----------- iPhone X ----------- */

		/* Portrait and Landscape */
		@media only screen 
		  and (min-device-width: 375px) 
		  and (max-device-width: 812px) 
		  and (-webkit-min-device-pixel-ratio: 3) { 
			.logo{
				left: unset;
				top: 40px;
			}
			
			input[type=text], select, textarea, input[type=submit], p {
				font-size: 40px;
				padding-left: 85px;
			}
			
			body .dribbble img {
				height: 75px;
			}
			
			body .whatsapp img {
				height: 69px;
			}
			
			body .twitter svg {
				width: 90px;
				height: 80px;
			}
			
			.whatsapp {
				right: 207px;
				bottom: 29px;
			}
			
			body .dribbble {
				right: 27px;
				bottom: 28px;
			}
			
			body .twitter {
				right: 105px;
				bottom: 20px;
			}
			
			#logol{
				height:380px;
				margin-left: 270px;
			}
			
			.heart-switch input + svg {
				width: 110px;
				height: 138px;
				margin-left: 396px;
			}
		}
		
		
		@media screen 
		  and (device-width: 360px) 
		  and (device-height: 640px) 
		  and (-webkit-device-pixel-ratio: 2) {
			.logo{
				left: unset;
				top: 40px;
			}
			
			input[type=text], select, textarea, input[type=submit], p {
				font-size: 40px;
				padding-left: 85px;
			}
			
			body .dribbble img {
				height: 75px;
			}
			
			body .whatsapp img {
				height: 69px;
			}
			
			body .twitter svg {
				width: 90px;
				height: 80px;
			}
			
			.whatsapp {
				right: 207px;
				bottom: 29px;
			}
			
			body .dribbble {
				right: 27px;
				bottom: 28px;
			}
			
			body .twitter {
				right: 105px;
				bottom: 20px;
			}
			
			#logol{
				height:380px;
				margin-left: 270px;
			}
			
			.heart-switch input + svg {
				width: 110px;
				height: 138px;
				margin-left: 396px;
			}
		}


		/* ----------- Galaxy S4, S5 and Note 3 ----------- */

		/* Portrait and Landscape */
		@media screen 
		  and (device-width: 320px) 
		  and (device-height: 640px) 
		  and (-webkit-device-pixel-ratio: 3) {
			.logo{
				left: unset;
				top: 40px;
			}
			
			input[type=text], select, textarea, input[type=submit], p {
				font-size: 40px;
				padding-left: 85px;
			}
			
			body .dribbble img {
				height: 75px;
			}
			
			body .whatsapp img {
				height: 69px;
			}
			
			body .twitter svg {
				width: 90px;
				height: 80px;
			}
			
			.whatsapp {
				right: 207px;
				bottom: 29px;
			}
			
			body .dribbble {
				right: 27px;
				bottom: 28px;
			}
			
			body .twitter {
				right: 105px;
				bottom: 20px;
			}
			
			#logol{
				height:380px;
				margin-left: 270px;
			}
			
			.heart-switch input + svg {
				width: 110px;
				height: 138px;
				margin-left: 396px;
			}
		}

		/* ----------- Galaxy S6 ----------- */

		/* Portrait and Landscape */
		@media screen 
		  and (device-width: 360px) 
		  and (device-height: 640px) 
		  and (-webkit-device-pixel-ratio: 4) {
			.logo{
				left: unset;
				top: 40px;
			}
			
			input[type=text], select, textarea, input[type=submit], p {
				font-size: 40px;
				padding-left: 85px;
			}
			
			body .dribbble img {
				height: 75px;
			}
			
			body .whatsapp img {
				height: 69px;
			}
			
			body .twitter svg {
				width: 90px;
				height: 80px;
			}
			
			.whatsapp {
				right: 207px;
				bottom: 29px;
			}
			
			body .dribbble {
				right: 27px;
				bottom: 28px;
			}
			
			body .twitter {
				right: 105px;
				bottom: 20px;
			}
			
			#logol{
				height:380px;
				margin-left: 270px;
			}
			
			.heart-switch input + svg {
				width: 110px;
				height: 138px;
				margin-left: 396px;
			}
		}
		
		
		
		@media screen 
		  and (device-width: 360px) 
		  and (device-height: 640px) 
		  and (-webkit-device-pixel-ratio: 3) {
			.logo{
				left: unset;
				top: 40px;
			}
			
			input[type=text], select, textarea, input[type=submit], p {
				font-size: 40px;
				padding-left: 85px;
			}
			
			body .dribbble img {
				height: 75px;
			}
			
			body .whatsapp img {
				height: 69px;
			}
			
			body .twitter svg {
				width: 90px;
				height: 80px;
			}
			
			.whatsapp {
				right: 207px;
				bottom: 29px;
			}
			
			body .dribbble {
				right: 27px;
				bottom: 28px;
			}
			
			body .twitter {
				right: 105px;
				bottom: 20px;
			}
			
			#logol{
				height:380px;
				margin-left: 270px;
			}
			
			.heart-switch input + svg {
				width: 110px;
				height: 138px;
				margin-left: 396px;
			}
		}

		/* ----------- Google Pixel XL ----------- */

		/* Portrait and Landscape */
		@media screen 
		  and (device-width: 360px) 
		  and (device-height: 640px) 
		  and (-webkit-device-pixel-ratio: 4) {
			.logo{
				left: unset;
				top: 40px;
			}
			
			input[type=text], select, textarea, input[type=submit], p {
				font-size: 40px;
				padding-left: 85px;
			}
			
			body .dribbble img {
				height: 75px;
			}
			
			body .whatsapp img {
				height: 69px;
			}
			
			body .twitter svg {
				width: 90px;
				height: 80px;
			}
			
			.whatsapp {
				right: 207px;
				bottom: 29px;
			}
			
			body .dribbble {
				right: 27px;
				bottom: 28px;
			}
			
			body .twitter {
				right: 105px;
				bottom: 20px;
			}
			
			#logol{
				height:380px;
				margin-left: 270px;
			}
			
			.heart-switch input + svg {
				width: 110px;
				height: 138px;
				margin-left: 396px;
			}
		}

		/* ----------- iPad 1, 2, Mini and Air ----------- */

		/* Portrait and Landscape */
		@media only screen 
		  and (min-device-width: 768px) 
		  and (max-device-width: 1024px) 
		  and (-webkit-min-device-pixel-ratio: 1) {
			.logo{
				left: unset;
				top: 40px;
			}
			
			input[type=text], select, textarea, input[type=submit], p {
				font-size: 40px;
				padding-left: 85px;
			}
			
			body .dribbble img {
				height: 75px;
			}
			
			body .whatsapp img {
				height: 69px;
			}
			
			body .twitter svg {
				width: 90px;
				height: 80px;
			}
			
			.whatsapp {
				right: 207px;
				bottom: 29px;
			}
			
			body .dribbble {
				right: 27px;
				bottom: 28px;
			}
			
			body .twitter {
				right: 105px;
				bottom: 20px;
			}
			
			#logol{
				height:380px;
				margin-left: 270px;
			}
			
			.heart-switch input + svg {
				width: 110px;
				height: 138px;
				margin-left: 396px;
			}
		}


		/* Landscape */
		@media only screen 
		  and (min-device-width: 768px) 
		  and (max-device-width: 1024px) 
		  and (orientation: landscape) 
		  and (-webkit-min-device-pixel-ratio: 1) {
			.logo{
				left: unset;
				top: 40px;
			}
			
			input[type=text], select, textarea, input[type=submit], p {
				font-size: 40px;
				padding-left: 85px;
			}
			
			body .dribbble img {
				height: 75px;
			}
			
			body .whatsapp img {
				height: 69px;
			}
			
			body .twitter svg {
				width: 90px;
				height: 80px;
			}
			
			.whatsapp {
				right: 207px;
				bottom: 29px;
			}
			
			body .dribbble {
				right: 27px;
				bottom: 28px;
			}
			
			body .twitter {
				right: 105px;
				bottom: 20px;
			}
			
			#logol{
				height:380px;
				margin-left: 270px;
			}
			
			.heart-switch input + svg {
				width: 110px;
				height: 138px;
				margin-left: 396px;
			}
		}

		/* ----------- iPad 3, 4 and Pro 9.7" ----------- */

		/* Portrait and Landscape */
		@media only screen 
		  and (min-device-width: 768px) 
		  and (max-device-width: 1024px) 
		  and (-webkit-min-device-pixel-ratio: 2) {
			.logo{
				left: unset;
				top: 40px;
			}
			
			input[type=text], select, textarea, input[type=submit], p {
				font-size: 40px;
				padding-left: 85px;
			}
			
			body .dribbble img {
				height: 75px;
			}
			
			body .whatsapp img {
				height: 69px;
			}
			
			body .twitter svg {
				width: 90px;
				height: 80px;
			}
			
			.whatsapp {
				right: 207px;
				bottom: 29px;
			}
			
			body .dribbble {
				right: 27px;
				bottom: 28px;
			}
			
			body .twitter {
				right: 105px;
				bottom: 20px;
			}
			
			#logol{
				height:380px;
				margin-left: 270px;
			}
			
			.heart-switch input + svg {
				width: 110px;
				height: 138px;
				margin-left: 396px;
			}
		}


		/* Landscape */
		@media only screen 
		  and (min-device-width: 768px) 
		  and (max-device-width: 1024px) 
		  and (orientation: landscape) 
		  and (-webkit-min-device-pixel-ratio: 2) {
			.logo{
				left: unset;
				top: 40px;
			}
			
			input[type=text], select, textarea, input[type=submit], p {
				font-size: 40px;
				padding-left: 85px;
			}
			
			body .dribbble img {
				height: 75px;
			}
			
			body .whatsapp img {
				height: 69px;
			}
			
			body .twitter svg {
				width: 90px;
				height: 80px;
			}
			
			.whatsapp {
				right: 207px;
				bottom: 29px;
			}
			
			body .dribbble {
				right: 27px;
				bottom: 28px;
			}
			
			body .twitter {
				right: 105px;
				bottom: 20px;
			}
			
			#logol{
				height:380px;
				margin-left: 270px;
			}
			
			.heart-switch input + svg {
				width: 110px;
				height: 138px;
				margin-left: 396px;
			}
		}

		/* ----------- iPad Pro 10.5" ----------- */

		/* Portrait and Landscape */
		@media only screen 
		  and (min-device-width: 834px) 
		  and (max-device-width: 1112px)
		  and (-webkit-min-device-pixel-ratio: 2) {
			.logo{
				left: unset;
				top: 40px;
			}
			
			input[type=text], select, textarea, input[type=submit], p {
				font-size: 40px;
				padding-left: 85px;
			}
			
			body .dribbble img {
				height: 75px;
			}
			
			body .whatsapp img {
				height: 69px;
			}
			
			body .twitter svg {
				width: 90px;
				height: 80px;
			}
			
			.whatsapp {
				right: 207px;
				bottom: 29px;
			}
			
			body .dribbble {
				right: 27px;
				bottom: 28px;
			}
			
			body .twitter {
				right: 105px;
				bottom: 20px;
			}
			
			#logol{
				height:380px;
				margin-left: 270px;
			}
			
			.heart-switch input + svg {
				width: 110px;
				height: 138px;
				margin-left: 396px;
			}
		}

		

		/* Landscape */
		/* Declare the same value for min- and max-width to avoid colliding with desktops */
		/* Source: https://medium.com/connect-the-dots/css-media-queries-for-ipad-pro-8cad10e17106*/
		@media only screen 
		  and (min-device-width: 1112px) 
		  and (max-device-width: 1112px) 
		  and (orientation: landscape) 
		  and (-webkit-min-device-pixel-ratio: 2) {
			.logo{
				left: unset;
				top: 40px;
			}
			
			input[type=text], select, textarea, input[type=submit], p {
				font-size: 40px;
				padding-left: 85px;
			}
			
			body .dribbble img {
				height: 75px;
			}
			
			body .whatsapp img {
				height: 69px;
			}
			
			body .twitter svg {
				width: 90px;
				height: 80px;
			}
			
			.whatsapp {
				right: 207px;
				bottom: 29px;
			}
			
			body .dribbble {
				right: 27px;
				bottom: 28px;
			}
			
			body .twitter {
				right: 105px;
				bottom: 20px;
			}
			
			#logol{
				height:380px;
				margin-left: 270px;
			}
			
			.heart-switch input + svg {
				width: 110px;
				height: 138px;
				margin-left: 396px;
			}
		}

		/* ----------- iPad Pro 12.9" ----------- */

		/* Portrait and Landscape */
		@media only screen 
		  and (min-device-width: 1024px) 
		  and (max-device-width: 1366px)
		  and (-webkit-min-device-pixel-ratio: 2) {
			.logo{
				left: unset;
				top: 40px;
			}
			
			input[type=text], select, textarea, input[type=submit], p {
				font-size: 40px;
				padding-left: 85px;
			}
			
			body .dribbble img {
				height: 75px;
			}
			
			body .whatsapp img {
				height: 69px;
			}
			
			body .twitter svg {
				width: 90px;
				height: 80px;
			}
			
			.whatsapp {
				right: 207px;
				bottom: 29px;
			}
			
			body .dribbble {
				right: 27px;
				bottom: 28px;
			}
			
			body .twitter {
				right: 105px;
				bottom: 20px;
			}
			
			#logol{
				height:380px;
				margin-left: 270px;
			}
			
			.heart-switch input + svg {
				width: 110px;
				height: 138px;
				margin-left: 396px;
			}
		}

		

		/* Landscape */
		/* Declare the same value for min- and max-width to avoid colliding with desktops */
		/* Source: https://medium.com/connect-the-dots/css-media-queries-for-ipad-pro-8cad10e17106*/
		@media only screen 
		  and (min-device-width: 1366px) 
		  and (max-device-width: 1366px) 
		  and (orientation: landscape) 
		  and (-webkit-min-device-pixel-ratio: 2) {
			.logo{
				left: unset;
				top: 40px;
			}
			
			input[type=text], select, textarea, input[type=submit], p {
				font-size: 40px;
				padding-left: 85px;
			}
			
			body .dribbble img {
				height: 75px;
			}
			
			body .whatsapp img {
				height: 69px;
			}
			
			body .twitter svg {
				width: 90px;
				height: 80px;
			}
			
			.whatsapp {
				right: 207px;
				bottom: 29px;
			}
			
			body .dribbble {
				right: 27px;
				bottom: 28px;
			}
			
			body .twitter {
				right: 105px;
				bottom: 20px;
			}
			
			#logol{
				height:380px;
				margin-left: 270px;
			}
			
			.heart-switch input + svg {
				width: 110px;
				height: 138px;
				margin-left: 396px;
			}
		}
	</style>
	
	<style>
		#load{
			width:100%;
			height:100%;
			position:fixed;
			z-index:9999;
			background-color:#F6F8FF;
		}
		
		.su{
			color: white;
			font-family: inherit;
			text-align: center;
			left: 0;
			line-height: 55px;
			margin-top: -420px;
			position: absolute;
			text-align: center;
			top: 50%;
			width: 100%;
			font-size: 30px;
			font-style: italic;
			font-family: sans-serif;
			font-variant: all-petite-caps;
		}
		
		.spinner div {
		  width: 20px;
		  height: 20px;
		  position: absolute;
		  left: -20px;
		  top: 225px;
		  background-color: #000000;
		  border-radius: 50%;
		  animation: move 4s infinite cubic-bezier(.2,.64,.81,.23);
		}
		.spinner div:nth-child(2) {
		  animation-delay: 150ms;
		}
		.spinner div:nth-child(3) {
		  animation-delay: 300ms;
		}
		.spinner div:nth-child(4) {
		  animation-delay: 450ms;
		}
		@keyframes move {
		  0% {left: 0%;}
		  75% {left:100%;}
		  100% {left:100%;}
		}
		
		#songs{
			width:66%;
		}
		
		.btncls{
			width:13% !important;
			background-color: black !important;
			font-size:32px !important;
		}
		
		#submitbutton{
			margin-top: 70px;
		}
		
		.heart-switch input:checked + svg {
			--fill: #ed1612;
		}
		
		.sharer {
			font-size: 37px;
			position: fixed;
			display: block;
			right: 299px;
			bottom: 30px;
			font-weight: 700;
			font-style: oblique;
		}
	</style>
	
	<script>
		document.onreadystatechange = function () {
		  var state = document.readyState
		  if (state == 'interactive') {
			   document.getElementById('contents').style.visibility="hidden";
		  } else if (state == 'complete') {
			  setTimeout(function(){
				 document.getElementById('interactive');
				 document.getElementById('load').style.visibility="hidden";
				 document.getElementById('contents').style.visibility="visible";
			  },4000);
		  }
		}
		
	</script>
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-97821652-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());
	  gtag('config', 'UA-97821652-1');
	</script>

</head>
<body  onload="f1(); return false;">
	<span class="bg_heart">
		<div id="load">
			<div class="su" style="background-color: #F6F8FF;">
				<span id="imgsu"><h3 style="color:black;">INSPIRED BY</h3></span> <img src="./img/v2new.png" style="width: 200px;"><br>
				<div class="spinner" style="background-color: #F6F8FF;">
				  <div></div>
				  <div></div>
				  <div></div>
				  <div></div>
				</div>
				<span id="imgsu"><h3 style="color:black;">DEVELOPED WITH LOVE BY</h3></span> <img src="./img/Logo_150x88.png" style="width: 154px;">
			</div>

		</div>

		<div class="logo" href="https://www.fyagroup.com/" target="_blank">
			<img id="logol" src="./img/heartnew.png" >
			
			
			<p>Tap on the heart to see something special!</p>


			<label class="heart-switch">
				
				<input type="checkbox" id="lovelife" onclick="lovefunction();" style="display: none;">
				<svg viewBox="0 0 33 23" fill="white">
					<path d="M23.5,0.5 C28.4705627,0.5 32.5,4.52943725 32.5,9.5 C32.5,16.9484448 21.46672,22.5 16.5,22.5 C11.53328,22.5 0.5,16.9484448 0.5,9.5 C0.5,4.52952206 4.52943725,0.5 9.5,0.5 C12.3277083,0.5 14.8508336,1.80407476 16.5007741,3.84362242 C18.1491664,1.80407476 20.6722917,0.5 23.5,0.5 Z"></path>
				</svg>
			</label>
			
			<?php
				$DB = Connect();
					
				$strselect = "SELECT * from users where id='".$decodedid."'";
				//echo $strselect;
				$RS = $DB->query($strselect);
				if ($RS->num_rows > 0) 
				{
					while($row = $RS->fetch_assoc())
					{
						$id = $row['id'];
						$message = $row['message'];
						$song = $row['song'];	
					}
				?>
					<center>
						<span style="display:none;" id="hideandseek">
							<textarea  placeholder="<?=$message?>" cols="60" rows="5" disabled><?=$message?></textarea>
							
							<!--<audio oncanplaythrough="myOnCanPlayThroughFunction()" onloadeddata="myOnLoadedData()" id="myAudio" src="./songs/<?=$song?>.mp3">
									Your browser does not support the
									<code>audio</code> element.
							</audio>-->
							
							<iframe src="https://open.spotify.com/embed/track/<?=$song?>" width="70%" height="540px" frameborder="0" autoplay="on" allowtransparency="true" allow="encrypted-media"></iframe>
						</span>
					</center>
				<?php	
				}else{
					header("Location: https://www.fyagroup.com/valentines-love/"); 
					exit; 
				}
			?>

	
		</div>
		
	</span>

	<a class="dribbble" href="https://www.facebook.com/sharer.php?u=https://bit.ly/2OHoPAQ%20Listen%20to%20romantic%20valentines%20day%20songs.%20Dedicate%20best%20love%20song%20and%20your%20message%20to%20your%20Valentine%20from%20our%20list%20of%20valentine%20day%20songs" target="_blank">
		<img src="./img/fb2.png" alt="">
	</a>
	<a class="twitter" target="_blank" href="https://twitter.com/share?text=Listen to romantic valentines day songs. Dedicate best love song and your message to your Valentine from our list of valentine day songs&amp;url=https://bit.ly/2OHoPAQ">
		<svg xmlns="http://www.w3.org/2000/svg" width="72" height="72" viewBox="0 0 72 72"><path d="M67.812 16.141a26.246 26.246 0 0 1-7.519 2.06 13.134 13.134 0 0 0 5.756-7.244 26.127 26.127 0 0 1-8.313 3.176A13.075 13.075 0 0 0 48.182 10c-7.229 0-13.092 5.861-13.092 13.093 0 1.026.118 2.021.338 2.981-10.885-.548-20.528-5.757-26.987-13.679a13.048 13.048 0 0 0-1.771 6.581c0 4.542 2.312 8.551 5.824 10.898a13.048 13.048 0 0 1-5.93-1.638c-.002.055-.002.11-.002.162 0 6.345 4.513 11.638 10.504 12.84a13.177 13.177 0 0 1-3.449.457c-.846 0-1.667-.078-2.465-.231 1.667 5.2 6.499 8.986 12.23 9.09a26.276 26.276 0 0 1-16.26 5.606A26.21 26.21 0 0 1 4 55.976a37.036 37.036 0 0 0 20.067 5.882c24.083 0 37.251-19.949 37.251-37.249 0-.566-.014-1.134-.039-1.694a26.597 26.597 0 0 0 6.533-6.774z"></path></svg>
	</a>
	<a class="whatsapp" id="whatsapp" href="#" target="_blank" aria-label="Whatsapp">
		<img src="./img/wt.png" alt="">
	</a>
	<p class="sharer">Share with others</p>
	
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script>
	var love = setInterval(function() {
		var r_num = Math.floor(Math.random() * 40) + 1;
		var r_size = Math.floor(Math.random() * 65) + 10;
		var r_left = Math.floor(Math.random() * 100) + 1;
		var r_bg = Math.floor(Math.random() * 25) + 100;
		var r_time = Math.floor(Math.random() * 5) + 5;
		
		var x = document.getElementById("myAudio"); 
		
		if($('#lovelife').prop("checked") == true){
			 $('.bg_heart').append("<div class='heart' style='width:" + r_size + "px;height:" + r_size + "px;left:" + r_left + "%;background:rgba(255," + (r_bg - 25) + "," + r_bg + ",1);-webkit-animation:love " + r_time + "s ease;-moz-animation:love " + r_time + "s ease;-ms-animation:love " + r_time + "s ease;animation:love " + r_time + "s ease'></div>");

			$('.bg_heart').append("<div class='heart' style='width:" + (r_size - 10) + "px;height:" + (r_size - 10) + "px;left:" + (r_left + r_num) + "%;background:rgba(255," + (r_bg - 25) + "," + (r_bg + 25) + ",1);-webkit-animation:love " + (r_time + 5) + "s ease;-moz-animation:love " + (r_time + 5) + "s ease;-ms-animation:love " + (r_time + 5) + "s ease;animation:love " + (r_time + 5) + "s ease'></div>"); 
		}else{
			$('.bg_heart').append("");
		}
	   

		$('.heart').each(function() {
			var top = $(this).css("top").replace(/[^-\d\.]/g, '');
			var width = $(this).css("width").replace(/[^-\d\.]/g, '');
			if (top <= -100 || width >= 150) {
				$(this).detach();
			}
		});
	}, 500);
</script>

</body>
</html>
