<?php

include_once('../../common.php');
// 페이지 제목 
$g5['title'] = "새로운 페이지";
include_once(G5_PATH . '/head.php');

?>

<section class="ppbContainer">
    <div class="inner">
        <!-- <div class="tabWrap">
            <div class="tabActive">입원안내</div>
            <div>퇴원안내</div>
        </div> -->
        <div class="reser_con">
        <div class="page_tab">
                <span onclick="location.href='/page/sub02/sub02_04.php'">입원안내</span>
                <span class="active"  onclick="location.href='/page/sub02/sub02_04-1.php'">퇴원안내</span>
            </div>


            
            <section class="department2  tab02  tabActive">
                <div class="inner">


                    <div class="w-full mt-20">
                        <!-- Flex 컨테이너 -->
                        <div class="flex flex-col md:flex-row items-start justify-between space-y-4 md:space-y-0">
                            <!-- 제목 -->
                            <div class="text-4xl font-bold w-1/4 mb-12">퇴원절차</div>

                            <div class="procedure_cont row w-3/4">
                                <div class="box">
                                    <div class="top">
                                        <p class="num">1</p>
                                        <div class="line"></div>
                                    </div>
                                    <div class="txt_box">
                                        <p class="tit">병동간호사실에 연락</p>
                                    </div>
                                </div>
                                <div class="box">
                                    <div class="top">
                                        <p class="num">2</p>
                                        <div class="line"></div>
                                    </div>
                                    <div class="txt_box">
                                        <p class="tit">담당주치의 퇴원결정</p>
                                    </div>
                                </div>
                                <div class="box">
                                    <div class="top">
                                        <p class="num">3</p>
                                        <div class="line"></div>
                                    </div>
                                    <div class="txt_box">
                                        <p class="tit">퇴원관련사항안내</p>
                                    </div>
                                </div>
                                <div class="box">
                                    <div class="top">
                                        <p class="num">4</p>
                                        <div class="line"></div>
                                    </div>
                                    <div class="txt_box">
                                        <p class="tit">심사 및 수납</p>
                                    </div>
                                </div>
                                <div class="box">
                                    <div class="top">
                                        <p class="num">5</p>
                                        <div class="line"></div>
                                    </div>
                                    <div class="txt_box">
                                        <p class="tit">퇴원약품 수령 및 귀가</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full mt-20">
                        <!-- Flex 컨테이너 -->
                        <div class="flex flex-col md:flex-row items-start justify-between space-y-4 md:space-y-0">
                            <!-- 제목 -->
                            <div class="text-4xl font-bold w-1/4">수납안내</div>

                            <!-- 섹션들 -->
                            <div class="flex flex-col w-full md:w-3/4 gap-4">
                                <!-- 초진고객 섹션 -->
                                <div class="flex md:gap-4 flex-col md:flex-row p-6 rounded-lg border border-gray-300">
                                    <h2 class="text-xl font-semibold md:w-1/6">수납장소</h2>
                                    <ul class="mt-2 md:mt-0 text-base text-gray-700 list-disc list-inside">
                                        <li>원무과</li>
                                    </ul>
                                </div>

                                <!-- 재진고객 섹션 -->
                                <div class="flex md:gap-4 flex-col md:flex-row p-6 rounded-lg border border-gray-300">
                                    <h2 class="text-xl font-semibold md:w-1/6">수납시간</h2>
                                    <ul class="mt-2 md:mt-0 text-base text-gray-700 list-disc list-inside">
                                        <li>평일 09:00 ~ 18:00</li>
                                        <li>주말 또는 공휴일 수납은 사전 문의 필요</li>
                                    </ul>
                                </div>

                                <!-- 재진고객 섹션 -->
                                <div class="flex md:gap-4 flex-col md:flex-row p-6 rounded-lg border border-gray-300">
                                    <h2 class="text-xl font-semibold md:w-1/6">수납방법</h2>
                                    <ul class="mt-2 md:mt-0 text-base text-gray-700 list-disc list-inside">
                                        <li>직접 방문 또는 계좌이체</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
        </div>

    </div>
</section>

<?php
include_once(G5_PATH . '/tail.php');
?>

<script>
       gsap.from(".department .procedure_cont", {
        scrollTrigger: {
            trigger: ".department .procedure_cont",
            start: "top 100%",
            end: "bottom top",
            scrub: true,
            toggleClass: {
                targets: ".department .procedure_cont",
                className: "active"
            },
            once: true
        },
    });

    gsap.from(".department2 .procedure_cont", {
        scrollTrigger: {
            trigger: ".department2 .procedure_cont",
            start: "top 100%",
            end: "bottom top",
            scrub: true,
            toggleClass: {
                targets: ".department2 .procedure_cont",
                className: "active"
            },
            once: true
        },
    });
</script>