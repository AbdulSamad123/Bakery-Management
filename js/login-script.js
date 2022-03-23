// function login //
function login(username='',password='',data=''){
 var username = username;
 var password = password;
 var data = data;
 var url = '';
 var method = '';
 var thisurl = '';
 var thismethod = '';
 var type = '';
 var output = '';
 var message = '';
 url = $('.loginform').attr('action');
 method = $('.loginform').attr('method');
 thisurl = url.replace(url,'login/login.php');
 thismethod = method.replace(method,"post");
 type = 'json';
 if(username == '')
 {  
  $('.errorusername').html('please enter valid username');
 }
if(password == '')
 {  
  $('.errorpassword').html('please enter valid password');
 }
else
 {
  $.ajax({
   url:thisurl,
   method:thismethod,
   data:data,
   dataType:type,
   beforeSend:function(){
    $(".error-message-div").show();
    $(".errortxt").html("Authenticating....."); 
    $(".btnlogin").attr('disabled',true); 
   },
   success:function(response){
    output = response.output;
    message = response.message;
    setTimeout(function(){
    if(output == 1)
     {
     $(".error-message-div").hide();
     $(".success-message-div").show(); 
     $(".successtxt").html(message);
     $(".success-message-div").fadeOut(1000);  
     $(".btnlogin").attr('disabled',false);  
     }
    },500);
     setTimeout(function(){
     window.location.href = 'admin/adminDashboard.php';
    },600);
  }
  });
 }
}
// end of function login //

// start jquery function //
$(document).ready(function(){
// cal run login function //
$('body').on('click','.btnlogin',function(){
   debugger;
   var username = $('.loginform').find('.username').val();	
   var password = $('.loginform').find('.password').val();	
   var formdata = $('.loginform').serialize();
   login(username,password,formdata);
 });
// end of cal run login function //

// reset error function //
$('body').on('keyup','.username',function(){
 $('.errorusername').html('');
 });
$('body').on('keyup','.password',function(){
 $('.errorpassword').html('');
 });
// end of reset error function //
});
// end of start jquery function //