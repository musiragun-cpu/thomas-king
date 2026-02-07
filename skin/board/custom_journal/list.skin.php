<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH . '/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="' . $board_skin_url . '/style.css">', 0);
add_stylesheet('<link rel="stylesheet" href="' . $board_skin_url . '/custom.css?ver=' . time() . '">', 0);
?>


<!-- 
*************************

희연의 소식

*************************
 -->

<!-- 게시판 목록 시작 { -->
<div id="bo_gall" style="width:<?php echo $width; ?>">
    <div class="sub_banner">
        <div class="txt_con">
            <div class="txt01"><?php echo $board['bo_subject'] ?></div>
        </div>
    </div>
    <!-- <?php if ($is_category) { ?>
  <nav id="bo_cate">
    <h2><?php echo $board['bo_subject'] ?> 카테고리</h2>
    <ul id="bo_cate_ul">
      <?php echo $category_option ?>
    </ul>
  </nav> 
  <?php } ?> -->
    <!-- 게시판 검색 시작 { -->
    <div class="bo_sch_wrap">
        <fieldset class="bo_sch">
            <form name="fsearch" method="get">
                <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
                <input type="hidden" name="sca" value="<?php echo $sca ?>">
                <input type="hidden" name="sop" value="and">
                <label for="sfl" class="sound_only">검색대상</label>
                <select name="sfl" id="sfl">
                    <?php echo get_board_sfl_select_options($sfl); ?>
                </select>
                <label for="stx" class="sound_only">검색어<strong class="sound_only"> 필수</strong></label>
                <div class="sch_bar">
                    <input type="text" name="stx" value="<?php echo stripslashes($stx) ?>" required id="stx" class="sch_input" size="25" maxlength="20" placeholder="검색어를 입력해주세요">
                    <button type="submit" value="검색" class="sch_btn"><i class="fa fa-search" aria-hidden="true"></i><span class="sound_only">검색</span></button>
                </div>

            </form>
        </fieldset>
        <div class="bo_sch_bg"></div>
    </div>
    <script>
        // 게시판 검색
        $(".btn_bo_sch").on("click", function() {
            $(".bo_sch_wrap").toggle();
        })
        $('.bo_sch_bg, .bo_sch_cls').click(function() {
            $('.bo_sch_wrap').hide();
        });
    </script>
    <!-- } 게시판 검색 끝 -->

    <form name="fboardlist" id="fboardlist" action="<?php echo G5_BBS_URL; ?>/board_list_update.php" onsubmit="return fboardlist_submit(this);" method="post">
        <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
        <input type="hidden" name="sfl" value="<?php echo $sfl ?>">
        <input type="hidden" name="stx" value="<?php echo $stx ?>">
        <input type="hidden" name="spt" value="<?php echo $spt ?>">
        <input type="hidden" name="sst" value="<?php echo $sst ?>">
        <input type="hidden" name="sod" value="<?php echo $sod ?>">
        <input type="hidden" name="page" value="<?php echo $page ?>">
        <input type="hidden" name="sw" value="">
        <!-- 게시판 페이지 정보 및 버튼 시작 { -->


        <div id="bo_btn_top">
            <!-- <div id="bo_list_total">
                <span>Total / <?php echo number_format($total_count) ?></span>

            </div>
            -->
            <ul class="btn_bo_user">
                <?php if ($admin_href) { ?><li><a href="<?php echo $admin_href ?>" class="btn_admin btn" title="관리자"><i class="fa fa-cog fa-spin fa-fw"></i><span class="sound_only">관리자</span></a></li><?php } ?>
                <?php if ($rss_href) { ?><li><a href="<?php echo $rss_href ?>" class="btn_b01 btn" title="RSS"><i class="fa fa-rss" aria-hidden="true"></i><span class="sound_only">RSS</span></a></li><?php } ?>
                <!-- <li>
            <button type="button" class="btn_bo_sch btn_b01 btn" title="게시판 검색"><i
                class="fa fa-search" aria-hidden="true"></i><span class="sound_only">게시판
                검색</span></button>
          </li> -->
                <?php if ($write_href) { ?><li><a href="<?php echo $write_href ?>" class="btn_b01 btn" title="글쓰기"><i class="fa fa-pencil" aria-hidden="true"></i><span class="sound_only">글쓰기</span></a></li><?php } ?>
                <?php if ($is_admin == 'super' || $is_auth) {  ?>
                    <li>
                        <button type="button" class="btn_more_opt is_list_btn btn_b01 btn" title="게시판 리스트 옵션"><i class="fa fa-ellipsis-v" aria-hidden="true"></i><span class="sound_only">게시판 리스트
                                옵션</span></button>
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

        <?php if ($is_checkbox) { ?>
            <div id="gall_allchk" class="all_chk chk_box">
                <input type="checkbox" id="chkall" onclick="if (this.checked) all_checked(true); else all_checked(false);" class="selec_chk">
                <label for="chkall">
                    <span></span>
                    <b class="sound_only">현재 페이지 게시물 </b> 전체선택
                </label>
            </div>
        <?php } ?>

        <ul id="gall_ul" class="gall_row">
            <?php for ($i = 0; $i < count($list); $i++) {

                $classes = array();

                $classes[] = 'gall_li';
                $classes[] = 'col-gn-' . $bo_gallery_cols;

                if ($i && ($i % $bo_gallery_cols == 0)) {
                    $classes[] = 'box_clear';
                }

                if ($wr_id && $wr_id == $list[$i]['wr_id']) {
                    $classes[] = 'gall_now';
                }

                $line_height_style = ($board['bo_gallery_height'] > 0) ? 'line-height:' . $board['bo_gallery_height'] . 'px' : '';
            ?>
                <li class="<?php echo implode(' ', $classes); ?>">
                    <div class="gall_box">
                        <div class="gall_chk chk_box">
                            <?php if ($is_checkbox) { ?>
                                <input type="checkbox" name="chk_wr_id[]" value="<?php echo $list[$i]['wr_id'] ?>" id="chk_wr_id_<?php echo $i ?>" class="selec_chk">
                                <label for="chk_wr_id_<?php echo $i ?>">
                                    <span></span>
                                    <b class="sound_only"><?php echo $list[$i]['subject'] ?></b>
                                </label>

                            <?php } ?>
                            <span class="sound_only">
                                <?php
                                if ($wr_id == $list[$i]['wr_id'])
                                    echo "<span class=\"bo_current\">열람중</span>";
                                else
                                    echo $list[$i]['num'];
                                ?>
                            </span>
                        </div>
                        <div class="gall_con">
                            <div class="gall_img">
                                <a href="<?php echo $list[$i]['href'] ?>">
                                    <?php
                                    $thumb = get_list_thumbnail($board['bo_table'], $list[$i]['wr_id'], $board['bo_gallery_width'], $board['bo_gallery_height'], false, true);

                                    if ($thumb['src']) {
                                        $img_content = '<img src="' . $thumb['src'] . '" alt="' . $thumb['alt'] . '" >';
                                    } else {
                                        $img_content = '<span class="no_image">no image</span>';
                                    }

                                    echo run_replace('thumb_image_tag', $img_content, $thumb);
                                    ?>
                                </a>
                            </div>
                            <div class="gall_text_href">
                                <?php if ($is_category && $list[$i]['ca_name']) { ?>
                                    <!-- <a href="<?php echo $list[$i]['ca_name_href'] ?>"
                                        class="bo_cate_link"><?php echo $list[$i]['ca_name'] ?></a> -->
                                <?php } ?>
                                <a href="<?php echo $list[$i]['href'] ?>" class="bo_tit">

                                    <?php // echo $list[$i]['icon_reply']; 
                                    ?>
                                    <!-- 갤러리 댓글기능 사용시 주석을 제거하세요. -->

                                    <?php echo $list[$i]['subject'] ?>
                                    <?php
                                    //if ($list[$i]['file']['count']) { echo '<'.$list[$i]['file']['count'].'>'; }
                                    //if ($list[$i]['icon_new']) echo "<span class=\"new_icon\">N<span class=\"sound_only\">새글</span></span>";
                                    //if (isset($list[$i]['icon_hot'])) echo rtrim($list[$i]['icon_hot']);
                                    if (isset($list[$i]['icon_file'])) {
                                        echo '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M21 15L21 19C21 19.5304 20.7893 20.0391 20.4142 20.4142C20.0391 20.7893 19.5304 21 19 21L5 21C4.46957 21 3.96086 20.7893 3.58579 20.4142C3.21071 20.0391 3 19.5304 3 19L3 15" stroke="#204FAF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M7 10L12 15L17 10" stroke="#204FAF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M12 15L12 3" stroke="#204FAF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>';
                                    }
                                    //if (isset($list[$i]['icon_link'])) echo rtrim($list[$i]['icon_link']);
                                    //if (isset($list[$i]['icon_secret'])) echo rtrim($list[$i]['icon_secret']);
                                    ?>
                                    <?php if ($list[$i]['comment_cnt']) { ?><span class="sound_only">댓글</span><span class="cnt_cmt"><?php echo $list[$i]['wr_comment']; ?></span><span class="sound_only">개</span><?php } ?>
                                </a>
                                <!-- <span
                  class="bo_cnt"><?php echo utf8_strcut(strip_tags($list[$i]['wr_content']), 68, '..'); ?></span> -->
                            </div>

                            <!--<div class="gall_info">
                                <span class="sound_only">작성자 </span><?php //echo $list[$i]['name'] 
                                                                    ?>
                                <span class="gall_date"><span class="sound_only">작성일 </span><i class="fa fa-clock-o"
                                aria-hidden="true"></i><?php echo $list[$i]['datetime'] ?></span> <span class="mx-4"><svg width="2" height="18" viewBox="0 0 2 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 0V18" stroke="#E1E1E1" />
                                    </svg>
                                </span>
                                <span class="gall_view"><span class="sound_only">조회 </span><i class="fa fa-eye" aria-hidden="true"></i>
                                    <span><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M1 12C1 12 5 4 12 4C19 4 23 12 23 12C23 12 19 20 12 20C5 20 1 12 1 12Z" stroke="#898989" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15Z" stroke="#898989" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                    <?php echo $list[$i]['wr_hit'] ?></span>
                            </div>-->
                            <div class="gall_option">
                                <?php if ($is_good) { ?><span class="sound_only">추천</span><strong><i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
                                        <?php echo $list[$i]['wr_good'] ?></strong><?php } ?>
                                <?php if ($is_nogood) { ?><span class="sound_only">비추천</span><strong><i class="fa fa-thumbs-o-down" aria-hidden="true"></i>
                                        <?php echo $list[$i]['wr_nogood'] ?></strong><?php } ?>
                            </div>
                        </div>
                    </div>
                </li>
            <?php } ?>
            <?php if (count($list) == 0) {
                echo "<li class=\"empty_list\">게시물이 없습니다.</li>";
            } ?>
        </ul>


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
                if (!confirm(
                        "선택한 게시물을 정말 삭제하시겠습니까?\n\n한번 삭제한 자료는 복구할 수 없습니다\n\n답변글이 있는 게시글을 선택하신 경우\n답변글도 선택하셔야 게시글이 삭제됩니다."
                    ))
                    return false;

                f.removeAttribute("target");
                f.action = g5_bbs_url + "/board_list_update.php";
            }

            return true;
        }

        // 선택한 게시물 복사 및 이동
        function select_copy(sw) {
            var f = document.fboardlist;

            if (sw == 'copy')
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

<style>
    @media all and (max-width: 768px) {

        /* .gall_row{
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
  } */
        .bo_sch {
            display: flex;
            justify-content: center;
        }

        .bo_sch select,
        .bo_sch .sch_input,
        .bo_sch .sch_btn {
            font-size: 16px;
            height: 40px;
        }

        .bo_sch .sch_input::placeholder {
            font-size: 14px;
        }

        .bo_sch select {
            width: 100px;
        }

        .bo_sch .sch_input {
            width: 240px;
            padding: 0 8px;
        }

        .bo_sch .sch_btn {
            width: 80px;
        }

        .pg_start,
        .pg_end {
            width: 32px;
            height: 32px;
            border: solid 1px #e3e3e3;
            border-radius: 100%;
        }

        .pg_page {
            font-size: 14px;
        }

        .pg_current {
            width: 32px;
            height: 32px;
            font-size: 14px;
        }

    }

    @media all and (max-width: 540px) {
        .bo_sch {
            margin: 0 auto;
        }

        .bo_sch select,
        .bo_sch .sch_input,
        .bo_sch .sch_btn {
            font-size: 14px;
        }

        .bo_sch .sch_input::placeholder {
            font-size: 13px;
        }

        .bo_sch select {
            width: 100px;
        }

        .bo_sch .sch_input {
            width: 160px;
            padding: 0 4px;
        }

        .bo_sch .sch_btn {
            width: 60px;
        }
    }
</style>