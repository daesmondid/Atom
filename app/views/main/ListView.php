<!DOCTYPE html>
<html lang="en" data-textdirection="LTR" class="loading">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport"
	content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta name="description"
	content="Robust admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
<meta name="keywords"
	content="admin template, robust admin template, dashboard template, flat admin template, responsive admin template, web app">
<meta name="author" content="PIXINVENT">
<title>Basic DataTables - Robust Admin Template</title>
<link rel="apple-touch-icon" sizes="60x60"
	href="<?=$data['atomConstants']->baseUrl?>/app-assets/images/ico/apple-icon-60.png">
<link rel="apple-touch-icon" sizes="76x76"
	href="<?=$data['atomConstants']->baseUrl?>/app-assets/images/ico/apple-icon-76.png">
<link rel="apple-touch-icon" sizes="120x120"
	href="<?=$data['atomConstants']->baseUrl?>/app-assets/images/ico/apple-icon-120.png">
<link rel="apple-touch-icon" sizes="152x152"
	href="<?=$data['atomConstants']->baseUrl?>/app-assets/images/ico/apple-icon-152.png">
<link rel="shortcut icon" type="image/x-icon"
	href="<?=$data['atomConstants']->baseUrl?>/app-assets/images/ico/favicon.ico">
<link rel="shortcut icon" type="image/png"
	href="<?=$data['atomConstants']->baseUrl?>/app-assets/images/ico/favicon-32.png">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-touch-fullscreen" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="default">
<!-- BEGIN VENDOR CSS-->
<link rel="stylesheet" type="text/css"
	href="<?=$data['atomConstants']->baseUrl?>/app-assets/css/bootstrap.css">
<!-- font icons-->
<link rel="stylesheet" type="text/css"
	href="<?=$data['atomConstants']->baseUrl?>/app-assets/fonts/icomoon.css">
<link rel="stylesheet" type="text/css"
	href="<?=$data['atomConstants']->baseUrl?>/app-assets/fonts/flag-icon-css/css/flag-icon.min.css">
<link rel="stylesheet" type="text/css"
	href="<?=$data['atomConstants']->baseUrl?>/app-assets/vendors/css/sliders/slick/slick.css">
<link rel="stylesheet" type="text/css"
	href="<?=$data['atomConstants']->baseUrl?>/app-assets/vendors/css/extensions/pace.css">
<link rel="stylesheet" type="text/css"
	href="<?=$data['atomConstants']->baseUrl?>/app-assets/vendors/css/tables/datatable/dataTables.bootstrap4.min.css">
<!-- END VENDOR CSS-->
<!-- BEGIN ROBUST CSS-->
<link rel="stylesheet" type="text/css"
	href="<?=$data['atomConstants']->baseUrl?>/app-assets/css/bootstrap-extended.css">
<link rel="stylesheet" type="text/css"
	href="<?=$data['atomConstants']->baseUrl?>/app-assets/css/app.css">
<link rel="stylesheet" type="text/css"
	href="<?=$data['atomConstants']->baseUrl?>/app-assets/css/colors.css">
<link rel="stylesheet" type="text/css"
	href="<?=$data['atomConstants']->baseUrl?>/assets/css/style.css">
<!-- END ROBUST CSS-->
<!-- BEGIN Page Level CSS-->
<link rel="stylesheet" type="text/css"
	href="<?=$data['atomConstants']->baseUrl?>/app-assets/css/core/menu/menu-types/vertical-menu.css">
<link rel="stylesheet" type="text/css"
	href="<?=$data['atomConstants']->baseUrl?>/app-assets/css/core/menu/menu-types/vertical-overlay-menu.css">
<!-- END Page Level CSS-->
<!-- BEGIN Custom CSS-->
<link rel="stylesheet" type="text/css"
	href="<?=$data['atomConstants']->baseUrl?>/assets/css/style.css">
