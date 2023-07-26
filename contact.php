<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Contact</title>
  <style>
    /* Estilos CSS como se mostró en la respuesta anterior */
  </style>
</head>
<body>
  <header>
    <h1>Contact</h1>
  </header>
  <main>
    <p>If you would like to contact me, please use the form below.</p>
    <form action="contact.php" method="post">
      <input type="name" name="name" placeholder="Your name">
      <input type="email" name="email" placeholder="Your email">
      <textarea name="message" placeholder="Your message"></textarea>
      <input type="submit" name="submit" value="Submit">
    </form>
  </main>
  <footer>
    <p>Copyright &copy; 2023 My Portfolio</p>
  </footer>
</body>
</html>

<?php
if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $to = 'gonzalo.diamend@gmail.com'; // Reemplaza esta dirección de correo electrónico con tu dirección de correo personal
  $subject = 'Mensaje de contacto desde el sitio web';
  $headers = "From: $email" . "\r\n" .
             "Reply-To: $email" . "\r\n" .
             "X-Mailer: PHP/" . phpversion();

  mail($to, $subject, $message, $headers);

  // Redireccionar a una página de agradecimiento
  header('Location: thankyoupage.html');
  exit();
}
?>