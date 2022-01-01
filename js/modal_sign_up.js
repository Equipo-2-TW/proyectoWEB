const link   = document.querySelector("#registrarse")
const modal  = document.querySelector("#modal")
const card   = document.querySelector("#card")
const select = document.querySelector("#select_user_sign_up")
const group  = document.querySelector("#group")
const groupl = document.querySelector("#groupl")
const idl    = document.querySelector("#idl")

const update_fields = () => {
    group.classList.toggle("admin", select.value == "admin")
    groupl.classList.toggle("admin", select.value == "admin")
    idl.innerHTML = `Numero de ${select.value == "alumno" ? "boleta:" : "empleado:"}`
}

document.body.addEventListener("click", () => {
    modal.classList.remove('active')
})

link.addEventListener("click", e => {
    e.preventDefault()
    e.stopPropagation()
    modal.classList.toggle('active')
    update_fields()
})

card.addEventListener("click", e => {
    e.stopPropagation()
})

select.addEventListener("change", update_fields)
