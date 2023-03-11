// var element1;
// document.getElementById("inner").parentElement.style.background="green";
// element1=document.getElementById("inner").parentElement;
// console.log(element1);
//---------------------------example 2
// var element;
// document.getElementById("Child-c").parentElement.style.background="yellow";
// element=document.getElementById("Child-c").parentElement;
// console.log(element);
//------------------------------------example 3
// var element;
// element=document.getElementById("outer").children;
// console.log(element);//length 2
//----------------------------------example 4
// var element;
// element=document.getElementById("inner").children;
// console.log(element);//length 6
//---------------------------------example 5
// var element;
// element=document.getElementById("inner").children[1];
// console.log(element);//
//-----------------------------example 6
// var element;
// document.getElementById("inner").children[1].style.background="red";
// element=document.getElementById("inner").children[1];
// console.log(element);//
//----------------------------------example 7
// var element;
// document.getElementById("inner").children[0].style.background="green";
// element=document.getElementById("inner").childNodes;
// console.log(element);//
//-------------------------------example 8
// var element;
// element=document.getElementById("inner").firstElementChild;
// console.log(element);//
//--------------------------example 9
// var element;
// element=document.getElementById("inner").firstElementChild.innerHTML;
// console.log(element);//
//---------------------------example 10
// var element;
// document.getElementById("inner").firstElementChild.style.background="green";
// element=document.getElementById("inner").firstElementChild.innerHTML;
// console.log(element);//
//---------------------------example 11
// var element;
// document.getElementById("outer").firstElementChild.style.background="yellow";
// element=document.getElementById("outer").firstElementChild;
// console.log(element);//
//--------------------------example 12
// var element;
// document.getElementById("inner").parentElement.style.background="yellow";
// document.getElementById("outer").lastElementChild.style.background="red";
// element=document.getElementById("outer").lastElementChild;
// console.log(element);//
//-----------------------------example 13
// var element;
// document.getElementById("inner").parentElement.style.background="yellow";
// document.getElementById("outer").lastElementChild.style.background="red";
// document.getElementById("inner").children[1].style.background="yellowgreen";
// document.getElementById("inner").children[2].style.background="blue";
// document.getElementById("inner").children[3].style.background="crimson";
// document.getElementById("inner").children[4].style.background="brown";
// document.getElementById("inner").lastElementChild.style.background="green";
// element=document.getElementById("outer").lastElementChild;
// console.log(element);//
//--------------------------example 14
// var element;
// var a=document.getElementById("inner").childNodes[1].style.background="yellow";
// document.getElementById("inner").parentElement.style.background="yellow";
// document.getElementById("outer").lastElementChild.style.background="red";
// document.getElementById("inner").children[1].style.background="yellowgreen";
// document.getElementById("inner").children[2].style.background="blue";
// document.getElementById("inner").children[3].style.background="crimson";
// document.getElementById("inner").children[4].style.background="brown";
// document.getElementById("inner").lastElementChild.style.background="green";
// element=document.getElementById("outer").lastElementChild;
// console.log(element);//
// console.log(a);
//--------------------------------example 15
// var element;
// element=document.getElementById("inner").lastChild;
// console.log(element);//
//---------------------------------example 16
// var element;
// element=document.getElementById("inner").firstChild;
// console.log(element);//text 
//-----------------------------------example 17
// var element;
// element=document.getElementById("Child-c").nextElementSibling;
// console.log(element);//
//---------------------------------------
// var element;
// element=document.getElementById("Child-c").previousElementSibling;
// console.log(element);//
//-----------------------------------
// var element;
// document.getElementById("Child-c").previousElementSibling.style.background="green";
// element=document.getElementById("Child-c").previousElementSibling.innerHTML;
// console.log(element);//
//------------------------------------------------
// var element;
// document.getElementById("Child-c").nextElementSibling.style.background="yellow";
// element=document.getElementById("Child-c").nextElementSibling;
// console.log(element);//
//---------------------------------------example 18
// var element;
// document.getElementById("Child-c").nextElementSibling.style.background="yellow";
// element=document.getElementById("Child-E").nextElementSibling;
// console.log(element);//null
//-----------------------------example 19
// var element;
// var a=document.getElementById("Child-c").previousSibling;
// element=document.getElementById("Child-E").nextSibling;
// console.log(a);//text
// console.log(element);//text
//----------------------------example 20
// var element;
// var a=document.getElementById("Child-c").previousSibling;
// element=document.getElementById("Child-E").nextSibling;
// console.log(a);//text
// console.log(element);//text
//----------------------------------------example 21
// var element=document.createElement("h2");
// var newtext=document.createTextNode("this is new file");
// var newcomment=document.createComment("this is comment");
// console.log(element);
// console.log(newtext);
// console.log(newcomment);
//-----------------------------------example 22
// var element=document.createElement("h2");
// var newtext=document.createTextNode("this is new file");
// element.appendChild(newtext);
// var para=document.getElementById("Child-head");
// var newcomment=document.createComment("this is comment");
// para.insertBefore(element,para.childNodes[1]);
//=====================================example 23
// var newelement=document.createElement("h2");
// var nexttext=document.createTextNode("This is ajman");
// newelement.appendChild(nexttext);
// var target=document.getElementById("test");
// target.insertAdjacentElement("beforebegin",newelement);
//------------------------------------------------------example 24
// var newelement=document.createElement("h2");
// var nexttext=document.createTextNode("This is ajman");
// newelement.appendChild(nexttext);
// var target=document.getElementById("test");
// target.insertAdjacentElement("afterbegin",newelement);
//-----------------------------------------------example 25
// var target=document.getElementById("test");
// var newelement="<h2>This is Headings </h2>";
// target.insertAdjacentHTML("afterbegin",newelement);
//---------------------------------------example 26
// var target=document.getElementById("test");
// var newText="This is string Text ";
// target.insertAdjacentText("afterbegin",newText);
//--------------------------------------example 27
// var newelement=document.createElement("li");
// var newText=document.createTextNode("Wow new Text");
// newelement.appendChild(newText);
// var target=document.getElementById("list");
// var oldElement=target.children[0];
// target.replaceChild(newelement,oldElement);
//---------------------------------------example 28
// var newelement=document.createElement("li");
// var newText=document.createTextNode("Wow new Text");
// newelement.appendChild(newText);
// var target=document.getElementById("list");
// var oldElement=target.children[0];
// target.removeChild(oldElement);
///////////////////////////////////////
// document.getElementById("id02").innerHTML;
// var a = document.getElementById("id01").firstChild.nodeValue;
// console.log(a);
//=-==============================example 29
// var a = document.getElementById("id01").childNodes[0].nodeValue;
// console.log(a);
//===========================example 30
// var a = document.getElementById("demo").innerHTML=document.body.innerHTML;
// console.log(a);
//========================example 31
// var a = document.getElementById("demo").innerHTML=document.documentElement.innerHTML;
// console.log(a);
//================================example 32 nodeName
// var a = document.getElementById("id01").nodeName;
// console.log(a);
//------------nodevalue 
// var a = document.getElementById("id01").nodeValue;
// console.log(a);
//-------------nodetype
// var a = document.getElementById("id01").nodeType;
// console.log(a);
//--------------------------------example 33
// const para=document.createElement("p");
// const node=document.createTextNode("This is new  paragraph which i am creating ");
// para.appendChild(node);
// const element=document.getElementById("div1");
// element.appendChild(para);
//==================================example 34 creating new elements
// const paragraph=document.createElement("p");
// const node=document.createTextNode("This is my last graph which i have studied...");
// paragraph.appendChild(node);
// const element=document.getElementById("div1");
// element.appendChild(paragraph);
//================================example 35
// const paragraph=document.createElement("p");
// const node=document.createTextNode("This is my last graph which i have studied...");
// paragraph.appendChild(node);
// const element=document.getElementById("div1");
// const child=document.getElementById("p2");
// element.insertBefore(paragraph,child);
//================================example 36

