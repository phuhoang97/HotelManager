<?php
include 'header.php';
if (!empty($_SESSION['current_user'])) {
    ?>
<!-- Dashboard hình ảnh -->
<h3>Hình ảnh</h3>
<div class="row">
  <?php
 
  if ($data_user['position'] == '1') {
    // Lấy tổng số hình ảnh
    $sql_get_count_img = "SELECT id_img FROM images";
    $label = 'tổng hình ảnh';
  } else {
    // Lấy số hình ảnh của tác giả
    $sql_get_count_img = "SELECT id_img FROM images WHERE uploader_id = '$data_user[id_acc]'";
    $label = 'hình ảnh';
  }
 
  $count_img = $db->num_rows($sql_get_count_img);
 
  echo
  '
    <div class="col-md-4">
      <div class="alert alert-info">
        <h1>' . $count_img . '</h1>
        <p>' . $label . '</p>
      </div>
    </div>
  ';
 
  ?>
   
  <?php
 
  if ($data_user['position'] == '1') {
    // Lấy tổng dung lượng ảnh
    $sql_get_size_img = "SELECT size FROM images";
    $label = 'tổng dung lượng ảnh';
  } else {
    // Lấy số dung lượng ảnh của tác giả
    $sql_get_size_img = "SELECT size FROM images WHERE uploader_id = '$data_user[id_acc]'";
    $label = 'dung lượng ảnh';
  }
 
  // Tính dung lượng hình ảnh
  if ($db->num_rows($sql_get_size_img)) {
    $count_size_img = 0;
    foreach ($db->fetch_assoc($sql_get_size_img, 0) as $data_img) {
      $count_size_img = $count_size_img + $data_img['size'];
    }
  } else {
    $count_size_img = 0 . ' B';
  }
 
  // Gán đơn vị cho dung lượng
  if ($count_size_img < 1024) {
    $count_size_img = $count_size_img . ' B';
  } else if ($count_size_img < 1048576) {
    $count_size_img = round($count_size_img / 1024) . ' KB';
  } else if ($count_size_img < 1073741824) {
    $count_size_img = round($count_size_img / 1024 / 1024) . ' MB';
  } else if ($count_size_img < 1099511627776) {
    $count_size_img = round($count_size_img / 1024 / 1024 / 1024) . ' GB';
  }
 
  echo
  '
    <div class="col-md-4">
      <div class="alert alert-success">
        <h1>' . $count_size_img . '</h1>
        <p>' . $label . '</p>
      </div>
    </div>
  ';
 
  ?>
 
  <?php
 
  if ($data_user['position'] == '1') {
    // Lấy tổng số hình ảnh
    $sql_get_count_img = "SELECT url FROM images";
    $label = 'tổng hình ảnh lỗi';
  } else {
    // Lấy số bài viết của tác giả
    $sql_get_count_img = "SELECT url FROM images WHERE uploader_id = '$data_user[id_acc]'";
    $label = 'hình ảnh lỗi';
  }
 
  // Kiểm tra danh sách hình ảnh
  if ($db->num_rows($sql_get_count_img)) {
    $count_img_error = 0;
    foreach ($db->fetch_assoc($sql_get_count_img, 0) as $data_img) {
      if (!file_exists('../' . $data_img['url'])) {
        $count_img_error++;
      }
    }
  }
 
  echo
  '
    <div class="col-md-4">
      <div class="alert alert-danger">
        <h1>' . $count_img_error . '</h1>
        <p>' . $label . '</p>
      </div>
    </div>
  ';
 
  ?>
</div>