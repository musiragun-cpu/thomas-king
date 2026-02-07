<?php

include_once('../../common.php');
// 페이지 제목 
$g5['title'] = "회사연혁";
include_once(G5_PATH . '/head.php');

?>

<section class="ppbSpWrap py-10 section00">
    <div class="container mx-auto px-6">
        <div class="subTitle">

            <h2 class="font-extrabold">고객의 <b class="text-primary">신뢰와 만족</b>을 <br>
                최우선으로 생각 하겠습니다.</h2>
        </div>
        <div class="mx-auto">
            <!-- 대표이사 2명 -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                <div class="bg-white p-6 shadow-md rounded-lg flex flex-col md:flex-row items-center">
                    <img src="/img/consultant_kim_tae_han.jpg" onerror="this.src='/img/profile.jpg'" alt="김태한"
                        class="w-24 h-24 mb-4 md:mb-0 md:mr-6 object-cover rounded-full border border-gray-200">
                    <div>
                        <h2 class="text-xl font-bold">김태한</h2>
                        <p class="text-blue-600 font-semibold">대표이사</p>
                        <p class="text-gray-600 text-sm mt-2">- 경성대 겸임 교수<br>∙前홍익기공(주) 이사<br>∙경영지도사, 기술거래사<br>
                            - 우수조달, 성능인증, NET, NEP 등 조달전문<br>∙R&D 과제 기획 및 평가위원<br>∙컨설팅 등 경력 25년</p>
                    </div>
                </div>
                <div class="bg-white p-6 shadow-md rounded-lg flex flex-col md:flex-row items-center">
                    <img src="/img/consultant_kwon_oh_sung.jpg" onerror="this.src='/img/profile.jpg'" alt="권오성"
                        class="w-24 h-24 mb-4 md:mb-0 md:mr-6 object-cover rounded-full border border-gray-200">
                    <div>
                        <h2 class="text-xl font-bold">권오성</h2>
                        <p class="text-blue-600 font-semibold">대표이사</p>
                        <p class="text-gray-600 text-sm mt-2">∙前중소벤처기업진흥공단 팀장<br>∙前LG전자, 삼성전기, LGD 선임연구원<br>∙품질기술사,
                            경영지도사<br>
                            ∙우수조달, 성능인증, NET, NEP 등 조달전문<br>∙R&D 과제 기획, 前조달청 혁신제품 스카우터<br>∙컨설팅 등 경력 23년</p>
                    </div>
                </div>
            </div>
            <svg width="1018" height="2" viewBox="0 0 1018 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1018 1L-3.05176e-05 1" stroke="url(#paint0_linear_166_982)" stroke-width="2" />
                <defs>
                    <linearGradient id="paint0_linear_166_982" x1="0" y1="0.5" x2="1018" y2="0.5"
                        gradientUnits="userSpaceOnUse">
                        <stop stop-color="#0C3A8D" stop-opacity="0" />
                        <stop offset="0.5" stop-color="#0C3A8D" />
                        <stop offset="1" stop-color="#0C3A8D" stop-opacity="0" />
                    </linearGradient>
                </defs>
            </svg>

            <!-- 나머지 프로필 카드 -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- 개별 카드 -->
                <div class="bg-white p-6 shadow-md rounded-lg flex flex-col items-center">
                    <img src="/img/consultant_kim_young_gu.jpg" onerror="this.src='/img/profile.jpg'" alt="김영구"
                        class="w-24 h-24 mb-4 object-cover rounded-full border border-gray-200">
                    <h2 class="text-xl font-bold">김영구</h2>
                    <p class="text-blue-600 font-semibold">원장</p>
                    <p class="text-gray-600 text-sm mt-2">∙前㈜케이비즈업경영전략원 대표<br>∙前㈜한국투자(신탁)증권<br>∙경영지도사, M&A컨설턴트<br>
                        ∙M&A, ESG, 경영전략 등</p>
                </div>

                <div class="bg-white p-6 shadow-md rounded-lg flex flex-col items-center">
                    <img src="/img/consultant_kim_byung_in.jpg" onerror="this.src='/img/profile.jpg'" alt="김병인"
                        class="w-24 h-24 mb-4 object-cover rounded-full border border-gray-200">
                    <h2 class="text-xl font-bold">김병인</h2>
                    <p class="text-blue-600 font-semibold">수석</p>
                    <p class="text-gray-600 text-sm mt-2">∙前경남창업투자(주) 부장<br>∙前중소벤처기업진흥공단<br>
                        ∙경영지도사, 창업지도사<br>∙정책자금, 정부지원사업, 사업전환, 경영전략 등</p>
                </div>

                <div class="bg-white p-6 shadow-md rounded-lg flex flex-col items-center">
                    <img src="/img/consultant_kim_gwang_yong.jpg" onerror="this.src='/img/profile.jpg'" alt="김광용"
                        class="w-24 h-24 mb-4 object-cover rounded-full border border-gray-200">
                    <h2 class="text-xl font-bold">김광용</h2>
                    <p class="text-blue-600 font-semibold">수석</p>
                    <p class="text-gray-600 text-sm mt-2">∙前근로복지공단 본부장<br>∙경영지도사, 행정사,<br>
                        ISO9001/14001/37001/45001<br>∙근로/인사, 경영컨설팅 등</p>
                </div>

                <div class="bg-white p-6 shadow-md rounded-lg flex flex-col items-center">
                    <img src="/img/consultant_kim_tae_won.jpg" onerror="this.src='/img/profile.jpg'" alt="김태원"
                        class="w-24 h-24 mb-4 object-cover rounded-full border border-gray-200">
                    <h2 class="text-xl font-bold">김태원</h2>
                    <p class="text-blue-600 font-semibold">수석</p>
                    <p class="text-gray-600 text-sm mt-2">∙前평화산업(주) 상무<br>∙前현대자동차(주) 부장<br>
                        ∙기술지도사<br>∙ISO9001/9001/14001<br>∙스마트 공장 컨설팅 등</p>
                </div>

                <div class="bg-white p-6 shadow-md rounded-lg flex flex-col items-center">
                    <img src="/img/consultant_jo_kyung_hwa.jpg" onerror="this.src='/img/profile.jpg'" alt="조경화"
                        class="w-24 h-24 mb-4 object-cover rounded-full border border-gray-200">
                    <h2 class="text-xl font-bold">조경화</h2>
                    <p class="text-blue-600 font-semibold">수석</p>
                    <p class="text-gray-600 text-sm mt-2">∙前이튼 인더스트리즈 이사<br>∙前한국필립모리스 부장<br>
                        ∙경영지도사, ESG 경영평가사<br>∙인사/노무/조직전략, M&A, ESG</p>
                </div>

                <div class="bg-white p-6 shadow-md rounded-lg flex flex-col items-center">
                    <img src="/img/consultant_kim_tae_ho.jpg" onerror="this.src='/img/profile.jpg'" alt="김태호"
                        class="w-24 h-24 mb-4 object-cover rounded-full border border-gray-200">
                    <h2 class="text-xl font-bold">김태호</h2>
                    <p class="text-blue-600 font-semibold">수석</p>
                    <p class="text-gray-600 text-sm mt-2">- </p>
                </div>

                <div class="bg-white p-6 shadow-md rounded-lg flex flex-col items-center">
                    <img src="/img/consultant_nam_ji_woo.jpg" onerror="this.src='/img/profile.jpg'" alt="남지우"
                        class="w-24 h-24 mb-4 object-cover rounded-full border border-gray-200">
                    <h2 class="text-xl font-bold">남지우</h2>
                    <p class="text-blue-600 font-semibold">수석</p>
                    <p class="text-gray-600 text-sm mt-2">- </p>
                </div>

                <div class="bg-white p-6 shadow-md rounded-lg flex flex-col items-center">
                    <img src="/img/consultant_lee_ho_rim.jpg" onerror="this.src='/img/profile.jpg'" alt="이호림"
                        class="w-24 h-24 mb-4 object-cover rounded-full border border-gray-200">
                    <h2 class="text-xl font-bold">이호림</h2>
                    <p class="text-blue-600 font-semibold">수석</p>
                    <p class="text-gray-600 text-sm mt-2">- </p>
                </div>

                <div class="bg-white p-6 shadow-md rounded-lg flex flex-col items-center">
                    <img src="/img/consultant_gong_young_dal.jpg" onerror="this.src='/img/profile.jpg'" alt="공영달"
                        class="w-24 h-24 mb-4 object-cover rounded-full border border-gray-200">
                    <h2 class="text-xl font-bold">공영달</h2>
                    <p class="text-blue-600 font-semibold">수석</p>
                    <p class="text-gray-600 text-sm mt-2">- </p>
                </div>

                <div class="bg-white p-6 shadow-md rounded-lg flex flex-col items-center">
                    <img src="/img/consultant_seo_kyung_gyu.jpg" onerror="this.src='/img/profile.jpg'" alt="서경규"
                        class="w-24 h-24 mb-4 object-cover rounded-full border border-gray-200">
                    <h2 class="text-xl font-bold">서경규</h2>
                    <p class="text-blue-600 font-semibold">수석</p>
                    <p class="text-gray-600 text-sm mt-2">- </p>
                </div>
            </div>
        </div>

    </div>
