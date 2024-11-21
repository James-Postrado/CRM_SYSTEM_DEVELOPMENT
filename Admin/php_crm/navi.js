const hb = document.querySelector("#toggle-btn");

hb.addEventListener("click", function(){
    document.querySelector("#sidebar").classList.toggle("expand");
})