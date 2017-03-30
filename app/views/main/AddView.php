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
				<?php
				foreach ($data['entity']->getPool()->getPoolGroupDataArray() as $poolGroupDataRow) {
					echo '<li class=" nav-item"><a href="#"><i class="icon-ios-folder"></i><span data-i18n="nav.data_tables.main" class="menu-title">'.$poolGroupDataRow['display_name'].'</span></a><ul class="menu-content">';
					foreach ($data['entity']->getPool()->getPoolEntityDataArray() as $poolEntityDataRow) {
						if ($poolEntityDataRow['sys_group_id'] == $poolGroupDataRow['id']) {
							if ($poolEntityDataRow['name'] == $data['entity']->getName()) {
								echo '<li class="active"><a href="../'.$poolEntityDataRow['name'].'/list" data-i18n="nav.data_tables.dt_basic_initialization" class="menu-item">'.$poolEntityDataRow['display_name'].'</a></li>';
							}
							else {
								echo '<li><a href="../'.$poolEntityDataRow['name'].'/list" data-i18n="nav.data_tables.dt_basic_initialization" class="menu-item">'.$poolEntityDataRow['display_name'].'</a></li>';
							}
						}
					}
					echo '</ul></li>';
				}
				?>
				<li class=" nav-item"><a href="../FileUpload"><i class="icon-upload"></i><span
						data-i18n="nav.data_tables.main" class="menu-title">File Upload</span></a></li>
			</ul>
		</div>
		<!-- /main menu content-->
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
										<?php
										if (isset($_GET['forwardFieldName'])) {
											echo '<form class="form" action="addprocess?forwardFieldName='.$_GET['forwardFieldName'].'&forwardFieldEntity='.$_GET['forwardFieldEntity'].'" method="POST">';
										}
										else {
											echo '<form class="form" action="addprocess" method="POST">';
										}
										?>
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
													}
													if ($fieldObject->getFieldType() == 'number') {
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
															if ($fieldObject->getReferencedField()->getEntity()->getName() == "sys_field") {
																echo '<option value="'.$referencedData['id'].'">'.$data['entity']->getPool()->getEntityObjectById($referencedData['sys_entity_id'])->getDisplayName().$referencedData[$fieldObject->getReferencedField()->getName()].'</option>';
															}
															else {
																echo '<option value="'.$referencedData['id'].'">'.$referencedData[$fieldObject->getReferencedField()->getName()].'</option>';
															}
														}
														echo '</select></div>';
													}
													if ($fieldObject->getFieldType() == 'cloudfile') {
														echo '<div class="form-group"><h5>'.$fieldObject->getDisplayName().'</h5><select class="select2 form-control" name="'.$fieldObject->getName().'">';
														$path    = 'dropzone';
														$files = scandir($path);
														$files = array_diff(scandir($path), array('.', '..'));
														echo '<option value="--">--</option>';
														foreach ($files as $file) {
															echo '<option value="'.$file.'">'.$file.'</option>';
														}
														echo '</select></div>';
													}
												}
												?>
												<h4 class="form-section">
													Rich Text Entry
												</h4>
												<?php
												foreach ($data['entity']->getFieldObjectArray() as $fieldObject) {
													//FieldTypeMapping
													if ($fieldObject->getFieldType() == 'richtext') {
														echo '
															<input name="'.$fieldObject->getName().'" type="hidden">
															<div class="row" id="'.$fieldObject->getName().'"><div class="col-md-12"><div id="full-wrapper"><div id="full-container"><div class="editor"><p>Create New Content...</p></div></div></div></div></div>
															<script>
															var form = document.querySelector(\'form\');
															form.onsubmit = function() {
															var content = document.querySelector(\'input[name='.$fieldObject->getName().']\');
															content.value = $(\'#'.$fieldObject->getName().' .ql-editor\').html();
															};
															</script>
														';
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