<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

run_event('pre_head');

if (defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH . '/head.php');
    return;
}

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH . '/head.php');
    return;
}

include_once(G5_PATH . '/head.sub.php');
include_once(G5_LIB_PATH . '/latest.lib.php');
include_once(G5_LIB_PATH . '/outlogin.lib.php');
include_once(G5_LIB_PATH . '/poll.lib.php');
include_once(G5_LIB_PATH . '/visit.lib.php');
include_once(G5_LIB_PATH . '/connect.lib.php');
include_once(G5_LIB_PATH . '/popular.lib.php');

// 경로에따른 배경이미지 변경 스크립트
$current_path = $_SERVER['REQUEST_URI'];

$class_name = '';
if (strpos($current_path, '/sub01/sub01_01.php') !== false) {
    $class_name = 'bg-sub01-01-1';
} elseif (strpos($current_path, '/sub01/sub01_02.php') !== false) {
    $class_name = 'bg-sub01-01-1';
} elseif (strpos($current_path, '/sub01/sub01_03.php') !== false) {
    $class_name = 'bg-sub01-01-1';
} elseif (strpos($current_path, '/sub02/sub02_01.php') !== false) {
    $class_name = 'bg-sub02-01';
} elseif (strpos($current_path, '/sub02/sub02_02.php') !== false) {
    $class_name = 'bg-sub02-01';
} elseif (strpos($current_path, '/sub02/sub02_03.php') !== false) {
    $class_name = 'bg-sub02-01';
} elseif (strpos($current_path, '/sub02/sub02_04.php') !== false) {
    $class_name = 'bg-sub02-01';
} elseif (strpos($current_path, '/sub03/sub03_01.php') !== false) {
    $class_name = 'bg-sub03-01';
} elseif (strpos($current_path, '/sub03/sub03_02.php') !== false) {
    $class_name = 'bg-sub03-01';
} elseif (strpos($current_path, '/sub03/sub03_03.php') !== false) {
    $class_name = 'bg-sub03-01';
} elseif (strpos($current_path, '/sub03/sub03_04.php') !== false) {
    $class_name = 'bg-sub03-01';
} elseif (strpos($current_path, '/sub04/sub04_01.php') !== false) {
    $class_name = 'bg-sub04-01';
} elseif (strpos($current_path, '/sub04/sub04_02.php') !== false) {
    $class_name = 'bg-sub04-01';
} elseif (strpos($current_path, '/sub04/sub04_03.php') !== false) {
    $class_name = 'bg-sub04-01';
} elseif (strpos($current_path, '/sub04/sub04_04.php') !== false) {
    $class_name = 'bg-sub04-01';
} elseif (strpos($current_path, '/sub04/sub04_05.php') !== false) {
    $class_name = 'bg-sub04-01';
} elseif (strpos($current_path, '/sub04/sub04_06.php') !== false) {
    $class_name = 'bg-sub04-01';
} elseif (strpos($current_path, '/page/sub05/sub05_01.php') !== false) {
    $class_name = 'bg-sub05-01';
} elseif (strpos($current_path, '/news') !== false) {
    $class_name = 'bg-sub03-01';
} elseif (strpos($current_path, '/notice') !== false) {
    $class_name = 'bg-sub03-01';
} elseif (strpos($current_path, '/bbs/faq.php') !== false) {
    $class_name = 'bg-sub03-01';
} elseif (strpos($current_path, '/channel/write') !== false) {
    $class_name = 'bg-sub04-01';
} elseif (strpos($current_path, '/sub04/sub04_03.php') !== false) {
    $class_name = 'bg-sub04-03';
} else {
    $class_name = 'bg-default3';
}
?>

<link rel="shortcut icon" href="/img/favicon.ico" type="image/x-icon">
<link rel="icon" href="/favicon.ico" type="image/x-icon">

<!-- 네이버서치어드바이저 -->

<!-- jquery 연결 -->
<script src="http://code.jquery.com/jquery-latest.min.js"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<link href="https://cdn.jsdelivr.net/gh/sun-typeface/SUIT@2/fonts/static/woff2/SUIT.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

