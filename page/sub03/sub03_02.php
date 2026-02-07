<?php

include_once('../../common.php');
// 페이지 제목 
$g5['title'] = "인증현황";
include_once(G5_PATH . '/head.php');

?>

<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
<link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />
<style>
    .fancybox__button--close {
        background: #fff;
        border-radius: 50%;
        border: 1px solid #ccc;
        width: 30px;
        height: 30px;
        color: #333;
        font-size: 20px;
        line-height: 28px;
        text-align: center;
        position: absolute;
        right: 15px;
        top: 15px;
        cursor: pointer;
    }
</style>
<section class="ppbSpWrap py-10">
    <div class="container mx-auto px-6">
        <div class="w-full mt-20">
            <div class="subTitle">
                <span class="block text-center">Product</span>
                <h2 class=" text-center">합금강</h2>
            </div>
        </div>
        <div class="page_tab mt-20">
            <span class="active" data-tab="tab01">Chromium Molybdenum Steels <br>
                (크롬 몰리브덴강)
            </span>
            <span data-tab="tab02">Nickel Chromium Molybdenum Steels <br>
                (니켈크롬 몰리브덴강)
            </span>
        </div>


        <div data-tab="tab01" class="tab01 tabItems tabActive">

            <h2 class=" text-center mt-20 text-4xl font-semibold">크롬 몰리브덴강</h2>

            <div class="flex flex-wrap lg:flex-nowrap gap-12 mt-12">
                <img src="../../img/product02.jpg" alt="" class="block lg:w-1/5 w-1/2 mx-auto object-cover">
                <div class="w-full">
                    <!-- SelectBox -->
                    <div class="mb-4 relative max-w-md ">
                        <!-- <label for="materialSelect" class="block text-sm font-medium text-gray-700 mb-2">
                            제품 선택
                        </label> -->
                        <select
                            id="materialSelect"
                            class="block w-full appearance-none px-4 py-5 pr-12 border border-gray-300 text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-blue-400 hover:bg-gray-100 transition duration-200 ease-in-out text-sm">
                            <option value="SCM420">SCM420</option>
                            <option value="SCM421">SCM421</option>
                            <option value="SCM425">SCM425</option>
                            <option value="SCM430">SCM430</option>
                            <option value="SCM432">SCM432</option>
                            <option value="SCM435">SCM435</option>
                            <option value="SCM440">SCM440</option>
                            <option value="SCM445">SCM445</option>
                            <option value="SCM822">SCM822</option>

                        </select>

                        <div class="absolute inset-y-0 right-0 flex items-center px-3 pointer-events-none bg-blue-50 text-black border border-gray-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </div>

                    <!-- 테이블 -->
                    <div class="overflow-x-auto">
                        <table class="w-full text-center border-collapse border border-gray-300">
                            <thead class="">
                                <p class="border bg-blue-50 border-gray-300 p-4 text-center border-b-0 text-sm">화학성분(%)</p>
                                <tr>
                                    <th class="border border-gray-300  p-4 py-8 text-sm w-1/12">C</th>
                                    <th class="border border-gray-300  p-4 py-8 text-sm w-1/12">Si</th>
                                    <th class="border border-gray-300  p-4 py-8 text-sm w-1/12">Mn</th>
                                    <th class="border border-gray-300  p-4 py-8 text-sm w-1/12">P</th>
                                    <th class="border border-gray-300  p-4 py-8 text-sm w-1/12">S</th>
                                    <th class="border border-gray-300  p-4 py-8 text-sm w-1/12">Ni</th>
                                    <th class="border border-gray-300  p-4 py-8 text-sm w-1/12">Cr</th>
                                    <th class="border border-gray-300  p-4 py-8 text-sm w-1/12">Mo</th>
                                </tr>
                            </thead>
                            <tbody id="tableBody">
                                <!-- 선택된 데이터가 여기에 동적으로 추가됩니다 -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <script>
                // 데이터 정의 (5개 샘플)
                const materialData = {
                    SCM420: {
                        C: "0.18 ~ 0.23",
                        Si: "0.15 ~ 0.35",
                        Mn: "0.60 ~ 0.90",
                        P: "0.030 이하",
                        S: "0.030 이하",
                        Ni: "0.25 이하",
                        Cr: "0.90 ~ 1.20",
                        Mo: "0.15 ~ 0.25",
                    },
                    SCM421: {
                        C: "0.17 ~ 0.23",
                        Si: "0.15 ~ 0.35",
                        Mn: "0.70 ~ 1.00",
                        P: "0.030 이하",
                        S: "0.030 이하",
                        Ni: "0.25 이하",
                        Cr: "0.90 ~ 1.20",
                        Mo: "0.15 ~ 0.25",
                    },
                    SCM425: {
                        C: "0.23 ~ 0.28",
                        Si: "0.15 ~ 0.35",
                        Mn: "0.60 ~ 0.90",
                        P: "0.030 이하",
                        S: "0.030 이하",
                        Ni: "0.25 이하",
                        Cr: "0.90 ~ 1.20",
                        Mo: "0.15 ~ 0.30",
                    },
                    SCM430: {
                        C: "0.28 ~ 0.33",
                        Si: "0.15 ~ 0.35",
                        Mn: "0.60 ~ 0.90",
                        P: "0.030 이하",
                        S: "0.030 이하",
                        Ni: "0.25 이하",
                        Cr: "0.90 ~ 1.20",
                        Mo: "0.15 ~ 0.30",
                    },
                    SCM432: {
                        C: "0.27 ~ 0.37",
                        Si: "0.15 ~ 0.35",
                        Mn: "0.30 ~ 0.60",
                        P: "0.030 이하",
                        S: "0.030 이하",
                        Ni: "0.25 이하",
                        Cr: "1.00 ~ 1.50",
                        Mo: "0.15 ~ 0.30",
                    },
                    SCM435: {
                        C: "0.33 ~ 0.38",
                        Si: "0.15 ~ 0.35",
                        Mn: "0.60 ~ 0.90",
                        P: "0.030 이하",
                        S: "0.030 이하",
                        Ni: "0.25 이하",
                        Cr: "0.90 ~ 1.20",
                        Mo: "0.15 ~ 0.30",
                    },
                    SCM440: {
                        C: "0.38 ~ 0.43",
                        Si: "0.15 ~ 0.35",
                        Mn: "0.60 ~ 0.90",
                        P: "0.030 이하",
                        S: "0.030 이하",
                        Ni: "0.25 이하",
                        Cr: "0.90 ~ 1.20",
                        Mo: "0.15 ~ 0.30",
                    },
                    SCM445: {
                        C: "0.43 ~ 0.48",
                        Si: "0.15 ~ 0.35",
                        Mn: "0.60 ~ 0.90",
                        P: "0.030 이하",
                        S: "0.030 이하",
                        Ni: "0.25 이하",
                        Cr: "0.90 ~ 1.20",
                        Mo: "0.15 ~ 0.30",
                    },
                    SCM822: {
                        C: "0.20 ~ 0.25",
                        Si: "0.15 ~ 0.35",
                        Mn: "0.60 ~ 0.90",
                        P: "0.030 이하",
                        S: "0.030 이하",
                        Ni: "0.25 이하",
                        Cr: "0.90 ~ 1.20",
                        Mo: "0.35 ~ 0.40",
                    },
                };

                // SelectBox 이벤트 핸들러
                document.getElementById("materialSelect").addEventListener("change", function() {
                    const selectedMaterial = this.value;
                    const tableBody = document.getElementById("tableBody");

                    // 선택된 데이터 가져오기
                    const material = materialData[selectedMaterial];

                    // 테이블 초기화
                    tableBody.innerHTML = "";

                    if (material) {
                        const row = `
        <tr>
          
          <td class="border border-gray-300 p-4 py-8 bg-white text-sm">${material.C}</td>
          <td class="border border-gray-300 p-4 py-8 bg-white text-sm">${material.Si}</td>
          <td class="border border-gray-300 p-4 py-8 bg-white text-sm">${material.Mn}</td>
          <td class="border border-gray-300 p-4 py-8 bg-white text-sm">${material.P}</td>
          <td class="border border-gray-300 p-4 py-8 bg-white text-sm">${material.S}</td>
          <td class="border border-gray-300 p-4 py-8 bg-white text-sm">${material.Ni}</td>
          <td class="border border-gray-300 p-4 py-8 bg-white text-sm">${material.Cr}</td>
          <td class="border border-gray-300 p-4 py-8 bg-white text-sm">${material.Mo}</td>
        </tr>
      `;
                        tableBody.innerHTML = row;
                    }
                });

                // 초기값 설정
                document.getElementById("materialSelect").dispatchEvent(new Event("change"));
            </script>

        </div>
        <div data-tab="tab02" class="tab02 tabItems ">
            <h2 class=" text-center mt-20 text-4xl font-semibold">니켈크롬 몰리브덴강</h2>
            <div class="flex flex-wrap lg:flex-nowrap gap-12 mt-12">
                <img src="../../img/product01.jpg" alt="" class="block lg:w-1/5 w-1/2 mx-auto object-cover">
                <div class="w-full">
                    <!-- SelectBox -->
                    <div class="mb-4 relative max-w-md ">
                        <!-- <label for="materialSelect" class="block text-sm font-medium text-gray-700 mb-2">
                            제품 선택
                        </label> -->
                        <select
                            id="materialSelect2"
                            class="block w-full appearance-none px-4 py-5 pr-12 border border-gray-300 text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-blue-400 hover:bg-gray-100 transition duration-200 ease-in-out text-sm">
                            <option value="SNC236">SNC236</option>
                            <option value="SNC415">SNC415</option>
                            <option value="SNC631">SNC631</option>
                            <option value="SNC815">SNC815</option>
                            <option value="SNC836">SNC836</option>
                            <option value="SNCM220">SNCM220</option>
                            <option value="SNCM240">SNCM240</option>
                            <option value="SNCM415">SNCM415</option>
                            <option value="SNCM420">SNCM420</option>
                            <option value="SNCM431">SNCM431</option>
                            <option value="SNCM439">SNCM439</option>
                            <option value="SNCM447">SNCM447</option>
                            <option value="SNCM616">SNCM616</option>
                            <option value="SNCM625">SNCM625</option>
                            <option value="SNCM630">SNCM630</option>
                            <option value="SNCM815">SNCM815</option>
                            <option value="SACM645">SACM645</option>


                        </select>

                        <div class="absolute inset-y-0 right-0 flex items-center px-3 pointer-events-none bg-blue-50 text-black border border-gray-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </div>

                    <!-- 테이블 -->
                    <div class="overflow-x-auto">
                        <table class="w-full text-center border-collapse border border-gray-300">
                            <thead class="">
                                <p class="border bg-blue-50 border-gray-300 p-4 text-center border-b-0 text-sm">화학성분(%)</p>
                                <tr>
                                    <th class="border border-gray-300  p-4 py-8 text-sm w-1/12">C</th>
                                    <th class="border border-gray-300  p-4 py-8 text-sm w-1/12">Si</th>
                                    <th class="border border-gray-300  p-4 py-8 text-sm w-1/12">Mn</th>
                                    <th class="border border-gray-300  p-4 py-8 text-sm w-1/12">P</th>
                                    <th class="border border-gray-300  p-4 py-8 text-sm w-1/12">S</th>
                                    <th class="border border-gray-300  p-4 py-8 text-sm w-1/12">Ni</th>
                                    <th class="border border-gray-300  p-4 py-8 text-sm w-1/12">Cr</th>
                                    <th class="border border-gray-300  p-4 py-8 text-sm w-1/12">Mo</th>
                                </tr>
                            </thead>
                            <tbody id="alternativeTableBody2">
                                <!-- 선택된 데이터가 여기에 동적으로 추가됩니다 -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <script>
                // 새로운 데이터 정의
                const alternativeMaterialData2 = {
                    SNC236: {
                        C: "0.32 ~ 0.40",
                        Si: "0.15 ~ 0.35",
                        Mn: "0.50 ~ 0.80",
                        P: "0.030 이하",
                        S: "0.030 이하",
                        Ni: "1.00 ~ 1.50",
                        Cr: "0.50 ~ 0.90",
                        Mo: "-",
                    },
                    SNC415: {
                        C: "0.12 ~ 0.18",
                        Si: "0.15 ~ 0.35",
                        Mn: "0.35 ~ 0.65",
                        P: "0.030 이하",
                        S: "0.030 이하",
                        Ni: "2.00 ~ 2.50",
                        Cr: "0.20 ~ 0.50",
                        Mo: "-",
                    },
                    SNC631: {
                        C: "0.27 ~ 0.35",
                        Si: "0.15 ~ 0.35",
                        Mn: "0.35 ~ 0.65",
                        P: "0.030 이하",
                        S: "0.030 이하",
                        Ni: "2.50 ~ 3.00",
                        Cr: "0.60 ~ 1.00",
                        Mo: "-",
                    },
                    SNC815: {
                        C: "0.12 ~ 0.18",
                        Si: "0.15 ~ 0.35",
                        Mn: "0.35 ~ 0.65",
                        P: "0.030 이하",
                        S: "0.030 이하",
                        Ni: "3.00 ~ 3.50",
                        Cr: "0.60 ~ 1.00",
                        Mo: "-",
                    },
                    SNC836: {
                        C: "0.32 ~ 0.40",
                        Si: "0.15 ~ 0.35",
                        Mn: "0.35 ~ 0.65",
                        P: "0.030 이하",
                        S: "0.030 이하",
                        Ni: "3.00 ~ 3.50",
                        Cr: "0.60 ~ 1.00",
                        Mo: "-",
                    },
                    SNCM220: {
                        C: "0.17 ~ 0.23",
                        Si: "0.15 ~ 0.35",
                        Mn: "0.60 ~ 0.90",
                        P: "0.030 이하",
                        S: "0.030 이하",
                        Ni: "0.40 ~ 0.70",
                        Cr: "0.40 ~ 0.60",
                        Mo: "0.15 ~ 0.25",
                    },
                    SNCM240: {
                        C: "0.38 ~ 0.43",
                        Si: "0.15 ~ 0.35",
                        Mn: "0.70 ~ 1.00",
                        P: "0.030 이하",
                        S: "0.030 이하",
                        Ni: "0.40 ~ 0.70",
                        Cr: "0.40 ~ 0.60",
                        Mo: "0.15 ~ 0.30",
                    },
                    SNCM415: {
                        C: "0.12 ~ 0.18",
                        Si: "0.15 ~ 0.35",
                        Mn: "0.40 ~ 0.70",
                        P: "0.030 이하",
                        S: "0.030 이하",
                        Ni: "1.60 ~ 2.00",
                        Cr: "0.40 ~ 0.60",
                        Mo: "0.15 ~ 0.30",
                    },
                    SNCM420: {
                        C: "0.17 ~ 0.23",
                        Si: "0.15 ~ 0.35",
                        Mn: "0.40 ~ 0.70",
                        P: "0.030 이하",
                        S: "0.030 이하",
                        Ni: "1.60 ~ 2.00",
                        Cr: "0.40 ~ 0.60",
                        Mo: "0.15 ~ 0.30",
                    },
                    SNCM431: {
                        C: "0.27 ~ 0.35",
                        Si: "0.15 ~ 0.35",
                        Mn: "0.60 ~ 0.90",
                        P: "0.030 이하",
                        S: "0.030 이하",
                        Ni: "1.60 ~ 2.00",
                        Cr: "0.60 ~ 1.00",
                        Mo: "0.15 ~ 0.30",
                    },
                    SNCM439: {
                        C: "0.36 ~ 0.43",
                        Si: "0.15 ~ 0.35",
                        Mn: "0.60 ~ 0.90",
                        P: "0.030 이하",
                        S: "0.030 이하",
                        Ni: "1.60 ~ 2.00",
                        Cr: "0.60 ~ 1.00",
                        Mo: "0.15 ~ 0.30",
                    },
                    SNCM447: {
                        C: "0.44 ~ 0.50",
                        Si: "0.15 ~ 0.35",
                        Mn: "0.60 ~ 0.90",
                        P: "0.030 이하",
                        S: "0.030 이하",
                        Ni: "1.60 ~ 2.00",
                        Cr: "0.60 ~ 1.00",
                        Mo: "0.15 ~ 0.30",
                    },
                    SNCM616: {
                        C: "0.13 ~ 0.20",
                        Si: "0.15 ~ 0.35",
                        Mn: "0.80 ~ 1.20",
                        P: "0.030 이하",
                        S: "0.030 이하",
                        Ni: "2.80 ~ 3.20",
                        Cr: "1.40 ~ 1.80",
                        Mo: "0.40 ~ 0.60",
                    },
                    SNCM625: {
                        C: "0.20 ~ 0.30",
                        Si: "0.15 ~ 0.35",
                        Mn: "0.35 ~ 0.60",
                        P: "0.030 이하",
                        S: "0.030 이하",
                        Ni: "3.00 ~ 3.50",
                        Cr: "1.00 ~ 1.50",
                        Mo: "0.15 ~ 0.30",
                    },
                    SNCM630: {
                        C: "0.25 ~ 0.35",
                        Si: "0.15 ~ 0.35",
                        Mn: "0.35 ~ 0.60",
                        P: "0.030 이하",
                        S: "0.030 이하",
                        Ni: "2.50 ~ 3.50",
                        Cr: "2.50 ~ 3.50",
                        Mo: "0.50 ~ 0.70",
                    },
                    SNCM815: {
                        C: "0.12 ~ 0.18",
                        Si: "0.15 ~ 0.35",
                        Mn: "0.30 ~ 0.60",
                        P: "0.030 이하",
                        S: "0.030 이하",
                        Ni: "4.00 ~ 4.50",
                        Cr: "0.70 ~ 1.00",
                        Mo: "0.15 ~ 0.30",
                    },
                    SACM645: {
                        C: "0.40 ~ 0.50",
                        Si: "0.15 ~ 0.50",
                        Mn: "0.60 이하",
                        P: "0.030 이하",
                        S: "0.030 이하",
                        Ni: "0.25 이하",
                        Cr: "1.30 ~ 1.70",
                        Mo: "0.15 ~ 0.30",
                    },
                };

                // 초기 선택 설정
                document.addEventListener("DOMContentLoaded", function() {
                    // 기본 선택된 값 설정 (첫 번째 항목)
                    const selectElement = document.getElementById("materialSelect2");
                    selectElement.value = selectElement.options[0].value; // 첫 번째 항목 선택
                    selectElement.dispatchEvent(new Event("change")); // 변경 이벤트 트리거
                });
                // 새로운 SelectBox 이벤트 핸들러
                document.getElementById("materialSelect2").addEventListener("change", function() {
                    const selectedAlternativeMaterial2 = this.value;
                    const alternativeTableBody2 = document.getElementById("alternativeTableBody2");

                    // 선택된 데이터 가져오기
                    const material = alternativeMaterialData2[selectedAlternativeMaterial2];

                    // 테이블 초기화
                    alternativeTableBody2.innerHTML = "";

                    if (material) {
                        const row = `
                <tr>
                    <td class=\"border border-gray-300 p-4 py-8 bg-white text-sm\">${material.C}</td>
                    <td class=\"border border-gray-300 p-4 py-8 bg-white text-sm\">${material.Si}</td>
                    <td class=\"border border-gray-300 p-4 py-8 bg-white text-sm\">${material.Mn}</td>
                    <td class=\"border border-gray-300 p-4 py-8 bg-white text-sm\">${material.P}</td>
                    <td class=\"border border-gray-300 p-4 py-8 bg-white text-sm\">${material.S}</td>
                    <td class=\"border border-gray-300 p-4 py-8 bg-white text-sm\">${material.Ni}</td>
                    <td class=\"border border-gray-300 p-4 py-8 bg-white text-sm\">${material.Cr}</td>
                    <td class=\"border border-gray-300 p-4 py-8 bg-white text-sm\">${material.Mo}</td>
                </tr>
            `;
                        alternativeTableBody2.innerHTML = row;
                    }
                });

                // 초기값 설정
                document.getElementById("alternativeMaterialSelect2").dispatchEvent(new Event("change"));
            </script>


        </div>
    </div>