</section>

<?php
include_once(G5_PATH . '/tail.php');
?>


<script>
    // 각 탭의 ScrollTrigger 초기화를 위한 함수
    function resetScrollTrigger(triggerElement) {
        // 기존의 ScrollTrigger를 제거
        ScrollTrigger.getAll().forEach(st => st.kill());

        // 각 탭의 gsap 애니메이션을 다시 설정
        gsap.from(triggerElement + " .procedure_cont", {
            scrollTrigger: {
                trigger: triggerElement + " .procedure_cont",
                start: "top 100%",
                end: "bottom top",
                scrub: true,
                toggleClass: {
                    targets: triggerElement + " .procedure_cont",
                    className: "active"
                },
                once: true
            },
        });
    }

    // 페이지 탭 span 클릭 이벤트 핸들러 설정
    document.querySelectorAll(".page_tab span").forEach(span => {
        span.addEventListener("click", function () {
            // 클릭한 span의 관련된 탭 요소에 따라 초기화 실행
            const tabClass = this.getAttribute("data-tab"); // 예: "tab01", "tab02", "tab03"

            // 탭 클릭 시 모든 탭의 "active" 클래스를 제거
            document.querySelectorAll(".procedure_cont").forEach(cont => {
                cont.classList.remove("active");
            });

            // 해당 탭의 ScrollTrigger 초기화
            resetScrollTrigger("." + tabClass);
        });
    });

    gsap.from(".tab01 .procedure_cont", {
        scrollTrigger: {
            trigger: ".tab01 .procedure_cont",
            start: "top 100%",
            end: "bottom top",
            scrub: true,
            toggleClass: {
                targets: ".tab01 .procedure_cont",
                className: "active"
            },
            once: true
        },
    });


    gsap.from(".tab02 .procedure_cont", {
        scrollTrigger: {
            trigger: ".tab02 .procedure_cont",
            start: "top 100%",
            end: "bottom top",
            scrub: true,
            toggleClass: {
                targets: ".tab02 .procedure_cont",
                className: "active"
            },
            once: true
        },
    });


    gsap.from(".tab03 .procedure_cont", {
        scrollTrigger: {
            trigger: ".tab03 .procedure_cont",
            start: "top 100%",
            end: "bottom top",
            scrub: true,
            toggleClass: {
                targets: ".tab03 .procedure_cont",
                className: "active"
            },
            once: true
        },
    });
</script>