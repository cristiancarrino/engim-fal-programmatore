function changeColorToTitle () {
    var select = document.getElementById('selected-color');
    var color = select.value;

    var element = document.getElementById('title');
    element.style.color = color;
}

function changeColorToH2 () {
    var select = document.getElementById('selected-color');
    var color = select.value;

    var elements = document.getElementsByTagName('h2');
    for (var i = 0; i < elements.length; i++) {
        elements[i].style.color = color;
    }
}