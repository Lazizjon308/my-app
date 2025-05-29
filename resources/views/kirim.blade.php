{{--<!DOCTYPE html>--}}
{{--<html lang="uz">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8" />--}}
{{--    <title>Kirim Formasi</title>--}}
{{--    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">--}}
{{--</head>--}}
{{--<body class="bg-dark text-light">--}}

{{--<div class="container mt-5" style="max-width: 500px;">--}}
{{--    <div class="card bg-secondary text-light p-4 rounded shadow">--}}
{{--        <h2 class="text-center mb-4">💰 Kirim Ma'lumotlari</h2>--}}

{{--        <form action="amountPlus" method="post">--}}
{{--            @csrf--}}

{{--            <div class="mb-3">--}}
{{--                <label for="amount" class="form-label">Kirim (so‘m):</label>--}}
{{--                <input type="number" id="amount" name="amount" class="form-control bg-dark text-light border-light" min="0" required />--}}
{{--            </div>--}}

{{--            <div class="mb-3">--}}
{{--                <label for="description" class="form-label">Kirim tavsifi:</label>--}}
{{--                <input type="text" id="description" name="description" class="form-control bg-dark text-light border-light" required />--}}
{{--            </div>--}}

{{--            <div class="mb-4">--}}
{{--                <label for="date" class="form-label">Sana:</label>--}}
{{--                <input type="date" id="date" name="date" class="form-control bg-dark text-light border-light" required />--}}
{{--            </div>--}}

{{--            <div class="d-grid gap-2">--}}
{{--                <button type="submit" class="btn btn-success">✅ Tasdiqlash</button>--}}
{{--                <a href="/" class="btn btn-outline-light">⬅️ Orqaga</a>--}}
{{--            </div>--}}
{{--        </form>--}}
{{--    </div>--}}
{{--</div>--}}

{{--</body>--}}
{{--</html>--}}
    <!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8" />
    <title>Kirim Formaasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-light">

<div class="container mt-5" style="max-width: 500px;">
    <h2 class="text-center text-info mb-4">➖ Kirim Ma'lumotlari</h2>

    <form action="amountPlus" method="post">
            @csrf

            <div class="mb-3">
                <label for="amount" class="form-label">Kirim (so‘m):</label>
                <input type="number" id="amount" name="amount" class="form-control bg-dark text-light border-light" min="0" required />
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Kirim tavsifi:</label>
                <input type="text" id="description" name="description" class="form-control bg-dark text-light border-light" required />
            </div>

            <div class="mb-4">
                <label for="date" class="form-label">Sana:</label>
                <input type="date" id="date" name="date" class="form-control bg-dark text-light border-light" required />
            </div>

            <div class="d-grid gap-2">
                <button type="submit" class="btn btn-success">✅ Tasdiqlash</button>
                <a href="/" class="btn btn-outline-light">⬅️ Orqaga</a>
            </div>
        </form>
</div>

</body>
</html>
