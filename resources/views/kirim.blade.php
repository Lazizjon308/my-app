<!DOCTYPE html>
<html>
<head>
    <title>Kirim qo‘shish</title>
    <meta charset="UTF-8">
</head>
<body>
<h1>Kirim qo‘shish</h1>

@if(session('success'))
    <p style="color: green">{{ session('success') }}</p>
@endif

@if ($errors->any())
    <div style="color: red">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{ route('balance.store') }}">
    @csrf
    <label for="description">Izoh:</label>
    <input type="text" id="description" name="description" required><br><br>

    <label for="amount">Miqdor:</label>
    <input type="number" id="amount" name="amount" required><br><br>

    <label for="date">Sana:</label>
    <input type="date" id="date" name="date" required><br><br>

    <button type="submit">Saqlash</button>
</form>

<br>
<a href="{{ route('balance.index') }}">Orqaga</a>
</body>
</html>
