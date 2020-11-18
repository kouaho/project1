<!DOCTYPE html>
<html>
<head>
	<title>Bugtrucker</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd6 col-sm-12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="{{asset('css/front_css/sidebar/style.css')}}">
		<link rel="stylesheet" href="{{asset('css/front_css/sidebar/header.css')}}">
</head>
<body>

    @include('front.front_layout.header')
    
   <div class="wrapper d-flex align-items-stretch">

    @include('front.front_layout.sidebar')
       <div id="content" class="p-md-5">
            @include('front.front_layout.side')
       </div>
  </div>
    <script src="{{asset('js/front_js/sidb/jquery.min.js') }}"></script>
    <script src="{{asset('js/front_js/sidb/popper.js') }}"></script>
    <script src="{{asset('js/front_js/sidb/bootstrap.min.js') }}"></script>
    <script src="{{asset('js/front_js/sidb/main.js') }}"></script>
</body>
</html>