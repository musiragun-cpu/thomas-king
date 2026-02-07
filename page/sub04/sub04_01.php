<?php

include_once('../../common.php');
// 페이지 제목 
$g5['title'] = "새로운 페이지";
include_once(G5_PATH . '/head.php');

?>

<section class="ppbSpWrap py-10">
    <div class="container mx-auto px-6">
        <h2 class="text-4xl font-bold text-center">(주) 한미유압기계는 ESG 경영 실천 의지를 담아 ESG 경영체계를 강화해 나가겠습니다.</h2>

        <!-- 첫 번째 섹션 -->
        <div class="flex flex-col md:flex-row mb-12 mt-16 md:gap-16">
            <div class="md:w-1/2">
                <img src="/img/img04_01_01.png" alt="Passion Image" class="w-full rounded-lg">
            </div>
            <div class="md:w-1/2 flex items-center md:justify-center">
                <div class="p-8">
                    <p class="text-base mt-8">대한민국의 경제성장 그리고 EU공급망실사법 시행에 맞추어 기업의 사회적 책임을 필요로 하는 새로운 경영을 필요로 하는 시대입니다. <br><br>

                        글로벌 ESG경영 요구수준까지 회사 경영 방식을 마련하고자 한미유압기계는 대한민국 동반성장위원회와 HD현대중공업그룹이 함께 주최하는 ESG경영 컨설팅 대상업체로 선정되어 2023년 5월부터 12월까지 컨설팅 및 교육받아 동반성장위원회로부터 글로벌 수준의 ESG 우수 중소기업임을 인증하는 확인서를 획득하였습니다. <br><br>

                        EGS경영을 실질적으로 발전시키기 위해 한미유압기계의 모든 임직원이 앞으로도 더욱더 노력할 것 입니다.</p>
                </div>
            </div>
        </div>

        <div class="flex flex-col md:flex-row justify-center space-y-6 md:space-y-0 md:space-x-6 esgBoxWrap">
            <!-- Environment Section -->
            <div class="flex flex-col items-center bg-white rounded-lg p-6 w-full md:w-1/3">
                <div class="text-3xl font-bold text-orange-500 mb-4 tCircle">E</div>
                <h2 class="text-2xl font-bold mb-2 text-center tcTitle">Environment</h2>
                <p class="text-center mb-4 text-xl">환경과 사람을 <br> 생각하는 GLOBAL <br> 녹색기업 구현</p>
                <div class="w-full">
                    <h3 class="text-orange-500 font-bold mb-2 text-xl tcTitle text-center">실행 계획</h3>
                    <ul class="list-disc text-gray-700">
                        <li>ISO14001 경영시스템 효율적 유지관리</li>
                        <li>환경법규 선도적 준수</li>
                        <li>자원과 에너지 체계적 관리 및 온실가스 감축</li>
                    </ul>
                </div>
            </div>

            <!-- Social Section -->
            <div class="flex flex-col items-center bg-white rounded-lg p-6 w-full md:w-1/3">
                <div class="text-3xl font-bold text-orange-500 mb-4 tCircle">S</div>
                <h2 class="text-2xl font-bold mb-2 text-center tcTitle">Social</h2>
                <p class="text-center mb-4 text-xl">사람을 최우선으로 생각<br>하는 인권경영적 실천</p>
                <div class="w-full">
                    <h3 class="text-orange-500 font-bold mb-2 text-xl tcTitle text-center">실행 계획</h3>
                    <ul class="list-disc  text-gray-700">
                        <li>ISO45001 경영시스템 효율적 유지관리를 통해 안전하고 건강한 근무환경 조성</li>
                        <li>일과 삶의 균형 및 일하기 좋은 직장문화 구축</li>
                        <li>지역사회 공헌에 자발적으로 나서는 기업문화 구축</li>
                    </ul>
                </div>
            </div>

            <!-- Governance Section -->
            <div class="flex flex-col items-center bg-white rounded-lg p-6 w-full md:w-1/3">
                <div class="text-3xl font-bold text-orange-500 mb-4 tCircle">G</div>
                <h2 class="text-2xl font-bold mb-2 text-center tcTitle">Governance</h2>
                <p class="text-center mb-4 text-xl ">윤리, 준법을 바탕으로<br>공정하고 투명한<br>경영 구축</p>
                <div class="w-full">
                    <h3 class="text-orange-500 font-bold mb-2 text-xl tcTitle text-center">실행 계획</h3>
                    <ul class="list-disc text-gray-700">
                        <li>ESG 경영 강화를 통한 지속가능 경영 추진</li>
                        <li>투명한 의사결정과 책임경영을 통한 신뢰받는 경영 실현</li>
                        <li>주주 및 이해관계자의 이익보호 및 주주권리 보호</li>
                    </ul>
                </div>
            </div>
        </div>



</section>
<?php
include_once(G5_PATH . '/tail.php');
?>