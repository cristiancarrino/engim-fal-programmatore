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

function changeColorToH3 () {
    var select = document.getElementById('selected-color');
    var color = select.value;

    var elements = document.getElementsByTagName('h3');
    for (var i = 0; i < elements.length; i++) {
        elements[i].style.color = color;
    }
}

function addBorderedToH3 () {
    var elements = document.getElementsByTagName('h3');
    for (var i = 0; i < elements.length; i++) {
        elements[i].classList.add('bordered');
    }
}

function removeBorderedToH3 () {
    var elements = document.getElementsByTagName('h3');
    for (var i = 0; i < elements.length; i++) {
        elements[i].classList.remove('bordered');
    }
}

function addRedToOrnella () {
    var elements = document.getElementsByClassName('ornella');
    for (var i = 0; i < elements.length; i++) {
        elements[i].classList.add('red');
    }
}

function removeRedToOrnella () {
    var elements = document.getElementsByClassName('ornella');
    for (var i = 0; i < elements.length; i++) {
        elements[i].classList.remove('red');
    }
}