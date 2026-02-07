<?php

include_once('../../common.php');
// 페이지 제목
$g5['title'] = "인증";
include_once(G5_PATH . '/head.php');

?>

<section class="ppbSpWrap py-10 ">
    <div class="container mx-auto px-0">
        <div class="">
            <div class="w-full">
                <div class="subTitle">
                    <h2 class=" text-center">인증</h2>
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

    <!-- 탭 메뉴 -->
    <div class="page_tab my-16">
        <span class="active">ISO 인증</span>
        <span class="">벤처기업 인증</span>
        <span class="">이노비즈 인증</span>
        <span class="">메인비즈 인증</span>
        <span class="">기업부설연구소</span>
    </div>

    <!-- ===== 탭1: ISO 인증 ===== -->
    <div class="tab01 tabItems tabActive">
        <div class="tab_header my-24">
            <div class="flex items-center gap-8">
                <img src="../../img/iso_cert_logo.svg" alt="ISO 인증" class="w-32 h-32">
                <div>
                    <h3 class="text-3xl font-bold text-blue-600">ISO 인증</h3>
                    <p class="text-gray-600 mt-2">국제표준화기구(ISO) 인증을 통한 글로벌 경쟁력 확보</p>
                </div>
            </div>
        </div>

        <div class="content_box">
            <h4 class="text-xl font-bold mb-4 border-b-2 border-blue-500 pb-2">서비스 개요</h4>
            <p class="leading-relaxed text-gray-700">
                ISO 인증 컨설팅은 품질경영시스템(ISO 9001), 환경경영시스템(ISO 14001), 안전보건경영시스템(ISO 45001) 등
                국제표준 인증 획득을 지원합니다. 체계적인 경영시스템 구축을 통해 기업의 글로벌 경쟁력을 강화하고,
                고객 신뢰도 향상 및 해외시장 진출의 기반을 마련해 드립니다.
            </p>
        </div>

        <div class="content_box mt-8">
            <h4 class="text-xl font-bold mb-4 border-b-2 border-blue-500 pb-2">지원대상</h4>
            <ul class="list-disc pl-6 space-y-2 text-gray-700">
                <li>품질경영시스템 구축이 필요한 기업</li>
                <li>해외시장 진출 및 수출을 준비하는 기업</li>
                <li>공공기관 입찰 참여를 위한 인증이 필요한 기업</li>
                <li>고객사 요구에 의해 ISO 인증이 필요한 기업</li>
                <li>경영시스템 개선 및 체계화가 필요한 기업</li>
            </ul>
        </div>

        <div class="content_box mt-8">
            <h4 class="text-xl font-bold mb-4 border-b-2 border-blue-500 pb-2">서비스 종류</h4>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="bg-blue-50 p-4 rounded-lg">
                    <h5 class="font-bold text-blue-700">ISO 9001 (품질경영)</h5>
                    <p class="text-sm text-gray-600 mt-2">품질경영시스템 국제표준, 고객만족 및 품질 향상</p>
                </div>
                <div class="bg-blue-50 p-4 rounded-lg">
                    <h5 class="font-bold text-blue-700">ISO 14001 (환경경영)</h5>
                    <p class="text-sm text-gray-600 mt-2">환경경영시스템, 환경오염 예방 및 지속가능경영</p>
                </div>
                <div class="bg-blue-50 p-4 rounded-lg">
                    <h5 class="font-bold text-blue-700">ISO 45001 (안전보건)</h5>
                    <p class="text-sm text-gray-600 mt-2">안전보건경영시스템, 산업재해 예방</p>
                </div>
                <div class="bg-blue-50 p-4 rounded-lg">
                    <h5 class="font-bold text-blue-700">ISO 27001 (정보보안)</h5>
                    <p class="text-sm text-gray-600 mt-2">정보보안경영시스템, 정보자산 보호</p>
                </div>
                <div class="bg-blue-50 p-4 rounded-lg">
                    <h5 class="font-bold text-blue-700">ISO 22000 (식품안전)</h5>
                    <p class="text-sm text-gray-600 mt-2">식품안전경영시스템, HACCP 기반</p>
                </div>
                <div class="bg-blue-50 p-4 rounded-lg">
                    <h5 class="font-bold text-blue-700">IATF 16949 (자동차)</h5>
                    <p class="text-sm text-gray-600 mt-2">자동차산업 품질경영시스템</p>
                </div>
            </div>
        </div>

        <div class="content_box mt-8">
            <h4 class="text-xl font-bold mb-4 border-b-2 border-blue-500 pb-2">지원절차</h4>
            <div class="flex flex-wrap justify-center gap-4 my-8">
                <div class="step_box bg-blue-100 border-blue-500">
                    <span class="step_num bg-blue-500">STEP 1</span>
                    <p class="step_title">현황 분석</p>
                    <p class="step_desc">경영시스템 진단<br>GAP 분석</p>
                </div>
                <div class="step_arrow text-blue-500">→</div>
                <div class="step_box bg-blue-100 border-blue-500">
                    <span class="step_num bg-blue-500">STEP 2</span>
                    <p class="step_title">시스템 구축</p>
                    <p class="step_desc">매뉴얼/절차서 작성<br>프로세스 정립</p>
                </div>
                <div class="step_arrow text-blue-500">→</div>
                <div class="step_box bg-blue-100 border-blue-500">
                    <span class="step_num bg-blue-500">STEP 3</span>
                    <p class="step_title">교육/실행</p>
                    <p class="step_desc">임직원 교육<br>시스템 운영</p>
                </div>
                <div class="step_arrow text-blue-500">→</div>
                <div class="step_box bg-blue-100 border-blue-500">
                    <span class="step_num bg-blue-500">STEP 4</span>
                    <p class="step_title">내부심사</p>
                    <p class="step_desc">내부심사 실시<br>시정조치</p>
                </div>
                <div class="step_arrow text-blue-500">→</div>
                <div class="step_box bg-blue-100 border-blue-500">
                    <span class="step_num bg-blue-500">STEP 5</span>
                    <p class="step_title">인증심사</p>
                    <p class="step_desc">인증기관 심사<br>인증서 발급</p>
                </div>
            </div>
        </div>

        <div class="content_box mt-8">
            <h4 class="text-xl font-bold mb-4 border-b-2 border-blue-500 pb-2">지원 혜택</h4>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="text-center p-4 border rounded-lg">
                    <div class="text-3xl mb-2">🌐</div>
                    <h5 class="font-bold">글로벌 신뢰도</h5>
                    <p class="text-sm text-gray-600">국제표준 인증으로 해외진출 기반</p>
                </div>
                <div class="text-center p-4 border rounded-lg">
                    <div class="text-3xl mb-2">📋</div>
                    <h5 class="font-bold">입찰 가점</h5>
                    <p class="text-sm text-gray-600">공공조달, 대기업 납품 시 가점</p>
                </div>
                <div class="text-center p-4 border rounded-lg">
                    <div class="text-3xl mb-2">⚙️</div>
                    <h5 class="font-bold">경영효율화</h5>
                    <p class="text-sm text-gray-600">체계적 프로세스로 효율성 향상</p>
                </div>
            </div>
        </div>

        <div class="content_box mt-8">
            <h4 class="text-xl font-bold mb-4 border-b-2 border-blue-500 pb-2">컨설팅 업무 및 절차</h4>
            <table class="w-full border-collapse border">
                <thead class="bg-blue-500 text-white">
                    <tr>
                        <th class="border p-3">단계</th>
                        <th class="border p-3">업무 내용</th>
                        <th class="border p-3">산출물</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border p-3 text-center font-bold">1단계</td>
                        <td class="border p-3">현황분석 및 GAP 분석</td>
                        <td class="border p-3">진단보고서</td>
                    </tr>
                    <tr class="bg-gray-50">
                        <td class="border p-3 text-center font-bold">2단계</td>
                        <td class="border p-3">경영시스템 문서화</td>
                        <td class="border p-3">매뉴얼, 절차서</td>
                    </tr>
                    <tr>
                        <td class="border p-3 text-center font-bold">3단계</td>
                        <td class="border p-3">임직원 교육 및 시스템 운영</td>
                        <td class="border p-3">교육자료, 운영기록</td>
                    </tr>
                    <tr class="bg-gray-50">
                        <td class="border p-3 text-center font-bold">4단계</td>
                        <td class="border p-3">내부심사 및 경영검토</td>
                        <td class="border p-3">심사보고서</td>
                    </tr>
                    <tr>
                        <td class="border p-3 text-center font-bold">5단계</td>
                        <td class="border p-3">인증심사 대응 및 인증 취득</td>
                        <td class="border p-3">ISO 인증서</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- ===== 탭2: 벤처기업 인증 ===== -->
    <div class="tab02 tabItems">
        <div class="tab_header my-24">
            <div class="flex items-center gap-8">
                <img src="../../img/venture_cert_logo.svg" alt="벤처기업 인증" class="w-32 h-32">
                <div>
                    <h3 class="text-3xl font-bold text-orange-600">벤처기업 인증</h3>
                    <p class="text-gray-600 mt-2">혁신성장 기업을 위한 벤처기업 확인 및 각종 지원 혜택</p>
                </div>
            </div>
        </div>

        <div class="content_box">
            <h4 class="text-xl font-bold mb-4 border-b-2 border-orange-500 pb-2">서비스 개요</h4>
            <p class="leading-relaxed text-gray-700">
                벤처기업 인증(확인) 컨설팅은 기술성과 성장성이 우수한 중소기업이 벤처기업으로 확인받을 수 있도록
                지원합니다. 벤처투자유형, 연구개발유형, 혁신성장유형 등 기업 특성에 맞는 유형을 선정하여
                벤처확인 신청부터 취득까지 전 과정을 체계적으로 지원합니다.
            </p>
        </div>

        <div class="content_box mt-8">
            <h4 class="text-xl font-bold mb-4 border-b-2 border-orange-500 pb-2">지원대상</h4>
            <ul class="list-disc pl-6 space-y-2 text-gray-700">
                <li>기술혁신형 중소기업</li>
                <li>벤처투자를 받은 기업</li>
                <li>연구개발 활동을 수행하는 기업</li>
                <li>기술보증 또는 기술신용대출을 받은 기업</li>
                <li>혁신적인 비즈니스 모델을 보유한 기업</li>
            </ul>
        </div>

        <div class="content_box mt-8">
            <h4 class="text-xl font-bold mb-4 border-b-2 border-orange-500 pb-2">서비스 종류</h4>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="bg-orange-50 p-4 rounded-lg">
                    <h5 class="font-bold text-orange-700">벤처투자유형</h5>
                    <p class="text-sm text-gray-600 mt-2">벤처투자기관으로부터 5천만원 이상 투자받은 기업</p>
                </div>
                <div class="bg-orange-50 p-4 rounded-lg">
                    <h5 class="font-bold text-orange-700">연구개발유형</h5>
                    <p class="text-sm text-gray-600 mt-2">기업부설연구소 보유 및 R&D 매출비율 충족 기업</p>
                </div>
                <div class="bg-orange-50 p-4 rounded-lg">
                    <h5 class="font-bold text-orange-700">혁신성장유형</h5>
                    <p class="text-sm text-gray-600 mt-2">기술보증기금 보증 또는 기술신용대출 기업</p>
                </div>
                <div class="bg-orange-50 p-4 rounded-lg">
                    <h5 class="font-bold text-orange-700">예비벤처기업</h5>
                    <p class="text-sm text-gray-600 mt-2">법인설립 전 또는 설립 6개월 이내 예비창업자</p>
                </div>
            </div>
        </div>

        <div class="content_box mt-8">
            <h4 class="text-xl font-bold mb-4 border-b-2 border-orange-500 pb-2">지원절차</h4>
            <div class="flex flex-wrap justify-center gap-4 my-8">
                <div class="step_box bg-orange-100 border-orange-500">
                    <span class="step_num bg-orange-500">STEP 1</span>
                    <p class="step_title">자격 검토</p>
                    <p class="step_desc">확인유형 선정<br>요건 충족 검토</p>
                </div>
                <div class="step_arrow text-orange-500">→</div>
                <div class="step_box bg-orange-100 border-orange-500">
                    <span class="step_num bg-orange-500">STEP 2</span>
                    <p class="step_title">서류 준비</p>
                    <p class="step_desc">필수서류 준비<br>기술사업계획서</p>
                </div>
                <div class="step_arrow text-orange-500">→</div>
                <div class="step_box bg-orange-100 border-orange-500">
                    <span class="step_num bg-orange-500">STEP 3</span>
                    <p class="step_title">온라인 신청</p>
                    <p class="step_desc">벤처인 시스템<br>신청서 제출</p>
                </div>
                <div class="step_arrow text-orange-500">→</div>
                <div class="step_box bg-orange-100 border-orange-500">
                    <span class="step_num bg-orange-500">STEP 4</span>
                    <p class="step_title">기술평가</p>
                    <p class="step_desc">기술성/사업성<br>평가 대응</p>
                </div>
                <div class="step_arrow text-orange-500">→</div>
                <div class="step_box bg-orange-100 border-orange-500">
                    <span class="step_num bg-orange-500">STEP 5</span>
                    <p class="step_title">확인서 발급</p>
                    <p class="step_desc">벤처기업확인서<br>발급 완료</p>
                </div>
            </div>
        </div>

        <div class="content_box mt-8">
            <h4 class="text-xl font-bold mb-4 border-b-2 border-orange-500 pb-2">지원 혜택</h4>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="text-center p-4 border rounded-lg">
                    <div class="text-3xl mb-2">💰</div>
                    <h5 class="font-bold">세제 혜택</h5>
                    <p class="text-sm text-gray-600">법인세, 소득세, 취득세 감면</p>
                </div>
                <div class="text-center p-4 border rounded-lg">
                    <div class="text-3xl mb-2">🏦</div>
                    <h5 class="font-bold">금융 지원</h5>
                    <p class="text-sm text-gray-600">정책자금, 보증 우대</p>
                </div>
                <div class="text-center p-4 border rounded-lg">
                    <div class="text-3xl mb-2">👨‍💼</div>
                    <h5 class="font-bold">인력 지원</h5>
                    <p class="text-sm text-gray-600">스톡옵션 특례, 병역특례</p>
                </div>
            </div>
        </div>

        <div class="content_box mt-8">
            <h4 class="text-xl font-bold mb-4 border-b-2 border-orange-500 pb-2">컨설팅 업무 및 절차</h4>
            <table class="w-full border-collapse border">
                <thead class="bg-orange-500 text-white">
                    <tr>
                        <th class="border p-3">단계</th>
                        <th class="border p-3">업무 내용</th>
                        <th class="border p-3">산출물</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border p-3 text-center font-bold">1단계</td>
                        <td class="border p-3">기업 현황 분석 및 확인유형 선정</td>
                        <td class="border p-3">진단보고서</td>
                    </tr>
                    <tr class="bg-gray-50">
                        <td class="border p-3 text-center font-bold">2단계</td>
                        <td class="border p-3">기술사업계획서 작성</td>
                        <td class="border p-3">기술사업계획서</td>
                    </tr>
                    <tr>
                        <td class="border p-3 text-center font-bold">3단계</td>
                        <td class="border p-3">벤처인 시스템 신청 대행</td>
                        <td class="border p-3">신청서류 일체</td>
                    </tr>
                    <tr class="bg-gray-50">
                        <td class="border p-3 text-center font-bold">4단계</td>
                        <td class="border p-3">기술평가 대응 지원</td>
                        <td class="border p-3">평가 대응자료</td>
                    </tr>
                    <tr>
                        <td class="border p-3 text-center font-bold">5단계</td>
                        <td class="border p-3">확인서 발급 및 사후관리</td>
                        <td class="border p-3">벤처확인서</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- ===== 탭3: 이노비즈 인증 ===== -->
    <div class="tab03 tabItems">
        <div class="tab_header my-24">
            <div class="flex items-center gap-8">
                <img src="../../img/innobiz_logo.svg" alt="이노비즈 인증" class="w-32 h-32">
                <div>
                    <h3 class="text-3xl font-bold text-purple-600">이노비즈(Inno-Biz) 인증</h3>
                    <p class="text-gray-600 mt-2">기술혁신형 중소기업 인증을 통한 기술경쟁력 강화</p>
                </div>
            </div>
        </div>

        <div class="content_box">
            <h4 class="text-xl font-bold mb-4 border-b-2 border-purple-500 pb-2">서비스 개요</h4>
            <p class="leading-relaxed text-gray-700">
                이노비즈(Inno-Biz) 인증은 기술 우위를 바탕으로 경쟁력을 확보한 기술혁신형 중소기업에게 부여하는 인증입니다.
                중소벤처기업부에서 시행하며, 기술혁신시스템 평가를 통해 기술경영 역량이 우수한 기업을 선별합니다.
                이노비즈 인증 획득을 통해 정부 지원사업 가점, 금융 우대 등 다양한 혜택을 받을 수 있습니다.
            </p>
        </div>

        <div class="content_box mt-8">
            <h4 class="text-xl font-bold mb-4 border-b-2 border-purple-500 pb-2">지원대상</h4>
            <ul class="list-disc pl-6 space-y-2 text-gray-700">
                <li>업력 3년 이상의 중소기업</li>
                <li>기술개발 활동을 수행하는 기업</li>
                <li>R&D 투자 비율이 높은 기업</li>
                <li>특허, 실용신안 등 지식재산권 보유 기업</li>
                <li>기술혁신 경영시스템을 갖춘 기업</li>
            </ul>
        </div>

        <div class="content_box mt-8">
            <h4 class="text-xl font-bold mb-4 border-b-2 border-purple-500 pb-2">서비스 종류</h4>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="bg-purple-50 p-4 rounded-lg">
                    <h5 class="font-bold text-purple-700">이노비즈 신규 인증</h5>
                    <p class="text-sm text-gray-600 mt-2">처음으로 이노비즈 인증을 신청하는 기업 지원</p>
                </div>
                <div class="bg-purple-50 p-4 rounded-lg">
                    <h5 class="font-bold text-purple-700">이노비즈 갱신 인증</h5>
                    <p class="text-sm text-gray-600 mt-2">기존 인증 만료 전 갱신 신청 지원 (3년 주기)</p>
                </div>
                <div class="bg-purple-50 p-4 rounded-lg">
                    <h5 class="font-bold text-purple-700">기술혁신시스템 구축</h5>
                    <p class="text-sm text-gray-600 mt-2">기술혁신역량 강화를 위한 시스템 구축 컨설팅</p>
                </div>
                <div class="bg-purple-50 p-4 rounded-lg">
                    <h5 class="font-bold text-purple-700">기술경영 진단</h5>
                    <p class="text-sm text-gray-600 mt-2">기술경영 현황 분석 및 개선방안 도출</p>
                </div>
            </div>
        </div>

        <div class="content_box mt-8">
            <h4 class="text-xl font-bold mb-4 border-b-2 border-purple-500 pb-2">지원절차</h4>
            <div class="flex flex-wrap justify-center gap-4 my-8">
                <div class="step_box bg-purple-100 border-purple-500">
                    <span class="step_num bg-purple-500">STEP 1</span>
                    <p class="step_title">자격 검토</p>
                    <p class="step_desc">인증요건 검토<br>기술역량 분석</p>
                </div>
                <div class="step_arrow text-purple-500">→</div>
                <div class="step_box bg-purple-100 border-purple-500">
                    <span class="step_num bg-purple-500">STEP 2</span>
                    <p class="step_title">시스템 구축</p>
                    <p class="step_desc">기술혁신시스템<br>문서화</p>
                </div>
                <div class="step_arrow text-purple-500">→</div>
                <div class="step_box bg-purple-100 border-purple-500">
                    <span class="step_num bg-purple-500">STEP 3</span>
                    <p class="step_title">온라인 신청</p>
                    <p class="step_desc">이노비즈넷<br>신청서 제출</p>
                </div>
                <div class="step_arrow text-purple-500">→</div>
                <div class="step_box bg-purple-100 border-purple-500">
                    <span class="step_num bg-purple-500">STEP 4</span>
                    <p class="step_title">기술평가</p>
                    <p class="step_desc">현장평가<br>기술성 검증</p>
                </div>
                <div class="step_arrow text-purple-500">→</div>
                <div class="step_box bg-purple-100 border-purple-500">
                    <span class="step_num bg-purple-500">STEP 5</span>
                    <p class="step_title">인증 취득</p>
                    <p class="step_desc">인증서 발급<br>사후관리</p>
                </div>
            </div>
        </div>

        <div class="content_box mt-8">
            <h4 class="text-xl font-bold mb-4 border-b-2 border-purple-500 pb-2">지원 혜택</h4>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="text-center p-4 border rounded-lg">
                    <div class="text-3xl mb-2">📈</div>
                    <h5 class="font-bold">정책자금 우대</h5>
                    <p class="text-sm text-gray-600">중진공 정책자금 금리 우대</p>
                </div>
                <div class="text-center p-4 border rounded-lg">
                    <div class="text-3xl mb-2">🏆</div>
                    <h5 class="font-bold">지원사업 가점</h5>
                    <p class="text-sm text-gray-600">R&D 지원사업 선정 시 가점</p>
                </div>
                <div class="text-center p-4 border rounded-lg">
                    <div class="text-3xl mb-2">🎯</div>
                    <h5 class="font-bold">공공조달 우대</h5>
                    <p class="text-sm text-gray-600">조달청 입찰 시 가점 부여</p>
                </div>
            </div>
        </div>

        <div class="content_box mt-8">
            <h4 class="text-xl font-bold mb-4 border-b-2 border-purple-500 pb-2">컨설팅 업무 및 절차</h4>
            <table class="w-full border-collapse border">
                <thead class="bg-purple-500 text-white">
                    <tr>
                        <th class="border p-3">단계</th>
                        <th class="border p-3">업무 내용</th>
                        <th class="border p-3">산출물</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border p-3 text-center font-bold">1단계</td>
                        <td class="border p-3">기술혁신역량 진단 및 요건 검토</td>
                        <td class="border p-3">진단보고서</td>
                    </tr>
                    <tr class="bg-gray-50">
                        <td class="border p-3 text-center font-bold">2단계</td>
                        <td class="border p-3">기술혁신시스템 구축 및 문서화</td>
                        <td class="border p-3">시스템 문서</td>
                    </tr>
                    <tr>
                        <td class="border p-3 text-center font-bold">3단계</td>
                        <td class="border p-3">온라인 신청 및 서류 제출</td>
                        <td class="border p-3">신청서류</td>
                    </tr>
                    <tr class="bg-gray-50">
                        <td class="border p-3 text-center font-bold">4단계</td>
                        <td class="border p-3">현장평가 대응 및 기술심사</td>
                        <td class="border p-3">평가대응 자료</td>
                    </tr>
                    <tr>
                        <td class="border p-3 text-center font-bold">5단계</td>
                        <td class="border p-3">인증 취득 및 사후관리</td>
                        <td class="border p-3">이노비즈 인증서</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- ===== 탭4: 메인비즈 인증 ===== -->
    <div class="tab04 tabItems">
        <div class="tab_header my-24">
            <div class="flex items-center gap-8">
                <img src="../../img/mainbiz_logo.svg" alt="메인비즈 인증" class="w-32 h-32">
                <div>
                    <h3 class="text-3xl font-bold text-teal-600">메인비즈(Main-Biz) 인증</h3>
                    <p class="text-gray-600 mt-2">경영혁신형 중소기업 인증을 통한 경영경쟁력 강화</p>
                </div>
            </div>
        </div>

        <div class="content_box">
            <h4 class="text-xl font-bold mb-4 border-b-2 border-teal-500 pb-2">서비스 개요</h4>
            <p class="leading-relaxed text-gray-700">
                메인비즈(Main-Biz) 인증은 경영혁신 활동을 통해 경쟁력을 확보한 경영혁신형 중소기업에게 부여하는 인증입니다.
                중소벤처기업부에서 시행하며, 경영혁신시스템 평가를 통해 경영 역량이 우수한 기업을 선별합니다.
                마케팅, 생산관리, 인사조직, 재무관리 등 경영 전반의 혁신 활동을 평가합니다.
            </p>
        </div>

        <div class="content_box mt-8">
            <h4 class="text-xl font-bold mb-4 border-b-2 border-teal-500 pb-2">지원대상</h4>
            <ul class="list-disc pl-6 space-y-2 text-gray-700">
                <li>업력 3년 이상의 중소기업</li>
                <li>경영혁신 활동을 수행하는 기업</li>
                <li>체계적인 경영시스템을 갖춘 기업</li>
                <li>마케팅, 생산, 조직 혁신에 관심 있는 기업</li>
                <li>지속적인 성장을 추구하는 기업</li>
            </ul>
        </div>

        <div class="content_box mt-8">
            <h4 class="text-xl font-bold mb-4 border-b-2 border-teal-500 pb-2">서비스 종류</h4>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="bg-teal-50 p-4 rounded-lg">
                    <h5 class="font-bold text-teal-700">메인비즈 신규 인증</h5>
                    <p class="text-sm text-gray-600 mt-2">처음으로 메인비즈 인증을 신청하는 기업 지원</p>
                </div>
                <div class="bg-teal-50 p-4 rounded-lg">
                    <h5 class="font-bold text-teal-700">메인비즈 갱신 인증</h5>
                    <p class="text-sm text-gray-600 mt-2">기존 인증 만료 전 갱신 신청 지원 (3년 주기)</p>
                </div>
                <div class="bg-teal-50 p-4 rounded-lg">
                    <h5 class="font-bold text-teal-700">경영혁신시스템 구축</h5>
                    <p class="text-sm text-gray-600 mt-2">경영혁신역량 강화를 위한 시스템 구축 컨설팅</p>
                </div>
                <div class="bg-teal-50 p-4 rounded-lg">
                    <h5 class="font-bold text-teal-700">경영혁신 진단</h5>
                    <p class="text-sm text-gray-600 mt-2">경영 현황 분석 및 개선방안 도출</p>
                </div>
            </div>
        </div>

        <div class="content_box mt-8">
            <h4 class="text-xl font-bold mb-4 border-b-2 border-teal-500 pb-2">지원절차</h4>
            <div class="flex flex-wrap justify-center gap-4 my-8">
                <div class="step_box bg-teal-100 border-teal-500">
                    <span class="step_num bg-teal-500">STEP 1</span>
                    <p class="step_title">자격 검토</p>
                    <p class="step_desc">인증요건 검토<br>경영역량 분석</p>
                </div>
                <div class="step_arrow text-teal-500">→</div>
                <div class="step_box bg-teal-100 border-teal-500">
                    <span class="step_num bg-teal-500">STEP 2</span>
                    <p class="step_title">시스템 구축</p>
                    <p class="step_desc">경영혁신시스템<br>문서화</p>
                </div>
                <div class="step_arrow text-teal-500">→</div>
                <div class="step_box bg-teal-100 border-teal-500">
                    <span class="step_num bg-teal-500">STEP 3</span>
                    <p class="step_title">온라인 신청</p>
                    <p class="step_desc">메인비즈넷<br>신청서 제출</p>
                </div>
                <div class="step_arrow text-teal-500">→</div>
                <div class="step_box bg-teal-100 border-teal-500">
                    <span class="step_num bg-teal-500">STEP 4</span>
                    <p class="step_title">현장평가</p>
                    <p class="step_desc">경영혁신<br>역량 검증</p>
                </div>
                <div class="step_arrow text-teal-500">→</div>
                <div class="step_box bg-teal-100 border-teal-500">
                    <span class="step_num bg-teal-500">STEP 5</span>
                    <p class="step_title">인증 취득</p>
                    <p class="step_desc">인증서 발급<br>사후관리</p>
                </div>
            </div>
        </div>

        <div class="content_box mt-8">
            <h4 class="text-xl font-bold mb-4 border-b-2 border-teal-500 pb-2">지원 혜택</h4>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="text-center p-4 border rounded-lg">
                    <div class="text-3xl mb-2">💵</div>
                    <h5 class="font-bold">정책자금 우대</h5>
                    <p class="text-sm text-gray-600">중진공 정책자금 금리 우대</p>
                </div>
                <div class="text-center p-4 border rounded-lg">
                    <div class="text-3xl mb-2">📊</div>
                    <h5 class="font-bold">지원사업 가점</h5>
                    <p class="text-sm text-gray-600">정부 지원사업 선정 시 가점</p>
                </div>
                <div class="text-center p-4 border rounded-lg">
                    <div class="text-3xl mb-2">🤝</div>
                    <h5 class="font-bold">신뢰도 향상</h5>
                    <p class="text-sm text-gray-600">거래처 및 고객 신뢰도 향상</p>
                </div>
            </div>
        </div>

        <div class="content_box mt-8">
            <h4 class="text-xl font-bold mb-4 border-b-2 border-teal-500 pb-2">컨설팅 업무 및 절차</h4>
            <table class="w-full border-collapse border">
                <thead class="bg-teal-500 text-white">
                    <tr>
                        <th class="border p-3">단계</th>
                        <th class="border p-3">업무 내용</th>
                        <th class="border p-3">산출물</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border p-3 text-center font-bold">1단계</td>
                        <td class="border p-3">경영혁신역량 진단 및 요건 검토</td>
                        <td class="border p-3">진단보고서</td>
                    </tr>
                    <tr class="bg-gray-50">
                        <td class="border p-3 text-center font-bold">2단계</td>
                        <td class="border p-3">경영혁신시스템 구축 및 문서화</td>
                        <td class="border p-3">시스템 문서</td>
                    </tr>
                    <tr>
                        <td class="border p-3 text-center font-bold">3단계</td>
                        <td class="border p-3">온라인 신청 및 서류 제출</td>
                        <td class="border p-3">신청서류</td>
                    </tr>
                    <tr class="bg-gray-50">
                        <td class="border p-3 text-center font-bold">4단계</td>
                        <td class="border p-3">현장평가 대응</td>
                        <td class="border p-3">평가대응 자료</td>
                    </tr>
                    <tr>
                        <td class="border p-3 text-center font-bold">5단계</td>
                        <td class="border p-3">인증 취득 및 사후관리</td>
                        <td class="border p-3">메인비즈 인증서</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- ===== 탭5: 기업부설연구소 ===== -->
    <div class="tab05 tabItems">
        <div class="tab_header my-24">
            <div class="flex items-center gap-8">
                <img src="../../img/research_lab_logo.svg" alt="기업부설연구소" class="w-32 h-32">
                <div>
                    <h3 class="text-3xl font-bold text-indigo-600">기업부설연구소 인증</h3>
                    <p class="text-gray-600 mt-2">R&D 역량 강화를 위한 기업부설연구소 및 연구개발전담부서 설립</p>
                </div>
            </div>
        </div>

        <div class="content_box">
            <h4 class="text-xl font-bold mb-4 border-b-2 border-indigo-500 pb-2">서비스 개요</h4>
            <p class="leading-relaxed text-gray-700">
                기업부설연구소/연구개발전담부서 설립 컨설팅은 한국산업기술진흥협회(KOITA)에 등록하여
                연구개발 활동을 체계적으로 수행할 수 있도록 지원합니다. 연구소 설립을 통해 R&D 세액공제,
                연구인력 병역특례, 정부 R&D 과제 참여 자격 등 다양한 혜택을 받을 수 있습니다.
            </p>
        </div>

        <div class="content_box mt-8">
            <h4 class="text-xl font-bold mb-4 border-b-2 border-indigo-500 pb-2">지원대상</h4>
            <ul class="list-disc pl-6 space-y-2 text-gray-700">
                <li>연구개발 활동을 수행하는 기업</li>
                <li>연구전담요원을 보유한 기업</li>
                <li>독립된 연구공간을 확보한 기업</li>
                <li>R&D 투자 확대를 계획하는 기업</li>
                <li>정부 R&D 과제 참여를 희망하는 기업</li>
            </ul>
        </div>

        <div class="content_box mt-8">
            <h4 class="text-xl font-bold mb-4 border-b-2 border-indigo-500 pb-2">서비스 종류</h4>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="bg-indigo-50 p-4 rounded-lg">
                    <h5 class="font-bold text-indigo-700">기업부설연구소 설립</h5>
                    <p class="text-sm text-gray-600 mt-2">연구전담요원 5인 이상, 독립 연구공간 확보 기업</p>
                </div>
                <div class="bg-indigo-50 p-4 rounded-lg">
                    <h5 class="font-bold text-indigo-700">연구개발전담부서 설립</h5>
                    <p class="text-sm text-gray-600 mt-2">연구전담요원 1인 이상, 소규모 기업 대상</p>
                </div>
                <div class="bg-indigo-50 p-4 rounded-lg">
                    <h5 class="font-bold text-indigo-700">연구소 변경/갱신</h5>
                    <p class="text-sm text-gray-600 mt-2">기존 연구소 정보 변경 및 갱신 신청</p>
                </div>
                <div class="bg-indigo-50 p-4 rounded-lg">
                    <h5 class="font-bold text-indigo-700">연구소 운영 컨설팅</h5>
                    <p class="text-sm text-gray-600 mt-2">연구소 운영 및 R&D 관리체계 구축</p>
                </div>
            </div>
        </div>

        <div class="content_box mt-8">
            <h4 class="text-xl font-bold mb-4 border-b-2 border-indigo-500 pb-2">지원절차</h4>
            <div class="flex flex-wrap justify-center gap-4 my-8">
                <div class="step_box bg-indigo-100 border-indigo-500">
                    <span class="step_num bg-indigo-500">STEP 1</span>
                    <p class="step_title">요건 검토</p>
                    <p class="step_desc">인력/공간 검토<br>설립유형 선정</p>
                </div>
                <div class="step_arrow text-indigo-500">→</div>
                <div class="step_box bg-indigo-100 border-indigo-500">
                    <span class="step_num bg-indigo-500">STEP 2</span>
                    <p class="step_title">서류 준비</p>
                    <p class="step_desc">연구시설 확보<br>연구원 채용</p>
                </div>
                <div class="step_arrow text-indigo-500">→</div>
                <div class="step_box bg-indigo-100 border-indigo-500">
                    <span class="step_num bg-indigo-500">STEP 3</span>
                    <p class="step_title">온라인 신청</p>
                    <p class="step_desc">KOITA 시스템<br>신청서 제출</p>
                </div>
                <div class="step_arrow text-indigo-500">→</div>
                <div class="step_box bg-indigo-100 border-indigo-500">
                    <span class="step_num bg-indigo-500">STEP 4</span>
                    <p class="step_title">현장실사</p>
                    <p class="step_desc">연구공간 확인<br>인력 확인</p>
                </div>
                <div class="step_arrow text-indigo-500">→</div>
                <div class="step_box bg-indigo-100 border-indigo-500">
                    <span class="step_num bg-indigo-500">STEP 5</span>
                    <p class="step_title">인정서 발급</p>
                    <p class="step_desc">연구소 등록<br>인정서 발급</p>
                </div>
            </div>
        </div>

        <div class="content_box mt-8">
            <h4 class="text-xl font-bold mb-4 border-b-2 border-indigo-500 pb-2">지원 혜택</h4>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="text-center p-4 border rounded-lg">
                    <div class="text-3xl mb-2">💳</div>
                    <h5 class="font-bold">R&D 세액공제</h5>
                    <p class="text-sm text-gray-600">연구인력 인건비 25% 세액공제</p>
                </div>
                <div class="text-center p-4 border rounded-lg">
                    <div class="text-3xl mb-2">🎖️</div>
                    <h5 class="font-bold">병역특례</h5>
                    <p class="text-sm text-gray-600">전문연구요원 병역특례 가능</p>
                </div>
                <div class="text-center p-4 border rounded-lg">
                    <div class="text-3xl mb-2">🔬</div>
                    <h5 class="font-bold">R&D 과제 참여</h5>
                    <p class="text-sm text-gray-600">정부 R&D 과제 참여 자격 부여</p>
                </div>
            </div>
        </div>

        <div class="content_box mt-8">
            <h4 class="text-xl font-bold mb-4 border-b-2 border-indigo-500 pb-2">컨설팅 업무 및 절차</h4>
            <table class="w-full border-collapse border">
                <thead class="bg-indigo-500 text-white">
                    <tr>
                        <th class="border p-3">단계</th>
                        <th class="border p-3">업무 내용</th>
                        <th class="border p-3">산출물</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border p-3 text-center font-bold">1단계</td>
                        <td class="border p-3">설립요건 검토 및 유형 선정</td>
                        <td class="border p-3">요건검토서</td>
                    </tr>
                    <tr class="bg-gray-50">
                        <td class="border p-3 text-center font-bold">2단계</td>
                        <td class="border p-3">연구시설 및 인력 확보 지원</td>
                        <td class="border p-3">시설/인력 현황</td>
                    </tr>
                    <tr>
                        <td class="border p-3 text-center font-bold">3단계</td>
                        <td class="border p-3">KOITA 온라인 신청 대행</td>
                        <td class="border p-3">신청서류 일체</td>
                    </tr>
                    <tr class="bg-gray-50">
                        <td class="border p-3 text-center font-bold">4단계</td>
                        <td class="border p-3">현장실사 대응 지원</td>
                        <td class="border p-3">실사 대응자료</td>
                    </tr>
                    <tr>
                        <td class="border p-3 text-center font-bold">5단계</td>
                        <td class="border p-3">연구소 등록 및 사후관리</td>
                        <td class="border p-3">연구소 인정서</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // 탭 기능
    const tabs = document.querySelectorAll('.page_tab span');
    const tabContents = document.querySelectorAll('.tabItems');

    tabs.forEach((tab, index) => {
        tab.addEventListener('click', () => {
            // 모든 탭 비활성화
            tabs.forEach(t => t.classList.remove('active'));
            tabContents.forEach(c => c.classList.remove('tabActive'));

            // 클릭한 탭 활성화
            tab.classList.add('active');
            tabContents[index].classList.add('tabActive');

            // 탭 컨텐츠로 스크롤
            gsap.to(window, {
                duration: 0.5,
                scrollTo: { y: tabContents[index], offsetY: 100 }
            });
        });
    });

    // 스크롤 애니메이션
    gsap.registerPlugin(ScrollTrigger);

    gsap.utils.toArray('.content_box').forEach(box => {
        gsap.from(box, {
            scrollTrigger: {
                trigger: box,
                start: 'top 80%',
                toggleActions: 'play none none none'
            },
            opacity: 0,
            y: 30,
            duration: 0.6
        });
    });

    gsap.utils.toArray('.step_box').forEach((box, i) => {
        gsap.from(box, {
            scrollTrigger: {
                trigger: box,
                start: 'top 85%',
                toggleActions: 'play none none none'
            },
            opacity: 0,
            x: -20,
            duration: 0.4,
            delay: i * 0.1
        });
    });
});
</script>

