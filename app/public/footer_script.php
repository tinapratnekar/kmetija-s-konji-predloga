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

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
<script>
  // Prikaz gumba, ko uporabnik skrola dol
  window.onscroll = function() {
    toggleScrollButton();
  };

  function toggleScrollButton() {
    const scrollBtn = document.getElementById("scrollBtn");
    if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
      scrollBtn.style.display = "block";
    } else {
      scrollBtn.style.display = "none";
    }
  }

  // Scroll na vrh strani
  function scrollToTop() {
    window.scrollTo({
      top: 0,
      behavior: "smooth"
    });
  }

    // Funkcija za animacijo fade-in ob dosegu elementa
    const fadeInElements = document.querySelectorAll('.fade-in');

const observer = new IntersectionObserver((entries, observer) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('fade-visible');
      observer.unobserve(entry.target);
    }
  });
}, { threshold: 0.1 });

fadeInElements.forEach(element => {
  observer.observe(element);
});
</script>

<button onclick="scrollToTop()" id="scrollBtn" title="Na vrh">Na vrh</button>