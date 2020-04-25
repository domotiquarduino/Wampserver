<?php session_start(); 
// Domotiquarduino : Contrôler huit leds avec un Arduino depuis une page WEB PHP Wampserver (version 8 boutons On/Off)

$usb_comPort = "COM4"; //indiquer le port de l'ide Arduino sur lequel la carte est reliée
$Titre1      = "Broche 1";
$Titre2      = "Broche 2";
$Titre3 	 = "Broche 3";
$Titre4 	 = "Broche 4";
$Titre5	 	 = "Broche 5";
$Titre6 	 = "Broche 6";
$Titre7	     = "Broche 7";
$Titre8 	 = "Broche 8";

if(isset($_POST['EtatPin1']) && $_POST['EtatPin1'] == "on")
{
	$_SESSION['EtatPin1']="off";
	exec("ECHO A > $usb_comPort");
}

if(isset($_POST['EtatPin1']) && $_POST['EtatPin1'] == "off")
{
	$_SESSION['EtatPin1']="on";
	exec("ECHO a > $usb_comPort");
}

if(isset($_POST['EtatPin2']) && $_POST['EtatPin2'] == "on")
{	
	$_SESSION['EtatPin2']="off";
	exec("ECHO B > $usb_comPort");
}

if(isset($_POST['EtatPin2']) && $_POST['EtatPin2'] == "off")
{	
	$_SESSION['EtatPin2']="on";
	exec("ECHO b > $usb_comPort");
}

if(isset($_POST['EtatPin3']) && $_POST['EtatPin3'] == "on")
{
	$_SESSION['EtatPin3']="off";
	exec("ECHO C > $usb_comPort");	
}

if(isset($_POST['EtatPin3']) && $_POST['EtatPin3'] == "off")
{
	$_SESSION['EtatPin3']="on";
	exec("ECHO c > $usb_comPort");	
}

if(isset($_POST['EtatPin4']) && $_POST['EtatPin4'] == "on")
{
	$_SESSION['EtatPin4']="off";
	exec("ECHO D > $usb_comPort");
}

if(isset($_POST['EtatPin4']) && $_POST['EtatPin4'] == "off")
{
	$_SESSION['EtatPin4']="on";
	exec("ECHO d > $usb_comPort");
}

if(isset($_POST['EtatPin5']) && $_POST['EtatPin5'] == "on")
{
	$_SESSION['EtatPin5']="off";
	exec("ECHO E > $usb_comPort");	
}

if(isset($_POST['EtatPin5']) && $_POST['EtatPin5'] == "off")
{
	$_SESSION['EtatPin5']="on";
	exec("ECHO e > $usb_comPort");	
}

if(isset($_POST['EtatPin6']) && $_POST['EtatPin6'] == "on")
{
	$_SESSION['EtatPin6']="off";
	exec("ECHO F > $usb_comPort");	
}

if(isset($_POST['EtatPin6']) && $_POST['EtatPin6'] == "off")
{
	$_SESSION['EtatPin6']="on";
	exec("ECHO f > $usb_comPort");		
}

if(isset($_POST['EtatPin7']) && $_POST['EtatPin7'] == "on")
{
	$_SESSION['EtatPin7']="off";
	exec("ECHO G > $usb_comPort");		
}

if(isset($_POST['EtatPin7']) && $_POST['EtatPin7'] == "off")
{
	$_SESSION['EtatPin7']="on";
	exec("ECHO g > $usb_comPort");		
}

if(isset($_POST['EtatPin8']) && $_POST['EtatPin8'] == "on")
{
	$_SESSION['EtatPin8']="off";
	exec("ECHO H > $usb_comPort");		
}

