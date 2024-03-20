<?php 
  $this->layoutPath="LayoutTrangChiTiet.php";
 ?>
 <div class="loginForm">
   <form action="index.php?controller=login&action=postlogin" method="post">
      <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required name="email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required name="password">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <style>
      .loginForm{
        margin-top: 10rem;
        width: 100%;
        min-height: 25rem;
      }
      .loginForm form{
        margin: auto;
        width: 60%;
        padding: 3%;
        border-radius: 12px;
        background: white;
        box-shadow: 0 0 12px lightgray;
      }
    </style>
 </div>