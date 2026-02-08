<?php
include_once('../../common.php');
$g5['title'] = "Q&A";
include_once(G5_PATH . '/head.php');
?>

<section class="ppbSpWrap py-10 md:py-20 section00">
    <div class="container mx-auto px-6">
        <div class="subTitle mb-12 text-center">
            <h2 class="font-extrabold text-3xl md:text-4xl mb-4"><b class="text-primary">Q&A</b></h2>
            <p class="text-gray-600 text-lg">자주 묻는 질문과 답변을 확인하세요.</p>
        </div>

        <!-- Tab Navigation -->
        <div class="page_tab my-8 flex justify-center">
            <span class="active px-6 py-2 cursor-pointer">FAQ</span>
            <span class="px-6 py-2 cursor-pointer">전문상담 Q&A</span>
        </div>

        <!-- Tab 1: FAQ Section -->
        <div class="tab01 tabItems tabActive max-w-4xl mx-auto">
            <div class="space-y-4">
                <!-- FAQ Item 1 -->
                <div class="faq-item bg-white rounded-lg shadow-md overflow-hidden">
                    <button
                        class="faq-question w-full text-left px-6 py-4 flex justify-between items-center hover:bg-gray-50 transition">
                        <span class="font-bold text-lg text-gray-800">케이비즈업의 주요 서비스는 무엇인가요?</span>
                        <svg class="faq-icon w-6 h-6 transform transition-transform" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div class="faq-answer hidden px-6 pb-4 text-gray-600">
                        <p class="leading-relaxed">케이비즈업은 정부조달 및 R&D, 기술·경영 컨설팅, 창업 및 소상공인 지원, 각종 인증 지원 등 기업의 전방위적인 성장을
                            돕는 전문 컨설팅 서비스를 제공합니다. 특히 정부지원사업 선정부터 사후관리까지 원스톱 솔루션을 제공하고 있습니다.</p>
                    </div>
                </div>

                <!-- FAQ Item 2 -->
                <div class="faq-item bg-white rounded-lg shadow-md overflow-hidden">
                    <button
                        class="faq-question w-full text-left px-6 py-4 flex justify-between items-center hover:bg-gray-50 transition">
                        <span class="font-bold text-lg text-gray-800">컨설팅 비용은 어떻게 되나요?</span>
                        <svg class="faq-icon w-6 h-6 transform transition-transform" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div class="faq-answer hidden px-6 pb-4 text-gray-600">
                        <p class="leading-relaxed">컨설팅 비용은 프로젝트의 규모와 범위에 따라 상이합니다. 초기 상담은 무료로 진행되며, 정확한 견적은 기업의 니즈를 파악한
                            후 맞춤형으로 제시됩니다. 정부지원사업의 경우 성공보수제로 운영되는 경우도 있습니다.</p>
                    </div>
                </div>

                <!-- FAQ Item 3 -->
                <div class="faq-item bg-white rounded-lg shadow-md overflow-hidden">
                    <button
                        class="faq-question w-full text-left px-6 py-4 flex justify-between items-center hover:bg-gray-50 transition">
                        <span class="font-bold text-lg text-gray-800">컨설팅 진행 기간은 얼마나 걸리나요?</span>
                        <svg class="faq-icon w-6 h-6 transform transition-transform" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div class="faq-answer hidden px-6 pb-4 text-gray-600">
                        <p class="leading-relaxed">컨설팅 종류에 따라 기간이 달라집니다. 인증 컨설팅은 약 3~6개월, R&D 과제 기획 및 신청은 1~2개월, 정부조달
                            등록은 2~3개월 정도 소요됩니다. 긴급한 경우 협의를 통해 일정 단축이 가능합니다.</p>
                    </div>
                </div>

                <!-- FAQ Item 4 -->
                <div class="faq-item bg-white rounded-lg shadow-md overflow-hidden">
                    <button
                        class="faq-question w-full text-left px-6 py-4 flex justify-between items-center hover:bg-gray-50 transition">
                        <span class="font-bold text-lg text-gray-800">상담 신청은 어떻게 하나요?</span>
                        <svg class="faq-icon w-6 h-6 transform transition-transform" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div class="faq-answer hidden px-6 pb-4 text-gray-600">
                        <p class="leading-relaxed">홈페이지의 '문의하기' 메뉴를 통해 온라인으로 상담 신청이 가능하며, 대표번호 051-714-2770으로 전화 상담도
                            가능합니다. 신청 후 1영업일 내 담당 컨설턴트가 연락드립니다.</p>
                    </div>
                </div>

                <!-- FAQ Item 5 -->
                <div class="faq-item bg-white rounded-lg shadow-md overflow-hidden">
                    <button
                        class="faq-question w-full text-left px-6 py-4 flex justify-between items-center hover:bg-gray-50 transition">
                        <span class="font-bold text-lg text-gray-800">지방에 있는 기업도 컨설팅을 받을 수 있나요?</span>
                        <svg class="faq-icon w-6 h-6 transform transition-transform" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div class="faq-answer hidden px-6 pb-4 text-gray-600">
                        <p class="leading-relaxed">네, 전국 어디서나 컨설팅이 가능합니다. 대면 미팅이 필요한 경우 출장 지원이 가능하며, 화상회의 및 온라인 컨설팅도 활발히
                            진행되고 있습니다.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tab 2: Q&A Section -->
        <div class="tab02 tabItems max-w-4xl mx-auto">
            <div class="space-y-4">
                <!-- Q&A Item 1 -->
                <div class="faq-item bg-white rounded-lg shadow-md overflow-hidden">
                    <button
                        class="faq-question w-full text-left px-6 py-4 flex justify-between items-center hover:bg-gray-50 transition">
                        <span class="font-bold text-lg text-gray-800">우수조달물품 지정은 어떤 제품이 가능한가요?</span>
                        <svg class="faq-icon w-6 h-6 transform transition-transform" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div class="faq-answer hidden px-6 pb-4 text-gray-600">
                        <p class="leading-relaxed">우수조달물품 지정은 순수 국내 기술로 개발되고 국내에서 생산된 제품 중 성능, 품질, 가격 경쟁력이 우수한 제품이
                            대상입니다. NET, NEP, 녹색인증 제품 등 관련 인증을 보유한 제품이 유리하며, 신청 전 기술성 평가와 시장성 검토가 필요합니다.</p>
                    </div>
                </div>

                <!-- Q&A Item 2 -->
                <div class="faq-item bg-white rounded-lg shadow-md overflow-hidden">
                    <button
                        class="faq-question w-full text-left px-6 py-4 flex justify-between items-center hover:bg-gray-50 transition">
                        <span class="font-bold text-lg text-gray-800">정부 R&D 과제 신청 시 필요한 서류는 무엇인가요?</span>
                        <svg class="faq-icon w-6 h-6 transform transition-transform" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div class="faq-answer hidden px-6 pb-4 text-gray-600">
                        <p class="leading-relaxed">사업계획서, 기업 현황 및 재무제표, 연구개발 계획서, 기술성 및 사업성 평가 자료 등이 필요합니다. 기관별로 요구 서류가
                            상이할 수 있으며, 저희 컨설팅을 통해 완벽한 서류 준비와 작성 지도를 받으실 수 있습니다.</p>
                    </div>
                </div>

                <!-- Q&A Item 3 -->
                <div class="faq-item bg-white rounded-lg shadow-md overflow-hidden">
                    <button
                        class="faq-question w-full text-left px-6 py-4 flex justify-between items-center hover:bg-gray-50 transition">
                        <span class="font-bold text-lg text-gray-800">ISO 인증은 어떤 종류가 있나요?</span>
                        <svg class="faq-icon w-6 h-6 transform transition-transform" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div class="faq-answer hidden px-6 pb-4 text-gray-600">
                        <p class="leading-relaxed">대표적으로 ISO 9001(품질경영시스템), ISO 14001(환경경영시스템), ISO 45001(안전보건경영시스템),
                            ISO 27001(정보보호경영시스템) 등이 있습니다. 업종과 기업 상황에 맞는 인증을 선택하여 진행하며, 복수 인증 동시 취득도 가능합니다.</p>
                    </div>
                </div>

                <!-- Q&A Item 4 -->
                <div class="faq-item bg-white rounded-lg shadow-md overflow-hidden">
                    <button
                        class="faq-question w-full text-left px-6 py-4 flex justify-between items-center hover:bg-gray-50 transition">
                        <span class="font-bold text-lg text-gray-800">예비창업패키지와 초기창업패키지의 차이는 무엇인가요?</span>
                        <svg class="faq-icon w-6 h-6 transform transition-transform" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div class="faq-answer hidden px-6 pb-4 text-gray-600">
                        <p class="leading-relaxed">예비창업패키지는 사업자등록 전 예비창업자가 신청 가능하며 최대 1억원 지원, 초기창업패키지는 창업 3년 이내 기업이 대상이며
                            역시 최대 1억원 지원됩니다. 둘 다 사업화 자금과 창업 교육을 제공하지만, 신청 시점과 사업 단계에 따라 구분됩니다.</p>
                    </div>
                </div>

                <!-- Q&A Item 5 -->
                <div class="faq-item bg-white rounded-lg shadow-md overflow-hidden">
                    <button
                        class="faq-question w-full text-left px-6 py-4 flex justify-between items-center hover:bg-gray-50 transition">
                        <span class="font-bold text-lg text-gray-800">소상공인 희망리턴패키지는 어떤 지원을 받을 수 있나요?</span>
                        <svg class="faq-icon w-6 h-6 transform transition-transform" fill="none" stroke="currentColor"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7">
                            </path>
                        </svg>
                    </button>
                    <div class="faq-answer hidden px-6 pb-4 text-gray-600">
                        <p class="leading-relaxed">폐업 위기에 처한 소상공인을 대상으로 경영 진단, 전문 컨설팅, 판로 개척, 마케팅 지원 등을 제공합니다. 최대 200만원
                            상당의 무료 컨설팅과 함께 재기를 위한 체계적인 지원 프로그램을 받으실 수 있습니다.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .page_tab span {
        border-bottom: 3px solid transparent;
        transition: all 0.3s ease;
    }

    .page_tab span.active {
        border-bottom: 3px solid #0C3A8D;
        color: #0C3A8D;
        font-weight: 700;
    }

    .page_tab span:hover {
        color: #0C3A8D;
    }

    .tabItems {
        display: none;
    }

    .tabItems.tabActive {
        display: block;
    }

    .faq-icon {
        transition: transform 0.3s ease;
    }

    .faq-item.active .faq-icon {
        transform: rotate(180deg);
    }

    .faq-answer {
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.3s ease;
    }

    .faq-item.active .faq-answer {
        max-height: 500px;
        padding-top: 1rem;
    }
