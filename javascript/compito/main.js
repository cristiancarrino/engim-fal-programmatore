// Esercizio 01
/*
   Nel titolo "Compito di Javascript di ..." , i tre puntini si trovano dentro un elemento che ha id="studente".
   Scrivere qui sotto del codice Javascript che dentro l'elemento con id="studente", inserisca il vostro nome e cognome al posto dei tre puntini
*/

// Esercizio 02
var title = "Usare un ciclo for per stampare i numeri da 4 a 125 separata da virgola e spazio.<br>" +
            "Senza usare gli array.<br>" +
            "Dopo il numero 125 non ci devono essere virgola e spazio<br>" + 
            "I numeri da 4 a 9 devono avere lo 0 davanti";
var esercizio02 = document.getElementById('esercizio-02');
esercizio02.innerHTML = title;

var result = '';

// Sostituire questa riga con il vostro codice

var risultato02 = document.getElementById('risultato-02');
risultato02.innerHTML = result;

// Esercizio 03
var title = "Usare un ciclo for per stampare i numeri da 2 a 88 ogni 2 numeri, separata da virgola e spazio.<br>" +
            "Senza usare gli array.<br>" +
            "Dopo il numero 88 non ci devono essere virgola e spazio<br>" + 
            "I numeri da 2 a 8 devono avere lo 0 davanti";
var esercizio03 = document.getElementById('esercizio-03');
esercizio03.innerHTML = title;

var result = '';

// Sostituire questa riga con il vostro codice

var risultato03 = document.getElementById('risultato-03');
risultato03.innerHTML = result;

// Esercizio 04
var title = "Usare un ciclo for per stampare i numeri da 1 a 100 separata da virgola e spazio.<br>" +
            "Senza usare gli array.<br>" +
            "Il numero 100 non deve avere virgola e spazio<br>" + 
            "I numeri da 1 a 9 devono avere lo 0 davanti<br>" + 
            "Ogni 10 numeri devo andare a capo";
var esercizio04 = document.getElementById('esercizio-04');
esercizio04.innerHTML = title;

var result = '';

// Sostituire questa riga con il vostro codice

var risultato04 = document.getElementById('risultato-04');
risultato04.innerHTML = result;

// Esercizio 05
var title = "Dato l'array 'numeri' qui sotto, ciclare tutto l'array e stampare solo i numeri divisibili per 4 separati da virgola e spazio";
var esercizio05 = document.getElementById('esercizio-05');
esercizio05.innerHTML = title;

var numeri = [1, 4, 6, 7, 8, 9, 12, 13, 16, 19, 20, 103, 104];
var result = '';

// Sostituire questa riga con il vostro codice

var risultato05 = document.getElementById('risultato-05');
risultato05.innerHTML = result;

// Esercizio 06
var title = "Dato l'array 'numeri' qui sotto, ciclare tutto l'array e stampare solo i numeri > 11 separati da virgola e spazio";
var esercizio06 = document.getElementById('esercizio-06');
esercizio06.innerHTML = title;

var numeri = [1, 3, 4, 6, 8, 9, 10, 11, 12, 20, 21, 101, 102];
var result = '';

// Sostituire questa riga con il vostro codice

var risultato06 = document.getElementById('risultato-06');
risultato06.innerHTML = result;

// Esercizio 07
var title = "Dato l'array 'numeri' qui sotto, ciclare tutto l'array e calcolare la somma di tutti i suoi elementi";
var esercizio07 = document.getElementById('esercizio-07');
esercizio07.innerHTML = title;

var numeri = [1, 3, 4, 6, 8, 9, 10, 11, 12, 20, 21, 101, 102];
var somma = 0;

// Sostituire questa riga con il vostro codice

var risultato07 = document.getElementById('risultato-07');
risultato07.innerHTML = 'Somma: ' + somma;

// Esercizio 08
var title = "Dato l'array 'numeri' qui sotto, ciclare tutto l'array (ad esempio con un for) e:<br>" +
    "se al suo interno c'è il numero 24 impostare la variabile result a true,<br>" +
    "se al suo interno non c'è il numero fa impostare la variabile result a false";
var esercizio08 = document.getElementById('esercizio-08');
esercizio08.innerHTML = title;

var numeri = [1, 3, 4, 6, 8, 9, 10, 24, 12, 20, 21, 101, 102];
var result = false;

// Sostituire questa riga con il vostro codice

var risultato08 = document.getElementById('risultato-08');
risultato08.innerHTML = "All'interno c'è il 24? : " + (result ? 'Si' : 'No');

// Esercizio 09
var title = "Creare una variabile studente (quindi var studente = ...) che sia un oggetto che contiene le seguenti proprietà:<br>" +
            " - firstname che è una stringa,<br>" +
            " - lastname che è una stringa<br>" +
            " - anni che è un numero<br>" +
            " - voti che è un array di numeri (scrivere almeno quattro numeri)";
var esercizio09 = document.getElementById('esercizio-09');
esercizio09.innerHTML = title;

// Sostituire questa riga con il vostro codice

var risultato09 = document.getElementById('risultato-09');
risultato09.innerHTML = "var studente = " + JSON.stringify(studente).replace(/:/g, ': ').replace(/({|,)"/g, '$1<br>&nbsp;&nbsp;&nbsp;"').replace('}', '<br>}');

// Esercizi aggiuntivi
/* 
    Chi vuole, quando ha finito, provi a rifare gli esercizi da 02 a 08 scrivendo un ciclo while al posto del ciclo for. 
    Per ogni esercizio scrivete il ciclo while sotto il ciclo for e poi commentate il ciclo for.
    Sarà valutato come un +
*/