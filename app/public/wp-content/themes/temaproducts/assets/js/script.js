window.addEventListener("DOMContentLoaded",()=>{
    let $btnHamb = document.querySelector(".header-bar a");
    let $Menu = document.querySelector(".header_menu-responsive");

    $Menu.hidden = true;
    $btnHamb.addEventListener("click", (e)=>{
        e.preventDefault();

        $Menu.hidden = !$Menu.hidden
        $Menu.classList.toggle("menu_active");
    })
})