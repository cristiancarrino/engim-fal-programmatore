function showConfirm (id) {
    var element = document.getElementById(id);
    element.classList.remove('hidden');
}

function hideConfirm (id) {
    event.preventDefault(); // Non fa fare all'elemento cliccato quello che farebbe normalmente
    var element = document.getElementById(id);
    element.classList.add('hidden');
}