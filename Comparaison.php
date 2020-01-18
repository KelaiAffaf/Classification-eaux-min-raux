
<html>
<?php 
                        if(isset($_POST['text1'])){ // si formulaire soumis
 
                           $str1= $_POST['text1'];
                           $str2= $_POST['text2'];

                        
                           $mysqli = new mysqli('localhost', 'root', '', 'mysql1');
                           $mysqli->set_charset("utf8");
                           $requete = "SELECT * FROM liste where Marque='hayet'";
                           $resultat = $mysqli->query($requete);
                           while ($ligne = $resultat->fetch_assoc()) {
                            echo $ligne['Marque'].' '.$ligne['Type'].' '.$ligne['PH'].' ';
                            echo $ligne['Ca(mg/L)'].' '.$ligne['Mg(mg/L)'].' ';
                            echo $ligne['Na(mg/L)'].' '.$ligne['K(mg/L)'].' ';
                            echo $ligne['HCO3(mg/L)'].' '.$ligne['Cl(mg/L)'].' ';
                            echo $ligne['SO4(mg/L)'].' '.$ligne['NO3(mg/L)'].' ';
                            echo $ligne['NO2(mg/L)'].'</br> ';
                        }
                        $mysqli->close();

                    }
                ?>
	
							
</html>