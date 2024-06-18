<?php
 
 include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style>
body {
  background: goldenrod;
  min-height: 100vh;
  /* display: ; */
  align-items: center;
  justify-content: center;
  color: #fff;
  font-family: 'Work Sans', sans-serif;
  font-weight: 900;
}
button{
    width: 200px;
    height: 50px;
    background-color: blue;
    color: white;
    margin-left: 43%;
    
}
p {
  font-size: 60px;
  text-transform: uppercase;
  text-align: center;
  line-height: 1;
}

.fancy {
  position: relative;
  white-space: nowrap;
  &:after {
    --deco-height: 0.3125em;
    content: "";
    position: absolute;
    left: 0;
    right: 0;
    bottom: calc(var(--deco-height) * -0.625);
    height: var(--deco-height);
     
  }
}
</style>
    <title>Document</title>
</head>
<body>
  
<p>SHOW IN <span class="fancy">DETAILS</span></p>
<?php

 $query = 'SELECT * FROM employee';
 $result = mysqli_query($conn,$query);
 if(mysqli_num_rows($result)>0){


?>
<table class="table" border="1" style="border: 1px solid white;" >
  <thead class="thead-dark">
    <tr>
      <th scope="col">id</th>
      <th scope="col">Fullname</th>
      <th scope="col">Email</th>
      <th scope="col">Comapny</th>
      <th scope="col">Phoneno</th>
      <th scope="col">Address</th>
      <th scope="col">Message</th>
      <th scope="col">Gender</th>
      <th scope="col">Image</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
  while($data = mysqli_fetch_assoc($result)){
          // $id = $data['id'];    
              
    ?>
    <tr>
      <th><?php echo $data['id']; ?> </th>
      <td><?php echo $data['name']; ?> </td>
      <td><?php echo $data['email']; ?> </td>
      <td><?php echo $data['company']; ?> </td>
      <td><?php echo $data['noo']; ?> </td>
      <td><?php echo $data['address']; ?> </td>
      <td><?php echo $data['message']; ?> </td>
      <td><?php echo $data['gender']; ?> </td>
      <td><img src="image/<?php echo $data['filename'];?>" style="width:90px;height:90px;border-radius:50%;" ></td>
      <td>
        <a href="edit.php? id=<?php echo $data['id'];?>"
        style="  
       background-color: #000;
       background-image: linear-gradient(125deg, #a72879, #064497);
       color: #fff;
       text-align: center;
       text-transform: uppercase;
       letter-spacing: 2px;
       font-size: 13px;
       padding: 3px 9px;
       border: none;
       width: 90px;
       ">Edit</a>
        <a href="delete.php? id=<?php echo $data['id'];?>" 
        style="color: #fff;
        background-color:red;
       text-align: center;
       text-transform: uppercase;
       letter-spacing: 2px;
       font-size: 13px;
       padding: 3px 9px;
       border: none;
       width: 90px;
        ">Delete</a>
      </td>
    </tr>
    <?php } ?>
  </tbody>
</table>
<?php } ?>
 
 <a href="logout.php"><button>Logout</button></a>
</body>
</html>