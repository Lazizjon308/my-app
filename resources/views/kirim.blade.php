<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8" />
    <title>Kirim Formasi</title>
    <style>
        body {
            background-color: #121212;
            color: #e0e0e0;
            font-family: Arial, sans-serif;
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
        }
        label {
            display: block;
            margin-top: 15px;
            font-weight: bold;
            color: #ffffff;
        }
        input[type="number"],
        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            box-sizing: border-box;
            background-color: #1e1e1e;
            color: #ffffff;
            border: 1px solid #444;
        }
        button {
            margin-top: 20px;
            padding: 10px 15px;
            font-size: 16px;
            cursor: pointer;
            background-color: #333333;
            color: #ffffff;
            border: none;
        }
        button:hover {
            background-color: #444444;
        }
    </style>

</head>
<body>

<h2>Kirim Ma'lumotlari</h2>

<form action="/soqqaPlus" method="post">
    @csrf
    <label for="amount">Kirim (so‘m):</label>
    <input type="number" id="amount" name="amount" min="0" required />

    <label for="description">kirim:</label>
    <input type="text" id="description" name="description" required />

    <div class="button-row">
        <button type="submit">Tasdiqlash</button>
        <a href="/" class="link-button">Orqaga</a>
    </div>
</form>

</body>
</html>
