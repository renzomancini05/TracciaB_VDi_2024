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
  <div class="container my-4">
  <div class="row">
  <div class="col mb-4">
    <input type="text" class="form-control" placeholder="Nome" aria-label="Nome">
  </div>
  <div class="col">
    <input type="text" class="form-control" placeholder="Cognome" aria-label="Cognome">
  </div>
</div>

<form class="row g-3">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Password</label>
    <input type="password" class="form-control" id="inputPassword4" placeholder="***********">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Address 2</label>
    <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">City</label>
    <input type="text" class="form-control" id="inputCity">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">State</label>
    <select id="inputState" class="form-select">
      <option selected>Choose...</option>
      <option>...</option>
    </select>
  </div>
  <div class="col-md-2">
    <label for="inputZip" class="form-label">Zip</label>
    <input type="text" class="form-control" id="inputZip">
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Ricorda
      </label>
    </div>
  </div>
  <div class="col-12">
  <a class="btn btn-primary" href="index.php" role="button">Registrati</a>
  </div>
</form>

</div>



  
  

<div class="container mb-4">
<p class="fs-3 fw-bold text-center">TERMINI E CONDIZIONI</p></div>
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
    <img src="img/login2.jpg" class="img-thumbnail" alt="...">
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
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
