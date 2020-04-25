<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Page Mot de passe</title>
<style>
html{font-family: Helvetica; display: inline-block; margin: 0px auto; text-align: center;} 
body{background-color:#0063B1;} 
th{background-color:grey;color:white;text-align: left;}
td{height:3px;}
.couleur_texte{color:white;}
</style>
    </head>
    <body>
	
	 <?php 
	 if (isset($_POST['mot_de_passe']) AND $_POST['mot_de_passe'] == "1234") 
	 {
		 header("Location: Screen2.php");
     }
	 else
	 {
     ?>	
              <table border="0" width="860" align="center">
				  <tr align="center">
					  <td align="center"><img src="https://zupimages.net/up/20/13/7exg.png" alt="" /></td>
				  </tr>
			 </table>
			  
			  <table border="0" width="860" align="center">
				  <tr>
					  <td colspan="3" height="100"></td>
				  </tr>
				  <tr align="center" height="150">
					  <td width="390" align="right">Mot de passe :</td>
						 <form action="Screen1.php" method="post">
					  <td align="left">
						 <input type="password" name="mot_de_passe" />
						 <input type="submit" value="Valider" />
					  </td>
					  <td><?php if (isset($_POST['mot_de_passe'])) {echo '<div style="color:red"><h3>Mot de passe erroné</h3></div>';} ?> </td>
						 </form>
				  </tr>
			  </table>
    <?php
	 }
	?>
    </body>
</html>

<?php
function afficher_variables()
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
//afficher_variables();
?>