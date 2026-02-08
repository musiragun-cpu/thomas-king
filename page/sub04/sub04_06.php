<?php

include_once('../../common.php');
// 페이지 제목 
$g5['title'] = "사회공헌";
include_once(G5_PATH . '/head.php');

?>

<section class="ppbSpWrap py-10">
    <div class="container mx-auto px-6">
        <h2 class="text-3xl font-bold text-center mb-16">사회공헌</h2>

        <div class="w-full mt-10">
            <!-- 이미지 영역 (임시 이미지 사용, 추후 교체 권장) -->
            <div class="h-64 md:h-80 bg-gray-200 rounded-xl flex items-center justify-center mb-12">
                <span class="text-gray-500 text-lg">사회공헌 활동 이미지 영역 (추후 이미지 교체 필요)</span>
            </div>

            <p class="text-center text-xl mt-8 mb-20 leading-relaxed">
                <b>㈜케이비즈업</b>은 기업 시민으로서의 책임을 다하고, 지역사회와 함께 성장하기 위해 노력합니다. <br class="dt_on">
                나눔과 상생의 가치를 실천하며 더 따뜻한 세상을 만들어가는 데 앞장서겠습니다.
            </p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- 활동 1 -->
                <div
                    class="bg-white p-8 rounded-xl shadow-lg text-center hover:-translate-y-2 transition-transform duration-300">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-4">지역사회 나눔</h3>
                    <p class="text-gray-600">소외된 이웃을 위한 기부 및 봉사활동을 통해 지역사회에 온기를 전합니다.</p>
                </div>

                <!-- 활동 2 -->
                <div
                    class="bg-white p-8 rounded-xl shadow-lg text-center hover:-translate-y-2 transition-transform duration-300">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-4">인재 육성 지원</h3>
                    <p class="text-gray-600">장학 사업 및 교육 기부 활동을 통해 미래 세대의 꿈을 응원합니다.</p>
                </div>

                <!-- 활동 3 -->
                <div
                    class="bg-white p-8 rounded-xl shadow-lg text-center hover:-translate-y-2 transition-transform duration-300">
                    <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z">
                            </path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-4">상생 협력</h3>
                    <p class="text-gray-600">협력사와의 공정한 거래 및 기술 지원을 통해 함께 성장하는 생태계를 조성합니다.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include_once(G5_PATH . '/tail.php');
?>