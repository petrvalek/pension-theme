var elementIsClicked = false; 

function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    var expires = "expires="+d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(name) {
    var dc = document.cookie;
    var prefix = name + "=";
    var begin = dc.indexOf("; " + prefix);
    if (begin == -1) {
        begin = dc.indexOf(prefix);
        if (begin != 0) return null;
    }
    else
    {
        begin += 2;
        var end = document.cookie.indexOf(";", begin);
        if (end == -1) {
        end = dc.length;
        }
    }
    return decodeURI(dc.substring(begin + prefix.length, end));
} 

function clickHandler(){ 
    elementIsClicked = true;
    document.getElementById('cookie-infobox').style.display="none";
    setCookie('AnalyticCookie', 'true', 365);
}

function hasCookie() {
    var cookie = getCookie('AnalyticCookie');
    
    if (cookie == null) {
        // clickHandler();
        document.getElementById('cookie-infobox').style.display="block";
    } 
}

document.addEventListener("DOMContentLoaded", function() {
    document.getElementById('cookie-agree').addEventListener('click', clickHandler); 
    hasCookie();
});


function generateUUID() {
    var d = new Date().getTime();
    if(Date.now){
        d = Date.now(); //high-precision timer
    }
    var uuid = 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function(c) {
        var r = (d + Math.random()*16)%16 | 0;
        d = Math.floor(d/16);
        return (c=='x' ? r : (r&0x3|0x8)).toString(16);
    });
    return uuid;
};

function hasUserID() {
    var cookie = getCookie('userId');
    var userId = generateUUID();
    
    if (cookie == null) {
        setCookie('userId', userId, 365);
        window.dataLayer = window.dataLayer || [];
        window.dataLayer.push({
        'userId' : userId 
        })
    } 
}
hasUserID();
