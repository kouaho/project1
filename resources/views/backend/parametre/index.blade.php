
<!DOCTYPE html>
<html lang="en">

    <!-- begin::Head -->
    <head>
        <base href="../../../">
        <meta charset="utf-8" />
        <title>Bugtrucker | Liste des Paramtres</title>
        <meta name="description" content="Column rendering datatables examples">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!--begin::Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">

        <!--end::Fonts -->

        <!--begin::Page Vendors Styles(used by this page) -->
        <link href="{{asset('plugins/custom/datatables/datatables.bundle.css')}}" rel="stylesheet" type="text/css" />

        <!--end::Page Vendors Styles -->

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
        <link rel="shortcut icon" href="{{asset('media/logos/favicon.ico')}}" />
    </head>

    <!-- end::Head -->

    <!-- begin::Body -->
    <body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">
        @include('backend.layouts.header')
            @include('backend.layouts.sidebar')
            <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper" id="kt_wrapper">
                <div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-light alert-elevate" role="alert">
                            <div class="ok-icon"><i class="flaticon-warning kt-font-brand"></i></div>
                            
                            <div class="alert-text" style="color: green;">
                                {{ $message }}
                            </div>
                           
                        </div>
                      @endif
                            <div class="kt-portlet kt-portlet--mobile">
                                <div class="kt-portlet__head kt-portlet__head--lg">
                                    <div class="kt-portlet__head-label">
                                        <span class="kt-portlet__head-icon">
                                            <i class="kt-font-brand flaticon2-line-chart"></i>
                                        </span>
                                        <h3 class="kt-portlet__head-title">
                                            Liste des paramètres
                                        </h3>
                                    </div>
                                    <div class="kt-portlet__head-toolbar">
                                        <div class="kt-portlet__head-wrapper">
                                            <div class="kt-portlet__head-actions">
                                                <div class="dropdown dropdown-inline">
                                                    <button type="button" class="btn btn-default btn-icon-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="la la-download"></i> Export
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <ul class="kt-nav">
                                                            <li class="kt-nav__section kt-nav__section--first">
                                                                <span class="kt-nav__section-text">Choisir un option</span>
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
                                                &nbsp;
                                                <a href="{{ route('parametre.create',['type'=>'impact']) }}" class="btn btn-brand btn-elevate btn-icon-sm">
                                                    <i class="la la-plus"></i>
                                                    Nouveau Paramètre
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="kt-portlet__body">

                                    <!--begin: Datatable -->
                                    <table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
                                        <thead>
                                            <tr>
                                                <th> Id</th>
                                                <th>Type</th>
                                                <th>Libelle </th>
                                                <th>Description </th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($parametres as $parametre)
                                                <tr>
                                                    <td>{{ $parametre->id}}</td>
                                                    <td>{{ $parametre->type }}</td>
                                                    <td>{{ $parametre->libelle }}</td>
                                                    <td>
                                                    {{ substr($parametre->description, 0, 40) }}</td>
                                                    
                                                    <td class="pull-center">
                                                        <form action="{{ route('parametre.destroy',$parametre->id) }}" method="POST">
                                                            <a class="btn btn-info" href="{{ route('parametre.show',$parametre->id) }}"><i class="flaticon-eye "></i>Voir</a>
                                                            <a class="btn btn-primary" href="{{ route('parametre.edit',$parametre->id) }}"><i class="flaticon-edit " ></i>Modifier</a>
                                                         @csrf
                                                         @method('DELETE')<button type="submit" class="btn btn-danger">Supprmer<i class="flaticon-delete"></i></button>
                                                      </form>
                                                    </td>

                                                    
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>

                                    <!--end: Datatable -->
                                </div>
                            </div>
                </div>
            </div>
            @include('backend.layouts.footer')
            <!-- <script src="{{asset('plugins/custom/datatables/datatables.bundle.js')}}" type="text/javascript"></script>
            <script src="{{asset('js/back_js/pages/crud/datatables/advanced/column-rendering.js')}}" type="text/javascript"></script> -->
            <script src="{{ asset('plugins/custom/datatables/datatables.bundle.js') }}" type="text/javascript"></script>

        <!--end::Page Vendors -->

        <!--begin::Page Scripts(used by this page) -->
        <script src="{{ asset('js/js/pages/crud/datatables/advanced/column-rendering.js') }}" type="text/javascript"></script>
        <script src="{{ asset('js/js/bootstrap.min.js') }}"></script>


        <script type="text/javascript">
            $(document).ready(function() {
                $('#kt_table_1').DataTable();
            } );
        </script>
     </body>
</html>