@extends('layouts.app')

@section('title', 'About')

@section('content')
    <h1>loki</h1>
    <p>fajar</p>

    <div class="container-fluid">
        <div class="row">
            @for ($i = 1; $i < 9; $i++)
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 my-3">
                <div class="card">
                    <img src="{{ asset('SMK Taruna Bhakti.png')}}" alt="" class="card-img-top">
                </div>
                <div class="card-body">
                    <h5 class="card-title">hahaha{{ $i }}</h5>
                    <p class="card-text">hahaha</p>
                    <a href="" class="btn btn-primary">hahahaha</a>
                </div>
            </div>
            @endfor
        </div>
    </div>
@endsection
