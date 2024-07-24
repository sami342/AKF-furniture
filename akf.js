const bar=document.getElementById("bars");
const nav=document.getElementById("navbar");
const close=document.getElementById("close");
const user=document.getElementById("user");
const input=document.getElementById("input");
const update=document.getElementById("update");
if(bar){
    bar.addEventListener('click', () => {
        nav.classList.add("active");
    })
}
if(close){
    close.addEventListener('click', () => {
        nav.classList.remove("active");
})
}
if(user){
    user.addEventListener('click',()=>{
        alert("welcome");
        update.classList.add("show");

        
})
}
