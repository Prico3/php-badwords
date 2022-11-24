<!-- Creare un form PHP che permetta di inviare due campi: un paragrafo ed una parola da censurare.
Gestire il tutto con due file diversi.

Il primo file dovrà permettere all’utente di inserire i dati e inviare la richiesta al server.

Il secondo file riceverà la richiesta ed eseguirà queste operazioni:
- stampare a schermo il paragrafo e la sua lunghezza
- stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
   <form action="request.php" method="GET">

        <!-- Inserisci una frase  -->
        <label for="phrase">Inserisci una frase</label>
        <input type="text" id="phrase" name="phrase">
        <br>
        <!-- censered -->
        <label for="censored">Quale parola vuoi nascondere?</label>
        <input type="text" id="censored" name="censored">
        <br>

        <hr>
        <!-- buttons -->
        <button type="submit">Invia</button>
        <button type="reset">Cancella</button>

   </form>

</body>
</html>