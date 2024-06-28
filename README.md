:pacco: CONSEGNA
Dovrete creare un progetto Laravel due pagine, una che stampi delle cards e una con un about.
L'obiettivo è acquisire familiarità con i pattern suggeriti da Laravel per lavorare.

:roccia: INTRODUZIONE
Create il progetto, in caso di problemi fate riferimento alla precedente traccia. Pushate.

:roccia: CAPITOLO 1: VISTE, ROTTE e VISTE ROTTE
Create una vista per l'homepage che risponderà sia alla rotta "/" che a "/home". Pushate.

:roccia: CAPITOLO 2: QUEI MALEDETTI DATI
Fate in modo di passare dei dati alla vista. Iniziate creando un array $data direttamente nella rotta.
Inizialmente usate semplicemente un array con 3 stringhe da stampare, per testare che tutto funzioni. Pushate.
Passate al livello successivo usando uno store, avrete bisogno di:
creare il file relativo, che farà return di un array associativo con tutti i dati. Rispetto a Vue cambia solo la sintassi.
importare il file, dove necessario, usando config("nomefile"), ad esempio nelle rotte
pushate
Infine sostituite il vostro store con quello che trovate in allegato e.... poi cosa bisogna fare? :githubparrot:

:roccia: CAPITOLO 3: E VISSERO FELICI E INTERPOLATI
Realizzate una vista about che responda ad una rotta. Potete inserire qui quello che preferite.

:regalo: SPIN-OFF ACCLAMATO DALLA CRITICA
Provate a creare un componente per l'header o il footer, da mettere in una cartella /partials nelle view.
Dovrete poi importarlo dove necessario.