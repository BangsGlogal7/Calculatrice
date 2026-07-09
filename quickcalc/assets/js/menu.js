//Definiton de constante pour recuperer l'ID des des balises
const menuItems = document.querySelectorAll(".menu-item");
const menuBtn = document.getElementById('menuBtn');
const mobileMenu = document.getElementById('mobileMenu');

menuBtn.addEventListener('click', ()=>{
    menuBtn.classList.toggle("active")
    mobileMenu.classList.toggle("show");
   
});

document.addEventListener('click', (event)=>{
    if (!mobileMenu.contains(event.target) && !menuBtn.contains(event.target)) {
        menuBtn.classList.remove('active');
        mobileMenu.classList.remove('show');
    }
});

menuItems.forEach(item => {
    item.addEventListener('click', ()=>{
        const action = item.dataset.action;
        switch(action){

            case "about":
                window.location.href = "pages/about.php";
                break;

            case "clear-history":
                alert("Historique supprimé.");
                break;

            case "toggle-theme":
                document.body.classList.toggle("dark");
                break;

        }
    });
});