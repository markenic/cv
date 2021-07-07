const changeActive = elem =>{
    $(elem).siblings().removeClass("active")
    $(elem).addClass("active")
}

$(function() {
    const d = new Date();
    const date = d.getFullYear()-2002
    $(".age")[0].innerText=date
});
let modal = $(".modal")[0]
let imgs = $("img")
let modalImg = $(".modal-content")[0];
;
for (let i = 0; i < imgs.length; i++) {
    imgs[i].onclick = function(){
        modal.style.display = "block"
        modalImg.src = imgs[i].src
      }
}
let span = $(".close")[0]
span.onclick = function() { 
  modal.style.display = "none"
}
