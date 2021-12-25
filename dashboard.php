<?php
session_start();
include 'config/conn.php';
if (isset($_COOKIE['unlock'])) {
  $username = $_COOKIE['username'];
  $sql = "SELECT * FROM user_assets WHERE username = '$username'";
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $name = $row['name'];
    $images = $row['image'];
    $mobile_number = $row['mob_no'];
    $address = $row['address'];
  } else {
    echo "not found";
  }
?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="assets/images/users/<?php echo $images; ?>" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/style.app.css" />
    <link rel="stylesheet" href="assets/css/keyframe.app.css" />
    <link rel="stylesheet" href="assets/css/assets.app.css" />
    <script src="assets/js/main.app.js"></script>
    <title>A Loan Management System || <?php echo $name; ?></title>
  </head>

  <body id="body" style="overflow-x: hidden;">
    <!-- Animation Of Dashboard Start-->
    <div class="ripple-background">
      <div class="circle xxlarge shade1"></div>
      <div class="circle xlarge shade2"></div>
      <div class="circle large shade3"></div>
      <div class="circle mediun shade4"></div>
      <div class="circle small shade5"></div>
    </div>
    <!-- Animation Of Dashboard End-->

    <!--home_popup Start-->
    <div class="home_popup" id="home_popup">
      <div class="leaf_animation">
        <!--Leaf animation start-->
        <div class="leaf">
          <div> <img src="assets/images/backgrounds/leaf-animation/Fall-Autumn-Leaves-Transparent-PNG.png" height="75px" width="75px"></img></div>
          <div><img src="assets/images/backgrounds/leaf-animation/Autumn-Fall-Leaves-Pictures-Collage-PNG.png" height="75px" width="75px"></img></div>
          <div> <img src="assets/images/backgrounds/leaf-animation/Autumn-Fall-Leaves-Clip-Art-PNG.png" height="75px" width="75px"></img></div>
          <div><img src="assets/images/backgrounds/leaf-animation/Green-Leaves-PNG-File.png" height="75px" width="75px"></img></div>
          <!-- <div> <img src="assets/images/backgrounds/leaf-animation/Transparent-Autumn-Leaves-Falling-PNG.png" height="75px" width="75px"></img></div>
          <div>   <img src="assets/images/backgrounds/leaf-animation/Realistic-Autumn-Fall-Leaves-PNG.png" height="75px" width="75px"></div>
          <div><img src="assets/images/backgrounds/leaf-animation/autumn_leaves_025.png" height="75px" width="75px"></div> -->
        </div>

        <div class="leaf leaf1">
          <div> <img src="assets/images/backgrounds/leaf-animation/Fall-Autumn-Leaves-Transparent-PNG.png" height="75px" width="75px"></img></div>
          <div><img src="assets/images/backgrounds/leaf-animation/Autumn-Fall-Leaves-Pictures-Collage-PNG.png" height="75px" width="75px"></img></div>
          <div> <img src="assets/images/backgrounds/leaf-animation/Autumn-Fall-Leaves-Clip-Art-PNG.png" height="75px" width="75px"></img></div>
          <div><img src="assets/images/backgrounds/leaf-animation/Green-Leaves-PNG-File.png" height="75px" width="75px"></img></div>
          <!-- 
              <div> <img src="assets/images/backgrounds/leaf-animation/Transparent-Autumn-Leaves-Falling-PNG.png" height="75px" width="75px"></img></div>
            <div>   <img src="assets/images/backgrounds/leaf-animation/Realistic-Autumn-Fall-Leaves-PNG.png" height="75px" width="75px"></div>
            <div><img src="assets/images/backgrounds/leaf-animation/autumn_leaves_025.png" height="75px" width="75px"></div> -->
        </div>

        <div class="leaf leaf2">
          <div> <img src="assets/images/backgrounds/leaf-animation/Fall-Autumn-Leaves-Transparent-PNG.png" height="75px" width="75px"></img></div>
          <div><img src="assets/images/backgrounds/leaf-animation/Autumn-Fall-Leaves-Pictures-Collage-PNG.png" height="75px" width="75px"></img></div>
          <div> <img src="assets/images/backgrounds/leaf-animation/Autumn-Fall-Leaves-Clip-Art-PNG.png" height="75px" width="75px"></img></div>
          <div><img src="assets/images/backgrounds/leaf-animation/Green-Leaves-PNG-File.png" height="75px" width="75px"></img></div>
          <!--  <div> <img src="assets/images/backgrounds/leaf-animation/Transparent-Autumn-Leaves-Falling-PNG.png" height="75px" width="75px"></img></div>
            <div>   <img src="assets/images/backgrounds/leaf-animation/Realistic-Autumn-Fall-Leaves-PNG.png" height="75px" width="75px"></div>
            <div><img src="assets/images/backgrounds/leaf-animation/autumn_leaves_025.png" height="75px" width="75px"></div>  -->
        </div>

      </div>
      <!--Leaf animation END-->
      <img class="rose-fall" src="assets/images/backgrounds/rose_fall.png" alt="Rose" />
      <div class="title_home_popup">
        WELCOME TO PUSHPENDRA GROUP LOAN MANAGEMENT SYSTEM.
      </div>
      <div class="content_home_popup">
        Hi! You are in Our Environment called as PUSHPENDRA GROUP By ADARSH
        PUSHPENDRA PANDEY. It is a very Best Place to Serve Your Data and
        customize your dream as online platform. So hurry up! and share this
        link to everyone to introduce PG environment.
      </div>
      <div class="loading-progress">
        <div class="line">
          <div class="rotator"></div>
          <p id="loading_caption">Loading Environment...</p>
        </div>
      </div>
    </div>
    <!-- ............../////////// -->
    <!--home_popup End-->
    <div id="main_content">
      <!--upper_layout Start-->
      <div class="upper_layout">
        <div class="ul-ele">
          <div class="ul-ele-items" id="time">Check Date</div>
          <div class="ul-ele-items" id="lock">Lock</div>
          <a class="ul-ele-items" href="#main_items" rel="noopener noreferrer">Skip & Main Content</a>
          <a class="ul-ele-items" href="#loan_summary" rel="noopener noreferrer" onclick="loan_summary()">Loan Summary</a>
          <a href="mailto:adarshpushpendra@gmail.com" class="ul-ele-items">Mail Us</a>
          <a class="ul-ele-items" href="tel:+91 9118723203">Contact Us</a>
        </div>
      </div>
      <!--upper_layout End-->
      <div class="main_content light-bg-color" id="main_items">
        <!-- if dark then class add = dark-bg-color -->
        
        <!-- Top User Data Show Start -->
        <nav>
          <div class="nav-in">
            <p class="ul-ele-items width-min-content-max-500 user-select gradient-for-title" id="session_full_name">Authenticate..</p>
            <p id="address" class="ul-ele-items width-min-content-max-500 user-select gradient-for-title"><?php echo $address; ?></p>
            <p id="mobile_no" class="ul-ele-items width-min-content-max-500 user-select gradient-for-title"><?php echo $mobile_number; ?></p>
            <div class="nav-dp" id="user_image"></div>
          </div>
        </nav>
        <!-- Top User Data Show End -->
        <!-- dp-merchant-big Start-->
        <div class='close-full'>
          <div style="display: none;" class="dp-merchant-big" id="dp_full_view"></div>
        </div>
        <!-- dp-merchant-big End-->
        <!-- right-sidebar start -->
        <div class="right-sidebar scrollbar-2">
          <div class="sidebar-rht-content">
            <h1 class="title center">Merchant List</h1><span onclick="retailer_list()" class="btn">Refresh</span>
            <!-- mercent Table start -->
            <div class="merchant-table">
            </div>
            <!-- PLus icon Start -->
            <div class="plus clickable" id="add_retailerId">
              <div class="plus-icon">+</div>
            </div>
            <!-- PLus icon End -->
          </div>
          <!-- mercent Table End -->
        </div>
        <!-- right-sidebar end -->

        <div class="big-sms-detail">
          <div class="id"></div>
          <div class="top-head-bsd">
            <div class="close" id="sms_close">
              <- </div>
                <div class="head-dp-bsd"></div>
                <p id="rt_name" class="name"></p>
          </div>
            <div id="chats_screen" class="big-sms-detail-cont scroll_red">
            </div>
            <div class="calculation">
              <div>Overall Loan Amount In This Merchant is:- <span id="bsd_loan_amount" class="bold">Fetch..</span></div>
            </div>
            <div class="requests">
              <div class="add-loan btn" id="add_loan">Add Loan</div>
              <div class="add-payout btn" id="pay_loan">Pay Loan</div>
            </div>
          </div>

        </div>
        <!-- big sms end  -->

        <!-- Loan Summary Start-->
        <div id="loan_summary">
            <div class="loan_summary">
              <div class="user-select close close-right-top" onclick="location.href = '#'">X</div>
              <div class="sqr-box-600x50px" id="session_name"></div>
              <div class="sqr-box-600x50px">
                Your Overall Loan In Current Time
              </div>
              <div>

                <div class="sqr-box-600x35px flex-row">
                  <div class="title">Overall Payable Amount</div>
                  <div class="title" id="overall_loan_amount">Loading..</div>
                </div>

                <div class="sqr-box-600x35px flex-row">
                  <div class="title">No of Merchent Dues</div>
                  <div class="title" id="no_of_mer_loan">Loading..</div>
                </div>

                <div class="sqr-box-600x35px flex-row">
                  <div class="title">All Merchant</div>
                  <div class="title" id="active_merchant">Loading..</div>
                </div>

                <div class="sqr-box-600x35px flex-row">
                  <div class="title">Last Payment Date/Time And Merchant</div>
                  <div class="title" id="lpdtm">Loading..</div>
                </div>

              </div>
              <!--flex-->
            </div>
            <!-- .loan_summary -->
          </div><!-- #loan_summary -->
        <!-- Loan Summary End-->

        <!--.main_content-->
      </div>
      <!--#main_content-->
      <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
      <script src="assets/js/function.js"></script>

      <script>
        $(document).ready(function() {
          $("#lock").click(function() {
            alert("Do You Want to Locked");
            lock_screen("remove", "unlock");
          });

          $("#time").click(function() {
            date_stamp();
          });
          $("#pay_loan").click(function(){
            let amount = prompt("Please enter your Amount");
            let message = prompt("Please enter Message");
            if (amount == "") {
              return
            }else{
            pay_loan_bsd(amount,message);
            }
          });
          $("#add_loan").click(function(){
            let amount = prompt("Please enter your Amount");
            let message = prompt("Please enter Message");
            if (amount == "") {
              return
            }else{
            add_loan_bsd(amount,message);
            }
          });
          $("#add_retailerId").click(function(){
            let UserId = prompt("Please enter New User Id");
            let Username  = prompt("Please enter New User Name");
            let Userimage  = prompt("Please enter New User Image","person.png");
            let UserAbout  = prompt("Please enter New User About");

            if (UserId == "" || Username == "" || UserAbout=="") {
              return;
            }else{
            add_merchant(UserId,Username,Userimage,UserAbout);
            }
          });
          /***********************************************************/
          retailer_list();
          let sessionId = readCookie("unlock");
          $("#session_name").html("Welcome To Pushpendra Group Loan Management System!! <?php echo $name; ?>");
          $("#session_full_name").html("Welcome, <?php echo $name; ?>");
          let user_image_tag = $("#user_image");
          $("#user_image").css("backgroundImage", "url('assets/images/users/<?php echo $images; ?>')");
          $("#dp_full_view").css("backgroundImage", "url('assets/images/icons/blank_dp.png')");
          loading();
          partition_preloader();
        });
      </script>
  </body>

  </html>

<?php
} else {
  header('Location: hooks/lockscreen');
}
?>