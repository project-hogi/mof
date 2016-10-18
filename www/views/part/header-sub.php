<!-- Header Sub.html -->
<div id="snb">

	<h2>
		<strong>
			<?php if(getDepthId($pagePath, 0) == "service"){ ?>
				서비스안내
			<?php } else if(getDepthId($pagePath, 0) == "stats"){ ?>
				통계조회
			<?php } else if(getDepthId($pagePath, 0) == "indicator"){ ?>
				지표조회
			<?php } else if(getDepthId($pagePath, 0) == "information"){ ?>
				통계정보
			<?php } else if(getDepthId($pagePath, 0) == "participation"){ ?>
				참여
			<?php } ?>
		</strong>
		<span class="small">
			<?php if(getDepthId($pagePath, 0) == "service"){ ?>
				Information
			<?php } else if(getDepthId($pagePath, 0) == "stats"){ ?>
				Statistics Inquiry
			<?php } else if(getDepthId($pagePath, 0) == "indicator"){ ?>
				Index Inquiry
			<?php } else if(getDepthId($pagePath, 0) == "information"){ ?>
				Statistics Information
			<?php } else if(getDepthId($pagePath, 0) == "participation"){ ?>
				Participation
			<?php } ?>
		</span>
	</h2>
	<ul class="depth2">
		<?php if(getDepthId($pagePath, 0) == "service"){ ?>
			<li<?php if(getDepthId($pagePath, 1) == "1"){ ?> class="on"<?php } ?>><a href="service-1.php">해양수산통계소개</a></li>
			<li<?php if(getDepthId($pagePath, 1) == "2"){ ?> class="on"<?php } ?>><a href="service-2.php">공지사항</a></li>
			<li<?php if(getDepthId($pagePath, 1) == "3"){ ?> class="on"<?php } ?>><a href="service-3.php">보도자료</a></li>
			<li<?php if(getDepthId($pagePath, 1) == "4"){ ?> class="on"<?php } ?>><a href="service-4.php">자주묻는질문</a></li>
			<li<?php if(getDepthId($pagePath, 1) == "5"){ ?> class="on"<?php } ?>><a href="service-5.php">이용안내</a></li>
			<li<?php if(getDepthId($pagePath, 1) == "6"){ ?> class="on"<?php } ?>><a href="service-6.php">관련사이트</a></li>
			<li<?php if(getDepthId($pagePath, 1) == "7"){ ?> class="on"<?php } ?>><a href="service-7.php">관련통계사이트</a></li>
		<?php } else if(getDepthId($pagePath, 0) == "stats"){ ?>
			<li<?php if(getDepthId($pagePath, 1) == "1"){ ?> class="on"<?php } ?>><a href="stats-1.php">분야별통계</a></li>
			<li<?php if(getDepthId($pagePath, 1) == "2"){ ?> class="on"<?php } ?>><a href="stats-2.php">부서별통계</a></li>
			<li<?php if(getDepthId($pagePath, 1) == "3"){ ?> class="on"<?php } ?>><a href="stats-3.php">주요통계</a></li>
			<li<?php if(getDepthId($pagePath, 1) == "4"){ ?> class="on"<?php } ?>><a href="stats-4.php">인기통계</a></li>
			<li<?php if(getDepthId($pagePath, 1) == "5"){ ?> class="on"<?php } ?>><a href="stats-5.php">통계공표일정</a></li>
			<li<?php if(getDepthId($pagePath, 1) == "6"){ ?> class="on"<?php } ?>><a href="stats-6.php">통계담당부서안내</a></li>
			<li<?php if(getDepthId($pagePath, 1) == "7"){ ?> class="on"<?php } ?>><a href="stats-7.php">최근수록자료</a></li>
		<?php } else if(getDepthId($pagePath, 0) == "indicator"){ ?>
			<li<?php if(getDepthId($pagePath, 1) == "1"){ ?> class="on"<?php } ?>><a href="indicator-1.php">분야별지표</a></li>
			<li<?php if(getDepthId($pagePath, 1) == "2"){ ?> class="on"<?php } ?>><a href="indicator-2.php">주요지표</a></li>
			<li<?php if(getDepthId($pagePath, 1) == "3"){ ?> class="on"<?php } ?>><a href="indicator-3.php">인기지표</a></li>
			<li<?php if(getDepthId($pagePath, 1) == "4"){ ?> class="on"<?php } ?>><a href="indicator-4.php">최근수록지표</a></li>
		<?php } else if(getDepthId($pagePath, 0) == "information"){ ?>
			<li<?php if(getDepthId($pagePath, 1) == "1"){ ?> class="on"<?php } ?>><a href="information-1.php">간행물</a></li>
			<li<?php if(getDepthId($pagePath, 1) == "2"){ ?> class="on"<?php } ?>><a href="information-2.php">통계메타DB</a></li>
			<li<?php if(getDepthId($pagePath, 1) == "3"){ ?> class="on"<?php } ?>><a href="information-3.php">통계용어</a></li>
			<li<?php if(getDepthId($pagePath, 1) == "4"){ ?> class="on"<?php } ?>><a href="information-4.php">통계법령자료</a></li>
			<li<?php if(getDepthId($pagePath, 1) == "5"){ ?> class="on"<?php } ?>><a href="information-5.php">통계서식정보</a></li>
			<li<?php if(getDepthId($pagePath, 1) == "6"){ ?> class="on"<?php } ?>><a href="information-6.php">통계기반정책평가제도</a></li>
			<li<?php if(getDepthId($pagePath, 1) == "7"){ ?> class="on"<?php } ?>><a href="information-7.php">품질진단안내</a></li>
		<?php } else if(getDepthId($pagePath, 0) == "participation"){ ?>
			<li<?php if(getDepthId($pagePath, 1) == "1"){ ?> class="on"<?php } ?>><a href="participation-1.php">이벤트</a></li>
			<li<?php if(getDepthId($pagePath, 1) == "2"){ ?> class="on"<?php } ?>><a href="participation-2.php">통계개선의견</a></li>
			<li<?php if(getDepthId($pagePath, 1) == "3"){ ?> class="on"<?php } ?>><a href="participation-3.php">통계개발요청</a></li>
		<?php } ?>

	</ul>

