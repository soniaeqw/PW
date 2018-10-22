<html>

<head>

<title> CINEMA </title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="description" content="Template by Colorlib" />
        <meta name="keywords" content="HTML, CSS, JavaScript, PHP" />
        <meta name="author" content="Colorlib" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        
		<link href='http://fonts.googleapis.com/css?family=Roboto:300,400,400i,700,700i,900|Montserrat:400,700|PT+Serif' rel='stylesheet' type='text/css'>
      
	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css"  href='css/style.css' />
		

</head>

<body>
<?php
$user="root";
$pass="ParolaFaina";
$db="cinema";



$db=new mysqli('localhost',$user,$pass,$db) or die("SONIA YOU ARE ODING EVERYTHING WRONG");

if($db) echo 'connected succesfully';
else	die ('Nu s-a realizat conectarea'.mysql_error());




echo 'YOU COOL';

$nume= (isset($_POST['nume']) ? $_POST['nume'] : null);

if (isset($_POST["nrtel"]))
{
  $nrtel = $_POST["nrtel"];
  echo $nrtel;
  echo " is your nrtel";
} 
else 
{
  $nrtel = null;
  echo "no nrtel supplied";
}

$adresa=isset($_POST['adresa']) ? $_POST['adresa'] : false;
$felprincipal=isset($_POST['felprincipal']) ? $_POST['felprincipal'] : false;
$desert=isset($_POST['desert']) ? $_POST['desert'] : false;
$bautura=isset($_POST['bautura']) ? $_POST['bautura'] : false;


  
$z=mysqli_query($db,"INSERT INTO nutrifactory (nume, nrtel, adresa, felprincipal, desert, bautura) VALUES ('$nume', '$nrtel', '$adresa', '$felprincipal', '$desert', '$bautura')");
  
 if(!$z)
           die('Comanda dumneavoastra nu a putut fi realizata'.mysql_error());
 echo 'Comanda dumneavoastra a fost realizata si va sosi in maximum 45 de minute!';	  
mysqli_close($db);


?>


<div class="menu" >
	
	<div class="centreaza">
       <div class="dropdown">
		<a href="#movies"> MOVIES  </a>
			<div class="dropdown-content">		
			<a href="#intheatres"> IN THEATERS  </a> 
				<a href="#comingsoon"> COMING SOON </a>
				<a href="#watchlist"> WATCHLIST </a>
			 		</div>
					</div> 
		<a href="#reservations"> GET TICKETS </a>
		   <a href="#help">HELP AND INFO </a>  
</div>		   
				
    
</div>

<!--<img src="images/1.jpg" class="center" alt="mission impossible" > -->

<div style="align:left;display: flex;margin-right:5%;margin-left:5%;margin-bottom:50%;margin-top:20%">
<img src="images/1.jpg"  style="width:356px;height:324px;align:left-side">

  <form action="adauga.php" method="post" style="line-height:17px;margin-left:5%;margin-bottom:50%;margin-right:5%">


  Nume: <input type="text" name="nume" placeholder="Nume"><br><br>
Nr. de telefon: <input type="text" name="nrtel" placeholder="Nr. de telefon"><br><br>
Adres&#259;:<input type="text" name="adresa" placeholder="Adres&#259;"><br><br>
<br>
 <fieldset>
<legend>Preparate dorite:</legend>
Fel principal: <select name="felprincipal">
	<option value="nu doresc" selected></option>
    <option value="tofusteak">Tofu steak</option>
    <option value="soufflelegume">Souffle de legume</option>
    <option value="grilllegume">Grill de legume cu sfecla coapta</option>
    <option value="sotelegume">Sote de legume</option>
	<option value="tocanitahribi">Tocanta de hribi</option>
	<option value="Mâncare de ciuperci">Mâncare de ciuperci</option>
  </select><br><br>
Desert: <select name="desert">
	<option value="nu doresc" selected></option>
    <option value="tartacioco">Tarta cu ciocolata</option>
    <option value="tartafructe">Tarta vegana cu fructe</option>
    <option value="clatite">Clatite</option>
    <option value="sorbet">Sorbet cu fructe de padure</option>
	<option value="tortvanilie">Tort vanilie</option>
	<option value="tort morcovi">Tort morcovi</option>
  </select><br><br>
<label>B&#259;utura:</label> <select name="bautura">
	<option value="nu doresc" selected></option>
	<option value="Fresh de morcovi">Fresh de morcovi</option>
    <option value="Fresh de mango">Fresh de mango</option>
    <option value="Caffee latte">Caffee latte</option>
    <option value="Limonada">Limonad&#259;</option>
	<option value="Shake cu banane">Shake cu banane</option>
	<option value="vin">Vin</option>
  </select><br><br>

</fieldset>

<br>

<input type="submit" style=";background-color:white" value="Trimite comanda">

</form>
  
  
  
  
  

<img src="images/1.jpg"  style="width:304px;height:347px;align:right-side">
</div>
<footer>

<div class="footer" >
	
	<div class="centreaza">
       <div class="dropdown">
	   
	   <ul>
	   
	<li>	<a href="#aboutus"> ABOUT US </a></li>
		
	<ul>	<a href="#legalstuff"> LEGAL STUFF  </a>
					
	<li>		<a href="#terms"> Terms and conditions </a> </li>
	<li>			<a href="#policy"> Privacy policy</a> </li>
	</ul>			
			 		
					
		
		 <li>  <a href="#getintouch"> GET IN TOUCH </a> </li>
</div> 
</ul>		   
</div>		   
				
    
</div>

</footer>


</body>
</html>
