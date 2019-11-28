
function sendPassword(){
    var forgetButton = document.getElementById("password-forget-button")
    var recovery = document.getElementById("recovery-sent")
    
    forgetButton.onclick = recovery.removeAttribute("id")
}
