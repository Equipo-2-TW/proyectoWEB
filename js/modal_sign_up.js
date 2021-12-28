const registrarse = document.querySelector("#registrarse")
const modal = document.querySelector("#modal")
const card = document.querySelector("#card")

document.body.addEventListener("click", () => {
    modal.classList.remove('active')
})
registrarse.addEventListener("click", e => {
    e.preventDefault()
    e.stopPropagation()
    modal.classList.toggle('active')
})
card.addEventListener("click", e => {
    e.stopPropagation()
})
