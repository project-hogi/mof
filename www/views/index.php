<?php $pagePath = isset($_pagePath) ? $_pagePath : __FILE__; ?>
<?php $bodyClass = "layout-index"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/lib.php"; ?>
<?php require "part/app-header.php"; ?>
<?php require "part/header.php"; ?>
	<div class="page-index">
	<div class="container">
		<div class="visual">
			<h2 class="sr-only">비주얼</h2>
			<div class="main-box type-main bg-style" style="background-image: url(<?php echo $config["resourcesDir"]; ?>/images/part/main/main-content-bg.jpg);">
				<h3 class="sr-only">
					<strong>해양</strong>수산통계시스템
					<span class="small">MINISTRY OF OCEANS AND FISHERIES</span>
				</h3>
				<div class="main-menu">
					<ul class="menu-list">
						<li>
							<a href="#none" class="menu-1"><span class="sr-only">등록선박통계</span></a>
							<div class="depth2">
								<ul class="depth2-list">
									<li>
										<a href="#none"><span>선령/용도/자방청별 통계(부선) 정보</span></a>
										<ul class="depth3-list">
											<li>
												<a href="#"><span>통계표 조회</span></a>
											</li>
											<li>
												<a href="#"><span>지도통계</span></a>
											</li>
											<li>
												<a href="#"><span>데이터 시각화</span></a>
											</li>
										</ul>
									</li>
									<li>
										<a href="#none"><span>지방청별 선박용도별(부선) 통계 정보</span></a>
										<ul class="depth3-list">
											<li>
												<a href="#"><span>통계표 조회</span></a>
											</li>
										</ul>
									</li>
									<li>
										<a href="#none"><span>톤수별 선령별 통계(부선) 정보</span></a>
										<ul class="depth3-list">
											<li>
												<a href="#"><span>통계표 조회</span></a>
											</li>
										</ul>
									</li>
									<li>
										<a href="#none"><span>톤수별 선박용도별 통계(부선)</span></a>
										<ul class="depth3-list">
											<li>
												<a href="#"><span>통계표 조회</span></a>
											</li>
										</ul>
									</li>
								</ul>
							</div>
						</li>
						<li>
							<a href="#none" class="menu-2"><span class="sr-only">등록어선통계</span></a>
							<!--class="depth2" 가 없을경우 화살표 표시되지 않음-->
						</li>
						<li>
							<a href="#none" class="menu-3"><span class="sr-only">수산물 가공업통계</span></a>
							<div class="depth2 non-content">
								<!-- class="non-content" 가 붙으면 준비중으로 이미지 노출-->
							</div>
						</li>
						<li>
							<a href="#none" class="menu-4"><span class="sr-only">수산물 검역 및 수출검사 통계</span></a>
							<div class="depth2 non-content">
							</div>
						</li>
						<li>
							<a href="#none" class="menu-5"><span class="sr-only">어업법인조사</span></a>
							<div class="depth2 non-content">
							</div>
						</li>
						<li>
							<a href="#none" class="menu-6"><span class="sr-only">연안습지면적현황</span></a>
							<div class="depth2 non-content">
							</div>
						</li>
						<li>
							<a href="#none" class="menu-7"><span class="sr-only">운항선박통계</span></a>
							<div class="depth2 non-content">
							</div>
						</li>
						<li>
							<a href="#none" class="menu-8"><span class="sr-only">원양어업 통계조사</span></a>
							<div class="depth2 non-content">
							</div>
						</li>
						<li>
							<a href="#none" class="menu-9"><span class="sr-only">입항선박톤급별통계</span></a>
							<div class="depth2 non-content">
							</div>
						</li>
						<li>
							<a href="#none" class="menu-10"><span class="sr-only">천해양식어업통계</span></a>
							<div class="depth2 non-content">
							</div>
						</li>
						<li>
							<a href="#none" class="menu-11"><span class="sr-only">한국선원통계</span></a>
							<div class="depth2 non-content">
							</div>
						</li>
						<li>
							<a href="#none" class="menu-12"><span class="sr-only">항만국통제통계</span></a>
							<div class="depth2 non-content">
							</div>
						</li>
						<li>
							<a href="#none" class="menu-13"><span class="sr-only">항만시설 및 능력현황</span></a>
							<div class="depth2 non-content">
							</div>
						</li>
						<li>
							<a href="#none" class="menu-14"><span class="sr-only">해수수질실태보고</span></a>
							<div class="depth2 non-content">
							</div>
						</li>
						<li>
							<a href="#none" class="menu-15"><span class="sr-only">해양사고현황</span></a>
							<div class="depth2 non-content">
							</div>
						</li>
						<li>
							<a href="#none" class="menu-16"><span class="sr-only">화물수송실적</span></a>
							<div class="depth2 non-content">
							</div>
						</li>
					</ul>
				</div>
			</div>
			<div class="main-box type-side">
				<div class="map-type bg-style" style="background-image: url(<?php echo $config["resourcesDir"]; ?>/images/part/main/map-type-bg.jpg);">
					<h3 class="sr-only">지도기반 통계</h3>
					<ul class="list">
						<li>
							<a href="#none" class="menu-1"><span class="sr-only">입항선박 톤급별 통계</span></a>
						</li>
						<li>
							<a href="#none" class="menu-2"><span class="sr-only">수산물가공업통계</span></a>
						</li>
						<li>
							<a href="#none" class="menu-3"><span class="sr-only">해수수질 실태보고 통계</span></a>
						</li>
						<li>
							<a href="#none" class="menu-4"><span class="sr-only">어업생산 동향조사</span></a>
						</li>
					</ul>
				</div>
				<div class="dash-type bg-style" style="background-image: url(<?php echo $config["resourcesDir"]; ?>/images/part/main/dash-type-bg.jpg);">
					<h3 class="sr-only">해양수산 대시보드</h3>
					<a href="#none" class="block-style"><span class="sr-only">해양수산 통계 시각화 서비스</span></a>
				</div>
			</div>
			<div class="main-content">
				<h3 class="sr-only">메인 콘텐츠</h3>
				<div class="con-0">
					<h4 class="sr-only">통계정보</h4>
					<div class="tab-menu">
						<div class="tab-control">
							<a href="#none" class="e-nara"><span class="notice-sp eq-4 on"><span class="sr-only">e-나라지표</span></span></a>
						</div>
						<div class="tab-content-1 on">
							<ul>
								<li><a href="#"><span class="icon-sp new"></span>등록선박통계<span class="department">해사안전정책과</span></a></li>
								<li><a href="#">등록어선통계<span class="department">어선정책팀</span></a></li>
								<li><a href="#">수산물 가공업통계<span class="department">수출가공진흥과</span></a></li>
								<li><a href="#">천해양식어업통계<span class="department">국립수산물품질관리원</span></a></li>
								<li><a href="#">항만시설 및 능력현황<span class="department">해양생태과</span></a></li>
							</ul>
						</div>
						<a href="#" class="btn-notice-more"><span class="sr-only">더보기</span></a>
					</div>
				</div>
				<div class="con-1 ">
					<h4 class="sr-only">통계정보</h4>
					<div class="tab-menu">
						<div class="tab-control">
							<a href="#none" class="normal"><span class="notice-sp eq-5 on"><span class="sr-only">일반지표</span></span></a>
						</div>
						<div class="tab-content-1 on">
							<ul>
								<li><a href="#"><span class="icon-sp new"></span>등록선박통계<span class="department">해사안전정책과</span></a></li>
								<li><a href="#">등록어선통계<span class="department">어선정책팀</span></a></li>
								<li><a href="#">수산물 가공업통계<span class="department">수출가공진흥과</span></a></li>
								<li><a href="#">천해양식어업통계<span class="department">국립수산물품질관리원</span></a></li>
								<li><a href="#">항만시설 및 능력현황<span class="department">해양생태과</span></a></li>
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
</div>
<?php require "part/footer.php"; ?>
<?php require "part/app-footer.php"; ?>