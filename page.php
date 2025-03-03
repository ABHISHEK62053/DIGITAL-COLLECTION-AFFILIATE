<?php
require "{$_SERVER["DOCUMENT_ROOT"]}/components/page-preview.php";
require("dashboard/header.php");
?>
<div class="pagewrap">
	<style>#ajaxContent{max-width:inherit;padding:0px;}.autoplay-nav{display:none;}</style>
	<div class="mainwrap">
		<div class="header wrap-common">
			<h2>Create Business Page</h2>
		</div>
		<div class="create-new-wrapper wrap-common">
			<div class="error"></div>
			<div class="wrapinner">
				<div class="fg1">
					<div class="fprefix">
						<img src="/internal/images/flag.png" alt="Business page" draggable="false" width="25">
					</div>
					<div class="ellipsis"><strong>Create Professional Page</strong></div>
				</div>
				<div class="fprefix">
					<button id="create_page_button"><svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="5" x2="12" y2="19"/><line x1="5" y1="12" x2="19" y2="12"/></svg><span>Create new</span></button>
				</div>
			</div>
		</div>
		<div class="previous-create-page wrap-common"><?=renderPagePreview(true);?></div>
	</div>
	<script type="text/javascript" src="/business/assets/javascript/createpage.js"></script>
</div>
<?php require("dashboard/footer.php"); ?>