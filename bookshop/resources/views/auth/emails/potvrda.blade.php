<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="utf-8">
</head>
<body>
<h2>Potvrdite svoju adresu e-pošte</h2>
<div>
    Hvala Vam na Otvaranje računa u Bookshop proavnici.
    Molimo kliknite na link ispod kako bi potvrdili svoju e-mail adresu.
    {{ URL::to('registracija/potvrda/' . $konfirmacijski_kod) }}.<br/>

</div>
</body>
</html>