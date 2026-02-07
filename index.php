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
    <img src="/img/logo.png" alt="">
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
                            <img src="/img/mainBg01.jpg" alt="">

                            <div class="sectionContainer">
                                <h2>기업의 가능성을 현실로,<br class="m_on"> <br class="dt_on">
                                    (주)케이비즈업
                                    <p>기술과 경영의 전문성을 결합하여 <br class="m_on"> <br class="dt_on">
                                        귀사의 잠재력을 지속 가능한 성과로 만들어 드립니다.</p>
                                </h2>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <img src="/img/mainBg01.jpg" alt="">

                            <div class="sectionContainer">
                                <h2>기술과 경영의 조화,<br class="m_on"> <br class="dt_on">
                                    최고의 전문 컨설팅 파트너
                                    <p>케이비즈업은 기업의 도전과 혁신을 실현하며, <br class="m_on"> <br class="dt_on">
                                        지속 가능한 성장의 길을 함께합니다.</p>
                                </h2>
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
<section class="section02">
    <div class="sectionContainer">

        <div class="text-white md:px-0 lg:px-0">
            <div class="mx-auto flex flex-col md:flex-row gap-12" data-aos="fade-up" data-aos-duration="1000">
                <div class="flex flex-wrap content-start" data-aos="fade-up" data-aos-delay="200">
                    <h2 class="w-full text-primary font-extrabold text-lg">COMPANY</h2>
                    <p class="text-3xl md:text-5xl font-medium mt-4 leading-tight" data-aos="fade-up"
                        data-aos-delay="400">
                        기업의 성장과 성공을 위한<br class="m_on"> <br class="dt_on">
                        <span class="font-extrabold">기술기획, R&D, 경영 전문 파트너</span>
                    </p>
                    <a href="#" class="w-full mt-6 inline-flex items-center text-primary text-lg font-semibold"
                        data-aos="fade-up" data-aos-delay="600">
                        자세히보기
                        <span class="ml-2"><svg class="w-7 h-7" viewBox="0 0 30 30" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M30 15C30 6.71573 23.2843 -1.01779e-06 15 -6.55671e-07C6.71573 -2.93554e-07 -1.01779e-06 6.71573 -6.55671e-07 15C-2.93554e-07 23.2843 6.71573 30 15 30C23.2843 30 30 23.2843 30 15Z"
                                    fill="#0B3FC4" />
                                <path d="M12.75 10.5L17.25 15L12.75 19.5" stroke="white" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg></span>
                    </a>
                    <p class="text-base text-gray-600 mt-6 leading-relaxed" data-aos="fade-up" data-aos-delay="500">
                        (주)케이비즈업은 기업의 성장과 성공을 위한 기술기획, R&D, 조달 전문 컨설팅 및 종합 경영 컨설팅을 제공하는 비즈니스 파트너입니다. 우리는 정부조달, 혁신제품,
                        녹색인증 등 조달 시장 진입을 지원하고, 경영 전략과 ESG, 정책자금 연계 등 기업 운영 전반에 걸친 맞춤형 솔루션을 통해 고객사의 지속 가능한 성장을 돕습니다.
                    </p>
                </div>

                <div
                    class="flex flex-wrap gap-6 md:gap-x-36 md:gap-y-24 text-gray-300 w-full md:w-3/5 md:justify-end justify-between md:mt-0 mt-6 text-gray-900">
                    <div class="max-w-220px w-2/5 md:w-1/2" data-aos="fade-up" data-aos-delay="200">
                        <div class="flex items-center gap-2 text-primary">
                            <span class="text-xl"><svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M10.3333 3.33331C10.3333 2.78103 9.88561 2.33331 9.33333 2.33331C8.78105 2.33331 8.33333 2.78103 8.33333 3.33331V5.43899C6.41422 5.59266 5.15435 5.96981 4.22875 6.89541C3.30315 7.82101 2.92601 9.08087 2.77234 11H29.2276C29.074 9.08087 28.6968 7.82101 27.7712 6.89541C26.8456 5.96981 25.5857 5.59266 23.6667 5.43899V3.33331C23.6667 2.78103 23.2189 2.33331 22.6667 2.33331C22.1144 2.33331 21.6667 2.78103 21.6667 3.33331V5.35051C20.7796 5.33331 19.7853 5.33331 18.6667 5.33331H13.3333C12.2146 5.33331 11.2204 5.33331 10.3333 5.35051V3.33331Z"
                                        fill="#0B3FC4" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M2.66663 16C2.66663 14.8813 2.66663 13.8871 2.68383 13H29.3161C29.3333 13.8871 29.3333 14.8813 29.3333 16V18.6667C29.3333 23.6949 29.3333 26.2092 27.7712 27.7712C26.2092 29.3333 23.6949 29.3333 18.6666 29.3333H13.3333C8.30497 29.3333 5.79083 29.3333 4.22872 27.7712C2.66663 26.2092 2.66663 23.6949 2.66663 18.6667V16ZM22.6666 18.6667C23.403 18.6667 24 18.0697 24 17.3333C24 16.5969 23.403 16 22.6666 16C21.9302 16 21.3333 16.5969 21.3333 17.3333C21.3333 18.0697 21.9302 18.6667 22.6666 18.6667ZM22.6666 24C23.403 24 24 23.4031 24 22.6667C24 21.9303 23.403 21.3333 22.6666 21.3333C21.9302 21.3333 21.3333 21.9303 21.3333 22.6667C21.3333 23.4031 21.9302 24 22.6666 24ZM17.3333 17.3333C17.3333 18.0697 16.7364 18.6667 16 18.6667C15.2636 18.6667 14.6666 18.0697 14.6666 17.3333C14.6666 16.5969 15.2636 16 16 16C16.7364 16 17.3333 16.5969 17.3333 17.3333ZM17.3333 22.6667C17.3333 23.4031 16.7364 24 16 24C15.2636 24 14.6666 23.4031 14.6666 22.6667C14.6666 21.9303 15.2636 21.3333 16 21.3333C16.7364 21.3333 17.3333 21.9303 17.3333 22.6667ZM9.33329 18.6667C10.0697 18.6667 10.6666 18.0697 10.6666 17.3333C10.6666 16.5969 10.0697 16 9.33329 16C8.59692 16 7.99996 16.5969 7.99996 17.3333C7.99996 18.0697 8.59692 18.6667 9.33329 18.6667ZM9.33329 24C10.0697 24 10.6666 23.4031 10.6666 22.6667C10.6666 21.9303 10.0697 21.3333 9.33329 21.3333C8.59692 21.3333 7.99996 21.9303 7.99996 22.6667C7.99996 23.4031 8.59692 24 9.33329 24Z"
                                        fill="#0B3FC4" />
                                </svg></span>
                            <span class="text-2xl font-semibold">설립년도</span>
                        </div>
                        <p class="text-7xl font-extrabold mt-2">
                            <span data-target="2025" class="counter">0</span><span class="text-2xl">년</span>
                        </p>
                    </div>

                    <div class="max-w-220px w-2/5 md:w-1/2" data-aos="fade-up" data-aos-delay="400">
                        <div class="flex items-center gap-2 text-primary">
                            <span class="text-xl"><svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M22.0252 22.0018C22.2586 21.8198 22.4702 21.6082 22.8935 21.1848L28.17 15.9083C28.2975 15.7808 28.2391 15.5611 28.0687 15.5019C27.4459 15.2859 26.6356 14.8802 25.8778 14.1223C25.1199 13.3644 24.7142 12.5542 24.4982 11.9313C24.439 11.7609 24.2192 11.7025 24.0918 11.8301L18.8152 17.1066C18.3919 17.5299 18.1803 17.7415 17.9983 17.9748C17.7836 18.2502 17.5995 18.5479 17.4494 18.8631C17.322 19.1302 17.2274 19.4142 17.0382 19.982L16.7935 20.7158L16.4046 21.8824L16.0399 22.9764C15.9468 23.2559 16.0195 23.5639 16.2278 23.7723C16.4362 23.9806 16.7442 24.0532 17.0236 23.9602L18.1176 23.5955L19.2843 23.2066L20.018 22.9619C20.5858 22.7727 20.8699 22.678 21.137 22.5507C21.4522 22.4006 21.7499 22.2164 22.0252 22.0018Z"
                                        fill="#0B3FC4" />
                                    <path
                                        d="M29.822 14.2562C30.9482 13.13 30.9482 11.3041 29.822 10.178C28.6958 9.05177 26.87 9.05177 25.7437 10.178L25.5741 10.3476C25.4104 10.5113 25.3362 10.7399 25.3772 10.9678C25.4029 11.1111 25.4505 11.3207 25.5373 11.5707C25.7108 12.0708 26.0384 12.7273 26.6556 13.3444C27.2726 13.9616 27.9292 14.2892 28.4292 14.4626C28.6793 14.5494 28.8888 14.597 29.0321 14.6228C29.26 14.6637 29.4886 14.5896 29.6524 14.4258L29.822 14.2562Z"
                                        fill="#0B3FC4" />
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M5.56209 4.22878C4 5.79089 4 8.30503 4 13.3334V18.6667C4 23.695 4 26.2092 5.56209 27.7712C7.1242 29.3334 9.63835 29.3334 14.6667 29.3334H17.3333C22.3616 29.3334 24.8759 29.3334 26.4379 27.7712C27.9749 26.2342 27.9996 23.7755 28 18.9068L24.2423 22.6646C23.8825 23.0244 23.588 23.3192 23.2553 23.5788C22.8655 23.8828 22.4437 24.1435 21.9975 24.3562C21.6165 24.5376 21.2212 24.6694 20.7384 24.83L17.6561 25.8575C16.658 26.1902 15.5576 25.9304 14.8136 25.1864C14.0697 24.4424 13.8099 23.342 14.1427 22.3439L14.5073 21.25L15.1408 19.3495L15.17 19.2618C15.3308 18.779 15.4624 18.3835 15.6439 18.0026C15.8565 17.5563 16.1172 17.1346 16.4213 16.7448C16.6808 16.412 16.9756 16.1175 17.3356 15.7578L22.6775 10.4159L24.16 8.93341L24.3296 8.76378C25.2835 7.8099 26.5337 7.3331 27.784 7.33335C27.5823 5.95929 27.1921 4.98305 26.4379 4.22878C24.8759 2.66669 22.3616 2.66669 17.3333 2.66669H14.6667C9.63835 2.66669 7.1242 2.66669 5.56209 4.22878ZM9.66667 12C9.66667 11.4477 10.1144 11 10.6667 11H19.3333C19.8856 11 20.3333 11.4477 20.3333 12C20.3333 12.5523 19.8856 13 19.3333 13H10.6667C10.1144 13 9.66667 12.5523 9.66667 12ZM9.66667 17.3334C9.66667 16.7811 10.1144 16.3334 10.6667 16.3334H14C14.5523 16.3334 15 16.7811 15 17.3334C15 17.8856 14.5523 18.3334 14 18.3334H10.6667C10.1144 18.3334 9.66667 17.8856 9.66667 17.3334ZM9.66667 22.6667C9.66667 22.1144 10.1144 21.6667 10.6667 21.6667H12.6667C13.2189 21.6667 13.6667 22.1144 13.6667 22.6667C13.6667 23.219 13.2189 23.6667 12.6667 23.6667H10.6667C10.1144 23.6667 9.66667 23.219 9.66667 22.6667Z"
                                        fill="#0B3FC4" />
                                </svg>
                            </span>
                            <span class="text-2xl font-semibold">컨설팅 분야</span>
                        </div>
                        <span class="text-7xl font-extrabold mt-2 counter" data-target="30"></span><span
                            class="text-2xl">개</span></p>
                    </div>

                    <div class="max-w-220px w-2/5 md:w-1/2" data-aos="fade-up" data-aos-delay="600">
                        <div class="flex items-center gap-2 text-primary">
                            <span class="text-xl"><svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M23.0572 3.05715C22.6666 3.44768 22.6666 4.07621 22.6666 5.33329V22.6666C22.6666 23.9237 22.6666 24.5522 23.0572 24.9428C23.4477 25.3333 24.0762 25.3333 25.3333 25.3333C26.5904 25.3333 27.2189 25.3333 27.6094 24.9428C28 24.5522 28 23.9237 28 22.6666V5.33329C28 4.07621 28 3.44768 27.6094 3.05715C27.2189 2.66663 26.5904 2.66663 25.3333 2.66663C24.0762 2.66663 23.4477 2.66663 23.0572 3.05715Z"
                                        fill="#0B3FC4" />
                                    <path
                                        d="M13.3334 9.33329C13.3334 8.07621 13.3334 7.44768 13.7239 7.05715C14.1144 6.66663 14.743 6.66663 16 6.66663C17.2571 6.66663 17.8856 6.66663 18.2762 7.05715C18.6667 7.44768 18.6667 8.07621 18.6667 9.33329V22.6666C18.6667 23.9237 18.6667 24.5522 18.2762 24.9428C17.8856 25.3333 17.2571 25.3333 16 25.3333C14.743 25.3333 14.1144 25.3333 13.7239 24.9428C13.3334 24.5522 13.3334 23.9237 13.3334 22.6666V9.33329Z"
                                        fill="#0B3FC4" />
                                    <path
                                        d="M4.39052 12.3905C4 12.7811 4 13.4096 4 14.6667V22.6667C4 23.9237 4 24.5523 4.39052 24.9428C4.78105 25.3333 5.40959 25.3333 6.66667 25.3333C7.92375 25.3333 8.55228 25.3333 8.94281 24.9428C9.33333 24.5523 9.33333 23.9237 9.33333 22.6667V14.6667C9.33333 13.4096 9.33333 12.7811 8.94281 12.3905C8.55228 12 7.92375 12 6.66667 12C5.40959 12 4.78105 12 4.39052 12.3905Z"
                                        fill="#0B3FC4" />
                                    <path
                                        d="M4 28.3334C3.44772 28.3334 3 28.7811 3 29.3334C3 29.8856 3.44772 30.3334 4 30.3334H28C28.5523 30.3334 29 29.8856 29 29.3334C29 28.7811 28.5523 28.3334 28 28.3334H4Z"
                                        fill="#0B3FC4" />
                                </svg></span>
                            <span class="text-2xl font-semibold">컨설팅 실적</span>
                        </div>
                        <span class="text-7xl font-extrabold mt-2 counter" data-target="2197"></span><span
                            class="text-7xl">+</span></p>
                    </div>

                    <div class="max-w-220px w-2/5 md:w-1/2" data-aos="fade-up" data-aos-delay="800">
                        <div class="flex items-center gap-2 text-primary">
                            <span class="text-xl"><svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M26.6667 18.3333C26.6667 17.781 26.219 17.3333 25.6667 17.3333H21.6667C21.1144 17.3333 20.6667 17.781 20.6667 18.3333V27.3333H18.6667V5.66663C18.6667 4.69555 18.6646 4.06784 18.6024 3.60533C18.544 3.17159 18.4499 3.03564 18.3738 2.95952C18.2976 2.8834 18.1618 2.78925 17.728 2.73093C17.2655 2.66875 16.6378 2.66663 15.6667 2.66663C14.6956 2.66663 14.0679 2.66875 13.6054 2.73093C13.1717 2.78925 13.0357 2.8834 12.9596 2.95952C12.8835 3.03564 12.7893 3.17159 12.731 3.60533C12.6688 4.06784 12.6667 4.69555 12.6667 5.66663V27.3333H10.6667V11.6666C10.6667 11.1143 10.219 10.6666 9.66671 10.6666H5.66671C5.11443 10.6666 4.66671 11.1143 4.66671 11.6666V27.3333H2.66671H2.33337C1.78109 27.3333 1.33337 27.781 1.33337 28.3333C1.33337 28.8856 1.78109 29.3333 2.33337 29.3333H29C29.5523 29.3333 30 28.8856 30 28.3333C30 27.781 29.5523 27.3333 29 27.3333H28.6667H26.6667V18.3333Z"
                                        fill="#0B3FC4" />
                                </svg></span>
                            <span class="text-2xl font-semibold">해외 컨설팅 실적</span>
                        </div>
                        <span class="text-7xl font-extrabold mt-2 counter" data-target="512"></span><span
                            class="text-7xl">+</span></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="sec02img"></div> -->
        <img src="/img/main_sub.jpg" alt="" class="sec02img">
        <div class="text-white md:px-0 lg:px-0">
            <div class="mx-auto flex flex-col md:flex-row gap-12 flex-wrap">
                <div class="flex flex-wrap content-start mt-28" data-aos="fade-up" data-aos-duration="1000">
                    <h2 class="w-full text-primary font-extrabold text-lg" data-aos="fade-up" data-aos-delay="200">
                        CONSULTING</h2>
                    <p class="text-3xl md:text-5xl font-medium mt-4 leading-tight" data-aos="fade-up"
                        data-aos-delay="400">
                        <span class="font-extrabold">정부조달, 기술경영, 창업지원</span><br>
                        기업 성장의 A to Z를 책임집니다.
                    </p>

                </div>
            </div>

            <div class="grid grid-cols-2 sm:grid-cols-2 lg:grid-cols-4 gap-6 mt-20">
                <!-- 첫 번째 카드 -->
                <div class="text-center" data-aos="fade-up" data-aos-delay="200">
                    <a href="/page/sub02/sub02_01.php">
                        <img src="/img/main_box01.jpg" alt="정부조달 및 R&D"
                            class="w-full rounded-xl shadow-md hover:scale-105 transition duration-300">
                    </a>
                    <p class="mt-4 text-gray-800 font-semibold text-xl">정부조달 및 R&D</p>
                    <p class="mt-2 text-gray-600 text-sm break-keep">
                        우수조달 및 혁신제품 인증, 다수공급자계약(MAS), 벤처나라 등록을 지원하며 신기술(NET)·신제품(NEP)·녹색인증 등 기술 인증과 특허 개발 전략을 수립해 기술을
                        시장의 성과로 전환합니다.
                    </p>
                </div>

                <!-- 두 번째 카드 -->
                <div class="text-center relative md:top-8" data-aos="fade-up" data-aos-delay="400">
                    <a href="/page/sub02/sub02_02.php">
                        <img src="/img/main_box02.jpg" alt="기술·경영"
                            class="w-full rounded-xl shadow-md hover:scale-105 transition duration-300">
                    </a>
                    <p class="mt-4 text-gray-800 font-semibold text-xl">기술·경영</p>
                    <p class="mt-2 text-gray-600 text-sm break-keep">
                        정책자금 및 정부 지원사업 연계, 스마트 제조혁신, ESG 경영 컨설팅을 제공합니다. 또한 인사노무, 조직 혁신, M&A 전략 수립 등 기업 경영 전반의 효율성을 높이는
                        전문 솔루션을 지원합니다.
                    </p>
                </div>

                <!-- 세 번째 카드 -->
                <div class="text-center" data-aos="fade-up" data-aos-delay="600">
                    <a href="/page/sub02/sub02_03.php">
                        <img src="/img/main_box03.jpg" alt="창업 및 소상공인 지원"
                            class="w-full rounded-xl shadow-md hover:scale-105 transition duration-300">
                    </a>
                    <p class="mt-4 text-gray-800 font-semibold text-xl">창업 및 소상공인 지원</p>
                    <p class="mt-2 text-gray-600 text-sm break-keep">
                        창업 패키지 및 RISE 사업 운영 지원, 창업 멘토링, 투자 유치 컨설팅을 제공합니다. 소상공인을 위한 맞춤형 컨설팅을 통해 작은 시작이 큰 비즈니스 성공으로 이어지도록
                        돕습니다.
                    </p>
                </div>

                <!-- 네 번째 카드 -->
                <div class="text-center relative md:top-8" data-aos="fade-up" data-aos-delay="800">
                    <a href="/page/sub02/sub02_04.php">
                        <img src="/img/main_box04.jpg" alt="인증"
                            class="w-full rounded-xl shadow-md hover:scale-105 transition duration-300">
                    </a>
                    <p class="mt-4 text-gray-800 font-semibold text-xl">인증</p>
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