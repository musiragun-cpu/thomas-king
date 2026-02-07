<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// 선택옵션으로 인해 셀합치기가 가변적으로 변함
$colspan = 100;

if ($is_checkbox) $colspan++;
if ($is_good) $colspan++;
if ($is_nogood) $colspan++;

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="' . $board_skin_url . '/style.css">', 0);
add_stylesheet('<link rel="stylesheet" href="../../../css/page/sub_6.css">', 0);
?>

<!-- 게시판 목록 시작 { -->
<div id="bo_list" style="width:<?php echo $width; ?>">
    <div class="mb-5 sub_banner type01">
        <div class="txt_con">
            <ul class="white">
                <li>
                    <img src="https://unidgyeongsan.mycafe24.com/img/ico/ico_white_home.png" alt="">
                </li>
                <li>
                    전문센터
                </li>
                <li>
                    뇌신경센터
                </li>
            </ul>
            <p class="txt01">비급여수가안내</p>
        </div>
    </div>
    <div class="page_tab">
        <span onclick="location.href='https://unidgyeongsan.mycafe24.com/bbs/board.php?bo_table=price01'" class="active">행위</span>
        <span onclick="location.href='https://unidgyeongsan.mycafe24.com/bbs/board.php?bo_table=price02'" class="">치료재료</span>
        <span onclick="location.href='https://unidgyeongsan.mycafe24.com/bbs/board.php?bo_table=price03'" class="">약제</span>
        <span onclick="location.href='https://unidgyeongsan.mycafe24.com/bbs/board.php?bo_table=price04'" class="">제증명수수료</span>
    </div>

    <!-- 게시판 검색 시작 { -->
    <div class="bo_sch_wrap">
        <fieldset class="bo_sch">
            <form name="fsearch" method="get">
                <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
                <input type="hidden" name="sca" value="<?php echo $sca ?>">
                <input type="hidden" name="sop" value="and">
                <label for="sfl" class="sound_only">검색대상</label>
                <select name="sfl" id="sfl">
                    <option value="" <?php echo $sfl == '' ? 'selected' : ''; ?>>선택</option>
                    <option value="wr_1" <?php echo $sfl == 'wr_1' ? 'selected' : ''; ?>>분류</option>
                    <option value="wr_2" <?php echo $sfl == 'wr_2' ? 'selected' : ''; ?>>명칭</option>
                    <option value="wr_3" <?php echo $sfl == 'wr_3' ? 'selected' : ''; ?>>코드</option>
                    <option value="wr_4" <?php echo $sfl == 'wr_4' ? 'selected' : ''; ?>>구분</option>
                    <option value="wr_5" <?php echo $sfl == 'wr_5' ? 'selected' : ''; ?>>비용</option>
                    <option value="wr_6" <?php echo $sfl == 'wr_6' ? 'selected' : ''; ?>>최저비용</option>
                    <option value="wr_7" <?php echo $sfl == 'wr_7' ? 'selected' : ''; ?>>최고비용</option>
                    <option value="wr_8" <?php echo $sfl == 'wr_8' ? 'selected' : ''; ?>>치료재료대포함여부</option>
                    <option value="wr_9" <?php echo $sfl == 'wr_9' ? 'selected' : ''; ?>>약제비포함여부</option>
                    <option value="wr_10" <?php echo $sfl == 'wr_10' ? 'selected' : ''; ?>>특이사항</option>
                    <option value="wr_subject" <?php echo $sfl == 'wr_subject' ? 'selected' : ''; ?>>최종변경일</option>
                    <?php // echo get_board_sfl_select_options($sfl); ?>
                </select>
                <label for="stx" class="sound_only">검색어<strong class="sound_only"> 필수</strong></label>
                <div class="sch_bar">
                    <input type="text" name="stx" value="<?php echo stripslashes($stx) ?>" required id="stx" class="sch_input" size="25" maxlength="20" placeholder=" 검색어를 입력해주세요">
                    <button type="submit" value="검색" class="sch_btn"><i class="fa fa-search" aria-hidden="true"></i><span class="sound_only">검색</span></button>
                </div>
                <button type="button" class="bo_sch_cls" title="닫기"><i class="fa fa-times" aria-hidden="true"></i><span class="sound_only">닫기</span></button>
            </form>
        </fieldset>
        <div class="bo_sch_bg"></div>
    </div>
    <script>
        jQuery(function($) {
            // 게시판 검색
            $(".btn_bo_sch").on("click", function() {
                $(".bo_sch_wrap").toggle();
            })
            $('.bo_sch_bg, .bo_sch_cls').click(function() {
                $('.bo_sch_wrap').hide();
            });
        });
    </script>
    <!-- } 게시판 검색 끝 -->


    <!-- 게시판 카테고리 시작 { -->
    <?php if ($is_category) { ?>
        <nav id="bo_cate">
            <h2><?php echo $board['bo_subject'] ?> 카테고리</h2>
            <ul id="bo_cate_ul">
                <?php echo $category_option ?>
            </ul>
        </nav>
    <?php } ?>
    <!-- } 게시판 카테고리 끝 -->

    <form name="fboardlist" id="fboardlist" action="<?php echo G5_BBS_URL; ?>/board_list_update.php" onsubmit="return fboardlist_submit(this);" method="post">

        <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
        <input type="hidden" name="sfl" value="<?php echo $sfl ?>">
        <input type="hidden" name="stx" value="<?php echo $stx ?>">
        <input type="hidden" name="spt" value="<?php echo $spt ?>">
        <input type="hidden" name="sca" value="<?php echo $sca ?>">
        <input type="hidden" name="sst" value="<?php echo $sst ?>">
        <input type="hidden" name="sod" value="<?php echo $sod ?>">
        <input type="hidden" name="page" value="<?php echo $page ?>">
        <input type="hidden" name="sw" value="">

        <!-- 게시판 페이지 정보 및 버튼 시작 { -->
        <div id="bo_btn_top">
            <!-- <div id="bo_list_total">
                <span>Total <?php echo number_format($total_count) ?>건</span>
                <?php echo $page ?> 페이지
            </div> -->

            <ul class="btn_bo_user">
                <?php if ($admin_href) { ?><li><a href="<?php echo $admin_href ?>" class="btn_admin btn" title="관리자"><i class="fa fa-cog fa-spin fa-fw"></i><span class="sound_only">관리자</span></a></li><?php } ?>
                <?php if ($rss_href) { ?><li><a href="<?php echo $rss_href ?>" class="btn_b01 btn" title="RSS"><i class="fa fa-rss" aria-hidden="true"></i><span class="sound_only">RSS</span></a></li><?php } ?>
                <li>
                    <button type="button" class="btn_bo_sch btn_b01 btn" title="게시판 검색"><i class="fa fa-search" aria-hidden="true"></i><span class="sound_only">게시판 검색</span></button>
                </li>
                <?php if ($write_href) { ?><li><a href="<?php echo $write_href ?>" class="btn_b01 btn" title="글쓰기"><i class="fa fa-pencil" aria-hidden="true"></i><span class="sound_only">글쓰기</span></a></li><?php } ?>
                <?php if ($is_admin == 'super' || $is_auth) {  ?>
                    <li>
                        <button type="button" class="btn_more_opt is_list_btn btn_b01 btn" title="게시판 리스트 옵션"><i class="fa fa-ellipsis-v" aria-hidden="true"></i><span class="sound_only">게시판 리스트 옵션</span></button>
                        <?php if ($is_checkbox) { ?>
                            <ul class="more_opt is_list_btn">
                                <li><button type="submit" name="btn_submit" value="선택삭제" onclick="document.pressed=this.value"><i class="fa fa-trash-o" aria-hidden="true"></i> 선택삭제</button></li>
                                <li><button type="submit" name="btn_submit" value="선택복사" onclick="document.pressed=this.value"><i class="fa fa-files-o" aria-hidden="true"></i> 선택복사</button></li>
                                <li><button type="submit" name="btn_submit" value="선택이동" onclick="document.pressed=this.value"><i class="fa fa-arrows" aria-hidden="true"></i> 선택이동</button></li>
                            </ul>
                        <?php } ?>
                    </li>
                <?php }  ?>
            </ul>
        </div>
        <!-- } 게시판 페이지 정보 및 버튼 끝 -->

        <div class="tbl_head01 tbl_wrap">
            <table align="center">
                <!--<colgroup>
            <col width="15%" />
            <col width="12%" />
            <col width="15%" />
            <col width="8%" />
            <col width="4%" />
            <col width="5%" />
            <col width="5%" />
            <col width="5%" />
            <col width="8%" />
            <col width="8%" />
            <col width="15%" />
            </colgroup>-->
                <caption><?php echo $board['bo_subject'] ?> 목록</caption>
                <thead>
                    <tr>
                        <?php if ($is_checkbox) { ?>
                            <th rowspan=2 scope="col" class="all_chk chk_box" width="3%">
                                <input type="checkbox" id="chkall" onclick="if (this.checked) all_checked(true); else all_checked(false);" class="selec_chk">
                                <label for="chkall">
                                    <span></span>
                                    <b class="sound_only">현재 페이지 게시물 전체선택</b>
                                </label>
                            </th>
                        <?php } ?>
                        <th rowspan=2 scope="col" width="10%">중분류</th>
                        <th rowspan=2 scope="col" width="5%">분류</th>
                        <th colspan=2 scope="col" width="20%">진료비용항목</th>
                        <th colspan=6 scope="col" width="30%">항목별 가격정보(단위:원)</th>
                        <th rowspan=2 scope="col" width="10%">특이사항</th>
                        <th rowspan=2 scope="col" width="10%">최종변경일</th>
                        <!-- <th scope="col"><?php echo subject_sort_link('wr_hit', $qstr2, 1) ?>조회 </a></th>
            <?php if ($is_good) { ?><th scope="col"><?php echo subject_sort_link('wr_good', $qstr2, 1) ?>추천 </a></th><?php } ?>
            <?php if ($is_nogood) { ?><th scope="col"><?php echo subject_sort_link('wr_nogood', $qstr2, 1) ?>비추천 </a></th><?php } ?>
            <th scope="col"><?php echo subject_sort_link('wr_datetime', $qstr2, 1) ?>날짜  </a></th> -->
                    </tr>
                    <tr>
                        <th width="5%">명칭</th>
                        <th width="5%">코드</th>
                        <th width="5%">구분</th>
                        <th width="5%">비용</th>
                        <th width="5%">최저비용</th>
                        <th width="5%">최고비용</th>
                        <th width="5%">치료재료대포함</th>
                        <th width="5%">약제비포함</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    for ($i = 0; $i < count($list); $i++) {
                        if ($i % 2 == 0) $lt_class = "even";
                        else $lt_class = "";
                    ?>
                        <tr class="<?php if ($list[$i]['is_notice']) echo "bo_notice"; ?> <?php echo $lt_class ?>">
                            <?php if ($is_checkbox) { ?>
                                <td class="td_chk chk_box">
                                <a href="<?php echo $list[$i]['href'] ?>" style="    font-size: 12px;    display: block;    border: 1px solid #204faf;    margin-bottom: .5rem;    padding: 0 0.2rem;    white-space: nowrap;    color: #204faf;">글수정</a>
                                    <input type="checkbox" name="chk_wr_id[]" value="<?php echo $list[$i]['wr_id'] ?>" id="chk_wr_id_<?php echo $i ?>" class="selec_chk">
                                    <label for="chk_wr_id_<?php echo $i ?>">
                                        <span></span>
                                        <b class="sound_only"><?php echo $list[$i]['subject'] ?></b>
                                    </label>
                                    
                                </td>
                                <!-- <td class="td_subject" style="padding-left:<?php echo $list[$i]['reply'] ? (strlen($list[$i]['wr_reply']) * 10) : '0'; ?>px">
                <?php
                                if ($is_category && $list[$i]['ca_name']) {
                ?>
                <a href="<?php echo $list[$i]['ca_name_href'] ?>" class="bo_cate_link"><?php echo $list[$i]['ca_name'] ?></a>
                <?php } ?>
                <div class="bo_tit">
                    <a href="<?php echo $list[$i]['href'] ?>">
                        <?php echo $list[$i]['icon_reply'] ?>
                        <?php
                                if (isset($list[$i]['icon_secret'])) echo rtrim($list[$i]['icon_secret']);
                        ?>
                        <?php echo $list[$i]['subject'] ?>
                    </a>
                    <?php
                                if ($list[$i]['icon_new']) echo "<span class=\"new_icon\">N<span class=\"sound_only\">새글</span></span>";
                                // if ($list[$i]['file']['count']) { echo '<'.$list[$i]['file']['count'].'>'; }
                                if (isset($list[$i]['icon_hot'])) echo rtrim($list[$i]['icon_hot']);
                                if (isset($list[$i]['icon_file'])) echo rtrim($list[$i]['icon_file']);
                                if (isset($list[$i]['icon_link'])) echo rtrim($list[$i]['icon_link']);
                    ?>
                    <?php if ($list[$i]['comment_cnt']) { ?><span class="sound_only">댓글</span><span class="cnt_cmt"><?php echo $list[$i]['wr_comment']; ?></span><span class="sound_only">개</span><?php } ?>
                </div>
            </td> -->


                            <?php } ?>
                            <!-- <td class="td_num2">
            <?php
                        if ($list[$i]['is_notice']) // 공지사항
                            echo '<strong class="notice_icon">공지</strong>';
                        else if ($wr_id == $list[$i]['wr_id'])
                            echo "<span class=\"bo_current\">열람중</span>";
                        else
                            echo $list[$i]['num'];
            ?>
            </td> -->

                            <td class="td_subject" style="padding-left:<?php echo $list[$i]['reply'] ? (strlen($list[$i]['wr_reply']) * 10) : '0'; ?>px">
                                <?php
                                if ($is_category && $list[$i]['ca_name']) {
                                ?>
                                    <a href="<?php echo $list[$i]['ca_name_href'] ?>" class="bo_cate_link"><?php echo $list[$i]['ca_name'] ?></a>
                                <?php } ?>
                            </td>
                            <!-- <td class="td_name sv_use"><?php echo $list[$i]['name'] ?></td>
            <td class="td_num"><?php echo $list[$i]['wr_hit'] ?></td>
            <?php if ($is_good) { ?><td class="td_num"><?php echo $list[$i]['wr_good'] ?></td><?php } ?>
            <?php if ($is_nogood) { ?><td class="td_num"><?php echo $list[$i]['wr_nogood'] ?></td><?php } ?>
            <td class="td_datetime"><?php echo $list[$i]['datetime2'] ?></td> -->
                            <td>

                                <?php if ($is_member) { ?>
                                    <a href="<?php echo $list[$i]['href'] ?>">
                                        <?php echo $list[$i]['wr_1'] ?>
                                        <?php echo $list[$i]['icon_reply'] ?>
                                        <?php
                                        if (isset($list[$i]['icon_secret'])) echo rtrim($list[$i]['icon_secret']);
                                        ?>
                                        <!-- <?php echo $list[$i]['subject'] ?> -->
                                    </a>
                                <?php } ?>

                                <?php if (!$is_member) { ?>
                                    <?php echo $list[$i]['wr_1'] ?>
                                <?php } ?>

                            </td>
                            <td><?php echo $list[$i]['wr_2'] ?></td>
                            <td><?php echo $list[$i]['wr_3'] ?></td>
                            <td><?php echo $list[$i]['wr_4'] ?></td>
                            <!-- <td><?php echo $list[$i]['wr_5'] ?></td> -->
                            <td><?php echo number_format(filter_var($list[$i]['wr_5'], FILTER_SANITIZE_NUMBER_INT)) ?></td>
                            <td><?php echo $list[$i]['wr_6'] ?></td>
                            <td><?php echo $list[$i]['wr_7'] ?></td>
                            <td><?php echo $list[$i]['wr_8'] ?></td>
                            <td><?php echo $list[$i]['wr_9'] ?></td>
                            <td><?php echo $list[$i]['wr_10'] ?></td>
                            <td><?php echo $list[$i]['wr_subject'] ?></td>
                        </tr>
                    <?php } ?>
                    <?php if (count($list) == 0) {
                        echo '<tr><td colspan="' . $colspan . '" class="empty_table">게시물이 없습니다.</td></tr>';
                    } ?>
                </tbody>
            </table>
        </div>
        <!-- 페이지 -->
        <?php echo $write_pages; ?>
        <!-- 페이지 -->

        <?php if ($list_href || $is_checkbox || $write_href) { ?>
            <div class="bo_fx">
                <?php if ($list_href || $write_href) { ?>
                    <ul class="btn_bo_user">
                        <?php if ($admin_href) { ?><li><a href="<?php echo $admin_href ?>" class="btn_admin btn" title="관리자"><i class="fa fa-cog fa-spin fa-fw"></i><span class="sound_only">관리자</span></a></li><?php } ?>
                        <?php if ($rss_href) { ?><li><a href="<?php echo $rss_href ?>" class="btn_b01 btn" title="RSS"><i class="fa fa-rss" aria-hidden="true"></i><span class="sound_only">RSS</span></a></li><?php } ?>
                        <?php if ($write_href) { ?><li><a href="<?php echo $write_href ?>" class="btn_b01 btn" title="글쓰기"><i class="fa fa-pencil" aria-hidden="true"></i><span class="sound_only">글쓰기</span></a></li><?php } ?>
                    </ul>
                <?php } ?>
            </div>
        <?php } ?>
    </form>



    <div class="p-4 py-8 mt-12 rounded-md bg-blue-50">
        <p class="text-2xl text-center text-blue-600 font-regular">
            의료법 제45조 및 의료법 시행규칙 <br class="m_on"> 제42조의 2에 의하여 비급여 진료비용을 고지합니다. <br>
            비용은 수가가 변경되는 경우 달라질 수 있습니다.
        </p>
        <p class="mt-4 text-base text-center text-gray-500">
            2024.01.11 기준
        </p>
    </div>
</div>

<?php if ($is_checkbox) { ?>
    <noscript>
        <p>자바스크립트를 사용하지 않는 경우<br>별도의 확인 절차 없이 바로 선택삭제 처리하므로 주의하시기 바랍니다.</p>
    </noscript>
<?php } ?>

<?php if ($is_checkbox) { ?>
    <script>
        function all_checked(sw) {
            var f = document.fboardlist;

            for (var i = 0; i < f.length; i++) {
                if (f.elements[i].name == "chk_wr_id[]")
                    f.elements[i].checked = sw;
            }
        }

        function fboardlist_submit(f) {
            var chk_count = 0;

            for (var i = 0; i < f.length; i++) {
                if (f.elements[i].name == "chk_wr_id[]" && f.elements[i].checked)
                    chk_count++;
            }

            if (!chk_count) {
                alert(document.pressed + "할 게시물을 하나 이상 선택하세요.");
                return false;
            }

            if (document.pressed == "선택복사") {
                select_copy("copy");
                return;
            }

            if (document.pressed == "선택이동") {
                select_copy("move");
                return;
            }

            if (document.pressed == "선택삭제") {
                if (!confirm("선택한 게시물을 정말 삭제하시겠습니까?\n\n한번 삭제한 자료는 복구할 수 없습니다\n\n답변글이 있는 게시글을 선택하신 경우\n답변글도 선택하셔야 게시글이 삭제됩니다."))
                    return false;

                f.removeAttribute("target");
                f.action = g5_bbs_url + "/board_list_update.php";
            }

            return true;
        }

        // 선택한 게시물 복사 및 이동
        function select_copy(sw) {
            var f = document.fboardlist;

            if (sw == "copy")
                str = "복사";
            else
                str = "이동";

            var sub_win = window.open("", "move", "left=50, top=50, width=500, height=550, scrollbars=1");

            f.sw.value = sw;
            f.target = "move";
            f.action = g5_bbs_url + "/move.php";
            f.submit();
        }

        // 게시판 리스트 관리자 옵션
        jQuery(function($) {
            $(".btn_more_opt.is_list_btn").on("click", function(e) {
                e.stopPropagation();
                $(".more_opt.is_list_btn").toggle();
            });
            $(document).on("click", function(e) {
                if (!$(e.target).closest('.is_list_btn').length) {
                    $(".more_opt.is_list_btn").hide();
                }
            });
        });
    </script>
<?php } ?>
<!-- } 게시판 목록 끝 -->