</style>

<script>
    // Tab switching
    document.addEventListener('DOMContentLoaded', function () {
        const tabButtons = document.querySelectorAll('.page_tab span');
        const tabContents = document.querySelectorAll('.tabItems');

        // Initial setup
        tabContents.forEach((content, index) => {
            if (index === 0) {
                content.classList.add('tabActive');
            } else {
                content.classList.remove('tabActive');
            }
        });

        tabButtons.forEach((button, index) => {
            button.addEventListener('click', function () {
                // Remove active class from all tabs
                tabButtons.forEach(btn => btn.classList.remove('active'));
                tabContents.forEach(content => content.classList.remove('tabActive'));

                // Add active class to clicked tab
                this.classList.add('active');
                tabContents[index].classList.add('tabActive');

                // Close all accordions in the new tab
                const accordions = tabContents[index].querySelectorAll('.faq-item');
                accordions.forEach(item => {
                    item.classList.remove('active');
                    const answer = item.querySelector('.faq-answer');
                    answer.classList.add('hidden');
                });
            });
        });

        // Accordion functionality
        const faqQuestions = document.querySelectorAll('.faq-question');

        faqQuestions.forEach(question => {
            question.addEventListener('click', function () {
                const faqItem = this.parentElement;
                const answer = faqItem.querySelector('.faq-answer');
                const isActive = faqItem.classList.contains('active');

                // Close all other accordions in the same tab
                const currentTab = faqItem.closest('.tabItems');
                const allItems = currentTab.querySelectorAll('.faq-item');
                allItems.forEach(item => {
                    if (item !== faqItem) {
                        item.classList.remove('active');
                        item.querySelector('.faq-answer').classList.add('hidden');
                    }
                });

                // Toggle current accordion
                if (isActive) {
                    faqItem.classList.remove('active');
                    answer.classList.add('hidden');
                } else {
                    faqItem.classList.add('active');
                    answer.classList.remove('hidden');
                }
            });
        });
    });
</script>

<?php
include_once(G5_PATH . '/tail.php');
?>