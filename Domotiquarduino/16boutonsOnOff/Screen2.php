<?php session_start(); 
// Domotiquarduino : Contrôler huit leds avec un Arduino depuis une page WEB PHP Wampserver (version 16 boutons On/Off)

$usb_comPort = "COM4"; //indiquer le port de l'ide Arduino sur lequel la carte est reliée
$Titre1      = "Broche 1";
$Titre2      = "Broche 2";
$Titre3 	 = "Broche 3";
$Titre4 	 = "Broche 4";
$Titre5	 	 = "Broche 5";
$Titre6 	 = "Broche 6";
$Titre7	     = "Broche 7";
$Titre8 	 = "Broche 8";

//--------------METHODE SWITCH-------------------
	// switch($_POST)
	// {
		// case isset($_POST['a']):
		    // $_SESSION['EtatPin1']= 'on';
			// exec("ECHO a > $usb_comPort"); 
			// break;
		// case isset($_POST['A']):
		    // $_SESSION['EtatPin1']= 'off';
			// exec("ECHO A > $usb_comPort "); 
			// break;
		// case isset($_POST['b']):
		    // $_SESSION['EtatPin2']= 'on';
			// exec("ECHO b > $usb_comPort"); 
			// break;
		// case isset($_POST['B']):
		    // $_SESSION['EtatPin2']= 'off';
			// exec("ECHO B > $usb_comPort"); 
			// break;
		// case isset($_POST['c']):
		    // $_SESSION['EtatPin3']= 'on';
			// exec("ECHO c > $usb_comPort"); 
			// break;
		// case isset($_POST['C']):
		    // $_SESSION['EtatPin3']= 'off';
			// exec("ECHO C > $usb_comPort"); 
			// break;
		// case isset($_POST['d']):
		    // $_SESSION['EtatPin4']= 'on';
			// exec("ECHO d > $usb_comPort"); 
			// break;
		// case isset($_POST['D']):
		    // $_SESSION['EtatPin4']= 'off';
			// exec("ECHO D > $usb_comPort"); 
			// break;
		// case isset($_POST['e']):
		    // $_SESSION['EtatPin5']= 'on';
			// exec("ECHO e > $usb_comPort"); 
			// break;
		// case isset($_POST['E']):
		    // $_SESSION['EtatPin5']= 'off';
			// exec("ECHO E > $usb_comPort"); 
			// break;
		// case isset($_POST['f']):
		    // $_SESSION['EtatPin6']= 'on';
			// exec("ECHO f > $usb_comPort"); 
			// break;
		// case isset($_POST['F']):
		    // $_SESSION['EtatPin6']= 'off';
			// exec("ECHO F > $usb_comPort"); 
			// break;
		// case isset($_POST['g']):
		    // $_SESSION['EtatPin7']= 'on';
			// exec("ECHO g > $usb_comPort"); 
			// break;
		// case isset($_POST['G']):
		    // $_SESSION['EtatPin7']= 'off';
			// exec("ECHO G > $usb_comPort"); 
			// break;
		// case isset($_POST['h']):
		    // $_SESSION['EtatPin8']= 'on';
			// exec("ECHO h > $usb_comPort"); 
			// break;
		// case isset($_POST['H']):
		    // $_SESSION['EtatPin8']= 'off';
			// exec("ECHO H > $usb_comPort"); 
			// break;
		// case isset($_POST['i']):
			// $_SESSION['EtatPin1']= 'on';
			// $_SESSION['EtatPin2']= 'on';
			// $_SESSION['EtatPin3']= 'on';
			// $_SESSION['EtatPin4']= 'on';
			// $_SESSION['EtatPin5']= 'on';
			// $_SESSION['EtatPin6']= 'on';
			// $_SESSION['EtatPin7']= 'on';	
			// $_SESSION['EtatPin8']= 'on';
			// exec("ECHO a,b,c,d,e,f,g,h > $usb_comPort"); 
			// break;
		// case isset($_POST['I']):
		    // $_SESSION['EtatPin1']= 'off';
		    // $_SESSION['EtatPin2']= 'off';
		    // $_SESSION['EtatPin3']= 'off';
		    // $_SESSION['EtatPin4']= 'off';
		    // $_SESSION['EtatPin5']= 'off';
            // $_SESSION['EtatPin6']= 'off';
            // $_SESSION['EtatPin7']= 'off';	
            // $_SESSION['EtatPin8']= 'off';
			// exec("ECHO A,B,C,D,E,F,G,H > $usb_comPort"); 
			// break;
	// }

