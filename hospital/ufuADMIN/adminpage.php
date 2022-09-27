<?php
 include_once "connection.php";
 $sql = "SELECT *FROM appointment";
 $result = $conn->query($sql);
 ?>
<!doctype html>
<html lang="en">
  <head>
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title> urclinic admin</title>
  </head>

<h1> Hello Admin </h1>
<h2> appointments</h2>
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NAME</th>
      <th scope="col">EMAIL</th>
      <th scope="col">DAY</th>
      <th scope="col">TIME</th>
      <th scope="col">DOCTOR</th>
      <th scope="col">MESSAGE</th>
      <th scope="col">ACTION</th>
    </tr>
  </thead>
  <tbody>
    <?php 
     if ($result->rowCount() > 0){
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {  
                              
    ?>

    <tr>
      <td><?php echo $row['id']; ?></td>
      <td><?php echo $row['name']; ?></td>
      <td><?php echo $row['email']; ?></td>
      <td><?php echo $row['doctor']; ?></td>
      <td><?php echo $row['day']; ?></td>
      <td><?php echo $row['time']; ?></td>
      <td><?php echo $row['message']; ?></td>
      <td><a class="btn btn-info" href="reply.php?id=<?php echo $row['id']; ?>">REPLY</a>
      <a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>">DELETE</a>
      <a class="btn btn-primary" href="update.php?id=<?php echo $row['id']; ?>">UPDATE</a>
    </td>
    </tr>
    <?php }
     }
     ?>

     
  </tbody>
</table>
<?php
 include_once "connection.php";
 $sql = "SELECT *FROM contact_us";
 $result = $conn->query($sql);
 ?>
<h2>contact-us</h2>
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NAME</th>
      <th scope="col">EMAIL</th>
      <th scope="col">PHONE</th>
      <th scope="col">MESSAGE</th>
      <th scope="col">ACTION</th>
      
    </tr>
  </thead>
  <tbody>
  <?php 
     if ($result->rowCount() > 0){
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {  
                              
    ?> 
    <tr>
    <td><?php echo $row['id']; ?></td>
      <td><?php echo $row['name']; ?></td>
      <td><?php echo $row['email']; ?></td>
      <td><?php echo $row['phone']; ?></td>
      <td><?php echo $row['message']; ?></td>
      <td><a class="btn btn-info" href="reply.php?id=<?php echo $row['id']; ?>">REPLY</a>
      <a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>">DELETE</a>
      <a class="btn btn-primary" href="update.php?id=<?php echo $row['id']; ?>">UPDATE</a>
      
    </td>
      
    </tr> <?php }
     }
     ?>

  </tbody>
</table>