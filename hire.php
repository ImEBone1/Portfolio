<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Md Ebrahim Sk | About</title>
    <link rel="stylesheet" href="style.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

<?php include "header.php"; ?>

<!-- CONTACT -->
<!-- CONTACT PAGE -->
<section class="contact-page" id="hire">

<h2>Hire Me / Contact</h2>


<!-- SUCCESS / ERROR MESSAGE -->
<?php
if(isset($_GET['success'])){
  echo "<p class='msg success'>✅ Message Sent Successfully!</p>";
}

if(isset($_GET['error'])){
  echo "<p class='msg error'>❌ Error! Try Again.</p>";
}
?>


<div class="contact-grid">


  <!-- LEFT INFO -->
  <div class="contact-info">

    <h3>Get In Touch</h3>

    <p>
      Feel free to contact me for projects, internships,
      freelance work, or collaboration.
    </p>

    <div class="info-item">
      <i class="fa fa-envelope"></i>
      <span>skebrahim712@gmail.com</span>
    </div>

    <div class="info-item">
      <i class="fa fa-phone"></i>
      <span>+91-XXXXXXXXXX</span>
    </div>

    <div class="info-item">
      <i class="fa fa-map-marker"></i>
      <span>West Bengal, India</span>
    </div>


    <!-- SOCIAL LINKS -->
    <div class="social-links">

      <a href="#" title="GitHub"><i class="fa fa-github"></i></a>
      <a href="#" title="LinkedIn"><i class="fa fa-linkedin"></i></a>
      <a href="#" title="Instagram"><i class="fa fa-instagram"></i></a>
      <a href="#" title="Twitter"><i class="fa fa-twitter"></i></a>

    </div>

  </div>


  <!-- RIGHT FORM -->
  <div class="contact-form">

    <h3>Send Me a Message</h3>

    <form action="contact.php" method="POST">

      <input type="text" name="name" placeholder="Your Name" required>

      <input type="email" name="email" placeholder="Your Email" required>

      <textarea name="message" placeholder="Your Message" required></textarea>

      <button type="submit" class="btn">Send Message</button>

    </form>

  </div>

</div>


<!-- MAP (OPTIONAL) -->
<div class="contact-map">

<iframe
src="https://www.google.com/maps?q=West%20Bengal%20India&output=embed"
loading="lazy">
</iframe>

</div>


</section>

<?php include "footer.php"; ?>

<script src="script.js"></script>

</body>
</html>