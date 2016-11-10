<?php $pagePath = isset($_pagePath) ? $_pagePath : __FILE__; ?>
<?php $bodyClass = "layout-page"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/lib.php"; ?>
<?php require "part/app-header.php"; ?>
<?php require "part/header.php"; ?>

<div class="container">
	<div id="content">
		<div class="page-title">
			<h3 class="title">
				<strong>
					통합검색
				</strong>
				<span class="small"></span>
			</h3>
		</div>
		<table class="table-primary table-striped">
			<tbody>
			<tr>
				<td><a href="#">VHF 무선 통신기 (VHF / Very High Frequency Radio Telephon)</a></td>
				<td>통계용어 ㅣ 해양수산부>정보화통계담당관</td>
			</tr>
			<tr>
				<td><a href="#">UN공해어업협정 (UNFSA)</a></td>
				<td>통계용어 ㅣ 해양수산부>정보화통계담당관</td>
			</tr>
			<tr>
				<td><a href="#">SPM (Single Point Buoy Mooring System)</a></td>
				<td>통계용어 ㅣ 해양수산부>정보화통계담당관</td>
			</tr>
			<tr>
				<td><a href="#">SPC (Special Purpose Company)</a></td>
				<td>통계용어 ㅣ 해양수산부>정보화통계담당관</td>
			</tr>
			<tr>
				<td><a href="#">SOLAS 협약 (International Convention for the Safety of Life at Sea, 1974)</a></td>
				<td>통계용어 ㅣ 해양수산부>정보화통계담당관</td>
			</tr>
			<tr>
				<td><a href="#">Qualship21 제도</a></td>
				<td>통계용어 ㅣ 해양수산부>정보화통계담당관</td>
			</tr>
			<tr>
				<td><a href="#">MEPC (Maritime Enviroment Protection Committee)</a></td>
				<td>통계용어 ㅣ 해양수산부>정보화통계담당관</td>
			</tr>
			<tr>
				<td><a href="#">가스연료추진선박 (Gas-fuelled Ship)</a></td>
				<td>통계용어 ㅣ 해양수산부>정보화통계담당관</td>
			</tr>
			<tr>
				<td><a href="#">공기부양정 (Air Cushion Vehicle, Hovercraft)</a></td>
				<td>통계용어 ㅣ 해양수산부>정보화통계담당관</td>
			</tr>
			</tbody>
		</table>
		<div class="table-footer">
			<div class="center">
				<ul class="pagination">
					<li class="active"><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">5</a></li>
				</ul>
				<ul class="pager">
					<li><a href="#" class="btn-prev"><span class="sr-only">이전</span></a></li>
					<li><a href="#" class="btn-next"><span class="sr-only">다음</span></a></li>
				</ul>
			</div>
		</div>
		<!-- /.table-footer -->
	</div>
</div>

<?php require "part/footer.php"; ?>
<?php require "part/app-footer.php"; ?>
