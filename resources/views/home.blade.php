@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="alert alert-success text-center" role="alert">
                    {{ __('Você está logado!') }}
                </div>
            </div>
        </div>
    </div>
@endsection