<style>
.tabItems { display: none; }
.tabItems.tabActive { display: block; }

.page_tab {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 10px;
    padding: 20px;
    background: #f8f9fa;
    border-radius: 10px;
}

.page_tab span {
    padding: 12px 24px;
    background: white;
    border: 2px solid #ddd;
    border-radius: 25px;
    cursor: pointer;
    transition: all 0.3s ease;
    font-weight: 500;
}

.page_tab span:hover {
    border-color: #4a90a4;
    color: #4a90a4;
}

.page_tab span.active {
    background: #4a90a4;
    color: white;
    border-color: #4a90a4;
}

.step_box {
    text-align: center;
    padding: 20px;
    border-radius: 10px;
    border-left: 4px solid;
    min-width: 140px;
    background: #f8f9fa;
}

.step_num {
    display: inline-block;
    color: white;
    padding: 5px 15px;
    border-radius: 15px;
    font-size: 12px;
    font-weight: bold;
    margin-bottom: 10px;
}

.step_title {
    font-weight: bold;
    font-size: 16px;
    margin: 10px 0;
}

.step_desc {
    font-size: 13px;
    color: #666;
    line-height: 1.5;
}

.step_arrow {
    display: flex;
    align-items: center;
    font-size: 24px;
    font-weight: bold;
}

@media (max-width: 768px) {
    .step_arrow {
        transform: rotate(90deg);
        margin: 10px 0;
    }

    .page_tab span {
        padding: 10px 16px;
        font-size: 14px;
    }
}
</style>

<?php
include_once(G5_PATH . '/tail.php');
?>
