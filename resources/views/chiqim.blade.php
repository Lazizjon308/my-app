<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8" />
    <title>Chiqim Formasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-light">

<div class="container mt-5" style="max-width: 500px;">
    <h2 class="text-center text-info mb-4">➖ Chiqim Ma'lumotlari</h2>

    <form action="/amountMinus" method="post" class="bg-secondary bg-opacity-25 p-4 rounded shadow">

        @csrf

        <div class="mb-3">
            <label for="amount" class="form-label">Chiqim miqdori (so‘m):</label>
            <input type="number" class="form-control bg-dark text-light border-secondary" id="amount" name="amount" min="0" required />
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Nimaga sarflanmoqda:</label>
            <input type="text" class="form-control bg-dark text-light border-secondary" id="description" name="description" required />
        </div>

        <div class="mb-4">
            <label for="date" class="form-label">Qachon sarflanayapti:</label>
            <input type="date" class="form-control bg-dark text-light border-secondary" id="date" name="date" required />
        </div>

        <div class="d-grid gap-2">
            <button type="submit" class="btn btn-danger">💾 Tasdiqlash</button>
            <a href="/" class="btn btn-outline-light">⬅️ Ortga qaytish</a>
        </div>

    </form>
</div>

</body>
</html>
