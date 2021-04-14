function login(){
    document.getElementById("signin").style.display = "none";
    document.getElementById("choice").style.display = "none";
    document.getElementById("login").style.display = "block";
}

function signin(){
    document.getElementById("login").style.display = "none";
    document.getElementById("choice").style.display = "none";
    document.getElementById("signin").style.display = "block";
}


function success(){
    window.location.href = "";
}

function failed(){

}