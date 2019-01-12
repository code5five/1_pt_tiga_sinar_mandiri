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

  function find_user($id) {
    include "lib/db_config.php";
    $query = "SELECT * FROM tbl_user WHERE id=$id";
    $user = $conn->query($query);
    return $user;
  }

  function create_new_user($user_id, $username, $nama, $alamat, $password, $phone, $email, $role) {
    include "lib/db_config.php";
    $query = "INSERT INTO tbl_user (id, user_id, username, nama, password, phone, alamat, email, role)
              VALUES ('', '$user_id', '$username', '$nama', '$password', '$phone', '$alamat', '$email', '$role')";

    if ($conn->query($query) === TRUE) {
        $_SESSION['blue-notice'] = "Data user berhasil ditambahkan";
    } else {
        $_SESSION['red-notice'] = "Error: " . $query . " : " . $conn->error;
    }
  }

  function edit_user($id, $user_id, $username, $nama, $alamat, $password, $phone, $email, $role) {
    include "lib/db_config.php";
    $query = "UPDATE tbl_user SET user_id='$user_id',
                                  username='$username',
                                  nama='$nama',
                                  alamat='$alamat',
                                  password='$password',
                                  phone='$phone',
                                  email='$email',
                                  role='$role'";

    if ($conn->query($query) === TRUE) {
        $_SESSION['blue-notice'] = "Data user berhasil dirubah";
    } else {
        $_SESSION['red-notice'] = "Error: " . $query . " : " . $conn->error;
    }
  }

  function delete($id) {
    include "lib/db_config.php";
    $query = "DELETE FROM tbl_user WHERE id = $id";

    if ($conn->query($query) === TRUE) {
        $_SESSION['blue-notice'] = "Data user berhasil dihapus";
    } else {
        $_SESSION['red-notice'] = "Error: " . $query . " : " . $conn->error;
    }
  }
}
?>