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
  <script>
    $(document).ready(function(){
      var time = 0;
      if(time == 0){
        var date = new Date();
        var firstDay = new Date(date.getFullYear(), date.getMonth(), 1);
        var lastDay = new Date(date.getFullYear(), date.getMonth() + 1, 0);
        var time = 0;
        
        $(".thead tr").append("<th class='fix-scroll'>Công việc</th>");
        for(i = 1;i<=lastDay.getDate();i++){
          $(".thead tr").append("<th>Ngày "+i+"</th>");
        }
        <?php
        $k = 0;
        foreach($work as $w){
        ?>
        console.log("huyhuy");
          $(".tbody").append("<tr class='tr-<?php echo $k;?>'></tr>");
          $(".tbody .tr-<?php echo $k;?>").append("<td class='fix-scroll'><?php echo $w->name;?></td>");
          for(i = 1;i<=lastDay.getDate();i++){
            var start = new Date("<?php echo $w->start?>");
            var end = new Date("<?php echo $w->end?>");
            var mili = parseInt(firstDay.getTime())+86400000*(i-1);
            var check_date = new Date(mili);
            if((check_date.getDate()>=start.getDate()) && (check_date.getDate()<=(end.getDate()))){
              $(".tbody .tr-<?php echo $k;?>").append("<td style='width:30px; background-color:#19b86e'></td>");
            }else{
              $(".tbody .tr-<?php echo $k;?>").append("<td style='width:30px; background-color:#b6b1b1'></td>");
            }
          }
        <?php
          $k++;
        }
        ?>
      }
    });
  </script>
</head>
<body>
<?php require_once "./mvc/view/template/MenuTop.php";?>
<style>
  .work{
    display: block;
    width: 100%;
    border: 1px solid black;
    overflow-x: scroll;
  }
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
    <button type="button" class="btn btn-primary"><a href="/Work/Update/Add" style="color:white">Thêm công việc</a></button>
  </div>
  <h2>Danh sách các công việc của bạn</h2>
  <p></p>   
  <div class="b-work">
    <table class="table table-dark table-hover work" style="">
      <thead class = "thead">
        <tr>
        </tr>
      </thead>
      <tbody  class = "tbody">
      </tbody>
    </table>
  </div>
</div>
</body>

</html>
