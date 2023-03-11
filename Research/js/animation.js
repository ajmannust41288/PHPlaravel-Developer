// var a=0;
// var id=setInterval(Anim,1000);
// function Anim(){
//     a=a+10;
//     // console.log(a);
//     if(a==140){
// clearInterval(id);
//     }else{
//         var target=document.getElementById("test");
//         target.style.marginLeft=a + 'px';
//     }
   
// }
//----------------------------animate width
// var a=0;
// var id=setInterval(Anim,1000);
// function Anim(){
//     a=a+10;
//     if(a==200){
// clearInterval(id);
//     }else{
//         var target=document.getElementById("test");
//         target.style.width=a + 'px';
//     }
   
// }
//-------------------------------------------settimeout()
// var id=setTimeout(Anim,5000);
// function Anim(){
//     var target=document.getElementById("test");
//     target.style.width="500px";
// }
// function stopAnimation(){
//     clearTimeout(id);
// }
//------------------------------------------example 
var id=setTimeout(function()
    {
        var target=document.getElementById("test");
        target.style.width="500px";
    }
,5000);
function stopAnimation(){
    clearTimeout(id);
}