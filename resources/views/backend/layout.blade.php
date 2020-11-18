<!DOCTYPE html>
<html>
<head>
  <title>Bugtrucker | Home</title>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
  <style type="text/css" href="{{asset('css/backend_css/style.css')}}" ></style>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img class="logo horizontal-logo" width="155px" src="{{asset('img/Logo Aguima-01.png')}}" alt="logo Aguima-01">
          </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              User
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                <a class="dropdown-item" href="{{ route('users.index') }}">Liste Users</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ route('users.create') }}">Add User</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="{{ route('domains.index') }}" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Domaine
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                <a class="dropdown-item" href="{{ route('domains.index') }}">List Domain</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="{{ route('domains.create') }}">Add Domain</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Users Domain
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown3">
                <a class="dropdown-item" href="#">List Users Domain</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
            
          </ul>
        </div>
      </div>
    </nav>

	<div class="container">
	    @yield('content')
	</div>
	
	
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="{{asset('js/back_js/js.js')}}"></script>
</body>
</html>