<!-- 상단 시작 { -->
<div id="loading-container">
    <div id="loading-bar"></div>
</div>
<header id="header" class="header">
    <input type="checkbox" id="menuicon">
    <nav class="nav container">
        <div class="nav_bg">
            <div class="left_side">
                <div class="img_con">
                    <!-- <img src="<?php echo G5_IMG_URL ?>/img/img_nav_bg.jpg" alt=""> -->
                </div>
                <div class="txt_con">
                    <p><b></b></p>
                </div>
            </div>
        </div>

        <h1 class="main_logo">
            <a href="<?php echo G5_URL; ?>">
                <img class="basicLogo" src="<?php echo G5_IMG_URL; ?>/logo.png" alt="logo">
                <img class="whiteLogo" src="<?php echo G5_IMG_URL; ?>/wLogo02.png" alt="wlogo">
            </a>
        </h1>

        <div class="gnb-bg"></div>

        <div class="gnb">
            <ul class="gnb__list">
                <!-- 회사소개 -->
                <li class="gnb__item">
                    <a href="/page/sub01/sub01_01.php">회사소개</a>
                    <ul class="gnb__sub">
                        <li><a href="/page/sub01/sub01_01.php">기업소개</a></li>
                        <li><a href="/page/sub01/sub01_02.php">컨설턴트 프로필</a></li>
                        <li><a href="/page/sub01/sub01_03.php">오시는 길</a></li>
                    </ul>
                </li>

                <!-- 컨설팅 분야 -->
                <li class="gnb__item">
                    <a href="/page/sub02/sub02_01.php">컨설팅 분야</a>
                    <ul class="gnb__sub">
                        <li><a href="/page/sub02/sub02_01.php">정부조달 및 R&D</a></li>
                        <li><a href="/page/sub02/sub02_02.php">기술·경영 </a></li>
                        <li><a href="/page/sub02/sub02_03.php">창업 및 소상공인 지원</a></li>
                        <li><a href="/page/sub02/sub02_04.php">인증</a></li>
                    </ul>
                </li>

                <!-- 고객지원 -->
                <li class="gnb__item">
                    <a href="/notice">고객지원</a>
                    <ul class="gnb__sub">
                        <li><a href="/notice">공지사항</a></li>
                        <li><a href="/bbs/faq.php">Q&A</a></li>
                        <!-- <li><a href="/page/support/inquiry.php">문의하기</a></li> -->
                        <li><a href="/news">케이비즈업 뉴스</a></li>
                    </ul>
                </li>

            </ul>
            <svg class="h-4 w-1 mr-16 dt_on" viewBox="0 0 1 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                <line x1="0.375" y1="0.5" x2="0.375" y2="20.5" stroke="#999999" stroke-width="0.75" />
            </svg>
            <label for="menuicon" class="menubtn">
                <svg class="w-8 h-8" viewBox="0 0 32 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M26.6667 9.83301H5.33337" stroke="#0B3FC4" stroke-width="2" stroke-linecap="round" />
                    <path d="M26.6667 16.5H5.33337" stroke="#0B3FC4" stroke-width="2" stroke-linecap="round" />
                    <path d="M26.6667 23.167H5.33337" stroke="#0B3FC4" stroke-width="2" stroke-linecap="round" />
                </svg>
            </label>
        </div>



    </nav>




</header>


<div id="moTab" class=" fixed right-0 bg-white z-50 flex flex-col items-center justify-start p-6 mx-auto">
    <!-- 닫기 버튼 -->
    <button class="moTabClose absolute top-8 right-8">
        <svg class="w-8 h-8" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M25 1.0001L1.0001 25M1 1L25 25" stroke="#222222" stroke-width="2" stroke-linecap="round" />
        </svg>

    </button>
    <div class="sectionContainer">

        <!-- 메뉴 리스트 -->
        <nav class="w-full">
            <div class="mb-16">
                <h2 class="text-xl md:text-3xl font-bold mb-3">회사소개</h2>
                <div class="grid grid-cols-2 gap-3 text-primary text-lg md:text-2xl w-2/3">
                    <a href="/page/sub01/sub01_01.php">기업소개</a>
                    <a href="/page/sub01/sub01_02.php">컨설턴트 프로필</a>
                    <a href="/page/sub01/sub01_03.php">오시는 길</a>
                </div>
            </div>

            <div class="mb-16">
                <h2 class="text-xl md:text-3xl font-bold mb-3">컨설팅 분야</h2>
                <div class="grid grid-cols-2 gap-3 text-primary text-lg md:text-2xl w-2/3">
                    <a href="/page/sub02/sub02_01.php">정부조달 및 R&D</a>
                    <a href="/page/sub02/sub02_03.php">기술·경영
                    </a>
                    <a href="/page/sub02/sub02_02.php">창업 및 소상공인 지원
                    </a>
                    <a href="/page/sub02/sub02_04.php">인증</a>
                </div>
            </div>

            <div class="mb-16">
                <h2 class="text-xl md:text-3xl font-bold mb-3">고객지원</h2>
                <div class="grid grid-cols-2 gap-3 text-primary text-lg md:text-2xl w-2/3">
                    <a href="/notice">공지사항</a>
                    <a href="/bbs/faq.php">Q&A</a>
                    <!-- <a href="/page/support/inquiry.php">문의하기</a> -->
                    <a href="/news">케이비즈업 뉴스</a>
                </div>
            </div>
        </nav>

        <!-- 연락처 정보 -->
        <div class="mt-8 text-gray-700 text-base w-full">
            <p class="mb-2"><strong>대표번호</strong> 051-714-2770</p>
            <p class="mb-2"><strong>FAX.</strong> 070-8230-2779</p>
            <p><strong>주소</strong> 부산광역시 부산진구 서면문화로 27 유원골든타워 1905호</p>
        </div>
    </div>
</div>

<script>
    function closeMenu() {
        document.querySelector(".fixed").style.display = "none";
    }
</script>
<!-- } 상단 끝 -->
<div class="quick-menu">
    <div class="menu-item topBtn">
        <svg width="32" height="33" viewBox="0 0 32 33" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M16 25.3566V6.68994" stroke="#111111" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
            <path d="M6.66602 16.0233L15.9993 6.68994L25.3327 16.0233" stroke="#111111" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
    </div>
