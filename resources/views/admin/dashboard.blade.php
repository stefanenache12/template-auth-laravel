@extends('layouts.app')

@section('page-title', 'Dashboard')

@section('main-content')
    <div class="row mt-5 dashboard">
        <div class="col">
            <div class="card">
                <div class="card-body text-center ">
                    <h1 class="text-success">
                        Sei loggato!
                    </h1>
                    <h6>
                        La dashboard è una pagina privata (protetta dal middleware)
                    </h6>
                </div>
            </div>
        </div>
    </div>
@endsection