if(isset($_POST['EtatPin8']) && $_POST['EtatPin8'] == "off")
{
	$_SESSION['EtatPin8']="on";
	exec("ECHO h > $usb_comPort");	
}
	if(isset($_POST['I']))  //tout éteindre
    {
		// exec("ECHO A,B,C,D,E,F,G,H > $usb_comPort");
		exec("ECHO A > $usb_comPort");
		exec("ECHO B > $usb_comPort");
		exec("ECHO C > $usb_comPort");
		exec("ECHO D > $usb_comPort");
		exec("ECHO E > $usb_comPort");
		exec("ECHO F > $usb_comPort");
		exec("ECHO G > $usb_comPort");
		exec("ECHO H > $usb_comPort");
		$_SESSION['EtatPin1']= 'off';
		$_SESSION['EtatPin2']= 'off';
		$_SESSION['EtatPin3']= 'off';
		$_SESSION['EtatPin4']= 'off';
		$_SESSION['EtatPin5']= 'off';
        $_SESSION['EtatPin6']= 'off';
        $_SESSION['EtatPin7']= 'off';	
        $_SESSION['EtatPin8']= 'off';
	}
	if(isset($_POST['i']))  //tout allumer
	{
		// exec("ECHO a,b,c,d,e,f,g,h > $usb_comPort");
		exec("ECHO a > $usb_comPort");
		exec("ECHO b > $usb_comPort");
		exec("ECHO c > $usb_comPort");
		exec("ECHO d > $usb_comPort");
		exec("ECHO e > $usb_comPort");
		exec("ECHO f > $usb_comPort");
		exec("ECHO g > $usb_comPort");
		exec("ECHO h > $usb_comPort");
		$_SESSION['EtatPin1']= 'on';
		$_SESSION['EtatPin2']= 'on';
		$_SESSION['EtatPin3']= 'on';
		$_SESSION['EtatPin4']= 'on';
		$_SESSION['EtatPin5']= 'on';
        $_SESSION['EtatPin6']= 'on';
        $_SESSION['EtatPin7']= 'on';	
        $_SESSION['EtatPin8']= 'on';		
	}
?>
<!DOCTYPE html>
<html>
 <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style.css" />
        <title>Contrôle 8 leds Arduino - Page PHP</title>
<style>
html{font-family: Helvetica; display: inline-block; margin: 0px auto; text-align: center;} 
body{background-color:#0063B1;} 
th{background-color:grey;color:white;text-align: left;}
td{height:3px;}
#bouton1{background-color:#00b3ff;border:none;color:white;
text-decoration:none;font-size:14px;margin:2px;cursor:pointer;height:41px;width:100px;}
#bouton2{background-color:#555555;border:none;color:white;
text-decoration:none;font-size:14px;margin:2px;cursor:pointer;height:41px;width:100px;}
.couleur_texte{color:white;}
</style>
 </head>
<body>
      <table width="640" align="center" border="0">
      <tr>
	      <td colspan=4><img src="https://zupimages.net/up/20/13/7exg.png" alt="" /></td>
	  </tr>
      <tr>
	      <td class="couleur_texte" colspan=4>Contr&ocirc;le des broches Arduino avec une page Web PHP WAMPSERVER</td>
	  </tr>

      <tr>
	       <td width=220 colspan="4"> </td>   
	  </tr>
	  <form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	  <tr>
	       <td width=220></td>
           <td width=262 style="color:#0063b1"><input type='submit' name='i' value='Tout Allumer' id="bouton1">----------<input type='submit' name='I' value='Tout Eteindre' id="bouton2"></td>
		   <td width=43></td>
	  </tr>	  
	  </form>
	  
	  
	  <tr>
	  <th><?php echo "$Titre1";?></th>
      <form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<?php
    if (isset($_SESSION['EtatPin1'])&& $_SESSION['EtatPin1']=="on") 
    {
?>    
	  <td><input type="SUBMIT" name="EtatPin1" id="bouton1" value="on"></td>
	  <td><img width=42 height=42 src="https://zupimages.net/up/19/35/fuyk.png" alt="" /></td>
<?php
    }
	else
    {
?>
	  <td><input type="SUBMIT" name="EtatPin1" id="bouton2" value="off"></td>
	  <td><img width=42 height=42 src="https://zupimages.net/up/19/35/ygq2.png" alt="" /></td>
<?php
    }
?>	
      </form>
      </tr>
	  
	  <tr>
	  <th><?php echo "$Titre2";?></th>
      <form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<?php
    if (isset($_SESSION['EtatPin2'])&& $_SESSION['EtatPin2']=="on") 
    {
?>
	  <td><input type="SUBMIT" name="EtatPin2" id="bouton1" value="on"></td>
	  <td><img width=42 height=42 src="https://zupimages.net/up/19/35/fuyk.png" alt="" /></td>
<?php
    }
	else
    {
?>
	  <td><input type="SUBMIT" name="EtatPin2" id="bouton2" value="off"></td>
	  <td><img width=42 height=42 src="https://zupimages.net/up/19/35/ygq2.png" alt="" /></td>
<?php
    }
?>	
      </form>
      </tr>


	  <tr>
	  <th><?php echo "$Titre3";?></th>
      <form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<?php
    if (isset($_SESSION['EtatPin3'])&& $_SESSION['EtatPin3']=="on") 
    {
?>
	  <td><input type="SUBMIT" name="EtatPin3" id="bouton1" value="on"></td>
	  <td><img width=42 height=42 src="https://zupimages.net/up/19/35/fuyk.png" alt="" /></td>
<?php
    }
	else
    {
?>
	  <td><input type="SUBMIT" name="EtatPin3" id="bouton2" value="off"></td>
	  <td><img width=42 height=42 src="https://zupimages.net/up/19/35/ygq2.png" alt="" /></td>
<?php
    }
