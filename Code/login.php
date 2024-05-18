<?php
    require_once 'nav.php'
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <div class="container text-center mb-5">
  <div class="row mb-5">
    <div class="col">
    <div class="my-4">
  <label for="exampleFormControlInput1" class="form-label">Email address</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>
    </div>
    <div class="col my-4">
    <label for="inputPassword5" class="form-label">Password</label>
<input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock"placeholder="************">
<div id="passwordHelpBlock" class="form-text">
  Your password must be 8-20 characters long, contain letters and numbers.
</div>
</div>

<div class="d-grid gap-2 d-md-block">
<button type="button" class="btn btn-link">Amministratore</button>
<button type="button" class="btn btn-link">Commerciante</button>
</div>


<div class="d-grid gap-2 d-md-block mb-5">
  <button class="btn btn-secondary btn-lg" type="button">Accedi</button>
  <a class="btn btn-secondary btn-lg" href="register.php" role="button">Registrati</a></div>

<div class="container mb-4">
<p class="fs-3 fw-bold">TERMINI E CONDIZIONI</p></div>
<div class="container text-center">
  <div class="row">
    <div class="col">
    <img src="img/login1.jpg" class="img-thumbnail" alt="...">
    <div class="container">
    <p class="lead">
    Accettazione dei termini:

 

    Accettando questi termini e condizioni, confermi di avere almeno 18 anni e di essere legalmente in grado di impegnarti in transazioni finanziarie. Accetti di utilizzare i nostri servizi solo per scopi leciti e in conformità con tutte le leggi e i regolamenti applicabili.


</p>
</div>
    
    </div>
    <div class="col">
    <img src="img/login2.jpg" class="img-thumbnail" alt="200px">
    <div class="container">
    <p class="lead">
    Investimenti e rischi:

 

L'investimento in opportunità alternative comporta rischi significativi, compreso il rischio di perdita di capitale. WealthDiversify non fornisce consulenza finanziaria, legale o fiscale e non si assume alcuna responsabilità per le decisioni di investimento degli utenti. Prima di effettuare qualsiasi investimento, gli utenti sono incoraggiati a consultare un professionista finanziario qualificato 
</p>
</div>
    </div>
    <div class="col">
    <img src="img/login3.jpg" class="img-thumbnail" alt="...">
    <div class="container">
    <p class="lead">
    Registrazione dell'account:

 

Per accedere ai servizi offerti da WealthDiversify, gli utenti devono registrare un account fornendo informazioni accurate e complete. Gli utenti sono responsabili della sicurezza del proprio account e delle credenziali di accesso.
</p>
</div>
    </div>
    <div class="col">
    <img src="img/login4.png" class="img-thumbnail" alt="...">
    <div class="container">
    <p class="lead">
    Legge applicabile:

 

Questi termini e condizioni sono regolati e interpretati in conformità con le leggi dello Stato di ITALIA. Qualsiasi controversia derivante da o in relazione a questi termini e condizioni sarà sottoposta alla giurisdizione esclusiva dei tribunali competenti dello Stato di ITALIA.
</p>
</div>
    
    </div>
  </div>
</div>
    

    
    <?php
    require_once 'footer.php'
?>