<?php 

// Include configuration file  
require ('db.php');
 
//Select query 
$select = "SELECT * FROM todo";
$result = $conn->query($select);

?> 

<!DOCTYPE html> 
<html lang="en"> 
<head> 
    <meta charset="UTF-8"> 
    <title>TO DO LIST</title> 
	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
</head> 
<body> 
    <div class="container">
		<table class="table">
			<thead class="thead-light">
			<tr>
              <th scope="col">ID</th>
			  <th scope="col">Activity</th>
			  <th scope="col">Status</th>
			  <th scope="col">Start Date</th>
              <th scope="col">End Date</th>
			  <th scope="col">Description</th>
			</tr>
			</thead>
			<tbody>
                         
                        <?php   
			// Loop the employee data
            
				echo '<table class="table table-bordered">';
				while($row = $result->fetch_object()){
					echo '<tr>'
						.'<td>'.$row->id.'</td>'
						.'<td>'.$row->activity.'</td>'
						.'<td>'.$row->status.'</td>'
                        .'<td>'.$row->state_date.'</td>'
						.'<td>'.$row->end_date.'</td>'
						.'<td>'.$row->description.'</td>'
						.'</tr>';
				}
				echo '</table>';
                        ?> 
			</tbody> 
        </table> 
    </div> 
</body> 
</html> 