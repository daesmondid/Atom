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
<title>Atom - <?=$data['atomConstants']::USERNAME?></title>
<link rel="apple-touch-icon" sizes="60x60"
	href="<?=$data['atomConstants']::BASE_URL?>/app-assets/images/ico/apple-icon-60.png">
<link rel="apple-touch-icon" sizes="76x76"
	href="<?=$data['atomConstants']::BASE_URL?>/app-assets/images/ico/apple-icon-76.png">
<link rel="apple-touch-icon" sizes="120x120"
	href="<?=$data['atomConstants']::BASE_URL?>/app-assets/images/ico/apple-icon-120.png">
<link rel="apple-touch-icon" sizes="152x152"
	href="<?=$data['atomConstants']::BASE_URL?>/app-assets/images/ico/apple-icon-152.png">
<link rel="shortcut icon" type="image/x-icon"
	href="<?=$data['atomConstants']::BASE_URL?>/app-assets/images/ico/favicon.ico">
<link rel="shortcut icon" type="image/png"
	href="<?=$data['atomConstants']::BASE_URL?>/app-assets/images/ico/favicon-32.png">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-touch-fullscreen" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="default">
<!-- BEGIN VENDOR CSS-->
<link rel="stylesheet" type="text/css"
	href="<?=$data['atomConstants']::BASE_URL?>/app-assets/css/bootstrap.css">
<!-- font icons-->
<link rel="stylesheet" type="text/css"
	href="<?=$data['atomConstants']::BASE_URL?>/app-assets/fonts/icomoon.css">
<link rel="stylesheet" type="text/css"
	href="<?=$data['atomConstants']::BASE_URL?>/app-assets/fonts/flag-icon-css/css/flag-icon.min.css">
<link rel="stylesheet" type="text/css"
	href="<?=$data['atomConstants']::BASE_URL?>/app-assets/vendors/css/sliders/slick/slick.css">
<link rel="stylesheet" type="text/css"
	href="<?=$data['atomConstants']::BASE_URL?>/app-assets/vendors/css/extensions/pace.css">
<link rel="stylesheet" type="text/css"
	href="<?=$data['atomConstants']::BASE_URL?>/app-assets/vendors/css/tables/datatable/dataTables.bootstrap4.min.css">
<link rel="stylesheet" type="text/css"
	href="<?=$data['atomConstants']::BASE_URL?>/app-assets/vendors/css/forms/selects/select2.min.css">
<link rel="stylesheet" type="text/css"
	href="<?=$data['atomConstants']::BASE_URL?>/app-assets/vendors/css/editors/quill/katex.min.css">
<link rel="stylesheet" type="text/css"
	href="<?=$data['atomConstants']::BASE_URL?>/app-assets/vendors/css/editors/quill/monokai-sublime.min.css">
<link rel="stylesheet" type="text/css"
	href="<?=$data['atomConstants']::BASE_URL?>/app-assets/vendors/css/editors/quill/quill.snow.css">
<link rel="stylesheet" type="text/css"
	href="<?=$data['atomConstants']::BASE_URL?>/app-assets/vendors/css/editors/quill/quill.bubble.css">
<!-- END VENDOR CSS-->
<!-- BEGIN ROBUST CSS-->
<link rel="stylesheet" type="text/css"
	href="<?=$data['atomConstants']::BASE_URL?>/app-assets/css/bootstrap-extended.css">
<link rel="stylesheet" type="text/css"
	href="<?=$data['atomConstants']::BASE_URL?>/app-assets/css/app.css">
<link rel="stylesheet" type="text/css"
	href="<?=$data['atomConstants']::BASE_URL?>/app-assets/css/colors.css">
<link rel="stylesheet" type="text/css"
	href="<?=$data['atomConstants']::BASE_URL?>/assets/css/style.css">
<!-- END ROBUST CSS-->
<!-- BEGIN Page Level CSS-->
<link rel="stylesheet" type="text/css"
	href="<?=$data['atomConstants']::BASE_URL?>/app-assets/css/core/menu/menu-types/vertical-menu.css">
<link rel="stylesheet" type="text/css"
	href="<?=$data['atomConstants']::BASE_URL?>/app-assets/css/core/menu/menu-types/vertical-overlay-menu.css">
