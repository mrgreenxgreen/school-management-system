<!DOCTYPE html>
<html lang="en">
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>admin page</title>
    
    <link rel="stylesheet"  href="./css/admin.css" />
</head>
<body>
    <div class="div">
    <h1>Admin Page </h1>

    
    </div>


<?php

$dbhost = "localhost";
$dbusername = "root";
$dbpassword  ="";
$dbname ="ipas";

$mysqli = mysqli_connect($dbhost, $dbusername, $dbpassword, $dbname);


$result = mysqli_query($mysqli, "SELECT * FROM answers");

?>
<div class="tableDiv">
<table>
    <tr>
        <th> ID</th>
        <th> Name</th>
        <th> Age Bracket</th>
        <th> Gender</th>
        <th> School Year</th>
        <th> Skills Acquired</th>
        <th> Trainings Attended</th>
        <th> A1.</th>
        <th> A2.</th>
        <th> A3.</th>
        <th> A4.</th>
        <th> A5.</th>
        <th> A6.</th>
        <th> B1. </th>
        <th> B2. </th>
        <th> B3. </th>
        <th> B4. </th>
        <th> B5. </th>
        <th> C1. </th>
        <th> C2. </th>
        <th> C3. </th>
        <th> C4. </th>
        <th> C5. </th>
        <th> C6. </th>
        <th> D1. </th>
        <th> D2. </th>
        <th> D3. </th>
        <th> D4. </th>
        <th> D5. </th>
        <th> D6. </th>
        <th> E1. </th>
        <th> E2. </th>
        <th> E3. </th>
        <th> E4. </th>
        <th> E5. </th>
        <th> E6. </th>
        <th> E7. </th>
        <th> E8. </th>
        <th> G1. </th>
        <th> G2. </th>
        <th> G3. </th>
        <th> G4. </th>
    
    </tr>
<?php
        //show all subjects
		while($res2 = mysqli_fetch_array($result)) {		
			echo "<tr>";
			echo "<td>".$res2['respondent_id']."</td>";
			echo "<td>".$res2['name']."</td>";
			echo "<td>".$res2['age']."</td>";	
            echo "<td>".$res2['gender']."</td>";	
            echo "<td>".$res2['school_year']."</td>";
            echo "<td>".$res2['skills_acquired']."</td>";	
            echo "<td>".$res2['trainings_attended']."</td>";
            echo "<td>".$res2['a1']."</td>";		
            echo "<td>".$res2['a2']."</td>";
            echo "<td>".$res2['a3']."</td>";
            echo "<td>".$res2['a4']."</td>";
            echo "<td>".$res2['a5']."</td>";
            echo "<td>".$res2['a6']."</td>";	
            echo "<td>".$res2['b1']."</td>";
            echo "<td>".$res2['b2']."</td>";
            echo "<td>".$res2['b3']."</td>";
            echo "<td>".$res2['b4']."</td>";
            echo "<td>".$res2['b5']."</td>";
            echo "<td>".$res2['c1']."</td>";
            echo "<td>".$res2['c2']."</td>";
            echo "<td>".$res2['c3']."</td>";
            echo "<td>".$res2['c4']."</td>";
            echo "<td>".$res2['c5']."</td>";
            echo "<td>".$res2['c6']."</td>";
			echo "<td>".$res2['d1']."</td>";
            echo "<td>".$res2['d2']."</td>";
            echo "<td>".$res2['d3']."</td>";
            echo "<td>".$res2['d4']."</td>";
            echo "<td>".$res2['d5']."</td>";
            echo "<td>".$res2['d6']."</td>";	
            echo "<td>".$res2['e1']."</td>";
            echo "<td>".$res2['e2']."</td>";	
            echo "<td>".$res2['e3']."</td>";
            echo "<td>".$res2['e4']."</td>";	
            echo "<td>".$res2['e5']."</td>";	
            echo "<td>".$res2['e6']."</td>";	
            echo "<td>".$res2['e7']."</td>";
            echo "<td>".$res2['e8']."</td>";
            echo "<td>".$res2['g1']."</td>";
            echo "<td>".$res2['g2']."</td>";	
            echo "<td>".$res2['g3']."</td>";
            echo "<td>".$res2['g4']."</td>";	
            //delete lang ini later pag ok na ang edit kag delete 
            echo "<td> Edit </td>:";
            echo "<td> Delete </td>";
            			
			// echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
		}
		?>
     </tr>
</table>
</div>
</body>
</html>