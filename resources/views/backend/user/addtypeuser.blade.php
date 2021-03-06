
<!DOCTYPE html>
<html lang="en">

	<!-- begin::Head -->
	<head>
		<base href="../../../">
		<meta charset="utf-8" />
		<title>Bugtrucker | Ajouter un role</title>
		<meta name="description" content="Form controls validation">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!--begin::Fonts -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">

		<!--end::Fonts -->

		<!--begin::Global Theme Styles(used by all pages) -->
		<link href="{{asset('plugins/global/plugins.bundle.css')}}')}}" rel="stylesheet" type="text/css" />
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
	             	<div class="row">
	             		<div class="col-lg-2"></div>
	             		<div class="col-lg-8">
							<div class="kt-portlet">
								<div class="kt-portlet__head">
									<div class="kt-portlet__head-label">
										<h3 class="kt-portlet__head-title">
										Ajouter un role
										</h3>
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
								<form class="kt-form kt-form--label-right" id="kt_form_2" method="POST" action="{{route('role.index')}}">@csrf
									<div class="kt-portlet__body">
										<div class="kt-section">
		
											<div class="kt-section__content">
												<div class="form-group row">
													<div class="col-lg-12">
														<label class="form-control-label">* Libelle:</label>
														<input type="text" name="libelle" class="form-control" placeholder="" value="">
											</div>
										</div>
									<div class="kt-portlet__foot">
										<div class="kt-form__actions">
											<div class="row">
												<div class="col-lg-12">
													<button type="submit" class="btn btn-brand">Ajouter</button>
													<button type="reset" class="btn btn-secondary">Annuler</button>
												</div>
											</div>
										</div>
									</div>
								</form>

								<!--end::Form-->
							</div>

										<!--end::Portlet-->
						</div>
						<div class="col-lg-2"></div>
	             	</div>
	             </div>
             </div>
         @include('backend.layouts.footer')

     <script src="{{asset('js/back_js/pages/crud/forms/validation/form-controls.js')}}" type="text/javascript"></script>

	</body>
</html>