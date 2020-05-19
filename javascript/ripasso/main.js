// Esercizio 01
var title = "Usare un ciclo for per stampare i numeri da 1 a 100 separata da virgola e spazio" +
            "Senza usare gli array.";
var esercizio01 = document.getElementById('esercizio-01');
esercizio01.textContent = title;

var result = '';
for (var i = 1; i <= 100; i++) {
    result = result + i + ', ';
}

var risultato01 = document.getElementById('risultato-01');
risultato01.textContent = result;

// Esercizio 02
var title = "Usare un ciclo for per stampare i numeri da 1 a 100 separata da virgola e spazio." +
            "Senza usare gli array." +
            "Il numero 100 non deve avere virgola e spazio";
var esercizio02 = document.getElementById('esercizio-02');
esercizio02.textContent = title;

var result = '';
for (var i = 1; i <= 100; i++) {
    result = result + i;
    if (i < 100) {
        result = result + ', ';
    }
}

var risultato02 = document.getElementById('risultato-02');
risultato02.textContent = result;

// Esercizio 03
var title = "Usare un ciclo for per stampare i numeri da 1 a 100 separata da virgola e spazio." +
            "Senza usare gli array." +
            "Il numero 100 non deve avere virgola e spazio" + 
            "I numeri da 1 a 9 devono avere lo 0 davanti";
var esercizio03 = document.getElementById('esercizio-03');
esercizio03.textContent = title;

var result = '';
for (var i = 1; i <= 100; i++) {
    // Prima parte: concateno lo 0
    if (i < 10) {
        result += '0';
    }

    // Seconda parte: concateno il numero
    result += i;

    // Terza parte concateno la virgola e lo spazio 
    if (i < 100) {
        result += ', ';
    }
}

var risultato03 = document.getElementById('risultato-03');
risultato03.textContent = result;

// Esercizio 04
var title = "Usare un ciclo for per stampare i numeri da 2 a 100 ogni 2 numeri separata da virgola e spazio." +
            "Senza usare gli array." +
            "Il numero 100 non deve avere virgola e spazio" + 
            "I numeri da 2 a 8 devono avere lo 0 davanti";
            // 02, 04, 06, 08, 10, ......, 100
var esercizio04 = document.getElementById('esercizio-04');
esercizio04.textContent = title;

var result = '';
for (var i = 2; i <= 100; i+=2) {
    // Prima parte: concateno lo 0
    if (i < 10) {
        result += '0';
    }

    // Seconda parte: concateno il numero
    result += i;

    // Terza parte concateno la virgola e lo spazio 
    if (i < 100) {
        result += ', ';
    }
}

var risultato04 = document.getElementById('risultato-04');
risultato04.textContent = result;

// Esercizio 05
var title = "Usare un ciclo for per stampare i numeri da 1 a 100 separata da virgola e spazio." +
            "Senza usare gli array." +
            "Il numero 100 non deve avere virgola e spazio" + 
            "I numeri da 1 a 9 devono avere lo 0 davanti" + 
            "Ogni 10 numeri devo andare a capo";
var esercizio05 = document.getElementById('esercizio-05');
esercizio05.textContent = title;

var result = '';
for (var i = 1; i <= 100; i++) {
    // Prima parte: concateno lo 0
    if (i < 10) {
        result += '0';
    }

    // Seconda parte: concateno il numero
    result += i;

    // Terza parte: concateno la virgola e lo spazio 
    if (i < 100) {
        result += ', ';
    }

    // Quarta parte: concateno <br> (se il numero è divisibile per 10)
    if (i % 10 == 0) {
        result += '<br>';
    }
}

var risultato05 = document.getElementById('risultato-05');
risultato05.innerHTML = result;

// Esercizio 06
var title = "Dato l'array 'numeri' qui sotto, ciclare tutto l'array e stampare tutti i suoi numeri separati da virgola e spazio";
var esercizio06 = document.getElementById('esercizio-06');
esercizio06.textContent = title;

var numeri = [1, 3, 4, 6, 8, 9, 10, 11, 12, 20, 21, 101, 102];
var result = '';
for (var posizione = 0; posizione < numeri.length; posizione++) {
    result += numeri[posizione] + ', ';
}
// var result = numeri.join(', ');

var risultato06 = document.getElementById('risultato-06');
risultato06.innerHTML = result;

// Esercizio 07
var title = "Dato l'array 'numeri' qui sotto, ciclare tutto l'array e stampare solo i numeri divisibili per 3 separati da virgola e spazio";
var esercizio07 = document.getElementById('esercizio-07');
esercizio07.textContent = title;

var numeri = [1, 3, 4, 6, 8, 9, 10, 11, 12, 20, 21, 101, 102];
var result = '';
for (var indice = 0; indice < numeri.length; indice++) {
    if (numeri[indice] % 3 == 0) {
        result += numeri[indice] + ', ';
    }
}

var risultato07 = document.getElementById('risultato-07');
risultato07.innerHTML = result;

// Esercizio 08
var title = "Dato l'array 'numeri' qui sotto, ciclare tutto l'array e stampare solo i numeri > 20 separati da virgola e spazio";
var esercizio08 = document.getElementById('esercizio-08');
esercizio08.textContent = title;

var numeri = [1, 3, 4, 6, 8, 9, 10, 11, 12, 20, 21, 101, 102];
var result = '';
for (var indice = 0; indice < numeri.length; indice++) {
    if (numeri[indice] > 20) {
        result += numeri[indice] + ', ';
    }
}

var risultato08 = document.getElementById('risultato-08');
risultato08.innerHTML = result;