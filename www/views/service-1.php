<?php $pagePath = isset($_pagePath) ? $_pagePath : __FILE__; ?>
<?php $bodyClass = "layout-page"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/lib.php"; ?>
<?php require "part/app-header.php"; ?>
<?php require "part/header.php"; ?>
<?php require "part/header-sub.php"; ?>
	<div class="greeting_area">
		<ul class="greeting">
			<li>안녕하십니까?</li>
			<li><span class="greeting_opt">해양수산부</span> <span class="greeting_opt2">통계시스템</span>입니다.</li>
			<li class="greeting_size">WELCOME to <span class="greeting_opt3">MINISTRY OF OCEANS AND FISHERIES</span></li>
		</ul>
		<ul class="greeting_text">
			<li>해양수산부에서는 부처신설에 따라 해양과 수산으로 분리되어 제공되던 통계정보를 한 곳으로 통합하여 한번의 접속으로 해양수산분야의<br> 다양한 통계정보를 이용할 수 있도록 <span class="greeting_opt3">해양수산통계포털</span>을 구축하였습니다.</li>
			<li>해양수산통계포털에서는 국가승인통계, 행정통계, 통계관련 보도자료 등 다양한 정보를 제공하고 있으니 많은 관심 부탁드립니다.</li>
			<li>앞으로도 해양수산통계의 개발 · 개선 및 통계수요자의 요구를 반영한 통계포털 운영을 위해 최선을 다할 것입니다.</li>
			<li>아울러 통계포털에 대한 개선의견이 있으시면 해양수산부 정보화담당관 통계담당 <span class="greeting_opt3">☎ 044-200-5185</span>으로 의견을 주시면<br> 적극 반영하도록 하겠습니다.</li>
		</ul>
		<ul class="greeting_text2">
			<li>해양수산부 통계시스템</li>
		</ul>
	</div>
<?php require "part/footer-sub.php"; ?>
<?php require "part/footer.php"; ?>
<?php require "part/app-footer.php"; ?>