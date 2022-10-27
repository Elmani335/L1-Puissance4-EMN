<?php
// recupere le fetch de jeu-facile.js et stocker les données score et le temps dans la bdd

// 1 - connexion à la bdd
$conn = mysqli_connect("localhost", "root", "", "website");

// 2 - recuperer les données du fetch
$username = $_POST['username'];
$points = $_POST['points'];
$timer = $_POST['timer'];

// 3 - requete sql pour envoyer les donnée du fetch dans la bdd
$sql = "INSERT INTO scores (username, points, timer) VALUES ('$username', '$points', '$timer')";
$result = mysqli_query($conn, $sql);

// 4 - verification des données
if ($result) {
  echo "success";
} else {
  echo "error";
}

?>
