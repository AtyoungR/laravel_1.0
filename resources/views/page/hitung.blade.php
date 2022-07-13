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
            Hitung Berat Badan
        </legend>
        <legend>
            Berat Badan : {{ $beratBadan }} <br>
            Tinggi Badan: {{ $tinggiBadan }}<br>

            @if ($hasil <= 17.0)
            Hasil BMI : {{ $hasil }} <br>
            Status Kesehatan : Kurus, Kekurangan Berat Berat Badan
            @elseif ($hasil >= 17.0 && $hasil <= 18.4)
            Hasil BMI : {{ $hasil }}<br>
            Status Kesehatan : Kurus, Kekurangan Berat Badan Ringan
            @elseif ($hasil >= 18.5 && $hasil <= 25.0)
            Hasil BMI : {{ $hasil }}<br>
            Status Kesehatan : Normal
            @elseif ($hasil >= 25.1 && $hasil <= 27.0)
            Hasil BMI : {{ $hasil }}<br>
            Status Kesehatan : Gemuk, Kelebihan Berat Badan Tingkat Ringan
            @elseif ($hasil >= 27.1)
            Hasil BMI : {{ $hasil }}<br>
            Status Kesehatan : Gemuk, Kelebihan Berat Badan Tingkat Berat
            @else
            @endif
        </legend>
    </fieldset>
</body>
</html>