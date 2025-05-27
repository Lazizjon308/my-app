<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <title>Tranzaksiyalar Tarixi</title>
    <style>
        body {
            background-color: #1e1e1e;
            color: #ffffff;
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
        }

        h1, h2 {
            text-align: center;
        }

        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
            background-color: #2c2c2c;
        }

        th, td {
            border: 1px solid #444;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #333;
        }

        .income {
            color: #4caf50;
        }

        .expense {
            color: #f44336;
        }

        .summary {
            margin-top: 30px;
            padding: 15px;
            background-color: #333;
            border-radius: 5px;
        }

        a {
            color: #ffffff;
            display: inline-block;
            margin-top: 20px;
            text-decoration: none;
            background-color: #1a73e8;
            padding: 10px 15px;
            border-radius: 4px;
        }

        a:hover {
            background-color: #0c47a1;
        }
    </style>
</head>
<body>

<h1>📜 Tranzaksiyalar Tarixi</h1>

<div class="summary">
    <h2>💰 Umumiy Balans: {{ number_format($balance, 2, '.', ' ') }} so‘m</h2>
    <p class="income">Daromad: +{{ number_format($totalIncome, 2, '.', ' ') }} so‘m</p>
    <p class="expense">Xarajat: -{{ number_format($totalExpense, 2, '.', ' ') }} so‘m</p>
</div>

<table>
    <thead>
    <tr>
        <th>Sana</th>
        <th>Tavsif</th>
        <th>Summasi</th>
        <th>Tur</th>
    </tr>
    </thead>
    <tbody>
    @foreach ($transactions as $transaction)
        <tr>
            <td>{{ $transaction->date }}</td>
            <td>{{ $transaction->description }}</td>
            <td>
                @if($transaction->type == 'income')
                    <span class="income">+{{ number_format($transaction->amount, 2, '.', ' ') }} so‘m</span>
                @else
                    <span class="expense">-{{ number_format($transaction->amount, 2, '.', ' ') }} so‘m</span>
                @endif
            </td>
            <td>{{ $transaction->type == 'income' ? 'Kirim' : 'Chiqim' }}</td>
        </tr>
    @endforeach
    </tbody>
</table>

<a href="{{ route('home.index') }}">⬅️ Bosh sahifaga qaytish</a>

</body>
</html>
