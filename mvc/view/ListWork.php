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
<style>
</style>
<div class="container">
    <?php if(isset($status)){
            if($status[1]==false){
    ?>
    <div class="alert alert-warning">
        <strong>Lỗi!</strong> Đã có lỗi xãy ra.
    </div>
    <?php
    }else{?>
    <div class="alert alert-success">
        <strong>Thành công!</strong> <?php echo $status[0]?> thành công.
    </div>
    <?php   
    }} ?>

  <div>
    <button type="button" class="btn btn-primary"><a href="<?php echo url("/Work/Add")?>" style="color:white">Thêm công việc</a></button>
  </div>
  <h2>Danh sách các công việc của bạn</h2>
  <p></p>   
  <div class="b-work">
    <table class="table table-dark table-hover work" style="">
      <thead class = "thead">
        <tr>
          <th>Name</th>
          <th>Ngày bắt đầu</th>
          <th>Ngày kết thúc</th>
          <th>Trạng thái</th>
          <th>Chức năng</th>
        </tr>
      </thead>
      <tbody  class = "tbody">
      <?php
          foreach($work as $w){
      ?>
      <tr>
          <td><?php echo $w->name?></td>
          <td><?php echo $w->start?></td>
          <td><?php echo $w->end?></td>
          <td><?php 
          if($w->status==1){
            echo "plaining";
          }elseif($w->status==2){
            echo "doing";
          }else {
            echo "complete";
          }?></td>
          <td>
              <div style="display:inline">
              <button type="button" class="btn btn-primary"><a href="<?php echo url("/Work/Update/".$w->id)?>" style="color:white">Sửa</a></button>
              </div>
              <div style="display:inline; margin-left: 30px">
              <button type="button" class="btn btn-primary"><a href="<?php echo url("/Work/Delete/".$w->id)?>" style="color:white">Xóa</a></button> 
              </div>
          </td>
        </tr>

      <?php        
          }
      ?>
          
      </tbody>
    </table>
  </div>
</div>
</body>

</html>
