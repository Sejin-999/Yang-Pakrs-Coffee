// get id start
let id = document.getElementById('M_num');
let Uname = document.getElementById('M_name');
let pass = document.getElementById('M_password');
let passCH = document.getElementById('password2'); //passCH -> 비밀번호 재확인
let address1 = document.getElementById('M_address1'); //addre1 -> address (집주소)
let address2 = document.getElementById('M_address2'); // addre2 -> address(상세주소)
let addCH = document.getElementById('join_add_ch'); // address 확인 객체
// get id end

// event Listener start  
Uname.addEventListener('click',checkId); //id 체크 -> name
pass.addEventListener('click',checkName); //name 체크 -> pass
passCH.addEventListener('click',checkPass);  //pass 체크 -> passCH
passCH.addEventListener('mouseout',checkPassCH); //passCH 체크 
//addCH.addEventListener('click',checkadd); //address 체크
// event Listener end

//check fuction start

function checkId(){  
  if(id.value.length < 6 || id.value.length >13){
    alert("아이디는 6~12 자리 사이로 입력해 주세요");
    id.focus();
  }
}

function checkName(){
  if(Uname.value.length <= 2 || Uname.value.length > 5){
    alert("이름은 2자리 이상 5자리 이하로 입력해 주세요");
    Uname.focus();
  }
}

function checkPass(){
  if(pass.value.length < 8 || pass.value.length > 12){
    alert("비밀번호는 8자리에서 12자리로 입력해 주세요");
    pass.focus();
  }
  // 비밀번호에 숫자 와 영문이 들어있는지 확인
  if(pass.value.length >= 8 && pass.value.length <= 12){
    var patt = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;
    if(!patt.test(pass.value)){
      alert("비밀번호에는 영문,숫자가 적어도한개이상 들어가야합니다.");
      pass.focus();
    }
  }
}

function checkPassCH(){
  if(pass.value !== passCH.value){
    alert("비밀번호가 달라요! 다시한번 확인 해주세요");
    passCH.focus();
  }

}

function checkadd(){
  if(address1.value === " "){
    alert("집주소를 입력해주세요");
    address1.focus();

    //집주소가 입력된것을 확인한 후 상세주소를 체크
    if(address2.value === " "){
      alert("상세주소를 입력해주세요");
      address2.focus();
    }

  }
}

// check function end