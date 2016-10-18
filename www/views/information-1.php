<?php $pagePath = isset($_pagePath) ? $_pagePath : __FILE__; ?>
<?php $bodyClass = "layout-page"; ?>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . "/lib.php"; ?>
<?php require "part/app-header.php"; ?>
<?php require "part/header.php"; ?>
<?php require "part/header-sub.php"; ?>
	<div class="table_inquiry_area">
		<div class="comt">
			총게시물 <span class="comt_opt">20</span>건, <span class="comt_opt">1/2</span>페이지
		</div>
		<div class="table_inquiry">
			<form id="searchForm" method="post" action="/statPortal/bbs/publication/list.do">
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
			<table width="680" border="0" cellspacing="0" cellpadding="0" summary="공지사항 목록 입니다." class="bd1_t1">
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

				<tr>
					<td>20</td>
					<td class="subject" style="text-align: left;"><a href="/statPortal/bbs/publication/view.do?ntt_id=500&amp;pageIndex=&amp;searchType=&amp;searchQuery=" class="fnView">2015년도 해양수산 통계연보 </a></td>
					<td>관리자</td>
					<td>  2016-01-25</td>
					<td>684</td>
				</tr>

				<tr>
					<td>19</td>
					<td class="subject" style="text-align: left;"><a href="/statPortal/bbs/publication/view.do?ntt_id=204&amp;pageIndex=&amp;searchType=&amp;searchQuery=" class="fnView">2014년도 해양수산 통계연보 </a></td>
					<td>관리자</td>
					<td>  2014-12-19</td>
					<td>1587</td>
				</tr>

				<tr>
					<td>18</td>
					<td class="subject" style="text-align: left;"><a href="/statPortal/bbs/publication/view.do?ntt_id=62&amp;pageIndex=&amp;searchType=&amp;searchQuery=" class="fnView">2013년도 해양수산통계연보 </a></td>
					<td>최은영</td>
					<td>  2014-01-28</td>
					<td>1439</td>
				</tr>

				<tr>
					<td>17</td>
					<td class="subject" style="text-align: left;"><a href="/statPortal/bbs/publication/view.do?ntt_id=61&amp;pageIndex=&amp;searchType=&amp;searchQuery=" class="fnView">2012년도 수산분야 통계연보 </a></td>
					<td>최은영</td>
					<td>  2014-01-28</td>
					<td>848</td>
				</tr>

				<tr>
					<td>16</td>
					<td class="subject" style="text-align: left;"><a href="/statPortal/bbs/publication/view.do?ntt_id=60&amp;pageIndex=&amp;searchType=&amp;searchQuery=" class="fnView">2012년도 해양분야 통계연보 </a></td>
					<td>최은영</td>
					<td>  2014-01-28</td>
					<td>743</td>
				</tr>

				<tr>
					<td>15</td>
					<td class="subject" style="text-align: left;"><a href="/statPortal/bbs/publication/view.do?ntt_id=59&amp;pageIndex=&amp;searchType=&amp;searchQuery=" class="fnView">2011년도 수산분야 통계연보 </a></td>
					<td>최은영</td>
					<td>  2014-01-28</td>
					<td>685</td>
				</tr>

				<tr>
					<td>14</td>
					<td class="subject" style="text-align: left;"><a href="/statPortal/bbs/publication/view.do?ntt_id=58&amp;pageIndex=&amp;searchType=&amp;searchQuery=" class="fnView">2011년도 해양분야 통계연보 </a></td>
					<td>최은영</td>
					<td>  2014-01-28</td>
					<td>491</td>
				</tr>

				<tr>
					<td>13</td>
					<td class="subject" style="text-align: left;"><a href="/statPortal/bbs/publication/view.do?ntt_id=57&amp;pageIndex=&amp;searchType=&amp;searchQuery=" class="fnView">2010년도 수산분야 통계연보 </a></td>
					<td>최은영</td>
					<td>  2014-01-28</td>
					<td>452</td>
				</tr>

				<tr>
					<td>12</td>
					<td class="subject" style="text-align: left;"><a href="/statPortal/bbs/publication/view.do?ntt_id=56&amp;pageIndex=&amp;searchType=&amp;searchQuery=" class="fnView">2010년도 해양분야 통계연보 </a></td>
					<td>최은영</td>
					<td>  2014-01-28</td>
					<td>454</td>
				</tr>

				<tr>
					<td>11</td>
					<td class="subject" style="text-align: left;"><a href="/statPortal/bbs/publication/view.do?ntt_id=55&amp;pageIndex=&amp;searchType=&amp;searchQuery=" class="fnView">2009년도 수산분야 통계연보 </a></td>
					<td>최은영</td>
					<td>  2014-01-28</td>
					<td>440</td>
				</tr>

				</tbody>
			</table>
		</div>
		<!--// bd1 -->
		<!--// 테이블 끝 -->
		<!-- 페이지번호 -->
		<div class="pagination_area">
			<div class="pagination">
				<a class="page on" title="현재 페이지" href="#">1</a><a class="page" href="#" onclick="fnList(2);return false;">2</a>

			</div>
			<!--// pagination -->
		</div>
		<!--// pagination_area -->
	</div>

<?php require "part/footer-sub.php"; ?>
<?php require "part/footer.php"; ?>
<?php require "part/app-footer.php"; ?>