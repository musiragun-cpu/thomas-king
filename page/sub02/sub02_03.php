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

    <!-- 탭 메뉴 -->
    <div class="page_tab my-16">
        <span class="active">창업지원사업</span>
        <span class="">소상공인 경영개선</span>
        <span class="">정책자금 연계</span>
        <span class="">사업전환 컨설팅</span>
    </div>

    <!-- ===== 탭1: 창업지원사업 ===== -->
    <div class="tab01 tabItems tabActive">
        <div class="tab_header my-24">
            <div class="flex items-center gap-8">
                <img src="/img/startup_logo.svg" alt="창업지원사업" class="w-32 h-32">
                <div>
                    <h3 class="text-3xl font-bold text-orange-600">창업지원사업</h3>
                    <p class="text-gray-600 mt-2">예비창업자부터 초기창업자까지 성공적인 창업을 위한 종합 지원</p>
                </div>
            </div>
        </div>

        <div class="content_box">
            <h4 class="text-xl font-bold mb-4 border-b-2 border-orange-500 pb-2">서비스 개요</h4>
            <p class="leading-relaxed text-gray-700">
                창업지원사업 컨설팅은 예비창업자 및 초기창업자(7년 이내)를 대상으로 정부 및 지자체 창업지원사업 선정을 위한
                전문 컨설팅을 제공합니다. 사업계획서 작성부터 발표 코칭, 사후관리까지 창업의 전 과정을 체계적으로 지원하여
                창업 성공률을 높이고, 지속 가능한 비즈니스 모델 구축을 돕습니다.
            </p>
        </div>

        <div class="content_box mt-8">
            <h4 class="text-xl font-bold mb-4 border-b-2 border-orange-500 pb-2">지원대상</h4>
            <ul class="list-disc pl-6 space-y-2 text-gray-700">
                <li>예비창업자 (창업 준비 중인 개인)</li>
                <li>초기창업자 (창업 후 3년 이내)</li>
                <li>도약기 창업기업 (창업 후 3년~7년)</li>
                <li>기술기반 스타트업</li>
                <li>소셜벤처 및 사회적 기업</li>
            </ul>
        </div>

        <div class="content_box mt-8">
            <h4 class="text-xl font-bold mb-4 border-b-2 border-orange-500 pb-2">서비스 종류</h4>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="bg-orange-50 p-4 rounded-lg">
                    <h5 class="font-bold text-orange-700">예비창업패키지</h5>
                    <p class="text-sm text-gray-600 mt-2">예비창업자 대상 최대 1억원 사업화 자금 및 창업 교육 지원</p>
                </div>
                <div class="bg-orange-50 p-4 rounded-lg">
                    <h5 class="font-bold text-orange-700">초기창업패키지</h5>
                    <p class="text-sm text-gray-600 mt-2">3년 이내 초기창업기업 대상 최대 1억원 사업화 자금 지원</p>
                </div>
                <div class="bg-orange-50 p-4 rounded-lg">
                    <h5 class="font-bold text-orange-700">창업도약패키지</h5>
                    <p class="text-sm text-gray-600 mt-2">3~7년 도약기 기업 대상 최대 3억원 성장 지원</p>
                </div>
                <div class="bg-orange-50 p-4 rounded-lg">
                    <h5 class="font-bold text-orange-700">팁스(TIPS)</h5>
                    <p class="text-sm text-gray-600 mt-2">기술창업기업 대상 최대 5억원 R&D 자금 및 해외 진출 지원</p>
                </div>
                <div class="bg-orange-50 p-4 rounded-lg">
                    <h5 class="font-bold text-orange-700">청년창업사관학교</h5>
                    <p class="text-sm text-gray-600 mt-2">만 39세 이하 청년창업자 대상 입주공간 및 사업화 지원</p>
                </div>
                <div class="bg-orange-50 p-4 rounded-lg">
                    <h5 class="font-bold text-orange-700">지역특화 창업지원</h5>
                    <p class="text-sm text-gray-600 mt-2">지자체별 특화 창업지원사업 연계 및 선정 지원</p>
                </div>
            </div>
        </div>

        <div class="content_box mt-8">
            <h4 class="text-xl font-bold mb-4 border-b-2 border-orange-500 pb-2">지원절차</h4>
            <div class="flex flex-wrap justify-center gap-4 my-8">
                <div class="step_box bg-orange-100 border-orange-500">
                    <span class="step_num bg-orange-500">STEP 1</span>
                    <p class="step_title">창업 진단</p>
                    <p class="step_desc">사업 아이템 분석<br>창업 역량 평가</p>
                </div>
                <div class="step_arrow text-orange-500">→</div>
                <div class="step_box bg-orange-100 border-orange-500">
                    <span class="step_num bg-orange-500">STEP 2</span>
                    <p class="step_title">사업 매칭</p>
                    <p class="step_desc">적합 지원사업 선정<br>공고 일정 관리</p>
                </div>
                <div class="step_arrow text-orange-500">→</div>
                <div class="step_box bg-orange-100 border-orange-500">
                    <span class="step_num bg-orange-500">STEP 3</span>
                    <p class="step_title">사업계획서</p>
                    <p class="step_desc">사업계획서 작성<br>증빙자료 준비</p>
                </div>
                <div class="step_arrow text-orange-500">→</div>
                <div class="step_box bg-orange-100 border-orange-500">
                    <span class="step_num bg-orange-500">STEP 4</span>
                    <p class="step_title">발표 코칭</p>
                    <p class="step_desc">PT 자료 작성<br>발표 리허설</p>
                </div>
                <div class="step_arrow text-orange-500">→</div>
                <div class="step_box bg-orange-100 border-orange-500">
                    <span class="step_num bg-orange-500">STEP 5</span>
                    <p class="step_title">사후관리</p>
                    <p class="step_desc">협약 지원<br>정산 컨설팅</p>
                </div>
            </div>
        </div>

        <div class="content_box mt-8">
            <h4 class="text-xl font-bold mb-4 border-b-2 border-orange-500 pb-2">지원 혜택</h4>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="text-center p-4 border rounded-lg">
                    <div class="text-3xl mb-2">📋</div>
                    <h5 class="font-bold">무료 사전상담</h5>
                    <p class="text-sm text-gray-600">아이템 적합성 및 지원사업 매칭</p>
                </div>
                <div class="text-center p-4 border rounded-lg">
                    <div class="text-3xl mb-2">📝</div>
                    <h5 class="font-bold">사업계획서 작성</h5>
                    <p class="text-sm text-gray-600">전문가 1:1 밀착 컨설팅</p>
                </div>
                <div class="text-center p-4 border rounded-lg">
                    <div class="text-3xl mb-2">🎯</div>
                    <h5 class="font-bold">발표 대비 코칭</h5>
                    <p class="text-sm text-gray-600">모의 면접 및 Q&A 대비</p>
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
                        <td class="border p-3">사업 아이템 분석 및 시장조사</td>
                        <td class="border p-3">시장분석 보고서</td>
                    </tr>
                    <tr class="bg-gray-50">
                        <td class="border p-3 text-center font-bold">2단계</td>
                        <td class="border p-3">비즈니스 모델 수립 및 전략 기획</td>
                        <td class="border p-3">BM 캔버스, 전략문서</td>
                    </tr>
                    <tr>
                        <td class="border p-3 text-center font-bold">3단계</td>
                        <td class="border p-3">사업계획서 작성 및 검토</td>
                        <td class="border p-3">사업계획서</td>
                    </tr>
                    <tr class="bg-gray-50">
                        <td class="border p-3 text-center font-bold">4단계</td>
                        <td class="border p-3">발표자료 작성 및 발표 코칭</td>
                        <td class="border p-3">PT 자료, 예상 Q&A</td>
                    </tr>
                    <tr>
                        <td class="border p-3 text-center font-bold">5단계</td>
                        <td class="border p-3">선정 후 협약 및 정산 지원</td>
                        <td class="border p-3">협약서, 정산서류</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- ===== 탭2: 소상공인 경영개선 ===== -->
    <div class="tab02 tabItems">
        <div class="tab_header my-24">
            <div class="flex items-center gap-8">
                <img src="/img/small_biz_logo.svg" alt="소상공인 경영개선" class="w-32 h-32">
                <div>
                    <h3 class="text-3xl font-bold text-green-600">소상공인 경영개선</h3>
                    <p class="text-gray-600 mt-2">소상공인의 경쟁력 강화와 지속 성장을 위한 맞춤형 경영 컨설팅</p>
                </div>
            </div>
        </div>

        <div class="content_box">
            <h4 class="text-xl font-bold mb-4 border-b-2 border-green-500 pb-2">서비스 개요</h4>
            <p class="leading-relaxed text-gray-700">
                소상공인 경영개선 컨설팅은 소상공인시장진흥공단, 지자체 등에서 지원하는 다양한 소상공인 지원사업과 연계하여
                매출 증대, 비용 절감, 마케팅 강화 등 실질적인 경영 개선을 지원합니다. 현장 중심의 맞춤형 솔루션으로
                소상공인의 경쟁력을 높이고 지속 가능한 성장 기반을 구축합니다.
            </p>
        </div>

        <div class="content_box mt-8">
            <h4 class="text-xl font-bold mb-4 border-b-2 border-green-500 pb-2">지원대상</h4>
            <ul class="list-disc pl-6 space-y-2 text-gray-700">
                <li>소상공인 (상시근로자 5인 미만, 제조·건설·운수업 10인 미만)</li>
                <li>소기업 (업종별 상시근로자 기준 충족 기업)</li>
                <li>전통시장 및 상점가 상인</li>
                <li>프랜차이즈 가맹점</li>
                <li>자영업자 및 1인 사업자</li>
            </ul>
        </div>

        <div class="content_box mt-8">
            <h4 class="text-xl font-bold mb-4 border-b-2 border-green-500 pb-2">서비스 종류</h4>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="bg-green-50 p-4 rounded-lg">
                    <h5 class="font-bold text-green-700">경영안정 컨설팅</h5>
                    <p class="text-sm text-gray-600 mt-2">재무관리, 원가절감, 운영효율화 등 경영안정 지원</p>
                </div>
                <div class="bg-green-50 p-4 rounded-lg">
                    <h5 class="font-bold text-green-700">마케팅 컨설팅</h5>
                    <p class="text-sm text-gray-600 mt-2">온라인 마케팅, SNS 홍보, 브랜드 강화 전략</p>
                </div>
                <div class="bg-green-50 p-4 rounded-lg">
                    <h5 class="font-bold text-green-700">디지털 전환 지원</h5>
                    <p class="text-sm text-gray-600 mt-2">키오스크, 배달앱, POS 시스템 등 디지털화 지원</p>
                </div>
                <div class="bg-green-50 p-4 rounded-lg">
                    <h5 class="font-bold text-green-700">상권분석 컨설팅</h5>
                    <p class="text-sm text-gray-600 mt-2">입지분석, 경쟁환경 분석, 매출 예측</p>
                </div>
                <div class="bg-green-50 p-4 rounded-lg">
                    <h5 class="font-bold text-green-700">메뉴·상품 개발</h5>
                    <p class="text-sm text-gray-600 mt-2">신메뉴 개발, 상품 차별화, 가격 전략 수립</p>
                </div>
                <div class="bg-green-50 p-4 rounded-lg">
                    <h5 class="font-bold text-green-700">스마트상점 구축</h5>
                    <p class="text-sm text-gray-600 mt-2">스마트상점 기술도입 지원 및 운영 컨설팅</p>
                </div>
            </div>
        </div>

        <div class="content_box mt-8">
            <h4 class="text-xl font-bold mb-4 border-b-2 border-green-500 pb-2">지원절차</h4>
            <div class="flex flex-wrap justify-center gap-4 my-8">
                <div class="step_box bg-green-100 border-green-500">
                    <span class="step_num bg-green-500">STEP 1</span>
                    <p class="step_title">현황 진단</p>
                    <p class="step_desc">매장 방문<br>경영 실태 분석</p>
                </div>
                <div class="step_arrow text-green-500">→</div>
                <div class="step_box bg-green-100 border-green-500">
                    <span class="step_num bg-green-500">STEP 2</span>
                    <p class="step_title">과제 도출</p>
                    <p class="step_desc">문제점 발굴<br>개선과제 선정</p>
                </div>
                <div class="step_arrow text-green-500">→</div>
                <div class="step_box bg-green-100 border-green-500">
                    <span class="step_num bg-green-500">STEP 3</span>
                    <p class="step_title">개선 실행</p>
                    <p class="step_desc">맞춤 솔루션 제공<br>현장 적용 지원</p>
                </div>
                <div class="step_arrow text-green-500">→</div>
                <div class="step_box bg-green-100 border-green-500">
                    <span class="step_num bg-green-500">STEP 4</span>
                    <p class="step_title">성과 점검</p>
                    <p class="step_desc">개선효과 측정<br>추가 개선 도출</p>
                </div>
                <div class="step_arrow text-green-500">→</div>
                <div class="step_box bg-green-100 border-green-500">
                    <span class="step_num bg-green-500">STEP 5</span>
                    <p class="step_title">사후관리</p>
                    <p class="step_desc">정착 지원<br>지속 모니터링</p>
                </div>
            </div>
        </div>

        <div class="content_box mt-8">
            <h4 class="text-xl font-bold mb-4 border-b-2 border-green-500 pb-2">지원 혜택</h4>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="text-center p-4 border rounded-lg">
                    <div class="text-3xl mb-2">🏪</div>
                    <h5 class="font-bold">현장 맞춤 컨설팅</h5>
                    <p class="text-sm text-gray-600">업종별 전문가 현장 방문</p>
                </div>
                <div class="text-center p-4 border rounded-lg">
                    <div class="text-3xl mb-2">💰</div>
                    <h5 class="font-bold">정부지원사업 연계</h5>
                    <p class="text-sm text-gray-600">컨설팅 비용 최대 90% 지원</p>
                </div>
                <div class="text-center p-4 border rounded-lg">
                    <div class="text-3xl mb-2">📈</div>
                    <h5 class="font-bold">매출 향상 프로그램</h5>
                    <p class="text-sm text-gray-600">실질적 성과 중심 컨설팅</p>
                </div>
            </div>
        </div>

        <div class="content_box mt-8">
            <h4 class="text-xl font-bold mb-4 border-b-2 border-green-500 pb-2">컨설팅 업무 및 절차</h4>
            <table class="w-full border-collapse border">
                <thead class="bg-green-500 text-white">
                    <tr>
                        <th class="border p-3">단계</th>
                        <th class="border p-3">업무 내용</th>
                        <th class="border p-3">산출물</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="border p-3 text-center font-bold">1단계</td>
                        <td class="border p-3">현장 방문 및 경영 진단</td>
                        <td class="border p-3">진단보고서</td>
                    </tr>
                    <tr class="bg-gray-50">
                        <td class="border p-3 text-center font-bold">2단계</td>
                        <td class="border p-3">개선과제 도출 및 우선순위 설정</td>
                        <td class="border p-3">개선과제 목록</td>
                    </tr>
                    <tr>
                        <td class="border p-3 text-center font-bold">3단계</td>
                        <td class="border p-3">맞춤 솔루션 설계 및 실행</td>
                        <td class="border p-3">실행계획서</td>
                    </tr>
                    <tr class="bg-gray-50">
                        <td class="border p-3 text-center font-bold">4단계</td>
                        <td class="border p-3">성과 측정 및 피드백</td>
                        <td class="border p-3">성과보고서</td>
                    </tr>
                    <tr>
                        <td class="border p-3 text-center font-bold">5단계</td>
                        <td class="border p-3">사후관리 및 추가 지원사업 연계</td>
                        <td class="border p-3">모니터링 보고서</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- ===== 탭3: 정책자금 연계 ===== -->
    <div class="tab03 tabItems">
        <div class="tab_header my-24">
            <div class="flex items-center gap-8">
                <img src="/img/policy_fund_logo.svg" alt="정책자금 연계" class="w-32 h-32">
                <div>
                    <h3 class="text-3xl font-bold text-blue-600">정책자금 연계</h3>
                    <p class="text-gray-600 mt-2">중소기업 및 소상공인을 위한 정부 정책자금 신청 및 연계 지원</p>
                </div>
            </div>
        </div>

        <div class="content_box">
            <h4 class="text-xl font-bold mb-4 border-b-2 border-blue-500 pb-2">서비스 개요</h4>
            <p class="leading-relaxed text-gray-700">
                정책자금 연계 컨설팅은 중소벤처기업부, 소상공인시장진흥공단, 신용보증기금, 기술보증기금 등에서 제공하는
                다양한 정책자금을 분석하여 기업에 최적화된 자금을 연계해 드립니다. 자금 용도, 기업 상황, 신용등급 등을
                종합적으로 검토하여 승인 가능성이 높은 정책자금을 매칭하고, 신청서 작성부터 승인까지 전 과정을 지원합니다.
            </p>
        </div>

        <div class="content_box mt-8">
            <h4 class="text-xl font-bold mb-4 border-b-2 border-blue-500 pb-2">지원대상</h4>
            <ul class="list-disc pl-6 space-y-2 text-gray-700">
                <li>중소기업 (중소기업기본법 상 중소기업)</li>
                <li>소상공인 (상시근로자 기준 충족 사업체)</li>
                <li>창업기업 (창업 후 7년 이내)</li>
                <li>혁신성장 기업 (기술혁신형, 경영혁신형 등)</li>
                <li>수출기업 및 해외진출 기업</li>
            </ul>
        </div>

        <div class="content_box mt-8">
            <h4 class="text-xl font-bold mb-4 border-b-2 border-blue-500 pb-2">서비스 종류</h4>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="bg-blue-50 p-4 rounded-lg">
                    <h5 class="font-bold text-blue-700">중소기업 정책자금</h5>
                    <p class="text-sm text-gray-600 mt-2">중진공 직접대출, 대리대출, 융자 지원</p>
                </div>
                <div class="bg-blue-50 p-4 rounded-lg">
                    <h5 class="font-bold text-blue-700">소상공인 정책자금</h5>
                    <p class="text-sm text-gray-600 mt-2">소진공 일반경영안정자금, 특별경영안정자금</p>
                </div>
                <div class="bg-blue-50 p-4 rounded-lg">
                    <h5 class="font-bold text-blue-700">신용보증 연계</h5>
                    <p class="text-sm text-gray-600 mt-2">신보, 기보 보증서 발급 및 대출 연계</p>
                </div>
                <div class="bg-blue-50 p-4 rounded-lg">
                    <h5 class="font-bold text-blue-700">기술금융</h5>
                    <p class="text-sm text-gray-600 mt-2">기술평가 기반 TCB 대출, 기술보증</p>
                </div>
                <div class="bg-blue-50 p-4 rounded-lg">
                    <h5 class="font-bold text-blue-700">지자체 정책자금</h5>
                    <p class="text-sm text-gray-600 mt-2">시도별 중소기업 육성자금, 특례보증</p>
                </div>
                <div class="bg-blue-50 p-4 rounded-lg">
                    <h5 class="font-bold text-blue-700">수출금융</h5>
                    <p class="text-sm text-gray-600 mt-2">수출입은행, 무역보험공사 수출지원 자금</p>
                </div>
            </div>
        </div>

        <div class="content_box mt-8">
            <h4 class="text-xl font-bold mb-4 border-b-2 border-blue-500 pb-2">지원절차</h4>
            <div class="flex flex-wrap justify-center gap-4 my-8">
                <div class="step_box bg-blue-100 border-blue-500">
                    <span class="step_num bg-blue-500">STEP 1</span>
                    <p class="step_title">자금진단</p>
                    <p class="step_desc">자금 필요성 분석<br>신용/재무 검토</p>
                </div>
                <div class="step_arrow text-blue-500">→</div>
                <div class="step_box bg-blue-100 border-blue-500">
                    <span class="step_num bg-blue-500">STEP 2</span>
                    <p class="step_title">자금매칭</p>
                    <p class="step_desc">최적 정책자금 선정<br>승인 가능성 검토</p>
                </div>
                <div class="step_arrow text-blue-500">→</div>
                <div class="step_box bg-blue-100 border-blue-500">
                    <span class="step_num bg-blue-500">STEP 3</span>
                    <p class="step_title">서류 준비</p>
                    <p class="step_desc">신청서 작성<br>첨부서류 준비</p>
                </div>
                <div class="step_arrow text-blue-500">→</div>
                <div class="step_box bg-blue-100 border-blue-500">
                    <span class="step_num bg-blue-500">STEP 4</span>
                    <p class="step_title">신청/심사</p>
                    <p class="step_desc">온라인 신청<br>현장실사 대응</p>
                </div>
                <div class="step_arrow text-blue-500">→</div>
                <div class="step_box bg-blue-100 border-blue-500">
                    <span class="step_num bg-blue-500">STEP 5</span>
                    <p class="step_title">대출 실행</p>
                    <p class="step_desc">약정 체결<br>자금 수령</p>
                </div>
            </div>
        </div>

        <div class="content_box mt-8">
            <h4 class="text-xl font-bold mb-4 border-b-2 border-blue-500 pb-2">지원 혜택</h4>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="text-center p-4 border rounded-lg">
                    <div class="text-3xl mb-2">🔍</div>
                    <h5 class="font-bold">맞춤 자금 분석</h5>
                    <p class="text-sm text-gray-600">100여개 정책자금 중 최적 매칭</p>
                </div>
                <div class="text-center p-4 border rounded-lg">
                    <div class="text-3xl mb-2">📄</div>
                    <h5 class="font-bold">서류 대행</h5>
                    <p class="text-sm text-gray-600">신청서 및 첨부서류 작성 지원</p>
                </div>
                <div class="text-center p-4 border rounded-lg">
                    <div class="text-3xl mb-2">✅</div>
                    <h5 class="font-bold">심사 대응</h5>
                    <p class="text-sm text-gray-600">현장실사 및 심사 대응 컨설팅</p>
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
                        <td class="border p-3">기업 현황 및 자금 수요 분석</td>
                        <td class="border p-3">자금진단 보고서</td>
                    </tr>
                    <tr class="bg-gray-50">
                        <td class="border p-3 text-center font-bold">2단계</td>
                        <td class="border p-3">적합 정책자금 탐색 및 매칭</td>
                        <td class="border p-3">자금매칭 제안서</td>
                    </tr>
                    <tr>
                        <td class="border p-3 text-center font-bold">3단계</td>
                        <td class="border p-3">신청서 작성 및 서류 준비</td>
                        <td class="border p-3">신청서류 일체</td>
                    </tr>
                    <tr class="bg-gray-50">
                        <td class="border p-3 text-center font-bold">4단계</td>
                        <td class="border p-3">신청 대행 및 심사 대응</td>
                        <td class="border p-3">심사 대응 자료</td>
                    </tr>
                    <tr>
                        <td class="border p-3 text-center font-bold">5단계</td>
                        <td class="border p-3">승인 후 약정 및 사후관리</td>
                        <td class="border p-3">약정서, 상환계획</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- ===== 탭4: 사업전환 컨설팅 ===== -->
    <div class="tab04 tabItems">
        <div class="tab_header my-24">
            <div class="flex items-center gap-8">
                <img src="/img/biz_transform_logo.svg" alt="사업전환 컨설팅" class="w-32 h-32">
                <div>
                    <h3 class="text-3xl font-bold text-purple-600">사업전환 컨설팅</h3>
                    <p class="text-gray-600 mt-2">위기 극복과 새로운 성장을 위한 사업 재편 및 전환 지원</p>
                </div>
            </div>
        </div>

        <div class="content_box">
            <h4 class="text-xl font-bold mb-4 border-b-2 border-purple-500 pb-2">서비스 개요</h4>
            <p class="leading-relaxed text-gray-700">
                사업전환 컨설팅은 경영 위기 상황이거나 새로운 성장 동력이 필요한 기업을 대상으로 업종 전환, 사업 다각화,
                구조조정 등 사업 재편 전략을 수립하고 실행을 지원합니다. 정부의 사업재편 지원사업과 연계하여
                세제 혜택, 금융 지원, 컨설팅 비용 지원 등 다양한 혜택을 받을 수 있도록 도와드립니다.
            </p>
        </div>

        <div class="content_box mt-8">
            <h4 class="text-xl font-bold mb-4 border-b-2 border-purple-500 pb-2">지원대상</h4>
            <ul class="list-disc pl-6 space-y-2 text-gray-700">
                <li>경영위기 기업 (매출 감소, 영업적자 등)</li>
                <li>사양산업 영위 기업</li>
                <li>신성장 분야 진출 희망 기업</li>
                <li>업종 전환 계획 기업</li>
                <li>사업 다각화 추진 기업</li>
            </ul>
        </div>

        <div class="content_box mt-8">
            <h4 class="text-xl font-bold mb-4 border-b-2 border-purple-500 pb-2">서비스 종류</h4>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="bg-purple-50 p-4 rounded-lg">
                    <h5 class="font-bold text-purple-700">업종 전환 컨설팅</h5>
                    <p class="text-sm text-gray-600 mt-2">기존 사업에서 신규 업종으로의 완전 전환 지원</p>
                </div>
                <div class="bg-purple-50 p-4 rounded-lg">
                    <h5 class="font-bold text-purple-700">사업 다각화 컨설팅</h5>
                    <p class="text-sm text-gray-600 mt-2">신규 사업 영역 확장 및 포트폴리오 다변화</p>
                </div>
                <div class="bg-purple-50 p-4 rounded-lg">
                    <h5 class="font-bold text-purple-700">사업재편 승인 지원</h5>
                    <p class="text-sm text-gray-600 mt-2">중기부 사업재편계획 승인 신청 대행</p>
                </div>
                <div class="bg-purple-50 p-4 rounded-lg">
                    <h5 class="font-bold text-purple-700">구조조정 컨설팅</h5>
                    <p class="text-sm text-gray-600 mt-2">인력, 조직, 사업부문 구조조정 전략 수립</p>
                </div>
                <div class="bg-purple-50 p-4 rounded-lg">
                    <h5 class="font-bold text-purple-700">재창업 지원</h5>
                    <p class="text-sm text-gray-600 mt-2">폐업 후 재창업 또는 업종변경 지원</p>
                </div>
                <div class="bg-purple-50 p-4 rounded-lg">
                    <h5 class="font-bold text-purple-700">M&A 연계</h5>
                    <p class="text-sm text-gray-600 mt-2">인수합병을 통한 사업 전환 및 확장 지원</p>
                </div>
            </div>
        </div>

        <div class="content_box mt-8">
            <h4 class="text-xl font-bold mb-4 border-b-2 border-purple-500 pb-2">지원절차</h4>
            <div class="flex flex-wrap justify-center gap-4 my-8">
                <div class="step_box bg-purple-100 border-purple-500">
                    <span class="step_num bg-purple-500">STEP 1</span>
                    <p class="step_title">현황 분석</p>
                    <p class="step_desc">경영현황 진단<br>위기 요인 분석</p>
                </div>
                <div class="step_arrow text-purple-500">→</div>
                <div class="step_box bg-purple-100 border-purple-500">
                    <span class="step_num bg-purple-500">STEP 2</span>
                    <p class="step_title">전환 전략</p>
                    <p class="step_desc">전환 방향 설정<br>신규 사업 탐색</p>
                </div>
                <div class="step_arrow text-purple-500">→</div>
                <div class="step_box bg-purple-100 border-purple-500">
                    <span class="step_num bg-purple-500">STEP 3</span>
                    <p class="step_title">사업계획</p>
                    <p class="step_desc">사업재편계획 수립<br>승인 신청</p>
                </div>
                <div class="step_arrow text-purple-500">→</div>
                <div class="step_box bg-purple-100 border-purple-500">
                    <span class="step_num bg-purple-500">STEP 4</span>
                    <p class="step_title">실행 지원</p>
                    <p class="step_desc">전환 실행<br>정책지원 연계</p>
                </div>
                <div class="step_arrow text-purple-500">→</div>
                <div class="step_box bg-purple-100 border-purple-500">
                    <span class="step_num bg-purple-500">STEP 5</span>
                    <p class="step_title">안정화</p>
                    <p class="step_desc">사업 안정화<br>성과 모니터링</p>
                </div>
            </div>
        </div>

        <div class="content_box mt-8">
            <h4 class="text-xl font-bold mb-4 border-b-2 border-purple-500 pb-2">지원 혜택</h4>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="text-center p-4 border rounded-lg">
                    <div class="text-3xl mb-2">📊</div>
                    <h5 class="font-bold">세제 혜택</h5>
                    <p class="text-sm text-gray-600">사업재편 승인 시 세제감면 혜택</p>
                </div>
                <div class="text-center p-4 border rounded-lg">
                    <div class="text-3xl mb-2">💳</div>
                    <h5 class="font-bold">금융 지원</h5>
                    <p class="text-sm text-gray-600">정책자금 우대 및 보증 지원</p>
                </div>
                <div class="text-center p-4 border rounded-lg">
                    <div class="text-3xl mb-2">🎓</div>
                    <h5 class="font-bold">교육훈련 지원</h5>
                    <p class="text-sm text-gray-600">재직자 전환배치 훈련 지원</p>
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
                        <td class="border p-3">경영현황 진단 및 위기 요인 분석</td>
                        <td class="border p-3">경영진단 보고서</td>
                    </tr>
                    <tr class="bg-gray-50">
                        <td class="border p-3 text-center font-bold">2단계</td>
                        <td class="border p-3">사업전환 방향 수립 및 타당성 분석</td>
                        <td class="border p-3">전환전략 보고서</td>
                    </tr>
                    <tr>
                        <td class="border p-3 text-center font-bold">3단계</td>
                        <td class="border p-3">사업재편계획 수립 및 승인 신청</td>
                        <td class="border p-3">사업재편계획서</td>
                    </tr>
                    <tr class="bg-gray-50">
                        <td class="border p-3 text-center font-bold">4단계</td>
                        <td class="border p-3">실행계획 수립 및 정책지원 연계</td>
                        <td class="border p-3">실행계획서</td>
                    </tr>
                    <tr>
                        <td class="border p-3 text-center font-bold">5단계</td>
                        <td class="border p-3">사업안정화 및 사후관리</td>
                        <td class="border p-3">성과보고서</td>
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
