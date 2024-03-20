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
                echo "Add Lap top";
              }
              if($thaotac=="update")
              {
                echo "Fix Lap top";
              }
           ?>
      </div>

       <h3 style="margin:20px;text-align: center;">
       	<?php 
      		$a=isset($_GET["notify"])?$_GET["notify"]:"";
      		if($a=='nameExits')
      		{
      			echo "Tên loại sản phẩm đã tồn tại";
      		}

       	?>
       </h3>

       <form class="formadduser" method="post" action=" <?php echo $action ?> " enctype="multipart/form-data" >
        <div class="form-group">
          <label for="exampleInputEmail1">Name Nhà sản xuất</label>

          <select name="id_nsx" style="width: 200px;" class="form-control">
                <option value="0"></option>
                <?php
                    $tensp = $this->modelListLaptop();
                 ?>
                 <?php foreach($tensp as $rows): ?>
                    <option <?php if(isset($record->id_nsx) && $record->id_nsx == $rows->id): ?> selected <?php endif; ?> value="<?php echo $rows->id; ?>"><?php echo $rows->name; ?></option>
                 <?php endforeach; ?>
            </select>


        </div>

        <div class="form-group">
          <label for="exampleInputPassword1">Danh mục cha</label>
          <select name="parent_id" style="width: 200px;" class="form-control">
              <option value="0"></option>
              <?php
                  $parent = $this->modelListParent($record->id!=null?$record->id:0);
               ?>
               <?php foreach($parent as $rows): ?>
                  <option <?php if(isset($record->parent_id) && $record->parent_id == $rows->id): ?> selected <?php endif; ?> value="<?php echo $rows->id; ?>"><?php echo $rows->nsx; ?><?php echo " - ".$rows->loaisp; ?></option>
               <?php endforeach; ?>
          </select>

        </div>

        <div class="form-group">
          <label for="exampleInputPassword1">Tên sản phẩm</label>
          <input class="form-control" placeholder="Name" name="name"
          value="<?php echo isset($record->name)?$record->name:'' ?>" 
          >

        </div>

        <div class="form-group">
          <label for="exampleInputPassword1">Mô tả sản phẩm</label>
          <br>
              <textarea name="description"> <?php echo isset($record->description)?$record->description:''; ?></textarea>
                <script type="text/javascript">
                      CKEDITOR.replace("description");
                </script>
        </div>

         <div class="form-group">
          <label for="exampleInputPassword1">Số lượng sản phẩm</label>
          <input type="number" min=0 class="form-control" placeholder="Số lượng" name="slsp"
          value="<?php echo isset($record->slsp)?$record->slsp:'' ?>" 
          >
        </div>

           <div class="form-group">
          <label for="exampleInputPassword1">Giá</label>
          <input type="number" min="0" step="0.01" class="form-control" placeholder="Giá" name="price"
          value="<?php echo isset($record->price)?$record->price:'' ?>" 
          >
        </div>

         <div class="form-group">
          <label for="exampleInputPassword1">Giảm giá (%)</label>
          <input type="number" min=0 class="form-control" placeholder="Giảm giá" name="discount"
          value="<?php echo isset($record->discount)?$record->discount:'' ?>" 
          >
        </div>
         <div class="form-group">
            <input type="checkbox" <?php if(isset($record->hot)&&$record->hot==1): ?> checked <?php endif; ?> name="hot" id="hot">
            <!-- for chạy theo id -->
            <label for="hot">Hot</label> 
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Ảnh chính</label>
          <br>
          
           <?php if(isset($record->photo) && $record->photo!= "" && file_exists("../assets/upload/phone/".$record->photo)): ?>
                <img src="../assets/upload/phone/<?php echo $record->photo;?> " alt="" style="width: 100px; margin-top: 10px;margin-bottom: 5px;">
            <?php endif; ?>
            <br>
            <input type="file" name="photo">
        </div> 
        <div class="form-group">
          <label for="exampleInputPassword1">Ảnh phụ 1</label>
          <br>
          
           <?php if(isset($record->photo1) && $record->photo1!= "" && file_exists("../assets/upload/phone/".$record->photo1)): ?>
                <img src="../assets/upload/phone/<?php echo $record->photo1;?> " alt="" style="width: 100px; margin-top: 10px;margin-bottom: 5px;">
            <?php endif; ?>
            <br>
            <input type="file" name="photo1">
        </div> 
        <div class="form-group">
          <label for="exampleInputPassword1">Ảnh phụ 2</label>
          <br>
          
           <?php if(isset($record->photo2) && $record->photo2!= "" && file_exists("../assets/upload/phone/".$record->photo2)): ?>
                <img src="../assets/upload/phone/<?php echo $record->photo2;?> " alt="" style="width: 100px; margin-top: 10px;margin-bottom: 5px;">
            <?php endif; ?>
            <br>
            <input type="file" name="photo2">
        </div> 
        <div class="form-group">
          <label for="exampleInputPassword1">Ảnh phụ 3</label>
          <br>
          
           <?php if(isset($record->photo3) && $record->photo3!= "" && file_exists("../assets/upload/phone/".$record->photo3)): ?>
                <img src="../assets/upload/phone/<?php echo $record->photo3;?> " alt="" style="width: 100px; margin-top: 10px;margin-bottom: 5px;">
            <?php endif; ?>
            <br>
            <input type="file" name="photo3">
        </div> 
        <div class="form-group">
          <label for="exampleInputPassword1">Ảnh phụ 4</label>
          <br>
          
           <?php if(isset($record->photo4) && $record->photo4!= "" && file_exists("../assets/upload/phone/".$record->photo4)): ?>
                <img src="../assets/upload/phone/<?php echo $record->photo4;?> " alt="" style="width: 100px; margin-top: 10px;margin-bottom: 5px;">
            <?php endif; ?>
            <br>
            <input type="file" name="photo4">
        </div> 


        <button type="submit" class="btn btn-primary">

        	<?php 
        		$thaotac=isset($_GET["action"])?$_GET["action"]:0;
        		if($thaotac=="create")
        		{
        			echo "Add Sản phẩm";
        		}
        		if($thaotac=="update")
        		{
        			echo "Fix Sản phẩm";
        		}
        	 ?>

        </button>
        <a href="index.php?controller=laptop">
          <button type="button" class="btn btn-warning">Back</button>
        </a>
      </form>
</div>