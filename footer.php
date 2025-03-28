<!-- Footer Section -->
<footer>
  <div class="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="assets/images/logo.svg" alt="">
          <h2>Lorem ipsum dolor sit amet, consectetur</h2>
        </div>
        <div class="col-md-3 ">
          <h2>company</h2>
          <ul class="footer-links">
            <li><a href="#" class="text-dark">Lorem ipsum dolor</a></li>
            <li><a href="#" class="text-dark">Lorem ipsum dolor</a></li>
            <li><a href="#" class="text-dark">Lorem ipsum dolor</a></li>
            <li><a href="#" class="text-dark">Lorem ipsum dolor</a></li>
            <li><a href="#" class="text-dark">Lorem ipsum dolor</a></li>
          </ul>



        </div>
        <div class="col-md-3 ">
          <h2>services</h2>
          <ul class="footer-links">
            <li><a href="#" class="text-dark">Lorem ipsum dolor</a></li>
            <li><a href="#" class="text-dark">Lorem ipsum dolor</a></li>
            <li><a href="#" class="text-dark">Lorem ipsum dolor</a></li>
            <li><a href="#" class="text-dark">Lorem ipsum dolor</a></li>
            <li><a href="#" class="text-dark">Lorem ipsum dolor</a></li>

          </ul>
        </div>
      </div>
    </div>
  </div>

  <div class="footer_boottom">
    <div class="container">
      <div class="row">

        <div class="col-lg-12 copyright">
          <p> &copy; 2024 GLINTWISE INDIA. All rights reserved. </p>
        </div>
      </div>
    </div>
  </div>
</footer>


<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/script.js"></script>
<!-- Custom JS -->
<script>
  // Initialize EmailJS
  (function() {
    emailjs.init("YOUR_USER_ID"); // Replace with your EmailJS user ID
  })();

  document.getElementById('contactForm').addEventListener('submit', function(event) {
    event.preventDefault();

    // Get form data
    const formData = {
      name: document.getElementById('name').value,
      email: document.getElementById('email').value,
      message: document.getElementById('message').value
    };

    // Send email using EmailJS
    emailjs.send("YOUR_SERVICE_ID", "YOUR_TEMPLATE_ID", formData) // Replace with your service ID and template ID
      .then(function(response) {
        document.getElementById('responseMessage').textContent = "Message sent successfully!";
        document.getElementById('responseMessage').style.color = "green";
        document.getElementById('contactForm').reset();
      }, function(error) {
        document.getElementById('responseMessage').textContent = "Failed to send message. Please try again.";
        document.getElementById('responseMessage').style.color = "red";
      });
  });
</script>

</body>

</html>