</div>
<!-- 콘텐츠 시작 { -->
<div id="smooth-wrapper">
    <div id="smooth-content">
        <div id="wrapper">
            <div id="swiperContainer"></div>


            <div class="sub-menuWrap <?php echo $class_name; ?>">
                <div class="subTitleAb">
                    <b></b>
                    <div class="menu-container">
                        <!-- <a href="/" class="home_btn"><img src="<?php echo G5_IMG_URL ?>/home.png" alt=""></a> -->
                        <select id="primaryMenu" onchange="updateSecondaryMenu()">
                            <!--<option value="" disabled selected></option>-->
                            <option value="회사소개">회사소개</option>
                            <option value="컨설팅 분야">컨설팅 분야</option>
                            <option value="고객지원">고객지원</option>
                        </select>
                        <a href="javascript:void(0)" class="home_btn"></a>
                        <select id="secondaryMenu" onchange="updateTertiaryMenu()">
                        </select>
                        <select id="tertiaryMenu" style="display: none;" onchange="navigateToPage()">
                        </select>

                    </div>
                </div>

            </div>

            <script>
                const menuData = {
                    "회사소개": [{
                            text: "기업소개",
                            url: "/page/sub01/sub01_01.php"
                        },
                        {
                            text: "컨설턴트 프로필",
                            url: "/page/sub01/sub01_02.php"
                        },

                        {
                            text: "오시는 길",
                            url: "/page/sub01/sub01_03.php"
                        }
                    ],

                    "컨설팅 분야": [{
                            text: "정부조달 및 R&D",
                            url: "/page/sub02/sub02_01.php"
                        },
                        {
                            text: "기술·경영",
                            url: "/page/sub02/sub02_02.php"
                        },
                        {
                            text: "창업 및 소상공인 지원",
                            url: "/page/sub02/sub02_03.php"
                        },
                        {
                            text: "인증",
                            url: "/page/sub02/sub02_04.php"
                        }
                    ],

                    "고객지원": [{
                            text: "공지사항",
                            url: "notice"
                        },
                        {
                            text: "Q&A",
                            url: "/bbs/faq.php"
                        },
                        // {
                        //     text: "문의하기",
                        //     url: "/page/support/inquiry.php"
                        // },
                        {
                            text: "케이비즈업 뉴스",
                            url: "/news"
                        }
                    ]
                };


                function updateSecondaryMenu() {
                    const secondaryMenu = document.getElementById("secondaryMenu");
                    const primaryMenu = document.getElementById("primaryMenu");
                    const selectedPrimary = primaryMenu.value;

                    secondaryMenu.innerHTML = '';

                    if (menuData[selectedPrimary]) {
                        menuData[selectedPrimary].forEach(item => {
                            const option = document.createElement("option");
                            option.value = item.url;
                            option.textContent = item.text;
                            secondaryMenu.appendChild(option);
                        });
                    }
                }

                // primaryMenu에서 옵션이 선택될 때만 첫 번째 페이지로 이동
                document.getElementById("primaryMenu").addEventListener("change", function() {
                    updateSecondaryMenu();
                    const secondaryMenu = document.getElementById("secondaryMenu");
                    const firstOption = secondaryMenu.options[0];
                    if (firstOption) {
                        secondaryMenu.value = firstOption.value;
                        navigateToPage();
                    }
                });

                // 선택된 페이지로 이동
                function navigateToPage() {
                    const secondaryMenu = document.getElementById("secondaryMenu");
                    const selectedValue = secondaryMenu.value;
                    if (selectedValue) {
                        window.location.href = selectedValue;
                    }
                }

                // 초기 선택 설정
                function setInitialSelection() {
                    const currentUrl = window.location.href;
                    let primarySelected = "";
                    let secondarySelected = "";

                    for (const primary in menuData) {
                        for (const secondary of menuData[primary]) {
                            if (currentUrl.includes(secondary.url)) {
                                primarySelected = primary;
                                secondarySelected = secondary.url;
                                break;
                            }
                        }
                        if (primarySelected) break;
                    }

                    if (primarySelected) {
                        const primaryMenu = document.getElementById("primaryMenu");
                        primaryMenu.value = primarySelected;

                        updateSecondaryMenu();
                        const secondaryMenu = document.getElementById("secondaryMenu");
                        secondaryMenu.value = secondarySelected;
                    }
                }
                document.getElementById("primaryMenu").addEventListener("change", updateSecondaryMenu);
                document.getElementById("secondaryMenu").addEventListener("change", navigateToPage);
                window.onload = setInitialSelection;
            </script>
            <script>
                $('.menuToggle02').click(function() {
                    $('.menuToggle02').toggleClass('menuToggleActive');
                    $('.menubtn').toggleClass('menuBtnFixed');
                    $('.menuToggle02').siblings('.sub_gnb2').toggleClass('menuShow')
                })
                $(document).ready(function() {
                    $('.menubtn').click(function() {
                        $('#moTab').css('display', 'flex'); // 먼저 display: flex 적용
                        setTimeout(function() {
                            $('#moTab').addClass('show'); // opacity 애니메이션 적용
                        }, 10);
                    });

                    $('.moTabClose').click(function() {
                        $('#moTab').removeClass('show'); // opacity 먼저 제거
                        setTimeout(function() {
                            $('#moTab').css('display', 'none'); // 애니메이션 후 display: none 적용
                        }, 300); // transition 시간과 동일하게 설정
                    });
                });



                $('.all-menu__depth > li > a').mouseenter(function() {
                    $('.all-menu__subdepth').removeClass('active');
                    $(this).siblings('.all-menu__subdepth').addClass('active');
                })

                $('.all-menu__box').mouseleave(function() {
                    $(this).siblings('.all-menu__subdepth').removeClass('active');
                })
            </script>
            <script>
                $(document).ready(function() {
                    // 현재 페이지의 URL 경로 가져오기
                    var currentPath = window.location.pathname;

                    // 각 페이지 경로에 따라 다르게 처리
                    if (currentPath.includes("/page/sub01/sub01_01.php")) {
                        $('.subTitleAb b').text('기업소개');
                    } else if (currentPath.includes("/page/sub01/sub01_02.php")) {
                        $('.subTitleAb b').text('컨설턴트 프로필');
                    } else if (currentPath.includes("/page/sub01/sub01_03.php")) {
                        $('.subTitleAb b').text('오시는 길');
                    } else if (currentPath.includes("/page/sub02/sub02_01.php")) {
                        $('.subTitleAb b').text('정부조달 및 R&D');
                    } else if (currentPath.includes("/page/sub02/sub02_02.php")) {
                        $('.subTitleAb b').text('기술·경영');
                    } else if (currentPath.includes("/page/sub02/sub02_03.php")) {
                        $('.subTitleAb b').text('창업 및 소상공인 지원');
                    } else if (currentPath.includes("/page/sub02/sub02_04.php")) {
                        $('.subTitleAb b').text('인증');
                    } else if (currentPath.includes("/notice")) {
                        $('.subTitleAb b').text('공지사항');
                    } else if (currentPath.includes("/bbs/faq.php")) {
                        $('.subTitleAb b').text('Q&A');
                    } else if (currentPath.includes("/download")) {
                        $('.subTitleAb b').text('문의하기');
                    } else if (currentPath.includes("/news")) {
                        $('.subTitleAb b').text('케이비즈업 뉴스');
                    }
                    // 필요한 경우 더 많은 조건문을 추가합니다.
                });
            </script>
            <script>
                var quickSwiper = new Swiper('.mo_quick_wrap .swiper-container', {
                    slidesPerView: 4,
                    spaceBetween: 20,
                    navigation: {
                        nextEl: '.mo_quick_wrap .paging .swiper_btn.next',
                        prevEl: '.mo_quick_wrap .paging .swiper_btn.prev',
                    },
                });
            </script>
            <script>
                // const $header = $('.header');
                // const $gnbMenu = $('.gnb ,.gnb-sub__item>a');
                // const $gnbBg = $('.gnb-bg');
                // const $gnbSub = $('.gnb-sub');

                // // 마우스 오버 시 서브메뉴와 배경 보이기
                // $header.on('mouseenter', function() {
                //     $header.addClass('headerActive');
                // });
                // $gnbMenu.on('mouseenter', function() {
                //     $gnbBg.stop().fadeIn();
                //     $gnbSub.stop().fadeIn();
                //     $(this).parents('li').addClass('on').siblings().removeClass('on');
                //     $header.addClass('headerActive');
                // });

                // // 서브메뉴 영역을 떠날 시 서브메뉴와 배경 숨기기
                // $header.on('mouseleave', function() {
                //     $gnbBg.stop().fadeOut();
                //     $gnbSub.stop().fadeOut();
                //     $gnbMenu.parents('li').removeClass('on');
                //     $header.removeClass('headerActive');
                // });

                // // header 이외의 영역을 클릭 시 headerActive 제거
                // $(document).on('click', function(e) {
                //     if (!$header.is(e.target) && $header.has(e.target).length === 0) {
                //         $header.removeClass('headerActive');
                //         $gnbBg.stop().fadeOut();
                //         $gnbSub.stop().fadeOut();
                //         $gnbMenu.parents('li').removeClass('on');
                //     }
                // });


                document.addEventListener("DOMContentLoaded", () => {
                    document.querySelectorAll(".gnb__item").forEach(item => {
                        item.addEventListener("mouseenter", () => {
                            let subMenu = item.querySelector(".gnb__sub");
                            if (subMenu) subMenu.style.display = "block";
                        });

                        item.addEventListener("mouseleave", () => {
                            let subMenu = item.querySelector(".gnb__sub");
                            if (subMenu) subMenu.style.display = "none";
                        });
                    });

                    // document.querySelectorAll(".gnb__sub li").forEach(subItem => {
                    //     subItem.addEventListener("mouseenter", () => {
                    //         let depthMenu = subItem.querySelector(".gnb__depth3");
                    //         if (depthMenu) depthMenu.style.display = "block";
                    //     });

                    //     subItem.addEventListener("mouseleave", () => {
                    //         let depthMenu = subItem.querySelector(".gnb__depth3");
                    //         if (depthMenu) depthMenu.style.display = "none";
                    //     });
                    // });
                });
            </script>