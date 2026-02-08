<?php

include_once('../../common.php');
// 페이지 제목
$g5['title'] = "창업 및 소상공인 지원";
include_once(G5_PATH . '/head.php');

?>

<section class="ppbSpWrap py-10 ">
    <div class="container mx-auto px-0">
        <div class="">
            <div class="w-full">
                <div class="subTitle">
                    <h2 class=" text-center">창업 및 소상공인 지원</h2>
                </div>
                <div class="f_svg my-16">
                    <svg width="1018" height="2" viewBox="0 0 1018 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1018 1L-3.05176e-05 1" stroke="url(#paint0_linear_166_1424)" stroke-width="2" />
                        <defs>
                            <linearGradient id="paint0_linear_166_1424" x1="0" y1="0.5" x2="1018" y2="0.5"
                                gradientUnits="userSpaceOnUse">
                                <stop stop-color="#0C3A8D" stop-opacity="0" />
                                <stop offset="0.5" stop-color="#0C3A8D" />
                                <stop offset="1" stop-color="#0C3A8D" stop-opacity="0" />
                            </linearGradient>
                        </defs>
                    </svg>
                </div>

            </div>

            <!-- 상단 비주얼 (기존 sub02_03.php 비주얼 유지) -->
            <?php include_once('svg_visual_03.php'); ?>

            <!-- 탭 메뉴 (sub02_02 스타일) -->
            <div class="page_tab my-16">
                <span class="active">창업지원사업</span>
                <span class="">소상공인 경영개선</span>
                <span class="">정책자금 연계</span>
                <span class="">사업전환 컨설팅</span>
            </div>

            <!-- 탭1: 창업지원사업 -->
            <div class="tab01 tabItems tabActive">
                <div class="sub_banner">
                    <div class="txt_con">
                        <p class="txt01">창업지원사업</p>
                    </div>
                </div>
                <div class="relative subTextBoxwrap flex flex-wrap md:flex-nowrap">
                    <h2 class="mt-0 text-2xl font-bold subtitle01 w-full md:w-1/5">
                        <img src="../../img/startup_logo.svg" alt="창업지원사업 로고" style="width: 152px; height: 152px;">
                    </h2>
                    <div class="flex content-center flex-wrap">
                        <p class="text-3xl text-black whitespace-pre-line font-bold w-full">서비스 개요</p>
                        <p class="mt-2 text-xl text-gray-700 whitespace-pre-line">목적 : 예비창업자 및 초기창업자(7년 이내)를 대상으로 정부 및
                            지자체 창업지원사업 선정을 위한 전문 컨설팅을 제공합니다. 사업계획서 작성 지도부터 발표 코칭, 사후관리까지 창업의 전 과정을 체계적으로 지원합니다.</p>
                    </div>
                </div>
                <div class="relative subTextBoxwrap flex flex-wrap md:flex-nowrap">
                    <h2 class="mt-0 mb-4 text-2xl font-bold subtitle01 w-full md:w-1/5">지원대상</h2>
                    <div class="">
                        <p class="mt-2 text-xl text-gray-700 whitespace-pre-line">· 예비창업자 (창업 준비 중인 개인)</p>
                        <p class="mt-2 text-xl text-gray-700 whitespace-pre-line">· 초기창업자 (창업 후 3년 이내)</p>
                        <p class="mt-2 text-xl text-gray-700 whitespace-pre-line">· 도약기 창업기업 (창업 후 3년~7년)</p>
                        <p class="mt-2 text-xl text-gray-700 whitespace-pre-line">· 기술기반 스타트업 및 소셜벤처</p>
                    </div>
                </div>
                <div class="relative subTextBoxwrap flex flex-wrap md:flex-nowrap">
                    <h2 class="mt-0 mb-4 text-2xl font-bold subtitle01 w-full md:w-1/5">서비스 종류</h2>
                    <div class="">
                        <p class="text-2xl text-black whitespace-pre-line font-bold">1. 예비창업패키지</p>
                        <p class="mt-2 text-xl text-gray-700 whitespace-pre-line">예비창업자 대상 최대 1억원 사업화 자금 및 창업 교육 지원</p>
                        <p class="mt-4 text-2xl text-black whitespace-pre-line font-bold">2. 초기창업패키지</p>
                        <p class="mt-2 text-xl text-gray-700 whitespace-pre-line">3년 이내 초기창업기업 대상 최대 1억원 사업화 자금 지원</p>
                        <p class="mt-4 text-2xl text-black whitespace-pre-line font-bold">3. 창업도약패키지</p>
                        <p class="mt-2 text-xl text-gray-700 whitespace-pre-line">3~7년 도약기 기업 대상 최대 3억원 성장 지원</p>
                        <p class="mt-4 text-2xl text-black whitespace-pre-line font-bold">4. TIPS 및 청년창업사관학교</p>
                        <p class="mt-2 text-xl text-gray-700 whitespace-pre-line">기술창업 R&D 자금, 입주공간 및 사업화 지원</p>
                    </div>
                </div>
                <div class="relative subTextBoxwrap flex flex-wrap md:flex-nowrap">
                    <h2 class="mt-0 mb-4 text-2xl font-bold subtitle01 w-full md:w-1/5">지원절차</h2>
                    <div class="mt-4 md:mt-0 infoBoxWrap w-full md:w-4/5">
                        <ul class="flex justify-center list-inside" style="align-items: normal;">
                            <li class="w-1/4" style="font-weight: 400; color:#4F4F4F">
                                <span class="stepBox">STEP 1</span>
                                <p style="font-weight: 700;">창업 진단</p>
                                아이템 분석<br>역량 평가
                            </li>
                            <span style="align-items: center; display:flex">
                                <svg width="7" height="11" viewBox="0 0 7 11" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.18359 9.56666L5.48548 5.26478L1.18359 0.962891" stroke="#4F4F4F"
                                        stroke-width="1.43396" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </span>
                            <li class="w-1/4" style="font-weight: 400; color:#4F4F4F">
                                <span class="stepBox">STEP 2</span>
                                <p style="font-weight: 700;">사업 매칭</p>
                                적합 사업 선정<br>일정 관리
                            </li>
                            <span style="align-items: center; display:flex">
                                <svg width="7" height="11" viewBox="0 0 7 11" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.18359 9.56666L5.48548 5.26478L1.18359 0.962891" stroke="#4F4F4F"
                                        stroke-width="1.43396" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </span>
                            <li class="w-1/4" style="font-weight: 400; color:#4F4F4F">
                                <span class="stepBox">STEP 3</span>
                                <p style="font-weight: 700;">사업계획서</p>
                                작성 지도<br>자문
                            </li>
                            <span style="align-items: center; display:flex">
                                <svg width="7" height="11" viewBox="0 0 7 11" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.18359 9.56666L5.48548 5.26478L1.18359 0.962891" stroke="#4F4F4F"
                                        stroke-width="1.43396" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </span>
                            <li class="w-1/4" style="font-weight: 400; color:#4F4F4F">
                                <span class="stepBox">STEP 4</span>
                                <p style="font-weight: 700;">발표/사후</p>
                                발표 코칭<br>협약 지원
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="relative subTextBoxwrap flex flex-wrap md:flex-nowrap">
                    <h2 class="mt-0 mb-4 text-2xl font-bold subtitle01 w-full md:w-1/5">지원 혜택</h2>
                    <div class="">
                        <p class="text-2xl text-black whitespace-pre-line font-bold">1. 무료 사전상담</p>
                        <p class="mt-2 text-xl text-gray-700 whitespace-pre-line">아이템 적합성 및 지원사업 매칭</p>
                        <p class="mt-4 text-2xl text-black whitespace-pre-line font-bold">2. 사업계획서 작성 지도</p>
                        <p class="mt-2 text-xl text-gray-700 whitespace-pre-line">전문가 1:1 맞춤형 작성 자문</p>
                        <p class="mt-4 text-2xl text-black whitespace-pre-line font-bold">3. 발표 대비 코칭</p>
                        <p class="mt-2 text-xl text-gray-700 whitespace-pre-line">모의 면접 및 Q&A 완벽 대비</p>
                    </div>
                </div>
            </div>

            <!-- 탭2: 소상공인 경영개선 -->
            <div class="tab02 tabItems">
                <div class="sub_banner">
                    <div class="txt_con">
                        <p class="txt01">소상공인 경영개선</p>
                    </div>
                </div>
                <div class="relative subTextBoxwrap flex flex-wrap md:flex-nowrap">
                    <h2 class="mt-0 text-2xl font-bold subtitle01 w-full md:w-1/5">
                        <img src="../../img/small_biz_logo.svg" alt="소상공인 로고" style="width: 152px; height: 152px;">
                    </h2>
                    <div class="flex content-center flex-wrap">
                        <p class="text-3xl text-black whitespace-pre-line font-bold w-full">서비스 개요</p>
                        <p class="mt-2 text-xl text-gray-700 whitespace-pre-line">목적 : 소상공인의 경쟁력 강화와 지속 성장을 위해 매출 증대, 비용
                            절감, 마케팅 강화 등 실질적인 경영 개선을 지원합니다. 정부 지원사업과 연계하여 비용 부담을 줄이고 효과를 극대화합니다.</p>
                    </div>
                </div>
                <div class="relative subTextBoxwrap flex flex-wrap md:flex-nowrap">
                    <h2 class="mt-0 mb-4 text-2xl font-bold subtitle01 w-full md:w-1/5">지원대상</h2>
                    <div class="">
                        <p class="mt-2 text-xl text-gray-700 whitespace-pre-line">· 소상공인 (상시근로자 5인 미만 등)</p>
                        <p class="mt-2 text-xl text-gray-700 whitespace-pre-line">· 소기업 및 자영업자</p>
                        <p class="mt-2 text-xl text-gray-700 whitespace-pre-line">· 전통시장 및 상점가 상인</p>
                        <p class="mt-2 text-xl text-gray-700 whitespace-pre-line">· 프랜차이즈 가맹점</p>
                    </div>
                </div>
                <div class="relative subTextBoxwrap flex flex-wrap md:flex-nowrap">
                    <h2 class="mt-0 mb-4 text-2xl font-bold subtitle01 w-full md:w-1/5">서비스 종류</h2>
                    <div class="">
                        <p class="text-2xl text-black whitespace-pre-line font-bold">1. 경영안정/마케팅</p>
                        <p class="mt-2 text-xl text-gray-700 whitespace-pre-line">재무관리, 원가절감, 온라인 마케팅, SNS 홍보</p>
                        <p class="mt-4 text-2xl text-black whitespace-pre-line font-bold">2. 디지털 전환 지원</p>
                        <p class="mt-2 text-xl text-gray-700 whitespace-pre-line">키오스크, 스마트상점 기술 도입 및 운영</p>
                        <p class="mt-4 text-2xl text-black whitespace-pre-line font-bold">3. 상권분석/메뉴개발</p>
                        <p class="mt-2 text-xl text-gray-700 whitespace-pre-line">입지분석, 경쟁분석, 신메뉴 및 상품 개발</p>
                    </div>
                </div>
                <div class="relative subTextBoxwrap flex flex-wrap md:flex-nowrap">
                    <h2 class="mt-0 mb-4 text-2xl font-bold subtitle01 w-full md:w-1/5">지원절차</h2>
                    <div class="mt-4 md:mt-0 infoBoxWrap w-full md:w-4/5">
                        <ul class="flex justify-center list-inside" style="align-items: normal;">
                            <li class="w-1/4" style="font-weight: 400; color:#4F4F4F">
                                <span class="stepBox">STEP 1</span>
                                <p style="font-weight: 700;">현황 진단</p>
                                매장 방문<br>실태 분석
                            </li>
                            <span style="align-items: center; display:flex">
                                <svg width="7" height="11" viewBox="0 0 7 11" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.18359 9.56666L5.48548 5.26478L1.18359 0.962891" stroke="#4F4F4F"
                                        stroke-width="1.43396" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </span>
                            <li class="w-1/4" style="font-weight: 400; color:#4F4F4F">
                                <span class="stepBox">STEP 2</span>
                                <p style="font-weight: 700;">과제 도출</p>
                                문제점 발굴<br>개선안 선정
                            </li>
                            <span style="align-items: center; display:flex">
                                <svg width="7" height="11" viewBox="0 0 7 11" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.18359 9.56666L5.48548 5.26478L1.18359 0.962891" stroke="#4F4F4F"
                                        stroke-width="1.43396" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </span>
                            <li class="w-1/4" style="font-weight: 400; color:#4F4F4F">
                                <span class="stepBox">STEP 3</span>
                                <p style="font-weight: 700;">개선 실행</p>
                                솔루션 제공<br>현장 적용
                            </li>
                            <span style="align-items: center; display:flex">
                                <svg width="7" height="11" viewBox="0 0 7 11" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.18359 9.56666L5.48548 5.26478L1.18359 0.962891" stroke="#4F4F4F"
                                        stroke-width="1.43396" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </span>
                            <li class="w-1/4" style="font-weight: 400; color:#4F4F4F">
                                <span class="stepBox">STEP 4</span>
                                <p style="font-weight: 700;">성과/사후</p>
                                성과 점검<br>지속 관리
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="relative subTextBoxwrap flex flex-wrap md:flex-nowrap">
                    <h2 class="mt-0 mb-4 text-2xl font-bold subtitle01 w-full md:w-1/5">지원 혜택</h2>
                    <div class="">
                        <p class="text-2xl text-black whitespace-pre-line font-bold">1. 현장 맞춤 컨설팅</p>
                        <p class="mt-2 text-xl text-gray-700 whitespace-pre-line">전문가가 직접 찾아가는 현장 밀착지원</p>
                        <p class="mt-4 text-2xl text-black whitespace-pre-line font-bold">2. 비용 지원 연계</p>
                        <p class="mt-2 text-xl text-gray-700 whitespace-pre-line">정부지원사업 연계로 비용 부담 완화</p>
                        <p class="mt-4 text-2xl text-black whitespace-pre-line font-bold">3. 매출 향상</p>
                        <p class="mt-2 text-xl text-gray-700 whitespace-pre-line">실질적 매출 증대 및 경쟁력 강화</p>
                    </div>
                </div>
            </div>

            <!-- 탭3: 정책자금 연계 -->
            <div class="tab03 tabItems">
                <div class="sub_banner">
                    <div class="txt_con">
                        <p class="txt01">정책자금 연계</p>
                    </div>
                </div>
                <div class="relative subTextBoxwrap flex flex-wrap md:flex-nowrap">
                    <h2 class="mt-0 text-2xl font-bold subtitle01 w-full md:w-1/5">
                        <img src="../../img/policy_fund_logo.svg" alt="정책자금 로고" style="width: 152px; height: 152px;">
                    </h2>
                    <div class="flex content-center flex-wrap">
                        <p class="text-3xl text-black whitespace-pre-line font-bold w-full">서비스 개요</p>
                        <p class="mt-2 text-xl text-gray-700 whitespace-pre-line">목적 : 중소기업 및 소상공인에게 최적화된 정부 정책자금을 분석하고
                            매칭합니다. 자금 용도, 신용등급, 기업 상황을 고려하여 승인 가능성을 높이고, 신청부터 수령까지 전 과정을 지원합니다.</p>
                    </div>
                </div>
                <div class="relative subTextBoxwrap flex flex-wrap md:flex-nowrap">
                    <h2 class="mt-0 mb-4 text-2xl font-bold subtitle01 w-full md:w-1/5">지원대상</h2>
                    <div class="">
                        <p class="mt-2 text-xl text-gray-700 whitespace-pre-line">· 중소기업 및 소상공인</p>
                        <p class="mt-2 text-xl text-gray-700 whitespace-pre-line">· 창업기업 (7년 이내)</p>
                        <p class="mt-2 text-xl text-gray-700 whitespace-pre-line">· 혁신성장 기업 (이노비즈, 메인비즈 등)</p>
                        <p class="mt-2 text-xl text-gray-700 whitespace-pre-line">· 수출기업 및 해외진출 기업</p>
                    </div>
                </div>
                <div class="relative subTextBoxwrap flex flex-wrap md:flex-nowrap">
                    <h2 class="mt-0 mb-4 text-2xl font-bold subtitle01 w-full md:w-1/5">서비스 종류</h2>
                    <div class="">
                        <p class="text-2xl text-black whitespace-pre-line font-bold">1. 정책자금 대출</p>
                        <p class="mt-2 text-xl text-gray-700 whitespace-pre-line">중진공/소진공 직접대출 및 대리대출, 지자체 육성자금</p>
                        <p class="mt-4 text-2xl text-black whitespace-pre-line font-bold">2. 신용보증 연계</p>
                        <p class="mt-2 text-xl text-gray-700 whitespace-pre-line">신보, 기보 보증서 발급 및 은행 대출 연계</p>
                        <p class="mt-4 text-2xl text-black whitespace-pre-line font-bold">3. 기술금융/수출금융</p>
                        <p class="mt-2 text-xl text-gray-700 whitespace-pre-line">TCB 대출, 기술보증, 무역금융 지원</p>
                    </div>
                </div>
                <div class="relative subTextBoxwrap flex flex-wrap md:flex-nowrap">
                    <h2 class="mt-0 mb-4 text-2xl font-bold subtitle01 w-full md:w-1/5">지원절차</h2>
                    <div class="mt-4 md:mt-0 infoBoxWrap w-full md:w-4/5">
                        <ul class="flex justify-center list-inside" style="align-items: normal;">
                            <li class="w-1/4" style="font-weight: 400; color:#4F4F4F">
                                <span class="stepBox">STEP 1</span>
                                <p style="font-weight: 700;">자금 진단</p>
                                재무 검토<br>수요 분석
                            </li>
                            <span style="align-items: center; display:flex">
                                <svg width="7" height="11" viewBox="0 0 7 11" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.18359 9.56666L5.48548 5.26478L1.18359 0.962891" stroke="#4F4F4F"
                                        stroke-width="1.43396" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </span>
                            <li class="w-1/4" style="font-weight: 400; color:#4F4F4F">
                                <span class="stepBox">STEP 2</span>
                                <p style="font-weight: 700;">자금 매칭</p>
                                최적 자금<br>선정
                            </li>
                            <span style="align-items: center; display:flex">
                                <svg width="7" height="11" viewBox="0 0 7 11" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.18359 9.56666L5.48548 5.26478L1.18359 0.962891" stroke="#4F4F4F"
                                        stroke-width="1.43396" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </span>
                            <li class="w-1/4" style="font-weight: 400; color:#4F4F4F">
                                <span class="stepBox">STEP 3</span>
                                <p style="font-weight: 700;">서류/신청</p>
                                서류 작성<br>심사 대응
                            </li>
                            <span style="align-items: center; display:flex">
                                <svg width="7" height="11" viewBox="0 0 7 11" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.18359 9.56666L5.48548 5.26478L1.18359 0.962891" stroke="#4F4F4F"
                                        stroke-width="1.43396" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </span>
                            <li class="w-1/4" style="font-weight: 400; color:#4F4F4F">
                                <span class="stepBox">STEP 4</span>
                                <p style="font-weight: 700;">실행/관리</p>
                                대출 실행<br>약정 체결
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="relative subTextBoxwrap flex flex-wrap md:flex-nowrap">
                    <h2 class="mt-0 mb-4 text-2xl font-bold subtitle01 w-full md:w-1/5">지원 혜택</h2>
                    <div class="">
                        <p class="text-2xl text-black whitespace-pre-line font-bold">1. 맞춤 자금 분석</p>
                        <p class="mt-2 text-xl text-gray-700 whitespace-pre-line">100여개 정책자금 중 최적의 자금 매칭</p>
                        <p class="mt-4 text-2xl text-black whitespace-pre-line font-bold">2. 서류 및 심사 대행</p>
                        <p class="mt-2 text-xl text-gray-700 whitespace-pre-line">복잡한 신청 서류 작성 및 현장실사 대응 지원</p>
                    </div>
                </div>
            </div>

            <!-- 탭4: 사업전환 컨설팅 -->
            <div class="tab04 tabItems">
                <div class="sub_banner">
                    <div class="txt_con">
                        <p class="txt01">사업전환 컨설팅</p>
                    </div>
                </div>
                <div class="relative subTextBoxwrap flex flex-wrap md:flex-nowrap">
                    <h2 class="mt-0 text-2xl font-bold subtitle01 w-full md:w-1/5">
                        <img src="../../img/biz_transform_logo.svg" alt="사업전환 로고" style="width: 152px; height: 152px;">
                    </h2>
                    <div class="flex content-center flex-wrap">
                        <p class="text-3xl text-black whitespace-pre-line font-bold w-full">서비스 개요</p>
                        <p class="mt-2 text-xl text-gray-700 whitespace-pre-line">목적 : 경영 위기 극복 또는 신성장 동력 확보를 위해 업종 전환,
                            사업 다각화, 구조조정 등 비즈니스 재편을 지원합니다. 정부 사업재편 승인을 통해 세제, 금융 등 다양한 혜택을 연계해 드립니다.</p>
                    </div>
                </div>
                <div class="relative subTextBoxwrap flex flex-wrap md:flex-nowrap">
                    <h2 class="mt-0 mb-4 text-2xl font-bold subtitle01 w-full md:w-1/5">지원대상</h2>
                    <div class="">
                        <p class="mt-2 text-xl text-gray-700 whitespace-pre-line">· 경영위기 및 사양산업 영위 기업</p>
                        <p class="mt-2 text-xl text-gray-700 whitespace-pre-line">· 신성장 분야 진출 희망 기업</p>
                        <p class="mt-2 text-xl text-gray-700 whitespace-pre-line">· 업종 전환 및 사업 다각화 계획 기업</p>
                    </div>
                </div>
                <div class="relative subTextBoxwrap flex flex-wrap md:flex-nowrap">
                    <h2 class="mt-0 mb-4 text-2xl font-bold subtitle01 w-full md:w-1/5">서비스 종류</h2>
                    <div class="">
                        <p class="text-2xl text-black whitespace-pre-line font-bold">1. 사업재편 전략</p>
                        <p class="mt-2 text-xl text-gray-700 whitespace-pre-line">업종 전환, 사업 다각화, 구조조정 전략 수립</p>
                        <p class="mt-4 text-2xl text-black whitespace-pre-line font-bold">2. 사업재편 승인</p>
                        <p class="mt-2 text-xl text-gray-700 whitespace-pre-line">정부 사업재편계획 승인 신청 및 재창업, M&A 지원</p>
                    </div>
                </div>
                <div class="relative subTextBoxwrap flex flex-wrap md:flex-nowrap">
                    <h2 class="mt-0 mb-4 text-2xl font-bold subtitle01 w-full md:w-1/5">지원절차</h2>
                    <div class="mt-4 md:mt-0 infoBoxWrap w-full md:w-4/5">
                        <ul class="flex justify-center list-inside" style="align-items: normal;">
                            <li class="w-1/4" style="font-weight: 400; color:#4F4F4F">
                                <span class="stepBox">STEP 1</span>
                                <p style="font-weight: 700;">현황 분석</p>
                                위기 요인<br>진단
                            </li>
                            <span style="align-items: center; display:flex">
                                <svg width="7" height="11" viewBox="0 0 7 11" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.18359 9.56666L5.48548 5.26478L1.18359 0.962891" stroke="#4F4F4F"
                                        stroke-width="1.43396" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </span>
                            <li class="w-1/4" style="font-weight: 400; color:#4F4F4F">
                                <span class="stepBox">STEP 2</span>
                                <p style="font-weight: 700;">전환 전략</p>
                                신사업 탐색<br>방향 설정
                            </li>
                            <span style="align-items: center; display:flex">
                                <svg width="7" height="11" viewBox="0 0 7 11" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.18359 9.56666L5.48548 5.26478L1.18359 0.962891" stroke="#4F4F4F"
                                        stroke-width="1.43396" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </span>
                            <li class="w-1/4" style="font-weight: 400; color:#4F4F4F">
                                <span class="stepBox">STEP 3</span>
                                <p style="font-weight: 700;">사업계획</p>
                                승인 신청<br>계획 수립
                            </li>
                            <span style="align-items: center; display:flex">
                                <svg width="7" height="11" viewBox="0 0 7 11" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.18359 9.56666L5.48548 5.26478L1.18359 0.962891" stroke="#4F4F4F"
                                        stroke-width="1.43396" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </span>
                            <li class="w-1/4" style="font-weight: 400; color:#4F4F4F">
                                <span class="stepBox">STEP 4</span>
                                <p style="font-weight: 700;">실행/안정</p>
                                전환 실행<br>모니터링
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="relative subTextBoxwrap flex flex-wrap md:flex-nowrap">
                    <h2 class="mt-0 mb-4 text-2xl font-bold subtitle01 w-full md:w-1/5">지원 혜택</h2>
                    <div class="">
                        <p class="text-2xl text-black whitespace-pre-line font-bold">1. 다양한 인센티브</p>
                        <p class="mt-2 text-xl text-gray-700 whitespace-pre-line">세제 감면, 금융 지원, 컨설팅 및 교육 혜택</p>
                        <p class="mt-4 text-2xl text-black whitespace-pre-line font-bold">2. 성공적 사업 전환</p>
                        <p class="mt-2 text-xl text-gray-700 whitespace-pre-line">리스크 최소화 및 신성장 기회 창출</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        gsap.registerPlugin(ScrollTrigger, ScrollToPlugin);

        // 탭 기능
        const tabs = document.querySelectorAll('.page_tab span');
        const tabContents = document.querySelectorAll('.tabItems');

        tabs.forEach((tab, index) => {
            tab.addEventListener('click', () => {
                // 비활성화
                tabs.forEach(t => t.classList.remove('active'));
                tabContents.forEach(c => c.classList.remove('tabActive'));

                // 활성화
                tab.classList.add('active');
                tabContents[index].classList.add('tabActive');

                // 스크롤 이동
                gsap.to(window, {
                    duration: 0.5,
                    scrollTo: { y: tabContents[index], offsetY: 100 }
                });
            });
        });

        // 서브 텍스트 애니메이션 (sub02_02.php와 동일)
        gsap.utils.toArray('.subTextBoxwrap').forEach(box => {
            gsap.from(box, {
                scrollTrigger: {
                    trigger: box,
                    start: 'top 85%',
                    toggleActions: 'play none none none'
                },
                opacity: 0,
                y: 30,
                duration: 0.6
            });
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

    .page_tab {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 10px;
    }

    .page_tab span {
        padding: 12px 24px;
        background: white;
        border: 1px solid #ddd;
        border-radius: 50px;
        cursor: pointer;
        transition: all 0.3s ease;
        font-weight: 500;
        font-size: 1.1rem;
        color: #666;
    }

    .page_tab span:hover {
        border-color: #2563eb;
        color: #2563eb;
    }

    .page_tab span.active {
        background: #2563eb;
        color: white;
        border-color: #2563eb;
    }

    /* sub02_02.php 스타일 가져오기 */
    .sub_banner {
        width: 100%;
        margin-bottom: 2rem;
    }

    .txt_con {
        border-left: 5px solid #2563eb;
        padding-left: 1rem;
    }

    .txt01 {
        font-size: 1.5rem;
        font-weight: 700;
        color: #2563eb;
    }

    .subtitle01 {
        color: #111;
    }

    .subTextBoxwrap {
        padding: 3rem 0;
        border-bottom: 1px solid #eee;
    }

    .subTextBoxwrap:last-child {
        border-bottom: none;
    }

    .stepBox {
        display: inline-block;
        background: #2563eb;
        color: #fff;
        padding: 0.2rem 0.8rem;
        border-radius: 1rem;
        font-size: 0.8rem;
        margin-bottom: 0.5rem;
    }

    .infoBoxWrap ul {
        gap: 1rem;
    }
</style>

<?php
include_once(G5_PATH . '/tail.php');
?>