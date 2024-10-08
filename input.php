<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cek Zodiak dan Shio</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: white ;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }
        h1 {
            text-align: center;
            color: #333;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin: 10px 0 5px;
            color: #555;
        }
        input[type="text"],
        input[type="number"] {
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ddd;
            margin-bottom: 15px;
            font-size: 16px;
            width: 95%;
        }
        input[type="submit"] {
            padding: 10px;
            background-color: black;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }
        input[type="submit"]:hover {
            background-color: black ;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Cek Zodiak dan Shio Anda</h1>
        <form action="result.php" method="POST">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required>

            <label for="day">Tanggal:</label>
            <input type="number" id="day" name="day" min="1" max="31" required>

            <label for="month">Bulan:</label>
            <input type="number" id="month" name="month" min="1" max="12" required>

            <label for="year">Tahun Lahir:</label>
            <input type="number" id="year" name="year" min="1900" max="2100" required>

            <input type="submit" value="Cek Zodiak dan Shio">
        </form>
    </div>
</body>
</html>