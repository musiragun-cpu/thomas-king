<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="' . $latest_skin_url . '/style.css">', 0);
add_javascript('<script src="' . G5_JS_URL . '/jquery.bxslider.js"></script>', 10);
$list_count = (is_array($list) && $list) ? count($list) : 0;
?>

<div class="swiper noticeLatest">
    <div class="swiper-wrapper">
        <?php for ($i = 0; $i < $list_count; $i++) { ?>
            <div class="swiper-slide bg-white px-12 py-16 rounded-lg shadow-md">
                <a href="<?php echo get_pretty_url($bo_table, $list[$i]['wr_id']); ?>" class="block text-3xl font-bold ">
                    <?php if ($list[$i]['is_notice']) echo "<strong>" . $list[$i]['subject'] . "</strong>";
                    else echo $list[$i]['subject']; ?>
                </a>
               
                <div class="text-xl text-gray-700 mt-14 mb-12 line-clamp-2"> <?php echo $list[$i]['wr_content']; ?> </div>
                <span class="font-semibold block text-left text-xl text-primary mt-3"> <?php echo $list[$i]['datetime']; ?> </span>
            </div>
        <?php } ?>
        <?php if ($list_count == 0) { ?>
            <div class="swiper-slide bg-white p-6 rounded-lg shadow-md text-center text-gray-500">게시물이 없습니다.</div>
        <?php } ?>
    </div>
    <!-- <div class="swiper-pagination"></div> -->

</div>
</div>