?>	
      </form>
      </tr>


	  <tr>
	  <th><?php echo "$Titre4";?></th>
      <form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<?php
    if (isset($_SESSION['EtatPin4'])&& $_SESSION['EtatPin4']=="on") 
    {
?>
	  <td><input type="SUBMIT" name="EtatPin4" id="bouton1" value="on"></td>
	  <td><img width=42 height=42 src="https://zupimages.net/up/19/35/fuyk.png" alt="" /></td>
<?php
    }
	else
    {
?>
	  <td><input type="SUBMIT" name="EtatPin4" id="bouton2" value="off"></td>
	  <td><img width=42 height=42 src="https://zupimages.net/up/19/35/ygq2.png" alt="" /></td>
<?php
    }
?>	
      </form>
      </tr>


	  <tr>
	  <th><?php echo "$Titre5";?></th>
      <form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<?php
    if (isset($_SESSION['EtatPin5'])&& $_SESSION['EtatPin5']=="on") 
    {
?>
	  <td><input type="SUBMIT" name="EtatPin5" id="bouton1" value="on"></td>
	  <td><img width=42 height=42 src="https://zupimages.net/up/19/35/fuyk.png" alt="" /></td>
<?php
    }
	else
    {
?>
	  <td><input type="SUBMIT" name="EtatPin5" id="bouton2" value="off"></td>
	  <td><img width=42 height=42 src="https://zupimages.net/up/19/35/ygq2.png" alt="" /></td>
<?php
    }
?>	
      </form>
      </tr>
	  

	  <tr>
	  <th><?php echo "$Titre6";?></th>
      <form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<?php
    if (isset($_SESSION['EtatPin6'])&& $_SESSION['EtatPin6']=="on") 
    {
?>
	  <td><input type="SUBMIT" name="EtatPin6" id="bouton1" value="on"></td>
	  <td><img width=42 height=42 src="https://zupimages.net/up/19/35/fuyk.png" alt="" /></td>
<?php
    }
	else
    {
?>
	  <td><input type="SUBMIT" name="EtatPin6" id="bouton2" value="off"></td>
	  <td><img width=42 height=42 src="https://zupimages.net/up/19/35/ygq2.png" alt="" /></td>
<?php
    }
?>	
      </form>
      </tr>
	  

	  <tr>
	  <th><?php echo "$Titre7";?></th>
      <form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<?php
    if (isset($_SESSION['EtatPin7'])&& $_SESSION['EtatPin7']=="on") 
    {
?>
	  <td><input type="SUBMIT" name="EtatPin7" id="bouton1" value="on"></td>
	  <td><img width=42 height=42 src="https://zupimages.net/up/19/35/fuyk.png" alt="" /></td>
<?php
    }
	else
    {
?>
	  <td><input type="SUBMIT" name="EtatPin7" id="bouton2" value="off"></td>
	  <td><img width=42 height=42 src="https://zupimages.net/up/19/35/ygq2.png" alt="" /></td>
<?php
    }
?>	
      </form>
      </tr>
	  

	  <tr>
	  <th><?php echo "$Titre8";?></th>
      <form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<?php
    if (isset($_SESSION['EtatPin8'])&& $_SESSION['EtatPin8']=="on") 
    {
?>
	  <td><input type="SUBMIT" name="EtatPin8" id="bouton1" value="on"></td>
	  <td><img width=42 height=42 src="https://zupimages.net/up/19/35/fuyk.png" alt="" /></td>
<?php
    }
	else
    {
?>
	  <td><input type="SUBMIT" name="EtatPin8" id="bouton2" value="off"></td>
	  <td><img width=42 height=42 src="https://zupimages.net/up/19/35/ygq2.png" alt="" /></td>
<?php
    }
?>	
      </form>
      </tr>
      <tr>
           <td colspan=4><img width=491 height=369 src="https://zupimages.net/up/20/17/gb7t.png" alt="" /></td>  <! -- Schéma Arduino Uno et huit leds -->
	  </tr>	  
	  </table>
 </body>
 </html>
<?php
/* function afficher_variables()
{
       if (isset($_POST)) 
	   {
	   echo '<pre>';
	   echo var_dump($_POST);
	   echo'</pre>';
	   }
       if (isset($_GET)) 
	   {
	   echo '<pre>';
	   echo var_dump($_GET);
	   echo'</pre>';
	   }
       if (isset($_SESSION)) 
	   {
	   echo '<pre>';		   
	   echo var_dump($_SESSION);
	   echo'</pre>';	   
	   }
}	   
afficher_variables(); */
?>