function sms(text,time) {
  let times = "";
  $("#sms").show();
  $(".sms").html(text);
  times = time;
  if (times == "" || times == null) {
    $("#close_sms_popup").click(function(){
    $("#sms").hide();
  });
  }else{
  setTimeout(() => {
    $("#sms").hide();
  }, times);
  times = "";
  }
}
function message_load_retailer(rid) {
  $.ajax({
    type: "POST",
    url: "../api/retailer_message_list.php",
    data: {
      event: "retailer_message_list",
      retailerId: rid,
    },
    dataType: "json",
    beforeSend: function () {
      $(".app-chats-list-screen").append("<div class='loading'></div>");
      $("#message-screen").empty();
      // $("#chats_screen").append('<div class="loader-message"></div>');
    },
    success: function (rp) {
      $(".loading").remove();
      $("#message-screen").empty();
      if (rp.status == "100" || rp.status == "") {
        $("#chats_screen").append(
          '<div class="loader-message no-data-found">No data Found!!</div>'
        );
        $("#Loan Amount is").html("Loan Amount is " + 0 + "/-");
      } else if (rp[0].status == "200") {
        $(".app-chat-open-big-size").removeClass("disp-none");
        $(".app-chat-open-big-size").addClass("bid-dp-start");
        setTimeout(() => {
          $(".app-chat-open-big-size").removeClass("bid-dp-start");
        }, 300);
        $("#mobile_no_data").html(rp[0].mobile_no);
        let rplength = rp.length;
        for (let i = 1; i < rplength; i++) {
          if (rp[i].payment_status == "paid") {
            $("#message-screen").append(
              '<div class="paid app-payment-cont-ui">'+
              '<div class="app-payment-container">' +
                '<div class="amount"><span class="iconify" data-icon="carbon:currency-rupee"></span>' +
                rp[i].amount +
                '<span class="iconify" data-icon="icon-park:success"></span></div>' +
                '<div class="message">' +
                rp[i].message +
                "</div>" +
                '<div class="timestamp">' +
                rp[i].date_time +
                "</div>" +
                "</div>"+
                '</div>'
            );
          } else if (rp[i].payment_status == "loan") {
            let loan_amount = rp[0].loan_amount;
            $("#message-screen").append(
              '<div class="loan app-payment-cont-ui">'+
              '<div class="app-payment-container">' +
                '<div class="amount"><span class="iconify" data-icon="carbon:currency-rupee"></span>' +
                rp[i].amount +
                '<span class="iconify" data-icon="icon-park:success"></span></div>' +
                '<div class="message">' +
                rp[i].message +
                "</div>" +
                '<div class="timestamp">' +
                rp[i].date_time +
                "</div>" +
                "</div>"+
                '</div>'
            );
            $("#all_amount_b_s").html("Loan Amount is " + loan_amount + "/-");
          }
        }
        $("#b_s_name").html(rp[0].name);
        $("#dp_image_b_s").css(
          "backgroundImage",
          "url(../assets/images/retailer/" + rp[0].image + ")"
        );
      }
    }, //success
  });

  $(".back").click(function () {
    $(".app-chat-open-big-size").addClass("bid-dp-close");
    setTimeout(() => {
      $(".app-chat-open-big-size").removeClass("bid-dp-close");
      $(".app-chat-open-big-size").addClass("disp-none");
    }, 300);
  });
}
function dp_big_box() {
  let box = document.getElementById("image_cont_dp_full");

  $(".app-dp-image").click(function (e) {
    // var rect = e.target.getBoundingClientRect();
    // var x = e.clientX - rect.left; //x position within the element.
    // var y = e.clientY - rect.top; //y position within the element.

    //  alert(e.clientY);
    var yy = e.clientY + "px";
    root = document.documentElement;
    root.style.setProperty("--start-top-position-full-dp", yy);
    let alpha = e.target.style.backgroundImage;
    $("#image_cont_dp_full").css("background-image", alpha);
    $("#outer_cell").removeClass("disp-none");
  });
  $("#outer_cell").click(function () {
    $("#outer_cell").addClass("disp-none");
  });
}
function click_retailer_data(i) {
  let apslha = $(".app-chat-list-clicker-sub" + i)
    .parent()
    .attr("id");
  message_load_retailer(apslha);
}
$(".app-chat-list-clicker").click(function (e) {
  let aplha = e.target.id;
  if (aplha == "" || aplha == undefined || aplha == null) {
    click_retailer_data(i);
  } else {
    message_load_retailer(aplha);
  }
});

