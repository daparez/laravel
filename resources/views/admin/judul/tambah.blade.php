<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>tambahkan buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <h1>tambahkan buku</h1>
    <form action="{{route('admin.judul.tampil')}}" method="POST" enctype="multipart/form-data">
      @csrf
        <div class="mb-3">
          <label  class="form-label"> buku</label>
          <input type="text" class="form-control" name="buku"  id="buku" >

        </div>
        <div class="mb-3">
          <label  class="form-label">judul</label>
          <input type="text" class="form-control" name="judul" id="judul">
        </div>
        <div class="mb-3">
          <label  class="form-label"> penulis</label>
          <input type="text" class="form-control" name="penulis" id="penulis" >

        </div>
        <div class="mb-3">
          <label  class="form-label">terbit</label>
          <input type="date" class="form-control" name="terbit" id="terbit">
        </div>
        <button type="submit" >Submit</button>
      </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>