<?php
include_once('./_common.php');

define('_INDEX_', true);
if (!defined('_GNUBOARD_'))
    exit; // 개별 페이지 접근 불가

if (defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH . '/index.php');
    return;
}

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH . '/index.php');
    return;
}

include_once(G5_PATH . '/head.php');
?>
<section class="introSection">
    <img src="./img/logo.png" alt="">
</section>
<style>
    .top_navBox {
        display: block;
    }

    .sub-menuWrap {
        display: none;
    }

    #wrapper {
        margin-top: 0rem;
        margin-bottom: 0px;
    }

    #wrapper {
        padding: 0;
    }

    .top_navBox img {
        animation: shake 2.5s infinite;

    }

    .google-map {
        width: 100%;
        overflow: hidden;
    }

    .google-map iframe {
        margin-top: -150px;
    }

    .place-card {
        display: none !important;
    }

    .menu-container {
        display: none !important;
    }

    /* 말풍선 애니메이션 */
    @keyframes shake {
        0% {
            transform: translate(-50%, 100%);
        }

        50% {
            transform: translate(-50%, 110%);
        }

        100% {
            transform: translate(-50%, 100%);
        }
    }

    footer {
        padding-bottom: 4rem !important;
    }
</style>
<section class="section01">
    <div class="up_scale">
        <div class="movie_video" style="">
            <!-- 데스크탑 -->
            <div class="desktop">
                <div class="swiper swiperType01">
                    <div class="swiper-wrapper" id="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="./img/mainBg01.jpg" alt="">

                            <div class="sectionContainer">
                                <h2>기업의 가능성을 현실로,<br class="m_on"> <br class="dt_on">
                                    (주)케이비즈업
                                    <p>기술과 경영의 전문성을 결합하여 <br class="m_on"> <br class="dt_on">
                                        귀사의 잠재력을 지속 가능한 성과로 만들어 드립니다.</p>
                                </h2>
                                <a href="/page/support/inquiry.php" class="hero-cta">무료 상담 신청하기</a>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <img src="./img/mainBg01.jpg" alt="">

                            <div class="sectionContainer">
                                <h2>기술과 경영의 조화,<br class="m_on"> <br class="dt_on">
                                    최고의 전문 컨설팅 파트너
                                    <p>케이비즈업은 기업의 도전과 혁신을 실현하며, <br class="m_on"> <br class="dt_on">
                                        지속 가능한 성장의 길을 함께합니다.</p>
                                </h2>
                                <a href="/page/sub01/sub01_01.php" class="hero-cta">서비스 소개 보기</a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-next swiper-button">
                        <svg class="w-24 h-24" viewBox="0 0 120 120" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M45 25L75 60L45 95" stroke="white" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </div>
                    <div class="swiper-button-prev swiper-button">
                        <svg class="w-24 h-24" viewBox="0 0 120 120" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M75 95L45 60L75 25" stroke="white" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Trust Strip (New Stats Section) -->
<section class="trust-strip">
    <div class="sectionContainer">
        <div class="trust-grid">
            <div class="trust-item" data-aos="fade-up" data-aos-delay="100">
                <span class="trust-label">설립년도</span>
                <div class="trust-value"><span data-target="2025" class="counter">0</span>년</div>
            </div>
            <div class="divider"></div>
            <div class="trust-item" data-aos="fade-up" data-aos-delay="200">
                <span class="trust-label">컨설팅 분야</span>
                <div class="trust-value"><span class="counter" data-target="30">0</span>개</div>
            </div>
            <div class="divider"></div>
            <div class="trust-item" data-aos="fade-up" data-aos-delay="300">
                <span class="trust-label">컨설팅 실적</span>
                <div class="trust-value"><span class="counter" data-target="2197">0</span>+</div>
            </div>
            <div class="divider"></div>
            <div class="trust-item" data-aos="fade-up" data-aos-delay="400">
                <span class="trust-label">해외 실적</span>
                <div class="trust-value"><span class="counter" data-target="512">0</span>+</div>
            </div>
        </div>
    </div>
</section>

