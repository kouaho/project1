<!DOCTYPE html>
<html lang="en">

    <!-- begin::Head -->
    <head>
        <base href="../../../../">
        <meta charset="utf-8" />
        <title>Metronic | {{$user->name}}</title>
        <meta name="description" content="User profile personal information example">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!--begin::Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">

        <!--end::Fonts -->

        <!--begin::Global Theme Styles(used by all pages) -->
        <link href="{{asset('plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />

        <!--end::Global Theme Styles -->

        <!--begin::Layout Skins(used by all pages) -->
        <link href="{{ asset('css/css/skins/header/base/light.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/css/skins/header/menu/light.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/css/skins/brand/dark.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('css/css/skins/aside/dark.css')}}" rel="stylesheet" type="text/css" />

        <!--end::Layout Skins -->
        <link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
    </head>

    <!-- end::Head -->

    <!-- begin::Body -->
    <body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">
        @include('backend.layouts.header')
         @include('backend.layouts.sidebar')
            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">
                <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
                    <div class="kt-grid__item kt-grid__item--fluid kt-app__content">
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
                        <div class="row">
                            <div class="col-lg-4">
                                
                                <div class="kt-portlet">
                                    <div class="kt-portlet__head">
                                        <div class="kt-portlet__head-label">
                                            <h3 class="kt-portlet__head-title"> Information Personnel <small></small></h3>
                                        </div>                          
                                    </div>
                                    <div class="kt-avatar kt-avatar--outline pull-right" id="kt_user_avatar">
                                        <div class="kt-avatar__holder" style="background-image: url( {{URL::to('/')}}/img/user/{{$user->img}})" ></div>
                                            
                                    </div>
                                    <div class="kt-portlet__head">
                                        <div class="kt-portlet__head-label">
                                            <h3 class="kt-portlet__head-title"> UserName <small>{{$user->username}}</small></h3>
                                        </div>                          
                                    </div>
                                    <div class="kt-portlet__head">
                                        <div class="kt-portlet__head-label">
                                            <h3 class="kt-portlet__head-title"> Name <small>{{$user->name}}</small></h3>
                                        </div>
                                    </div>
                                    <div class="kt-portlet__head">
                                        <div class="kt-portlet__head-label">
                                            <h3 class="kt-portlet__head-title"> Prenom <small>{{$user->prenom}}</small></h3>
                                        </div>
                                    </div>
                                    <div class="kt-portlet__head">
                                        <div class="kt-portlet__head-label">
                                            <h3 class="kt-portlet__head-title"> Email :<small>{{$user->email}}</small></h3>
                                        </div>
                                    </div>
                                    <div class="kt-portlet__head">
                                        <div class="kt-portlet__head-label">
                                            <h3 class="kt-portlet__head-title"> Role :<small>{{($user->role->libelle)}}</small></h3>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="kt-portlet">
                                    <div class="kt-portlet__head">
                                        <div class="kt-portlet__head-label">
                                            <h3 class="kt-portlet__head-title">Modifier les informations<small></small></h3>
                                        </div>

                                        <div class="kt-portlet__head-toolbar">
                                            <div class="pull-right" style="margin-top: 8px; margin-right: 40px;">
                                                <a class="btn btn-primary" style="width: 105px;"href="{{ route('users.index') }}"><i class="flaticon2-back-1"></i> Retour</a>
                                             </div>
                                            <div class="kt-portlet__head-wrapper">
                                                <div class="dropdown dropdown-inline">
                                                    <button type="button" class="btn btn-label-brand btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="flaticon2-gear"></i>
                                                    </button>
                                                    
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <ul class="kt-nav">
                                                            <li class="kt-nav__section kt-nav__section--first">
                                                                <span class="kt-nav__section-text">Export Tools</span>
                                                            </li>
                                                            <li class="kt-nav__item">
                                                                <a href="#" class="kt-nav__link">
                                                                    <i class="kt-nav__link-icon la la-print"></i>
                                                                    <span class="kt-nav__link-text">Print</span>
                                                                </a>
                                                            </li>
                                                            <li class="kt-nav__item">
                                                                <a href="#" class="kt-nav__link">
                                                                    <i class="kt-nav__link-icon la la-copy"></i>
                                                                    <span class="kt-nav__link-text">Copy</span>
                                                                </a>
                                                            </li>
                                                            <li class="kt-nav__item">
                                                                <a href="#" class="kt-nav__link">
                                                                    <i class="kt-nav__link-icon la la-file-excel-o"></i>
                                                                    <span class="kt-nav__link-text">Excel</span>
                                                                </a>
                                                            </li>
                                                            <li class="kt-nav__item">
                                                                <a href="#" class="kt-nav__link">
                                                                    <i class="kt-nav__link-icon la la-file-text-o"></i>
                                                                    <span class="kt-nav__link-text">CSV</span>
                                                                </a>
                                                            </li>
                                                            <li class="kt-nav__item">
                                                                <a href="#" class="kt-nav__link">
                                                                    <i class="kt-nav__link-icon la la-file-pdf-o"></i>
                                                                    <span class="kt-nav__link-text">PDF</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <form class="kt-form kt-form--label-right" method="POST" action="{{route('users.index')}}" enctype="multpart/form-data">@csrf
                                        <div class="kt-portlet__body">
                                            <div class="kt-section kt-section--first">
                                                <div class="kt-section__body">
                                                    <div class="row">
                                                        <label class="col-xl-3"></label>
                                                        <div class="col-lg-9 col-xl-6">
                                                            <h3 class="kt-section__title kt-section__title-sm"></h3>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">Avatar</label>
                                                        <div class="col-lg-9 col-xl-6">
                                                            <div class="kt-avatar kt-avatar--outline" id="kt_user_avatar">
                                                                <div class="kt-avatar__holder" style="background-image: url( {{URL::to('/')}}/img/user/{{$user->img}} )"></div>
                                                                <label class="kt-avatar__upload" data-toggle="kt-tooltip" title="" data-original-title="Change avatar">
                                                                    <i class="fa fa-pen"></i>
                                                                    <input type="file" name="img" accept=".png, .jpg, .jpeg" value="{{URL::to('/')}}/img/user/{{$user->img}}">
                                                                </label>
                                                                <span class="kt-avatar__cancel" data-toggle="kt-tooltip" title="" data-original-title="Cancel avatar">
                                                                    <i class="fa fa-times"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label"> UserName</label>
                                                        <div class="col-lg-9 col-xl-6">
                                                            <input name="username" class="form-control" type="text" value="{{$user->username}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label"> Name</label>
                                                        <div class="col-lg-9 col-xl-6">
                                                            <input class="form-control" name="name" type="text" value="{{$user->name}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">Prenom </label>
                                                        <div class="col-lg-9 col-xl-6">
                                                            <input class="form-control" name="prenom" type="text" value="{{$user->prenom}}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">email </label>
                                                        <div class="col-lg-9 col-xl-6">
                                                            <input class="form-control" type="text" value="{{$user->email}}">
                                                        </div>
                                                    </div>
                                                
                                                    <div class="form-group row">
                                                        <label class="col-lg-3">Role</label>
                                                        <div class="col-lg-9 col-xl-6 select">
                                                            <select class="form-control" name="roles_id">
                                                                <option selected="selected">{{ $user->role->libelle}}</option>
                                                                @foreach($roles as $key => $value)
                                                                    <option value="{{ $value->id }}">{{ $value->libelle }}</option>
                                                                @endforeach
                                                            </select>
                                                            
                                                        </div>
                                                    </div>

                                                    

                                                </div>
                                            </div>
                                        </div>
                                        <div class="kt-portlet__foot">
                                            <div class="kt-form__actions">
                                                <div class="row">
                                                    <div class="col-lg-3 col-xl-3">
                                                    </div>
                                                    <div class="col-lg-9 col-xl-9">
                                                        <button type="Submit" class="btn btn-success">Submit</button>&nbsp;
                                                        <button type="reset" class="btn btn-secondary">Cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>         
             

         @include('backend.layouts.footer')
        <script src="{{asset('js/back_js/pages/dashboard.js')}}" type="text/javascript"></script>
        <script src="{{asset('js/back_js/pages/custom/user/profile.js')}}" type="text/javascript"></script>
    </body>

</html>
