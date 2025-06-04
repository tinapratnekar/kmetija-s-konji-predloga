<!DOCTYPE html>
<html lang="sl">
 
<?php include "header_style.php"?>
   
  <?php include "navbar.php"?>

  <div class="form-container">
  <h2 class="text-center mb-4">REZERVIRAJTE VAŠ TERMIN</h2>
  <form action="rezultat.php" method="POST">
    <div class="mb-3">
      <label for="ime" class="form-label">Ime in priimek:</label>
      <input type="text" class="form-control" id="ime" name="ime" required>
    </div>

    <div class="mb-3">
      <label for="email" class="form-label">E-mail:</label>
      <input type="email" class="form-control" id="email" name="email" required>
    </div>

    <div class="mb-3">
      <label for="telefon" class="form-label">Telefonska številka:</label>
      <input type="tel" class="form-control" id="telefon" name="telefon" pattern="[0-9]{3}[-\s]?[0-9]{3}[-\s]?[0-9]{3}" required>
    </div>

    <div class="mb-3">
      <label class="form-label">Tip ponudbe:</label>
      <?php
      $ponudbe = [
        "terapija" => "Konjska terapija",
        "ure" => "Jahalne ure",
        "tecaji" => "Jahalni tečaji",
        "namestitev" => "Namestitev konja in reja",
        "terensko" => "Terensko jahanje",
        "otroci" => "Program za otroke"
      ];
      foreach ($ponudbe as $id => $label) {
        echo '<div class="form-check">';
        echo '<input class="form-check-input" type="radio" name="ponudba" id="'.$id.'" value="'.$label.'" required>';
        echo '<label class="form-check-label" for="'.$id.'">'.$label.'</label>';
        echo '</div>';
      }
      ?>
    </div>

    <div class="mb-3">
      <label for="osebe" class="form-label">Število oseb:</label>
      <input type="number" class="form-control" id="osebe" name="osebe" min="1" max="10" required>
    </div>

    <div class="mb-3">
      <label for="datum" class="form-label">Datum rezervacije:</label>
      <input type="date" class="form-control" id="datum" name="datum" min="2025-04-01" max="2025-04-30" required>
    </div>

    <div class="mb-3">
      <label for="ura" class="form-label">Ura rezervacije:</label>
      <select class="form-select" id="ura" name="ura" required>
        <option selected disabled>Izberi uro</option>
        <optionv value="08:00:00">08:00 - 09:00</option>
        <option value="09:00:00">09:00 - 10:00</option>
        <option value="10:00:00">10:00 - 11:00</option>
        <option>11:00 - 12:00</option>
        <option>12:00 - 13:00</option>
        <option>13:00 - 14:00</option>
        <option>14:00 - 15:00</option>
        <option>15:00 - 16:00</option>
        <option>16:00 - 17:00</option>
        <option>17:00 - 18:00</option>
      </select>
    </div>

    <div class="text-center">
      <button type="submit" class="btn btn-submit">Pošlji</button>
    </div>
  </form>
</div>

<!-- kontakt -->
<footer id="kontakt" class="py-4">
  <div class="container d-flex justify-content-between align-items-center">
    <div>
      <h2>Kontakt</h2>
      <p class="mb-1">📞 +386 40 123 456</p>
      <p>✉️ <a href="mailto:podkev@gmail.com" class="text-decoration-underline">podkev@gmail.com</a></p>
    </div>
    <div>
      <img src="src/images/logo.png" alt="Logo">
    </div>
  </div>
</footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js">

       // Animacija fade-in ob nalaganju strani
       window.addEventListener('load', () => {
        const fadeInElements = document.querySelectorAll('.fade-in');
        fadeInElements.forEach(element => {
          element.classList.add('fade-visible');
        });
      });

      

    </script>
  </body>
</html>