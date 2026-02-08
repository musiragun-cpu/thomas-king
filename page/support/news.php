<?php
include_once('../../common.php');
$g5['title'] = "케이비즈업 뉴스";
include_once(G5_PATH . '/head.php');
?>

<section class="ppbSpWrap py-10 md:py-20 section00">
    <div class="container mx-auto px-6">
        <div class="subTitle mb-12 text-center">
            <h2 class="font-extrabold text-3xl md:text-4xl mb-4">케이비즈업 <b class="text-primary">뉴스</b></h2>
            <p class="text-gray-600 text-lg">언론에 보도된 케이비즈업의 소식을 전해드립니다.</p>
        </div>

        <div class="max-w-4xl mx-auto bg-white p-8 md:p-12 shadow-lg rounded-xl text-center">
            <div class="py-20">
                <svg class="w-16 h-16 text-gray-400 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z">
                    </path>
                </svg>
                <h3 class="text-xl font-bold text-gray-700 mb-2">등록된 뉴스가 없습니다.</h3>
                <p class="text-gray-500">최신 뉴스를 준비 중입니다.</p>
            </div>
        </div>
    </div>
</section>

<?php
include_once(G5_PATH . '/tail.php');
?>