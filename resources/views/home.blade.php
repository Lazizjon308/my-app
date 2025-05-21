<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <title>Balans holati</title>
    <style>
        body {
            background-color: #1e1e1e; /* qorong‘i kulrang */
            color: #dcdcdc; /* yumshoq och kulrang */
            font-family: Arial, sans-serif;
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
        }

        label {
            display: block;
            margin-top: 15px;
            font-weight: bold;
            color: #f0f0f0;
        }

        input[type="number"],
        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            box-sizing: border-box;
            background-color: #2c2c2c; /* biroz ochiqroq qorong‘i */
            color: #ffffff;
            border: 1px solid #444;
        }

        button {
            margin-top: 20px;
            padding: 10px 15px;
            font-size: 16px;
            cursor: pointer;
            background-color: #3a3a3a;
            color: #ffffff;
            border: none;
        }

        button:hover {
            background-color: #505050;
        }

        .form-row {
            display: flex;
            gap: 10px;
            align-items: center;
        }

        .link-button {
            display: inline-block;
            margin-top: 15px;
            padding: 6px 12px;
            background-color: #1a73e8;
            color: #ffffff;
            text-decoration: none;
            border-radius: 4px;
            font-size: 14px;
            transition: background-color 0.3s ease;
        }

        .link-button:hover {
            background-color: #0c47a1;
        }
    </style>

</head>
<body>
<h2>Ayni paytdagi sizning balansingiz</h2>

<input type="text" name="balance" value="0" readonly>

<br><br>


<div class="form-row">
    <a href="/increase">Kirim</a>
{{--    <form action="/increase" method="POST">--}}
{{--        <input type="submit" value="Kirim">--}}
{{--    </form>--}}
    <a href="/decrease">Chiqim</a>
{{--    <form action="/decrease" method="POST">--}}
{{--        <input type="submit" value="Chiqim">--}}
{{--    </form>--}}
</div>


<div>
    <a href="/transactions" class="link-button">Tranzaksiyalar tarixi</a>
</div>
</body>
</html>
