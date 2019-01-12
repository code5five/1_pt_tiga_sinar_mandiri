<?php
class Role {
  function Role() {
  }

  function get_all_user() {
    include "lib/db_config.php";
    $query = "SELECT * FROM tbl_role";
    $roles = $conn->query($query);
    return $roles;
  }

  function find_user($id) {
    include "lib/db_config.php";
    $query = "SELECT * FROM tbl_user WHERE id=$id";
    $user = $conn->query($query);
    $user = $user->fetch_object();
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
                                  role='$role'
              WHERE id=$id";

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

  function login($username, $password) {
    include "lib/db_config.php";
    $query = "SELECT * FROM tbl_user WHERE username='$username' AND password='$password'";
    $users = $conn->query($query);

    if ($users->num_rows > 0) {
      $_SESSION['blue-notice'] = "Login berhasil";

      $user = $users->fetch_object();
      $_SESSION['user'] = $user;
    } else {
      $_SESSION['red-notice'] = "Login gagal";
    }
  }
}
?>