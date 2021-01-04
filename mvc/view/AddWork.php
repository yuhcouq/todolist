
<!DOCTYPE html>
<html lang="en">
<head>
  <title>TodoList</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<?php require_once "./mvc/view/template/MenuTop.php";?>
<div class="container">
  <?php if(!isset($work)){
  ?>
<h2>Thêm công việc</h2>
<?php 
  }else{
?>
<h2>Sữa công việc</h2>
<?php
  }?>
  <p>Nhập đầy đủ thông tin để thêm công việc của bạn</p>
  <form action="/Work/AddPost" class="was-validated" method="post">
    <input type="hidden" class="form-control" id="uname" placeholder="Enter username" name="id" value="<?php if(isset($work)){ echo $work->id;}else echo 0;?>" required>
    <div class="form-group">
      <label for="uname">Tên công việc:</label>
      <input type="text" class="form-control" id="uname" placeholder="Enter username" name="name" value="<?php if(isset($work)) echo $work->name;?>" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="pwd">Ngày bắt đầu:</label>
      <input type="date" class="form-control" id="pwd" placeholder="Enter password" name="start" value="<?php if(isset($work)) echo $work->start;?>" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="uname">Ngày kết thúc:</label>
      <input type="date" class="form-control" id="uname" placeholder="Enter username" name="end" value="<?php if(isset($work)) echo $work->end;?>" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="pwd">Trạng thái:</label>
      <select name="status" value="<?php if(isset($work)) echo $work->status;?>" id="status" class="form-control">
        <option value="1">Plaining</option>
        <option value="2">Doing</option>
        <option value="3">Complete</option>
      </select>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <button type="submit" class="btn btn-primary">Thêm</button>
  </form>
</div>

</body>
</html>
