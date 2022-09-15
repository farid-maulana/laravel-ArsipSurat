@extends('layouts.master')

@section('content')
<div class="page-heading">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>About</h3>
            </div>
        </div>
    </div>

    <section class="section mt-3">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-3">
                                    <img class="img-fluid" src="{{ asset('assets/images/faces/3.jpg') }}"
                                        alt="Card image cap" style="height: 15rem; border-radius: 1rem">
                                </div>
                                <div class="col-9">
                                    <h4 class="my-3">Aplikasi ini dibuat oleh:</h4>
                                    <dl class="row">
                                        <dt class="col-sm-3">Nama</dt>
                                        <dd class="col-sm-9">: Nia</dd>

                                        <dt class="col-sm-3">NIM</dt>
                                        <dd class="col-sm-9">: 1931710XXX</dd>

                                        <dt class="col-sm-3">Tanggal</dt>
                                        <dd class="col-sm-9">: {{ date('d F Y') }}</dd>
                                    </dl>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
