@extends('layouts.Layouts-Admin.adminLayout')

@section('title', 'Admin Home')

@section('content')

<link rel="stylesheet" href="{{ asset('css/admin-css/home-admin.css') }}">

<body>
            <br>
        <h1 style="text-align: center">Admin Home - Painel Administrativo</h1>
            <br>
            
        <div class="card-container">
                {{-- Card 1--}}
        <div class="card">
            <div class="card-header">
                <h1>Admin Home</h1>
            </div>
            <div class="card-body">
                <p>Bem-vindo ao painel administrativo da ClubeFy.</p>
            </div>
        </div>

                {{-- Card 2 --}}
        <div class="card">
            <div class="card-header">
                <h1>Gerenciar Produtos</h1>
            </div>
            <div class="card-body">
                <p>Aqui você pode gerenciar os produtos, categorias e clientes da plataforma.</p>
            </div>
        </div>
                {{-- Card 3 --}}
        <div class="card">
            <div class="card-header">
                <h1>Gerenciar Clientes</h1>
            </div>
            <div class="card-body">
                <p>Aqui você pode gerenciar os clientes da plataforma.</p>
            </div>
        </div>
        </div>
</body>




@endsection