</section>
<script>
    // URL에서 'tab' 파라미터 값 추출
    const urlParams = new URLSearchParams(window.location.search);
    const activeTab = urlParams.get('tab'); // e.g., "tab02"

    // activeTab 값이 존재할 경우 처리
    if (activeTab) {
        // 모든 span에서 active 클래스 제거
        document.querySelectorAll('.page_tab span').forEach((span) => {
            span.classList.remove('active');
        });

        // 모든 tabItems에서 tabActive 클래스 제거
        document.querySelectorAll('.tabItems').forEach((item) => {
            item.classList.remove('tabActive');
        });

        // activeTab 값에 해당하는 span 찾아서 active 클래스 추가
        const selectedTab = document.querySelector(`.page_tab span[data-tab="${activeTab}"]`);
        if (selectedTab) {
            selectedTab.classList.add('active');
        }

        // activeTab 값에 따라 고정된 클래스 이름을 사용해 tabActive 추가
        const selectedTabItem = document.querySelector(`.${activeTab}`); // e.g., "tab02" -> ".tab02"
        if (selectedTabItem) {
            selectedTabItem.classList.add('tabActive');
        }
    }
</script>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        Fancybox.bind("[data-fancybox='gallery']", {
            animated: false,
            showClass: 'fancybox-fade-in',
            hideClass: 'fancybox-fade-out',
            transitionEffect: false,
            closeEffect: false,
            openEffect: false,
            zoom: false, // 확대/축소 효과 비활성화

            // 닫기 버튼 추가
            closeButton: "top", // "top", "inside", "outside" 중 선택 가능
        });
    });



    function dateDayFormat(date) {
        let dateFormat2 = date.getFullYear() +
            '.' + ((date.getMonth() + 1) < 9 ? "0" + (date.getMonth() + 1) : (date.getMonth() + 1)) +
            '.' + ((date.getDate()) < 9 ? "0" + (date.getDate()) : (date.getDate()));
        return dateFormat2;
    }

    // 7월 26일 추가사항 더보기 버튼 작동
    function certificateMoreButtonClicked(button) {
        button.style.display = 'none';
        const elements = document.querySelectorAll('div.col-lg-4.py-3.dt_on');
        elements.forEach(element => {
            element.classList.remove('dt_on');
        });
    }

    function brandMoreButtonClicked(button) {
        button.style.display = 'none';
        const elements = document.querySelectorAll('div.brand.dt_on');
        elements.forEach(element => {
            element.classList.remove('dt_on');
        });
    }

    function benderMoreButtonClicked(button) {
        button.style.display = 'none';
        const elements = document.querySelectorAll('div.bender.dt_on');
        elements.forEach(element => {
            element.classList.remove('dt_on');
        });
    }
</script>
<?php
include_once(G5_PATH . '/tail.php');
?>