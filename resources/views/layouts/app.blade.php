{{-- This is the blade template for the main application layout --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entity App</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">

    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 5px;
            border: 1px solid #ccc;
        }
    </style>
</head>
<body>
    <div>
        @yield('content')
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/js/bootstrap.min.js"></script>
</body>
</html>
