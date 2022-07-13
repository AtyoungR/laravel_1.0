<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>
            Data Siswa
        </legend>
        <legend>
            @foreach ($siswa as $murid)
                nama : {{ $murid['name'] }} <br>
                umur : {{ $murid['age'] }} <br>
                status : @if ($murid['age'] > 17)
                Sudah Bisa Memiliki SIM <br>
                @else
                Belum Bisa Memiliki SIM<br>
                @endif
                <hr>
            @endforeach
        </legend>
    </fieldset>
</body>
</html>