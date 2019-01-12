<?php
if (isset($_POST['submit'])) {
  $id = $_POST['id'];
  $user_id = $_POST['user_id'];
  $username = $_POST['username'];
  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];
  $password = $_POST['password'];
  $password_confirmation = $_POST['password_confirmation'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $role = $_POST['role'];

  $user = new User;
  $user->edit_user($id, $user_id, $username, $nama, $alamat, $password, $phone, $email, $role);
  header("Location: dashboard.php?page=user&parent=settings");
}
?>