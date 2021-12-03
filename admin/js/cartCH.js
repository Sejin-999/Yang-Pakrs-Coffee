let totalPrice = document.getElementById('cart-total-price').innerHTML;
  console.log(totalPrice);
let checkPrice = document.getElementById('check-price');
let checkBtn = document.getElementById('btn-purchase');
//let aaaa = document.getElementById('sss').innerText;

checkBtn.addEventListener('click',CheckPrcieF);

function CheckPrcieF(){
  console.log(totalPrice.value);
  if(checkPrice.value !== totalPrice.value){
    alert('입력하신 총가격이 잘못 되었습니다. 확인 부탁드립니다.');
    checkPrice.focus;
  }else{
        location.href='/index.html';
  }
}