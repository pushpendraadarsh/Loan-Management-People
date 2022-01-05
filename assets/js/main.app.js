/***********************POPUP BOOTING LOADING************************** */
/***************************if open preloader **************
function loading() {
  let preloader = document.getElementById("home_popup");
  let main_content = document.getElementById("main_content");
  document.getElementById("body").style.overflow = 'hidden';
  main_content.classList.add("display-none");
  setTimeout(() => {
    document.getElementById("body").style.overflowX = 'hidden';
    document.getElementById("body").style.overflowY = 'auto';
    main_content.classList.remove("display-none");
    preloader.classList.add("display-none");
    $("#home_popup").empty();
  }, 1500);
}
*************************************************************/
function loading() {
  let preloader = document.getElementById("home_popup");
  let main_content = document.getElementById("main_content");
  // document.getElementById("body").style.overflow = 'hidden';
  // main_content.classList.add("display-none");
  preloader.classList.add("display-none");
    $("#home_popup").empty();
  setTimeout(() => {
    document.getElementById("body").style.overflowX = 'hidden';
    document.getElementById("body").style.overflowY = 'auto';
    main_content.classList.remove("display-none");
    preloader.classList.add("display-none");
    $("#home_popup").empty();
  }, 1500);
}
/************** PARTITION PRELOADER******************* */

/***************Normal REDIRECT************* */
function redirect(url) {
    location.href = url;
}
/*******************WRITE COOKIE******************** */
function writeCookie(name,value,days) {
    var date, expires;
    if (days) {
        date = new Date();
        date.setTime(date.getTime()+(days*24*60*60*1000));
        expires = "; expires=" + date.toGMTString();
            }else{
        expires = "";
    }
    document.cookie = name + "=" + value + expires + "; path= /";
}
    //demo :: var sId = 's234543245';
//writeCookie('sessionId', sId, 3);
/******************Read Cookie******************** */
function readCookie(name) {
    var i, c, ca, nameEQ = name + "=";
    ca = document.cookie.split(';');
    for(i=0;i < ca.length;i++) {
        c = ca[i];
        while (c.charAt(0)==' ') {
            c = c.substring(1,c.length);
        }
        if (c.indexOf(nameEQ) == 0) {
            return c.substring(nameEQ.length,c.length);
        }
    }
    return '';
}
// var sId = readCookie('sessionId');
/************Get SESSION ID************* */
function getJSessionId(session) {
    let sessionId = readCookie(session);
  if (sessionId != "") {
  }else{
    redirect("hooks/lockscreen");
  }
}
/*********************GoTo******************** */
function goTo(page, title, url) {
    if ("undefined" !== typeof history.pushState) {
      history.pushState({page: page}, title, url);
    } else {
      window.location.assign(url);
    }
  }
  
/*****************Unlocked***************** */
function unlocked() {
    let lock_area = document.getElementById("lockscreen-container");
    let login_area = document.getElementById("login_cont");
    lock_area.classList.add("unlocked");
    setTimeout(() => {
        lock_area.classList.add("display-none");
        login_area.classList.remove("display-none");
      //  goTo("html", "Dashboard", url_redirect);
      //  location.reload();
    }, 500);
}