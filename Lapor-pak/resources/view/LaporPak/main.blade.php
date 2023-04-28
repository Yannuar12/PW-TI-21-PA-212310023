@extends('templates.layout')

@section('content')
<div class="d-flex align-items-center p-3 my-3 text-white bg-purple
rounded">
    <div class="lh-1">
        <h1 class="h6 mb-0 text-secondary lh-1">Bootstrap</h1>
        <small class="text-secondary">Since 2011</small>
    </div>
</div>

<div class="d-flex align-items-center p-3 my-3 text-white bg-purple
rounded">
    <div class="lh-1">
        <h1 class="h6 mb-0 text-secondary lh-1">Bootstrap</h1>
        <small class="text-secondary">Since 2011</small>
    </div>
</div>

<div class="container card d-flex align-items-center p-3 my-3 rounded shadow-lg">
    <div class="row align-items-center p-auto m-auto">
        <div class="col-sm-3 mb-3 mb-sm-0">
            <div class="card bg-primary bg-opacity-50">
                <div class="card-body btn">
                    <img src="/assets/police-badge.png" class="card-img-top" alt="police badge"
                        style="width:100px;, height:100px;, align-items:center; justify-content:center;">
                    <h5 class="card-title"><b>Lapor Pengaduan</b></h5>
                    <a href="/page" class="btn btn-dark">Klik Disini</a>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card bg-primary bg-opacity-50">
                <div class="card-body btn">
                    <img src="/assets/police-station.png" class="card-img-top" alt="police badge"
                        style="width:100px;, height:100px;, align-items:center; justify-content:center;">
                    <h5 class="card-title"><b>Kantor Polisi Terdekat</b></h5>
                    <a href="#" class="btn btn-dark">Klik Disini</a>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card bg-primary bg-opacity-50">
                <div class="card-body btn">
                    <img src="/assets/call.png" class="card-img-top" alt="police badge"
                        style="width:100px;, height:100px;, align-items:center; justify-content:center;">
                    <h5 class="card-title"><b>Informasi Kehilangan</b></h5>
                    <a href="#" class="btn btn-dark">Klik Disini</a>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card bg-primary bg-opacity-50">
                <div class="card-body btn">
                    <img src="/assets/police-cap.png" class="card-img-top" alt="police badge"
                        style="width:100px;, height:100px;, align-items:center; justify-content:center;">
                    <h5 class="card-title"><b>Progess</b></h5>
                    <a href="#" class="btn btn-dark">Klik Disini</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection