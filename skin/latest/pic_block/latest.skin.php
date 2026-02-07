<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH . '/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="' . $latest_skin_url . '/style.css">', 0);
$thumb_width = 210;
$thumb_height = 150;
$list_count = (is_array($list) && $list) ? count($list) : 0;
?>
 
<div class="pic_lt">
    <h2 class="lat_title">
        <a data-aos="fade-up" href="<?php echo get_pretty_url($bo_table); ?>"><?php echo $bo_subject ?></a>
        <p data-aos="fade-up" class="font-normal">신세계요양병원 최신소식을 전해드립니다.</p>
    </h2>
    <div class="latestWrap" data-aos="fade-up">
        <ul>
            <?php
            for ($i = 0; $i < $list_count; $i++) {
                $thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], $thumb_width, $thumb_height, false, true);

                if ($thumb['src']) {
                    $img = $thumb['src'];
                } else {
                    $img = G5_IMG_URL . '/no_img.png';
                    $thumb['alt'] = '이미지가 없습니다.';
                }
                $img_content = '<img src="' . $img . '" alt="' . $thumb['alt'] . '" >';
                $wr_href = get_pretty_url($bo_table, $list[$i]['wr_id']);
            ?>
                <li class="gallery_li">
                    <a href="<?php echo $wr_href; ?>" class="lt_img"><?php echo run_replace('thumb_image_tag', $img_content, $thumb); ?></a>


                    <div class="lt_info">
                        <?php
                        if ($list[$i]['icon_secret']) echo "<i class=\"fa fa-lock\" aria-hidden=\"true\"></i><span class=\"sound_only\">비밀글</span> ";

                        echo "<a href=\"" . $wr_href . "\"> ";
                        if ($list[$i]['is_notice'])
                            echo "<strong>" . $list[$i]['subject'] . "</strong>";
                        else
                            echo $list[$i]['subject'];
                        echo "</a>";

                        //if ($list[$i]['icon_new']) echo "<span class=\"new_icon\">N<span class=\"sound_only\">새글</span></span>";
                        //if ($list[$i]['icon_hot']) echo "<span class=\"hot_icon\">H<span class=\"sound_only\">인기글</span></span>";

                        // if ($list[$i]['link']['count']) { echo "[{$list[$i]['link']['count']}]"; }
                        // if ($list[$i]['file']['count']) { echo "<{$list[$i]['file']['count']}>"; }

                        // echo $list[$i]['icon_reply']." ";
                        // if ($list[$i]['icon_file']) echo " <i class=\"fa fa-download\" aria-hidden=\"true\"></i>" ;
                        // if ($list[$i]['icon_link']) echo " <i class=\"fa fa-link\" aria-hidden=\"true\"></i>" ;

                        if ($list[$i]['comment_cnt'])  echo "
                     <span class=\"lt_cmt\">" . $list[$i]['wr_comment'] . "</span>";

                        ?>
                        <!-- <span class="lt_nick"><?php echo $list[$i]['name'] ?></span> -->
                        <span class="lt_date"><?php echo date('Y.m.d', strtotime($list[$i]['datetime'])); ?></span>
                    </div>
                </li>
            <?php }  ?>
            <?php if ($list_count == 0) { //게시물이 없을 때  
            ?>
                <li class="empty_li">게시물이 없습니다.</li>
            <?php }  ?>
        </ul>
    </div>
    <a data-aos="fade-up" href="<?php echo get_pretty_url($bo_table); ?>" class="lt_more"><span class="sound_only"><?php echo $bo_subject ?></span>전체보기<span><svg width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M8.02649 2.50727C8.02649 2.11034 7.70702 1.79102 7.30992 1.79102C6.91282 1.79102 6.59334 2.11034 6.59334 2.50727V7.28227H1.81618C1.41908 7.28227 1.09961 7.60159 1.09961 7.99852C1.09961 8.39544 1.41908 8.71477 1.81618 8.71477H6.59334V13.4898C6.59334 13.8867 6.91282 14.206 7.30992 14.206C7.70702 14.206 8.02649 13.8867 8.02649 13.4898V8.71477H12.8037C13.2008 8.71477 13.5202 8.39544 13.5202 7.99852C13.5202 7.60159 13.2008 7.28227 12.8037 7.28227H8.02649V2.50727Z" fill="#FAFAFA" />
            </svg>
        </span></a>

</div>