console.log("연결확인");

let removeitem = document.querySelectorAll(".btn-delete");
//console.log(removeitem) // 삭제버튼 연결 확인
for(let i=0; i<removeitem.length; i++){
  const reit = removeitem[i]; //reit === removeitem
  reit.addEventListener('click',function(e){
    //console.log('삭제버튼확인용');
    let btnclick = e.target;
    btnclick.parentElement.parentElement.remove();
  })
}


function updateTotal(){
  let cartItemBox = document.getElementsByClassName('cart-list-items')[0];
  let cartItems = cartItemBox.getElementsByClassName('cart-list-items-details');

  for(let i=0; i<cartItems.length; i++){
    let cartItem = cartItems[i];
    let priceItem = cartItem.getElementsByClassName('cart-list-items-details-ch-price')[0];
    let quanItem = cartItem.getElementsByClassName('cart-list-items-details-ch-quan')[0];
    console.log(priceItem,quanItem);
  }
}