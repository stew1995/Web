<!DOCTYPE html>
<html>
  <style>
    #hallsOuput {
      border: 1px solid black;
    }
    #hallsOuput th {
      background: red;
    }
  </style>
<body>
<?php
  $q = interval($_GET['q']);
  $conn = mysqli_connect('localhost', 'root', 'root', 'web');
  if(!$conn){
    die('Could not connect: '. mysqli_error($conn));
  }

  $sqlshowHalls="SELECT * FROM halls WHERE id = '".$q."'";
  $result = mysqli_query($conn, $sql);
  mysqli_query($conn, $sqlshowHalls) or die(mysqli_error($conn));


  echo "<table id='hallsOutput'>
          <tr>
            <th>Halls ID</th>
            <th>Name</th>
            <th>Address</th>
            <th>Postcode</th>
          </tr>";
          while($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>". $row['hall_id'] . "</td>";
            echo "<td>". $row['name'] . "</td>";
            echo "<td>". $row['location'] . "</td>";
            echo "<td>". $row['postcode'] . "</td>";
            echo "</tr>";
          }
  echo "</table>";
  mysqli_close($conn);
?>

</body>
</html>
