var open = ''
function opendiv()
{if (open == 1) {document.getElementById("s5_opendivoptions").style.display = 'none'; 
open = 0;}else {document.getElementById("s5_opendivoptions").style.display = 'block'; 
open = 1;}}





var login_un_click = 0;

function username_clear() {
if (login_un_click == 1) {
}


if (login_un_click == 0) {
login_un_click = 1;
document.login.username.value='';
}

}


var login_pw_click = 0;

function password_clear() {
if (login_pw_click == 1) {
}


if (login_pw_click == 0) {
login_wo_click = 1;
document.login.passwd.value='';
}

}