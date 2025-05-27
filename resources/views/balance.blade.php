<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <title>Balans holati</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-light">

<div class="container d-flex flex-column justify-content-center align-items-center min-vh-100">

    <h1 class="text-info text-center mb-4">💰 Joriy Balans</h1>

    <div class="card text-center border-info bg-secondary bg-opacity-25 mb-4 w-100" style="max-width: 400px;">
        <div class="card-body">
            <h2 class="card-title fs-3 fw-bold">
                {{ number_format($balance, 0, ',', ' ') }} so‘m
            </h2>
        </div>
    </div>

    <div class="d-grid gap-2 w-100" style="max-width: 400px;">
        <a href="/increase" class="btn btn-primary">➕ Kirim qo‘shish</a>
        <a href="/decrease" class="btn btn-primary">➖ Chiqim qo‘shish</a>
        <a href="/transactions" class="btn btn-primary">📜 Tranzaksiyalar tarixi</a>
    </div>

</div>

</body>
</html>
