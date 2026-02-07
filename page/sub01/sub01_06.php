<?php

include_once('../../common.php');
// 페이지 제목 
$g5['title'] = "새로운 페이지";
include_once(G5_PATH . '/head.php');

?>

<section class="ppbSpWrap py-10">
    <div class="container mx-auto px-6">
        <h2 class="text-4xl font-bold text-center">오늘이 아닌 내일을 더 기대하는 사람</h2>

        <!-- 첫 번째 섹션 -->
        <div class="flex flex-col md:flex-row mb-12 mt-16">
            <div class="md:w-1/2">
                <img src="/img/img01_06_01.png" alt="Passion Image" class="w-full rounded-lg">
            </div>
            <div class="md:w-1/2 flex items-center md:justify-center">
                <div class="p-6">
                    <h3 class="text-primary text-3xl font-bold mb-2">Passion</h3>
                    <p class="text-2xl font-semibold mb-2">열정적으로 도전하는 인재</p>
                    <p class="text-xl mt-4">변화와 도전을 두려워하지 않고<br class="dt_on"> 열정적인 태도로 도전하는 인재</p>
                </div>
            </div>
        </div>

        <!-- 두 번째 섹션 -->
        <div class="flex flex-col md:flex-row mb-12 md:flex-row-reverse">
            <div class="md:w-1/2">
                <img src="/img/img01_06_02.png" alt="Communication Image" class="w-full rounded-lg">
            </div>
            <div class="md:w-1/2 flex items-center md:justify-center">
                <div class="p-6 md:text-right">
                    <h3 class="text-primary text-3xl font-bold mb-2">Communication</h3>
                    <p class="text-2xl font-semibold mb-2">소통하고 협력하는 인재</p>
                    <p class="text-xl mt-4">늘 열린 마음으로 사람을 대하고<br class="dt_on"> 존중하고 협력하는 인재</p>
                </div>
            </div>
        </div>

        <!-- 세 번째 섹션 -->
        <div class="flex flex-col md:flex-row mb-12">
            <div class="md:w-1/2">
                <img src="/img/img01_06_03.png" alt="Professional Image" class="w-full rounded-lg">
            </div>
            <div class="md:w-1/2 flex items-center md:justify-center">
                <div class="p-6">
                    <h3 class="text-primary text-3xl font-bold mb-2">Professional</h3>
                    <p class="text-2xl font-semibold mb-2">전문성을 갖춘 인재</p>
                    <p class="text-xl mt-4">자신의 분야에 최고가 되기 위해<br class="dt_on"> 본인의 역량을 키우는 인재</p>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
include_once(G5_PATH . '/tail.php');
?>