<?php
class Reservation {
  private $pdo; // Objet PDO
  private $stmt; // Requête SQL
  public $error; // Message d'erreur

  public function __construct() {
    $this->pdo = new PDO(
      "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=" . DB_CHARSET,
      DB_USER,
      DB_PASSWORD,
      [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_NAMED
      ]
    );
  }

  // Méthode pour insérer une réservation
  public function inserer($date, $slot, $name, $email, $tel, $notes) {
    try {
      $this->stmt = $this->pdo->prepare("
        INSERT INTO `reservations` (`res_date`, `res_slot`, `res_name`, `res_email`, `res_tel`, `res_notes`)
        VALUES (?, ?, ?, ?, ?, ?)
      ");
      $this->stmt->execute([$date, $slot, $name, $email, $tel, $notes]);
      return true;
    } catch (PDOException $e) {
      $this->error = $e->getMessage();
      return false;
    }
  }
}
?>
