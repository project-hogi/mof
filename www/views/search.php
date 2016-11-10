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

		<div class="search-box">
			<div class="divSty form-group">
				<input name="keyword" class="form-control size-945 custom-blue" placeholder="검색어를 입력하세요" id="keyword" type="text" value="" onkeydown="enterFn()">
				<a href="" class="btn-search">
					<span class="icon icon-search-btn"><span class="sr-only">검색버튼</span></span>
				</a>
			</div>
		</div>

		<div class="box-area bdnone">
			<h4 class="list-title">승인통계</h4>
			<ul class="list-type-search">
				<li>
					<p><a href="#">원양어업 통계조사-연간급여액</a></p>
					<p>
						<span class="partition">승인통계(통계) <span class="position">국제원양>해양정책</span></span>
						<span class="partition">국제원양정책관>원양산업과</span>
					</p>
				</li>
				<li>
					<p><a href="#">원양어업 통계조사-연간급여액</a></p>
					<p>
						<span class="partition">승인통계(통계) <span class="position">국제원양>해양정책</span></span>
						<span class="partition">국제원양정책관>원양산업과</span>
					</p>
				</li>
				<li>
					<p><a href="#">원양어업 통계조사-연간급여액</a></p>
					<p>
						<span class="partition">승인통계(통계) <span class="position">국제원양>해양정책</span></span>
						<span class="partition">국제원양정책관>원양산업과</span>
					</p>
				</li>
				<li>
					<p><a href="#">원양어업 통계조사-연간급여액</a></p>
					<p>
						<span class="partition">승인통계(통계) <span class="position">국제원양>해양정책</span></span>
						<span class="partition">국제원양정책관>원양산업과</span>
					</p>
				</li>
			</ul>
			<a href="#" class="link-style ml10">더보기 &gt;</a>
		</div>
		<div class="box-area">
			<h4 class="list-title">게시판</h4>
			<ul class="list-type-search">
				<li>
					<p><a href="#">(20140212) 소말리아 해적활동 급감, 서아프리카는 증가</a></p>
					<p>
						<span class="partition">게시판<span class="position">보도자료</span></span>
						<span class="partition">해사안전정책과</span>
					</p>
				</li>
				<li>
					<p><a href="#">(20131216) 올해 크루즈 여객 작년보다 2.8배 증가한 796천명</a></p>
					<p>
						<span class="partition">게시판<span class="position">보도자료</span></span>
						<span class="partition">해사안전정책과</span>
					</p>
				</li>
				<li>
					<p><a href="#">(20140212) 소말리아 해적활동 급감, 서아프리카는 증가</a></p>
					<p>
						<span class="partition">게시판<span class="position">보도자료</span></span>
						<span class="partition">해운정책과</span>
					</p>
				</li>
			</ul>
			<a href="#" class="link-style ml10">더보기 &gt;</a>
		</div>
		<div class="box-area">
			<h4 class="list-title">통계용어</h4>
			<ul class="list-type-search">
				<li>
					<p><a href="#">VHF 무선 통신기 (VHF / Very High Frequency Radio Telephon)</a></p>
					<p>
						<span class="partition">통계용어</span>
						<span class="partition">해양수산부>정보화통계담당관</span>
					</p>
				</li>
			</ul>
			<a href="#" class="link-style ml10">더보기 &gt;</a>
		</div>


	</div>
</div>


<?php require "part/footer.php"; ?>
<?php require "part/app-footer.php"; ?>
