<?php
session_start();
include '../config/conn.php';
if (isset($_COOKIE['unlock'])) {
    $username = $_COOKIE['username'];
    $sql = "SELECT * FROM user_assets WHERE username = '$username'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $name = $row['name'];
    $images = $row['image'];
    $mobile_number = $row['mob_no'];
    $address = $row['address'];
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="jquery.mobile-1.4.5.min.css?1.0.2" />
        <link rel="stylesheet" href="m.style.css?1.0.2">
        <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="https://code.iconify.design/2/2.1.0/iconify.min.js"></script>
        <script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
        <title>Dashboard || Loan Management</title>
        <script>
            function calling() {
                    let data = $("#mobile_no_data").html();
                    if (data == "none") {
                        sms("<b>Not any Mobile No are Linked.</b> <br> If you are link mobile no.<br> please go Merchent profile.");
                    } else {
                        sms("<b>Calling..</b> <br>" + data + "<br>", "1000");
                        window.location.href = "tel:+91"+data;
                    }
                }
        </script>
    </head>

    <body class="click-effect">
        <div class="preloader">
            <div class="sp-container">
                <div class="sp-content">
                    <div class="sp-globe"></div>
                    <h2 class="frame-1">Hello!</h2>
                    <h2 class="frame-2">Welcome,to PUSHPENDRA GROUP</h2>
                    <h2 class="frame-3">I am Owner Adarsh Pushpendra Pandey</h2>
                    <h2 class="frame-4">Any Query Please Contact Us On: <br>+91 9118723203</h2>
                </div>
            </div>
        </div>
        <div class="app-main-content">
            <div class="app-header">
                <div class="app-home-top">PGGROUP</div>
                <span class="app-search-top iconify" data-icon="ant-design:search-outlined"></span>
                    <span class="home-more-option iconify app-option-top" data-icon="iwwa:option"></span>
                <!-- <a href="status?id=adarsh">Status</a> -->
            </div> <!-- header end -->
            <div class="app-navigation">
                <div id="chats" class="app-nav-active">CHATS</div>
                <div id="status">STATUS</div>
                <div id="summary" class="">SUMMARY</div>
            </div> <!-- navigation end -->
            <div class="app-chats-list-screen screens">
            </div> <!-- app-chats-list-screen -->
            <div class="dp-big disp-none" id="outer_cell">
                <div class="image" id="image_cont_dp_full"></div>
            </div>
            <!-- <div class="app-status-screen screens disp-none"></div>
        <div class="app-summary-screen screens disp-none"></div>-->
            <div class="app-chat-open-big-size bid-dp-start disp-none">
                <div class="header">
                    <div class="back">
                        <span class="click iconify" data-icon="eva:arrow-back-fill"></span>
                        <div class="click dpimage" id="dp_image_b_s"></div>
                    </div>
                    <div class="name" id="b_s_name">Dummy Nmae</div>
                    <div class="elements">
                        <div id="mobile_no_data" style="opacity: 0;display:none;"></div>
                        <span onclick="calling()" class="iconify click mobile_no" data-icon="akar-icons:phone"></span>
                        <span class="iconify click" data-icon="fa-solid:share-square"></span>
                        <span class="iconify click" data-icon="cil:options"></span>
                    </div>
                </div> <!-- header-->
                <div class="message-screen" id="message-screen">
                    <div class="paid app-payment-container">
                        <div class="amount"><span class="iconify" data-icon="carbon:currency-rupee"></span>2500<span class="iconify" data-icon="icon-park:success"></span></div>
                        <div class="message">Paid</div>
                        <div class="timestamp">1:03 PM</div>
                    </div>
                </div>
                <div class="bottom">
                    <div class="btn add click" id="add">ADD LOAN</div>
                    <div class="btn pay click" id="pay">PAY LOAN</div>
                    <div class="overall-recard" id="all_amount_b_s">Loan Amount is 0/-</div>
                </div>
            </div> <!-- app-chat-open-big-size -->
            <div id="add_person"><span class="click app-add-contact iconify" data-icon="akar-icons:plus"></span></div> <!-- ADD OPTION BOTTOM -->
            <div class="full disp-none add-person-cont" id="add_person_event">
            </div> <!-- full -->
            <div class="add-person-event disp-none add-person-cont">

            </div> <!-- add-person-event -->
            <div id="sms">
                <div id="close_sms_popup"></div>
                <div class="sms"></div>
            </div>
        </div>
        <!--"app-main-content"-->
        <script src="apis.js"></script>
        <script src="app-main.js?v1.0.2"></script>
        <script>
            $(document).ready(function() {
                $(".preloader").fadeOut("slow");
                $("#add_person").click(function() {
                    $(".add-person-event").addClass("down-to-up");
                    $(".add-person-cont").show();
                    setInterval(() => {
                        $(".add-person-event").removeClass("down-to-up");
                    }, 300);
                });
                $("#add_person_event").click(function() {
                    $(".add-person-event").addClass("up-to-down");
                    setInterval(() => {
                        $(".add-person-event").removeClass("up-to-down");

                    }, 300);
                    $(".add-person-cont").hide();
                });
                retailer_list();
                nav_pos();
            });
            $(".click-effect").click(function(e) {
                let x = e.clientX - 10;
                let y = e.clientY - 10;
                // alert("left:"+x+"top:"+y);

                $(".click-effect").append('<div id="clicker_effect"></div>');
                $("#clicker_effect").css({
                    "top": y + 'px',
                    "left": x + 'px'
                });
                setTimeout(() => {
                    $("div").remove("#clicker_effect");
                }, 300);
            });
            $(".home-more-option").click(function(){
                    alert("hi");
                });
        </script>
    </body>

    </html>
<?php
} else {
    header('Location: ../hooks/lockscreen?url=../version2/dashboard');
}
?>