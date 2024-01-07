<!DOCTYPE html>
<html img="en" dir="ltr">
<head>
<meta charset="utf-8">
<title> English Alphhabet Pronounciation App </title>
<style media="screen">
body{
	margin:0px;
	padding:0px;
}
h1{
	background-color:salmon;
	text-align: center;
	color: white;
	font-size: 40px;
	padding: 10px;
}
div{
	border: 5px solid black;
	width: 450px;
	margin-left: 400px;
}
h2{
	text-align: center;
	color: Black;
	padding: 10px;
	font-size: 23px
}
input{
	width: 50px;
	font-size: 22px;
	font-weight: bold;
	margin: 15px;
}
</style>
</head>
<body>
<h1> English Alphabet Pronuciation App</h1>
<div class="">
<h2>Press the button to pronounce</h2>
<form class="" action="number.php" method="POST">
<input type="submit" name="1" value="1">
<input type="submit" name="2" value="2">
<input type="submit" name="3" value="3">
<input type="submit" name="4" value="4">
<input type="submit" name="5" value="5">
<input type="submit" name="6" value="6">
<input type="submit" name="7" value="7">
<input type="submit" name="8" value="8">
<input type="submit" name="9" value="9">
<input type="submit" name="10" value="10">
<input type="submit" name="11" value="11">
<input type="submit" name="12" value="12">
<input type="submit" name="13" value="13">
<input type="submit" name="14" value="14">
<input type="submit" name="15" value="15">
<input type="submit" name="16" value="16">
<input type="submit" name="17" value="17">
<input type="submit" name="18" value="18">
<input type="submit" name="19" value="19">
<input type="submit" name="20" value="20">
<input type="submit" name="21" value="21">
<input type="submit" name="22" value="22">
<input type="submit" name="23" value="23">
<input type="submit" name="24" value="24">
<input type="submit" name="25" value="25">
<input type="submit" name="26" value="26">
<input type="submit" name="27" value="27">
<input type="submit" name="28" value="28">
<input type="submit" name="29" value="29">
<input type="submit" name="30" value="30">
<input type="submit" name="31" value="31">
<input type="submit" name="32" value="32">
<input type="submit" name="33" value="33">
<input type="submit" name="34" value="34">
<input type="submit" name="35" value="35">
<input type="submit" name="36" value="36">
<input type="submit" name="37" value="37">
<input type="submit" name="38" value="38">
<input type="submit" name="39" value="39">
<input type="submit" name="40" value="40">
<input type="submit" name="41" value="41">
<input type="submit" name="42" value="42">
<input type="submit" name="43" value="43">
<input type="submit" name="44" value="44">
<input type="submit" name="45" value="45">
<input type="submit" name="46" value="46">
<input type="submit" name="47" value="47">
<input type="submit" name="48" value="48">
<input type="submit" name="49" value="49">
<input type="submit" name="50" value="50">
<input type="submit" name="51" value="51">
<input type="submit" name="52" value="52">
<input type="submit" name="53" value="53">
<input type="submit" name="54" value="54">
<input type="submit" name="55" value="55">
<input type="submit" name="56" value="56">
<input type="submit" name="57" value="57">
<input type="submit" name="58" value="58">
<input type="submit" name="59" value="59">
<input type="submit" name="60" value="60">
<input type="submit" name="61" value="61">
<input type="submit" name="62" value="62">
<input type="submit" name="63" value="63">
<input type="submit" name="64" value="64">
<input type="submit" name="65" value="65">
<input type="submit" name="65" value="66">
<input type="submit" name="66" value="67">
<input type="submit" name="67" value="68">
<input type="submit" name="68" value="69">
<input type="submit" name="69" value="70">
<input type="submit" name="70" value="71">
<input type="submit" name="71" value="72">
<input type="submit" name="72" value="73">
<input type="submit" name="73" value="74">
<input type="submit" name="74" value="75">
<input type="submit" name="75" value="76">
<input type="submit" name="76" value="76">
<input type="submit" name="77" value="77">
<input type="submit" name="78" value="78">
<input type="submit" name="79" value="79">
<input type="submit" name="80" value="80">
<input type="submit" name="81" value="81">
<input type="submit" name="82" value="82">
<input type="submit" name="83" value="83">
<input type="submit" name="84" value="84">
<input type="submit" name="85" value="85">
<input type="submit" name="86" value="86">
<input type="submit" name="87" value="87">
<input type="submit" name="88" value="88">
<input type="submit" name="89" value="89">
<input type="submit" name="90" value="89">
<input type="submit" name="91" value="90">
<input type="submit" name="92" value="91">
<input type="submit" name="93" value="92">
<input type="submit" name="94" value="93">
<input type="submit" name="95" value="95">
<input type="submit" name="96" value="96">
<input type="submit" name="97" value="97">
<input type="submit" name="98" value="98">
<input type="submit" name="99" value="99">
<input type="submit" name="100" value="100">
</form>


