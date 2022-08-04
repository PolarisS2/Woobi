let userId = document.querySelector("#userId");
let hit = document.querySelector("#hit");
// let hit_ = document.querySelector("#hit_");
userId.focus();
let timer = null;
userId.addEventListener("keyup", function(e) {
clearTimeout(timer);
timer = setTimeout(chkId, 900, this.value);
});
function chkId(val) {
    var idRE = /^[a-zA-z0-9]{5,20}$/;
    if (val.length === 0) {
        hit.innerHTML = "";
    return false;
    } else {
        var http = new XMLHttpRequest();
        http.onreadystatechange = function () {
    if(this.status == 200 && this.readyState == this.DONE) {
        if(JSON.parse(http.response)['result'] == 'y' || idRE.test(userId.value) == 0){
            hit.style.color = "red";
            hit.innerHTML = " 5~20자제한, 사용 중인 아이디 이거나 특수문자 사용 <br><br>";
            userId.value = "";
        }else {
            hit.style.color = "green";
            hit.innerHTML = "사용 가능한 아이디<br><br>";
            inputBlank()
            }
        }
    }
    http.open("GET","chkId.php?q="+val,true);
    http.send();
    }
}
// -----------------------------------------------------
var phone = document.querySelector("#phone");
var phone_chk = document.querySelector("#phoneChk");
phone.addEventListener("keyup", function(e) {
    clearTimeout(timer);
    timer = setTimeout(fn_submit, 900, this.value);
});
function fn_submit() {
    var regPhone = /^01([0|1|6|7|8|9])-?([0-9]{3,4})-?([0-9]{4})$/;
    if (regPhone.test(phone.value) === true) {
        phone_chk.style.color = "green";
        phone_chk.innerHTML = "입력된 값은 휴대전화번호입니다.";
    }else{
        phone_chk.style.color = "red";
        phone_chk.innerHTML = "입력된 값은 휴대전화번호가 아닙니다.";
        phone.value = "";
    }
}