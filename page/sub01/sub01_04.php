<?php
include_once('../../common.php');
// 페이지 제목 
$g5['title'] = "컨설팅 실적";
include_once(G5_PATH . '/head.php');
?>

<section class="ppbSpWrap py-10 md:py-20 section00">
    <div class="container mx-auto px-6">
        <div class="subTitle mb-12 text-center">
            <h2 class="font-extrabold text-3xl md:text-4xl mb-4">컨설팅 <b class="text-primary">실적</b></h2>
            <p class="text-gray-600 text-lg">케이비즈업의 주요 R&D 및 조달 컨설팅 수행 실적입니다.</p>
        </div>

        <div class="mx-auto">
            <!-- 1. R&D Consulting Performance -->
            <div class="mt-8 mb-20">
                <h3 class="text-3xl font-bold text-gray-900 mb-6 border-l-4 border-blue-600 pl-4">R&D Consulting
                    Performance</h3>
                <p class="text-gray-600 mb-4">R&D 기획, 기술개발 과제, 공정품질 개선 등 다양한 분야의 연구개발 실적입니다.</p>

                <div class="overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left text-gray-500">
                        <thead class="text-xs text-white uppercase bg-gray-800">
                            <tr>
                                <th scope="col" class="px-6 py-4 w-24 text-center">Year</th>
                                <th scope="col" class="px-6 py-4 text-center">Project Name</th>
                                <th scope="col" class="px-6 py-4 w-48 text-center">Remarks</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- 2025 -->
                            <tr class="bg-white border-b hover:bg-gray-50">
                                <td class="px-6 py-4 font-bold text-center text-gray-900" rowspan="6">2025</td>
                                <td class="px-6 py-4 text-gray-900 font-medium">이차전지 화재 예방용 오프가스 감지 센서 모듈 국산화</td>
                                <td class="px-6 py-4 text-blue-600 font-medium text-center">동서발전 연구과제</td>
                            </tr>
                            <tr class="bg-white border-b hover:bg-gray-50">
                                <td class="px-6 py-4 text-gray-900">AIoT 기반 스마트 가축 방역 및 건강 모니터링 시스템</td>
                                <td class="px-6 py-4 text-center">중소기업 혁신기술개발</td>
                            </tr>
                            <tr class="bg-white border-b hover:bg-gray-50">
                                <td class="px-6 py-4 text-gray-900">엘리베이터 연동형 스마트 AED 시스템</td>
                                <td class="px-6 py-4 text-center">중소기업 혁신기술개발</td>
                            </tr>
                            <tr class="bg-white border-b hover:bg-gray-50">
                                <td class="px-6 py-4 text-gray-900">스마트 건설발판 세척 시스템 (진동 최적화)</td>
                                <td class="px-6 py-4 text-center">중소기업 혁신기술개발</td>
                            </tr>
                            <tr class="bg-white border-b hover:bg-gray-50">
                                <td class="px-6 py-4 text-gray-900">선박용 AI 실시간 대피경로 산출 시스템</td>
                                <td class="px-6 py-4 text-center">중소기업 혁신기술개발</td>
                            </tr>
                            <tr class="bg-white border-b hover:bg-gray-50">
                                <td class="px-6 py-4 text-gray-900">이동식 반려동물 친환경 화장 시스템</td>
                                <td class="px-6 py-4 text-center">창업성장기술개발</td>
                            </tr>

                            <!-- 2024 -->
                            <tr class="bg-gray-50 border-b hover:bg-gray-100">
                                <td class="px-6 py-4 font-bold text-center text-gray-900" rowspan="5">2024</td>
                                <td class="px-6 py-4 text-gray-900 font-medium">자동차 캐빈용 필터 케이스 및 기능성 필터</td>
                                <td class="px-6 py-4 text-red-600 font-bold text-center">창업성장(선정)</td>
                            </tr>
                            <tr class="bg-gray-50 border-b hover:bg-gray-100">
                                <td class="px-6 py-4 text-gray-900 font-medium">전기차 언더커버용 열전소자 냉각 금형 기술</td>
                                <td class="px-6 py-4 text-red-600 font-bold text-center">기술혁신(선정)</td>
                            </tr>
                            <tr class="bg-gray-50 border-b hover:bg-gray-100">
                                <td class="px-6 py-4 text-gray-900">전기차용 차세대 단열패드 및 발포소재 기술</td>
                                <td class="px-6 py-4 text-center">소재부품기술개발</td>
                            </tr>
                            <tr class="bg-gray-50 border-b hover:bg-gray-100">
                                <td class="px-6 py-4 text-gray-900">3D 기반 용접 품질 검사 시스템</td>
                                <td class="px-6 py-4 text-center">중소기업 기술혁신</td>
                            </tr>
                            <tr class="bg-gray-50 border-b hover:bg-gray-100">
                                <td class="px-6 py-4 text-gray-900">CNC 가공용 동적 스케줄링 APS 시스템</td>
                                <td class="px-6 py-4 text-center">중소기업 기술혁신</td>
                            </tr>

                            <!-- 2023 -->
                            <tr class="bg-white border-b hover:bg-gray-50">
                                <td class="px-6 py-4 font-bold text-center text-gray-900" rowspan="5">2023</td>
                                <td class="px-6 py-4 text-gray-900 font-medium">자동차 흡음내장재 컷팅 일체형 모듈 금형</td>
                                <td class="px-6 py-4 text-center">위기지역 Scale-up</td>
                            </tr>
                            <tr class="bg-white border-b hover:bg-gray-50">
                                <td class="px-6 py-4 text-gray-900">원자로 내 다목적 검사 자동화 장비</td>
                                <td class="px-6 py-4 text-center">중소기업 기술혁신</td>
                            </tr>
                            <tr class="bg-white border-b hover:bg-gray-50">
                                <td class="px-6 py-4 text-gray-900">랙앤피니언 방식 브로칭 머신</td>
                                <td class="px-6 py-4 text-center">중소기업 기술혁신</td>
                            </tr>
                            <tr class="bg-white border-b hover:bg-gray-50">
                                <td class="px-6 py-4 text-gray-900">중장비 사이드미러 조립 자동화 장치</td>
                                <td class="px-6 py-4 text-center">공정품질기술개발</td>
                            </tr>
                            <tr class="bg-white border-b hover:bg-gray-50">
                                <td class="px-6 py-4 text-gray-900">볼트 전조공정 칩 세퍼레이션 시스템</td>
                                <td class="px-6 py-4 text-center">공정품질기술개발</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- 2. Procurement & Certification -->
            <div class="mb-20">
                <h3 class="text-3xl font-bold text-gray-900 mb-6 border-l-4 border-green-600 pl-4">Procurement &
                    Certification</h3>
                <p class="text-gray-600 mb-4">조달청 혁신제품, 우수제품 지정 및 MAS 계약, 친환경/성능 인증 실적입니다.</p>

                <div class="overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left text-gray-500">
                        <thead class="text-xs text-white uppercase bg-gray-800">
                            <tr>
                                <th scope="col" class="px-6 py-4 w-24 text-center">Year</th>
                                <th scope="col" class="px-6 py-4 w-40 text-center">Category</th>
                                <th scope="col" class="px-6 py-4 text-center">Details</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- 2025 -->
                            <tr class="bg-white border-b hover:bg-gray-50">
                                <td class="px-6 py-4 font-bold text-center text-gray-900" rowspan="6">2025</td>
                                <td class="px-6 py-4 font-bold text-blue-600 text-center">혁신제품</td>
                                <td class="px-6 py-4 text-gray-900">혁신제품 인증 획득 (건설/안전 분야)</td>
                            </tr>
                            <tr class="bg-white border-b hover:bg-gray-50">
                                <td class="px-6 py-4 font-bold text-blue-600 text-center">혁신제품</td>
                                <td class="px-6 py-4 text-gray-900">혁신제품 인증 획득 (IT/솔루션 분야)</td>
                            </tr>
                            <tr class="bg-white border-b hover:bg-gray-50">
                                <td class="px-6 py-4 font-bold text-blue-600 text-center">혁신제품</td>
                                <td class="px-6 py-4 text-gray-900">혁신제품 인증 컨설팅 (승강기 분야)</td>
                            </tr>
                            <tr class="bg-white border-b hover:bg-gray-50">
                                <td class="px-6 py-4 font-semibold text-gray-700 text-center">조달계약</td>
                                <td class="px-6 py-4 text-gray-900">다수공급자계약(MAS) 신규 등록 (디자인/조형물)</td>
                            </tr>
                            <tr class="bg-white border-b hover:bg-gray-50">
                                <td class="px-6 py-4 font-semibold text-gray-700 text-center">조달계약</td>
                                <td class="px-6 py-4 text-gray-900">다수공급자계약(MAS) 갱신 등록 (승강기)</td>
                            </tr>
                            <tr class="bg-white border-b hover:bg-gray-50">
                                <td class="px-6 py-4 text-center">기술인증</td>
                                <td class="px-6 py-4 text-gray-900">녹색인증 컨설팅 (제조 분야)</td>
                            </tr>

                            <!-- 2024 -->
                            <tr class="bg-gray-50 border-b hover:bg-gray-100">
                                <td class="px-6 py-4 font-bold text-center text-gray-900" rowspan="3">2024</td>
                                <td class="px-6 py-4 font-bold text-purple-600 text-center">벤처나라</td>
                                <td class="px-6 py-4 text-gray-900">벤처나라 혁신조달상품 지정 (안전용품)</td>
                            </tr>
                            <tr class="bg-gray-50 border-b hover:bg-gray-100">
                                <td class="px-6 py-4 font-bold text-purple-600 text-center">벤처나라</td>
                                <td class="px-6 py-4 text-gray-900">벤처나라 혁신조달상품 지정 (필터류)</td>
                            </tr>
                            <tr class="bg-gray-50 border-b hover:bg-gray-100">
                                <td class="px-6 py-4 font-semibold text-teal-600 text-center">해외조달</td>
                                <td class="px-6 py-4 text-gray-900">G-PASS(해외조달시장 진출기업) 지정</td>
                            </tr>

                            <!-- 2023 -->
                            <tr class="bg-white border-b hover:bg-gray-50">
                                <td class="px-6 py-4 font-bold text-center text-gray-900" rowspan="4">2023</td>
                                <td class="px-6 py-4 font-bold text-red-600 text-center">우수조달</td>
                                <td class="px-6 py-4 text-gray-900">조달청 우수제품 지정 (기계장치)</td>
                            </tr>
                            <tr class="bg-white border-b hover:bg-gray-50">
                                <td class="px-6 py-4 font-semibold text-gray-700 text-center">성능인증</td>
                                <td class="px-6 py-4 text-gray-900">조달청 성능인증(EPC) 획득 (기계장치)</td>
                            </tr>
                            <tr class="bg-white border-b hover:bg-gray-50">
                                <td class="px-6 py-4 text-center">종합컨설팅</td>
                                <td class="px-6 py-4 text-gray-900">조달등록, 혁신시제품, 녹색·성능인증 종합 지도</td>
                            </tr>
                            <tr class="bg-white border-b hover:bg-gray-50">
                                <td class="px-6 py-4 text-center">조달계약</td>
                                <td class="px-6 py-4 text-gray-900">MAS 등록 및 성능인증 동시 수행</td>
                            </tr>

                            <!-- 2020~2022 -->
                            <tr class="bg-gray-50 border-b hover:bg-gray-100">
                                <td class="px-6 py-4 font-bold text-center text-gray-900">2020-22</td>
                                <td class="px-6 py-4 text-center">기술인증</td>
                                <td class="px-6 py-4 text-gray-900">녹색인증 획득 (건축자재)</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
</section>

<?php
include_once(G5_PATH . '/tail.php');
?>