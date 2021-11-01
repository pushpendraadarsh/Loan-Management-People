/***********************POPUP BOOTING LOADING************************** */
function loading() {
  let preloader = document.getElementById("home_popup");
  let main_content = document.getElementById("main_content");
  document.getElementById("body").style.overflow = 'hidden';
  main_content.classList.add("display-none");
  setTimeout(() => {
    document.getElementById("body").style.overflow = 'auto';
    main_content.classList.remove("display-none");
    preloader.classList.add("display-none");
  }, 7000);
}
/************** PARTITION PRELOADER******************* */
function partition_preloader() {
  let partition = document.getElementById("partition");
  partition.classList.add("display-none");
  setTimeout(() => {
    partition.classList.remove("display-none");
    partition.classList.add("rotate_360deg");
  }, 5500);
}
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
    redirect("../../hooks/lockscreen.html");
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
function unlocked(url_redirect) {
    let lock_area = document.getElementById("lockscreen-container");
    lock_area.classList.add("unlocked");
    setTimeout(() => {
        lock_area.classList.add("display-none");
       goTo("html", "Dashboard", url_redirect);
       location.reload();
    }, 500);
}
