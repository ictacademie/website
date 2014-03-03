<?php include $_SERVER['DOCUMENT_ROOT'] . '/common/header.php' ?>

<article>
  <header>
    <h1>Commit</h1>
    <p>Met de opdracht commit sla je je code op in Git. SourceTree laat je alle bestanden zien die gewijzigd zijn sinds de laatste commit. Alle wijzigingen die je in Git wilt zetten, plaats je in de staging area. Daarna druk je op commit om de bestanden naar Git te sturen. Vergeet niet een commit message in te vullen!</p>
  </header>

  <div>
    <h2>Working copy</h2>
    <p><a href=".">SourceTree</a> toont alle wijzigingen in je working copy sinds de laatste commit.</p>
    <img src="working-copy.png">

    <h2>Staging area</h2>
    <p>Selecteer de bestanden die je in Git wilt zetten en klik op de knop met het pijltje naar boven om ze te verplaatsen naar de staging area.</p>
    <img src="staging-area-geselecteerde-bestanden.png">

    <p>Of verplaats alle gewijzigde bestanden in één keer naar de staging area met de knop met twee pijlen naar boven.</p>
    <img src="staging-area-alle-bestanden.png">

    <h2>Diff</h2>
    <p>Rechts laat SourceTree de diff van het geselecteerde bestand zien. Hier zie je precies wat je in een bestand gewijzigd hebt. Controleer altijd de diff voordat je een bestand commit.</p>
    <img src="diff.png">

    <h2 id="commit">Commit</h2>
    <p>Klik op Commit om de bestanden in de staging area op te slaan in Git.</p>
    <img src="commit.png">

    <p>Vul altijd een commit message in waarin je vertelt wat je gewijzigd hebt.</p>
    <img src="commit-message.png">

    <p>Laat de drie opties linksonderin uit staan en klik op Commit. Je code is veilig opgeborgen in Git.</p>
  </div>

</article>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/common/footer.php' ?>