</div>
<div id="content">
	<div class="page-title">
		<h3 class="title">
			<strong>
				<?php if(getDepthId($pagePath, 0) == "service"){ ?>
					<?php if(getDepthId($pagePath, 1) == "1"){ ?>
					해양수산통계소개
					<?php } else if(getDepthId($pagePath, 1) == "2"){ ?>
						공지사항
					<?php } else if(getDepthId($pagePath, 1) == "3"){ ?>
						보도자료
					<?php } else if(getDepthId($pagePath, 1) == "4"){ ?>
						자주묻는질문
					<?php } else if(getDepthId($pagePath, 1) == "5"){ ?>
						이용안내
					<?php } else if(getDepthId($pagePath, 1) == "6"){ ?>
						관련사이트
					<?php } else if(getDepthId($pagePath, 1) == "7"){ ?>
						관련통계사이트
					<?php } ?>

				<?php } else if(getDepthId($pagePath, 0) == "stats"){ ?>
					<?php if(getDepthId($pagePath, 1) == "1"){ ?>
						분야별통계
					<?php } else if(getDepthId($pagePath, 1) == "2"){ ?>
							부서별통계
					<?php } else if(getDepthId($pagePath, 1) == "3"){ ?>
							주요통계
					<?php } else if(getDepthId($pagePath, 1) == "4"){ ?>
							인기통계
					<?php } else if(getDepthId($pagePath, 1) == "5"){ ?>
							통계공표일정
					<?php } else if(getDepthId($pagePath, 1) == "6"){ ?>
							통계담당부서안내
					<?php } else if(getDepthId($pagePath, 1) == "7"){ ?>
							최근수록자료
					<?php } ?>

				<?php } else if(getDepthId($pagePath, 0) == "indicator"){ ?>
					<?php if(getDepthId($pagePath, 1) == "1"){ ?>
						분야별지표
					<?php } else if(getDepthId($pagePath, 1) == "2"){ ?>
							주요지표
					<?php } else if(getDepthId($pagePath, 1) == "3"){ ?>
							인기지표
					<?php } else if(getDepthId($pagePath, 1) == "4"){ ?>
							최근수록지표
					<?php } ?>

				<?php } else if(getDepthId($pagePath, 0) == "information"){ ?>
					<?php if(getDepthId($pagePath, 1) == "1"){ ?>
						간행물
					<?php } else if(getDepthId($pagePath, 1) == "2"){ ?>
							통계메타DB
					<?php } else if(getDepthId($pagePath, 1) == "3"){ ?>
							통계용어
					<?php } else if(getDepthId($pagePath, 1) == "4"){ ?>
							통계법령자료
					<?php } else if(getDepthId($pagePath, 1) == "5"){ ?>
							통계서식정보
					<?php } else if(getDepthId($pagePath, 1) == "6"){ ?>
							통계기반정책평가제도
					<?php } else if(getDepthId($pagePath, 1) == "7"){ ?>
							품질진단안내
					<?php } ?>

				<?php } else if(getDepthId($pagePath, 0) == "participation"){ ?>
					<?php if(getDepthId($pagePath, 1) == "1"){ ?>
						이벤트
					<?php } else if(getDepthId($pagePath, 1) == "2"){ ?>
							통계개선의견
					<?php } else if(getDepthId($pagePath, 1) == "3"){ ?>
							통계개발요청
					<?php } ?>
				<?php } ?>
			</strong>
			<span class="small"></span>
		</h3>
	</div>
	<div class="breadcrumb">
		<a href="/" class="home">홈</a>
			<?php if(getDepthId($pagePath, 0) == "service"){ ?>
				<a href="service-1.php">서비스안내</a>
			<?php } else if(getDepthId($pagePath, 0) == "stats"){ ?>
				<a href="stats-1.php">통계조회</a>
			<?php } else if(getDepthId($pagePath, 0) == "indicator"){ ?>
				<a href="indicator-1.php">지표조회</a>
			<?php } else if(getDepthId($pagePath, 0) == "information"){ ?>
				<a href="information-1.php">통계정보</a>
			<?php } else if(getDepthId($pagePath, 0) == "participation"){ ?>
				<a href="participation-1.php">참여</a>
			<?php } ?>
		<a href="#" onclick="return false;">
			<?php if(getDepthId($pagePath, 0) == "service"){ ?>
				<?php if(getDepthId($pagePath, 1) == "1"){ ?>
					해양수산통계소개
				<?php } else if(getDepthId($pagePath, 1) == "2"){ ?>
					공지사항
				<?php } else if(getDepthId($pagePath, 1) == "3"){ ?>
					보도자료
				<?php } else if(getDepthId($pagePath, 1) == "4"){ ?>
					자주묻는질문
				<?php } else if(getDepthId($pagePath, 1) == "5"){ ?>
					이용안내
				<?php } else if(getDepthId($pagePath, 1) == "6"){ ?>
					관련사이트
				<?php } else if(getDepthId($pagePath, 1) == "7"){ ?>
					관련통계사이트
				<?php } ?>

			<?php } else if(getDepthId($pagePath, 0) == "stats"){ ?>
				<?php if(getDepthId($pagePath, 1) == "1"){ ?>
					분야별통계
				<?php } else if(getDepthId($pagePath, 1) == "2"){ ?>
					부서별통계
				<?php } else if(getDepthId($pagePath, 1) == "3"){ ?>
					주요통계
				<?php } else if(getDepthId($pagePath, 1) == "4"){ ?>
					인기통계
				<?php } else if(getDepthId($pagePath, 1) == "5"){ ?>
					통계공표일정
				<?php } else if(getDepthId($pagePath, 1) == "6"){ ?>
					통계담당부서안내
				<?php } else if(getDepthId($pagePath, 1) == "7"){ ?>
					최근수록자료
				<?php } ?>

			<?php } else if(getDepthId($pagePath, 0) == "indicator"){ ?>
				<?php if(getDepthId($pagePath, 1) == "1"){ ?>
					분야별지표
				<?php } else if(getDepthId($pagePath, 1) == "2"){ ?>
					주요지표
				<?php } else if(getDepthId($pagePath, 1) == "3"){ ?>
					인기지표
				<?php } else if(getDepthId($pagePath, 1) == "4"){ ?>
					최근수록지표
				<?php } ?>

			<?php } else if(getDepthId($pagePath, 0) == "information"){ ?>
				<?php if(getDepthId($pagePath, 1) == "1"){ ?>
					간행물
				<?php } else if(getDepthId($pagePath, 1) == "2"){ ?>
					통계메타DB
				<?php } else if(getDepthId($pagePath, 1) == "3"){ ?>
					통계용어
				<?php } else if(getDepthId($pagePath, 1) == "4"){ ?>
					통계법령자료
				<?php } else if(getDepthId($pagePath, 1) == "5"){ ?>
					통계서식정보
				<?php } else if(getDepthId($pagePath, 1) == "6"){ ?>
					통계기반정책평가제도
				<?php } else if(getDepthId($pagePath, 1) == "7"){ ?>
					품질진단안내
				<?php } ?>

			<?php } else if(getDepthId($pagePath, 0) == "participation"){ ?>
				<?php if(getDepthId($pagePath, 1) == "1"){ ?>
					이벤트
				<?php } else if(getDepthId($pagePath, 1) == "2"){ ?>
					통계개선의견
				<?php } else if(getDepthId($pagePath, 1) == "3"){ ?>
					통계개발요청
				<?php } ?>
			<?php } ?>
		</a>
	</div>


	<!-- //Header Sub.html -->
