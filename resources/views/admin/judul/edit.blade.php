<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>edit buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <form action="{{route('admin.judul.tampil')}}" method="POST">
      @csrf
      <input type="hidden" name="id" value="{{$judul->id}}">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label"> buku</label>
          <input type="text" class="form-control" name="buku" id="buku" value="{{$judul->buku}}" aria-describedby="buku">

        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">judul</label>
          <input type="text" class="form-control" name="judul" value="{{$judul->judul}}" id="judul" aria-describedby="judul">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">penulis</label>
          <input type="text" class="form-control" name="penulis" value="{{$judul->penulis}}" id="penulis" aria-describedby="penulis">

        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">terbit</label>
          <input type="date" class="form-control" name="terbit" value="{{$judul->terbit}}" id="terbit" aria-describedby="terbit">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>