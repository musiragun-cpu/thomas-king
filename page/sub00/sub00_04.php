<?php

include_once('../../common.php');
// 페이지 제목 
$g5['title'] = "새로운 페이지";
include_once(G5_PATH . '/head.php');

?>
 
<section class="reser">
    <div class="inner">
        <article class="">
            <div class="sub_banner">
                <div class="txt_con">
                    <ul>
                        <li>
                            <img src="<?php echo G5_IMG_URL ?>/ico/ico_home.png" alt="">
                        </li>
                        <li>
                            진료안내
                        </li>
                        <li>
                            진료예약 안내
                        </li>
                    </ul>
                    <p class="txt01">이메일 무단수집거부</p>
                </div>
            </div>
            <div class="mt-４ form">
                <div><svg width="151" height="79" viewBox="0 0 151 79" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="124" height="79" fill="url(#paint0_linear_1391_14244)" />
                        <path d="M62 53L3.93522e-06 -1.31963e-06L124 1.14441e-05L62 53Z" fill="#FFE975" />
                        <rect x="111" y="20" width="40" height="40" rx="8" fill="#FF3636" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M131 31C132.105 31 133 31.8954 133 33V41C133 42.1046 132.105 43 131 43C129.895 43 129 42.1046 129 41V33C129 31.8954 129.895 31 131 31Z" fill="white" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M129 47C129 45.8954 129.891 45 130.99 45H131.01C132.109 45 133 45.8954 133 47C133 48.1046 132.109 49 131.01 49H130.99C129.891 49 129 48.1046 129 47Z" fill="white" />
                        <defs>
                            <linearGradient id="paint0_linear_1391_14244" x1="-1.27397" y1="2.37381e-06" x2="131.079" y2="60.8242" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#FFF2C5" />
                                <stop offset="1" stop-color="#FF9900" />
                            </linearGradient>
                        </defs>
                    </svg>
                </div>본 웹사이트에 공개되어 있는 이메일주소의 수집을 거부하며,
                자동으로 이메일주소를 수집하는 프로그램이나 그밖의 기술적 장치를 이용하여 이메일주소를 수집할 경우
                정보통신망이용촉진 및 정보보호등에 관한 법률 제 50조의 2와 제 65조의 2에 따라 1천만원 이하의 벌금에 처해질 수 있습니다.
            </div>
        </article>
    </div>
</section>
<script>
   $(document).ready(function() {
    $('.sub-menuWrap').addClass('tabDefault');
});

</script>
<?php
include_once(G5_PATH . '/tail.php');
?>