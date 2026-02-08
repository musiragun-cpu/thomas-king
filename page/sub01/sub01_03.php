<?php

include_once('../../common.php');
// 페이지 제목 
$g5['title'] = "오시는 길";
include_once(G5_PATH . '/head.php');

?>

<section class="ppbSpWrap ppbBg">
    <div class="container">
        <div class="container h-full w-full">
            <div class="subTitle">

                <h2 class="font-extrabold text-zinc-100">오시는 길</h2>
                <span class="block mt-4">(주)케이비즈업 홈페이지에 방문해 주셔서 감사합니다.</span>
            </div>
            <div id="map" style="width:100%;height:24rem;">
                <iframe width="100%" height="100%" frameborder="0" style="border:0"
                    src="https://maps.google.com/maps?q=%EB%B6%80%EC%82%B0%EA%B4%91%EC%97%AD%EC%8B%9C%20%EB%B6%80%EC%82%B0%EC%A7%84%EA%B5%AC%20%EC%84%9C%EB%A9%B4%EB%AC%B8%ED%99%94%EB%A1%9C%2027&t=&z=17&ie=UTF8&iwloc=&output=embed"
                    allowfullscreen>
                </iframe>

                <div
                    class="p-8 py-10 bg-white rounded-2xl shadow-md border border-gray-200 max-w-md z-10 lg:absolute relative top-10 mapModal left-4">
                    <!-- Location -->
                    <h2 class="text-lg font-semibold text-primary mb-1">Location</h2>
                    <!-- 회사 이름 -->
                    <h1 class="text-3xl font-bold text-gray-900 mb-6">(주)케이비즈업</h1>

                    <!-- 주소 -->
                    <div class="mb-4">
                        <h3 class="text-lg font-semibold text-black">주소</h3>
                        <p class="text-gray-700">부산광역시 부산진구 서면문화로 27
                            유원골든타워 1905호</p>
                    </div>

                    <!-- 연락처 -->
                    <div>
                        <h3 class="text-lg font-semibold text-black">연락처</h3>
                        <p class="text-gray-700">TEL. 051-714-2770</p>
                        <p class="text-gray-700">FAX. 070-8230-2779</p>
                    </div>
                </div>

            </div>
        </div>
        <!-- Naver Maps Script Removed -->

    </div>

</section>

<?php
include_once(G5_PATH . '/tail.php');
?>