function showModal() {
    var sfondo = document.getElementById('sfondo-nero');
    sfondo.classList.remove('hidden');

    var modal = document.getElementById('modal');
    modal.classList.remove('hidden');
}

function closeModal() {
    var sfondo = document.getElementById('sfondo-nero');
    sfondo.classList.add('hidden');

    var modal = document.getElementById('modal');
    modal.classList.add('hidden');
}