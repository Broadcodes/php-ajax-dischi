<!-- Seconda Versione: Attraverso l’utilizzo di axios: al caricamento della pagina axios chiederà,
     attraverso una chiamata api, i dischi a php e li stamperà attraverso vue.
     prima milestone: recuperare la lista dei dischi tramite una chiamata axios e stampare la lista dei titoli
     degli album all'interno di una lista non numerata (ul)
     seconda milestone: per ogni disco, stampare una card con tutte le informazioni -->

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spotybool</title>

    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../css/style.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.1.3/axios.min.js" integrity="sha512-0qU9M9jfqPw6FKkPafM3gy2CBAvUWnYVOfNPDYKVuRTel1PrciTj+a9P3loJB+j0QmN2Y0JYQmkBBS8W+mbezg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.7.13/vue.min.js" integrity="sha512-9PmLIATEd4w0OxdTHq61p12lQqa8OtDC6nXu0+S1Icb800oxoADle+gaPfmAXLa35KSvk/6bGeNRfi3nq0Hvvw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Lista Studenti</title>

    <script type="text/javascript" src="../secondVersion/script.js" defer></script>
</head>

<body>
    <div id="app">
        <header>
            <i class="logoImg fa-brands fa-spotify"></i>
        </header>

        <main>
            <div class="container">
                <ul style="list-style-type: none">
                    <li v-for="card in album">{{card.title}}</li>
                </ul>
            </div>
        </main>
    </div>

</body>

</html>