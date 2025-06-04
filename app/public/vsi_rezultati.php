<?php
include "db.php";

$result = $conn->query("SELECT * FROM rezervacije");
?>

<!DOCTYPE html>
<html>
  <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
  </head>
  <body>
    <h2>Vsi podatki iz baze</h2>
    <div class="mx-2 my-3">
    <table class="table table-striped">
      <thead>
    <tr>
      <th>ID</th>
      <th>Ime</th>
      <th>Email</th>
      <th>Telefon</th>
      <th>Ponudba</th>
      <th>Osebe</th>
      <th>Datum</th>
      <th>Ura</th>
    </tr>
      <thead>

      <tbody>
<?php 
while($row = $result->fetch_assoc()) {
    echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['ime']}</td>
            <td>{$row['email']}</td>
            <td>{$row['telefon']}</td>
            <td>{$row['ponudba']}</td>
            <td>{$row['osebe']}</td>
            <td>{$row['datum']}</td>
            <td>{$row['ura']}</td>
          </tr>";
}
?>
</tbody>
</table> 
</div>
