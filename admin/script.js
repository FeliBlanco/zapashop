function changeTalle(value) {
    if(value === "0") {
        document.getElementById("agtalle").style.display = "block"
        document.getElementById("tallecolores").style.display = "none"
    } else {
        document.getElementById("agtalle").style.display = "none"
        document.getElementById("tallecolores").style.display = "block"
    }
}

function agregarTalle() {
    const value = document.getElementById("tallea")
    const select = document.getElementById("talleselect")
    if(value) {
        select.innerHTML += `<option value="${value.value}">${value.value}</option>`
        select.value = value.value
        value.value = ""
        changeTalle(value.value)
    }

}