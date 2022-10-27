<?php
include_once 'assets/includes/header.php';
?>
    <link href="assets/css/indexcss/scores.css" rel="stylesheet">
      <div>
        <div class="container">
          <h3 class="animate-headtext">SCORES PAGES</h3>
        </div>
        <div>

        </div>
      </div>
    </div>
  </header>
</div>

<div class="scores">

  <table class="styled-table">
    <thead>
    <tr>
      <th>Name</th>
      <th>Points</th>
        <th>Time</th>
    </tr>
    </thead>
    <tbody>
    <!-- tableau qui prend les donné du tableau scores de la bdd -->
    <?php
    $conn = mysqli_connect("localhost", "root", "", "website");
    $sql = "SELECT * FROM scores ORDER BY points DESC LIMIT 5";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    if ($resultCheck > 0) {
      while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>" . $row['username'] . "</td><td>" . $row['points'] . " pts" . "</td><td>" . $row['timer'] . " sec" . "</td></tr>";
      }
    }

    ?>

    </tbody>
  </table>

</div>

</body>
</html>
      <?php
      include_once 'assets/includes/footer.php';
      ?>