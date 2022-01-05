<?php
if (isset($_GET['url'])) {
  $url = $_GET['url'];
}else {
  $url = "";
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../assets/css/lockscreen.css?1.2.5" />
    <link rel="stylesheet" href="../assets/css/assets.app.css" />
      <script src="../assets/js/main.app.js"></script>
      <script>
         function hoverdiv(e,divid){
var left_p  = e.clientX  + "px";
var top_p  = e.clientY  + "px";

var div = document.getElementById(divid);

div.style.left = left_p;
div.style.top = top_p;
$("#"+divid).toggle();

return false;
}
      </script>
    <title>lockscreen</title>
  </head>
  <body>

    <div class="lockscreen-container" id="lockscreen-container">
      <img
        class="background"
        src="../assets/images/DesktopIcon/sky.jpg"
      />
      <!--Start modify-->
      <div class="date">
         <p id="time_span"></p><br>
         <p id="date_span"></p>
      </div>
      <div class="swiper" id="swiper">
        <p class="swipe_caption">Swipe Here Right To Unlock---></p>
        <input type="range" min="1" max="50" value="1" class="slider" id="lockRange">
      </div>
      <!--End modify-->
      <div class="circle-container">
        <div class="circle"></div>
      </div>
      <div class="circle-container">
        <div class="circle"></div>
      </div>
      <div class="circle-container">
        <div class="circle"></div>
      </div>
      <div class="circle-container">
        <div class="circle"></div>
      </div>
      <div class="circle-container">
        <div class="circle"></div>
      </div>
      <div class="circle-container">
        <div class="circle"></div>
      </div>
      <div class="circle-container">
        <div class="circle"></div>
      </div>
      <div class="circle-container">
        <div class="circle"></div>
      </div>
      <div class="circle-container">
        <div class="circle"></div>
      </div>
      <div class="circle-container">
        <div class="circle"></div>
      </div>
      <div class="circle-container">
        <div class="circle"></div>
      </div>
      <div class="circle-container">
        <div class="circle"></div>
      </div>
      <div class="circle-container">
        <div class="circle"></div>
      </div>
      <div class="circle-container">
        <div class="circle"></div>
      </div>
      <div class="circle-container">
        <div class="circle"></div>
      </div>
      <div class="circle-container">
        <div class="circle"></div>
      </div>
      <div class="circle-container">
        <div class="circle"></div>
      </div>
      <div class="circle-container">
        <div class="circle"></div>
      </div>
      <div class="circle-container">
        <div class="circle"></div>
      </div>
      <div class="circle-container">
        <div class="circle"></div>
      </div>
      <div class="circle-container">
        <div class="circle"></div>
      </div>
      <div class="circle-container">
        <div class="circle"></div>
      </div>
      <div class="circle-container">
        <div class="circle"></div>
      </div>
      <div class="circle-container">
        <div class="circle"></div>
      </div>
      <div class="circle-container">
        <div class="circle"></div>
      </div>
      <div class="circle-container">
        <div class="circle"></div>
      </div>
      <div class="circle-container">
        <div class="circle"></div>
      </div>
      <div class="circle-container">
        <div class="circle"></div>
      </div>
      <div class="circle-container">
        <div class="circle"></div>
      </div>
      <div class="circle-container">
        <div class="circle"></div>
      </div>
      <div class="circle-container">
        <div class="circle"></div>
      </div>
      <div class="circle-container">
        <div class="circle"></div>
      </div>
      <div class="circle-container">
        <div class="circle"></div>
      </div>
      <div class="circle-container">
        <div class="circle"></div>
      </div>
      <div class="circle-container">
        <div class="circle"></div>
      </div>
      <div class="circle-container">
        <div class="circle"></div>
      </div>
      <div class="circle-container">
        <div class="circle"></div>
      </div>
      <div class="circle-container">
        <div class="circle"></div>
      </div>
      <div class="circle-container">
        <div class="circle"></div>
      </div>
      <div class="circle-container">
        <div class="circle"></div>
      </div>
      <div class="circle-container">
        <div class="circle"></div>
      </div>
      <div class="circle-container">
        <div class="circle"></div>
      </div>
      <div class="circle-container">
        <div class="circle"></div>
      </div>
      <div class="circle-container">
        <div class="circle"></div>
      </div>
      <div class="circle-container">
        <div class="circle"></div>
      </div>
      <div class="circle-container">
        <div class="circle"></div>
      </div>
      <div class="circle-container">
        <div class="circle"></div>
      </div>
      <div class="circle-container">
        <div class="circle"></div>
      </div>
      <div class="circle-container">
        <div class="circle"></div>
      </div>
      <div class="circle-container">
        <div class="circle"></div>
      </div>
      <div class="circle-container">
        <div class="circle"></div>
      </div>
      <div class="circle-container">
        <div class="circle"></div>
      </div>
      <div class="circle-container">
        <div class="circle"></div>
      </div>
      <div class="circle-container">
        <div class="circle"></div>
      </div>
      <div class="circle-container">
        <div class="circle"></div>
      </div>
      <div class="circle-container">
        <div class="circle"></div>
      </div>
      <div class="circle-container">
        <div class="circle"></div>
      </div>
      <div class="circle-container">
        <div class="circle"></div>
      </div>
      <div class="circle-container">
        <div class="circle"></div>
      </div>
      <div class="circle-container">
        <div class="circle"></div>
      </div>
      <div class="circle-container">
        <div class="circle"></div>
      </div>
      <div class="circle-container">
        <div class="circle"></div>
      </div>
      <div class="circle-container">
        <div class="circle"></div>
      </div>
      <div class="circle-container">
        <div class="circle"></div>
      </div>
      <div class="circle-container">
        <div class="circle"></div>
      </div>
      <div class="circle-container">
        <div class="circle"></div>
      </div>
      <div class="circle-container">
        <div class="circle"></div>
      </div>
      <div class="circle-container">
        <div class="circle"></div>
      </div>
      <div class="circle-container">
        <div class="circle"></div>
      </div>
      <div class="circle-container">
        <div class="circle"></div>
      </div>
      <div class="circle-container">
        <div class="circle"></div>
      </div>
      <div class="circle-container">
        <div class="circle"></div>
      </div>
      <div class="circle-container">
        <div class="circle"></div>
      </div>
      <div class="circle-container">
        <div class="circle"></div>
      </div>
      <div class="circle-container">
        <div class="circle"></div>
      </div>
      <div class="circle-container">
        <div class="circle"></div>
      </div>
      <div class="circle-container">
        <div class="circle"></div>
      </div>
      <div class="circle-container">
        <div class="circle"></div>
      </div>
      <div class="circle-container">
        <div class="circle"></div>
      </div>
      <div class="circle-container">
        <div class="circle"></div>
      </div>
      <div class="circle-container">
        <div class="circle"></div>
      </div>
      <div class="circle-container">
        <div class="circle"></div>
      </div>
      <div class="circle-container">
        <div class="circle"></div>
      </div>
      <div class="circle-container">
        <div class="circle"></div>
      </div>
      <div class="circle-container">
        <div class="circle"></div>
      </div>
      <div class="circle-container">
        <div class="circle"></div>
      </div>
      <div class="circle-container">
        <div class="circle"></div>
      </div>
      <div class="circle-container">
        <div class="circle"></div>
      </div>
      <div class="circle-container">
        <div class="circle"></div>
      </div>
      <div class="circle-container">
        <div class="circle"></div>
      </div>
      <div class="circle-container">
        <div class="circle"></div>
      </div>
      <div class="circle-container">
        <div class="circle"></div>
      </div>
      <div class="circle-container">
        <div class="circle"></div>
      </div>
      <div class="circle-container">
        <div class="circle"></div>
      </div>
      <div class="circle-container">
        <div class="circle"></div>
      </div>
      <div class="circle-container">
        <div class="circle"></div>
      </div>
      <div class="circle-container">
        <div class="circle"></div>
      </div>
      <div class="circle-container">
        <div class="circle"></div>
      </div>
      <div class="circle-container">
        <div class="circle"></div>
      </div>
      <div class="circle-container">
        <div class="circle"></div>
      </div>
    </div>
    
    <div class="login_container display-none" onmouseover="hoverdiv(event,'divtoshow')" onmouseout="hoverdiv(event,'divtoshow')" id="login_cont">
             
    <div id="divtoshow" style="position: fixed;cursor:none; display:none; z-index:1;">Pushpendra Group</div>
             <div class="container">
              <div class="login_form">
                <div class="booting display-none">
                  <div id="booting"></div>
                </div>
                <div class="profile">Pushpendra Group</div>
                <p>Log in</p>
                <p>Use PGGROUP Account</p>
                <!-- <div class="userImage">
                  <div class="UserPic"></div>
                  adarsh pushpendra pandey
                </div> -->
                   <div class="username">
                   <label for="username" id="userlab">Enter Username or Mobile No</label>
                     <input type="username" id="username" autocomplete="off">
                   </div>

                   <div class="password display-none">
                   <label for="password" id="passlab">Enter Password</label>
                     <input type="password" id="password" autocomplete="off">
                   </div>

                   <div class="submit">
                     <button id="next">Next
                     </button>
                   </div>
              </div>
             </div>
    </div>
    <div id="url">
      <?php echo $url; ?>
    </div>
    <script src="../assets/js/function.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>   
    <script>
      /*********************LIVE TIMESTAMP UPDATE*************************/
      $('input').attr('autocomplete','off');
      //// FUNCTIONS ALL EXTERNAL ASSETS////
function date_time(){
  let output_date = document.getElementById("date_span");
  let output_time = document.getElementById("time_span");
  $.ajax({
    url: '../api/date_time',
    dataType: "json",
    success: function(response){
    output_time.innerHTML = response.time;
    output_date.innerHTML = response.date;
    setTimeout(date_time,1000);
     }
  });
}
  /***********************************************************/
  $(document).ready(function(){
  $('#username').focus(function(){
  $('.username').addClass('focused');
});
$('#username').blur(function(){
  var inputValue = $(this).val();
  if (inputValue != "") {
    $(this).addClass('filled');
  } else {
    $(this).removeClass('filled');
    $('.username').removeClass('focused');
  }
});

  $('#password').focus(function(){
  $('.password').addClass('focused-pass');
});
$('#password').blur(function(){
  var inputValue = $(this).val();
  if (inputValue != "") {
    $(this).addClass('filled');
  } else {
    $(this).removeClass('filled');
    $('.password').removeClass('focused-pass');
  }
});
if (readCookie("unlock")) {
  redirect("../dashboard");
}else
if(readCookie("username")){
          $("#next").html("submit");
          $(".password").show("fast");
          $(".username").hide("slow");
    $("#next").attr("id","submit");
          $("#submit").click(function(){
            let password = $("#password").val();
            if (password == "") {
              alert("please enter password!!")
            }else{
            pass_login(password);
            }
          });
  }else{
$("#next").click(function(){
  let username = $("#username").val();
  if (username == "") {
    alert("enter username");
  }else{
    username_check(username);
  }
});
  }
  date_time();
 let lockRange = document.getElementById("lockRange");
   lockRange.oninput = function() {
    if (lockRange.value >= 40) {
      lockRange.value = 50;
      unlocked();
    }
 }  


 });
</script>
  </body>
</html>