function retailer_list() {
  $.ajax({
    type: "POST",
    url: "../api/retailer_list.php",
    data: {
      event: "retailer_list",
    },
    dataType: "json",
    beforeSend: function () {
      $(".app-chats-list-screen").append("<div class='loading'></div>");
    },
    success: function (response) {
      if (response[0].status == "200") {
        $(".app-chats-list-screen").empty();
        let array_length = response.length - 1;
        for (let i = 1; i <= array_length; i++) {
          $(".app-chats-list-screen").append(
            "<!-- Mercent list per person1 End -->" +
              '<div class="app-merchant-container">' +
              '<div class="app-dp-image" id="merchant-image' +
              i +
              '"></div>' +
              '<div class="app-merchant-name-container app-chat-list-clicker" id="' +
              response[i].id +
              '">' +
              '<div onclick="click_retailer_data(' +
              i +
              ')" class="app-name app-chat-list-clicker-sub' +
              i +
              '">' +
              response[i].name +
              " (" +
              response[i].id +
              ")" +
              "</div>" +
              '<div onclick="click_retailer_data(' +
              i +
              ')" class="app-type app-chat-list-clicker-sub' +
              i +
              '">' +
              response[i].about +
              "</div>" +
              "</div>" +
              "</div>" +
              "<!-- Mercent list per person1 End -->"
          );
          $("#merchant-image" + i).css(
            "backgroundImage",
            "url('../assets/images/retailer/" + response[i].image + "')"
          );
        }

        dp_big_box();
      } else if (response[0].status == "100") {
        alert("No data Found");
      } else {
        alert("Something wents wrong Please Try Again Later!!");
      }
    },
  });
}
function app_clickable(e) {
  let alpha = e.target;
  var rect = alpha.getBoundingClientRect();
  var x = e.clientX - rect.left; //x position within the element.
  var y = e.clientY - rect.top; //y position within the element.
  // alert("Left? : " + x + " ; Top? : " + y + ".");
  // $(".app-bg-rad-eff").css({
  //     "width": alpha.innerWidth,
  //     "height": alpha.innerHeight,
  //     "top": y,
  //     "left": x
  // });
  // e.innerHTML = '<span class="app-bg-rad-eff"></span>';
}

function nav_pos() {
  $("#chats").click(function () {
    $("#chats").addClass("app-nav-active");
    $("#status").removeClass("app-nav-active");
    $("#summary").removeClass("app-nav-active");

    $(".app-chats-list-screen").removeClass("disp-none");
    $(".app-status-list-screen").addClass("disp-none");
    $(".app-summary-list-screen").addClass("disp-none");
    retailer_list();
  });
  $("#status").click(function () {
    $("#chats").removeClass("app-nav-active");
    $("#status").addClass("app-nav-active");
    $("#summary").removeClass("app-nav-active");

    $(".app-status-screen").removeClass("disp-none");
    $(".app-chats-list-screen").addClass("disp-none");
    $(".app-summary-list-screen").addClass("disp-none");
  });
  $("#summary").click(function () {
    $("#chats").removeClass("app-nav-active");
    $("#status").removeClass("app-nav-active");
    $("#summary").addClass("app-nav-active");

    $(".app-summary-list-screen").removeClass("disp-none");
    $(".app-chats-list-screen").addClass("disp-none");
    $(".app-status-list-screen").addClass("disp-none");
  });
}
