<?php $pagePath = isset($_pagePath) ? $_pagePath : __FILE__; ?>
<?php $bodyClass = "layout-page"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/lib.php"; ?>
<?php require "part/app-header.php"; ?>
<?php require "part/header.php"; ?>
<?php require "part/header-sub.php"; ?>
	<div class="page-state">
		<!-- ** 검색 ** -->
		<div class="search-box" id="listGb">
			<label><input type="radio" name="statGb" value="" title="전체검색" checked="checked"> 전체</label>
			<label><input type="radio" name="statGb" value="0310001" title="승인통계검색"> 승인통계</label>
			<label><input type="radio" name="statGb" value="0310003" title="행정자료검색"> 행정자료</label>
			<label><input type="radio" name="statGb" value="0310004" title="통계청자료검색"> 통계청</label>
			<label><input type="radio" name="statGb" value="0310005" title="국제통계자료검색"> 국제통계</label>
			<label><input type="radio" name="statGb" value="0310006" title="북한통계자료검색"> 북한통계</label>
		</div>
		<!-- ** 검색 ** -->
		<!-- ** 리스트 ** -->
		<div class="search-box">
			<div class="type01">
				<p class="title">분야별검색</p>
				<div class="search_list_box01">
					<div class="box-content" id="listCate">
						<ul>
							<li class="on" id="0120000">
								<a href="/statPortal/cate/partStatAjx.do" name="0120000" onclick="javascript:return false;">해양정책</a>
							</li>
							<li id="0130000">
								<a href="/statPortal/cate/partStatAjx.do" name="0130000" onclick="javascript:return false;">수산정책</a>
							</li>
							<li id="0140000">
								<a href="/statPortal/cate/partStatAjx.do" name="0140000" onclick="javascript:return false;">해운물류</a>
							</li>
							<li id="0150000">
								<a href="/statPortal/cate/partStatAjx.do" name="0150000" onclick="javascript:return false;">해사안전</a>
							</li>
							<li id="0160000">
								<a href="/statPortal/cate/partStatAjx.do" name="0160000" onclick="javascript:return false;">항만</a>
							</li>
							<li id="0170000">
								<a href="/statPortal/cate/partStatAjx.do" name="0170000" onclick="javascript:return false;">기타</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="img01"><img src="<?php echo $config["resourcesDir"]; ?>/images/common/sub/img_arrow01.png" alt="화살표"></div>
			<div class="type01">
				<p class="title">상세분야검색</p>
				<div class="search_list_box01">
					<div class="box-content" id="listDetail"><ul><li class="on" id="0120001"><a href="/statPortal/cate/partStatAjx.do" name="0120001" onclick="javascript:return false;">해양산업</a></li><li id="0120002"><a href="/statPortal/cate/partStatAjx.do" name="0120002" onclick="javascript:return false;">해양환경</a></li><li id="0120003"><a href="/statPortal/cate/partStatAjx.do" name="0120003" onclick="javascript:return false;">국제원양</a></li></ul></div>
				</div>
			</div>
			<div class="img01"><img src="<?php echo $config["resourcesDir"]; ?>/images/common/sub/img_arrow01.png" alt="화살표"></div>
			<div class="type02">
				<p class="title">검색결과</p>
				<div class="search_list_box01">
					<div class="box-content" id="listStat"><ul>등록된 통계가 존재하지 않습니다.</ul></div>
				</div>
			</div>
		</div>
		<!-- ** 리스트 ** -->
	</div>
<?php require "part/footer-sub.php"; ?>
<?php require "part/footer.php"; ?>
<?php require "part/app-footer.php"; ?>