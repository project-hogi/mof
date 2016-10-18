<?php $pagePath = isset($_pagePath) ? $_pagePath : __FILE__; ?>
<?php $bodyClass = "layout-page"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/lib.php"; ?>
<?php require "part/app-header.php"; ?>
<?php require "part/header.php"; ?>
<?php require "part/header-sub.php"; ?>
	<div class="table_inquiry_area">
		<div class="comt">
			총게시물 <span class="comt_opt">0</span>건, <span class="comt_opt">1/1</span>페이지
		</div>
		<div class="table_inquiry">
			<form id="searchForm" method="post" action="/statPortal/bbs/event/list.do">
				<ul>
					<li>
						<select class="search_select" name="searchType" id="searchType">
							<option value="0">제목</option>
							<option value="1">내용</option>
						</select>
					</li>
					<li><input type="text" title="검색어입력" name="searchQuery" id="searchQuery" class="search_input"></li>
					<li class="bbs_searchbtn"><a href="#"><img src="<?php echo $config["resourcesDir"]; ?>/images/common/sub/search_btn.png" alt="검색"></a></li>
				</ul>
				<input type="hidden" id="pageIndex" name="pageIndex" value="1">
			</form>
		</div>
		<!--// table_inquiry -->
		<!-- 테이블 시작 -->
		<div id="bd1">
			<table width="680" border="0" cellspacing="0" cellpadding="0" summary="이벤트 목록 입니다." class="bd1_t1">
				<thead>
				<tr>
					<th width="60" scope="col" class="start">번호</th>
					<th width="*" scope="col">제목</th>
					<th width="100" scope="col">작성자</th>
					<th width="100" scope="col">작성일</th>
					<th width="60" scope="col" class="end">조회수</th>
				</tr>
				</thead>
				<tbody>

				</tbody>
			</table>
		</div>
		<!--// bd1 -->
		<!--// 테이블 끝 -->
		<!-- 페이지번호 -->
		<div class="pagination_area">
			<div class="pagination">
				<a class="page on" title="현재 페이지" href="#">1</a>

			</div>
			<!--// pagination -->
		</div>
		<!--// pagination_area -->
	</div>
<?php require "part/footer-sub.php"; ?>
<?php require "part/footer.php"; ?>
<?php require "part/app-footer.php"; ?>