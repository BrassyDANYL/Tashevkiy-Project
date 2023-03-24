<?php


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];

  // перевіряємо, чи були введені ім'я та електронна адреса
  if (empty($name) || empty($email)) {
    echo 'Будь ласка, заповніть всі поля форми.';
    exit;
  }

  // відправляємо електронний лист
  $to = 'dsgames737@gmail.com'; // замініть на свою електронну адресу
  $subject = 'Нове повідомлення від відвідувача сайту';
  $message = "Ім'я: $name\nЕлектронна адреса: $email";
  $headers = "From: $email";

  if (mail($to, $subject, $message, $headers)) {
    echo 'Ваше повідомлення успішно відправлено.';
  } else {
    echo 'Сталася помилка при відправленні повідомлення. Будь ласка, спробуйте пізніше.';
  }
}
  


?>