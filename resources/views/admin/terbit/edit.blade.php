<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>edit buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <form action="{{route('admin.terbit.tampil')}}" method="POST">
      @csrf
      <input type="hidden" name="id" value="{{$terbit->id}}">
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label"> penerbit</label>
          <input type="text" class="form-control" name="penerbit" id="penerbit" value="{{$terbit->penerbit}}" aria-describedby="penerbit">

        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">pemilik</label>
          <input type="text" class="form-control" name="pemilik" value="{{$terbit->pemilik}}" id="pemilik" aria-describedby="pemilik">
        </div>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">alamat</label>
          <input type="text" class="form-control" name="alamatt" value="{{$terbit->alamatt}}" id="alamatt" aria-describedby="alamatt">

        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">tahun di bangun</label>
          <input type="date" class="form-control" name="tanggal_di_bangun" value="{{$terbit->tanggal_di_bangun}}" id="tanggal_di_bangun" aria-describedby="tanggal_di_bangun">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>