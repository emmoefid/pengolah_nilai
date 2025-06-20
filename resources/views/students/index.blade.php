<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengolah Nilai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<center>
    <h1>Nilai Siswa SMK Wikrama 1 Garut</h1>
</center>

<div class="container">
<nav class="navbar bg-body-tertiary">
    <div class="container-fluid justify-content-end">
        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Cari" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Cari</button>
        </form>
    </div>
</nav>   
 <table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">NIS</th>
      <th scope="col">Nama</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">Rayon</th>
      <th scope="col">Rombel</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($students as $item)
    <tr>
      <th scope="row">{{ $loop ->iteration }}</th>
      <td>{{$item->nis}}</td>
      <td>{{$item->name}}</td>
      <td>{{$item->gender}}</td>
      <td>{{$item->rayon}}</td>
      <td>{{$item->rombel}}</td>
      <td>
    <a class="btn btn-info" href="{{ route('students.show', $item->id) }}">Lihat</a>
      </td>
    </tr>
    @endforeach
  </tbody>
 </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
crossorigin="anonymous"></script>

</body>
</html>