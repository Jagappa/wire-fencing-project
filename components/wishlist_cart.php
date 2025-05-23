<?php
@include __DIR__ . '/connect.php';

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : '';

if (isset($_POST['add_to_wishlist'])) {
   if ($user_id == '') {
      header('location:user_login.php');
      exit;
   } else {
      $pid = filter_var($_POST['pid'], FILTER_SANITIZE_STRING);
      $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
      $price = filter_var($_POST['price'], FILTER_SANITIZE_STRING);
      $image = filter_var($_POST['image'], FILTER_SANITIZE_STRING);

      $check_wishlist_numbers = $conn->prepare("SELECT * FROM `wishlist` WHERE name = ? AND user_id = ?");
      $check_wishlist_numbers->execute([$name, $user_id]);

      $check_cart_numbers = $conn->prepare("SELECT * FROM `cart` WHERE name = ? AND user_id = ?");
      $check_cart_numbers->execute([$name, $user_id]);

      if ($check_wishlist_numbers->rowCount() > 0) {
         $message[] = 'already added to wishlist!';
      } elseif ($check_cart_numbers->rowCount() > 0) {
         $message[] = 'already added to cart!';
      } else {
         $insert_wishlist = $conn->prepare("INSERT INTO `wishlist`(user_id, pid, name, price, image) VALUES(?,?,?,?,?)");
         $insert_wishlist->execute([$user_id, $pid, $name, $price, $image]);
         $message[] = 'added to wishlist!';
      }
   }
}

if (isset($_POST['add_to_cart'])) {
   if ($user_id == '') {
      header('location:user_login.php');
      exit;
   } else {
      $pid = filter_var($_POST['pid'], FILTER_SANITIZE_STRING);
      $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
      $price = filter_var($_POST['price'], FILTER_SANITIZE_STRING);
      $image = filter_var($_POST['image'], FILTER_SANITIZE_STRING);
      $qty = filter_var($_POST['qty'], FILTER_SANITIZE_STRING);

      $check_cart_numbers = $conn->prepare("SELECT * FROM `cart` WHERE name = ? AND user_id = ?");
      $check_cart_numbers->execute([$name, $user_id]);

      if ($check_cart_numbers->rowCount() > 0) {
         $message[] = 'already added to cart!';
      } else {
         $check_wishlist_numbers = $conn->prepare("SELECT * FROM `wishlist` WHERE name = ? AND user_id = ?");
         $check_wishlist_numbers->execute([$name, $user_id]);

         if ($check_wishlist_numbers->rowCount() > 0) {
            $delete_wishlist = $conn->prepare("DELETE FROM `wishlist` WHERE name = ? AND user_id = ?");
            $delete_wishlist->execute([$name, $user_id]);
         }

         $insert_cart = $conn->prepare("INSERT INTO `cart`(user_id, pid, name, price, quantity, image) VALUES(?,?,?,?,?,?)");
         $insert_cart->execute([$user_id, $pid, $name, $price, $qty, $image]);
         $message[] = 'added to cart!';
      }
   }
}
?>
