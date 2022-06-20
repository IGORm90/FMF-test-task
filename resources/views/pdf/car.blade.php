<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Report</title>
    <style>
        table, tr, td, th {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <h1 align="center" style="margin-bottom: 10px">Отчет о продажах автомобилей</h1>
    <div style="margin-bottom: 10px">
        <div align="left">Город:</div>
        <div align="right">Дата: {{ $date }}</div>
    </div>
    <table>
        <thead>
            <tr>
                <th>Марка</th>
                <th>Модель</th>
                <th>VIN</th>
                <th>Объем двигателя</th>
                <th>Мощность двигателя</th>
                <th>Тип КПП</th>
                <th>Год выпуска</th>
                <th>Дата продажи</th>
                <th>Дилер</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pdfData as $row)
                <tr>
                    <td>{{ $row['brand'] }}</td>
                    <td>{{ $row['model'] }}</td>
                    <td>{{ $row['VIN'] }}</td>
                    <td>{{ $row['engine_size'] }}</td>
                    <td>{{ $row['engine_power'] }}</td>
                    <td>{{ $row['KPP_type'] }}</td>
                    <td>{{ $row['release_year'] }}</td>
                    <td>{{ $row['date_of_sale'] }}</td>
                    <td>{{ $row['dealer'] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>