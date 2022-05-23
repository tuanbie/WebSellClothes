// xữ lý thao tác xổ phần danh mục
const itemsliderbar = document.querySelectorAll(".category-left-li")
itemsliderbar.forEach(function(menu,index){
    menu.addEventListener("click",function(){
        menu.classList.toggle("block")
    })
})

// xữ lý thay đổi ảnh trên product

const bigImg = document.querySelector(".product-conten-left-big-img img")
const smalImg = document.querySelector(".product-conten-left-small-img img")
smalImg.forEach(function(item,x){
    item.addEventListener("click", function(){
        bigImg.src = item.src
    })
})

// xữ lý nút xổ thông tin product

const botton = document.querySelector(".product-conten-right-buttom-top");
      if (botton) {
        botton.addEventListener("click", function () {
          document
            .querySelector(".product-conten-right-buttom-conten")
            .classList.toggle("activeb");
        });
      }