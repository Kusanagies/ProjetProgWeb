<?php
include 'reserve.php'; // Inclure la classe

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $reservation = new Reservation();
  $date = $_POST['date'];
  $slot = $_POST['slot'];
  $name = $_POST['name'];
  $email = $_POST['email'];
  $tel = $_POST['tel'];
  $notes = $_POST['notes'];

  if ($reservation->inserer($date, $slot, $name, $email, $tel, $notes)) {
    // Rediriger vers une page de confirmation
    header('location: confirmation.php');
    exit;
  } else {
    //rajouter des erreurs selon la date 
    echo "Erreur lors de l'insertion de la réservation : " . $reservation->error;
  }
}
?>
