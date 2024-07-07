
MILESTONE
Come sempre ripercorrete i passaggi per creare un nuovo progetto partendo dal nostro scaffold.
Procedete col setup di un nuovo database e avviate l'app.

MILESTONE
Tramite gli appositi comandi artisan create: model, migration, seeder e resource controller.

MILESTONE
Iniziate a definire le prime operazioni CRUD con le relative view:
index() dove stampare la lista dei fumetti
show() dove mostrare il dettaglio di un singolo fumetto
create() dove mostrare un form per inserire i dati di un nuovo fumetto (es. nome, descrizione ecc..)
Per concludere gestite i link:
dall'header linkate al catalogo e al form di creazione
dal catalogo collegate ogni gioco alla sua pagina di dettaglio.

Attenzione: create() dovrà restituirà una vista come gli altri metodi. Questa vista ha un form, inanimato, non funzionante. Non dovrete davvero salvare i dati sul db, solo mostare un form che renderemo funzionante domani. 

BONUS
Dopo averlo committato, modificate il seeder. Invece di usare Faker questa volta importate l'array in allegato (potete metterlo in config).
Per ogni elemento dell'array create un new Comic(), ne popolate le proprietà e lo salvate sul db.


Aggiungere una vista create che permetta di aggiungere effettivamente i fumetti al catalogo.
Poi cimentarsi con la edit.

MILESTONE 1
Realizzate il form in una vista /comics/create.blade.php
Dal controller collegate create() a questa vista.
A questo punto la pagina localhost:8000/comics/create dovrebbe mostrare il form.
Assicuratevi che il form sia completo di method, action e CSRF.

MILESTONE 2
Dal metodo store() ritornate una stringa per vedere qualcosa quando inviate i dati dal form. Testate, ricordando che ancora non scriviamo su DB.
Ora al posto del return "ok"; usate invece dump( $request->all() ); per stampare cosa vi arriva dal form.
Create un istanza di Comic, popolatela e salvate su db.
Infine redirezionate l'utente.
A questo punto testate l'inserimento.

MILESTONE 3
Ripercorriamo passaggi simili alle milestone precedenti, ma questa volta per modificare un fumetto in particolare.
Realizzate il form in una vista /comics/edit.blade.php
Dal controller collegate edit() a questa vista.
A questo punto la pagina localhost:8000/comics/NUMERO/edit dovrebbe mostrare il form.
Stampate NELLE input (come value) le informazioni del gioco come visto in live coding.
Per ogni card di fumetto aggiungete un link "modifica" che riporti al form
Arrivati qui il form dovrebbe mostrare i dati, senza farli salvare sul db.

MILESTONE 4 / BONUS 
Assicuratevi che il form sia completo di method, action e CSRF. Usate le slide da 32 a 35 oppure le righe 15-16 del mio codice.
Seguite i passaggi della milestone 2, questa volta modificando un Comic già esistente. Ragionate, usate dump e aiutatevi col codice.
