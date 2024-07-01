CONSEGNA
Dovrete creare un progetto Laravel due pagine, una che stampi delle cards e una con un about.
L'obiettivo è acquisire familiarità con i pattern suggeriti da Laravel per lavorare.

INTRODUZIONE
Create il progetto, in caso di problemi fate riferimento alla precedente traccia. Pushate.

CAPITOLO 1: VISTE, ROTTE e VISTE ROTTE
Create una vista per l'homepage che risponderà sia alla rotta "/" che a "/home". Pushate.

CAPITOLO 2: QUEI MALEDETTI DATI
Fate in modo di passare dei dati alla vista. Iniziate creando un array $data direttamente nella rotta.
Inizialmente usate semplicemente un array con 3 stringhe da stampare, per testare che tutto funzioni. Pushate.
Passate al livello successivo usando uno store, avrete bisogno di:
creare il file relativo, che farà return di un array associativo con tutti i dati. Rispetto a Vue cambia solo la sintassi.
importare il file, dove necessario, usando config("nomefile"), ad esempio nelle rotte
pushate
Infine sostituite il vostro store con quello che trovate in allegato e.... poi cosa bisogna fare? :githubparrot:

CAPITOLO 3: E VISSERO FELICI E INTERPOLATI
Realizzate una vista about che responda ad una rotta. Potete inserire qui quello che preferite.

SPIN-OFF ACCLAMATO DALLA CRITICA
Provate a creare un componente per l'header o il footer, da mettere in una cartella /partials nelle view.
Dovrete poi importarlo dove necessario.


2° Parte
CONSEGNA
Implementerete quanto visto oggi a lezione. In particolare concentriamoci sul padroneggiare:
i dati in arrivo da config
layout (con relativi @yield, @extends e @section)
le rotte (con i relativi ->name)

MILESTONE 0
Assicuratevi di recuperare i dati dei fumetti da config("qualcosa") strutturando i dati correttamente.
Assicuratevi anche di aver importato eventuali file statici da /public usando un percorso che inizi con /
Esempio <link rel="stylesheet" href="style.css"> diventa <link rel="stylesheet" href="/style.css">

MILESTONE 1
Create un layout di base da utilizzare in tutte le pagine. Ricordatevi gli elementi fondamentali:
Creare un layout con l'html di base, in /resources/views/layouts/nomelayout.blade.php
Prevedere nel layout almeno uno @yield("nomesegnaposto")
Modificare le vostre pagine affinche usino il layout con @extends("percorso.layout")
Customizzare il contenuto del layout per quella pagina usando @section

MILESTONE 2
Modificate il vostro header in modo che i link vengano generati usando {{ route("nomerotta") }}
Ovviamente questo richiedete che diate il ->name alle rotte
Ora provate a usare Route::currentRouteName() per evidenziare la voce di menu attualmente attiva. E' lo stesso metodo che stampo nel mio header ma usato diversamente

BONUS 1
Se volete potete provare a creare una rotta per la pagina di dettaglio del fumetto.
Dalla rotta dovrete controllare che l'indice fornito sia un valore valido. Alcuni spunti sono intval o array_key_exists, ma ci sono tanti metodi validi. Provate una logica del tipo if(controlliOk) { return view... } else { abort(404) } :occhiolino:
Se eseguite questo bonus trovate il modo poi di linkare a questa pagina non così <a href="/comics/{{ $indice }}"> ma usando il metodo giusto.

BONUS 2
Se volete spingervi oltre, provate a realizzare una partial per la singola card e a passargli dei dati.
Leggendo bene la documentazione scoprirete che potete lasciargli ereditare i dati o passarglieli manualmente.