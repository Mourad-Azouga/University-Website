function toggleDiv(id) {
    var div = document.getElementById(id);

    if (div.style.display === 'none') {
        div.style.display = 'block';
    } else {
        div.style.display = 'none';
    }
}
function untoggleall() {
    var empl = document.getElementById('emploi');
    var akhra = document.getElementById('annonces');
    akhra.style.display = 'none';
    empl.style.display = 'none';
}