<!-- END Custom CSS-->
</head>
<body data-open="click" data-menu="vertical-menu" data-col="2-columns"
	class="vertical-layout vertical-menu 2-columns  fixed-navbar">
	<!-- navbar-fixed-top-->
	<nav
		class="header-navbar navbar navbar-with-menu navbar-fixed-top navbar-semi-dark navbar-shadow">
		<div class="navbar-wrapper">
			<div class="navbar-header">
				<ul class="nav navbar-nav">
					<li class="nav-item mobile-menu hidden-md-up float-xs-left"><a
						class="nav-link nav-menu-main menu-toggle hidden-xs"><i
							class="icon-menu5 font-large-1"></i></a></li>
					<li class="nav-item"><a href="index.html"
						class="navbar-brand nav-link"> <img alt="branding logo"
							src="<?=$data['atomConstants']->baseUrl?>/app-assets/images/logo/robust-logo-light.png"
							data-expand="<?=$data['atomConstants']->baseUrl?>/app-assets/images/logo/robust-logo-light.png"
							data-collapse="<?=$data['atomConstants']->baseUrl?>/app-assets/images/logo/robust-logo-small.png"
							class="brand-logo">
					</a></li>
					<li class="nav-item hidden-md-up float-xs-right"><a
						data-toggle="collapse" data-target="#navbar-mobile"
						class="nav-link open-navbar-container"><i
							class="icon-ellipsis pe-2x icon-icon-rotate-right-right"></i></a>
					</li>
				</ul>
			</div>
			<div class="navbar-container content container-fluid">
				<div id="navbar-mobile" class="collapse navbar-toggleable-sm">
					<ul class="nav navbar-nav">
						<li class="nav-item hidden-sm-down"><a
							class="nav-link nav-menu-main menu-toggle hidden-xs"><i
								class="icon-menu5"></i></a></li>
						<li class="nav-item hidden-sm-down"><a href="#"
							class="nav-link nav-link-expand"><i class="ficon icon-expand2"></i></a></li>
					</ul>
					<ul class="nav navbar-nav float-xs-right">
						<li class="dropdown dropdown-user nav-item"><a href="#"
							data-toggle="dropdown"
							class="dropdown-toggle nav-link dropdown-user-link"> <span
								class="avatar avatar-online"> <img
									src="<?=$data['atomConstants']->baseUrl?>/app-assets/images/portrait/small/avatar-s-1.png"
									alt="avatar"><i></i></span> <span class="user-name">John Doe</span>
						</a>
							<div class="dropdown-menu dropdown-menu-right">
								<a href="#" class="dropdown-item"><i class="icon-head"></i> Edit
									Profile</a> <a href="#" class="dropdown-item"><i
									class="icon-mail6"></i> My Inbox</a> <a href="#"
									class="dropdown-item"><i class="icon-clipboard2"></i> Task</a>
								<a href="#" class="dropdown-item"><i class="icon-calendar5"></i>
									Calender</a>
								<div class="dropdown-divider"></div>
								<a href="#" class="dropdown-item"><i class="icon-power3"></i>
									Logout</a>
							</div></li>
					</ul>
				</div>
			</div>
		</div>
	</nav>
	<div id="fullscreen-search" class="fullscreen-search">
		<form class="fullscreen-search-form">
			<input type="search" placeholder="Search..."
				class="fullscreen-search-input">
			<button type="submit" class="fullscreen-search-submit">Search</button>
		</form>
		<div class="fullscreen-search-content">
			<div class="fullscreen-search-options">
				<div class="row">
					<div class="col-sm-12">
						<fieldset>
							<label class="custom-control custom-checkbox display-inline"> <input
								type="checkbox" class="custom-control-input"> <span
								class="custom-control-indicator"></span> <span
								class="custom-control-description m-0">All</span>
							</label> <label
								class="custom-control custom-checkbox display-inline"> <input
								type="checkbox" class="custom-control-input"> <span
								class="custom-control-indicator"></span> <span
								class="custom-control-description m-0">People</span>
							</label> <label
								class="custom-control custom-checkbox display-inline"> <input
								type="checkbox" class="custom-control-input"> <span
								class="custom-control-indicator"></span> <span
								class="custom-control-description m-0">Project</span>
							</label> <label
								class="custom-control custom-checkbox display-inline"> <input
								type="checkbox" class="custom-control-input"> <span
								class="custom-control-indicator"></span> <span
								class="custom-control-description m-0">Task</span>
							</label>
						</fieldset>
					</div>
				</div>
			</div>
			<div class="fullscreen-search-result mt-2">
				<div class="row">
					<div class="col-lg-4">
						<h3>People</h3>
						<div class="media">
							<a href="#" class="media-left"> <img
								src="<?=$data['atomConstants']->baseUrl?>/app-assets/images/portrait/small/avatar-s-2.png"
								alt="Generic placeholder image"
								class="media-object rounded-circle">
							</a>
							<div class="media-body">
								<h5 class="media-heading">
									<a href="#">Karmen Dartez</a>
								</h5>
								<p class="mb-0">
									<span class="tag tag-pill mr-1 tag-danger">JavaScript</span> <span
										class="tag tag-pill mr-1 tag-primary">HTML</span>
								</p>
								<p>
									<span class="font-weight-bold">Sr. Developer - </span><a
										href="mailto:john@example.com">karmen@example.com</a>
								</p>
							</div>
						</div>
						<div class="media">
							<a href="#" class="media-left"> <img
								src="<?=$data['atomConstants']->baseUrl?>/app-assets/images/portrait/small/avatar-s-3.png"
								alt="Generic placeholder image"
								class="media-object rounded-circle">
							</a>
							<div class="media-body">
								<h5 class="media-heading">
									<a href="#">Scot Loh</a>
								</h5>
								<p class="mb-0">
									<span class="tag tag-pill mr-1 tag-danger">PhotoShop</span> <span
										class="tag tag-pill mr-1 tag-warning">UX</span>
								</p>
								<p>
									<span class="font-weight-bold">Sr. UI/UX Desugner - </span><a
										href="mailto:john@example.com">scot@example.com</a>
								</p>
							</div>
						</div>
						<div class="media">
							<a href="#" class="media-left"> <img
								src="<?=$data['atomConstants']->baseUrl?>/app-assets/images/portrait/small/avatar-s-5.png"
								alt="Generic placeholder image"
								class="media-object rounded-circle">
							</a>
							<div class="media-body">
								<h5 class="media-heading">
									<a href="#">Kim Willmore</a>
								</h5>
								<p class="mb-0">
									<span class="tag tag-pill mr-1 tag-warning">CSS</span> <span
										class="tag tag-pill mr-1 tag-danger">HTML</span>
								</p>
								<p>
									<span class="font-weight-bold">UI Developer - </span><a
										href="mailto:john@example.com">kim@example.com</a>
								</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<h3>Project</h3>
						<div class="media">
							<div class="media-body">
								<h5 class="media-heading">
									<a href="#">WordPress Template Support</a>
								</h5>
								<progress value="25" max="100"
									class="progress progress-xs progress-success mb-0">25%</progress>
								<p class="mb-0">Collicitudin vel metus scelerisque ante commodo.</p>
								<p>
									<span class="tag tag-pill tag-success">In Progress</span> <span
										class="tag tag-default tag-default float-sm-right">25%
										Completed</span>
								</p>
							</div>
						</div>
						<div class="media">
							<div class="media-body">
								<h5 class="media-heading">
									<a href="#">Application UI/UX</a>
								</h5>
								<progress value="100" max="100"
									class="progress progress-xs progress-info mb-0">100%</progress>
								<p class="mb-0">Cetus scelerisque ante sollicitudin commodo.</p>
								<p>
									<span class="tag tag-pill tag-info">Completed</span> <span
										class="tag tag-default tag-default float-sm-right">100%
										Completed</span>
								</p>
							</div>
						</div>
						<div class="media">
							<div class="media-body">
								<h5 class="media-heading">
									<a href="#">SEO Project</a>
								</h5>
								<progress value="65" max="100"
									class="progress progress-xs progress-warning mb-0">65%</progress>
								<p class="mb-0">Notifications scelerisque ante sollicitudin
									commodo.</p>
								<p>
									<span class="tag tag-pill tag-warning">Delayed</span> <span
										class="tag tag-default tag-default float-sm-right">65%
										Completed</span>
								</p>
							</div>
						</div>
					</div>
					<div class="col-lg-4">
						<h3>Task</h3>
						<div class="media">
							<div class="media-body">
								<h5 class="media-heading">
									<a href="#">Create the new layout for menu</a>
								</h5>
								<p class="mb-0">Pcelerisque ulla vel metus ante sollicitudin
									commodo.</p>
								<p>
									<span class="tag tag-pill tag-danger">Open</span> <span
										class="tag tag-default tag-default tag-default tag-icon float-sm-right"><i
										class="icon-calendar5"></i> 22 January, 16</span>
								</p>
							</div>
						</div>
						<div class="media">
							<div class="media-body">
								<h5 class="media-heading">
									<a href="#">Addition features on footer</a>
								</h5>
								<p class="mb-0">Tuaiulla vel metus scelerisque ante sollicitudin
									commodo.</p>
								<p>
									<span class="tag tag-pill tag-warning">On hold</span> <span
										class="tag tag-default tag-default tag-default tag-icon float-sm-right"><i
										class="icon-calendar5"></i> 24 January, 16</span>
								</p>
							</div>
						</div>
						<div class="media">
							<div class="media-body">
								<h5 class="media-heading">
									<a href="#">Remove TODO comments</a>
								</h5>
								<p class="mb-0">Mulullametu vel scelerisque ante sollicitudin
									commodo.</p>
								<p>
									<span class="tag tag-pill tag-info">Resolved</span> <span
										class="tag tag-default tag-default tag-default tag-icon float-sm-right"><i
										class="icon-calendar5"></i> 25 January, 16</span>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<span class="fullscreen-search-close"></span>
	</div>
	<div class="fullscreen-search-overlay"></div>
	<!-- ////////////////////////////////////////////////////////////////////////////-->
	<!-- main menu-->
	<div data-scroll-to-active="true"
		class="main-menu menu-fixed menu-dark menu-accordion menu-shadow">
		<!-- main menu header-->
		<!-- / main menu header-->
		<!-- main menu content-->
		<div class="main-menu-content">
			<ul id="main-menu-navigation" data-menu="menu-navigation"
				class="navigation navigation-main">
				<li class=" nav-item"><a href="index.html"><i class="icon-home3"></i><span
						data-i18n="nav.dash.main" class="menu-title">Dashboard</span><span
						class="tag tag tag-primary tag-pill float-xs-right mr-2">5</span></a>
					<ul class="menu-content">
						<li><a href="dashboard-ecommerce.html"
							data-i18n="nav.dash.ecommerce" class="menu-item">eCommerce</a></li>
						<li><a href="dashboard-project.html" data-i18n="nav.dash.project"
							class="menu-item">Project</a></li>
						<li><a href="dashboard-analytics.html"
							data-i18n="nav.dash.analytics" class="menu-item">Analytics</a></li>
						<li><a href="dashboard-crm.html" data-i18n="nav.dash.crm"
							class="menu-item">CRM</a></li>
						<li><a href="dashboard-fitness.html" data-i18n="nav.dash.fitness"
							class="menu-item">Fitness</a></li>
					</ul></li>
				
						
				<li class=" navigation-header"><span data-i18n="nav.category.tables">System</span><i
					data-toggle="tooltip" data-placement="right"
					data-original-title="Tables" class="icon-ellipsis icon-ellipsis"></i>
				</li>
				<li class=" nav-item"><a href="#"><i class="icon-database"></i><span
						data-i18n="nav.data_tables.main" class="menu-title">Data Schema</span></a>
					<ul class="menu-content">
						<li class="active"><a href="dt-basic-initialization.html"
							data-i18n="nav.data_tables.dt_basic_initialization"
							class="menu-item">Basic Initialisation</a></li>
						<li><a href="dt-advanced-initialization.html"
							data-i18n="nav.data_tables.dt_advanced_initialization"
							class="menu-item">Advanced initialisation</a></li>
						<li><a href="dt-styling.html"
							data-i18n="nav.data_tables.dt_styling" class="menu-item">Styling</a>
						</li>
						<li><a href="dt-data-sources.html"
							data-i18n="nav.data_tables.dt_data_sources" class="menu-item">Data
								Sources</a></li>
						<li><a href="dt-api.html" data-i18n="nav.data_tables.dt_api"
							class="menu-item">API</a></li>
					</ul></li>
				<li class=" nav-item"><a href="#"><i class="icon-th-large"></i><span
						data-i18n="nav.datatable_extensions.main" class="menu-title">DataTables
							Ext.</span></a>
					<ul class="menu-content">
						<li><a href="dt-extensions-autofill.html"
							data-i18n="nav.datatable_extensions.dt_extensions_autofill"
							class="menu-item">AutoFill</a></li>
						<li><a href="#"
							data-i18n="nav.datatable_extensions.datatable_buttons.main"
							class="menu-item">Buttons</a>
							<ul class="menu-content">
								<li><a href="dt-extensions-buttons-basic.html"
									data-i18n="nav.datatable_extensions.datatable_buttons.dt_extensions_buttons_basic"
									class="menu-item">Basic Buttons</a></li>
								<li><a href="dt-extensions-buttons-html-5-data-export.html"
									data-i18n="nav.datatable_extensions.datatable_buttons.dt_extensions_buttons_html_5_data_export"
									class="menu-item">HTML 5 Data Export</a></li>
								<li><a href="dt-extensions-buttons-flash-data-export.html"
									data-i18n="nav.datatable_extensions.datatable_buttons.dt_extensions_buttons_flash_data_export"
									class="menu-item">Flash Data Export</a></li>
								<li><a href="dt-extensions-buttons-column-visibility.html"
									data-i18n="nav.datatable_extensions.datatable_buttons.dt_extensions_buttons_column_visibility"
									class="menu-item">Column Visibility</a></li>
								<li><a href="dt-extensions-buttons-print.html"
									data-i18n="nav.datatable_extensions.datatable_buttons.dt_extensions_buttons_print"
									class="menu-item">Print</a></li>
								<li><a href="dt-extensions-buttons-api.html"
									data-i18n="nav.datatable_extensions.datatable_buttons.dt_extensions_buttons_api"
									class="menu-item">API</a></li>
							</ul></li>
						<li><a href="dt-extensions-column-reorder.html"
							data-i18n="nav.datatable_extensions.dt_extensions_column_reorder"
							class="menu-item">Column Reorder</a></li>
						<li><a href="dt-extensions-fixed-columns.html"
							data-i18n="nav.datatable_extensions.dt_extensions_fixed_columns"
							class="menu-item">Fixed Columns</a></li>
						<li><a href="dt-extensions-key-table.html"
							data-i18n="nav.datatable_extensions.dt_extensions_key_table"
							class="menu-item">Key Table</a></li>
						<li><a href="dt-extensions-row-reorder.html"
							data-i18n="nav.datatable_extensions.dt_extensions_row_reorder"
							class="menu-item">Row Reorder</a></li>
						<li><a href="dt-extensions-select.html"
							data-i18n="nav.datatable_extensions.dt_extensions_select"
							class="menu-item">Select</a></li>
						<li><a href="dt-extensions-fix-header.html"
							data-i18n="nav.datatable_extensions.dt_extensions_fix_header"
							class="menu-item">Fix Header</a></li>
						<li><a href="dt-extensions-responsive.html"
							data-i18n="nav.datatable_extensions.dt_extensions_responsive"
							class="menu-item">Responsive</a></li>
						<li><a href="dt-extensions-column-visibility.html"
							data-i18n="nav.datatable_extensions.dt_extensions_column_visibility"
							class="menu-item">Column Visibility</a></li>
					</ul></li>
				<li class=" nav-item"><a href="#"><i class="icon-table3"></i><span
						data-i18n="nav.handson_table.main" class="menu-title">Handson
							Table</span></a>
					<ul class="menu-content">
						<li><a href="handson-table-appearance.html"
							data-i18n="nav.handson_table.handson_table_appearance"
							class="menu-item">Appearance</a></li>
						<li><a href="handson-table-rows-columns.html"
							data-i18n="nav.handson_table.handson_table_rows_columns"
							class="menu-item">Rows Columns</a></li>
						<li><a href="handson-table-rows-only.html"
							data-i18n="nav.handson_table.handson_table_rows_only"
							class="menu-item">Rows Only</a></li>
						<li><a href="handson-table-columns-only.html"
							data-i18n="nav.handson_table.handson_table_columns_only"
							class="menu-item">Columns Only</a></li>
						<li><a href="handson-table-data-operations.html"
							data-i18n="nav.handson_table.handson_table_data_operations"
							class="menu-item">Data Operations</a></li>
						<li><a href="handson-table-cell-features.html"
							data-i18n="nav.handson_table.handson_table_cell_features"
							class="menu-item">Cell Features</a></li>
						<li><a href="handson-table-cell-types.html"
							data-i18n="nav.handson_table.handson_table_cell_types"
							class="menu-item">Cell Types</a></li>
						<li><a href="handson-table-integrations.html"
							data-i18n="nav.handson_table.handson_table_integrations"
							class="menu-item">Integrations</a></li>
						<li><a href="handson-table-utilities.html"
							data-i18n="nav.handson_table.handson_table_utilities"
							class="menu-item">Utilities</a></li>
					</ul></li>
				<li class=" nav-item"><a href="table-jsgrid.html"><i
						class="icon-table"></i><span data-i18n="nav.table_jsgrid.main"
						class="menu-title">jsGrid</span></a></li>
				<li class=" navigation-header"><span data-i18n="nav.category.addons">Add
						Ons</span><i data-toggle="tooltip" data-placement="right"
					data-original-title="Add Ons" class="icon-ellipsis icon-ellipsis"></i>
				</li>
				<li class=" nav-item"><a href="#"><i class="icon-edit2"></i><span
						data-i18n="nav.editors.main" class="menu-title">Editors</span></a>
					<ul class="menu-content">
						<li><a href="editor-quill.html"
							data-i18n="nav.editors.editor_quill" class="menu-item">Quill</a>
						</li>
						<li><a href="editor-ckeditor.html"
							data-i18n="nav.editors.editor_ckeditor" class="menu-item">CKEditor</a>
						</li>
						<li><a href="editor-summernote.html"
							data-i18n="nav.editors.editor_summernote" class="menu-item">Summernote</a>
						</li>
						<li><a href="editor-tinymce.html"
							data-i18n="nav.editors.editor_tinymce" class="menu-item">TinyMCE</a>
						</li>
						<li><a href="code-editor-codemirror.html"
							data-i18n="nav.editors.code_editor_codemirror.main"
							class="menu-item">Code Editor</a>
							<ul class="menu-content">
								<li><a href="code-editor-codemirror.html"
									data-i18n="nav.editors.code_editor_codemirror.code_editor_codemirror"
									class="menu-item">CodeMirror</a></li>
								<li><a href="code-editor-ace.html"
									data-i18n="nav.editors.code_editor_codemirror.code_editor_ace"
									class="menu-item">Ace</a></li>
							</ul></li>
					</ul></li>
				<li class=" nav-item"><a href="#"><i class="icon-calendar5"></i><span
						data-i18n="nav.pickers.main" class="menu-title">Pickers</span></a>
					<ul class="menu-content">
						<li><a href="pickers-date-&amp;-time-picker.html"
							data-i18n="nav.pickers.pickers_date_time_picker"
							class="menu-item">Date &amp; Time Picker</a></li>
						<li><a href="pickers-color-picker.html"
							data-i18n="nav.pickers.pickers_color_picker" class="menu-item">Color
								Picker</a></li>
					</ul></li>
				<li class=" nav-item"><a href="#"><i class="icon-air-play"></i><span
						data-i18n="nav.jquery_ui.main" class="menu-title">jQuery UI</span></a>
					<ul class="menu-content">
						<li><a href="jquery-ui-interactions.html"
							data-i18n="nav.jquery_ui.jquery_ui_interactions"
							class="menu-item">Interactions</a></li>
						<li><a href="jquery-ui-navigations.html"
							data-i18n="nav.jquery_ui.jquery_ui_navigations" class="menu-item">Navigations</a>
						</li>
						<li><a href="jquery-ui-date-pickers.html"
							data-i18n="nav.jquery_ui.jquery_ui_date_pickers"
							class="menu-item">Date Pickers</a></li>
						<li><a href="jquery-ui-autocomplete.html"
							data-i18n="nav.jquery_ui.jquery_ui_autocomplete"
							class="menu-item">Autocomplete</a></li>
						<li><a href="jquery-ui-buttons-select.html"
							data-i18n="nav.jquery_ui.jquery_ui_buttons_select"
							class="menu-item">Buttons &amp; Select</a></li>
						<li><a href="jquery-ui-slider-spinner.html"
							data-i18n="nav.jquery_ui.jquery_ui_slider_spinner"
							class="menu-item">Slider &amp; Spinner</a></li>
						<li><a href="jquery-ui-dialog-tooltip.html"
							data-i18n="nav.jquery_ui.jquery_ui_dialog_tooltip"
							class="menu-item">Dialog &amp; Tooltip</a></li>
					</ul></li>
				<li class=" nav-item"><a href="add-on-block-ui.html"><i
						class="icon-security"></i><span
						data-i18n="nav.add_on_block_ui.main" class="menu-title">Block UI</span></a>
				</li>
				<li class=" nav-item"><a href="add-on-image-cropper.html"><i
						class="icon-crop"></i><span
						data-i18n="nav.add_on_image_cropper.main" class="menu-title">Image
							Cropper</span></a></li>
				<li class=" nav-item"><a href="add-on-drag-drop.html"><i
						class="icon-arrow-move"></i><span
						data-i18n="nav.add_on_drag_drop.main" class="menu-title">Drag
							&amp; Drop</span></a></li>
				<li class=" nav-item"><a href="#"><i class="icon-cloud-upload3"></i><span
						data-i18n="nav.file_uploaders.main" class="menu-title">File
							Uploader</span></a>
					<ul class="menu-content">
						<li><a href="file-uploader-dropzone.html"
							data-i18n="nav.file_uploaders.file_uploader_dropzone"
							class="menu-item">Dropzone</a></li>
						<li><a href="file-uploader-jquery.html"
							data-i18n="nav.file_uploaders.file_uploader_jquery"
							class="menu-item">jQuery File Upload</a></li>
					</ul></li>
				<li class=" nav-item"><a href="#"><i class="icon-calendar4"></i><span
						data-i18n="nav.event_calendars.main" class="menu-title">Event
							Calendars</span></a>
					<ul class="menu-content">
						<li><a href="#" data-i18n="nav.event_calendars.full_calender.main"
							class="menu-item">Full Calendar</a>
							<ul class="menu-content">
								<li><a href="full-calender-basic.html"
									data-i18n="nav.event_calendars.full_calender.full_calender_basic"
									class="menu-item">Basic</a></li>
								<li><a href="full-calender-events.html"
									data-i18n="nav.event_calendars.full_calender.full_calender_events"
									class="menu-item">Events</a></li>
								<li><a href="full-calender-advance.html"
									data-i18n="nav.event_calendars.full_calender.full_calender_advance"
									class="menu-item">Advance</a></li>
								<li><a href="full-calender-extra.html"
									data-i18n="nav.event_calendars.full_calender.full_calender_extra"
									class="menu-item">Extra</a></li>
							</ul></li>
						<li><a href="calendars-clndr.html"
							data-i18n="nav.event_calendars.calendars_clndr" class="menu-item">CLNDR</a>
						</li>
					</ul></li>
				<li class=" nav-item"><a href="#"><i class="icon-table2"></i><span
						data-i18n="nav.internationalization.main" class="menu-title">Internationalization</span></a>
					<ul class="menu-content">
						<li><a href="i18n-resources.html"
							data-i18n="nav.internationalization.i18n_resources"
							class="menu-item">Resources</a></li>
						<li><a href="i18n-xhr-backend.html"
							data-i18n="nav.internationalization.i18n_xhr_backend"
							class="menu-item">XHR Backend</a></li>
						<li><a href="i18n-query-string.html"
							data-i18n="nav.internationalization.i18n_query_string"
							class="menu-item">Query String</a></li>
						<li><a href="i18n-on-init.html"
							data-i18n="nav.internationalization.i18n_on_init"
							class="menu-item">On Init</a></li>
						<li><a href="i18n-after-init.html"
							data-i18n="nav.internationalization.i18n_after_init"
							class="menu-item">After Init</a></li>
						<li><a href="i18n-fallback.html"
							data-i18n="nav.internationalization.i18n_fallback"
							class="menu-item">Fallback</a></li>
					</ul></li>
				<li class=" navigation-header"><span
					data-i18n="nav.category.charts_maps">Charts &amp; Maps</span><i
					data-toggle="tooltip" data-placement="right"
					data-original-title="Charts &amp; Maps"
					class="icon-ellipsis icon-ellipsis"></i></li>
				<li class=" nav-item"><a href="#"><i class="icon-bar-graph-2"></i><span
						data-i18n="nav.google_charts.main" class="menu-title">google
							Charts</span></a>
					<ul class="menu-content">
						<li><a href="google-bar-charts.html"
							data-i18n="nav.google_charts.google_bar_charts" class="menu-item">Bar
								charts</a></li>
						<li><a href="google-line-charts.html"
							data-i18n="nav.google_charts.google_line_charts"
							class="menu-item">Line charts</a></li>
						<li><a href="google-pie-charts.html"
							data-i18n="nav.google_charts.google_pie_charts" class="menu-item">Pie
								charts</a></li>
						<li><a href="google-scatter-charts.html"
							data-i18n="nav.google_charts.google_scatter_charts"
							class="menu-item">Scatter charts</a></li>
						<li><a href="google-bubble-charts.html"
							data-i18n="nav.google_charts.google_bubble_charts"
							class="menu-item">Bubble charts</a></li>
						<li><a href="google-other-charts.html"
							data-i18n="nav.google_charts.google_other_charts"
							class="menu-item">Other charts</a></li>
					</ul></li>
				<li class=" nav-item"><a href="#"><i class="icon-bubble_chart"></i><span
						data-i18n="nav.echarts.main" class="menu-title">Echarts</span></a>
					<ul class="menu-content">
						<li><a href="echarts-line-area-charts.html"
							data-i18n="nav.echarts.echarts_line_area_charts"
							class="menu-item">Line &amp; Area charts</a></li>
						<li><a href="echarts-bar-column-charts.html"
							data-i18n="nav.echarts.echarts_bar_column_charts"
							class="menu-item">Bar &amp; Column charts</a></li>
						<li><a href="echarts-pie-doughnut-charts.html"
							data-i18n="nav.echarts.echarts_pie_doughnut_charts"
							class="menu-item">Pie &amp; Doughnut charts</a></li>
						<li><a href="echarts-scatter-charts.html"
							data-i18n="nav.echarts.echarts_scatter_charts" class="menu-item">Scatter
								charts</a></li>
						<li><a href="echarts-radar-chord-charts.html"
							data-i18n="nav.echarts.echarts_radar_chord_charts"
							class="menu-item">Radar &amp; Chord charts</a></li>
						<li><a href="echarts-funnel-gauges-charts.html"
							data-i18n="nav.echarts.echarts_funnel_gauges_charts"
							class="menu-item">Funnel &amp; Gauges charts</a></li>
						<li><a href="echarts-combination-charts.html"
							data-i18n="nav.echarts.echarts_combination_charts"
							class="menu-item">Combination charts</a></li>
						<li><a href="echarts-advance-charts.html"
							data-i18n="nav.echarts.echarts_advance_charts" class="menu-item">Advance
								charts</a></li>
					</ul></li>
				<li class=" nav-item"><a href="#"><i class="icon-stats-dots"></i><span
						data-i18n="nav.chartjs.main" class="menu-title">Chartjs</span></a>
					<ul class="menu-content">
						<li><a href="chartjs-line-charts.html"
							data-i18n="nav.chartjs.chartjs_line_charts" class="menu-item">Line
								charts</a></li>
						<li><a href="chartjs-bar-charts.html"
							data-i18n="nav.chartjs.chartjs_bar_charts" class="menu-item">Bar
								charts</a></li>
						<li><a href="chartjs-pie-doughnut-charts.html"
							data-i18n="nav.chartjs.chartjs_pie_doughnut_charts"
							class="menu-item">Pie &amp; Doughnut charts</a></li>
						<li><a href="chartjs-scatter-charts.html"
							data-i18n="nav.chartjs.chartjs_scatter_charts" class="menu-item">Scatter
								charts</a></li>
						<li><a href="chartjs-polar-radar-charts.html"
							data-i18n="nav.chartjs.chartjs_polar_radar_charts"
							class="menu-item">Polar &amp; Radar charts</a></li>
						<li><a href="chartjs-advance-charts.html"
							data-i18n="nav.chartjs.chartjs_advance_charts" class="menu-item">Advance
								charts</a></li>
					</ul></li>
				<li class=" nav-item"><a href="#"><i class="icon-stats-bars2"></i><span
						data-i18n="nav.d3_charts.main" class="menu-title">D3 Charts</span></a>
					<ul class="menu-content">
						<li><a href="d3-line-chart.html"
							data-i18n="nav.d3_charts.d3_line_chart" class="menu-item">Line
								Chart</a></li>
						<li><a href="d3-bar-chart.html"
							data-i18n="nav.d3_charts.d3_bar_chart" class="menu-item">Bar
								Chart</a></li>
						<li><a href="d3-pie-chart.html"
							data-i18n="nav.d3_charts.d3_pie_chart" class="menu-item">Pie
								Chart</a></li>
						<li><a href="d3-circle-diagrams.html"
							data-i18n="nav.d3_charts.d3_circle_diagrams" class="menu-item">Circle
								Diagrams</a></li>
						<li><a href="d3-tree-chart.html"
							data-i18n="nav.d3_charts.d3_tree_chart" class="menu-item">Tree
								Chart</a></li>
						<li><a href="d3-other-charts.html"
							data-i18n="nav.d3_charts.d3_other_charts" class="menu-item">Other
								Charts</a></li>
					</ul></li>
				<li class=" nav-item"><a href="#"><i
						class="icon-arrow-graph-up-right"></i><span
						data-i18n="nav.c3_charts.main" class="menu-title">C3 Charts</span></a>
					<ul class="menu-content">
						<li><a href="c3-line-chart.html"
							data-i18n="nav.c3_charts.c3_line_chart" class="menu-item">Line
								Chart</a></li>
						<li><a href="c3-bar-pie-chart.html"
							data-i18n="nav.c3_charts.c3_bar_pie_chart" class="menu-item">Bar
								&amp; Pie Chart</a></li>
						<li><a href="c3-axis-chart.html"
							data-i18n="nav.c3_charts.c3_axis_chart" class="menu-item">Axis
								Chart</a></li>
						<li><a href="c3-data-chart.html"
							data-i18n="nav.c3_charts.c3_data_chart" class="menu-item">Data
								Chart</a></li>
						<li><a href="c3-grid-chart.html"
							data-i18n="nav.c3_charts.c3_grid_chart" class="menu-item">Grid
								Chart</a></li>
						<li><a href="c3-transform-chart.html"
							data-i18n="nav.c3_charts.c3_transform_chart" class="menu-item">Transform
								Chart</a></li>
						<li><a href="c3-other-charts.html"
							data-i18n="nav.c3_charts.c3_other_charts" class="menu-item">Other
								Charts</a></li>
					</ul></li>
				<li class=" nav-item"><a href="#"><i class="icon-stats-bars"></i><span
						data-i18n="nav.chartist.main" class="menu-title">Chartist</span></a>
					<ul class="menu-content">
						<li><a href="chartist-line-charts.html"
							data-i18n="nav.chartist.chartist_line_charts" class="menu-item">Line
								charts</a></li>
						<li><a href="chartist-bar-charts.html"
							data-i18n="nav.chartist.chartist_bar_charts" class="menu-item">Bar
								charts</a></li>
						<li><a href="chartist-pie-charts.html"
							data-i18n="nav.chartist.chartist_pie_charts" class="menu-item">Pie
								charts</a></li>
					</ul></li>
				<li class=" nav-item"><a href="#"><i class="icon-timeline"></i><span
						data-i18n="nav.dimple_charts.main" class="menu-title">Dimple
							Charts</span></a>
					<ul class="menu-content">
						<li><a href="dimple-line-area-chart.html"
							data-i18n="nav.dimple_charts.dimple_line_area_chart"
							class="menu-item">Line &amp; Area Chart</a></li>
						<li><a href="dimple-bar-column-chart.html"
							data-i18n="nav.dimple_charts.dimple_bar_column_chart"
							class="menu-item">Bar &amp; Column Chart</a></li>
						<li><a href="dimple-pie-ring-chart.html"
							data-i18n="nav.dimple_charts.dimple_pie_ring_chart"
							class="menu-item">Pie &amp; Ring Chart</a></li>
						<li><a href="dimple-step-chart.html"
							data-i18n="nav.dimple_charts.dimple_step_chart" class="menu-item">Step
								Chart</a></li>
						<li><a href="dimple-scatter-chart.html"
							data-i18n="nav.dimple_charts.dimple_scatter_chart"
							class="menu-item">Scatter Chart</a></li>
						<li><a href="dimple-bubble-chart.html"
							data-i18n="nav.dimple_charts.dimple_bubble_chart"
							class="menu-item">Bubble Chart</a></li>
					</ul></li>
				<li class=" nav-item"><a href="morris-charts.html"><i
						class="icon-graphic_eq"></i><span
						data-i18n="nav.morris_charts.main" class="menu-title">Morris
							Charts</span></a></li>
				<li class=" nav-item"><a href="#"><i class="icon-pie-graph2"></i><span
						data-i18n="nav.flot_charts.main" class="menu-title">Flot Charts</span></a>
					<ul class="menu-content">
						<li><a href="flot-line-charts.html"
							data-i18n="nav.flot_charts.flot_line_charts" class="menu-item">Line
								charts</a></li>
						<li><a href="flot-bar-charts.html"
							data-i18n="nav.flot_charts.flot_bar_charts" class="menu-item">Bar
								charts</a></li>
						<li><a href="flot-pie-charts.html"
							data-i18n="nav.flot_charts.flot_pie_charts" class="menu-item">Pie
								charts</a></li>
					</ul></li>
				<li class=" nav-item"><a href="rickshaw-charts.html"><i
						class="icon-grain"></i><span data-i18n="nav.rickshaw_charts.main"
						class="menu-title">Rickshaw Charts</span></a></li>
				<li class=" nav-item"><a href="#"><i class="icon-map22"></i><span
						data-i18n="nav.maps.main" class="menu-title">Maps</span></a>
					<ul class="menu-content">
						<li><a href="#" data-i18n="nav.maps.google_maps.main"
							class="menu-item">google Maps</a>
							<ul class="menu-content">
								<li><a href="gmaps-basic-maps.html"
									data-i18n="nav.maps.google_maps.gmaps_basic_maps"
									class="menu-item">Maps</a></li>
								<li><a href="gmaps-services.html"
									data-i18n="nav.maps.google_maps.gmaps_services"
									class="menu-item">Services</a></li>
								<li><a href="gmaps-overlays.html"
									data-i18n="nav.maps.google_maps.gmaps_overlays"
									class="menu-item">Overlays</a></li>
								<li><a href="gmaps-routes.html"
									data-i18n="nav.maps.google_maps.gmaps_routes" class="menu-item">Routes</a>
								</li>
								<li><a href="gmaps-utils.html"
									data-i18n="nav.maps.google_maps.gmaps_utils" class="menu-item">Utils</a>
								</li>
							</ul></li>
						<li><a href="#" data-i18n="nav.maps.vector_maps.main"
							class="menu-item">Vector Maps</a>
							<ul class="menu-content">
								<li><a href="#"
									data-i18n="nav.maps.vector_maps.jquery_mapael.main"
									class="menu-item">jQuery Mapael</a>
									<ul class="menu-content">
										<li><a href="vector-maps-mapael-basic.html"
											data-i18n="nav.maps.vector_maps.jquery_mapael.vector_maps_mapael_basic"
											class="menu-item">Basic Maps</a></li>
										<li><a href="vector-maps-mapael-advance.html"
											data-i18n="nav.maps.vector_maps.jquery_mapael.vector_maps_mapael_advance"
											class="menu-item">Advance Maps</a></li>
									</ul></li>
								<li><a href="vector-maps-jvector.html"
									data-i18n="nav.maps.vector_maps.jvector_maps" class="menu-item">jVector
										Map</a></li>
								<li><a href="vector-maps-jvq.html"
									data-i18n="nav.maps.vector_maps.vector_maps_jvq"
									class="menu-item">JQV Map</a></li>
							</ul></li>
					</ul></li>
				<li class=" navigation-header"><span
					data-i18n="nav.category.support">Support</span><i
					data-toggle="tooltip" data-placement="right"
					data-original-title="Support" class="icon-ellipsis icon-ellipsis"></i>
				</li>
				<li class=" nav-item"><a href="http://support.pixinvent.com/"><i
						class="icon-support"></i><span
						data-i18n="nav.support_raise_support.main" class="menu-title">Raise
							Support</span></a></li>
				<li class=" nav-item"><a
					href="http://demo.pixinvent.com/robust-admin/documentation"><i
						class="icon-document-text"></i><span
						data-i18n="nav.support_documentation.main" class="menu-title">Documentation</span></a>
				</li>
			</ul>
		</div>
		<!-- /main menu content-->
		<!-- main menu footer-->
		<div class="main-menu-footer footer-close">
			<div class="header text-xs-center">
				<a href="#" class="col-xs-12 footer-toggle"><i
					class="icon-ios-arrow-up"></i></a>
			</div>
			<div class="content">
				<div class="insights">
					<div class="col-xs-12">
						<p>Product Delivery</p>
						<progress value="25" max="100"
							class="progress progress-xs progress-success">25%</progress>
					</div>
					<div class="col-xs-12">
						<p>Targeted Sales</p>
						<progress value="70" max="100"
							class="progress progress-xs progress-info">70%</progress>
					</div>
				</div>
				<div class="actions">
					<a href="javascript: void(0);" data-placement="top"
						data-toggle="tooltip" data-original-title="Settings"> <span
						aria-hidden="true" class="icon-cog3"></span>
					</a> <a href="javascript: void(0);" data-placement="top"
						data-toggle="tooltip" data-original-title="Lock"> <span
						aria-hidden="true" class="icon-lock4"></span>
					</a> <a href="javascript: void(0);" data-placement="top"
						data-toggle="tooltip" data-original-title="Logout"> <span
						aria-hidden="true" class="icon-power3"></span>
					</a>
				</div>
			</div>
		</div>
		<!-- main menu footer-->
	</div>
	<!-- / main menu-->
	<div class="app-content content container-fluid">
		<div class="content-wrapper">
			<div class="content-body">
				<!-- Zero configuration table -->
				<section id="configuration">
					<div class="row">
						<div class="col-xs-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Entities</h4>
									<a class="heading-elements-toggle"><i
										class="icon-ellipsis font-medium-3"></i></a>
									<div class="heading-elements">
										<ul class="list-inline mb-0">
											<li><a href=""><i class="icon-plus4"></i></a></li>
											<li><a data-action="reload"><i class="icon-reload"></i></a></li>
											<li><a data-action="expand"><i class="icon-expand2"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="card-body collapse in">
									<div class="card-block card-dashboard">
										<table
											class="table table-striped table-bordered zero-configuration">
											<thead>
												<tr>
													<th>Name</th>
													<th>Position</th>
													<th>Office</th>
													<th>Age</th>
													<th>Start date</th>
													<th>Salary</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>Tiger Nixon</td>
													<td>System Architect</td>
													<td>Edinburgh</td>
													<td>61</td>
													<td>2011/04/25</td>
													<td>$320,800</td>
												</tr>
												<tr>
													<td>Garrett Winters</td>
													<td>Accountant</td>
													<td>Tokyo</td>
													<td>63</td>
													<td>2011/07/25</td>
													<td>$170,750</td>
												</tr>
												<tr>
													<td>Ashton Cox</td>
													<td>Junior Technical Author</td>
													<td>San Francisco</td>
													<td>66</td>
													<td>2009/01/12</td>
													<td>$86,000</td>
												</tr>
												<tr>
													<td>Cedric Kelly</td>
													<td>Senior Javascript Developer</td>
													<td>Edinburgh</td>
													<td>22</td>
													<td>2012/03/29</td>
													<td>$433,060</td>
												</tr>
												<tr>
													<td>Airi Satou</td>
													<td>Accountant</td>
													<td>Tokyo</td>
													<td>33</td>
													<td>2008/11/28</td>
													<td>$162,700</td>
												</tr>
												<tr>
													<td>Brielle Williamson</td>
													<td>Integration Specialist</td>
													<td>New York</td>
													<td>61</td>
													<td>2012/12/02</td>
													<td>$372,000</td>
												</tr>
												<tr>
													<td>Herrod Chandler</td>
													<td>Sales Assistant</td>
													<td>San Francisco</td>
													<td>59</td>
													<td>2012/08/06</td>
													<td>$137,500</td>
												</tr>
												<tr>
													<td>Rhona Davidson</td>
													<td>Integration Specialist</td>
													<td>Tokyo</td>
													<td>55</td>
													<td>2010/10/14</td>
													<td>$327,900</td>
												</tr>
												<tr>
													<td>Colleen Hurst</td>
													<td>Javascript Developer</td>
													<td>San Francisco</td>
													<td>39</td>
													<td>2009/09/15</td>
													<td>$205,500</td>
												</tr>
												<tr>
													<td>Sonya Frost</td>
													<td>Software Engineer</td>
													<td>Edinburgh</td>
													<td>23</td>
													<td>2008/12/13</td>
													<td>$103,600</td>
												</tr>
												<tr>
													<td>Jena Gaines</td>
													<td>Office Manager</td>
													<td>London</td>
													<td>30</td>
													<td>2008/12/19</td>
													<td>$90,560</td>
												</tr>
												<tr>
													<td>Quinn Flynn</td>
													<td>Support Lead</td>
													<td>Edinburgh</td>
													<td>22</td>
													<td>2013/03/03</td>
													<td>$342,000</td>
												</tr>
												<tr>
													<td>Charde Marshall</td>
													<td>Regional Director</td>
													<td>San Francisco</td>
													<td>36</td>
													<td>2008/10/16</td>
													<td>$470,600</td>
												</tr>
												<tr>
													<td>Haley Kennedy</td>
													<td>Senior Marketing Designer</td>
													<td>London</td>
													<td>43</td>
													<td>2012/12/18</td>
													<td>$313,500</td>
												</tr>
												<tr>
													<td>Tatyana Fitzpatrick</td>
													<td>Regional Director</td>
													<td>London</td>
													<td>19</td>
													<td>2010/03/17</td>
													<td>$385,750</td>
												</tr>
												<tr>
													<td>Michael Silva</td>
													<td>Marketing Designer</td>
													<td>London</td>
													<td>66</td>
													<td>2012/11/27</td>
													<td>$198,500</td>
												</tr>
												<tr>
													<td>Paul Byrd</td>
													<td>Chief Financial Officer (CFO)</td>
													<td>New York</td>
													<td>64</td>
													<td>2010/06/09</td>
													<td>$725,000</td>
												</tr>
												<tr>
													<td>Gloria Little</td>
													<td>Systems Administrator</td>
													<td>New York</td>
													<td>59</td>
													<td>2009/04/10</td>
													<td>$237,500</td>
												</tr>
												<tr>
													<td>Bradley Greer</td>
													<td>Software Engineer</td>
													<td>London</td>
													<td>41</td>
													<td>2012/10/13</td>
													<td>$132,000</td>
												</tr>
												<tr>
													<td>Dai Rios</td>
													<td>Personnel Lead</td>
													<td>Edinburgh</td>
													<td>35</td>
													<td>2012/09/26</td>
													<td>$217,500</td>
												</tr>
												<tr>
													<td>Jenette Caldwell</td>
													<td>Development Lead</td>
													<td>New York</td>
													<td>30</td>
													<td>2011/09/03</td>
													<td>$345,000</td>
												</tr>
												<tr>
													<td>Yuri Berry</td>
													<td>Chief Marketing Officer (CMO)</td>
													<td>New York</td>
													<td>40</td>
													<td>2009/06/25</td>
													<td>$675,000</td>
												</tr>
												<tr>
													<td>Caesar Vance</td>
													<td>Pre-Sales Support</td>
													<td>New York</td>
													<td>21</td>
													<td>2011/12/12</td>
													<td>$106,450</td>
												</tr>
												<tr>
													<td>Doris Wilder</td>
													<td>Sales Assistant</td>
													<td>Sidney</td>
													<td>23</td>
													<td>2010/09/20</td>
													<td>$85,600</td>
												</tr>
												<tr>
													<td>Angelica Ramos</td>
													<td>Chief Executive Officer (CEO)</td>
													<td>London</td>
													<td>47</td>
													<td>2009/10/09</td>
													<td>$1,200,000</td>
												</tr>
												<tr>
													<td>Gavin Joyce</td>
													<td>Developer</td>
													<td>Edinburgh</td>
													<td>42</td>
													<td>2010/12/22</td>
													<td>$92,575</td>
												</tr>
												<tr>
													<td>Jennifer Chang</td>
													<td>Regional Director</td>
													<td>Singapore</td>
													<td>28</td>
													<td>2010/11/14</td>
													<td>$357,650</td>
												</tr>
												<tr>
													<td>Brenden Wagner</td>
													<td>Software Engineer</td>
													<td>San Francisco</td>
													<td>28</td>
													<td>2011/06/07</td>
													<td>$206,850</td>
												</tr>
												<tr>
													<td>Fiona Green</td>
													<td>Chief Operating Officer (COO)</td>
													<td>San Francisco</td>
													<td>48</td>
													<td>2010/03/11</td>
													<td>$850,000</td>
												</tr>
												<tr>
													<td>Shou Itou</td>
													<td>Regional Marketing</td>
													<td>Tokyo</td>
													<td>20</td>
													<td>2011/08/14</td>
													<td>$163,000</td>
												</tr>
												<tr>
													<td>Michelle House</td>
													<td>Integration Specialist</td>
													<td>Sidney</td>
													<td>37</td>
													<td>2011/06/02</td>
													<td>$95,400</td>
												</tr>
												<tr>
													<td>Suki Burks</td>
													<td>Developer</td>
													<td>London</td>
													<td>53</td>
													<td>2009/10/22</td>
													<td>$114,500</td>
												</tr>
												<tr>
													<td>Prescott Bartlett</td>
													<td>Technical Author</td>
													<td>London</td>
													<td>27</td>
													<td>2011/05/07</td>
													<td>$145,000</td>
												</tr>
												<tr>
													<td>Gavin Cortez</td>
													<td>Team Leader</td>
													<td>San Francisco</td>
													<td>22</td>
													<td>2008/10/26</td>
													<td>$235,500</td>
												</tr>
												<tr>
													<td>Martena Mccray</td>
													<td>Post-Sales support</td>
													<td>Edinburgh</td>
													<td>46</td>
													<td>2011/03/09</td>
													<td>$324,050</td>
												</tr>
												<tr>
													<td>Unity Butler</td>
													<td>Marketing Designer</td>
													<td>San Francisco</td>
													<td>47</td>
													<td>2009/12/09</td>
													<td>$85,675</td>
												</tr>
												<tr>
													<td>Howard Hatfield</td>
													<td>Office Manager</td>
													<td>San Francisco</td>
													<td>51</td>
													<td>2008/12/16</td>
													<td>$164,500</td>
												</tr>
												<tr>
													<td>Hope Fuentes</td>
													<td>Secretary</td>
													<td>San Francisco</td>
													<td>41</td>
													<td>2010/02/12</td>
													<td>$109,850</td>
												</tr>
												<tr>
													<td>Vivian Harrell</td>
													<td>Financial Controller</td>
													<td>San Francisco</td>
													<td>62</td>
													<td>2009/02/14</td>
													<td>$452,500</td>
												</tr>
												<tr>
													<td>Timothy Mooney</td>
													<td>Office Manager</td>
													<td>London</td>
													<td>37</td>
													<td>2008/12/11</td>
													<td>$136,200</td>
												</tr>
												<tr>
													<td>Jackson Bradshaw</td>
													<td>Director</td>
													<td>New York</td>
													<td>65</td>
													<td>2008/09/26</td>
													<td>$645,750</td>
												</tr>
												<tr>
													<td>Olivia Liang</td>
													<td>Support Engineer</td>
													<td>Singapore</td>
													<td>64</td>
													<td>2011/02/03</td>
													<td>$234,500</td>
												</tr>
												<tr>
													<td>Bruno Nash</td>
													<td>Software Engineer</td>
													<td>London</td>
													<td>38</td>
													<td>2011/05/03</td>
													<td>$163,500</td>
												</tr>
												<tr>
													<td>Sakura Yamamoto</td>
													<td>Support Engineer</td>
													<td>Tokyo</td>
													<td>37</td>
													<td>2009/08/19</td>
													<td>$139,575</td>
												</tr>
												<tr>
													<td>Thor Walton</td>
													<td>Developer</td>
													<td>New York</td>
													<td>61</td>
													<td>2013/08/11</td>
													<td>$98,540</td>
												</tr>
												<tr>
													<td>Finn Camacho</td>
													<td>Support Engineer</td>
													<td>San Francisco</td>
													<td>47</td>
													<td>2009/07/07</td>
													<td>$87,500</td>
												</tr>
												<tr>
													<td>Serge Baldwin</td>
													<td>Data Coordinator</td>
													<td>Singapore</td>
													<td>64</td>
													<td>2012/04/09</td>
													<td>$138,575</td>
												</tr>
												<tr>
													<td>Zenaida Frank</td>
													<td>Software Engineer</td>
													<td>New York</td>
													<td>63</td>
													<td>2010/01/04</td>
													<td>$125,250</td>
												</tr>
												<tr>
													<td>Zorita Serrano</td>
													<td>Software Engineer</td>
													<td>San Francisco</td>
													<td>56</td>
													<td>2012/06/01</td>
													<td>$115,000</td>
												</tr>
												<tr>
													<td>Jennifer Acosta</td>
													<td>Junior Javascript Developer</td>
													<td>Edinburgh</td>
													<td>43</td>
													<td>2013/02/01</td>
													<td>$75,650</td>
												</tr>
												<tr>
													<td>Cara Stevens</td>
													<td>Sales Assistant</td>
													<td>New York</td>
													<td>46</td>
													<td>2011/12/06</td>
													<td>$145,600</td>
												</tr>
												<tr>
													<td>Hermione Butler</td>
													<td>Regional Director</td>
													<td>London</td>
													<td>47</td>
													<td>2011/03/21</td>
													<td>$356,250</td>
												</tr>
												<tr>
													<td>Lael Greer</td>
													<td>Systems Administrator</td>
													<td>London</td>
													<td>21</td>
													<td>2009/02/27</td>
													<td>$103,500</td>
												</tr>
												<tr>
													<td>Jonas Alexander</td>
													<td>Developer</td>
													<td>San Francisco</td>
													<td>30</td>
													<td>2010/07/14</td>
													<td>$86,500</td>
												</tr>
												<tr>
													<td>Shad Decker</td>
													<td>Regional Director</td>
													<td>Edinburgh</td>
													<td>51</td>
													<td>2008/11/13</td>
													<td>$183,000</td>
												</tr>
												<tr>
													<td>Michael Bruce</td>
													<td>Javascript Developer</td>
													<td>Singapore</td>
													<td>29</td>
													<td>2011/06/27</td>
													<td>$183,000</td>
												</tr>
												<tr>
													<td>Donna Snider</td>
													<td>Customer Support</td>
													<td>New York</td>
													<td>27</td>
													<td>2011/01/25</td>
													<td>$112,000</td>
												</tr>
											</tbody>
											<tfoot>
												<tr>
													<th>Name</th>
													<th>Position</th>
													<th>Office</th>
													<th>Age</th>
													<th>Start date</th>
													<th>Salary</th>
												</tr>
											</tfoot>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!--/ Zero configuration table -->
			</div>
		</div>
	</div>
	<!-- ////////////////////////////////////////////////////////////////////////////-->
	<footer class="footer footer-static footer-light navbar-border">
		<p class="clearfix text-muted text-sm-center mb-0 px-2">
			<span class="float-md-center d-xs-block d-md-inline-block">Copyright
				&copy; 2017 <a href="http://leonardokurnia.com" target="_blank"
				class="text-bold-800 grey darken-2">Atmos Studio</a>, All rights
				reserved.
			</span>
		</p>
	</footer>
	<!-- BEGIN VENDOR JS-->
	<!-- build:js app-assets/js/vendors.min.js-->
	<script
		src="<?=$data['atomConstants']->baseUrl?>/app-assets/js/core/libraries/jquery.min.js"
		type="text/javascript"></script>
	<script
		src="<?=$data['atomConstants']->baseUrl?>/app-assets/vendors/js/ui/tether.min.js"
		type="text/javascript"></script>
	<script
		src="<?=$data['atomConstants']->baseUrl?>/app-assets/js/core/libraries/bootstrap.min.js"
		type="text/javascript"></script>
	<script
		src="<?=$data['atomConstants']->baseUrl?>/app-assets/vendors/js/ui/perfect-scrollbar.jquery.min.js"
		type="text/javascript"></script>
	<script
		src="<?=$data['atomConstants']->baseUrl?>/app-assets/vendors/js/ui/unison.min.js"
		type="text/javascript"></script>
	<script
		src="<?=$data['atomConstants']->baseUrl?>/app-assets/vendors/js/ui/blockUI.min.js"
		type="text/javascript"></script>
	<script
		src="<?=$data['atomConstants']->baseUrl?>/app-assets/vendors/js/ui/jquery.matchHeight-min.js"
		type="text/javascript"></script>
	<script
		src="<?=$data['atomConstants']->baseUrl?>/app-assets/vendors/js/ui/jquery-sliding-menu.js"
		type="text/javascript"></script>
	<script
		src="<?=$data['atomConstants']->baseUrl?>/app-assets/vendors/js/sliders/slick/slick.min.js"
		type="text/javascript"></script>
	<script
		src="<?=$data['atomConstants']->baseUrl?>/app-assets/vendors/js/ui/screenfull.min.js"
		type="text/javascript"></script>
	<script
		src="<?=$data['atomConstants']->baseUrl?>/app-assets/vendors/js/extensions/pace.min.js"
		type="text/javascript"></script>
	<!-- /build-->
	<!-- BEGIN VENDOR JS-->
	<!-- BEGIN PAGE VENDOR JS-->
	<script
		src="<?=$data['atomConstants']->baseUrl?>/app-assets/vendors/js/tables/jquery.dataTables.min.js"
		type="text/javascript"></script>
	<script
		src="<?=$data['atomConstants']->baseUrl?>/app-assets/vendors/js/tables/datatable/dataTables.bootstrap4.min.js"
		type="text/javascript"></script>
	<!-- END PAGE VENDOR JS-->
	<!-- BEGIN ROBUST JS-->
	<!-- build:js app-assets/js/app.min.js-->
	<script
		src="<?=$data['atomConstants']->baseUrl?>/app-assets/js/core/app-menu.js"
		type="text/javascript"></script>
	<script
		src="<?=$data['atomConstants']->baseUrl?>/app-assets/js/core/app.js"
		type="text/javascript"></script>
	<script
		src="<?=$data['atomConstants']->baseUrl?>/app-assets/js/scripts/ui/fullscreenSearch.js"
		type="text/javascript"></script>
	<!-- /build-->
	<!-- END ROBUST JS-->
	<!-- BEGIN PAGE LEVEL JS-->
	<script
		src="<?=$data['atomConstants']->baseUrl?>/app-assets/js/scripts/tables/datatables/datatable-basic.js"
		type="text/javascript"></script>
	<!-- END PAGE LEVEL JS-->
</body>
</html>