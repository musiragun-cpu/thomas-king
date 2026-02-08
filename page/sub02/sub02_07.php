<?php

include_once('../../common.php');
// 페이지 제목 
$g5['title'] = "보유설비";
include_once(G5_PATH . '/head.php');

?>

<section class="ppbSpWrap py-10 ">
    <div class="container mx-auto px-6">
        <div class="egBtnWrap">
            <span class="egBtn01">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="24" height="24" rx="12" fill="#0061E8" />
                    <path d="M12 5V19" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M5 12H19" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <img src="../../img/egBtn01.jpg" alt="">
            </span>
            <span class="egBtn02">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="24" height="24" rx="12" fill="#0061E8" />
                    <path d="M12 5V19" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M5 12H19" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <img src="../../img/egBtn02.jpg" alt="">
            </span>
            <span class="egBtn03">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="24" height="24" rx="12" fill="#0061E8" />
                    <path d="M12 5V19" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M5 12H19" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <img src="../../img/egBtn03.jpg" alt="">
            </span>
            <span class="egBtn04">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="24" height="24" rx="12" fill="#0061E8" />
                    <path d="M12 5V19" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M5 12H19" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <img src="../../img/egBtn04.jpg" alt="">
            </span>
            <span class="egBtn05">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <rect width="24" height="24" rx="12" fill="#0061E8" />
                    <path d="M12 5V19" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M5 12H19" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <img src="../../img/egBtn05.jpg" alt="">
            </span>
            <img src="../../img/sub02_01_01.png" alt="" class="mb-16">
        </div>

        <script>
            document.querySelectorAll('.egBtnWrap span').forEach((span) => {
                const img = span.querySelector('img');
                img.style.display = 'none'; // 초기 상태는 img를 숨김

                span.addEventListener('mouseenter', () => {
                    document.querySelectorAll('.egBtnWrap span img').forEach((otherImg) => {
                        otherImg.style.display = 'none'; // 모든 이미지를 숨김
                    });

                    img.style.display = 'block'; // 마우스가 진입한 span의 img만 보이게 함
                });

                span.addEventListener('mouseleave', () => {
                    img.style.display = 'none'; // 마우스가 떠나면 img를 다시 숨김
                });
            });
        </script>
        <div class="page_tab">
            <span class="active" data-tab="tab01">Main Engine Cylinder L.O <br>Lubrication System</span>
            <span class="" data-tab="tab02">Main Engine Fuel/Gas<br>Valve Test Device</span>
            <span class="" data-tab="tab03">Main Engine Sealing Oil Unit</span>
            <span class="" data-tab="tab04">Main Engine Hydraulic<br>Top Bracing</span>
            <span class="" data-tab="tab05">Main Engine Hydraulic Tools Package</span>
        </div>

        <div class="tab01 tabItems tabActive ">
            <div class="w-full mt-12">
                <div class="">

                    <img src="../../img/sub02_01_tab01.png" alt="" class="mb-12 mx-auto md:h-96">
                </div>
                <div class="px-16 py-8 mt-0 rounded-md bg-blue-50">
                    <ul class="list-disc text-base font-regular">
                        <li>M/E CYLINDER의 움직임의 원할한 작동을 위한 윤활유 가열 및 공급 장치
                        </li>
                        <li>전자제어방식으로 분사 타이밍 및 소모량을 제어
                        </li>
                        <li>MAN ES(MK-I) 와 WIN GD(MK-ε) 엔진 모두 2세대 LUBRICATOR 적용</li>
                    </ul>

                </div>
                <h2 class="mb-4 text-2xl font-bold subtitle01  mt-16">Cylinder Lubricator Unit - MAN ES </h2>

                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-5 p-4">

                    <div>
                        <img src="../../img/sub02_01_02.png" alt="certificate 2" class="mx-auto rounded w-3/4">
                        <div class="tbl_wrap mt-4">
                            <table class="min-w-full bg-white border border-gray-200 text-center">
                                <thead class="bg-blue-50">
                                    <tr>
                                        <th class="px-2 py-3  border-gray-300 text-primary  leading-4 border">ME-C Large
                                        </th>
                                    </tr>
                                </thead>
                                <!-- <tbody class="text-gray-700">
                                    <tr>
                                        <td class="p-2 border-b border-gray-300 border">ME/C</td>
                                    </tr>
                                </tbody> -->
                            </table>
                        </div>
                    </div>
                    <div>
                        <img src="../../img/sub02_01_03.png" alt="certificate 2" class="mx-auto rounded w-3/4">
                        <div class="tbl_wrap mt-4">
                            <table class="min-w-full bg-white border border-gray-200 text-center">
                                <thead class="bg-blue-50">
                                    <tr>
                                        <th class="px-2 py-3  border-gray-300 text-primary  leading-4 border">ME-C Small
                                        </th>
                                    </tr>
                                </thead>
                                <!-- <tbody class="text-gray-700">
                                    <tr>
                                        <td class="p-2 border-b border-gray-300 border">MC/C</td>
                                    </tr>
                                </tbody> -->
                            </table>
                        </div>
                    </div>
                    <div>
                        <img src="../../img/sub02_01_04.png" alt="certificate 2" class="mx-auto rounded w-3/4">
                        <div class="tbl_wrap mt-4">
                            <table class="min-w-full bg-white border border-gray-200 text-center">
                                <thead class="bg-blue-50">
                                    <tr>
                                        <th class="px-2 py-3  border-gray-300 text-primary  leading-4 border">MC-C</th>
                                    </tr>
                                </thead>
                                <!-- <tbody class="text-gray-700">
                                    <tr>
                                        <td class="p-2 border-b border-gray-300 border">MC/C</td>
                                    </tr>
                                </tbody> -->
                            </table>
                        </div>
                    </div>
                </div>
                <h2 class="mb-4 text-2xl font-bold subtitle01  mt-16">Cylinder Lubricating Pump - WIN GD</h2>
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-5 p-4">

                    <div>
                        <img src="../../img/sub02_01_05.png" alt="certificate 2" class="mx-auto rounded w-2/3">
                        <div class="tbl_wrap mt-4">
                            <table class="min-w-full bg-white border border-gray-200 text-center">
                                <thead class="bg-blue-50">
                                    <tr>
                                        <th class="px-2 py-3  border-gray-300 text-primary  leading-4 border">Mk-ε</th>
                                    </tr>
                                </thead>
                                <!-- <tbody class="text-gray-700">
                                    <tr>
                                        <td class="p-2 border-b border-gray-300 border">MC/C</td>
                                    </tr>
                                </tbody> -->
                            </table>
                        </div>
                    </div>
                    <div>
                        <img src="../../img/sub02_01_06.png" alt="certificate 2" class="mx-auto rounded w-2/3">
                        <div class="tbl_wrap mt-4">
                            <table class="min-w-full bg-white border border-gray-200 text-center">
                                <thead class="bg-blue-50">
                                    <tr>
                                        <th class="px-2 py-3  border-gray-300 text-primary  leading-4 border">Mk-I</th>
                                    </tr>
                                </thead>
                                <!-- <tbody class="text-gray-700">
                                    <tr>
                                        <td class="p-2 border-b border-gray-300 border">MC/C</td>
                                    </tr>
                                </tbody> -->
                            </table>
                        </div>
                    </div>

                </div>
                <h2 class="mb-4 text-2xl font-bold subtitle01  mt-16">Heating Tank Unit & Booster Pump Station & A-ECL
                    Oil Supply Unit</h2>
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-5 p-4">

                    <div>
                        <img src="../../img/sub02_01_07.png" alt="certificate 2" class="mx-auto rounded ">
                        <div class="tbl_wrap mt-4">
                            <table class="min-w-full bg-white border border-gray-200 text-center">
                                <thead class="bg-blue-50">
                                    <tr>
                                        <th class="px-2 py-3  border-gray-300 text-primary  leading-4 border">Heating
                                            Tank Unit</th>
                                    </tr>
                                </thead>
                                <tbody class="text-gray-700">
                                    <tr>
                                        <td class="p-2 border-b border-gray-300 border">ME-C</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div>
                        <img src="../../img/sub02_01_08.png" alt="certificate 2" class="mx-auto rounded ">
                        <div class="tbl_wrap mt-4">
                            <table class="min-w-full bg-white border border-gray-200 text-center">
                                <thead class="bg-blue-50">
                                    <tr>
                                        <th class="px-2 py-3  border-gray-300 text-primary  leading-4 border">Booster
                                            Pump Unit</th>
                                    </tr>
                                </thead>
                                <tbody class="text-gray-700">
                                    <tr>
                                        <td class="p-2 border-b border-gray-300 border">MC-C</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div>
                        <img src="../../img/sub02_01_48.png" alt="certificate 2" class="mx-auto rounded ">
                        <div class="tbl_wrap mt-4">
                            <table class="min-w-full bg-white border border-gray-200 text-center">
                                <thead class="bg-blue-50">
                                    <tr>
                                        <th class="px-2 py-3  border-gray-300 text-primary  leading-4 border">A-ECL Oil
                                            Supply Unit</th>
                                    </tr>
                                </thead>
                                <tbody class="text-gray-700">
                                    <tr>
                                        <td class="p-2 border-b border-gray-300 border">UEC (J-ENGINE)</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>


                </div>
            </div>
        </div>
        <div class="tab02 tabItems">
            <div class="w-full mt-12">
                <img src="../../img/sub02_01_tab02.png" alt="" class="mb-12 mx-auto md:h-96">
                <div class="px-16 py-8 mt-12 rounded-md bg-blue-50">
                    <ul class="list-disc text-base font-regular">
                        <li>메인 엔진에 장착 되는 VALVE의 분사 및 누유 등의 테스트를 위한 장치</li>
                        <li>디젤 엔진 및 친환경 이중 연료 가스 엔진(GI, GIE, LGIP, LGIM/X-DF-M, LGIA/WX-DF-A)용 테스트장치의 설계와 생산 전반을 주도</li>
                        <li>MAN ES, WIN GD 유지보수 권장규정 준수 </li>
                    </ul>
                </div>
                <h2 class="mb-4 text-2xl font-bold subtitle01  mt-16">MAN ES</h2>
                <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-2 gap-5 p-4">

                    <div>
                        <img src="../../img/sub02_01_09.png" alt="certificate 2" class="mx-auto rounded ">
                        <div class="tbl_wrap mt-4">
                            <table class="min-w-full bg-white border border-gray-200 text-center">
                                <thead class="bg-blue-50">
                                    <tr>
                                        <th class="px-2 py-3  border-gray-300 text-primary  leading-4 border">HDFD-1100
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="text-gray-700  text-left">
                                    <tr>
                                        <td class="p-2 border-b border-gray-300 border">•Slide valve <br>
                                            •Diesel injector <br>
                                            •Hydraulic oil testing: opening</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div>
                        <img src="../../img/sub02_01_10.png" alt="certificate 2" class="mx-auto rounded ">
                        <div class="tbl_wrap mt-4">
                            <table class="min-w-full bg-white border border-gray-200 text-center">
                                <thead class="bg-blue-50">
                                    <tr>
                                        <th class="px-2 py-3  border-gray-300 text-primary  leading-4 border">
                                            F(P)BTD-1300</th>
                                    </tr>
                                </thead>
                                <tbody class="text-gray-700  text-left">
                                    <tr>
                                        <td class="p-2 border-b border-gray-300 border">•Fuel Booster(Pilot) Injection
                                            Valve <br>
                                            •Diesel injector <br>
                                            •Hydraulic oil testing: opening / venting / leakage</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div>
                        <img src="../../img/sub02_01_11.png" alt="certificate 2" class="mx-auto rounded ">
                        <div class="tbl_wrap mt-4">
                            <table class="min-w-full bg-white border border-gray-200 text-center">
                                <thead class="bg-blue-50">
                                    <tr>
                                        <th class="px-2 py-3  border-gray-300 text-primary  leading-4 border">
                                            VTU-500ME-GI/GIE</th>
                                    </tr>
                                </thead>
                                <tbody class="text-gray-700  text-left">
                                    <tr>
                                        <td class="p-2 border-b border-gray-300 border">•ME-GI/GIE Gas valves <br>
                                            •Gas injector <br>
                                            •Hydraulic oil & nitrogen testing: opening / leakage</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div>
                        <img src="../../img/sub02_01_12.png" alt="certificate 2" class="mx-auto rounded ">
                        <div class="tbl_wrap mt-4">
                            <table class="min-w-full bg-white border border-gray-200 text-center">
                                <thead class="bg-blue-50">
                                    <tr>
                                        <th class="px-2 py-3  border-gray-300 text-primary  leading-4 border">
                                            VTU-500ME-GA</th>
                                    </tr>
                                </thead>
                                <tbody class="text-gray-700  text-left">
                                    <tr>
                                        <td class="p-2 border-b border-gray-300 border">•ME-GA S/V & MBIV <br>
                                            •Diesel & Gas injector <br>
                                            •Hydraulic oil & nitrogen  testing: opening / leakage</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div>
                        <img src="../../img/sub02_01_13.png" alt="certificate 2" class="mx-auto rounded ">
                        <div class="tbl_wrap mt-4">
                            <table class="min-w-full bg-white border border-gray-200 text-center">
                                <thead class="bg-blue-50">
                                    <tr>
                                        <th class="px-2 py-3  border-gray-300 text-primary  leading-4 border">
                                            VTU-500ME-LGIP</th>
                                    </tr>
                                </thead>
                                <tbody class="text-gray-700  text-left">
                                    <tr>
                                        <td class="p-2 border-b border-gray-300 border">•ME-LGIP Gas valves <br>
                                            •Gas injector(FBIV-P) <br>
                                            •Hydraulic oil & nitrogen  testing: opening / leakage</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div>
                        <img src="../../img/sub02_01_14.png" alt="certificate 2" class="mx-auto rounded ">
                        <div class="tbl_wrap mt-4">
                            <table class="min-w-full bg-white border border-gray-200 text-center">
                                <thead class="bg-blue-50">
                                    <tr>
                                        <th class="px-2 py-3  border-gray-300 text-primary  leading-4 border">
                                            VTU-500ME-LGIM</th>
                                    </tr>
                                </thead>
                                <tbody class="text-gray-700  text-left">
                                    <tr>
                                        <td class="p-2 border-b border-gray-300 border">•ME-LGIM Gas valves <br>
                                            •Gas injector(FBIV-M) <br>
                                            •Hydraulic oil & nitrogen  testing: opening / leakage <br>
                                            •Digital type</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
                <h2 class="mb-4 text-2xl font-bold subtitle01  mt-16">WIN GD</h2>
                <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-2 gap-5 p-4">

                    <div>
                        <img src="../../img/sub02_01_15.png" alt="certificate 2" class="mx-auto rounded w-1/2">
                        <div class="tbl_wrap mt-4">
                            <table class="min-w-full bg-white border border-gray-200 text-center">
                                <thead class="bg-blue-50">
                                    <tr>
                                        <th class="px-2 py-3  border-gray-300 text-primary  leading-4 border">
                                            VTUE-2000/DF</th>
                                    </tr>
                                </thead>
                                <tbody class="text-gray-700  text-left">
                                    <tr>
                                        <td class="p-2 border-b border-gray-300 border">•W-X52~72/DF <br>
                                            •Diesel injection & pilot valve <br>
                                            •Hydraulic oil testing: opening pattern</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div>
                        <img src="../../img/sub02_01_16.png" alt="certificate 2" class="mx-auto rounded w-1/2">
                        <div class="tbl_wrap mt-4">
                            <table class="min-w-full bg-white border border-gray-200 text-center">
                                <thead class="bg-blue-50">
                                    <tr>
                                        <th class="px-2 py-3  border-gray-300 text-primary  leading-4 border">
                                            VTUE-2500/DF</th>
                                    </tr>
                                </thead>
                                <tbody class="text-gray-700  text-left">
                                    <tr>
                                        <td class="p-2 border-b border-gray-300 border">•W-X82~92/DF <br>
                                            •Diesel injection & pilot valve <br>
                                            •Hydraulic oil testing: opening pattern</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <div class="tab03 tabItems">
            <div class="w-full mt-12">
                <img src="../../img/sub02_01_tab03.png" alt="" class="mb-12 mx-auto md:h-96">
                <div class="px-16 py-8 mt-0 rounded-md bg-blue-50">
                    <ul class="list-disc text-base font-regular">
                        <li>친환경 연료 엔진의 밸브 내부에 씰링 오일을 공급하여 유압 오일과 가스 연료의 혼합을 방지하는 장치
                        </li>
                        <li>주요 구성품인 Membrance accumulator 수량에 따라 소형 및 대형 보어 엔진용으로 구분</li>
                    </ul>
                </div>
                <h2 class="mb-4 text-2xl font-bold subtitle01  mt-16">Sealing Oil Unit</h2>
                <div class=" items-center gap-4 grid-cols-3 md:grid-cols-3 lg:grid-cols-3 grid">
                    <img src="../../img/sub02_01_17.png" alt="certificate 2" class="mx-auto rounded ">
                    <img src="../../img/sub02_01_18.png" alt="certificate 2" class="mx-auto rounded ">
                    <img src="../../img/sub02_01_19.png" alt="certificate 2" class="mx-auto rounded ">
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-3 p-4">

                    <div>
                        <div class="tbl_wrap mt-4">
                            <table class="min-w-full bg-white border border-gray-200 text-center">
                                <thead class="bg-blue-50">
                                    <tr>
                                        <th class="px-2 py-3  border-gray-300 text-primary  leading-4 border">SOU type
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="text-gray-700  text-center">
                                    <tr>
                                        <td class="p-2 border-b border-gray-300 border">Large bore</td>
                                    </tr>
                                    <tr>
                                        <td class="p-2 border-b border-gray-300 border">Small bore</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div>
                        <div class="tbl_wrap mt-4">
                            <table class="min-w-full bg-white border border-gray-200 text-center">
                                <thead class="bg-blue-50">
                                    <tr>
                                        <th class="px-2 py-3  border-gray-300 text-primary  leading-4 border">Engine
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="text-gray-700  text-center">
                                    <tr>
                                        <td class="p-2 border-b border-gray-300 border">60ME~95ME</td>
                                    </tr>
                                    <tr>
                                        <td class="p-2 border-b border-gray-300 border">35ME~50ME</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div>
                        <div class="tbl_wrap mt-4">
                            <table class="min-w-full bg-white border border-gray-200 text-center">
                                <thead class="bg-blue-50">
                                    <tr>
                                        <th class="px-2 py-3  border-gray-300 text-primary  leading-4 border">Remark
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="text-gray-700  text-center">
                                    <tr>
                                        <td class="p-2 border-b border-gray-300 border">2 accumulators / LGIM</td>
                                    </tr>
                                    <tr>
                                        <td class="p-2 border-b border-gray-300 border">1 accumulator / LGIM</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab04 tabItems">
            <div class="w-full mt-12">
                <img src="../../img/sub02_01_tab04.png" alt="" class="mb-12 mx-auto md:h-96">
                <div class="px-16 py-8 mt-0 rounded-md bg-blue-50">
                    <ul class="list-disc text-base font-regular">
                        <li>엔진과 선체 사이에 설치되어 메인 엔진에서 발생하는 열팽창과 진동을 감소시키는 장치
                        </li>
                        <li>메인 엔진의 RPM에 따라, 작동 구간(in/out) 및 전원(on/off)의 자동 제어</li>
                        <li>엔진 타입 및 고객 요구에 따라 Cylinder 개수 상이</li>
                    </ul>
                </div>
                <h2 class="mb-4 text-2xl font-bold subtitle01  mt-16">MAN ES</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-3 gap-5 p-4">

                    <div>
                        <img src="../../img/sub02_01_20.png" alt="certificate 2" class="mx-auto rounded ">
                        <div class="tbl_wrap mt-4">
                            <table class="min-w-full bg-white border border-gray-200 text-center">
                                <thead class="bg-blue-50">
                                    <tr>
                                        <th class="px-2 py-3  border-gray-300 text-primary  leading-4 border">HTBA225-30
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="text-gray-700  text-left">
                                    <tr>
                                        <td class="p-2 border-b border-gray-300 border">•MAN ES Engine application <br>
                                            •On/Off type <br>
                                            •Air booster pump,  hydraulic oil auto. Filling, low oil consumption,
                                            non-air chamber anti rusting <br>
                                            •Control panel; M/E rpm signal input</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div>
                        <img src="../../img/sub02_01_21.png" alt="certificate 2" class="mx-auto rounded ">
                        <div class="tbl_wrap mt-4">
                            <table class="min-w-full bg-white border border-gray-200 text-center">
                                <thead class="bg-blue-50">
                                    <tr>
                                        <th class="px-2 py-3  border-gray-300 text-primary  leading-4 border">HTBS225-30
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="text-gray-700  text-left">
                                    <tr>
                                        <td class="p-2 border-b border-gray-300 border">•MAN ES Engine application <br>
                                            •High/Low & Stand-alone type <br>
                                            •Non-air supply  unit & chamber anti rusting <br>
                                            •Control panel(M/E rpm signal input)</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div>
                        <img src="../../img/sub02_01_22.png" alt="certificate 2" class="mx-auto rounded ">
                        <div class="tbl_wrap mt-4">
                            <table class="min-w-full bg-white border border-gray-200 text-center">
                                <thead class="bg-blue-50">
                                    <tr>
                                        <th class="px-2 py-3  border-gray-300 text-primary  leading-4 border">HTBS200-30
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="text-gray-700  text-left">
                                    <tr>
                                        <td class="p-2 border-b border-gray-300 border">•MAN ES Engine application <br>
                                            •Stand-alone type <br>
                                            •Non-air supply  unit & chamber anti rusting <br>
                                            •Control panel(M/E rpm signal input)</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>


                </div>
                <h2 class="mb-4 text-2xl font-bold subtitle01  mt-16">WIN GD</h2>
                <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-5 p-4">

                    <div>
                        <img src="../../img/sub02_01_23.png" alt="certificate 2" class="mx-auto rounded w-3/4">
                        <div class="tbl_wrap mt-4">
                            <table class="min-w-full bg-white border border-gray-200 text-center">
                                <thead class="bg-blue-50">
                                    <tr>
                                        <th class="px-2 py-3  border-gray-300 text-primary  leading-4 border">TBD200-30
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="text-gray-700  text-left">
                                    <tr>
                                        <td class="p-2 border-b border-gray-300 border">•WIN GD Engine application <br>
                                            •Double acting type <br>
                                            •One side installation(M/E fuel pump or exhaust side) <br>
                                            •Push & pull operating <br>
                                            •Non-control panel</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div>
                        <img src="../../img/sub02_01_24.png" alt="certificate 2" class="mx-auto rounded w-3/4">
                        <div class="tbl_wrap mt-4">
                            <table class="min-w-full bg-white border border-gray-200 text-center">
                                <thead class="bg-blue-50">
                                    <tr>
                                        <th class="px-2 py-3  border-gray-300 text-primary  leading-4 border">TBS250-30
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="text-gray-700  text-left">
                                    <tr>
                                        <td class="p-2 border-b border-gray-300 border">•WIN GD Engine application <br>
                                            •Single acting type <br>
                                            •Both side installation(ME fuel pump & exhaust side) <br>
                                            •Push operating(conventional) <br>
                                            •Non-control panel</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <div class="tab05 tabItems">
            <div class="w-full mt-12">
                <img src="../../img/sub02_01_tab05.png" alt="" class="mb-12 mx-auto md:h-96">
                <div class="px-16 py-8 mt-0 rounded-md bg-blue-50">
                    <ul class="list-disc text-base font-regular">
                        <li>주요 엔진 부품의 조립 및 분해 시에 사용하는 초고압 툴</li>
                        <li>유압펌프, 유압 잭, 유압 호스 & 커플링 등으로 구성</li>
                        <li>엔진의 요구 압력별로 다양한 모델을 구비</li>
                    </ul>
                </div>
                <h2 class="mb-4 text-2xl font-bold subtitle01  mt-16">Air Driven High Pressure Pump-MAN ES</h2>
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-5 p-4">

                    <div>
                        <img src="../../img/sub02_01_25.png" alt="certificate 2" class="mx-auto rounded ">
                        <div class="tbl_wrap mt-4">
                            <table class="min-w-full bg-white border border-gray-200 text-center">
                                <thead class="bg-blue-50">
                                    <tr>
                                        <th class="px-2 py-3  border-gray-300 text-primary  leading-4 border">
                                            AHP-1500/1500.2</th>
                                    </tr>
                                </thead>
                                <tbody class="text-gray-700  text-left">
                                    <tr>
                                        <td class="p-2 border-b border-gray-300 border">•MAN ES engine application
                                            <br>
                                            •Max pressure: 1,500bar
                                            <br>
                                            •Max flow rate: 0.35/0.5ℓ/min
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div>
                        <img src="../../img/sub02_01_26.png" alt="certificate 2" class="mx-auto rounded ">
                        <div class="tbl_wrap mt-4">
                            <table class="min-w-full bg-white border border-gray-200 text-center">
                                <thead class="bg-blue-50">
                                    <tr>
                                        <th class="px-2 py-3  border-gray-300 text-primary  leading-4 border">
                                            AHP-2500/2000</th>
                                    </tr>
                                </thead>
                                <tbody class="text-gray-700  text-left">
                                    <tr>
                                        <td class="p-2 border-b border-gray-300 border">•MAN ES engine application <br>
                                            •Max pressure: 2,000/2,500bar<br>
                                            •Max flow rate: 0.18/0.81ℓ/min</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div>
                        <img src="../../img/sub02_01_27.png" alt="certificate 2" class="mx-auto rounded ">
                        <div class="tbl_wrap mt-4">
                            <table class="min-w-full bg-white border border-gray-200 text-center">
                                <thead class="bg-blue-50">
                                    <tr>
                                        <th class="px-2 py-3  border-gray-300 text-primary  leading-4 border">AHP-3500
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="text-gray-700  text-left">
                                    <tr>
                                        <td class="p-2 border-b border-gray-300 border">•MAN ES engine application <br>
                                            •Max pressure: 3,500bar<br>
                                            •Max flow rate: 0.7ℓ/min</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>


                </div>
                <h2 class="mb-4 text-2xl font-bold subtitle01  mt-16">Air Driven High Pressure Pump-WIN GD</h2>
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-5 p-4">
                    <div>
                        <img src="../../img/sub02_01_28.png" alt="certificate 2" class="mx-auto rounded ">
                        <div class="tbl_wrap mt-4">
                            <table class="min-w-full bg-white border border-gray-200 text-center">
                                <thead class="bg-blue-50">
                                    <tr>
                                        <th class="px-2 py-3  border-gray-300 text-primary  leading-4 border">AHP-2500.1
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="text-gray-700  text-left">
                                    <tr>
                                        <td class="p-2 border-b border-gray-300 border">• WIN GD engine application <br>
                                            • Max pressure: 2,500bar<br>
                                            • Max flow rate: 1.45ℓ/min (Low)/0.5ℓ/min (High)</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div>
                        <img src="../../img/sub02_01_29.png" alt="certificate 2" class="mx-auto rounded ">
                        <div class="tbl_wrap mt-4">
                            <table class="min-w-full bg-white border border-gray-200 text-center">
                                <thead class="bg-blue-50">
                                    <tr>
                                        <th class="px-2 py-3  border-gray-300 text-primary  leading-4 border">AHP-3000
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="text-gray-700  text-left">
                                    <tr>
                                        <td class="p-2 border-b border-gray-300 border">•WIN GD engine application<br>
                                            • Max pressure: 2,500bar<br>
                                            • Max flow rate: 0.5ℓ/min</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div>
                        <img src="../../img/sub02_01_30.png" alt="certificate 2" class="mx-auto rounded ">
                        <div class="tbl_wrap mt-4">
                            <table class="min-w-full bg-white border border-gray-200 text-center">
                                <thead class="bg-blue-50">
                                    <tr>
                                        <th class="px-2 py-3  border-gray-300 text-primary  leading-4 border">AHP-3000.1
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="text-gray-700  text-left">
                                    <tr>
                                        <td class="p-2 border-b border-gray-300 border">•WIN GD engine application<br>
                                            • Max pressure: 2,500bar<br>
                                            • Max flow rate: 0.5ℓ/min</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <h2 class="mb-4 text-2xl font-bold subtitle01  mt-16">Hand Operated High Pressure Pump</h2>
                <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-4 gap-5 p-4">
                    <div>
                        <img src="../../img/sub02_01_31.png" alt="certificate 2" class="mx-auto rounded ">
                        <div class="tbl_wrap mt-4">
                            <table class="min-w-full bg-white border border-gray-200 text-center">
                                <thead class="bg-blue-50">
                                    <tr>
                                        <th class="px-2 py-3  border-gray-300 text-primary  leading-4 border">HML-1600
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="text-gray-700  text-center">
                                    <tr>
                                        <td class="p-2 border-b border-gray-300 border">Max Pressure: 1,500bar</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div>
                        <img src="../../img/sub02_01_32.png" alt="certificate 2" class="mx-auto rounded ">
                        <div class="tbl_wrap mt-4">
                            <table class="min-w-full bg-white border border-gray-200 text-center">
                                <thead class="bg-blue-50">
                                    <tr>
                                        <th class="px-2 py-3  border-gray-300 text-primary  leading-4 border">HML-1700 /
                                            2000N</th>
                                    </tr>
                                </thead>
                                <tbody class="text-gray-700  text-center">
                                    <tr>
                                        <td class="p-2 border-b border-gray-300 border">Max Pressure: 1,700/2,000bar
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div>
                        <img src="../../img/sub02_01_33.png" alt="certificate 2" class="mx-auto rounded ">
                        <div class="tbl_wrap mt-4">
                            <table class="min-w-full bg-white border border-gray-200 text-center">
                                <thead class="bg-blue-50">
                                    <tr>
                                        <th class="px-2 py-3  border-gray-300 text-primary  leading-4 border">HML-2500
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="text-gray-700  text-center">
                                    <tr>
                                        <td class="p-2 border-b border-gray-300 border">Max Pressure: 2,350bar</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div>
                        <img src="../../img/sub02_01_33.png" alt="certificate 2" class="mx-auto rounded ">
                        <div class="tbl_wrap mt-4">
                            <table class="min-w-full bg-white border border-gray-200 text-center">
                                <thead class="bg-blue-50">
                                    <tr>
                                        <th class="px-2 py-3  border-gray-300 text-primary  leading-4 border">HML-3500
                                        </th>
                                    </tr>
                                </thead>
                                <tbody class="text-gray-700  text-center">
                                    <tr>
                                        <td class="p-2 border-b border-gray-300 border">Max Pressure: 3,000bar</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- <div class="grid grid-cols-1 p-4">
                    <div>
                        <div class="flex flex-wrap">
                            <img src="../../img/sub02_01_31.png" alt="certificate 2" class="mx-auto rounded w-2/3 md:w-1/4">
                            <img src="../../img/sub02_01_32.png" alt="certificate 2" class="mx-auto rounded w-2/3 md:w-1/4">
                            <img src="../../img/sub02_01_33.png" alt="certificate 2" class="mx-auto rounded w-2/3 md:w-1/4">
                            <img src="../../img/sub02_01_34.png" alt="certificate 2" class="mx-auto rounded w-2/3 md:w-1/4">
                        </div>
                        <div class="tbl_wrap mt-4">
                            <table class="min-w-full bg-white border border-gray-200 text-center">
                                <thead class="bg-blue-50">
                                    <tr>
                                        <th colspan="4" class="px-2 py-3 border-gray-300 text-primary leading-4 border">Max. Pressure(bar)</th>
                                    </tr>
                                    <tr>
                                        <th class="px-2 py-3 border-gray-300 text-primary leading-4 border">HML-1600</th>
                                        <th class="px-2 py-3 border-gray-300 text-primary leading-4 border">HML-1700 / 2000N</th>
                                        <th class="px-2 py-3 border-gray-300 text-primary leading-4 border">HML-2500</th>
                                        <th class="px-2 py-3 border-gray-300 text-primary leading-4 border">HML-3500</th>
                                    </tr>
                                </thead>
                                <tbody class="text-gray-700 text-center">
                                    <tr>
                                        <td class="p-2 border-b border-gray-300 border">1,500</td>
                                        <td class="p-2 border-b border-gray-300 border">1,700 / 2,000</td>
                                        <td class="p-2 border-b border-gray-300 border">2,350</td>
                                        <td class="p-2 border-b border-gray-300 border">3,000</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div> -->
                <h2 class="mb-4 text-2xl font-bold subtitle01  mt-16">Hydraulic Jack</h2>
                <div class="grid grid-cols-1 p-4">
                    <div>
                        <div class="flex flex-wrap">
                            <img src="../../img/sub02_01_35.png" alt="certificate 2"
                                class="mx-auto rounded w-full md:w-1/2">
                            <img src="../../img/sub02_01_36.png" alt="certificate 2"
                                class="mx-auto rounded w-full md:w-1/2">
                        </div>
                        <div class="tbl_wrap mt-4">
                            <table class="min-w-full bg-white border border-gray-200 text-center">
                                <thead class="bg-blue-50">
                                    <tr class="2-1/3">
                                        <th colspan="6" class="px-2 py-3 border-gray-300 text-primary leading-4 border">
                                            Working Pressure(bar)</th>
                                    </tr>
                                    <tr class="2-1/3">
                                        <th colspan="3" class="px-2 py-3 border-gray-300 text-primary leading-4 border">
                                            MAN ES</th>
                                        <th colspan="2" class="px-2 py-3 border-gray-300 text-primary leading-4 border">
                                            WIN G&D</th>
                                        <th colspan="1" class="px-2 py-3 border-gray-300 text-primary leading-4 border">
                                            J-ENG</th>
                                    </tr class="2-1/3">
                                    <tr class="2-1/3">
                                        <th class="px-2 py-3 border-gray-300 text-primary leading-4 border w-1/6">MC
                                        </th>
                                        <th class="px-2 py-3 border-gray-300 text-primary leading-4 border w-1/6">MC-C
                                        </th>
                                        <th class="px-2 py-3 border-gray-300 text-primary leading-4 border w-1/6">ME
                                        </th>
                                        <th class="px-2 py-3 border-gray-300 text-primary leading-4 border w-1/6">RTA
                                        </th>
                                        <th class="px-2 py-3 border-gray-300 text-primary leading-4 border w-1/6">RTF,
                                            X-engine</th>
                                        <th class="px-2 py-3 border-gray-300 text-primary leading-4 border w-1/6">UEC
                                        </th>
                                    </tr>

                                </thead>
                                <tbody class="text-gray-700 text-center">
                                    <tr>
                                        <td class="p-2 border-b border-gray-300 border">900</td>
                                        <td class="p-2 border-b border-gray-300 border">1,500</td>
                                        <td class="p-2 border-b border-gray-300 border">2,200</td>
                                        <td class="p-2 border-b border-gray-300 border">900</td>
                                        <td class="p-2 border-b border-gray-300 border">1,500</td>
                                        <td class="p-2 border-b border-gray-300 border">1,000 - 1,800</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>


                <h2 class="mb-4 text-2xl font-bold subtitle01  mt-16">High Pressure Quick Coupling</h2>
                <div class="grid grid-cols-1 p-4">
                    <div>
                        <div class="flex flex-wrap">
                            <img src="../../img/sub02_01_37.png" alt="certificate 2"
                                class="mx-auto rounded w-1/5 md:1/5">
                            <img src="../../img/sub02_01_38.png" alt="certificate 2"
                                class="mx-auto rounded w-1/5 md:1/5">
                            <img src="../../img/sub02_01_39.png" alt="certificate 2"
                                class="mx-auto rounded w-1/5 md:1/5">
                        </div>
                        <div class="tbl_wrap mt-4">
                            <table class="min-w-full bg-white border border-gray-200 text-center mt-6">
                                <thead class="bg-blue-50">
                                    <tr>
                                    </tr>
                                    <tr>
                                        <th colspan="3" class="px-2 py-3 border-gray-300 text-primary leading-4 border">
                                            1.5K Series</th>
                                    </tr>
                                    <tr>
                                        <th class="px-2 py-3 border-gray-300 text-primary leading-4 border">HC-1.5K</th>
                                        <th class="px-2 py-3 border-gray-300 text-primary leading-4 border">HNC-1.5K
                                        </th>
                                        <th class="px-2 py-3 border-gray-300 text-primary leading-4 border">HN-1.5K</th>
                                    </tr>

                                </thead>
                                <tbody class="text-gray-700 text-center">
                                    <tr>
                                        <td class="p-2 border-b border-gray-300 border">1,500bar / 150MPa</td>
                                        <td class="p-2 border-b border-gray-300 border">1,500bar / 150MPa</td>
                                        <td class="p-2 border-b border-gray-300 border">1,500bar / 150MPa</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
                <div class="grid grid-cols-1 p-4">
                    <div>
                        <div class="flex flex-wrap">
                            <img src="../../img/sub02_01_40.png" alt="certificate 2"
                                class="mx-auto rounded w-1/5 md:1/5">
                            <img src="../../img/sub02_01_41.png" alt="certificate 2"
                                class="mx-auto rounded w-1/5 md:1/5">
                            <img src="../../img/sub02_01_42.png" alt="certificate 2"
                                class="mx-auto rounded w-1/5 md:1/5">
                        </div>
                        <div class="tbl_wrap mt-4">
                            <table class="min-w-full bg-white border border-gray-200 text-center mt-6">
                                <thead class="bg-blue-50">
                                    <tr>
                                    </tr>
                                    <tr>
                                        <th colspan="3" class="px-2 py-3 border-gray-300 text-primary leading-4 border">
                                            1.5K Series</th>
                                    </tr>
                                    <tr>
                                        <th class="px-2 py-3 border-gray-300 text-primary leading-4 border">HC-2.0K</th>
                                        <th class="px-2 py-3 border-gray-300 text-primary leading-4 border">HNC-2.0K
                                        </th>
                                        <th class="px-2 py-3 border-gray-300 text-primary leading-4 border">HN-2.0K</th>
                                    </tr>

                                </thead>
                                <tbody class="text-gray-700 text-center">
                                    <tr>
                                        <td class="p-2 border-b border-gray-300 border">2,000bar / 200MPa</td>
                                        <td class="p-2 border-b border-gray-300 border">2,000bar / 200MPa</td>
                                        <td class="p-2 border-b border-gray-300 border">2,000bar / 200MPa</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
                <div class="grid grid-cols-1 p-4">
                    <div>
                        <div class="flex flex-wrap">
                            <img src="../../img/sub02_01_43.png" alt="certificate 2"
                                class="mx-auto rounded w-1/5 md:1/5">
                            <img src="../../img/sub02_01_44.png" alt="certificate 2"
                                class="mx-auto rounded w-1/5 md:1/5">
                            <img src="../../img/sub02_01_45.png" alt="certificate 2"
                                class="mx-auto rounded w-1/5 md:1/5">
                        </div>
                        <div class="tbl_wrap mt-4">
                            <table class="min-w-full bg-white border border-gray-200 text-center mt-6">
                                <thead class="bg-blue-50">
                                    <tr>
                                    </tr>
                                    <tr>
                                        <th colspan="3" class="px-2 py-3 border-gray-300 text-primary leading-4 border">
                                            1.5K Series</th>
                                    </tr>
                                    <tr>
                                        <th class="px-2 py-3 border-gray-300 text-primary leading-4 border">HC-2.5K</th>
                                        <th class="px-2 py-3 border-gray-300 text-primary leading-4 border">HNC-2.5K
                                        </th>
                                        <th class="px-2 py-3 border-gray-300 text-primary leading-4 border">HN-2.5K</th>
                                    </tr>

                                </thead>
                                <tbody class="text-gray-700 text-center">
                                    <tr>
                                        <td class="p-2 border-b border-gray-300 border">2,500bar / 250MPa</td>
                                        <td class="p-2 border-b border-gray-300 border">2,500bar / 250MPa</td>
                                        <td class="p-2 border-b border-gray-300 border">2,500bar / 250MPa</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>

                <h2 class="mb-4 text-2xl font-bold subtitle01  mt-16">High Pressure Hose</h2>
                <div class="grid grid-cols-1 p-4">
                    <div>
                        <div class="flex flex-wrap">
                            <img src="../../img/sub02_01_46.png" alt="certificate 2" class="mx-auto rounded w-2/3">
                        </div>
                        <div class="tbl_wrap mt-4">
                            <table class="min-w-full bg-white border border-gray-200 text-center">
                                <thead class="bg-blue-50">
                                    <tr>
                                        <th colspan="3" class="px-2 py-3 border-gray-300 text-primary leading-4 border">
                                            Technical Specification</th>
                                    </tr>
                                </thead>
                                <tbody class="text-gray-700 text-center">
                                    <tr>
                                        <td class="bg-blue-50 px-2 py-3 border-gray-300 text-primary leading-4 border">
                                            Application</td>
                                        <td class="p-2 border-b border-gray-300 border">1800bar Hose</td>
                                        <td class="p-2 border-b border-gray-300 border">2500bar Hose</td>
                                    </tr>
                                    <tr>
                                        <td class="bg-blue-50 px-2 py-3 border-gray-300 text-primary leading-4 border">
                                            Color</td>
                                        <td class="p-2 border-b border-gray-300 border">Blue</td>
                                        <td class="p-2 border-b border-gray-300 border">Red</td>
                                    </tr>
                                    <tr>
                                        <td class="bg-blue-50 px-2 py-3 border-gray-300 text-primary leading-4 border">
                                            Max. working pressure(bar)</td>
                                        <td class="p-2 border-b border-gray-300 border">1,800</td>
                                        <td class="p-2 border-b border-gray-300 border">2,500</td>
                                    </tr>
                                    <tr>
                                        <td class="bg-blue-50 px-2 py-3 border-gray-300 text-primary leading-4 border">
                                            Min. burst pressure(bar)</td>
                                        <td class="p-2 border-b border-gray-300 border">4,500</td>
                                        <td class="p-2 border-b border-gray-300 border">6,250</td>
                                    </tr>
                                    <tr>
                                        <td class="bg-blue-50 px-2 py-3 border-gray-300 text-primary leading-4 border">
                                            Outer dia.(mm)</td>
                                        <td class="p-2 border-b border-gray-300 border">11.2</td>
                                        <td class="p-2 border-b border-gray-300 border">13.2</td>
                                    </tr>
                                    <tr>
                                        <td class="bg-blue-50 px-2 py-3 border-gray-300 text-primary leading-4 border">
                                            Inner dia.(mm)</td>
                                        <td class="p-2 border-b border-gray-300 border">5.0</td>
                                        <td class="p-2 border-b border-gray-300 border">4.8</td>
                                    </tr>
                                    <tr>
                                        <td class="bg-blue-50 px-2 py-3 border-gray-300 text-primary leading-4 border">
                                            Min. bend radius(mm)</td>
                                        <td class="p-2 border-b border-gray-300 border">150</td>
                                        <td class="p-2 border-b border-gray-300 border">200</td>
                                    </tr>
                                    <tr>
                                        <td class="bg-blue-50 px-2 py-3 border-gray-300 text-primary leading-4 border">
                                            Temperature range</td>
                                        <td class="p-2 border-b border-gray-300 border">-30℃ ~ +60℃</td>
                                        <td class="p-2 border-b border-gray-300 border">-30℃ ~ +60℃</td>
                                    </tr>
                                    <tr>
                                        <td class="bg-blue-50 px-2 py-3 border-gray-300 text-primary leading-4 border">
                                            Couplings/nipples</td>
                                        <td class="p-2 border-b border-gray-300 border">1.5K series</td>
                                        <td class="p-2 border-b border-gray-300 border">2.5K series</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include_once(G5_PATH . '/tail.php');
