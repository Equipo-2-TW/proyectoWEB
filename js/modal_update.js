const modal_  = document.querySelectorAll("#editor_modal")
const card_   = document.querySelectorAll("#editor_card")

modal_.forEach( modal => {
    document.body.addEventListener("click", () => {
        modal.classList.remove('active')
    })
})

card_.forEach( card => {
    card.addEventListener("click", e => e.stopPropagation())
})
