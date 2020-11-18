<!DOCTYPE html>
<html lang="en">

    <!-- begin::Head -->
    <head>
        <base href="../../../">
        <meta charset="utf-8" />
        <title>Bugtrucker | Modifier {{$domain->name}}</title>
        <meta name="description" content="Form controls validation">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!--begin::Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">

        <!--end::Fonts -->

        <!--begin::Global Theme Styles(used by all pages) -->
        <link href="{{ asset('plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
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
                    <div class="kt-portlet">
                                <div class="kt-portlet__head">
                                    <div class="kt-portlet__head-label">
                                        <h3 class="kt-portlet__head-title">
                                            Modifier le Domaine
                                        </h3>
                                    </div>
                                    <div class="pull-right" style="margin-top: 8px;">
                                    <a class="btn btn-primary" style="width: 105px;"href="{{ route('domains.index') }}"><i class="flaticon2-back-1"></i> Back</a>
                                </div>
                                </div>
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

                                <!--begin::Form-->
                                <form class="kt-form kt-form--label-right" id="kt_form_1" form action="{{ route('domains.update',$domain->id) }}" method="POST">@csrf
                                    @method('PUT')

                                    <div class="kt-portlet__body"> 
                                        <div class="form-group row">
                                            <label class="col-form-label col-lg-3 col-sm-12">Libelle *</label>
                                            <div class="col-lg-6 col-md-9 col-sm-12">
                                                <div class="kt-typeahead">
                                                    <input class="form-control" id="kt_typeahead" type="text" name="libelle" placeholder="Enter le libelle" value="{{$domain->libelle}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="kt-form__seperator kt-form__seperator--dashed kt-form__seperator--space"></div>
                                        <div class="form-group row">
                                            <label class="col-form-label col-lg-3 col-sm-12">Description *</label>
                                            <div class="col-lg-7 col-md-9 col-sm-12">
                                                <textarea name="description" class="form-control" data-provide="markdown" rows="10">{{ $domain->description}}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="kt-portlet__foot">
                                        <div class=" ">
                                            <div class="row">
                                                <div class="col-lg-9 ml-lg-auto">
                                                    <button type="submit" class="btn btn-success">Validate<i class="flaticon2-checkmark"></i></button>
                                                    <button type="reset" class="btn btn-secondary">Cancel</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                                <!--end::Form-->
                   </div>
                </div>
            </div>

         @include('backend.layouts.footer')


            <script src="{{asset('js/back_js/pages/crud/forms/validation/form-widgets.js') }=" type="text/javascript"></script>
     </body>
</html>