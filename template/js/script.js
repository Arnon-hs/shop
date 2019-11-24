function countPrice(){
    var  priceProduct= document.getElementById("price_product");
    var  kolvo= document.getElementById("example-number-input");
    var b=price;
    var a=kolvo.value;
    var d=a*b;
    priceProduct.innerText=d;
}
// function addhref(){

//     var kolvo= document.getElementById("example-number-input").value;
//     var add = document.getElementById("buttonAdd");
//     console.log(href);
//     href+=kolvo;
//     console.log(href);
//     add.href=href;
// }
// function showWindow() {
//     var el = document.getElementById("content_window");
//     // var el1 = document.getElementsByClassName("login");
//     // el1.style.position='absolute';
//     el.style.display = 'block';
//     el.style.zIndex='1000';
// }
// function closeWindow(){
//     var el = document.getElementById("content_window");
//     el.style.display='none';
// }