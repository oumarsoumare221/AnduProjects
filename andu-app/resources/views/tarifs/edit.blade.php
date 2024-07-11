<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier le tarif</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 500px;
        }

        h1 {
            margin-bottom: 30px;
            color: #333;
            font-weight: bold;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-control {
            border-radius: 5px;
        }

        .btn-primary {
            background-color: #419488;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
        }

        .btn-primary:hover {
            background-color: #367e72;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Modifier le tarif</h1>
        <form action="{{ route('tarifs.update', $tarif) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="type">Type</label>
                <input type="text" class="form-control" id="type" name="type" value="{{ $tarif->type }}" required>
            </div>
            <div class="form-group">
                <label for="price">Prix</label>
                <input type="text" class="form-control" id="price" name="price" value="{{ $tarif->price }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Modifier</button>
        </form>
    </div>
</body>

</html>