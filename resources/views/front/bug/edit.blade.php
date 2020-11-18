<!DOCTYPE html>
<html>
<head>
  <title>Bugtrcker | ADD BUG</title>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

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
          <!--content -->
          <div class="p-4" >
            @if ($errors->any())
              <div class="kt-portlet__head">
                  <div class="kt-portlet__head-label">
                      <strong>Whoops!</strong> 
                      <ul style="color: red">
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>                  
                  </div>
              </div>
              @endif
             <form method="POST" action="{{route('bug.update',$bug->id)}}" enctype="multipart/form-data">@csrf
                @method('PUT')
                <!--  -->
                <div class="form-group fg-line">
                        <label for="exampleInputEmail1">Libelle du bug</label>
                        <input type="text" class="form-control input-sm" name="libelle" placeholder="Enter le libelle du bug" value="{{$bug->libelle}}">
                </div>
                <hr>
                 <div class="col-lg-12 col-md-12 col-xl-12 col-sm-12">
                          <div class="form-group">
                            <label for="exampleFormControlSelect1">Resumé</label>
                            <textarea class="form-control" rows="5" name="resume">{{ $bug->resume}}</textarea>
                          </div>
                      </div>
                      <hr>
                      <div class="col-lg-12 col-md-12 col-xl-12 col-sm-">
                          <div class="form-group">
                            <label for="exampleFormControlSelect1">Description</label>
                             <textarea class="form-control" rows="5" name="description">{{$bug->description}}</textarea> <br>
                          
                          
                      </div>
                <hr>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-xl-6 col-sm-12">
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Catégorie</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="categorie">      
                          <p>Selectionner</p>
                          @foreach($categorie as $key => $value)
                                  <option value="{{ $value->id }}" @if($cat == $value->libelle) selected="selected" @endif >{{ $value->libelle }}</option>
                             @endforeach 
                                           

                        </select>
                      </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-xl-6 col-sm-12">
                      <div class="form-group">
                        <label for="exampleFormControlSelect1" >Reproductibilité</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="reproductibilite">

                             @foreach($reproductibilite as $key => $value)
                                  <option value="{{ $value->id }}" @if($rep == $value->libelle) selected="selected" @endif>{{ $value->libelle }}</option>
                             @endforeach
                          
                            
                        </select>
                      </div> 
                    </div>
                    <div class="col-lg-6 col-md-6 col-xl-6 col-sm-12">
                      <div class="form-group">
                        <label for="exampleFormControlSelect1">Impact</label>
                        <select class="form-control" id="exampleFormControlSelect1" name="impact">
                          <p>Selectionner</p>
                          @foreach($impact as $key => $value)
                                  <option value="{{ $value->id }}" @if($imp == $value->libelle) selected="selected" @endif>{{ $value->libelle }}</option>
                             @endforeach 
                            
                        </select>
                      </div>
                     </div>
                     <div class="col-lg-6 col-md-6 col-xl-6 col-sm-12">
                          <div class="form-group">
                            <label for="exampleFormControlSelect1">priorite</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="priorite">
                              <p>Selectionner</p>
                              tion>Selectionner</option>
                                 @foreach($priorite as $key => $value)
                                  <option value="{{ $value->id }}" @if($pri == $value->libelle) selected="selected" @endif>{{ $value->libelle }}</option>
                                @endforeach
                                 
                                
                            </select>
                          </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-xl-6 col-sm-12">
                          <div class="form-group">
                            <label for="exampleFormControlSelect1">Visibilité</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="visibilite">
                              <option >selectionner</option>
                              
                                <option value="Privé" {{ $bug->visiblite = 'Privé' ? 'selected' : ''}}>Privé</option>
                                <option alue="Public" {{ $bug->visiblite = 'Public' ? 'selected' : ''}} >Publique</option>
                             
                            </select>
                          </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-xl-6 col-sm-12">
                          <div class="form-group">
                            <label for="exampleFormControlSelect1">Ajouter par</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="user_id">
                              <option value="{{Auth::User()->id}}" selected=""> {{Auth::User()->name}} </option>
                            </select>
                          </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-xl-6 col-sm-12">
                          <div class="form-group">
                            <label for="exampleFormControlSelect1">Domaine Conserné</label>
                            <select class="form-control" id="exampleFormControlSelect1" name="domain_id">
                                 @foreach($domain as $key => $value)
                                  <option value="{{ $value->id }}" @if($bug->domain_id == $value->id) selected="selected" @endif>{{ $value->libelle }}</option>
                                @endforeach
                               
                            </select>
                          </div>
                      </div>
                      <div class="col-lg-6 col-md-6 col-xl-6 col-sm-12">
                        <div class="form-group">
                            <label for="exampleFormControlFile1">Capture d'écran</label>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="img" value={{$bug->img}}"">
                        </div>
                          
                      </div>     

                    </div>
                    <button type="submit" class="btn btn-primary btn-lg pull-right " style="width: 200px; margin-right:10px; ">Modifier</button>

              </form>
          </div>
    </div>
  
  </div>
    <script src="{{asset('js/front_js/sidb/jquery.min.js') }}"></script>
    <script src="{{asset('js/front_js/sidb/popper.js') }}"></script>
    <script src="{{asset('js/front_js/sidb/bootstrap.min.js') }}"></script>
    <script src="{{asset('js/front_js/sidb/main.js') }}"></script>
    
</body>
</html>