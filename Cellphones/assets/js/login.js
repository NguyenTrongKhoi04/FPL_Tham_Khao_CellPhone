$(document).ready(function(){
  $(".login-btn a").click(function(){
    if($('.box1').val()=='admin@gmail.com' && $('.box2').val()=='admin')
    {
    	$('.admin').attr('href','admin.html');
    }
    else
    {
    	alert("Bạn nhập sai Email và password");
    }
  });
});