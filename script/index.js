/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

window.onload = function (){
    var location = window.location.toString(),
        Msg = document.getElementById("ErrMSG");
    if(location.includes("state=0")){
        Msg.textContent = "Login introvable";
    }else if(location.includes("state=1")){
        Msg.textContent = "Login ou mot de passe erroné";
    }
}