?>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        gsap.registerPlugin(ScrollTrigger, ScrollToPlugin);
        const tabs = document.querySelectorAll('.page_tab span');
        const tabContents = document.querySelectorAll('.tabItems');
        const topButtons = document.querySelectorAll('.egBtnWrap > span');

        function activateTab(index) {
            // Deactivate all
            tabs.forEach(t => t.classList.remove('active'));
            tabContents.forEach(c => c.classList.remove('tabActive'));

            // Activate specific
            if (tabs[index]) tabs[index].classList.add('active');
            if (tabContents[index]) tabContents[index].classList.add('tabActive');

            // Scroll
            if (tabContents[index]) {
                gsap.to(window, {
                    duration: 0.5,
                    scrollTo: { y: tabContents[index], offsetY: 100 }
                });
            }
        }

        // Tab Menu Clicks
        tabs.forEach((tab, index) => {
            tab.addEventListener('click', () => activateTab(index));
        });

        // Top Button Clicks (match by index)
        topButtons.forEach((btn, index) => {
            btn.addEventListener('click', () => activateTab(index));
        });
    });
</script>

<style>
    .tabItems {
        display: none;
    }

    .tabItems.tabActive {
        display: block;
    }

    .page_tab span {
        cursor: pointer;
    }

    .egBtnWrap>span {
        cursor: pointer;
    }
</style>