

<div class="container">   
  <h2 class="text-center bg-light text-success">Sửa loại</h2> 
    <?php
          if (isset($_GET['ma_loai'])) {
            $ma_loai=$_GET['ma_loai'];
            $info_loai=loai_select_by_id($ma_loai);
            extract($info_loai);
          
    ?>                  
  <form action="" method="post" enctype="multipart/form-data" >
    <div class="form-group">
        <label >Mã loại:</label>
        <input type="text" class="form-control" name="ma_loai" value="<?php echo $ma_loai ?>" readonly>
        <label >Tên loại:</label>
        <input type="text" class="form-control" name="ten_loai" value="<?php echo $ten_loai ?>"  required>
    </div>
    <button type="submit" class="btn btn-primary" name="btn_update">Sửa</button>
  </form>
  <?php }else{
    echo"ma loai khong ton tai";
  }?>
</div>