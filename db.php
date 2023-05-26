<?php

$host = "localhost";
$user = "root";
$password = "root";
$database = "php-ajax-tut";
$connection = mysqli_connect($host, $user, $password, $database);
// print_r($connection);

$result = $connection->query("SELECT * FROM users");

// print_r($result);

?>

<?php while($data =$result->fetch_assoc()): ?>
  <tr>
    <td><?php echo $data['id']; ?></td>
    <br/>
    <td><?php echo $data['name']; ?></td>
    <br/>
    <td><?php echo $data['city']; ?></td>
  </tr>
<?php endwhile;?>    