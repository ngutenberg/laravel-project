<!DOCTYPE html>
<html>
<head>
    <title>Currency Details</title>
</head>
<body>
    <h1>Currency Details</h1>
    <p><strong>ID:</strong> {{ $currency->id }}</p>
    <p><strong>Name:</strong> {{ $currency->name }}</p>
    <p><strong>Rate:</strong> {{ $currency->rate }}</p>
    <p><strong>Created At:</strong> {{ $currency->created_at }}</p>
    <p><strong>Updated At:</strong> {{ $currency->updated_at }}</p>
</body>
</html>
