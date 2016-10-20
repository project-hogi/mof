<!-- Header.html -->
<div id="top-banner" class="on">
	<div class="container">
		<div class="banner-box">
			<ul>
				<li><a href="#"><img src="<?php echo $config["resourcesDir"]; ?>/images/part/banner/top/con-1.png" alt=""><span class="sr-only">2016년도 해양청정에너지기술개발사업 신규과제 선정계획 한국해양과학기술진흥원 R&D통합관리시스템을 통해 신청서 제출</span></a></li>
				<li><a href="#"><img src="<?php echo $config["resourcesDir"]; ?>/images/part/banner/top/con-1.png" alt=""><span class="sr-only"></span></a></li>
				<li><a href="#"><img src="<?php echo $config["resourcesDir"]; ?>/images/part/banner/top/con-1.png" alt=""><span class="sr-only"></span></a></li>
			</ul>
		</div>
		<div class="controller">
			<a href="#" class="tb-prev"><span class="sr-only">이전</span></a>
			<a href="#" class="tb-next"><span class="sr-only">다음</span></a>
		</div>
		<div class="pagination">
			<a href="#" class="active"></a>
			<a href="#"></a>
			<a href="#"></a>
		</div>
		<div class="close-set">
			<form action="">
				<filedset>
					<label for="tb-close-1day"><input type="checkbox" id="tb-close-1day"> 1일간 열지않음</label>
					<button type="submit" class="btn-tb-close"><span class="sr-only">상단배너 닫기</span></button>
				</filedset>
			</form>
		</div>
	</div>
	<!-- #top-banner script -->
	<script>
		$(document).on("appinit", function() {
			$('#top-banner').each(function(){
				var $topBanner = $(this);
				var $btnTbClose = $('.btn-tb-close', $topBanner);
				$btnTbClose.on('click', function(){
					var $quickMenu = $('.quick-menu');
					$topBanner.removeClass('on active');
					$quickMenu.removeClass('top-banner');
					return false;
				});
			});
		});
	</script>
</div>
<!-- /#top-banner -->
<div id="wrap">
	<div id="header">
		<div class="container">
			<h1 class="logo"><a href="/"><span class="sr-only">해양수산부 통계시스템</span></a></h1>
			<div class="lnb">
				<ul class="depth1">
					<li class="eq-1">
						<a href="service-1.php"><span>서비스안내</span></a>
						<ul class="depth2">
							<li><a href="service-1.php">해양수산통계소개</a></li>
							<li><a href="service-2.php">공지사항</a></li>
							<li><a href="service-3.php">보도자료</a></li>
							<li><a href="service-4.php">자주묻는질문</a></li>
							<li><a href="service-5.php">이용안내</a></li>
							<li><a href="service-6.php">관련사이트</a></li>
							<li><a href="service-7.php">관련통계사이트</a></li>
						</ul>
					</li>
					<li class="eq-2">
						<a href="stats-1.php"><span>통계조회</span></a>
						<ul class="depth2">
							<li><a href="stats-1.php">분야별통계</a></li>
							<li><a href="stats-2.php">부서별통계</a></li>
							<li><a href="stats-3.php">주요통계</a></li>
							<li><a href="stats-4.php">인기통계</a></li>
							<li><a href="stats-5.php">통계공표일정</a></li>
							<li><a href="stats-6.php">통계담당부서안내</a></li>
							<li><a href="stats-7.php">최근수록자료</a></li>
						</ul>
					</li>
					<li class="eq-3">
						<a href="indicator-1.php"><span>지표조회</span></a>
						<ul class="depth2">
							<li><a href="indicator-1.php">분야별지표</a></li>
							<li><a href="indicator-2.php">주요지표</a></li>
							<li><a href="indicator-3.php">인기지표</a></li>
							<li><a href="indicator-4.php">최근수록지표</a></li>
						</ul>
					</li>
					<li class="eq-4">
						<a href="information-1.php"><span>통계정보</span></a>
						<ul class="depth2">
							<li><a href="information-1.php">간행물</a></li>
							<li><a href="information-2.php">통계메타DB</a></li>
							<li><a href="information-3.php">통계용어</a></li>
							<li><a href="information-4.php">통계법령자료</a></li>
							<li><a href="information-5.php">통계서식정보</a></li>
							<li><a href="information-6.php">통계기반정책평가제도</a></li>
							<li><a href="information-7.php">품질진단안내</a></li>
						</ul>
					</li>
					<li class="eq-5">
						<a href="participation-1.php"><span>참여</span></a>
						<ul class="depth2">
							<li><a href="participation-1.php">이벤트</a></li>
							<li><a href="participation-2.php">통계개선의견</a></li>
							<li><a href="participation-3.php">통계개발요청</a></li>
						</ul>
					</li>
				</ul>
			</div>
			<div class="gnb">
				<ul>
					<li class="on"><a href="/"><span>HOME</span></a></li>
					<li><a href="participation-1.php"><span>EVENT</span></a></li>
					<li class="sitemap"><a href="#sitemap" class="btn-sitemap"><span class="sr-only">SITEMAP</span></a></li>
				</ul>
			</div>
			<div class="search">
				<form action="">
					<fieldset>
						<div class="search-focus-wrap">
							<div class="search-type">
								<a href="#">통합검색</a>
								<ul>
									<li><a href="#">통합검색1</a></li>
									<li><a href="#">통합검색2</a></li>
									<li><a href="#">통합검색3</a></li>
									<li><a href="#">통합검색4</a></li>
									<li><a href="#">통합검색5</a></li>
								</ul>
							</div>
							<div class="form-group form-search-text">
								<label for="">
									<input type="text" class="form-control">
								</label>
							</div>
						</div>
						<button type="submit" class="btn btn-search"><span class="glyphicon glyphicon-search"></span></button>
					</fieldset>
				</form>
			</div>
		</div>
	</div>
	<div id="container">
		<!-- Header.html -->
