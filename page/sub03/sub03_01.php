<?php

include_once('../../common.php');
// 페이지 제목 
$g5['title'] = "탄소강";
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

        <div class="tab01 tabItems tabActive">
            <div class="w-full mt-20">
                <div class="subTitle">
                    <span class="block text-center">Product</span>
                    <h2 class=" text-center">탄소강</h2>
                </div>
            </div>
            <div class="flex flex-wrap lg:flex-nowrap gap-12 mt-12">
                <img src="../../img/product03.jpg" alt="" class="block lg:w-1/5 w-1/2 mx-auto object-cover">
                <div class="w-full">
                    <!-- SelectBox -->
                    <div class="mb-4 relative max-w-md ">
                        <!-- <label for="materialSelect" class="block text-sm font-medium text-gray-700 mb-2">
                            제품 선택
                        </label> -->
                        <select
                            id="materialSelect"
                            class="block w-full appearance-none px-4 py-5 pr-12 border border-gray-300 text-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:border-blue-400 hover:bg-gray-100 transition duration-200 ease-in-out text-xl">
                            <option value="S10C">S10C</option>
                            <option value="S12C">S12C</option>
                            <option value="S15C">S15C</option>
                            <option value="S17C">S17C</option>
                            <option value="S20C">S20C</option>
                            <option value="S22C">S22C</option>
                            <option value="S25C">S25C</option>
                            <option value="S28C">S28C</option>
                            <option value="S30C">S30C</option>
                            <option value="S33C">S33C</option>
                            <option value="S35C">S35C</option>
                            <option value="S38C">S38C</option>
                            <option value="S40C">S40C</option>
                            <option value="S43C">S43C</option>
                            <option value="S45C">S45C</option>
                            <option value="S48C">S48C</option>
                            <option value="S50C">S50C</option>
                            <option value="S53C">S53C</option>
                            <option value="S55C">S55C</option>
                            <option value="S58C">S58C</option>
                            <option value="S09CK">S09CK</option>
                            <option value="S15CK">S15CK</option>
                            <option value="S20CK">S20CK</option>
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
                                <p class="border bg-blue-50 border-gray-300 p-4 text-center border-b-0 text-xl">화학성분(%)</p>
                                <tr>
                                    <th class="border border-gray-300  p-4 py-8 text-xl w-1/5">C</th>
                                    <th class="border border-gray-300  p-4 py-8 text-xl w-1/5">Si</th>
                                    <th class="border border-gray-300  p-4 py-8 text-xl w-1/5">Mn</th>
                                    <th class="border border-gray-300  p-4 py-8 text-xl w-1/5">P</th>
                                    <th class="border border-gray-300  p-4 py-8 text-xl w-1/5">S</th>
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
                    S10C: {
                        C: "0.08 ~ 0.13",
                        Si: "0.15 ~ 0.35",
                        Mn: "0.30 ~ 0.60",
                        P: "0.030 이하",
                        S: "0.035 이하",
                    },
                    S12C: {
                        C: "0.10 ~ 0.15",
                        Si: "0.15 ~ 0.35",
                        Mn: "0.30 ~ 0.60",
                        P: "0.030 이하",
                        S: "0.035 이하",
                    },
                    S15C: {
                        C: "0.13 ~ 0.18",
                        Si: "0.15 ~ 0.35",
                        Mn: "0.30 ~ 0.60",
                        P: "0.030 이하",
                        S: "0.035 이하",
                    },
                    S17C: {
                        C: "0.15 ~ 0.20",
                        Si: "0.15 ~ 0.35",
                        Mn: "0.30 ~ 0.60",
                        P: "0.030 이하",
                        S: "0.035 이하",
                    },
                    S20C: {
                        C: "0.18 ~ 0.23",
                        Si: "0.15 ~ 0.35",
                        Mn: "0.30 ~ 0.60",
                        P: "0.030 이하",
                        S: "0.035 이하",
                    },
                    S22C: {
                        C: "0.20 ~ 0.25",
                        Si: "0.15 ~ 0.35",
                        Mn: "0.30 ~ 0.60",
                        P: "0.030 이하",
                        S: "0.035 이하",
                    },
                    S25C: {
                        C: "0.22 ~ 0.28",
                        Si: "0.15 ~ 0.35",
                        Mn: "0.30 ~ 0.60",
                        P: "0.030 이하",
                        S: "0.035 이하",
                    },
                    S28C: {
                        C: "0.25 ~ 0.31",
                        Si: "0.15 ~ 0.35",
                        Mn: "0.60 ~ 0.90",
                        P: "0.030 이하",
                        S: "0.035 이하",
                    },
                    S30C: {
                        C: "0.27 ~ 0.33",
                        Si: "0.15 ~ 0.35",
                        Mn: "0.60 ~ 0.90",
                        P: "0.030 이하",
                        S: "0.035 이하",
                    },
                    S33C: {
                        C: "0.30 ~ 0.36",
                        Si: "0.15 ~ 0.35",
                        Mn: "0.60 ~ 0.90",
                        P: "0.030 이하",
                        S: "0.035 이하",
                    },
                    S35C: {
                        C: "0.32 ~ 0.38",
                        Si: "0.15 ~ 0.35",
                        Mn: "0.60 ~ 0.90",
                        P: "0.030 이하",
                        S: "0.035 이하",
                    },
                    S38C: {
                        C: "0.35 ~ 0.41",
                        Si: "0.15 ~ 0.35",
                        Mn: "0.60 ~ 0.90",
                        P: "0.030 이하",
                        S: "0.035 이하",
                    },
                    S40C: {
                        C: "0.37 ~ 0.43",
                        Si: "0.15 ~ 0.35",
                        Mn: "0.60 ~ 0.90",
                        P: "0.030 이하",
                        S: "0.035 이하",
                    },
                    S43C: {
                        C: "0.40 ~ 0.46",
                        Si: "0.15 ~ 0.35",
                        Mn: "0.60 ~ 0.90",
                        P: "0.030 이하",
                        S: "0.035 이하",
                    },
                    S45C: {
                        C: "0.42 ~ 0.48",
                        Si: "0.15 ~ 0.35",
                        Mn: "0.60 ~ 0.90",
                        P: "0.030 이하",
                        S: "0.035 이하",
                    },
                    S48C: {
                        C: "0.45 ~ 0.51",
                        Si: "0.15 ~ 0.35",
                        Mn: "0.60 ~ 0.90",
                        P: "0.030 이하",
                        S: "0.035 이하",
                    },
                    S50C: {
                        C: "0.47 ~ 0.53",
                        Si: "0.15 ~ 0.35",
                        Mn: "0.60 ~ 0.90",
                        P: "0.030 이하",
                        S: "0.035 이하",
                    },
                    S53C: {
                        C: "0.50 ~ 0.56",
                        Si: "0.15 ~ 0.35",
                        Mn: "0.60 ~ 0.90",
                        P: "0.030 이하",
                        S: "0.035 이하",
                    },
                    S55C: {
                        C: "0.52 ~ 0.58",
                        Si: "0.15 ~ 0.35",
                        Mn: "0.60 ~ 0.90",
                        P: "0.030 이하",
                        S: "0.035 이하",
                    },
                    S58C: {
                        C: "0.55 ~ 0.61",
                        Si: "0.15 ~ 0.35",
                        Mn: "0.60 ~ 0.90",
                        P: "0.030 이하",
                        S: "0.035 이하",
                    },
                    S09CK: {
                        C: "0.07 ~ 0.12",
                        Si: "0.05 ~ 0.35",
                        Mn: "0.30 ~ 0.60",
                        P: "0.025 이하",
                        S: "0.025 이하",
                    },
                    S15CK: {
                        C: "0.13 ~ 0.18",
                        Si: "0.15 ~ 0.35",
                        Mn: "0.30 ~ 0.60",
                        P: "0.025 이하",
                        S: "0.025 이하",
                    },
                    S20CK: {
                        C: "0.18 ~ 0.23",
                        Si: "0.15 ~ 0.35",
                        Mn: "0.30 ~ 0.60",
                        P: "0.025 이하",
                        S: "0.025 이하",
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
          
          <td class="border border-gray-300 p-4 py-8 bg-white text-xl">${material.C}</td>
          <td class="border border-gray-300 p-4 py-8 bg-white text-xl">${material.Si}</td>
          <td class="border border-gray-300 p-4 py-8 bg-white text-xl">${material.Mn}</td>
          <td class="border border-gray-300 p-4 py-8 bg-white text-xl">${material.P}</td>
          <td class="border border-gray-300 p-4 py-8 bg-white text-xl">${material.S}</td>
        </tr>
      `;
                        tableBody.innerHTML = row;
                    }
                });

                // 초기값 설정
                document.getElementById("materialSelect").dispatchEvent(new Event("change"));
            </script>

        </div>

    </div>

    </div>
</section>


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