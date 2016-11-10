<?php $pagePath = isset($_pagePath) ? $_pagePath : __FILE__; ?>
<?php $bodyClass = "layout-page"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/lib.php"; ?>
<?php require "part/app-header.php"; ?>
<?php require "part/header.php"; ?>
<?php require "part/header-sub.php"; ?>
	<div class="page-state">
		<div class="search-box">
			<div class="divSty form-group">
				<input name="keyword" class="form-control size-710 custom-blue" placeholder="검색어를 입력하세요" id="keyword" type="text" value="" onkeydown="enterFn()">
				<a href="" class="btn-search">
					<span class="icon icon-search-btn"><span class="sr-only">검색버튼</span></span>
				</a>
			</div>
		</div>
		<div class="zTreeDemoBackground">

		</div>
	</div>
<?php require "part/footer-sub.php"; ?>
<?php require "part/footer.php"; ?>
<?php require "part/app-footer.php"; ?>