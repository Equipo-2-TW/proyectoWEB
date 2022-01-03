const modal_  = document.querySelector("#editor_modal")
const card_   = document.querySelector("#editor_card")

document.body.addEventListener("click", () => {
    modal_.classList.remove('active')
})

card_.addEventListener("click", e => {
    e.stopPropagation()
})
