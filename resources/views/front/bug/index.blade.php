<!DOCTYPE>
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
       <div id="content" class="p-md-4">
            @include('front.front_layout.side')
             @if(Session::has('flash_message_success')) 
              <div class="alert alert-succes alert-block pt-4" >
                 <button type="button" class="close" data-dismiss="alert"></button> 
               <strong style="color: green;">{{ session("flash_message_success") }}</strong>
              </div>
           @endif
           @if ($message = Session::get('success'))
                        <div class="alert alert-light alert-elevate" role="alert">
                            <div class="ok-icon"><i class="flaticon-warning kt-font-brand"></i></div>
                            
                            <div class="alert-text" style="color: green;">
                                {{ $message }}
                            </div>
                           
                        </div>
                      @endif
           <table class="table table-dark">
                <thead>
                  <tr>
                    <th scope="col">Libelle</th>
                    <th scope="col">Domaine</th>
                    <th scope="col">Categorie</th>
                    <th scope="col">Visibilité</th> 
                    <th scope="col">Etat</th>
                    <th scope="col"> Action</th>

                    @if(Auth::user()->role->libelle == "superadmin")
                      <th scope="col">Attibué à</th>
                    @endif
                    
                  </tr>
                </thead>
                <tbody>
                  @foreach($bugs as $bug)
                  <tr>
                    <td>{{$bug->libelle}}</td>
                    <th scope="row">{{$bug->domain->libelle}}</th>
                    <td>
                      @foreach($bug->parametre as $param)
                         @if ($param->type == 'categorie' )
                         {{($param->libelle)}}
                         @continue
                          @endif 
                      @endforeach
                    </td>
                     <td>{{$bug->visibilite}}</td> 
                     <td> <a> <a href="" class="btn btn-primary"><i class="fa fa-check-circle-o Non resolu"></i></a></a>  </td>
                   
                    <td>
  
                     <form action="{{ route('bug.destroy',$bug->id) }}" method="POST">
                        <a href="{{ route('bug.show',$bug->id) }}" class="btn btn-info"><i class="fa fa-eye"></i></a>
                      <a href="{{ route('bug.edit',$bug->id) }}" class="btn btn-warning"><i class="fa fa-wrench"></i></a>
                                          
                          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalLong">
                            <i class="fa fa-trash"></i>
                          </button>
                          <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                 <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLongTitle">Vous-vous supprimer {{$bug->libelle}} ?</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                                          @csrf
                                         @method('DELETE') <button type="submit" class="btn btn-danger" > <i class="fa fa-trash"></i> Supprimer </button> 
                                    </div>
                                  </div>
                              </div>
                           </div>
                      </form>
                    </td>
                    @if(Auth::user()->role->libelle == "superadmin")
                      <td>    
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                           Choisir 
                        </button>

                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <select class="selectpicker" multiple data-live-search="true">
  <option>Mustard</option>
  <option>Ketchup</option>
  <option>Relish</option>
</select>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                  <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                              </div>
                            </div>
                      </div>

                      </td>
                    @endif
                  </tr>
                  <tr>
                  @endforeach
                </tbody>
            </table>

       </div>
  </div>
    <script src="{{asset('js/front_js/sidb/jquery.min.js') }}"></script>
    <script src="{{asset('js/front_js/sidb/popper.js') }}"></script>
    <script src="{{asset('js/front_js/sidb/bootstrap.min.js') }}"></script>
    <script src="{{asset('js/front_js/sidb/main.js') }}"></script>
    <script type="text/javascript">
      $('select').selectpicker();

    </script>
</body>
</html>

































