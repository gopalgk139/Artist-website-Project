window.onload = function(){
   //cart box
   const shoppingcart = document.querySelector('.shoppingcart');
   const cartclsbtn = document.querySelector('.fa-close');
   const cartbox = document.querySelector('.cartbox');
   shoppingcart.addEventListener("click",function(){
       cartbox.classList.add('active');
   });
   cartclsbtn.addEventListener("click",function(){
       cartbox.classList.remove('active');
   });

}
