<?php

include_once('../../common.php');
// 페이지 제목 
$g5['title'] = "새로운 페이지";
include_once(G5_PATH . '/head.php');

?>

<section class="ppbContainer">
    <div class="inner">
        <div class="sub_banner type01">
            <div class="txt_con">
                <ul class="white">
                    <li>
                        <img src="<?php echo G5_IMG_URL ?>/ico/ico_white_home.png" alt="">
                    </li>
                    <li>
                        전문센터
                    </li>
                    <li>
                        관절척추센터
                    </li>
                </ul>
                <p class="txt01" style="">면회시간 안내</p>
            </div>
        </div>
        <section class="department">
            <div class="inner">

             
                <div class="w-full mt-8">
                    <!-- Flex 컨테이너 -->
                    <div class="flex flex-col items-start justify-between space-y-4 md:flex-row md:space-y-0">
                        <div class="flex flex-row flex-wrap w-full gap-4 boxType01">
                            <div class="flex flex-col w-full p-6 border border-gray-300 rounded-lg md:gap-4 md:flex-row">
                                <h2 class="flex items-center justify-center text-2xl font-semibold text-black md:w-1/6">오전</h2>
                                <ul class="mt-2 text-base text-center text-gray-700 md:mt-2 md:text-left ">
                                    <li class="text-2xl font-bold text-black">09시 ~ 11시</li>
                                    <li>(30분 단위 1회 1팀)</li>
                                </ul>
                            </div>

                            <div class="flex flex-col w-full p-6 border border-gray-300 rounded-lg md:gap-4 md:flex-row">
                                <h2 class="flex items-center justify-center text-2xl font-semibold text-black md:w-1/6">오후</h2>
                                <ul class="mt-2 text-base text-center text-gray-700 md:mt-2 md:text-left ">
                                    <li class="text-2xl font-bold text-black">13시 ~ 19시</li>
                                    <li>(30분 단위 1회 1팀)</li>
                                </ul>
                            </div>
                            <p>
                            코로나19 감염예방 및 확산방지를 위해 1회 1팀 면회를 원칙으로 하며, 사전예약(051-554-8811) 필요
                            </p>
                        </div>
                    </div>
                </div>
                
            </div>
        </section>

    </div>
</section>

<?php
include_once(G5_PATH . '/tail.php');
?>

<script>
    gsap.from(".procedure_cont", {
        scrollTrigger: {
            trigger: ".procedure_cont",
            start: "top center",
            end: "bottom top",
            scrub: true,
            toggleClass: {
                targets: ".procedure_cont",
                className: "active"
            },
            once: true
        },

    });
</script>