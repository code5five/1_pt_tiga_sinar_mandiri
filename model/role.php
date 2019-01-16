<?php
class Role {
  function Role() {
  }

  function get_all_role() {
    include "lib/db_config.php";
    $query = "SELECT * FROM tbl_role";
    $roles = $conn->query($query);
    return $roles;
  }

  function find_role($id) {
    include "lib/db_config.php";
    $query = "SELECT * FROM tbl_role WHERE id=$id";
    $role = $conn->query($query);
    $role = $role->fetch_object();
    return $role;
  }

  function create_new_role($role, $aksi, $status) {
    include "lib/db_config.php";
    $query = "INSERT INTO tbl_role (id, role, aksi, status)
              VALUES ('', '$role', '$aksi', $status)";

    if ($conn->query($query) === TRUE) {
        $_SESSION['blue-notice'] = "Data role berhasil ditambahkan";
    } else {
        $_SESSION['red-notice'] = "Error: " . $query . " : " . $conn->error;
    }
  }

  function edit_user($id, $role, $aksi, $status) {
    include "lib/db_config.php";
    $query = "UPDATE tbl_user SET role='$role',
                                  aksi='$aksi',
                                  status='$status'
              WHERE id=$id";

    if ($conn->query($query) === TRUE) {
        $_SESSION['blue-notice'] = "Data role berhasil dirubah";
    } else {
        $_SESSION['red-notice'] = "Error: " . $query . " : " . $conn->error;
    }
  }

  function delete($id) {
    include "lib/db_config.php";
    $query = "DELETE FROM tbl_role WHERE id = $id";

    if ($conn->query($query) === TRUE) {
        $_SESSION['blue-notice'] = "Data role berhasil dihapus";
    } else {
        $_SESSION['red-notice'] = "Error: " . $query . " : " . $conn->error;
    }
  }
}
?>