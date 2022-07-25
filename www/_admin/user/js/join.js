let userId = document.querySelector("#userId");
let hit = document.querySelector("#hit");
userId.focus();

let timer = null;

userId.addEventListener("keyup", function(e) {
  clearTimeout(timer); //�ѹ� ����
  timer = setTimeout(chkId, 900, this.value);
});

function chkId(val) {
  if (val.length === 0) {
    hit.innerHTML = "";
    return false;
  } else {
    var xmlhttp = new XMLHttpRequest();
    //console.dir(xmlhttp);
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        if(this.responseText){
            userId.style.backgroundColor="red";
            userId.style.color="yellow";
            hit.innerHTML = "<b class='err'>��� ���� ���̵�</b>"
        }else{
            hit.innerHTML = "<b class='ok'>��� ������ ���̵�</b>"
        }
      }
    //    else {
    //     hit.innerHTML = "����";
    //   }
    };
    xmlhttp.open("GET","chkId.php?q="+val,true);
    xmlhttp.send();
  }
}