// var element;
// element=document.getElementById("header").innerHTML;
// console.log(element);
//----------------------example2
// var element;
// element=document.getElementById("header").getAttribute('class');
// console.log(element);
//--------------------------example3
// var element;
// element=document.getElementById("header").getAttribute('style');
// console.log(element);
//-------------------------example 4
// var element;
// element=document.getElementById("header").getAttribute('onClick');
// console.log(element);
//----------------------example 5
// var element;
// element=document.getElementById("header").getAttributeNode('style').value;
// console.log(element);
//---------------------------example 6
// var element;
// element=document.getElementById("header").getAttributeNode('style').name;
// console.log(element);
//----------------------------example 7
// var element;
// element=document.getElementById("header").attributes;
// console.log(element);
//-------------------------example 8
// var element;
// element=document.getElementById("header").attributes[2].name;
// console.log(element);
//-----------------example 9 setAttribute
// var element;
// document.getElementById("header").setAttribute("class","ayz");
// element=document.getElementById("header").getAttribute("class");
// console.log(element);//ayz
//-----------------------example 10
// var element;
// document.getElementById("header").setAttribute("style","border:1px solid yellow;");
// element=document.getElementById("header").getAttribute("style");
// console.log(element);//border:1px solid yellow;
//------------------------example 11
// var element;
// document.getElementById("header").attributes[2].value="border:2px solid green;";
// element=document.getElementById("header").getAttribute("style");
// console.log(element);//border:2px solid green;
//-------------------------example 12
// var element;
// document.getElementById("header").attributes[1].value="power";
// element=document.getElementById("header").getAttribute("class");
// console.log(element);//power
//-----------------------------example 13
// var element;
// document.getElementById("header").removeAttribute("style");
// element=document.getElementById("header").getAttribute("style");
// console.log(element);//null
//-----------------------------example 14
// var element;
// document.querySelector("#header").innerHTML="<h1>WoW </h1>";
// element=document.querySelector("#header").getAttribute("class");
// console.log(element);//abs
//-------------------------------example 15
// var element;
// element=document.querySelectorAll("ul")[1];
// console.log(element);
//-------------------------------example 16
// var element;
// element=document.querySelectorAll("#header h1")[1].innerHTML;
// console.log(element);//Yahoo Baba 23
//-------------------------example 17
// var element;
// element=document.querySelector("#header").style.color;
// console.log(element);//red
//----------------------example 18
// var element;
// document.querySelector("#header").style.backgroundColor="tan";
// document.querySelector("#header").style.color="blue";
// element=document.querySelector("#header").style.color;
// console.log(element);//
//-------------------------------example 19
// var element;
// document.querySelector("#header").className="abc xyz";
// element=document.querySelector("#header").className;
// console.log(element);//return string
//-----------------------------example 20
// var element;
// document.querySelector("#header").classList="abc xyz";
// element=document.querySelector("#header").classList;
// console.log(element);//array retun
//-------------------------example 21
// var element;
// document.querySelector("#header").classList.add("xyz","efg");
// element=document.querySelector("#header").classList;
// console.log(element);//array retun
//-----------------------example 22
// var element;
// document.querySelector("#header").classList.remove("xyz");
// element=document.querySelector("#header").classList;
// console.log(element);//array retun
//-----------------------------example 23
// var element;
// document.getElementById("header").onclick=abc;
// function abc(){
//     document.getElementById("header").style.background="green";
// }
//-------------------------------example 24
// var element;
// document.getElementById("header").onmouseenter=abc;
// document.getElementById("header").onclick=abz;
// function abc(){
//     document.getElementById("header").style.background="green";
// }
// function abz(){
//     document.getElementById("header").style.background="yellogreen";
// }
//-------------------------example 25
// var element;
// document.getElementById("header").addEventListener("mouseenter",abc);
// document.getElementById("header").addEventListener("click",function(){
//     document.getElementById("header").style.border="10px solid red";
//     document.getElementById("header").style.background="tan";
// });
// function abc(){
//     document.getElementById("header").style.background="green";
// }
//-----------------------------example 26
// var element;
// document.getElementById("header").addEventListener("click",abc);
// document.getElementById("header").addEventListener("click",function(){
//     this.style.border="7px solid black";

// });
// function abc(){
//     document.getElementById("header").style.background="green";
// }
//-------------------------------example 27
// var element;
// document.getElementById("header").addEventListener("click",abc);
// function abc(){
//     document.getElementById("header").classList.add("xyz");
// }
//------------------------------example 28
// var element;
// document.getElementById("header").addEventListener("click",abc);
// function abc(){
//     document.getElementById("header").classList.add("xyz", "efg");
//     element=document.getElementById("header").classList;
//     console.log(element);
// }
//-------------------------example 29
// var element;
// document.getElementById("header").addEventListener("click",abc);
// function abc(){
//     document.getElementById("header").classList.remove("xyz");
//     element=document.getElementById("header").classList;
//     console.log(element);
// }
//------------------------------example 30
// var element;
// element= document.getElementById("header").classList.length;
// console.log(element);
//-------------------------example 31
// var element;
// document.getElementById("header").classList.toggle("abc");
// element=document.getElementById("header").classList;
// console.log(element);
//-----------------------------------example 32
// var element;
// // document.getElementById("header").classList.toggle("abc");
// document.getElementById("header").addEventListener("click",abc);
// function abc(){
//     element=document.getElementById("header").classList.item(1);
// console.log(element);
// }
//------------------------------------------example 33
// var element;
// // document.getElementById("header").classList.toggle("abc");
// document.getElementById("header").addEventListener("click",abc);
// function abc(){
//     element=document.getElementById("header").classList.item(0);
// console.log(element);//abc 
// }
//------------------------------------example 34
var element;
document.getElementById("header").addEventListener("click",abc);
function abc(){
    element=document.getElementById("header").classList.contains("xyz");
console.log(element);//
}





