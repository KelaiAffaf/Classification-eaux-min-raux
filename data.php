
<html>

<form action="data.php" method="post">

Marque1 : <input type="text" name="Marque1" />
Marque2 : <input type="text" name="Marque2" />
<input type="submit"  name ="valider" value="Valider" />
</form>

<?php

$marque2="";
$marque1="";
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "mysql1");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 



if(isset($_POST['valider'])){
    $marque1= $_POST["Marque1"];
    $marque2= $_POST["Marque2"];
    			
// Attempt select query execution
$sql = "SELECT * FROM liste WHERE (Marque ='{$marque1}' or Marque ='{$marque2}')";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Marque</th>";
                echo "<th>Type</th>";
                echo "<th>Ca(mg/L)</th>";
                echo "<th>Mg(mg/L)</th>";
                echo "<th>Na(mg/L)</th>";
                echo "<th>K(mg/L)</th>";
                echo "<th>HCO3(mg/L)</th>";
                echo "<th>Cl(mg/L)</th>";
                echo "<th>SO4(mg/L)</th>";
                echo "<th>NO3(mg/L)</th>";
                echo "<th>NO2(mg/L)</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['Marque'] . "</td>";
                echo "<td>" . $row['Type'] . "</td>";
                echo "<td>" . $row['Ca(mg/L)'] . "</td>";
                echo "<td>" . $row['Mg(mg/L)'] . "</td>";
                echo "<td>" . $row['Na(mg/L)'] . "</td>";
                echo "<td>" . $row['K(mg/L)'] . "</td>";
                echo "<td>" . $row['HCO3(mg/L)'] . "</td>";
                echo "<td>" . $row['Cl(mg/L)'] . "</td>";
                echo "<td>" . $row['SO4(mg/L)'] . "</td>";
                echo "<td>" . $row['NO3(mg/L)'] . "</td>";
                echo "<td>" . $row['NO2(mg/L)'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
}
// Close connection
mysqli_close($link);




?>



</html>