<section class="section02">
    <!-- Parallax Background Image -->
    <img src="./img/main_sub.jpg" alt="" class="sec02img">

    <div class="sectionContainer">
        <!-- Company Intro -->
        <div class="mx-auto flex flex-col md:flex-row gap-12 mb-20" data-aos="fade-up" data-aos-duration="1000">
            <div class="w-full text-center" data-aos="fade-up" data-aos-delay="200">
                <h2 class="text-primary font-extrabold text-lg tracking-widest uppercase mb-4">Partner for Growth</h2>
                <p class="text-3xl md:text-5xl font-medium leading-tight text-gray-900" data-aos="fade-up"
                    data-aos-delay="300">
                    기업의 성장과 성공을 위한<br class="m_on"> <br class="dt_on">
                    <span class="font-extrabold text-primary">기술기획 · R&D · 경영 전문 파트너</span>
                </p>
                <p class="text-lg text-gray-600 mt-8 leading-relaxed max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="400">
                    (주)케이비즈업은 기업의 잠재력을 성과로 전환하는 비즈니스 파트너입니다.<br class="dt_on">
                    정부조달, 혁신제품 인증, ESG 경영, 정책자금 연계 등<br class="dt_on">
                    기업 운영의 핵심 솔루션을 제공하여 고객사의 지속 가능한 성장을 함께 만들어갑니다.
                </p>
            </div>
        </div>

        <!-- Services Grid -->
        <div class="mt-12">
            <div class="text-center mb-12" data-aos="fade-up">
                 <h2 class="text-2xl font-bold text-gray-800">EXPERTISE</h2>
            </div>
            
            <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- 1. 정부조달 -->
                <div class="consulting-card bg-white p-6 shadow-lg" data-aos="fade-up" data-aos-delay="200">
                    <a href="/page/sub02/sub02_01.php" class="block overflow-hidden rounded-lg mb-4">
                        <img src="./img/main_box01.jpg" alt="정부조달 및 R&D" class="w-full h-48 object-cover transition duration-500 hover:scale-110">
                    </a>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">정부조달 및 R&D</h3>
                    <p class="text-sm text-gray-600 leading-relaxed break-keep">
                        우수조달, 혁신제품, MAS, 벤처나라 등록 및 NET/NEP/녹색인증 지원.
                    </p>
                </div>

                <!-- 2. 기술/경영 -->
                <div class="consulting-card bg-white p-6 shadow-lg md:mt-8" data-aos="fade-up" data-aos-delay="300">
                    <a href="/page/sub02/sub02_02.php" class="block overflow-hidden rounded-lg mb-4">
                        <img src="./img/main_box02.jpg" alt="기술·경영" class="w-full h-48 object-cover transition duration-500 hover:scale-110">
                    </a>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">기술 · 경영</h3>
                    <p class="text-sm text-gray-600 leading-relaxed break-keep">
                        스마트 공장, 정책자금, ESG 경영, 인사노무 및 조직 혁신 전략 수립.
                    </p>
                </div>

                <!-- 3. 창업/소상공인 -->
                <div class="consulting-card bg-white p-6 shadow-lg" data-aos="fade-up" data-aos-delay="400">
                    <a href="/page/sub02/sub02_03.php" class="block overflow-hidden rounded-lg mb-4">
                        <img src="./img/main_box03.jpg" alt="창업지원" class="w-full h-48 object-cover transition duration-500 hover:scale-110">
                    </a>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">창업 및 소상공인</h3>
                    <p class="text-sm text-gray-600 leading-relaxed break-keep">
                        예비/초기 창업 패키지 멘토링, 투자 유치(IR) 및 소상공인 맞춤형 지원.
                    </p>
                </div>

                <!-- 4. 인증 -->
                <div class="consulting-card bg-white p-6 shadow-lg md:mt-8" data-aos="fade-up" data-aos-delay="500">
                    <a href="/page/sub02/sub02_04.php" class="block overflow-hidden rounded-lg mb-4">
                        <img src="./img/main_box04.jpg" alt="인증" class="w-full h-48 object-cover transition duration-500 hover:scale-110">
                    </a>
                    <h3 class="text-xl font-bold text-gray-800 mb-2">기업 인증</h3>
                    <p class="text-sm text-gray-600 leading-relaxed break-keep">
                        ISO, 메인비즈, 이노비즈 등 기업 가치 제고를 위한 필수 인증 획득.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section03 bg-primary">
    <div class="sectionContainer">
        <div class="mx-auto flex flex-col md:flex-row gap-4 md:gap-24" data-aos="fade-up" data-aos-duration="1000">
            <div class="flex flex-wrap content-start" data-aos="fade-up" data-aos-delay="200">
                <div class=" md:w-full w-1/2 md:justify-start justify-between">
                    <h2 class="w-full text-white font-extrabold text-lg">NOTICE</h2>
                    <p class="text-3xl text-white md:text-6xl font-medium mt-4 leading-tight w-full" data-aos="fade-up"
                        data-aos-delay="400">
                        <span class="font-extrabold">공지사항</span>
                    </p>
                    <p class="text-xl text-white font-medium mt-0 md:mt-4 leading-tight">
                        케이비즈업의 최근소식과 <br>
                        공지사항입니다.
                    </p>
                    <div class="w-full">
                        <a href="/bbs/board.php?bo_table=notice"
                            class="w-auto mt-6 inline-flex items-center text-white text-lg font-semibold"
                            data-aos="fade-up" data-aos-delay="600">
                            자세히보기
                            <span class="ml-2">
                                <svg class="w-7 h-7" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M30 15C30 6.71573 23.2843 -1.01779e-06 15 -6.55671e-07C6.71573 -2.93554e-07 -1.01779e-06 6.71573 -6.55671e-07 15C-2.93554e-07 23.2843 6.71573 30 15 30C23.2843 30 30 23.2843 30 15Z"
                                        fill="white" />
                                    <path d="M12.75 10.5L17.25 15L12.75 19.5" stroke="#0B3FC4" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </span>
                        </a>
                    </div>
                </div>
                <div class=" md:w-full w-1/2 md:justify-start justify-between">

                    <div class="flex items-center gap-4 mt-40 justify-end md:justify-start">
                        <div class="swiper-button-prev">
                            <svg width="8" height="14" viewBox="0 0 8 14" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M7 13L1 7L7 1" stroke="white" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </div>
                        <div class="bottom-2 right-4 text-white text-xl" id="swiper-counter"></div>
                        <div class="swiper-button-next">
                            <svg width="8" height="14" viewBox="0 0 8 14" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L7 7L1 13" stroke="white" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                        </div>
                    </div>
                </div>

            </div>
            <?php
            echo latest('/notice', 'notice', 4, 23);        // 최소설치시 자동생성되는 공지사항게시판
            ?>
        </div>
    </div>
