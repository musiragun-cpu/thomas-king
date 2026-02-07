<?php 

include_once('../../common.php'); 
// 페이지 제목 
$g5['title'] = "새로운 페이지"; 
include_once(G5_PATH.'/head.php'); 

?>

<section class="benefit">

    <div class="inner">

        <div class="sub_banner">
            <div class="txt_con">
                <ul class="white">
                    <li>
                        <img src="<?php echo G5_IMG_URL?>/ico/ico_white_home.png" alt="">
                    </li>
                    <li>
                        진료안내
                    </li>
                    <li>
                        비급여수가 안내
                    </li>
                </ul>
                <p class="txt01" style="color:#fff">비급여수가 안내</p>
            </div>
        </div>

        <div class="inner">
            <div class="bg_gray">
                <div class="sub_title01">
                    <p class="txt01">
                        의료법 제45조 및 의료법 시행규칙 제42조의 2에 의하여 비급여 진료비용을 고지합니다.
                        <span class="nl">비용은 수가가 변경되는 경우 달라질 수 있습니다.</span>
                        <span class="nl" style="margin-top:20px">기준일 : 2024.01.11</span>
                    </p>
                </div>

                <div class="search_input">
                    <input type="text" class="search" placeholder="검색 (명칭 또는 구분)">
                </div>

                <ul class="cata">
                    <li>
                        <a href="<?php echo G5_URL?>/page/sub01/sub01_06.php"><span class="ct">행위료</span></a>
                    </li>
                    <li>
                        <a href="<?php echo G5_URL?>/page/sub01/sub01_06a.php"><span class="ct">치료재료</span></a>
                    </li>
                    <li class="on">
                        <a href="<?php echo G5_URL?>/page/sub01/sub01_06b.php"><span class="ct">약제비</span></a>
                    </li>
                    <li>
                        <a href="<?php echo G5_URL?>/page/sub01/sub01_06c.php"><span class="ct">제증명수수료</span></a>
                    </li>
                </ul>

                <div class="txt_list">
                    <p class="bar pt_tit">3. 약제비</p>
                    <div class="table_layout type01">
                        <div>
                            <table border="0">
                                <colgroup>
                                    <col width="35%" />
                                    <col width="15%" />
                                    <col width="20%" />
                                    <col width="20%" />
                                    <col width="10%" />
                                </colgroup>
                                <thead>
                                    <tr>
                                        <th colspan="2" scope="col" class="bb rb">항목</th>
                                        <th rowspan="2" scope="col">비용 (단위:원)</th>
                                        <th rowspan="2" scope="col">특이사항</th>
                                        <th rowspan="2" scope="col">최종변경일</th>
                                    </tr>
                                    <tr>
                                        <th scope="col">명칭</th>
                                        <th scope="col" class="rb">코드</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr style="height:15px">
                                        <td style="padding:0;border:none"></td>
                                    </tr>
                                    <tr>
                                        <td>지로티프주(장티푸스)</td>
                                        <td>670500220</td>
                                        <td>30,000</td>
                                        <td>-</td>
                                        <td>2023.08.07</td>
                                    </tr>
                                    <tr>
                                        <td>부스트릭스프리필드시린지 (성인용 흡착디프테리아 파상풍 톡소이드 및 정제백일해 혼합 백신</td>
                                        <td>650001960</td>
                                        <td>40,000</td>
                                        <td>-</td>
                                        <td>2023.08.07</td>
                                    </tr>
                                    <tr>
                                        <td>씨디제박스0.5ml-일본뇌염(생백신)</td>
                                        <td>666700010</td>
                                        <td>35,000</td>
                                        <td>-</td>
                                        <td>2023.08.07</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</section>

<?php 
include_once(G5_PATH.'/tail.php'); 
?>