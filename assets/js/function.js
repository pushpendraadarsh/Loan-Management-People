function date_stamp(out) {
    let output = document.getElementById("time");
    const d = new Date();
const months = ["January","February","March","April","May","June","July","August","September","October","November","December"];
output.innerHTML =d.getDate()+" "+months[d.getMonth()]+" "+d.getFullYear();
  }
  /*******************Check Cookies Ajax**************** 
  function cookies(event,name_cookie,cookie_value) {
    $.ajax({
        type: 'POST',
        url: '../api/cookies.php',
        data : {
            event:event,
            cookie_name:name_cookie,
            cookie_value:cookie_value
        },
        beforeSend: function(){
        },
        success: function(response){
            if (response == "200") {
               unlocked('../dashboard');
            }else if (response == "300"){
                alert("Locked Due to network error");
            }else{
              alert("Something wents wrong Please Try Again Later!!");
            }
         }
    });
}*/
function lock_screen(event,cookie_name) {
  let lock_button = $("#lock");
  $.ajax({
    type: 'POST',
    url: '../api/cookies.php',
    data : {
        event:event,
        cookie_name:cookie_name
    },
    beforeSend: function(){
      lock_button.html("Locking..");
    },
    success: function(response){
        if (response == "200") {
          lock_button.html("Locked");
          setTimeout(() => {
            redirect('hooks/lockscreen');
          }, 2000);
           
        }else if (response == "300"){
            alert("Network error");
        }else{
          alert("Something wents wrong Please Try Again Later!!");
        }
     }
});
}
function login_booting(event) {
  if (event == "start") {
    $(".booting").show();
    $(".login_form").css("opacity","0.6");
  }else if (event == "end") {
    $(".booting").hide();
    $(".login_form").css("opacity","1");
  }
  
}
function pass_login(password) {
  $.ajax({
    type: 'POST',
    url: '../api/login.php',
    data : {
        event:"login",
        password:password
    },
    beforeSend: function(){
      login_booting("start");
      $("#submit").html("Authentication..");
    },
    success: function(response){
        if (response == "200") {
          $("#submit").html("Success");
           redirect("../dashboard");
        }else if (response == "100"){
          login_booting("end");
            alert("Error password");
            $("#submit").html("retry");
        }else{
          login_booting("end");
          $("#submit").html("Retry");
          alert("Something wents wrong Please Try Again Later!!");
        }
     }
});
}
function username_check(u) {
  $.ajax({
    type: 'POST',
    url: '../api/login.php',
    data : {
      event:"username",
        username:u
    },
    beforeSend: function(){
      login_booting("start");
      $("#next").html("Validating..");
    },
    success: function(response){
        if (response == "200") {
          $("#next").html("submit");
          // $("#next").removeId("next");
          $(".username").hide("slow");
          login_booting("end");
          $(".password").show("fast");

          $("#next").attr("id","submit");
          $("#submit").click(function(){
            let password = $("#password").val();
            if (password == "") {
              alert("please enter password!!")
            }else{
            pass_login(password);
            }
          });
        }else if (response == "100"){
          login_booting("end");
      $("#next").html("Retry");
            alert("Incorrect Username");
        }else{
          alert("Something wents wrong Please Try Again Later!!");
        }
     }
});
}
function message_load_retailer(rid) {
  $.ajax({
    type: 'POST',
    url: '../api/retailer_message_list.php',
    data : {
        event:"retailer_message_list",
        retailerId:rid
    },
    dataType: "json",
    beforeSend: function(){
      $("#chats_screen").empty();
      $("#chats_screen").append('<div class="loader-message"></div>');
    },
    success: function(rp){
      $("#chats_screen").empty();
      $("#bsd_loan_amount").empty();
      if(rp.status == "100" || rp.status == ""){
        $("#chats_screen").append('<div class="loader-message no-data-found">No data Found!!</div>');
        $("#bsd_loan_amount").html(0+"/-");
      }else
        if (rp[0].status == "200") {
          $("#chats_screen").empty();
            let rplength= rp.length;
        for (let i = 1; i < rplength; i++) {
          if (rp[i].payment_status == "paid") {
            $("#chats_screen").append('<div class="payment_container paid">'+
            '<div class="status">Dr</div>'+
            '<div class="content">'+
              '<div class="amount">'+rp[i].amount+'/-</div>'+
              '<p class="message">'+rp[i].message+'</p>'+
              '<div class="datetime">'+rp[i].date_time+'</div>'+
            '</div>'+
          '</div>');
          }else if (rp[i].payment_status == "loan") {
            let loan_amount = rp[0].loan_amount;
            $("#chats_screen").append('<div class="payment_container loan">'+
            '<div class="status">Cr</div>'+
            '<div class="content">'+
              '<div class="amount">'+rp[i].amount+'/-</div>'+
              '<p class="message">'+rp[i].message+'</p>'+
              '<div class="datetime">'+rp[i].date_time+'</div>'+
            '</div>'+
          '</div>');
          $("#bsd_loan_amount").html(loan_amount+"/-");
          }
        }
        }
     }    //success
});
}
function dp_area() {
  // DP AREA START
  $('.dp-circle').click(function(event) {
    $(".chat").removeClass("clickable-active");
    $(".big-sms-detail").hide("fast");
    let alpha = event.target.style.backgroundImage;
    $("#dp_full_view").css("backgroundImage",alpha);
    $("#dp_full_view").toggle("fast");
      $(".close-full").show("fast");
  });

  $(".close-full").click(function(){
            $("#dp_full_view").hide("fast");
            $(".close-full").hide("fast");
          });
   // DP AREA END 
}
function name_transfer(alpha){
  $.ajax({
    type: 'POST',
    url: '../api/retailer_list.php',
    data : {
        event:"retailer_detail",
        retailerId:alpha
    },
    dataType: "json",
    beforeSend: function(){
    },
    success: function(resp){
        if (resp.status == "200") {
          $(".head-dp-bsd").css("background-image","url(assets/images/retailer/"+resp.image+")");
          $("#rt_name").html(resp.name+' ('+alpha+')');
        }else if (rp.status == "100"){
          alert("No data Found");
        }
     }
});
}
function chat_area() {
  $(".chat").click(function(event){
    $(".chat").removeClass("clickable-active");
    let alpha = event.target.id;
    $(".id").html(alpha);
    $(event.target).addClass("clickable-sms-active");
    $(event.target).addClass("clickable-active");
    $(".clickable-sms").removeClass("clickable-sms");
setTimeout(() => {
$(".clickable-sms-active").addClass("clickable-sms");
$(".clickable-sms-active").removeClass("clickable-sms-active");
}, 500);
    $(".nav-dp").css("top","-10px");
    $("#dp_full_view").hide("fast");
          $(".big-sms-detail").show("fast");
    $("#user_image").css({
      "background-size":"150px 150px",
      "width":"150px",
      "height":"150px",
      "top":"0"
    });
message_load_retailer(alpha);
name_transfer(alpha);
    $("#sms_close").click(function(){
      $("#user_image").css({
        "background-size":"200px 200px",
        "width":"200px",
        "height":"200px",
        "top":"50px"
      });
      $(event.target).removeClass("clickable-active");
      $(".big-sms-detail").hide("fast");
    });
 });
}
function retailer_list() {
  $.ajax({
    type: 'POST',
    url: '../api/retailer_list.php',
    data : {
        event:"retailer_list"
    },
    dataType: "json",
    beforeSend: function(){
    },
    success: function(response){
        if (response[0].status == "200") {
          $(".merchant-table").empty();
          let array_length = response.length - 1;
          for (let i = 1;  i <= array_length; i++) {
         $(".merchant-table").append('<!-- Mercent list per person1 End -->'+
           '<div class="merchant-item">'+
         '<div class="dp-circle clickable" id="merchant-image'+i+'"></div>'+
         '<p class="merchant-item-top-name">'+response[i].name+' ('+response[i].id+')'+'</p>'+
         '<p class="merchant-item-sms-text">'+response[i].about+'</p>'+
        //  '<p class="merchant-item-sms-last-theme">Payout 250/-</p>'+
         '<div class="chat clickable-sms" id="'+response[i].retailerId+'"></div>'+
         '</div>'+
         '<!-- Mercent list per person1 End -->');
       $("#merchant-image"+i).css("backgroundImage","url('assets/images/retailer/"+response[i].image+"')");
          }
          dp_area();

          chat_area();
          
        }else if (response[0].status == "100"){
          alert("No data Found");
        }else{
          alert("Something wents wrong Please Try Again Later!!");
        }
     }
});
}
function pay_loan_bsd(amount,message) {
 let index = $(".id").html();
 $.ajax({
  type: 'POST',
  url: '../api/transaction_loan.php',
  data : {
      event:"pay_loan",
      retailerId:index,
      amount:amount,
      message:message
  },
  beforeSend: function(){},
  success: function(response){
      if (response == "200") {
        message_load_retailer(index);
      }else if (response == "100"){
       alert("something wents wrong!! please try again");   
      }else if (response == "400") {
        alert("Amount Fill Mandatory");
      }
   }
});
}

