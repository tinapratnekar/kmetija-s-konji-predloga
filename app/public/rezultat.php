
<?php
include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ime = $_POST["ime"];
    $email = $_POST["email"];
    $telefon = $_POST["telefon"];
    $ponudba = $_POST["ponudba"];
    $osebe = $_POST["osebe"];
    $datum = $_POST["datum"];
    $ura = $_POST["ura"];

    $stmt = $conn->prepare("INSERT INTO rezervacije (ime, email, telefon, ponudba, osebe, datum, ura)
                            VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssiss", $ime, $email, $telefon, $ponudba, $osebe, $datum, $ura);
    $stmt->execute();
    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="sl">
<?php include "header_style.php" ?>
<?php include "navbar.php" ?>

<div class="container mt-5">
  <h2 class="mb-4">Potrditev rezervacije</h2>

  <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
    <ul class="list-group">
      <li class="list-group-item"><strong>Ime in priimek:</strong> <?= htmlspecialchars($_POST["ime"]) ?></li>
      <li class="list-group-item"><strong>E-mail:</strong> <?= htmlspecialchars($_POST["email"]) ?></li>
      <li class="list-group-item"><strong>Telefonska številka:</strong> <?= htmlspecialchars($_POST["telefon"]) ?></li>
      <li class="list-group-item"><strong>Izbrana ponudba:</strong> <?= htmlspecialchars($_POST["ponudba"]) ?></li>
      <li class="list-group-item"><strong>Število oseb:</strong> <?= htmlspecialchars($_POST["osebe"]) ?></li>
      <li class="list-group-item"><strong>Datum rezervacije:</strong> <?= htmlspecialchars($_POST["datum"]) ?></li>
      <li class="list-group-item"><strong>Izbrana ura:</strong> <?= htmlspecialchars($_POST["ura"]) ?></li>
    </ul>
  <?php else: ?>
    <p>Podatki niso bili poslani pravilno.</p>
  <?php endif; ?>
</div>
