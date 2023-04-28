@extends('templates.layout')
@section('content')
<div class="d-flex align-items-center p-3 my-3 text-white bg-purple
rounded">
    <div class="lh-1">
        <h1 class="h6 mb-0 text-secondary lh-1">Bootstrap</h1>
        <small class="text-secondary">Since 2011</small>
    </div>
</div>


<div class="container card text-center shadow-lg">
    <h2><b>Masukkan Data Diri dan Laporan</b></h2>

    <div class="mb-4">
        <label for="exampleFormControlInput1" class="form-label">Nama Lengkap</label>
        <input type="text" class="form-control border-secondary" id="exampleFormControlInput1"
            placeholder="Masukkan Nama Anda" aria-label="Username">
    </div>

    <div class="mb-4">
        <label for="exampleFormControlInput1" class="form-label">Email address</label>
        <input type="email" class="form-control border-secondary" id="exampleFormControlInput1"
            placeholder="name@example.com" aria-label="name@example.com" aria-describedby="basic-addon1">
    </div>

    <div class="mb-4">
        <label for="exampleFormControlInput1" class="form-label">Laporan</label>
        <input type="text" class="form-control border-secondary" id="exampleFormControlInput1"
            placeholder="Ketikkan Disini">
    </div>

    <div class="mb-4">
        <label for="exampleFormControlInput1" class="form-label">Lokasi</label>
        <input type="text" class="form-control border-secondary" id="exampleFormControlInput1"
            placeholder="berikan Lokasi kejadian">
    </div>

    <div class="mb-4">
        <a href="/success" class="btn btn-dark">Klik Disini</a>
    </div>
</div>
<!-- <div class="container card text-center">
    <h2><b>Masukkan Data Diri dan Laporan</b></h2>
    <div class="input-group mb-3">
        <span class="input-group-text bg-secondary" id="basic-addon1">@</span>
        <input type="text" class="form-control" placeholder="Username" aria-label="Username"
            aria-describedby="basic-addon1">
    </div>
    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username"
            aria-describedby="basic-addon2">
        <span class="input-group-text" id="basic-addon2">@example.com</span>
    </div>
    <div class="mb-3">
        <label for="basic-url" class="form-label">Your vanity URL</label>
        <div class="input-group">
            <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
            <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3 basic-addon4">
        </div>
        <div class="form-text" id="basic-addon4">Example help text goes outside the input group.</div>
    </div>
    <div class="input-group mb-3">
        <span class="input-group-text">$</span>
        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
        <span class="input-group-text">.00</span>
    </div>
    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Username" aria-label="Username">
        <span class="input-group-text">@</span>
        <input type="text" class="form-control" placeholder="Server" aria-label="Server">
    </div>
    <div class="input-group">
        <span class="input-group-text">With textarea</span>
        <textarea class="form-control" aria-label="With textarea"></textarea>
    </div>
</div> -->
@endsection