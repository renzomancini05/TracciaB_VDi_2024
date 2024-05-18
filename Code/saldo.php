<?php
    require_once 'nav.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        .image-block {
            position: relative;
            width: 100vw; /* Imposta la larghezza del blocco immagine a 100% della viewport */
            height: 50vh; /* Imposta l'altezza del blocco immagine a 50% della viewport */
            background-image: url('img/dollaro (pagina saldo).jpg');
            background-size: cover;
            background-position: center;
        }

        .image-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.5);
        }

        .saldo-text {
            position: absolute;
            bottom: 0;
            left: 30px; /* Spostamento a sinistra */
            color: black;
            font-size: 36px; /* Dimensione del testo ingrandita */
            font-weight: bold;
        }

        .content-block {
            background-color: white;
            width: 100vw; /* Imposta la larghezza del blocco contenuto a 100% della viewport */
            height: 50vh; /* Imposta l'altezza del blocco contenuto a 50% della viewport */
            overflow: auto;
            display: flex;
            justify-content: center; /* Centra orizzontalmente */
            align-items: center; /* Centra verticalmente */
            flex-direction: column;
            text-align: center;
        }

        .transaction-text {
            font-size: 36px; /* Stessa dimensione della scritta "Saldo" */
            font-weight: bold;
            margin-bottom: 20px; /* Spazio tra il testo e i metodi di pagamento */
        }

        .payment-methods {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 20px; /* Spazio tra le immagini */
        }

        .payment-method {
            max-width: 150px; /* Larghezza massima delle immagini */
            max-height: 150px; /* Altezza massima delle immagini */
        }
    </style>
</head>
<body>

<div class="image-block">
    <div class="image-overlay"></div>
    <div class="saldo-text">Saldo</div>
</div>

<div class="content-block">
    <p class="transaction-text">Scegli metodo Transazione:</p>
    <div class="payment-methods">
        <div class="payment-method">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-credit-card" viewBox="0 0 16 16">
        <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1z"/>
        <path d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1z"/>
        </svg> </n>
            <h6>credit card</h6>
            
        </div>
        <div class="payment-method">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-paypal" viewBox="0 0 16 16">
        <path d="M14.06 3.713c.12-1.071-.093-1.832-.702-2.526C12.628.356 11.312 0 9.626 0H4.734a.7.7 0 0 0-.691.59L2.005 13.509a.42.42 0 0 0 .415.486h2.756l-.202 1.28a.628.628 0 0 0 .62.726H8.14c.429 0 .793-.31.862-.731l.025-.13.48-3.043.03-.164.001-.007a.35.35 0 0 1 .348-.297h.38c1.266 0 2.425-.256 3.345-.91q.57-.403.993-1.005a4.94 4.94 0 0 0 .88-2.195c.242-1.246.13-2.356-.57-3.154a2.7 2.7 0 0 0-.76-.59l-.094-.061ZM6.543 8.82a.7.7 0 0 1 .321-.079H8.3c2.82 0 5.027-1.144 5.672-4.456l.003-.016q.326.186.548.438c.546.623.679 1.535.45 2.71-.272 1.397-.866 2.307-1.663 2.874-.802.57-1.842.815-3.043.815h-.38a.87.87 0 0 0-.863.734l-.03.164-.48 3.043-.024.13-.001.004a.35.35 0 0 1-.348.296H5.595a.106.106 0 0 1-.105-.123l.208-1.32z"/>
        </svg>
        <h6>PayPal</h6>
        </div>
        <div class="payment-method">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-credit-card" viewBox="0 0 16 16">
        <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1z"/>
        <path d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1z"/>
        </svg> </n>
        <h6>Wise</h6>
        </div>
        <div class="payment-method">
        
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-currency-bitcoin" viewBox="0 0 16 16">
        <path d="M5.5 13v1.25c0 .138.112.25.25.25h1a.25.25 0 0 0 .25-.25V13h.5v1.25c0 .138.112.25.25.25h1a.25.25 0 0 0 .25-.25V13h.084c1.992 0 3.416-1.033 3.416-2.82 0-1.502-1.007-2.323-2.186-2.44v-.088c.97-.242 1.683-.974 1.683-2.19C11.997 3.93 10.847 3 9.092 3H9V1.75a.25.25 0 0 0-.25-.25h-1a.25.25 0 0 0-.25.25V3h-.573V1.75a.25.25 0 0 0-.25-.25H5.75a.25.25 0 0 0-.25.25V3l-1.998.011a.25.25 0 0 0-.25.25v.989c0 .137.11.25.248.25l.755-.005a.75.75 0 0 1 .745.75v5.505a.75.75 0 0 1-.75.75l-.748.011a.25.25 0 0 0-.25.25v1c0 .138.112.25.25.25zm1.427-8.513h1.719c.906 0 1.438.498 1.438 1.312 0 .871-.575 1.362-1.877 1.362h-1.28zm0 4.051h1.84c1.137 0 1.756.58 1.756 1.524 0 .953-.626 1.45-2.158 1.45H6.927z"/>
        </svg>
        <h6>Crypto</h6> 
        </div>
    </div>
</div>
<div class="container text-center">
  <div class="row mb-5">
    <div class="col">
    <button type="button" class="btn btn-secondary btn-lg">Preleva</button>
    </div>
    <div class="col">
    <button type="button" class="btn btn-secondary btn-lg">Deposita</button>
    </div>
    <div class="col">
    <button type="button" class="btn btn-secondary btn-lg">Invia</button>
    </div>
  </div>
</div>
   
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<?php
    require_once 'footer.php'
?>