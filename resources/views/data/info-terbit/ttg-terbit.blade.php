<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>penerbit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>penerbit</h1>
    <table class="table table-dark">
      
        <thead>
          
          <tr>
            <th scope="col">No</th>
            <th scope="col">penerbit</th>
            <th scope="col">pemilik</th>
            <th scope="col">alamat</th>
            <th scope="col">tanggal di bangun</th>
          </tr>
        </thead>


      <?php $nomor = 1; ?>
      @foreach ($terbit as $no => $item) 
      <tbody>
      <tr>
        <th scope="row">{{ $nomor++}}</th>
        <td>{{ $item->penerbit}}</td>
        <td>{{ $item->pemilik}}</td>
        <td>{{ $item->alamatt}}</td> 
        <td>{{ $item->tanggal_di_bangun}}</td> 
        <td>
      
        </td>
      </tr>
    </tbody>
      @endforeach
     
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>