<?php
class User {
  function User() {
  }

  function get_all_user() {
    include "lib/db_config.php";
    $query = "SELECT * FROM tbl_user";
    $users = $conn->query($query);
    return $users;
  }

  function create_new_user($user_id, $username, $nama, $alamat, $password, $password_confirmation, $phone, $email, $role) {
    include "lib/db_config.php";
    $query = "INSERT INTO tbl_user (id, user_id, username, nama, password, phone, alamat, email, role)
              VALUES ('', '$user_id', '$username', '$nama', '$password', '$phone', '$alamat', '$email', '$role')";

    if ($conn->query($query) === TRUE) {
        // echo "New record created successfully";
    } else {
        // echo "Error: " . $query . "<br>" . $conn->error;
    }
  }
}
?>