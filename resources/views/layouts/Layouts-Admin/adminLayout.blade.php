<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="icon" href="{{ asset('img/components/icons/logo.png') }}" type="image/png">
        <link rel="stylesheet" href="{{ asset('css/admin-css/admin.css') }}">
    </head>
<body>
    
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="collapse navbar-collapse" id="navbar">
              <a href="/admin" class="navbar-brand">
                <img src="{{ asset('img/components/logo.png') }}" alt="ClubeFy" class="logo">
                  Admin ClubeFy

              </a>
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a href="/admin/users/index" class="nav-link">Usuários</a>
                </li>
                
                <li class="nav-item">
                  <a href="/admin/createClube" class="nav-link">Criar Clubes</a>
                </li>
                
                <li class="nav-item">
                  <a href="/admin/CreateSubscription" class="nav-link">Criar Assinaturas</a>
                </li>
                <li class="nav-item">
                  <a href="/admin/seeclubs" class="nav-link">Ver Clubes</a>
                </li>
                <li class="nav-item">
                  <a href="/admin/seesubscriptions" class="nav-link">Ver Assinaturas</a>
                </li>
                <li class="nav-item">
                  <a href="/" class="nav-link">Sair</a>
                </li>
                
              </ul>
            </div>
          </nav>
    </header>
    @yield('content')
    
    <footer>
        <p>Todos os direitos reservados a ClubeFy &copy; 2024 </p>
    </footer>
    <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
</body>
</html>