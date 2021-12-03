let userId = document.querySelector("#join_id");
let userPass = document.querySelector("#join_ps");

userId.addEventListener('click',checkId);

function checkId(){
  if(userId.value.length < 8 || userId.value.length > 13){
    alert("8~12자리수자");
    userId.select();
  }

function checkPs(){
  if(userPass.value.length < 10 || userPass.value.length > 14){
    alert("10~14자리수자");
    userPass.select();
  }