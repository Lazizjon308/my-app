<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <title>Tranzaksiyalar Tarixi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-dark text-light">

<div class="container my-5">

    <h1 class="text-center mb-5 text-info">📜 Tranzaksiyalar Tarixi</h1>

    <!-- Balans -->
    <div class="card bg-secondary bg-opacity-25 text-center border-info mb-5">
        <div class="card-body">
            <h2 class="mb-3 text-info">💰 Umumiy Balans: {{ number_format($balance, 2, '.', ' ') }} so‘m</h2>
            <p class="text-success fs-5">Daromad: +{{ number_format($totalIncome, 2, '.', ' ') }} so‘m</p>
            <p class="text-danger fs-5">Xarajat: -{{ number_format($totalExpense, 2, '.', ' ') }} so‘m</p>
        </div>
    </div>

    <!-- Kirimlar -->
    <div class="mb-5">
        <h3 class="text-success mb-3">📈 Kirimlar</h3>
        <div class="table-responsive">
            <table class="table table-bordered table-dark table-hover align-middle">
                <thead class="table-success text-dark">
                <tr>
                    <th>Sana</th>
                    <th>Tavsif</th>
                    <th>Summasi</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($transactions->where('type', 'income') as $transaction)
                    <tr>
                        <td>{{ $transaction->date }}</td>
                        <td>{{ $transaction->description }}</td>
                        <td class="text-success fw-bold">+{{ number_format($transaction->amount, 2, '.', ' ') }} so‘m</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Chiqimlar -->
    <div class="mb-5">
        <h3 class="text-danger mb-3">📉 Chiqimlar</h3>
        <div class="table-responsive">
            <table class="table table-bordered table-dark table-hover align-middle">
                <thead class="table-danger text-dark">
                <tr>
                    <th>Sana</th>
                    <th>Tavsif</th>
                    <th>Summasi</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($transactions->where('type', 'expense') as $transaction)
                    <tr>
                        <td>{{ $transaction->date }}</td>
                        <td>{{ $transaction->description }}</td>
                        <td class="text-danger fw-bold">-{{ number_format($transaction->amount, 2, '.', ' ') }} so‘m</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Bosh sahifaga qaytish -->
    <div class="text-center">
        <a href="{{ route('home.index') }}" class="btn btn-primary px-4 py-2">
            ⬅️ Bosh sahifaga qaytish
        </a>
    </div>

</div>

</body>
</html>
