
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
