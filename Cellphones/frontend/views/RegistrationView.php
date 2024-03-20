<?php 
  $this->layoutPath="LayoutTrangChiTiet.php";
 ?>
<?php if(isset($mes) && $mes=='ok'): ?>
  <script type="text/javascript">
    alert('Đăng kí thành công');
  </script>
<?php endif; ?>
<div class="Registration">
    <form class="formadduser" method="post" action="index.php?controller=login&action=postRegistration" enctype="multipart/form-data" >
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" required="" 
         >
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" required="" 
          >
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Phone</label>
          <input class="form-control" placeholder="Phone" name="phone" required="" 
          >
        <div class="form-group">
          <label for="exampleInputPassword1">First_name</label>
          <input class="form-control" placeholder="First_name" name="first_name" required="" 
          >
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Last_name</label>
          <input class="form-control" placeholder="Last_name" name="last_name" required="" 
          >
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Country</label>
          <input class="form-control" placeholder="Country" name="country" required="" 
          
          >
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">City</label>
          <input class="form-control" placeholder="City" name="city" required="" 
          >
        </div>
         <div class="form-group">
          <label for="exampleInputPassword1">Picture</label>
            <br>
            <input type="file" name="picture">
        </div> 
        <button type="submit" class="btn btn-primary">
            Đăng kí
        </button>
        <a href="index.php">
          <button type="button" class="btn btn-warning">Back</button>
        </a>
      </form>
    <style>
      .Registration{
        margin-top: 5rem;
        width: 100%;
        min-height: 25rem;
      }
      .Registration form{
        margin: auto;
        width: 60%;
        padding: 3%;
        border-radius: 12px;
        background: white;
        box-shadow: 0 0 12px lightgray;
      }
    </style>
</div>