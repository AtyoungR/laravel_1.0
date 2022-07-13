<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Pemesanan</title>
  </head>
  <body>
    <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">Pemesanan</h5>
          @if( $a == null )
          <strong>{{ $a }}</strong>
          @elseif($a == 'mie goreng')
          Makanan : <strong>{{ $a }}</strong><br>
          Harga : Rp 5.000
          @elseif($a == 'seblak')
          Makanan : <strong>{{ $a }}</strong><br>
          Harga : Rp 7.500
          @elseif($a == 'nasi padang')
          Makanan : <strong>{{ $a }}</strong><br>
          Harga : Rp 15.000
          @else
          Makanan : <strong>{{ $a }}</strong><br>
          @endif
          <hr>
          @if( $b == null )
          <strong>{{ $b }}</strong>
          @elseif($b == 'kopi')
          Minuman : <strong>{{ $b }}</strong><br>
          Harga : Rp 5.000
          @elseif($b == 'jus')
          Minuman : <strong>{{ $b }}</strong><br>
          Harga : Rp 10.000
          @elseif($b == 'teh')
          Minuman : <strong>{{ $b }}</strong><br>
          Harga : Rp 7.500
          @else
          Minuman : <strong>{{ $b }}</strong><br>
          @endif
          <hr>
          @if( $c == null )
          <strong>{{ $c }}</strong>
          @elseif($c == 'kecil')
          Porsi : <strong>{{ $c }}</strong><br>
          Harga : Rp 2.500
          @elseif($c == 'sedang')
          Porsi : <strong>{{ $c }}</strong><br>
          Harga : Rp 5.000
          @elseif($c == 'besar')
          Porsi : <strong>{{ $c }}</strong><br>
          Harga : Rp 10.000
          @else
          Minuman : <strong>{{ $c }}</strong><br>
          @endif
          
        </div>
      </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
  </body>
</html>