<?php $pagePath = isset($_pagePath) ? $_pagePath : __FILE__; ?>
<?php $bodyClass = "layout-page"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/lib.php"; ?>
<?php require "part/app-header.php"; ?>
<?php require "part/header.php"; ?>
<?php require "part/header-sub.php"; ?>
	<div class="page-state">
		<div class="search-box">
			<div class="type01">
				<p class="title">분야별검색</p>
				<div class="search_list_box01">
					<div class="box-content" id="listCate">
						<ul>

						</ul>
					</div>
				</div>
			</div>
			<div class="img01"><img src="<?php echo $config["resourcesDir"]; ?>/images/common/sub/img_arrow01.png" alt="화살표"></div>
			<div class="type01" style="width: 520px;float: right;">
				<p class="title">지표</p>
				<div class="search_list_box01">
					<div class="box-content" id="listDetail">
						<ul>

						</ul>
					</div>
				</div>
			</div>
		</div>
		<!-- 보기 -->
	</div>
<?php require "part/footer-sub.php"; ?>
<?php require "part/footer.php"; ?>
<?php require "part/app-footer.php"; ?>