// const child=document.getElementById("p2");
// child.remove();
//==================================example 37
// const parent=document.getElementById("div1");
// const child=document.getElementById("p1");
// parent.removeChild(child);
//---------------------------------example 38
// const para=document.createElement("p");
// const node=document.createTextNode("This is new written paragraph");
// para.appendChild(node);
// const parent=document.getElementById("div1");
// const child=document.getElementById("p1");
// parent.replaceChild(para,child);
//--------------------------------example 39 CloneNode()
// var target=document.getElementById("list1").children[0];
// var copyElement=target.cloneNode(true);
// document.getElementById("list2").appendChild(copyElement);
// console.log(copyElement);
//--------------------------------example 40
// var target=document.getElementById("list1").children[0];
// var copyElement=target.cloneNode(true);
// document.getElementById("test").appendChild(copyElement);
// console.log(copyElement);
//------------------------------------------example 41
// var parentElement=document.getElementById("test");
// var target=document.getElementById("abc");
// var find=parentElement.contains(target);
// console.log(find);//false
//-----------------------------------example 42
// var parentElement=document.getElementById("test");
// var target=document.getElementById("abc");
// var find=parentElement.contains(target);
// console.log(find);//true
//----------------------------------example 43
// var target=document.getElementById("test");
// var find=target.hasAttribute("class");
// console.log(find);//
//----------------------------------example 44
// var target=document.getElementById("test");
// var find=target.hasChildNodes();
// console.log(find);//true
//////////////////-----------------example 45
// var target1=document.getElementById("list-1").firstElementChild;
// var target2=document.getElementById("list-2").firstElementChild;
// var equal=target1.isEqualNode(target2);
// console.log(equal);//false
//---------------------------------------example 46
// var target1=document.getElementById("list-1").firstElementChild;
// var target2=document.getElementById("list-2").children[1];
// var equal=target1.isEqualNode(target2);
// console.log(equal);//true
//-------------------------------------------example 47
// var target1=document.getElementById("list-1").firstElementChild;
// var target2=document.getElementById("list-2").children[2];
// var equal=target1.isEqualNode(target2);
// console.log(equal);//false 
//=====================================example 48
// var target1=document.getElementById("list-1").firstElementChild;
// var target2=document.getElementById("list-2").children[1];
// var equal=target1.isEqualNode(target2);
// console.log(equal);//checking attribute name true 
///=====================================example 49
var target1=document.getElementById("list-1").firstElementChild;//attribute value
var target2=document.getElementById("list-2").children[1];//no abc value 
var equal=target1.isEqualNode(target2);
console.log(equal);//checking attribute value  false



