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
                echo "Add users";
              }
              if($thaotac=="update")
              {
                echo "Fix users";
              }
           ?>
      </div>

       <h3 style="margin:20px;text-align: center;">
       	<?php 
      		$a=isset($_GET["notify"])?$_GET["notify"]:"";
      		if($a=='emailExits')
      		{
      			echo "Email đã tồn tại";
      		}

       	?>
       </h3>

       <form class="formadduser" method="post" action=" <?php echo $action ?> " enctype="multipart/form-data" >
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email"
          value="<?php echo isset($record->email)?$record->email:'' ?>" 
          <?php 
          	if($_GET["action"]=="update")
          	{
          		echo "disabled";
          	}
           ?>
          >
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password"
          value="<?php echo isset($record->password)?$record->password:'' ?>" 
          >
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">First_name</label>
          <input class="form-control" placeholder="First_name" name="first_name"
          value="<?php echo isset($record->first_name)?$record->first_name:'' ?>" 
          >

        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Last_name</label>
          <input class="form-control" placeholder="Last_name" name="last_name"
          value="<?php echo isset($record->last_name)?$record->last_name:'' ?>" 
          >
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Country</label>
          <input class="form-control" placeholder="Country" name="country"
          value="<?php echo isset($record->country)?$record->country:'' ?>" 
          >
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">City</label>
          <input class="form-control" placeholder="City" name="city"
          value="<?php echo isset($record->city)?$record->city:'' ?>" 
          >
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Position</label>
            <br>
            <input type="checkbox" <?php if(isset($record->position)&&$record->position==1): ?> checked   <?php endif; ?> name="position" id="position">
            <label for="position">Admin</label>

        </div>

         <div class="form-group">
          <label for="exampleInputPassword1">Picture</label>
          <br>
          
           <?php if(isset($record->picture) && $record->picture!= "" && file_exists("../assets/upload/users/".$record->picture)): ?>
                <img src="../assets/upload/users/<?php echo $record->picture;?> " alt="" style="width: 100px; margin-top: 10px;margin-bottom: 5px;">
            <?php endif; ?>
            <br>
            <input type="file" name="picture">
        </div> 
         
        

        <button type="submit" class="btn btn-primary">

        	<?php 
        		$thaotac=isset($_GET["action"])?$_GET["action"]:0;
        		if($thaotac=="create")
        		{
        			echo "Add users";
        		}
        		if($thaotac=="update")
        		{
        			echo "Fix users";
        		}
        	 ?>

        </button>
        <a href="index.php?controller=users">
          <button type="button" class="btn btn-warning">Back</button>
        </a>
      </form>
</div>