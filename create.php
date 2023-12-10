<?php
 $hostName = 'localhost';
 $userName = 'root';
 $password = '';
 $database = 'todolist';
 
 $conn = new mysqli($hostName, $userName, $password, $database);

  if (isset($_POST['submit'])) {

      /* validation */
    // $task = $_POST['task'];
    $activity = $_POST['activity'];
    $status = $_POST['status'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $description = $_POST['description'];

    $data['taskMsg'] = '';
    if(empty($activity)) {

      $data['taskMsg'] = "Empty Field!";
    }
    $data['taskMsg'] = '';
    if(empty($status)) {

      $data['taskMsg'] = "Empty Field!";
    }
    $data['taskMsg'] = '';
    if(empty($start_date)) {

      $data['taskMsg'] = "Empty Field!";
      
    }
    $data['taskMsg'] = '';
    if(empty($end_date)) {

      $data['taskMsg'] = "Empty Field!";
    }
    $data['taskMsg'] = '';
    if(empty($description)) {

      $data['taskMsg'] = "Empty Field!";
    }
     $validation = false;
    if(empty($data['taskMsg'])) {
       $validation = true;
    }

     if($validation) {

     /* insert query*/
     $sql = "INSERT INTO `todo` (`activity`, `status`, `state_date`, `end_date`, `description`) VALUES ('$activity', '$status', '$start_date', '$end_date', '$description')";
     
    // $result = $conn->query($query);
     
     //if ($result) {
       //  $data['success'] = "Task is added successfully";
    // }
     
     //return $data;
     $result = mysqli_query($conn, $sql);
        
     # Checks that the query executed successfully
     if ($result) {
        
                                 
     }
     else{
         echo "Failed to insert new data.";
     }
    ?>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
</head> 
<body> 
    <div class="container">
		<table class="table">
			<thead class="thead-light">
			<tr>
             
			  <th scope="col">Activity</th>
			  <th scope="col">Status</th>
			  <th scope="col">Start Date</th>
              <th scope="col">End Date</th>
			  <th scope="col">Description</th>
			</tr>
			</thead>
			<tbody>

<?php

echo '<tr >
<td>' . $activity . '</td>
<td> ' . $status . '</td>
<td>' . $start_date . '</td>
<td>' . $end_date. '</td>
<td> ' . $description. '</td> </tr>';

     echo '<br>';
     echo '<br>';
     echo '<br>';
     echo'<a href="./index.php"><b>Go Back</b></a>'; 
     echo ' <a href="./view.php"><b> |  View List</b></a>';
    }
   
   
}
 
?> 