//--------------METHODE IF-------------------
	if(isset($_POST['a'])) //allumer la led 1
    {
	 $_SESSION['EtatPin1']= 'on';	
     exec("ECHO a > $usb_comPort");
    }	 
	if(isset($_POST['A'])) //éteindre la led 1	
    {
	 $_SESSION['EtatPin1']= 'off';	
     exec("ECHO A > $usb_comPort"); 
    }
	if(isset($_POST['b']))
    {
     $_SESSION['EtatPin2']= 'on';
     exec("ECHO b > $usb_comPort");
    }	 
	if(isset($_POST['B']))
    {
	 $_SESSION['EtatPin2']= 'off';
     exec("ECHO B > $usb_comPort");
    }
	if(isset($_POST['c']))
    {
	 $_SESSION['EtatPin3']= 'on';
     exec("ECHO c > $usb_comPort");
    }	 
	if(isset($_POST['C']))
    {
     $_SESSION['EtatPin3']= 'off';
     exec("ECHO C > $usb_comPort");
    }
	if(isset($_POST['d']))
    {
     $_SESSION['EtatPin4']= 'on';
     exec("ECHO d > $usb_comPort");
    }	 
	if(isset($_POST['D']))
    {
	 $_SESSION['EtatPin4']= 'off';
     exec("ECHO D > $usb_comPort");
    }
	if(isset($_POST['e']))
    {
	 $_SESSION['EtatPin5']= 'on';
     exec("ECHO e > $usb_comPort");
    }	 
	if(isset($_POST['E']))
    {
	 $_SESSION['EtatPin5']= 'off';	
     exec("ECHO E > $usb_comPort");
    }
	if(isset($_POST['f']))
    {
	 $_SESSION['EtatPin6']= 'on';
     exec("ECHO f > $usb_comPort");
    }	 
	if(isset($_POST['F']))
    {
	 $_SESSION['EtatPin6']= 'off';	
     exec("ECHO F > $usb_comPort");
    }
	if(isset($_POST['g']))
    {
	 $_SESSION['EtatPin7']= 'on';
     exec("ECHO g > $usb_comPort");
    }	 
	if(isset($_POST['G']))
    {
	 $_SESSION['EtatPin7']= 'off';
     exec("ECHO G > $usb_comPort");
    }
	if(isset($_POST['h']))
    {
	 $_SESSION['EtatPin8']= 'on';	
     exec("ECHO h > $usb_comPort");
    }	 
	if(isset($_POST['H']))
    {
	 $_SESSION['EtatPin8']= 'off';
     exec("ECHO H > $usb_comPort");
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
	  <form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      <tr>
	      <td colspan=4><img src="https://zupimages.net/up/20/13/7exg.png" alt="" /></td>
	  </tr>
      <tr>
	      <td class="couleur_texte" colspan=4>Contr&ocirc;le des broches Arduino avec une page Web PHP WAMPSERVER</td>
	  </tr>

      <tr>
	       <td width=220 colspan="4"> </td>   
	  </tr>
	  <tr>
	       <td width=220></td>
           <td width=130><input type='submit' name='i' value='Tout Allumer' id="bouton1"></td>		   
           <td width=130><input type='submit' name='I' value='Tout Eteindre' id="bouton2"></td>
		   <td width=43>
	  </tr>
	  <tr>	 
	       <th><?php echo "$Titre1";?></th>
           <td><input type='submit' name='a' value='on' id="bouton1"></td>		   
           <td><input type='submit' name='A' value='off' id="bouton2"></td>
		   <?php if(isset($_SESSION['EtatPin1']) && $_SESSION['EtatPin1']== 'on')
		   {
			?>
		   <td><a href="https://zupimages.net/viewer.php?id=19/35/fuyk.png"><img width=42 height=42 src="https://zupimages.net/up/19/35/fuyk.png" alt="" /></a></td>
		   <?php
		   }
           else
           {
		   ?>
		   <td><a href="https://zupimages.net/viewer.php?id=19/35/ygq2.png"><img width=42 height=42 src="https://zupimages.net/up/19/35/ygq2.png" alt="" /></a></td>
		   <?php
		   }			   
		   ?>
	  </tr>
	  <tr>		   
	       <th><?php echo "$Titre2";?></th>
           <td><input type='submit' name='b' value='on' id="bouton1"></td>		   
           <td><input type='submit' name='B' value='off'id="bouton2"></td>
		   <?php if(isset($_SESSION['EtatPin2']) && $_SESSION['EtatPin2']== 'on')
		   {
			?>
		   <td><a href="https://zupimages.net/viewer.php?id=19/35/fuyk.png"><img width=42 height=42 src="https://zupimages.net/up/19/35/fuyk.png" alt="" /></a></td>
		   <?php
		   }
           else
           {
		   ?>
		   <td><a href="https://zupimages.net/viewer.php?id=19/35/ygq2.png"><img width=42 height=42 src="https://zupimages.net/up/19/35/ygq2.png" alt="" /></a></td>
		   <?php
		   }			   
		   ?>		   
	  </tr>
	  <tr>		 
	       <th><?php echo "$Titre3";?></th>
           <td><input type='submit' name='c' value='on' id="bouton1"></td>		   
           <td><input type='submit' name='C' value='off'id="bouton2"></td>
		   <?php if(isset($_SESSION['EtatPin3']) && $_SESSION['EtatPin3']== 'on')
		   {
			?>
		   <td><a href="https://zupimages.net/viewer.php?id=19/35/fuyk.png"><img width=42 height=42 src="https://zupimages.net/up/19/35/fuyk.png" alt="" /></a></td>
		   <?php
		   }
           else
           {
		   ?>
		   <td><a href="https://zupimages.net/viewer.php?id=19/35/ygq2.png"><img width=42 height=42 src="https://zupimages.net/up/19/35/ygq2.png" alt="" /></a></td>
		   <?php
		   }			   
		   ?>
	  </tr>
	  <tr>		
	       <th><?php echo "$Titre4";?></th>
           <td><input type='submit' name='d' value='on' id="bouton1"></td>		   
           <td><input type='submit' name='D' value='off'id="bouton2"></td>
		   <?php if(isset($_SESSION['EtatPin4']) && $_SESSION['EtatPin4']== 'on')
		   {
			?>
		   <td><a href="https://zupimages.net/viewer.php?id=19/35/fuyk.png"><img width=42 height=42 src="https://zupimages.net/up/19/35/fuyk.png" alt="" /></a></td>
		   <?php
		   }
           else
           {
		   ?>
		   <td><a href="https://zupimages.net/viewer.php?id=19/35/ygq2.png"><img width=42 height=42 src="https://zupimages.net/up/19/35/ygq2.png" alt="" /></a></td>
		   <?php
		   }			   
		   ?>
	  </tr>
	  <tr>		
	       <th><?php echo "$Titre5";?></th>
           <td><input type='submit' name='e' value='on' id="bouton1"></td>		   
           <td><input type='submit' name='E' value='off'id="bouton2"></td>	
		   <?php if(isset($_SESSION['EtatPin5']) && $_SESSION['EtatPin5']== 'on')
		   {
			?>
		   <td><a href="https://zupimages.net/viewer.php?id=19/35/fuyk.png"><img width=42 height=42 src="https://zupimages.net/up/19/35/fuyk.png" alt="" /></a></td>
		   <?php
		   }
           else
           {
		   ?>
		   <td><a href="https://zupimages.net/viewer.php?id=19/35/ygq2.png"><img width=42 height=42 src="https://zupimages.net/up/19/35/ygq2.png" alt="" /></a></td>
		   <?php
		   }			   
		   ?>
	  </tr>
	  <tr>		
	       <th><?php echo "$Titre6";?></th>
           <td><input type='submit' name='f' value='on' id="bouton1"></td>		   
           <td><input type='submit' name='F' value='off'id="bouton2"></td>
		   <?php if(isset($_SESSION['EtatPin6']) && $_SESSION['EtatPin6']== 'on')
		   {
			?>
		   <td><a href="https://zupimages.net/viewer.php?id=19/35/fuyk.png"><img width=42 height=42 src="https://zupimages.net/up/19/35/fuyk.png" alt="" /></a></td>
		   <?php
		   }
           else
           {
		   ?>
		   <td><a href="https://zupimages.net/viewer.php?id=19/35/ygq2.png"><img width=42 height=42 src="https://zupimages.net/up/19/35/ygq2.png" alt="" /></a></td>
		   <?php
		   }			   
		   ?>
	  </tr>
	  <tr>		  
	       <th><?php echo "$Titre7";?></th>
           <td><input type='submit' name='g' value='on' id="bouton1"></td>		   
           <td><input type='submit' name='G' value='off'id="bouton2"></td>
		   <?php if(isset($_SESSION['EtatPin7']) && $_SESSION['EtatPin7']== 'on')
		   {
			?>
		   <td><a href="https://zupimages.net/viewer.php?id=19/35/fuyk.png"><img width=42 height=42 src="https://zupimages.net/up/19/35/fuyk.png" alt="" /></a></td>
		   <?php
		   }
           else
           {
		   ?>
		   <td><a href="https://zupimages.net/viewer.php?id=19/35/ygq2.png"><img width=42 height=42 src="https://zupimages.net/up/19/35/ygq2.png" alt="" /></a></td>
		   <?php
		   }			   
		   ?>
	  </tr>
	  <tr>		 
	       <th><?php echo "$Titre8";?></th>
           <td><input type='submit' name='h' value='on' id="bouton1"></td>		   
           <td><input type='submit' name='H' value='off'id="bouton2"></td>
		   <?php if(isset($_SESSION['EtatPin8']) && $_SESSION['EtatPin8']== 'on')
		   {
			?>
		   <td><a href="https://zupimages.net/viewer.php?id=19/35/fuyk.png"><img width=42 height=42 src="https://zupimages.net/up/19/35/fuyk.png" alt="" /></a></td>
		   <?php
		   }
           else
           {
		   ?>
		   <td><a href="https://zupimages.net/viewer.php?id=19/35/ygq2.png"><img width=42 height=42 src="https://zupimages.net/up/19/35/ygq2.png" alt="" /></a></td>
		   <?php
		   }			   
		   ?>
      </tr>	
      <tr>
           <td colspan=4><img width=491 height=369 src="https://zupimages.net/up/20/17/gb7t.png" alt="" /></td>  <! -- Schéma Arduino Uno et huit leds -->
	  </tr>
	  </form>
     </table>
 </body>
 </html>