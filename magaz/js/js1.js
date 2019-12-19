function del() {
    let elem = document.getElementById("item");
    elem.parentNode.removeChild(elem);
}

function plus() {
    let plus = document.getElementById('val');
    plus.value = +plus.value + 1;
}

function minus() {
    let minus = document.getElementById('val');
    minus.value = +minus.value - 1;
}
