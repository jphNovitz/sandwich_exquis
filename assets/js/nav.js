document.addEventListener("DOMContentLoaded", function() {
    if (window.screen.width < 765) {
        const menu = document.getElementById('nav-mobile')
        const triggers = document.getElementsByClassName('nav-trigger')

        if (triggers){
            Array.from(triggers).forEach( trigger => trigger.addEventListener('click', (e)=>{
                e.stopPropagation()
                menu.classList.toggle('mt-0')
            }))
        }
    }
})