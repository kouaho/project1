<!DOCTYPE html>
<html lang="en">

	<!-- begin::Head -->
	<head>
		<base href="../../../">
		<meta charset="utf-8" />
		<title>Bugtrucker | Ajouter un administrateur</title>
		<meta name="description" content="Form controls validation">
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
		<link rel="shortcut icon" href="{{asset('media/logos/favicon.ico')}}" />
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
										Ajouter un administrateur
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
								<form class="kt-form kt-form--label-right" id="kt_form_2" method="POST" action="{{route('users.index')}}" enctype="multipart/form-data">@csrf
									<div class="kt-portlet__body">
										<div class="kt-section">
		
											<div class="kt-section__content">
												<div class="form-group row">
													<div class="form-group row">
													<label class="col-xl-3 col-lg-3 col-form-label">Avartar</label>
													<div class="col-lg-9 col-xl-6">
														<div class="kt-avatar kt-avatar--outline" id="kt_user_avatar_1">
															<div class="kt-avatar__holder" style="background-image: url({{asset('media/users/default.jpg')}})"></div>
															<label class="kt-avatar__upload" data-toggle="kt-tooltip" title="" data-original-title="Change avatar">
																<i class="fa fa-pen"></i>
																<input type="file" name="img" accept=".png, .jpg, .jpeg">
															</label>
															<span class="kt-avatar__cancel" data-toggle="kt-tooltip" title="" data-original-title="Cancel avatar">
																<i class="fa fa-times"></i>
															</span>
														</div>
														<span class="form-text text-muted">Format accepté: png, jpg, jpeg.</span>
													</div>
										            </div>
													<div class="col-lg-12">
														<label class="form-control-label">* Name:</label>
														<input type="text" name="name" class="form-control" placeholder="" value=" ">
													</div>
													<div class="col-lg-12">
														<label class="form-control-label">* Prenom:</label>
														<input type="text" name="prenom" class="form-control" placeholder="" value="">
													</div>
													<div class="col-lg-12">
														<label class="form-control-label">* Username:</label>
														<input type="text" name="username" class="form-control" placeholder="" value="">
													</div>
													<div class="col-lg-12">
														<label class="form-control-label">* Email:</label>
														<input type="email" name="email" class="form-control" placeholder="" value="">
													</div>
													<div class="col-lg-12">
														<label class="form-control-label">* Password:</label>
														<input type="password" name="password" class="form-control" placeholder="">
													</div>
																				
							                        <div class="fg-line col-lg-12">  <label class="form-control-label">Role *</label>
							                            <div class="select">
							                                <select class="form-control" name="roles_id">
							                                    <option>selection un role</option>
							                                    @foreach($roles as $key => $value)
							                                        <option value="{{ $value->id }}">{{ $value->libelle }}</option>
							                                    @endforeach
							                                </select>
							                            </div>
							                        </div> 
							                        <div class="fg-line col-lg-12">
													    <label class="col-form-label">Domaine Géré</label> 
													     <select class="form-control select2" id="kt_select2_9" name="domains[]" multiple>
													      <option label="Label"></option>
													          <option>selection un role</option>
							                                    @foreach($domains as $key => $value)
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
         <div class="card card-custom">
 <div class="card-header">
  <h3 class="card-title">
   Select2 Examples
  </h3>
 </div>
     <script src="{{asset('js/js/pages/crud/forms/validation/form-controls.js')}}" type="text/javascript"></script>
    <script src="{{asset('js/js/pages/crud/file-upload/ktavatar.js')}}" type="text/javascript"></script>
    <script type="text/javascript">
     	var KTSelect2 = function() {
			 // Private functions
			 var demos = function() {
			  // basic
			  $('#kt_select2_1').select2({
			   placeholder: "Select a state"
			  });

			  // nested
			  $('#kt_select2_2').select2({
			   placeholder: "Select a state"
			  });

			  // multi select
			  $('#kt_select2_3').select2({
			   placeholder: "Select a state",
			  });

			  // basic
			  $('#kt_select2_4').select2({
			   placeholder: "Select a state",
			   allowClear: true
			  });

			  // loading data from array
			  var data = [{
			   id: 0,
			   text: 'Enhancement'
			  }, {
			   id: 1,
			   text: 'Bug'
			  }, {
			   id: 2,
			   text: 'Duplicate'
			  }, {
			   id: 3,
			   text: 'Invalid'
			  }, {
			   id: 4,
			   text: 'Wontfix'
			  }];

			  $('#kt_select2_5').select2({
			   placeholder: "Select a value",
			   data: data
			  });

			  // loading remote data

			  function formatRepo(repo) {
			   if (repo.loading) return repo.text;
			   var markup = "<div class='select2-result-repository clearfix'>" +
			    "<div class='select2-result-repository__meta'>" +
			    "<div class='select2-result-repository__title'>" + repo.full_name + "</div>";
			   if (repo.description) {
			    markup += "<div class='select2-result-repository__description'>" + repo.description + "</div>";
			   }
			   markup += "<div class='select2-result-repository__statistics'>" +
			    "<div class='select2-result-repository__forks'><i class='fa fa-flash'></i> " + repo.forks_count + " Forks</div>" +
			    "<div class='select2-result-repository__stargazers'><i class='fa fa-star'></i> " + repo.stargazers_count + " Stars</div>" +
			    "<div class='select2-result-repository__watchers'><i class='fa fa-eye'></i> " + repo.watchers_count + " Watchers</div>" +
			    "</div>" +
			    "</div></div>";
			   return markup;
			  }

			  function formatRepoSelection(repo) {
			   return repo.full_name || repo.text;
			  }

			  $("#kt_select2_6").select2({
			   placeholder: "Search for git repositories",
			   allowClear: true,
			   ajax: {
			    url: "https://api.github.com/search/repositories",
			    dataType: 'json',
			    delay: 250,
			    data: function(params) {
			     return {
			      q: params.term, // search term
			      page: params.page
			     };
			    },
			    processResults: function(data, params) {
			     // parse the results into the format expected by Select2
			     // since we are using custom formatting functions we do not need to
			     // alter the remote JSON data, except to indicate that infinite
			     // scrolling can be used
			     params.page = params.page || 1;

			     return {
			      results: data.items,
			      pagination: {
			       more: (params.page * 30) < data.total_count
			      }
			     };
			    },
			    cache: true
			   },
			   escapeMarkup: function(markup) {
			    return markup;
			   }, // let our custom formatter work
			   minimumInputLength: 1,
			   templateResult: formatRepo, // omitted for brevity, see the source of this page
			   templateSelection: formatRepoSelection // omitted for brevity, see the source of this page
			  });

			  // custom styles

			  // tagging support
			  $('#kt_select2_12_1, #kt_select2_12_2, #kt_select2_12_3, #kt_select2_12_4').select2({
			   placeholder: "Select an option",
			  });

			  // disabled mode
			  $('#kt_select2_7').select2({
			   placeholder: "Select an option"
			  });

			  // disabled results
			  $('#kt_select2_8').select2({
			   placeholder: "Select an option"
			  });

			  // limiting the number of selections
			  $('#kt_select2_9').select2({
			   placeholder: "selectionner un domaine au moins",
			   
			  });

			  // hiding the search box
			  $('#kt_select2_10').select2({
			   placeholder: "Select an option",
			   minimumResultsForSearch: Infinity
			  });

			  // tagging support
			  $('#kt_select2_11').select2({
			   placeholder: "Add a tag",
			   tags: true
			  });

			  // disabled results
			  $('.kt-select2-general').select2({
			   placeholder: "Select an option"
			  });
			 }

			 var modalDemos = function() {
			  $('#kt_select2_modal').on('shown.bs.modal', function () {
			   // basic
			   $('#kt_select2_1_modal').select2({
			    placeholder: "Select a state"
			   });

			   // nested
			   $('#kt_select2_2_modal').select2({
			    placeholder: "Select a state"
			   });

			   // multi select
			   $('#kt_select2_3_modal').select2({
			    placeholder: "Select a state",
			   });

			   // basic
			   $('#kt_select2_4_modal').select2({
			    placeholder: "Select a state",
			    allowClear: true
			   });
			  });
			 }

			 // Public functions
			 return {
			  init: function() {
			   demos();
			   modalDemos();
			  }
			 };
			}();

			// Initialization
			jQuery(document).ready(function() {
			 KTSelect2.init();
			});
    </script>
    
	</body>
</html>