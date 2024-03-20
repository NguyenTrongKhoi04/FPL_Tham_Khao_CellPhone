<!-- load file layout chung -->
<?php 
	$this->layoutPath="Layout.php";
 ?>
<link rel="stylesheet" type="text/css" href="../assets/css/form.css">
<div class="main-content">
      <div class="list">
          <i class="fas fa-bars"></i>
            Thông tin chi tiết
      </div>
       <form class="formadduser" method="post" action="
       <?php if($thaotac=='create'): ?>
       index.php?controller=loaisp&action=postDetailCreate&id=<?php echo $_GET['id'] ?>
       <?php else: ?>
        index.php?controller=loaisp&action=postDetailUpdate&id=<?php echo $_GET['id'] ?>
      <?php endif; ?>
       " enctype="multipart/form-data" >
        <div class="form-group">
          <label for="exampleInputEmail1">Name Nhà sản xuất</label>
          <select name="id_nsx" style="width: 200px;" class="form-control">
                <option value="0"></option>
                <?php
                    $tensp = $this->modelListLoaisp();
                 ?>
                 <?php foreach($tensp as $rows): ?>
                    <option <?php if(isset($record->id_nsx) && $record->id_nsx == $rows->id): ?> selected <?php endif; ?> value="<?php echo $rows->name; ?>"><?php echo $rows->name; ?></option>
                 <?php endforeach; ?>
            </select>


        </div>

         <div class="form-group">
          <label for="exampleInputkidchthuoc">Kích thước</label>
          <input id="exampleInputkidchthuoc" class="form-control" placeholder="Kích thước" name="kichthuoc"
          value="<?php echo isset($result->kichthuoc)?$result->kichthuoc:'' ?>" 
          >
        </div>

        <div class="form-group">
          <label for="exampleInputtrongluong">Trọng lượng</label>
          <input id="exampleInputtrongluong" class="form-control" placeholder="Trọng lượng" name="trongluong"
          value="<?php echo isset($result->trongluong)?$result->trongluong:'' ?>" 
          >

        </div>

        <div class="form-group">
          <label for="exampleInputram">Ram</label>
          <input id="exampleInputram" class="form-control" placeholder="Ram" name="ram"
          value="<?php echo isset($result->ram)?$result->ram:'' ?>" 
          >
        </div>

        <div class="form-group">
          <label for="exampleInputrom">Rom</label>
          <input id="exampleInputrom" class="form-control" placeholder="Rom" name="rom"
          value="<?php echo isset($result->rom)?$result->rom:'' ?>" 
          >
        </div>
         <div class="form-group">
          <label for="exampleInputhdh">Hệ điều hành</label>
          <input id="exampleInputhdh" class="form-control" placeholder="Hệ điều hành" name="hedieuhanh"
          value="<?php echo isset($result->hedieuhanh)?$result->hedieuhanh:'' ?>" 
          >
        </div>
        <div class="form-group">
          <label for="exampleInputloaiman">Loại màn hình</label>
          <input  id="exampleInputloaiman" class="form-control" placeholder="Loại màn hình" name="loaiman"
          value="<?php echo isset($result->loaiman)?$result->loaiman:'' ?>" 
          >
        </div>
        <div class="form-group">
          <label for="exampleInputktm">Kích thước màn</label>
          <input id="exampleInputktm" class="form-control" placeholder="Kích thước màn" name="kichthuocman" type="number" min=0 step=0.1
          value="<?php echo isset($result->kichthuocman)?$result->kichthuocman:'' ?>" 
          >
        </div>
        <div class="form-group">
          <label for="exampleInputdpg">Độ phân giải</label>
          <input id="exampleInputdpg" class="form-control" placeholder="Độ phân giải" name="dophangiai"
          value="<?php echo isset($result->dophangiai)?$result->dophangiai:'' ?>" 
          >
        </div>
        <div class="form-group">
          <label for="exampleInputsosim">Số sim</label>
          <input id="exampleInputsosim" class="form-control" placeholder="Số sim" name="sosim"
          value="<?php echo isset($result->sosim)?$result->sosim:'' ?>" 
          >
        </div>
        <button type="submit" class="btn btn-primary">
          Cập nhật
        </button>
        <a href="index.php?controller=loaisp">
          <button type="button" class="btn btn-warning">Back</button>
        </a>
      </form>
</div>