function add_loan_bsd(amount,message) {
  let index = $(".id").html();
  $.ajax({
   type: 'POST',
   url: '../api/transaction_loan.php',
   data : {
       event:"add_loan",
       retailerId:index,
       amount:amount,
       message:message
   },
   beforeSend: function(){},
   success: function(response){
       if (response == "200") {
         message_load_retailer(index);
       }else if (response == "100"){
        alert("something wents wrong!! please try again");   
       }
    }
 });
 }

 function loan_summary() {
  $.ajax({
    type: 'POST',
    url: '../api/loan_summary.php',
    data : {
        event:"loan_summary",
        loan_summary:true,
    },
    dataType: "json",
    beforeSend: function(){},
    success: function(response){
        if (response[0].status == "200") {
          let resp_length = response.length - 1;
          $("#overall_loan_amount").html(response[0].dues_amount+"/-");
          $("#no_of_mer_loan").html(resp_length+" Dues Merchant");
          $("#active_merchant").html(response[0].active_merchant+" Active Merchants.");
          $("#lpdtm").html(response[0].last_payment);
        }else if (response[0] == "100"){
         alert("No data Found");
        }else{
          alert("Something wents wrong");
        }
     }
  });
 }
 function add_merchant(rid,rn,ri,ra) {
  $.ajax({
    type: 'POST',
    url: '../api/add_merchant.php',
    data : {
        event:"add_merchant",
        retailerId:rid,
        retailer_name:rn,
        retailerImage:ri,
        retailerAbout:ra
    },
    beforeSend: function(){},
    success: function(response){
        if (response == "300") {
          alert("Dublicate Data");
          retailer_list();
        }else if (response == "250") {
          alert("Enter All Detail Correctly!!");
          retailer_list();
        }else if (response == "200") {
          alert("Successfully Created");
          retailer_list();
        }else{
          alert(response);
          retailer_list();
        }
     }
  });
 }