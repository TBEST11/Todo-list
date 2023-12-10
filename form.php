<?php
include("create.php");
include("edit.php");
include("update.php");



$editTask = editTaskById();
//$createTask = createTask();


if (isset($_GET['edit-task'])) {
    $createTask = updateTaskById();
}

?>

<form method="POST" action="./create.php">
  <div class="form-group">
    <label for="activity">Activity</label>
    <input type="text" class="form-control" id="activity" name="activity" placeholder="Go to the gym">
  </div>
  <div class="form-group">
    <label for="status">Todo Status</label>
    <select class="form-control" id="status" name="status">
      <option  value="">--Select Status--</option>
      <option value="ongoing"> Ongoing </option>
      <option value="pending"> Pending</option>
      <option  value="completed"> Completed</option>
    </select>
  </div>
  <div class="form-group">
    <label for="start_date">Start Date</label>
    <input type="date" class="form-control" name="start_date" id="start_date">
    <label for="end_date">End Date</label>
    <input type="date" class="form-control" name="end_date" id="end_date">
  </div>
  <div class="form-group">
    <label for="description">Description</label>
    <textarea class="form-control" id="description" name="description" rows="3"></textarea>
  </div>
  <div>
    <button name="submit" class="btn btn-primary">Save to do</button>
  </div>
</form>


<!--form method="post">
    <p class="text-danger">
        <!-?php
        echo $createTask['success'] ?? '';
        echo $createTask['taskMsg'] ?? '';
        ?>
    </p>

    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Enter Something..." name="task" value="<!?php echo $editTask['task'] ?? ''; ?>">
        <button type="submit" class="btn btn-primary" name="<!-?php echo count($editTask) ? 'update' : 'add'; ?>"><?php echo count($editTask) ? 'update' : 'add'; ?></button>
       
            <select name="STATUS">
                <option value="-SELECT-">-SELECT-</option>s
                <option value="Yet to Start">Yet to Start</option>
                <option value="Ongoing">Ongoing</option>
                <option value="Pending">Pending</option>
                <option value="Completed">Completed</option>
            </select>
            <input type="submit" class="btn btn-success" name="submit" value="SELECT" />
        
        <!?php
        if (isset($_POST['submit'])) {
            $selected_val = $_POST['STATUS'];  // Storing Selected Value In Variable
            //echo "Your Task is :" .$selected_val;  // Displaying Selected Value
        }
        ?>
    </div>

</form>