@extends('app')
@section("head")
@include('layouts.head')
@endsection
@section("script")
@include('layouts.script')
@endsection
@section('content')
<div class="card ml-3 mt-3 mr-3 mb-0">
    <div class="row">
        <div class="col-lg-12">
            <div class="card card-info card-outline">
                <div class="card-header border-0">
                    <div class="d-flex justify-content-between">
                        <h1>Tambah Sampah</h1>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                                <li class="breadcrumb-item active"><a href="/bobot_sampah">Bobot Sampah</a></li>
                                <li class="breadcrumb-item active"><a>Tambah Bobot Sampah</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
                @if ($errors->any())
                <div class="alert alert-info">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <div class="card-body">
                    <div class="section-body">
                        <div class="row">
                            <div class="col-12 col-md-12 col-lg-12">
                                <div class="col-md-12">
                                    <div class="card text-white bg-info mb-3 mb-3">
                                        <div class="card-body">
                                            <h5 class="card-title">Perhatikan</h5>
                                            <p class="card-text">Isi field dengan angka "0" apabila sampah tidak ada !!!
                                            </p>
                                        </div>
                                    </div>
                                    <div class="card card-primary">
                                        <div class="card-header">
                                            <h3 class="card-title">Form Bobot Sampah</h3>
                                        </div>
                                        <!-- /.card-header -->
                                        <div class="card-body">
                                            <form action="{{ route('bobot_sampah.store') }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <!-- text input -->
                                                        <div class="form-group">
                                                            <label>Tanggal</label>
                                                            <input name="tanggal" type="date" class="form-control"
                                                                placeholder="Enter ...">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <!-- text input -->
                                                        <div class="form-group">
                                                            <label>Sampah Plastik</label>
                                                            <input name="sampah_plastik" id='sampah_plastik' type="number"
                                                                class="form-control" placeholder="Enter ...">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <!-- text input -->
                                                        <div class="form-group">
                                                            <label>Sampah Kertas</label>
                                                            <input name="sampah_kertas" id='sampah_kertas' type="number" class="form-control"
                                                                placeholder="Enter ...">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <!-- text input -->
                                                        <div class="form-group">
                                                            <label>Sampah Kaleng</label>
                                                            <input name="sampah_kaleng" id='sampah_kaleng' type="number" class="form-control"
                                                                placeholder="Enter ...">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <!-- text input -->
                                                        <div class="form-group">
                                                            <label>Total Bobot Sampah</label>
                                                            <input name="total_sampah" id='total_sampah' type="number" class="form-control"
                                                            onkeyup="total_sampah();" placeholder="Enter ..." readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-footer text-center">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                                </div>
                                        </div>
                                        </form>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
</div>

{{-- <script>
   function total_sampah() {
        var sampah_plastik = document.getElementById('sampah_plastik').value;
        var sampah_kertas = document.getElementById('sampah_kertas').value;
        var sampah_kaleng = document.getElementById('sampah_kaleng').value;
        var total = parseInt(sampah_plastik) + parseInt(sampah_kertas) + parseInt(sampah_kaleng);
        if (!isNaN(total)) {
            document.getElementById('total_sampah').value = total;
        }
       else {
            document.getElementById('total_sampah').value = 0;
        }
    }
</script> --}}
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $("#sampah_plastik, #sampah_kertas, #sampah_kaleng").keyup(function() {
            var sampah_plastik = $("#sampah_plastik").val();
            var sampah_kertas = $("#sampah_kertas").val();
            var sampah_kaleng = $("#sampah_kaleng").val();
            var total = parseInt(sampah_plastik) + parseInt(sampah_kertas) + parseInt(sampah_kaleng);
            if (!isNaN(total)) {
                $("#total_sampah").val(total);
            }
            else {
                $("#total_sampah").val(0);
            }
        });
    });
</script>

@endsection
