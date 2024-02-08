<!-- resources/views/orders/search.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Search</title>
</head>
<body>
    <h1>Order Search</h1>

    <form action="{{ route('orders.search') }}" method="get">
        <label for="search">Order search:</label>
        <input type="text" name="search" id="search" required>
        <button type="submit">Search</button>
    </form>

    <!-- Display search results here if needed -->

</body>
</html>
