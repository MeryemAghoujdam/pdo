/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
function changeIframSrc(src){
    var ifram = document.getElementById("webView");
    ifram.src=src;
}
function showMenu(source){
    var element = document.getElementById("menuBlock"),
        webView = document.getElementById("webView");
    element.style.height=(window.innerHeight-64)+'px';
    webView.style.width="75%";
    webView.style.float="right";
    source.removeAttribute('onclick');
    source.setAttribute("onclick","HideMenu(this)");
}
function HideMenu(source){
    var element = document.getElementById("menuBlock"),
        webView = document.getElementById("webView");
    element.style.height='0px';
    webView.style.width="100%";
    source.removeAttribute('onclick');
    source.setAttribute("onclick","showMenu(this)");
}