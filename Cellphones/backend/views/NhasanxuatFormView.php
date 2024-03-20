<!-- load file layout chung -->
<?php 
	$this->layoutPath="Layout.php";
 ?>
<link rel="stylesheet" type="text/css" href="../assets/css/form.css">
 <div class="main-content">
      <div class="list">
          <i class="fas fa-bars"></i>
            <?php 
              $thaotac=isset($_GET["action"])?$_GET["action"]:0;
              if($thaotac=="create")
              {
                echo "Add Nhà sản xuất";
              }
              if($thaotac=="update")
              {
                echo "Fix Nhà sản xuất";
              }
           ?>
      </div>

       <h3 style="margin:20px;text-align: center;">
       	<?php 
      		$a=isset($_GET["notify"])?$_GET["notify"]:"";
      		if($a=='nameExits')
      		{
      			echo "Nhà sản xuất đã tồn tại";
      		}

       	?>
       </h3>

       <form class="formadduser" method="post" action=" <?php echo $action ?> " enctype="multipart/form-data" >
        <div class="form-group">
          <label for="exampleInputEmail1">Name Nhà sản xuất</label>
          <input class="form-control" placeholder="Enter name" name="name"
          value="<?php echo isset($record->name)?$record->name:'' ?>">
        </div>

        <div class="form-group">
          <label for="exampleInputPassword1">Address</label>
          <input class="form-control" id="exampleInputPassword1" placeholder="Address" name="address"
          value="<?php echo isset($record->address)?$record->address:'' ?>" 
          >
        </div>

        <div class="form-group">
          <label for="exampleInputPassword1">Liên lạc</label>
          <input class="form-control" placeholder="Contact" name="contact"
          value="<?php echo isset($record->contact)?$record->contact:'' ?>" 
          >

        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Số lượng</label>
          <input type="number" min="0" class="form-control" placeholder="Số lượng" name="soluong"
          value="<?php echo isset($record->soluong)?$record->soluong:'' ?>" 
          >
        </div>
        
        <div class="form-group">
            <input type="checkbox" <?php if(isset($record->hot)&&$record->hot==1): ?> checked <?php endif; ?> name="hot" id="hot">
            <!-- for chạy theo id -->
            <label for="hot">Hot</label> 
        </div>

        <button type="submit" class="btn btn-primary">

        	<?php 
        		$thaotac=isset($_GET["action"])?$_GET["action"]:0;
        		if($thaotac=="create")
        		{
        			echo "Add Nhà sản xuất";
        		}
        		if($thaotac=="update")
        		{
        			echo "Fix Nhà sản xuất";
        		}
        	 ?>

        </button>
        <a href="index.php?controller=nhasanxuat">
          <button type="button" class="btn btn-warning">Back</button>
        </a>
      </form>
</div>