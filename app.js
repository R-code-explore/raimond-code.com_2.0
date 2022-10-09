var phoneMenu = document.getElementById('block_phone_menu')

function openMenu(){
    phoneMenu.style.transform = "translateX(0)"
}
function closeMenu(){
    phoneMenu.style.transform = "translateX(100%)"
}

//To_top btn

var toTop = document.getElementById('tothetop')

window.addEventListener("scroll", () => {
    if(document.documentElement.scrollTop > 100){
        toTop.style.transform = "translateX(0)"
    }else{
        toTop.style.transform = "translateX(200%)"
    }
})

//about id redirection
const desktopAbout = document.querySelector('.about_desktop')

function aboutRedirection(){
  if(desktopAbout.style.display != "none"){
    location.href='./index.php#about_desktopId'
  }else{
    location.href='./index.php#about_id'
  }
}