</section>



<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>



<script>
    document.addEventListener("DOMContentLoaded", function () {

        var center = new Swiper(".swiperType01", {
            slidesPerView: 1,
            speed: 1600,
            loop: true,
            effect: "fade",
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: ".swiperType01 .swiper-button-next",
                prevEl: ".swiperType01 .swiper-button-prev",
            },
        });


        var swiper = new Swiper(".noticeLatest", {
            slidesPerView: 1.2,
            spaceBetween: 20,
            // autoplay: {
            //     delay: 4000,
            //     disableOnInteraction: false
            // },
            navigation: {
                nextEl: ".section03 .swiper-button-next",
                prevEl: ".section03 .swiper-button-prev",
            },
            pagination: {
                el: ".noticeLatest .swiper-pagination", // 클래스 선택자 수정
                clickable: true,
            },
            on: {
                init: function () {
                    let totalSlides = this.slides.length - (this.loopedSlides || 0);
                    document.getElementById("swiper-counter").innerHTML =
                        `<b>01</b> / ${String(totalSlides).padStart(2, '0')}`;
                },
                slideChange: function () {
                    document.getElementById("swiper-counter").innerHTML =
                        `<b>${String(this.realIndex + 1).padStart(2, '0')}</b> / ${String(this.slides.length - 2).padStart(2, '0')}`;
                }
            },
            breakpoints: {
                768: {
                    slidesPerView: 1.5
                },
                1024: {
                    slidesPerView: 2.5
                }
            }
        });


        // 퀵바 탑버튼
        document.getElementById('top-button').addEventListener('click', function () {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    });
</script>



<?php
include_once(G5_PATH . '/tail.php');
?>