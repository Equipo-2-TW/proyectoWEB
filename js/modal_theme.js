const modal_themes  = document.querySelectorAll("#modal_theme")
const card_themes   = document.querySelectorAll("#card_theme")

modal_themes.forEach( modal => {
    document.body.addEventListener("click", () => {
        modal.classList.remove('active')
    })
})

card_themes.forEach( card => {
    card.addEventListener("click", e => e.stopPropagation())
})
