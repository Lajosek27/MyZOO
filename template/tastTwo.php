<!DOCTYPE html>
<html lang="en">

<?php require(TEMPLATE_PATH.'header.php'); ?>

<body id="index">
    <main>
       <div class="mainWrapper">
            <div id="content">
                <h1>Strona poświęcona 2 zadaniu.</h1><br><br>
                <p>Drugie zadanie znajduje się w głownym folderze w katalogu sql_Task. Są tam trzy skrypty do kolejnych punków z zadania. Tu się znajduja tylko zdjęcia kodu.</p>
                <p>Polecenie: 
                    <em>Zaprojektuj schemat bazy danych, który będzie przechowywał autorów książek, książki i recenzje,
                        spełniający następujące wymagania:
                        <ul>
                            <li>Tabela autorów powinna zawierać pola imię i nazwisko,</li>
                            <li>Tabela książek powinna zawierać tytuł, rok publikacji oraz numer ISBN,</li>
                            <li>Tabela recenzji powinna zawierać ocenę w skali 1-10 oraz treść.</li>
                        </ul>
                        
                    </em>
                </p>
                <h4>1. Zapisz zapytanie SQL tworzące schemat.</h4>
                
            </div>
            <div class="imgWrapper">
                <img src="public/img/shema.png" alt="Kod schematu">
            </div>
            <div id="content">
                <p><h4>2. Zapisz zapytanie zwracające imiona i nazwiska autorów, wraz z liczbą napisanych przez nichksiążek.</h4></p>
            </div>
            <div class="imgWrapper">
                <img src="public/img/query.png" alt="Kod schematu">
            </div>
            <div id="content">
                <p><h4>Zapisz zapytanie tworzące perspektywę (widok) zawierający 5ciu autorów, których średnia ocenwszystkich książek jest najwyższa</h4></p>
            </div>
            <div class="imgWrapper">
                <img src="public/img/view.png" alt="Kod schematu">
            </div>
        </div>
    </main>
    <?php require(TEMPLATE_PATH.'footer.php'); ?>
</body>
</html>

