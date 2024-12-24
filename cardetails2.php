<?php
  // Establish the database connection
  $conn = mysqli_connect("localhost", "root", "", "primerides");

  // Check the connection
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Data</title>
    <style>
      table {
        border-collapse: collapse;
        width: 100%;
      }
      th, td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
      }
      tr:nth-child(even) {
        background-color: #f2f2f2;
      }
    </style>
  </head>
  <body>
    <h1>Car Details</h1>
    <table border="1" cellspacing="0" cellpadding="10">
      <tr>
        <th>Name</th>
        <th>Image</th>
      </tr>
      <?php
        $q = "SELECT * FROM `car-details`";
        $rows = mysqli_query($conn, $q);

        if ($rows) {
          foreach ($rows as $row) :
            $carname = htmlspecialchars($row["carname"]);
            $img1 = htmlspecialchars($row["img1"]);
            $imgPath1 = "admin/uploads/".$img1;

            $img2 = htmlspecialchars($row["img2"]);
            $imgPath2 = "admin/uploads/".$img2;

            $img3 = htmlspecialchars($row["img3"]);
            $imgPath3 = "admin/uploads/".$img3;

    ?>
      <tr>
        <td><?php echo $carname; ?></td>
        <td>
          <?php if (file_exists($imgPath1)) : ?>
            <img src="<?php echo $imgPath1; ?>" width="200" title="<?php echo $img1; ?>">
          <?php else : ?>
            <p>Image not found: <?php echo $img1; ?></p>
          <?php endif; ?>

        <?php if (file_exists($imgPath2)) : ?>
            <img src="<?php echo $imgPath2; ?>" width="200" title="<?php echo $img2; ?>">
          <?php else : ?>
            <p>Image not found: <?php echo $img2; ?></p>
          <?php endif; ?>

        <?php if (file_exists($imgPath3)) : ?>
            <img src="<?php echo $imgPath3; ?>" width="200" title="<?php echo $img3; ?>">
          <?php else : ?>
            <p>Image not found: <?php echo $img3; ?></p>
          <?php endif; ?>
        </td>
      </tr>
      <?php
          endforeach;
        } else {
          echo "<tr><td colspan='2'>No records found.</td></tr>";
        }

        // Close the database connection
        mysqli_close($conn);
      ?>
    </table>
  </body>
</html>
