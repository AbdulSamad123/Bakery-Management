<?php
include_once('session/session.php');
include_once('mainlinks/main-links.php');   
include_once('../dbconfig/dbconfig.php');
$dbconfig = new dbconfig();
?>

<!DOCTYPE html>
<html lang="en">
<title>Plot Management Forgot Password</title>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>

<style type="text/css">
  a#link {
    color: #3c8dbc;
    font-size: 13px;
}
</style>
<body  class="hold-transition login-page">
    <div id="content" class="container-fluid">
               <div class="row success-message-div">
            <div class="col-sm-12">
              <div class="alert alert-success" role="alert"><strong class="successtxt "></strong></div>
            </div>
          </div>

            <div class="row error-message-div">
            <div class="col-sm-12">
              <div class="alert alert-danger" role="alert"><strong class="errortxt"></strong><strong><span id="timer" class="timer"> </span></strong></div>
            </div>
          </div>

<div class="login-box">  
            <div class="login-logo">
 <div class="login-box-body" style="height: 240px">
   <div class="login-form-div">
    <form action="{url}" method="{method}" class="log-form">
        <h2 class="text-center" style="color: #e95924 !important;">Forgot Password</h2> 
        <div class="email-form">


        <div class="form-group has-feedback">
          <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="email" id="login-email" class="form-control email" name="email" placeholder="Email">
                <span class="input-group-addon email-error" style="color: red; display: none;">
                <i class="fa fa-warning"></i>
                </span> 
               <span class="input-group-addon email-success" style="color: green; display: none;">
                <i class="fa fa-check"></i>
                </span>          
            </div>
              <div class="login-error">  
            <label class="error-email"></label>
            </div>  
        </div>       
        <div class="form-group">
            <button type="button" class="btn btn-primary btn-block btn-send">Send</button>
        </div>

        <div class="row">
          <div class="col-sm-6">
            <div class="form-group">
        <div class="clearfix">
          <a href="index.php" id="link"> <i class="fa fa-arrow-left"></i>  Back To  Main Page </a>
        </div>

            </div>
          </div>
        </div>


    </form>
  </div>
</div>
  </div>      


</div>

</div>
</body>
</html>

<script type="text/javascript">
	
$(document).ready(function(){
  // check email function //  
$('.email').on('keyup',function(){
  var user_email = $(".email").val();
  var reg = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
   if(user_email==""){
    $('.error-email').html(""); 
    $('.email-success').hide();
    $('.email-error').hide();
    $(".btn-send").attr('disabled',false);
   }else{
  if(!reg.test(user_email)){
    $('.error-email').html("Invalid Email"); 
    $('.error-email').css("color","red");
    $('.email-error').show();
    $('.email-success').hide();
    $(".btn-send").attr('disabled',true);
  }else{
     var url = $('form').attr("action");
  var method = $('form').attr("method");
  var thisurl = url.replace(url,"email/check-user-email.php");
  var thismethod = method.replace(method,"post");
  $.ajax({
    url:thisurl,
    method:thismethod,
    data:{user_email : user_email},
    dataType:"text",
    success:function(x){
    if(x==0){
     $('.error-email').html(""); 
     $('.email-error').hide();
     $(".btn-send").attr('disabled',false);
    }else{
     $('.error-email').html("Email Not Found");  
     $('.email-error').show();
     $(".btn-send").attr('disabled',true); 
    }
    }
  });

  }
}
});
//end of check email function // 

  // save function //  
$('body').on('click','.btn-send',function(){
  var email = $(".email").val();
  if(email==""){
    $('.error-email').html(" Please Enter Valid Email "); 
  }
  else{
  var url = $('form').attr("action");
  var method = $('form').attr("method");
  var thisurl = url.replace(url,"email/send-code.php");
  var thismethod = method.replace(method,"post");
  var data = $('form').serialize();
  $.ajax({
    url:thisurl,
    method:thismethod,
    data:data,
    beforeSend:function(){
      $(".error-message-div").show();
      $(".errortxt").html("Sending....."); 
      $(".btn-send").attr('disabled',true);
    },
    success:function(abc){
      setTimeout(function(){
      $(".error-message-div").hide();   
      $('.success-message-div').show();
      $('.successtxt').html(abc);
      $('.success-message-div').fadeOut(800);
      $(".btn-send").attr('disabled',false);
       $("form")[0].reset();
      },400);
     
    }
  });
}
});
//end of save function //

});

</script>