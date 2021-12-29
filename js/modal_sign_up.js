const registrarse = document.querySelector("#registrarse")
const modal   = document.querySelector("#modal")
const card    = document.querySelector("#card")
const select  = document.querySelector("#select_user_sign_up")
const email2  = document.querySelector("#email2")
const email2l = document.querySelector("#email2l")

const update_fields = () => {
    if (select.value == "admin") {
        email2.classList.add("admin")
        email2l.classList.add("admin")
    }
    else {
        email2.classList.remove("admin")
        email2l.classList.remove("admin")
    }
}

document.body.addEventListener("click", () => {
    modal.classList.remove('active')
})

registrarse.addEventListener("click", e => {
    e.preventDefault()
    e.stopPropagation()
    modal.classList.toggle('active')
    update_fields()
})

card.addEventListener("click", e => {
    e.stopPropagation()
})

select.addEventListener("change", update_fields)