<!-- END Page Level CSS-->
<!-- BEGIN Custom CSS-->
<link rel="stylesheet" type="text/css"
	href="<?=$data['atomConstants']::BASE_URL?>/assets/css/style.css">
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
						class="navbar-brand nav-link"> <img height="26" alt="branding logo"
							src="<?=$data['atomConstants']::BASE_URL?>/images/main-logo-var.svg"
							data-expand="<?=$data['atomConstants']::BASE_URL?>/images/main-logo-var.svg"
							data-collapse="<?=$data['atomConstants']::BASE_URL?>/images/min-logo-var.svg"
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
									src="<?=$data['atomConstants']::BASE_URL?>/app-assets/images/portrait/small/avatar-s-1.png"
									alt="avatar"><i></i></span> <span class="user-name"><?=$data['atomConstants']::USERNAME?></span>
						</a>
							<div class="dropdown-menu dropdown-menu-right">
								<a href="#" class="dropdown-item"><i class="icon-head"></i> Edit
									Profile</a> <a href="#" class="dropdown-item"><i
									class="icon-mail6"></i> My Inbox</a> <a href="#"
									class="dropdown-item"><i class="icon-clipboard2"></i> Task</a>
								<a href="#" class="dropdown-item"><i class="icon-calendar5"></i>
									Calender</a>
								<div class="dropdown-divider"></div>
								<a href="#" class="dropdown-item"><i class="icon-power3"></i> Logout</a>
							</div></li>
					</ul>
				</div>
			</div>
		</div>
	</nav>
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
							class="menu-item">Entities</a></li>
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
									<h4 class="card-title">Create new <?=$data['entity']->getDisplayName()?></h4>
									<a class="heading-elements-toggle"><i
										class="icon-ellipsis font-medium-3"></i></a>
									<div class="heading-elements">
										<ul class="list-inline mb-0">
											<li><a data-action="reload"><i class="icon-reload"></i></a></li>
											<li><a data-action="expand"><i class="icon-expand2"></i></a></li>
											<li><a href="list"><i class="icon-menu5"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="card-body">
									<div class="card-block">
										<form class="form" action="addprocess" method="POST">
											<div class="form-body">
												<h4 class="form-section">
													General Entry
												</h4>
												<?php
												foreach ($data['entity']->getFieldObjectArray() as $fieldObject) {
													//FieldTypeMapping
													if ($fieldObject->getFieldType() == 'string') {
														echo '
														<fieldset class="form-group form-group-style">
															<label for="textbox2">'.$fieldObject->getDisplayName().'</label> <input type="text" class="form-control" id="textbox2" name="'.$fieldObject->getName().'">
														</fieldset>
														';
													} else if ($fieldObject->getFieldType() == 'number') {
														echo '
														<fieldset class="form-group form-group-style">
															<label for="number12">'.$fieldObject->getDisplayName().'</label> <input type="number" class="form-control" id="number12" name="'.$fieldObject->getName().'">
														</fieldset>
														';
													}
												}
												?>
												<h4 class="form-section">
													Selection Entry
												</h4>
												<?php
												foreach ($data['entity']->getFieldObjectArray() as $fieldObject) {
													//FieldTypeMapping
													if ($fieldObject->getFieldType() == 'reference') {
														echo '<div class="form-group"><h5>'.$fieldObject->getDisplayName().'</h5><select class="select2 form-control" name="'.$fieldObject->getName().'">';
														$referencedDataArray = $fieldObject->getReferencedField()->getEntity()->getDataArray();
														echo '<option value="--">--</option>';
														foreach ($referencedDataArray as $referencedData) {
															echo '<option value="'.$referencedData['id'].'">'.$referencedData[$fieldObject->getReferencedField()->getName()].'</option>';
														}
														echo '</select></div>';
													}
												}
												?>
											</div>
											<div class="form-actions right">
												<button type="button" class="btn btn-outline-warning mr-1" onclick="location.href='list';">
													<i class="icon-cross2"></i> Cancel
												</button>
												<button type="submit" class="btn btn-outline-primary">
													<i class="icon-check2"></i> Save
												</button>
											</div>
										</form>
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
		src="<?=$data['atomConstants']::BASE_URL?>/app-assets/js/core/libraries/jquery.min.js"
		type="text/javascript"></script>
	<script
		src="<?=$data['atomConstants']::BASE_URL?>/app-assets/vendors/js/ui/tether.min.js"
		type="text/javascript"></script>
	<script
		src="<?=$data['atomConstants']::BASE_URL?>/app-assets/js/core/libraries/bootstrap.min.js"
		type="text/javascript"></script>
	<script
		src="<?=$data['atomConstants']::BASE_URL?>/app-assets/vendors/js/ui/perfect-scrollbar.jquery.min.js"
		type="text/javascript"></script>
	<script
		src="<?=$data['atomConstants']::BASE_URL?>/app-assets/vendors/js/ui/unison.min.js"
		type="text/javascript"></script>
	<script
		src="<?=$data['atomConstants']::BASE_URL?>/app-assets/vendors/js/ui/blockUI.min.js"
		type="text/javascript"></script>
	<script
		src="<?=$data['atomConstants']::BASE_URL?>/app-assets/vendors/js/ui/jquery.matchHeight-min.js"
		type="text/javascript"></script>
	<script
		src="<?=$data['atomConstants']::BASE_URL?>/app-assets/vendors/js/ui/jquery-sliding-menu.js"
		type="text/javascript"></script>
	<script
		src="<?=$data['atomConstants']::BASE_URL?>/app-assets/vendors/js/sliders/slick/slick.min.js"
		type="text/javascript"></script>
	<script
		src="<?=$data['atomConstants']::BASE_URL?>/app-assets/vendors/js/ui/screenfull.min.js"
		type="text/javascript"></script>
	<script
		src="<?=$data['atomConstants']::BASE_URL?>/app-assets/vendors/js/extensions/pace.min.js"
		type="text/javascript"></script>
	<!-- /build-->
	<!-- BEGIN VENDOR JS-->
	<!-- BEGIN PAGE VENDOR JS-->
	<script
		src="<?=$data['atomConstants']::BASE_URL?>/app-assets/vendors/js/tables/jquery.dataTables.min.js"
		type="text/javascript"></script>
	<script
		src="<?=$data['atomConstants']::BASE_URL?>/app-assets/vendors/js/tables/datatable/dataTables.bootstrap4.min.js"
		type="text/javascript"></script>
	<script
		src="<?=$data['atomConstants']::BASE_URL?>/app-assets/vendors/js/forms/select/select2.full.min.js"
		type="text/javascript"></script>
	<script
		src="<?=$data['atomConstants']::BASE_URL?>/app-assets/vendors/js/editors/quill/katex.min.js"
		type="text/javascript"></script>
	<script
		src="<?=$data['atomConstants']::BASE_URL?>/app-assets/vendors/js/editors/quill/highlight.min.js"
		type="text/javascript"></script>
	<script
		src="<?=$data['atomConstants']::BASE_URL?>/app-assets/vendors/js/editors/quill/quill.min.js"
		type="text/javascript"></script>
	<!-- END PAGE VENDOR JS-->
	<!-- BEGIN ROBUST JS-->
	<!-- build:js app-assets/js/app.min.js-->
	<script
		src="<?=$data['atomConstants']::BASE_URL?>/app-assets/js/core/app-menu.js"
		type="text/javascript"></script>
	<script
		src="<?=$data['atomConstants']::BASE_URL?>/app-assets/js/core/app.js"
		type="text/javascript"></script>
	<script
		src="<?=$data['atomConstants']::BASE_URL?>/app-assets/js/scripts/ui/fullscreenSearch.js"
		type="text/javascript"></script>
	<!-- /build-->
	<!-- END ROBUST JS-->
	<!-- BEGIN PAGE LEVEL JS-->
	<script
		src="<?=$data['atomConstants']::BASE_URL?>/app-assets/js/scripts/tables/datatables/datatable-basic.js"
		type="text/javascript"></script>
	<script
		src="<?=$data['atomConstants']::BASE_URL?>/app-assets/js/scripts/forms/select/form-select2.js"
		type="text/javascript"></script>
	<script src="<?=$data['atomConstants']::BASE_URL?>/app-assets/js/scripts/editors/editor-quill.js"
		type="text/javascript"></script>
	<!-- END PAGE LEVEL JS-->
</body>
</html>