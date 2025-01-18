<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>buku</title>
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
    <h1>buku</h1>
    <table class="table">
      
        <thead>
          
          <tr>
            <th scope="col">No</th>
            <th scope="col">buku</th>
            <th scope="col">judul</th>
            <th scope="col">penulis</th>
            <th scope="col">terbit</th>
          </tr>
        </thead>


      <?php $nomor = 1; ?>
      @foreach ($buku as $no => $item) 
      <tbody>
      <tr>
        <th scope="row">{{ $nomor++}}</th>
        <td>{{ $item->buku}}</td>
        <td>{{ $item->judul}}</td>
        <td>{{ $item->penulis}}</td> 
        <td>{{ $item->terbit}}</td> 
        <td>
          <a href="{{ route('admin.buku.edit', $item->id) }}"  class="btn btn-primary">edit</a>
          <a href="/admin/buku/tampil/delete/{{$item->id}}"  class="btn btn-primary">hapus</a>
        </td>
      </tr>
    </tbody>
      @endforeach
     
      <a href="{{ asset('admin/buku/tambah')}}"><button type="button" class="btn btn-primary"
        style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
  tambah
</button></a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>