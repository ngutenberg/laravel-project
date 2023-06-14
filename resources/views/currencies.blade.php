<html>
<head>
    <title>Currency Table</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Rate</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($currencies as $currency)
                <tr>
                   <td> <A HREF ="http://127.0.0.1/currency/{{ $currency->id }}">{{ $currency->id }}</A> </td>
                    <td>{{ $currency->name }}</td>
                    <td>{{ $currency->rate }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
