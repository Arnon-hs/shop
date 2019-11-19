function countPrice(){
    var  priceProduct= document.getElementById("price_product");
    var  kolvo= document.getElementById("example-number-input");
    var  selected= document.getElementById("inlineFormCustomSelect").options.selectedIndex;
    var  ves=document.getElementById("inlineFormCustomSelect").options[selected].value;
    var b=price;
    var a=kolvo.value;
    var c=ves;
    console.log(a,b,c);
    var d=a*b*c;
    priceProduct.innerText=d;
}
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