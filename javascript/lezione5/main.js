function showModal(id) {
    var sfondo = document.getElementById('sfondo-nero');
    sfondo.classList.remove('hidden');

    var modal = document.getElementById('modal');
    modal.classList.remove('hidden');

    var link = document.getElementById('link-elimina');
    link.href = 'delete.php?id=' + id;
}

function closeModal() {
    var sfondo = document.getElementById('sfondo-nero');
    sfondo.classList.add('hidden');

    var modal = document.getElementById('modal');
    modal.classList.add('hidden');
}