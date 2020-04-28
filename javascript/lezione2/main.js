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

function changeColorToOrnella () {
    var select = document.getElementById('selected-color');
    var color = select.value;

    var elements = document.getElementsByClassName('ornella');
    for (var i = 0; i < elements.length; i++) {
        elements[i].style.color = color;
    }
}

function changeColorToMiriana () {
    var select = document.getElementById('selected-color');
    var color = select.value;

    var elements = document.getElementsByClassName('miriana');
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

function addBorderedToThis (element) {
    element.classList.add('bordered');
    element.innerHTML = 'Eccoti qui amore mio :)';
    element.style.background = 'lightyellow';
}

function removeBorderedToThis (element) {
    element.classList.remove('bordered');
    element.innerHTML = 'Sei andato via da me :\'(';
    element.style.background = 'white';
}

function addColorBorderToThis (element) {
    var select = document.getElementById('selected-color');
    var color = select.value;

    var select2 = document.getElementById("selected-color2");
    var color2 = select2.value;

    var select3 = document.getElementById("selected-color3");
    var color3 = select3.value;

    element.style.border = '2px solid ' + color;
    element.style.background = color2;
    element.style.color = color3;
}

function removeColorBorderToThis (element) {
    element.style.border = 'none';
    element.style.background = 'none';
    element.style.color = 'black';
}