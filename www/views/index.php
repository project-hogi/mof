<?php $pagePath = isset($_pagePath) ? $_pagePath : __FILE__; ?>
<?php $bodyClass = "layout-index"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/lib.php"; ?>
<?php require "part/app-header.php"; ?>
<?php require "part/header.php"; ?>
	<div class="page-index">
		<div class="container">
			<div class="visual">
				<h2 class="sr-only">비주얼</h2>
				<div class="main-box type-2 rolling-banner-2">
					<h3 class="sr-only">롤링배너 1</h3>
					<ul>
						<li><a href="#"><img src="<?php echo $config["resourcesDir"]; ?>/images/part/main/rolling-banner-2-1.jpg" alt=""><span class="sr-only"></span></a></li>
						<li><a href="#"><img src="<?php echo $config["resourcesDir"]; ?>/images/part/main/rolling-banner-2-1.jpg" alt=""><span class="sr-only"></span></a></li>
						<li><a href="#"><img src="<?php echo $config["resourcesDir"]; ?>/images/part/main/rolling-banner-2-1.jpg" alt=""><span class="sr-only"></span></a></li>
					</ul>
					<div class="pagination">
						<a href="#" class="on"></a>
						<a href="#"></a>
						<a href="#"></a>
					</div>
				</div>
				<div class="main-box type-1 rolling-banner-1">
					<h3 class="sr-only">메인 비주얼</h3>
					<ul>
						<li style="background-image: url('<?php echo $config["resourcesDir"]; ?>/images/part/main/rolling-banner-1-1.jpg');">
							<img src="<?php echo $config["resourcesDir"]; ?>/images/part/main/rolling-banner-1-1-text.png" alt="알기 쉬운 해양수산 통계!">
							<span class="sr-only">이용자들이 해양수산 통계 정보를 쉽게 이해 할 수 있도록 차트와 그래프를 통한 시각화된 통계 정보를 제공합니다. 보다 이해하기 쉬운 통계 정보를 꾸준히 발굴하여 제공 할 수 있도록 하겠습니다.</span>
							<a href="#" class="rolling-btn btn-1-1"><span class="sr-only">해양수산 통계 대시보드 바로가기</span></a>
						</li>
						<li style="background-image: url('<?php echo $config["resourcesDir"]; ?>/images/part/main/rolling-banner-1-2.jpg')">
							<a href="#">
								<img src="<?php echo $config["resourcesDir"]; ?>/images/part/main/rolling-banner-1-2-text.png" alt="통계포털 이렇게 이용하세요!">
								<span class="sr-only">해양수산 통계 포털을 이용하기 위한 이용 안내 가이드를 제공합니다. 통계를 조회 하고 활용하는 방법, 대시보드를 활용하는 방법 등 통계 포털의 주요 서비스에 대해 알기 쉽게 안내해 드립니다.</span>
								<a href="#" class="rolling-btn btn-1-2"><span class="sr-only">통계 이용안내 바로가기</span></a>
							</a>
						</li>
					</ul>
					<div class="pagination">
						<a href="#" class="on"></a>
						<a href="#"></a>
					</div>
				</div>
				<div class="main-box type-3 rolling-banner-3">
					<h3 class="sr-only">롤링배너 2</h3>
					<ul>
						<li><a href="#"><img src="<?php echo $config["resourcesDir"]; ?>/images/part/main/rolling-banner-3-1.png" alt=""><span class="sr-only"></span></a></li>
						<li><a href="#"><img src="<?php echo $config["resourcesDir"]; ?>/images/part/main/rolling-banner-3-2.png" alt=""><span class="sr-only"></span></a></li>
					</ul>
					<div class="pagination">
						<a href="#" class="on"></a>
						<a href="#"></a>
					</div>
				</div>
				<div class="main-box type-3">
					<h3 class="main-box-title"><span class="sr-only"><strong>자주찾은</strong>검색어</span></h3>
					<div class="textcloud jqcloud">

					</div>
				</div>
			</div>
			<div class="main-content">
				<h3 class="sr-only">메인 콘텐츠</h3>
				<div class="con-1">
					<h4 class="sr-only">통계정보</h4>
					<div class="tab-menu">
						<div class="tab-control">
							<a href=".tab-content-1"><span class="notice-sp eq-1 on"><span class="sr-only">주요통계</span></span></a>
							<a href=".tab-content-2"><span class="notice-sp eq-2"><span class="sr-only">인기통계</span></span></a>
							<a href=".tab-content-3"><span class="notice-sp eq-3"><span class="sr-only">최근통계</span></span></a>
						</div>
						<div class="tab-content-1 on">
							<ul>
								<li><a href="#">등록선박통계<span class="icon-sp new"></span><span class="department">해사안전정책과</span></a></li>
								<li><a href="#">등록어선통계<span class="department">어선정책팀</span></a></li>
								<li><a href="#">수산물 가공업통계<span class="department">수출가공진흥과</span></a></li>
								<li><a href="#">천해양식어업통계<span class="department">국립수산물품질관리원</span></a></li>
								<li><a href="#">항만시설 및 능력현황<span class="department">해양생태과</span></a></li>
							</ul>
						</div>
						<div class="tab-content-2">
							<ul>
								<li><a href="#">등록어선통계<span class="department">어선정책팀</span></a></li>
								<li><a href="#">수산물 가공업통계<span class="department">수출가공진흥과</span></a></li>
								<li><a href="#">등록선박통계<span class="icon-sp new"></span><span class="department">해사안전정책과</span></a></li>
								<li><a href="#">천해양식어업통계<span class="department">국립수산물품질관리원</span></a></li>
								<li><a href="#">항만시설 및 능력현황<span class="department">해양생태과</span></a></li>
							</ul>
						</div>
						<div class="tab-content-3">
							<ul>
								<li><a href="#">등록어선통계<span class="department">어선정책팀</span></a></li>
								<li><a href="#">수산물 가공업통계<span class="department">수출가공진흥과</span></a></li>
								<li><a href="#">천해양식어업통계<span class="department">국립수산물품질관리원</span></a></li>
								<li><a href="#">항만시설 및 능력현황<span class="department">해양생태과</span></a></li>
								<li><a href="#">등록선박통계<span class="icon-sp new"></span><span class="department">해사안전정책과</span></a></li>
							</ul>
						</div>
						<a href="#" class="btn-notice-more"><span class="sr-only">더보기</span></a>
					</div>
					


				</div>
				<div class="con-2 main-quick">
					<h4 class="sr-only">메인 퀵메뉴</h4>
					<ul>
						<li class="eq-1"><a href="#"><span>분야별통계</span></a></li>
						<li class="eq-2"><a href="#"><span>통계연보</span></a></li>
						<li class="eq-3"><a href="#"><span>통계용어</span></a></li>
						<li class="eq-4"><a href="#"><span>통계메타</span></a></li>
						<li class="eq-5"><a href="#"><span>통계담당 부서</span></a></li>
						<li class="eq-6"><a href="#"><span>통계공표일정</span></a></li>
					</ul>
				</div>
				<div class="con-3 rolling-banner-4">
					<h4 class="sr-only">메인 롤링배너</h4>
					<ul>
						<li><a href="#"><img src="<?php echo $config["resourcesDir"]; ?>/images/part/main/rolling-banner-4-1.jpg" alt=""><span class="sr-only"></span></a></li>
						<li><a href="#"><img src="<?php echo $config["resourcesDir"]; ?>/images/part/main/rolling-banner-4-1.jpg" alt=""><span class="sr-only"></span></a></li>
					</ul>
					<div class="pagination">
						<a href="#" class="on"></a>
						<a href="#"></a>
					</div>
				</div>
				<div class="con-4 main-stock">
					<h4 class="sr-only">실적정보</h4>
					<h5><span class="sr-only">주요지표</span></h5>
					<div class="stock-content">
						<ul>
							<li>
								<a href="#">
									선박입출항 적수
									<span class="point">32,392</span>
									<span class="down">1.06</span>
									<span class="unit">(척/2016년)</span>
								</a>
							</li>
							<li>
								<a href="#">
									컨 수송실적
									<span class="point">22,550,275TEU</span>
									<span class="up">0.89</span
								</a>
							</li>
							<li>
								<a href="#">
									원양어업 업체 수
									<span class="point">69</span>
									<span class="down">3.56</span>
									<span class="unit">(개/2016년)</span>
								</a>
							</li>
							<li>
								<a href="#">
									선박입출항 적수
									<span class="point">32,392</span>
									<span class="down">1.06</span>
									<span class="unit">(척/2016년)</span>
								</a>
							</li>
							<li>
								<a href="#">
									컨 수송실적
									<span class="point">22,550,275TEU</span>
									<span class="up">0.89</span
								</a>
							</li>
							<li>
								<a href="#">
									원양어업 업체 수
									<span class="point">69</span>
									<span class="down">3.56</span>
									<span class="unit">(개/2016년)</span>
								</a>
							</li>
						</ul>
					</div>
					<div class="stock-control-box">
						<a href="#" class="stock-sp stock-prev"><span class="sr-only">이전</span></a>
						<a href="#" class="stock-sp stock-pause"><span class="sr-only">stop/start</span></a>
						<a href="#" class="stock-sp stock-next"><span class="sr-only">다음</span></a>
					</div>

				</div>

			</div>

		</div>
	</div>
	<div class="family-index">
		<div class="container">
			<h5 class="sr-only">협력업체 롤링</h5>
			<div class="family-index-content">
				<ul>
					<li><a href="#"><img src="<?php echo $config["resourcesDir"]; ?>/images/part/main/family-index-1.jpg" alt=""><span class="sr-only"></span></a></li>
					<li><a href="#"><img src="<?php echo $config["resourcesDir"]; ?>/images/part/main/family-index-2.jpg" alt=""><span class="sr-only"></span></a></li>
					<li><a href="#"><img src="<?php echo $config["resourcesDir"]; ?>/images/part/main/family-index-3.jpg" alt=""><span class="sr-only"></span></a></li>
					<li><a href="#"><img src="<?php echo $config["resourcesDir"]; ?>/images/part/main/family-index-4.jpg" alt=""><span class="sr-only"></span></a></li>
					<li><a href="#"><img src="<?php echo $config["resourcesDir"]; ?>/images/part/main/family-index-5.jpg" alt=""><span class="sr-only"></span></a></li>
					<li><a href="#"><img src="<?php echo $config["resourcesDir"]; ?>/images/part/main/family-index-6.jpg" alt=""><span class="sr-only"></span></a></li>
					<li><a href="#"><img src="<?php echo $config["resourcesDir"]; ?>/images/part/main/family-index-7.jpg" alt=""><span class="sr-only"></span></a></li>
					<li><a href="#"><img src="<?php echo $config["resourcesDir"]; ?>/images/part/main/family-index-1.jpg" alt=""><span class="sr-only"></span></a></li>
					<li><a href="#"><img src="<?php echo $config["resourcesDir"]; ?>/images/part/main/family-index-2.jpg" alt=""><span class="sr-only"></span></a></li>
					<li><a href="#"><img src="<?php echo $config["resourcesDir"]; ?>/images/part/main/family-index-3.jpg" alt=""><span class="sr-only"></span></a></li>
					<li><a href="#"><img src="<?php echo $config["resourcesDir"]; ?>/images/part/main/family-index-4.jpg" alt=""><span class="sr-only"></span></a></li>
					<li><a href="#"><img src="<?php echo $config["resourcesDir"]; ?>/images/part/main/family-index-5.jpg" alt=""><span class="sr-only"></span></a></li>
					<li><a href="#"><img src="<?php echo $config["resourcesDir"]; ?>/images/part/main/family-index-6.jpg" alt=""><span class="sr-only"></span></a></li>
					<li><a href="#"><img src="<?php echo $config["resourcesDir"]; ?>/images/part/main/family-index-7.jpg" alt=""><span class="sr-only"></span></a></li>
				</ul>
			</div>
			<div class="family-index-control">
				<a href="#" class="family-index-sp btn-family-prev left"><span class="sr-only">이전</span></a>
				<a href="#" class="family-index-sp btn-family-pause right-2"><span class="sr-only">스탑</span></a>
				<!-- <a href="#" class="family-index-sp btn-family-play right-2"><span class="sr-only">플레이</span></a> -->
				<a href="#" class="family-index-sp btn-family-next right"><span class="sr-only">다음</span></a>
			</div>
		</div>

	</div>


<?php require "part/footer.php"; ?>
<?php require "part/app-footer.php"; ?>