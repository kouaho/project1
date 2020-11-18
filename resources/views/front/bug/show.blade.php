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
         <div class="row" >
              <h1>{{$bug->libelle}}</h1>
             <div class="col-12 pt-4"style="background-image: url( {{URL::to('/')}}/img/bug/{{$bug->img}} ); height: 400px;">
              
             </div>
         </div>
            <div class="row">
                <div class="col-6 col-md-6 col-sm-12">
                    <div class="card mt-3">
                        <div class="card-header card-title">
                           <h5 class="card-title">Résumé</h5>
                        </div>
                        <div class="card-body">         
                            <p class="card-text">{{$bug->resume}}</p>   
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-6 col-sm-12">
                    <div class="card mt-3">
                        <div class="card-header card-title">
                        <h5 class="card-title">Description</h5>
                        </div>
                        <div class="card-body">         
                            <p class="card-text">{{$bug->description}}</p>   
                        </div>
                    </div>
                </div>
                             
            </div>
            <table class="table table-white">
                <thead>
                    <tr>
                        <th scope="col">Domaine Conserné</th>
                        <th scope="col">Visibilité</th>
                        <th scope="col">Categorie</th>
                        <th scope="col">Réproductibilité</th>
                        <th scope="col">Impact</th>
                        <th scope="col">Priorité</th>
                        <th scope="col">Ajouté par:</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="table-dark">
                        <td>{{$bug->domain->libelle}}</td>
                        <td>{{$bug->visibilite}}</td>
                        <td>
                            @foreach($bug->parametre as $param)
                             @if ($param->type == 'categorie' )
                             {{($param->libelle)}}
                             @continue
                              @endif 
                            @endforeach
                        </td>
                        <td>
                         @foreach($bug->parametre as $param)
                             @if ($param->type == 'reproductibilite' )
                             {{($param->libelle)}}
                             @continue
                          @endif 
                        @endforeach
                        </td>
                        <td>
                         @foreach($bug->parametre as $param)
                             @if ($param->type == 'impact' )
                             {{($param->libelle)}}
                             @continue
                              @endif 
                          @endforeach
                        </td>
                        <td>
                            @foreach($bug->parametre as $param)
                                 @if ($param->type == 'priorite' )
                                 {{($param->libelle)}}
                                 @continue
                                  @endif 
                            @endforeach</td>
                        <td>{{$bug->user->name}}</td>
                    </tr>
                </tbody>
            </table>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                  Ajouter un commentaire
            </button>
            <a href="{{ route('bug.edit',$bug->id) }}" class="btn btn-warning pull-right mr-15"><i class="fa fa-wrench"> Modifier</i></a>
            <hr>
            <h5>Commentaire</h5>
            


            <!-- Button trigger modal -->


<!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">commenter le bug</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form method="post" action="{{ route('comment.add') }}">
                        @csrf
                        <div class="form-group">
                            <textarea class="form-control" name="body"></textarea>
                            <input type="hidden" name="bug_id" value="{{ $bug->id }}" />
                        </div>
                        <div class="form-group">
                            
                        </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                    <input type="submit" class="btn btn-success" value="Commenter" /> 
                  </div>
                </form>
                </div>
              </div>
            </div>

            <!-- -->
        </div>
  </div>
    <script src="{{asset('js/front_js/sidb/jquery.min.js') }}"></script>
    <script src="{{asset('js/front_js/sidb/popper.js') }}"></script>
    <script src="{{asset('js/front_js/sidb/bootstrap.min.js') }}"></script>
    <script src="{{asset('js/front_js/sidb/main.js') }}"></script>
</body>
</html>