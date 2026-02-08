<?php
include_once('../../common.php');
$g5['title'] = "Q&A";
include_once(G5_PATH . '/head.php');
?>

<section class="ppbSpWrap py-10 md:py-20 section00">
    <div class="container mx-auto px-6">
        <div class="subTitle mb-12 text-center">
            <h2 class="font-extrabold text-3xl md:text-4xl mb-4"><b class="text-primary">Q&A</b></h2>
            <p class="text-gray-600 text-lg">자주 묻는 질문과 답변을 확인하세요.</p>
        </div>

        <div class="max-w-4xl mx-auto bg-white p-8 md:p-12 shadow-lg rounded-xl text-center">
            <div class="py-20">
                <svg class="w-16 h-16 text-gray-400 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M8.228 9c.549-1.165 2.03-2 3.772-2 2.21 0 4 1.343 4 3 0 1.4-1.278 2.575-3.006 2.907-.542.104-.994.54-.994 1.093m0 3h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
                    </path>
                </svg>
                <h3 class="text-xl font-bold text-gray-700 mb-2">등록된 질문이 없습니다.</h3>
                <p class="text-gray-500">궁금한 점이 있으시면 '문의하기' 메뉴를 이용해주세요.</p>
                <a href="./inquiry.php"
                    class="inline-block mt-4 px-6 py-2 bg-primary text-white rounded hover:bg-blue-700 transition">문의하기
                    바로가기</a>
            </div>
        </div>
    </div>
</section>

<?php
include_once(G5_PATH . '/tail.php');
?>