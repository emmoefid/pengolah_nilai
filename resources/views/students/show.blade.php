@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Detail Student</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('students.index') }}">Kembali</a>
        </div>
    </div>
</div>

<div class="row">
    <!-- Nama -->
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <br>
            <strong>Nama:</strong>
            {{ $student->name }}
        </div>
    </div>

    <!-- NIM -->
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>NIM:</strong>
            {{ $student->nim }}
        </div>
    </div>

    <!-- Jurusan -->
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Jurusan:</strong>
            {{ $student->jurusan }}
        </div>
    </div>

    <!-- IPK -->
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>IPK:</strong>
            {{ number_format($student->ipk, 2) }}
        </div>
    </div>
</div>
@endsection
