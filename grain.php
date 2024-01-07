<!DOCTYPE html>
<html img="en" dir="ltr">
<head>
<meta charset="utf-8">
<title> English Alphhabet Pronuciation App </title>
<style media="screen">
body{
	margin: 0px;
}

h1{
	padding: 50px;
	text-align: center;
	background: rgb(17 143 158);
	color: #edf1f2;
	font-size: 40px;
	
}
img{
	padding-header: 1px;
	padding: 0px 20px;
}
button{
	widthL 200px;
	padding: 5px;
	font-size: 16px;
	font-family: sans-serif;
	text-background: white;
	font-weight: 600;
	border-radius: 3px;
	background-color: rgba(250,100,0,0.8);
	color:#fff;
	cursor:pointer;
	border: 1px solid
	rgba(255,255,255,0.3);
	box-shadow: 1px 1px 5px rgba(0,0,0,0.3);
}
	
</style>
<script>
function playSound(abhi){
	
	document.getElementById(abhi).play();
};
</script>

</head>
<body>
<h1> Grains pronounciation </h1>
<div class="container">

<form class="" action="grain.php" method="POST">
 <table border="1">

<a href="javascript:playSound('re');">Rice

<img src="http://localhost/LKG/english%20alphabet/beans/rice.webp"  
 height="20%" width="20%">

</a>
<audio id="re">
<source src="http://localhost/LKG/english%20alphabet/beans/1664361507211-rice-voicemaker.in-speech.mp3" type="audio/mpeg">

</audio>

<a href="javascript:playSound('wh');">Wheat

<img src="http://localhost/LKG/english%20alphabet/beans/wheat.jfif"  
 height="20%" width="20%">

</a>
<audio id="wh">
<source src="http://localhost/LKG/english%20alphabet/beans/1664361571634-wheat-voicemaker.in-speech.mp3" type="audio/mpeg">

</audio>

<a href="javascript:playSound('ye');">Yellow Split

<img src="http://localhost/LKG/english%20alphabet/beans/yellow_split_peas-500x500.jpg"  
 height="20%" width="20%">

</a>
<audio id="ye">
<source src="http://localhost/LKG/english%20alphabet/beans/1664361655728-yellow-voicemaker.in-speech.mp3" type="audio/mpeg">

</audio>

<a href="javascript:playSound('le');">Red lentls

<img src="http://localhost/LKG/english%20alphabet/beans/red%20lentls.jpg"  
 height="20%" width="20%">

</a>
<audio id="le">
<source src="http://localhost/LKG/english%20alphabet/beans/1664361482480-red-voicemaker.in-speech.mp3" type="audio/mpeg">

</audio>

<a href="javascript:playSound('gr');">Green split

<img src="http://localhost/LKG/english%20alphabet/beans/green%20split%20peas.webp"  
 height="20%" width="20%">

</a>
<audio id="gr">
<source src="http://localhost/LKG/english%20alphabet/beans/1664361090412-green-split-voicemaker.in-speech.mp3" type="audio/mpeg">

</audio>


<a href="javascript:playSound('ot');">Oats

<img src="http://localhost/LKG/english%20alphabet/beans/oats.jfif"  
 height="20%" width="20%">

</a>
<audio id="ot">
<source src="http://localhost/LKG/english%20alphabet/beans/1664361695681-oats-voicemaker.in-speech.mp3" type="audio/mpeg">

</audio>


<a href="javascript:playSound('ch');">Chickpies

<img src="http://localhost/LKG/english%20alphabet/beans/chickpies.jpg"  
 height="20%" width="20%">

</a></br>
<audio id="ch">
<source src="http://localhost/LKG/english%20alphabet/beans/1664360984456-chickpies-voicemaker.in-speech.mp3" type="audio/mpeg">

</audio>

<a href="javascript:playSound('co');">Corn Kernel

<img src="http://localhost/LKG/english%20alphabet/beans/corn-kernel.jpg"  
 height="20%" width="20%">

</a>
<audio id="co">
<source src="http://localhost/LKG/english%20alphabet/beans/1664361024432-corn-voicemaker.in-speech.mp3" type="audio/mpeg">

</audio>

<a href="javascript:playSound('ma');">Marrowfat peas

<img src="http://localhost/LKG/english%20alphabet/beans/marrowfat%20peas.jpg"  
 height="20%" width="20%">

</a>
<audio id="ma">
<source src="http://localhost/LKG/english%20alphabet/beans/1664361258752-marrowfat-peas-voicemaker.in-speech.mp3" type="audio/mpeg">

</audio>

<a href="javascript:playSound('so');">Soyabeen

<img src="http://localhost/LKG/english%20alphabet/beans/soyabean.jfif"  
 height="20%" width="20%">

</a></br>
<audio id="so">
<source src="http://localhost/LKG/english%20alphabet/beans/1664361543269-soya-voicemaker.in-speech.mp3" type="audio/mpeg">

</audio>

<button><a href="fruits.php">Fruits</a></button>
<button><a href="flower.php">Flower</a></button>
<button><a href="vegetables.php">Vegetable</a></button>
<button><a href="pet_animal.php">Pet Animal</a></button></br>
<button><a href="wild_animal">Wild Animal</a></button>
<button><a href="img_alphabet.php">Image Alphabet</a></button>
<button><a href="alphabet.php">Alphabet</a></button>
<button><a href="number.php">Number</a></button>
<button><a href="home1.php">Back</a></button>

</form>
</center>
</body>
</html>