</div>
<button><a href="grain.php">Grain</a></button>
<button><a href="fruits.php">Fruit</a></button>
<button><a href="flower.php">flower</a></button>
<button><a href="vegetables.php">Vegetables</a></button></br>
<button><a href="pet_animal">Pet Animal</a></button>
<button><a href="wild_animal.php">Wild Animal</a></button>
<button><a href="img_alphabet.php">Alphabet</a></button>
<button><a href="number.php">Number</a></button>
<button><a href="home1.php">Back</a></button>
<?php
if (isset($_POST['1'])) {
	?>
	<audio autoplay>
	<source src="http://soundfxcenter.com/human/speech/8d82b5_The_Number_1_Sound_Effect.mp3" type="audio/mpeg">
	</audio>
	<?php
}
?>
<?php
if (isset($_POST['2'])) {
	?>
	<audio autoplay>
	<source src="http://soundfxcenter.com/human/speech/8d82b5_The_Number_2_Sound_Effect.mp3" type="audio/mpeg">
	</audio>
	<?php
}
?>
<?php
if (isset($_POST['3'])) {
	?>
	<audio autoplay>
	<source src="http://soundfxcenter.com/human/speech/8d82b5_The_Number_3_Sound_Effect.mp3" type="audio/mpeg">
	</audio>
	<?php
}
?>
<?php
if (isset($_POST['4'])) {
	?>
	<audio autoplay>
	<source src="http://soundfxcenter.com/human/speech/8d82b5_The_Number_4_Sound_Effect.mp3" type="audio/mpeg">
	</audio>
	<?php
}
?>
<?php
if (isset($_POST['5'])) {
	?>
	<audio autoplay>
	<source src="http://soundfxcenter.com/human/speech/8d82b5_The_Number_5_Sound_Effect.mp3" type="audio/mpeg">
	</audio>
	<?php
}
?>
<?php
if (isset($_POST['6'])) {
	?>
	<audio autoplay>
	<source src="http://soundfxcenter.com/human/speech/8d82b5_The_Number_6_Sound_Effect.mp3" type="audio/mpeg">
	</audio>
	<?php
}
?>
<?php
if (isset($_POST['7'])) {
	?>
	<audio autoplay>
	<source src="http://soundfxcenter.com/human/speech/8d82b5_The_Number_7_Sound_Effect.mp3" type="audio/mpeg">
	</audio>
	<?php
}
?>
<?php
if (isset($_POST['8'])) {
	?>
	<audio autoplay>
	<source src="http://soundfxcenter.com/human/speech/8d82b5_The_Number_8_Sound_Effect.mp3" type="audio/mpeg">
	</audio>
	<?php
}
?>
<?php
if (isset($_POST['9'])) {
	?>
	<audio autoplay>
	<source src="http://soundfxcenter.com/human/speech/8d82b5_The_Number_9_Sound_Effect.mp3" type="audio/mpeg">
	</audio>
	<?php
}
?>
<?php
if (isset($_POST['10'])) {
	?>
	<audio autoplay>
	<source src="http://soundfxcenter.com/human/speech/8d82b5_The_Number_10_Sound_Effect.mp3" type="audio/mpeg">
	</audio>
	<?php
}
?>
<?php
if (isset($_POST['11'])) {
	?>
	<audio autoplay>
	<source src="http://soundfxcenter.com/human/speech/8d82b5_The_Number_11_Sound_Effect.mp3" type="audio/mpeg">
	</audio>
	<?php
}
?>
<?php
if (isset($_POST['12'])) {
	?>
	<audio autoplay>
	<source src="http://soundfxcenter.com/human/speech/8d82b5_The_Number_12_Sound_Effect.mp3" type="audio/mpeg">
	</audio>
	<?php
}
?>
<?php
if (isset($_POST['13'])) {
	?>
	<audio autoplay>
	<source src="http://soundfxcenter.com/human/speech/8d82b5_The_Number_13_Sound_Effect.mp3" type="audio/mpeg">
	</audio>
	<?php
}
?>
<?php
if (isset($_POST['14'])) {
	?>
	<audio autoplay>
	<source src="http://soundfxcenter.com/human/speech/8d82b5_The_Number_14_Sound_Effect.mp3" type="audio/mpeg">
	</audio>
	<?php
}
?>
<?php
if (isset($_POST['15'])) {
	?>
	<audio autoplay>
	<source src="http://soundfxcenter.com/human/speech/8d82b5_The_Number_15_Sound_Effect.mp3" type="audio/mpeg">
	</audio>
	<?php
}
?>
<?php
if (isset($_POST['16'])) {
	?>
	<audio autoplay>
	<source src="http://soundfxcenter.com/human/speech/8d82b5_The_Number_16_Sound_Effect.mp3" type="audio/mpeg">
	</audio>
	<?php
}
?>
<?php
if (isset($_POST['17'])) {
	?>
	<audio autoplay>
	<source src="http://soundfxcenter.com/human/speech/8d82b5_The_Number_17_Sound_Effect.mp3" type="audio/mpeg">
	</audio>
	<?php
}
?>
<?php
if (isset($_POST['18'])) {
	?>
	<audio autoplay>
	<source src="http://soundfxcenter.com/human/speech/8d82b5_The_Number_18_Sound_Effect.mp3" type="audio/mpeg">
	</audio>
	<?php
}
?>
<?php
if (isset($_POST['19'])) {
	?>
	<audio autoplay>
	<source src="http://soundfxcenter.com/human/speech/8d82b5_The_Number_19_Sound_Effect.mp3" type="audio/mpeg">
	</audio>
	<?php
}
?>
<?php
if (isset($_POST['20'])) {
	?>
	<audio autoplay>
	<source src="http://soundfxcenter.com/human/speech/8d82b5_The_Number_20_Sound_Effect.mp3" type="audio/mpeg">
	</audio>
	<?php
}
?>
<?php
if (isset($_POST['21'])) {
	?>
	<audio autoplay>
	<source src="http://soundfxcenter.com/human/speech/8d82b5_The_Number_21_Sound_Effect.mp3" type="audio/mpeg">
	</audio>
	<?php
}
?>
<?php
if (isset($_POST['22'])) {
	?>
	<audio autoplay>
	<source src="http://soundfxcenter.com/human/speech/8d82b5_The_Number_22_Sound_Effect.mp3" type="audio/mpeg">
	</audio>
	<?php
}
?>
<?php
if (isset($_POST['23'])) {
	?>
	<audio autoplay>
	<source src="http://soundfxcenter.com/human/speech/8d82b5_The_Number_23_Sound_Effect.mp3" type="audio/mpeg">
	</audio>
	<?php
}
?>
<?php
if (isset($_POST['24'])) {
	?>
	<audio autoplay>
	<source src="http://soundfxcenter.com/human/speech/8d82b5_The_Number_24_Sound_Effect.mp3" type="audio/mpeg">
	</audio>
	<?php
}
?>
<?php
if (isset($_POST['25'])) {
	?>
	<audio autoplay>
	<source src="http://soundfxcenter.com/human/speech/8d82b5_The_Number_25_Sound_Effect.mp3" type="audio/mpeg">
	</audio>
	<?php
}
?>
<?php
if (isset($_POST['26'])) {
	?>
	<audio autoplay>
	<source src="http://soundfxcenter.com/human/speech/8d82b5_The_Number_26_Sound_Effect.mp3" type="audio/mpeg">
	</audio>
	<?php
}
?>
<?php
if (isset($_POST['27'])) {
	?>
	<audio autoplay>
	<source src="http://soundfxcenter.com/human/speech/8d82b5_The_Number_27_Sound_Effect.mp3" type="audio/mpeg">
	</audio>
	<?php
}
?>
<?php
if (isset($_POST['28'])) {
	?>
	<audio autoplay>
	<source src="http://soundfxcenter.com/human/speech/8d82b5_The_Number_28_Sound_Effect.mp3" type="audio/mpeg">
	</audio>
	<?php
}
?>
<?php
if (isset($_POST['29'])) {
	?>
	<audio autoplay>
	<source src="http://soundfxcenter.com/human/speech/8d82b5_The_Number_29_Sound_Effect.mp3" type="audio/mpeg">
	</audio>
	<?php
}
?>
<?php
if (isset($_POST['30'])) {
	?>
	<audio autoplay>
	<source src="http://soundfxcenter.com/human/speech/8d82b5_The_Number_30_Sound_Effect.mp3" type="audio/mpeg">
	</audio>
	<?php
}
?>
<?php
if (isset($_POST['31'])) {
	?>
	<audio autoplay>
	<source src="http://soundfxcenter.com/human/speech/8d82b5_The_Number_31_Sound_Effect.mp3" type="audio/mpeg">
	</audio>
	<?php
}
?>