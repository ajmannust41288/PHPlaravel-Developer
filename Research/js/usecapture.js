document.querySelector("#inner").addEventListener("mouseleave",abc);
document.querySelector("#outer").addEventListener("click",xyz);
function abc(){
    document.getElementById("outer").style.background="green";
}
function xyz(){
    document.getElementById("inner").removeEventListener("mouseleave",abc);
}