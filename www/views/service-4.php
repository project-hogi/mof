<?php $pagePath = isset($_pagePath) ? $_pagePath : __FILE__; ?>
<?php $bodyClass = "layout-page"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/lib.php"; ?>
<?php require "part/app-header.php"; ?>
<?php require "part/header.php"; ?>
<?php require "part/header-sub.php"; ?>
	<div class="table_inquiry_area">
		<div class="comt">
			총게시물 <span class="comt_opt">1</span>건, <span class="comt_opt">1/1</span>페이지
		</div>
		<div class="table_inquiry">
			<ul>
				<li><select name="searchType" title="검색조건선택" id="searchType" class="search_select">
						<option value="0">제목</option>
						<option value="1">내용</option>
					</select></li>
				<li><input type="text" title="검색어입력" name="searchQuery" id="searchQuery" value="" class="search_input"></li>
				<li class="bbs_searchbtn"><a href="#"><img src="<?php echo $config["resourcesDir"]; ?>/images/common/sub/search_btn.png" alt="검색"></a></li>
			</ul>
		</div>
		<div id="bd1">
			<div class="page-state">
				<!-- ** 리스트 ** -->
				<ul class="qna-list01">
					<li class="Q">
						<a href="#" class="list">
							<strong>메뉴 찾기가 너무 힘들어요.</strong>
							<span class="toggle"><img src="<?php echo $config["resourcesDir"]; ?>/images/common/sub/btn_plus02.png" alt="상세닫기"></span>
						</a>
					</li>
					<li class="A" style="display:none">
						<div class="img"><img alt="" src="/statPortal/bbs/imageDownload.do?atchFileId=Y0xCS3N6ejB0MnVVay9lbWRrVFVNVFlGNTkxcnpWV0lDWFBxMmZVcUg0MD0=" style="height:976px; width:1341px"><br>
							<br>
							상단 전체메뉴보기를 클릭하면 사이트의 전체 메뉴를 확인할 수&nbsp;있습니다.</div>
						<ul>
						</ul>
					</li>
				</ul>
				<script type="text/javascript">
					$('li.Q').on('click',function(){
						var $icon = $(this).find('img');
						if($(this).next().css('display') =='none'){
							$icon.prop('src',$icon.prop('src').replace('plus','minus'));
							$(this).next().show();
						}else{
							$icon.prop('src',$icon.prop('src').replace('minus','plus'));
							$(this).next().hide();
						}
						$("div.cont_area").trigger("resize");
					});
				</script>
				<!-- ** 리스트 ** -->
			</div>
		</div>
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