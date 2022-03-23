<?php
include_once('session/session.php');
include_once('headerLinks.php');   
include_once('../dbconfig/dbconfig.php');
$dbconfig = new dbconfig();
if(isset($_GET['forgot_password']) == "" && isset($_GET['email']) == ""){
$forgot_password = "";
$email = "";
$this_form = "";
$this_msg = "";

}

if(isset($_GET['forgot_password']) && isset($_GET['email'])){
  $forgot_password = $_GET['forgot_password'];
  $email = $_GET['email'];
  $where = $dbconfig->where('users.Email',$email);
  $result = $dbconfig->checkcode('users',$where);
  if($result != ""){
    $this_form = '  
   <div class="login-box">  
    <div class="login-box-body" style="height: 260px">  
    <div class="login-form-div">
    <form action="{url}" method="{method}" class="log-form">
        <h2 class="text-center" style="color: #e95924 !important;">Reset Password</h2> 
        <div class="form-group has-feedback">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
              <input type="hidden" class="form-control email" name="thisemail" id="email" value='.$email.'>  
                <input type="password" class="form-control new-password" name="thispassword" id="newpassword" placeholder="New-Password">
                <span class="input-group-addon new-pass-error" style="color: red; display: none;">
                <i class="fa fa-warning"></i>
                </span> 
               <span class="input-group-addon new-pass-success" style="color: green; display: none;">
                <i class="fa fa-check"></i>
                </span>                     
            </div>
              <div class="errors-div">  
            <label class="error-new-pass"></label>
            </div>    
        </div>
                  <div class="form-group has-feedback">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                <input type="password" class="form-control confirm-password" name="confirm-password" id="confirm-password" placeholder="Confirm-Password">  
                <span class="input-group-addon cpass-error" style="color: red; display: none;">
                <i class="fa fa-warning"></i>
                </span> 
               <span class="input-group-addon cpass-success" style="color: green; display: none;">
                <i class="fa fa-check"></i>
                </span>       
            </div>
             <div class="errors-div">  
            <label class="error-confirm-password"></label>
            </div>     
        </div> 

        <div class="form-group">
            <button type="button" class="btn btn-primary btn-block btn-reset">Reset Password</button>
        </div>
    </form>
  </div>';
  }else{
   $this_form = ' <div class="row">
            <div class="col-sm-12">
              <div class="alert alert-success" role="alert"><strong class="successtxt "><h4 style="text-align:center;">Password Has Been Already Updated </h4></strong></div>
            </div>
          </div>
         </div>
        </div>
          ';
  }
    

}

?>
<!DOCTYPE html>
<html lang="en">
<title>Plot Management Reset Password</title>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
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


 <?php echo $this_form ?>

</div>
</body>
</html>
<?php include_once('footerLinks.php'); ?>

<script type="text/javascript">
	// function disable button //

    // cancel function //
 function cancel(){
    $('.error-confirm-password').html(""); 
    $('.cpass-success').hide();
    $('.cpass-error').hide();
    $('.error-new-pass').html(""); 
    $('.new-pass-success').hide();
    $('.new-pass-error').hide();
    disable_button();
 }

// end of cancel function//

function disable_button(){
    $('.btn-reset').attr('disabled',true);
}
// end of function disable button //

// function enable button //

function enable_button(){
      $('.btn-reset').attr('disabled',false);
}
// end of function button button //

$(document).ready(function(){
  disable_button();
 // check password function //  
$(".new-password").on('keyup',function(){
   var password = $(".new-password").val();
   var pattren = /(?!^[0-9]*$)(?!^[a-z]*$)(?!^[A-Z]*$)^(.{8,15})$/;
   if(password==""){
     $('.error-new-pass').html(""); 
     $('.error-confirm-password').html(""); 
     $('.cpass-success').hide();
     $('.new-pass-success').hide();
     $('.new-pass-error').hide();
     $(".btn-edit-profile").attr('disabled',false);
     $('.error-new-pass').css("color","red"); 
     disable_button();

   }else{

        if(password.length < 8){
        $('.error-new-pass').html("Password contain at least 8 characters");  
         $('.error-new-pass').css("color","red"); 
         $('.new-pass-error').show();
         $('.new-pass-success').hide(); 
        }
        else if(password.length == 8){
         $('.error-new-pass').html("Password Strength Medium"); 
         $('.error-new-pass').css("color","orange"); 
         $('.new-pass-error').hide();
         $('.new-pass-success').show();
         }  
       else if(password.length > 8){
         $('.error-new-pass').html("Password Strength Strong"); 
         $('.error-new-pass').css("color","green"); 
         $('.new-pass-error').hide();
         $('.new-pass-success').show();
         }                 

        }
});
// end of check valid password function // 

 // check confirm password function //  
$(".confirm-password").on('keyup',function(){
    var password = $(".new-password").val();
    var confirmpassword = $(".confirm-password").val();
    if(confirmpassword==""){
    $('.error-confirm-password').html(""); 
    $('.cpass-success').hide();
    $('.cpass-error').hide();
    disable_button();
   }else{  
   if(confirmpassword==password){
    $('.error-confirm-password').html("Confirm Password Matched"); 
    $('.error-confirm-password').css("color","green"); 
    $('.cpass-success').show();
    $('.cpass-error').hide();
    enable_button();
  }else{  
    $('.error-confirm-password').html("Confirm Password Not Match"); 
    $('.error-confirm-password').css("color","red"); 
    $('.cpass-error').show();
    $('.cpass-success').hide();
    disable_button();
   }
 }
});
//end of check confirm password function // 

  // save function //  
$('body').on('click','.btn-reset',function(){
  var password = $(".new-password").val();
  if(password==""){
    $('.error-email').html(" Please Enter Valid Password "); 
  }
  else{
  var url = $('form').attr("action");
  var method = $('form').attr("method");
  var thisurl = url.replace(url,"edit/edit.php");
  var thismethod = method.replace(method,"post");
  var data = $('form').serialize();
  $.ajax({
    url:thisurl,
    method:thismethod,
    data:data,
    beforeSend:function(){
      $(".error-message-div").show();
      $(".errortxt").html("Updating....."); 
      $(".btn-reset").attr('disabled',true);
    },
    success:function(abc){
      setTimeout(function(){
      $(".error-message-div").hide();   
      $('.success-message-div').show();
      $('.successtxt').html(abc);
      $('.success-message-div').fadeOut(800);
      $(".btn-reset").attr('disabled',false);
       $("form")[0].reset();
       cancel();
      },400);
      setTimeout(function(){
        window.location.href='index.php';
      },1000);
  
    }
  });
}
});
//end of save function //

});

</script>