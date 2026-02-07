<?php

include_once('../../common.php');
// 페이지 제목 
$g5['title'] = "새로운 페이지";
include_once(G5_PATH . '/head.php');

?>

<section class="ppbContainer">
    <div class="inner">
        <div class="sub_banner type01">
            <div class="txt_con">
                <ul class="white">
                    <li>
                        <img src="<?php echo G5_IMG_URL ?>/ico/ico_white_home.png" alt="">
                    </li>
                    <li>
                        전문센터
                    </li>
                    <li>
                        관절척추센터
                    </li>
                </ul>
                <p class="txt01" style="">진료사본발급 안내</p>
                <p class="txt02" style="">「의료법」 제21조(기록열람 등)에 따른 사본발급 신청 시 구비서류
                </p>
            </div>
        </div> 
        <section class="department">
            <div class="inner">

                <div class="sub_banner">
                    <div class="txt_con">
                        <ul>
                            <li>
                                <img src="https://unidshinsegae.mycafe24.com/img/ico/ico_home.png" alt="">
                            </li>
                            <li>
                                진료안내
                            </li>
                            <li>
                                진료과
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="mt-12 tableBox2">
                    <table class="w-full text-xl text-left text-gray-500 whitespace-pre-line cTable rtl:text-right">
                        <thead class="text-center text-gray-700 uppercase bg-gray-100">
                            <tr>
                                <th scope="col" width="20%" class="px-3 py-5 border">구분</th>
                                <th scope="col" width="20%" class="px-3 py-5 border">유형</th>
                                <th scope="col" width="60%" class="px-3 py-5 border">구비서류</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="">
                                <th scope="row" class="px-3 py-4 font-medium text-center text-gray-900 border whitespace-nowrap dark:text-white">
                                    본인 </th>
                                <td class="px-3 py-4 text-center border">본인</td>
                                <td class="px-3 py-4 text-left border ">사본발급신청서, 신분증(주민등록증, 여권, 운전면허증 그 밖에 공공기관에서 발행한 본인임을 확인할 수 있는 신분증)
                                </td>
                            </tr>

                            <tr class="">
                                <th scope="row" rowspan="5" class="px-3 py-4 font-medium text-center text-gray-900 border dark:text-white">환자의
                                    배우자, 직계존, 비속 또는
                                    배우자의 직계존속</th>
                                <td class="px-3 py-4 text-center border">환자의 배우자, 직계존속, 비속, 또는 배우자의 직계존속
                                    (이하 “친족”이라함)</td>
                                <td class="px-3 py-4 text-left border pre-line">1. 신청자 신분증 사본, 사본발급 신청서
                                    2. 가족관계증명서(주민등록표 등본)
                                    3. 환자가 자필 서명한 사본발급 동의서 (단, 환자가 만 14세 미만은 제외)
                                    4. 환자의 신분증 사본(단, 환자가 만 17세 미만은 제외)
                                </td>
                            </tr>
                            <tr class="">
                                <td class="px-3 py-4 text-center border">환자가 사망한 경우</td>
                                <td class="px-3 py-4 text-left border ">1. 신청자 신분증 사본, 사본발급신청서
                                    2. 가족관계증명서(주민등록표 등본)
                                    3. 사망사실을 확인할 수 있는 제적등본, 사망진단서 등
                                </td>
                            </tr>
                            <tr class="">
                                <td class="px-3 py-4 text-center border">환자가 의식불명 또는 의식불명은 아니지만 중증의 질환·부상으로 자필서명을 할 수 없는 경우</td>
                                <td class="px-3 py-4 text-left border ">1. 신청자 신분증 사본, 사본발급신청서
2. 가족관계 증명서(주민등록표 등본)
3. 환자가 의식불명 또는 중증의 질환·부상으로 자필서명을 할 수 없음을 확인할 수 있는 진단서
                                </td>
                            </tr>
                            <tr class="">
                                <td class="px-3 py-4 text-center border">환자가 행방불명인 경우</td>
                                <td class="px-3 py-4 text-left border ">1. 신청자 신분증 사본, 사본발급신청서
2. 가족관계증명서(주민등록표 등본)
3. 법원의 실종선고 결정문 사본 등 행방불명 사실을 확인할 수 있는 서류
                                </td>
                            </tr>
                            <tr class="">
                                <td class="px-3 py-4 text-center border">환자의 의사무능력자인 경우</td>
                                <td class="px-3 py-4 text-left border ">1. 신청자 신분증 사본, 사본발급신청서
2. 가족관계증명서(주민등록표 등본)
3. 법원의 금치산선고 결정문 사본 또는 의사 무능력자임을 증명하는 정신과 전문의의 진단서
                                </td>
                            </tr>

                            <tr class="">
                                <th scope="row" rowspan="1" class="px-3 py-4 font-medium text-center text-gray-900 border dark:text-white">대리인</th>
                                <td class="px-3 py-4 text-center border">보험회사, 손해사정인 등 제3자인 경우
                                (형제, 자매 포함)</td>
                                <td class="px-3 py-4 text-left border ">1. 대리인(신청자) 신분증 사본, 사본발급신청서
2. 환자가 자필 서명한 사본발급 동의서 및 위임장(단, 환자가 만 14세 미만인 경우 환자의 법정대리인이 작성하며, 가족관계증명서 등 법정대리인임을 확인할 수 있는 서류 첨부)
3. 환자의 신분증 사본(단, 환자가 만 17세 미만은 제외)
                                </td>
                            </tr>
                           
                        </tbody>
                    </table>
                </div>

            </div>
        </section>

    </div>
</section>

<?php
include_once(G5_PATH . '/tail.php');
?>

<script>
    gsap.from(".procedure_cont", {
        scrollTrigger: {
            trigger: ".procedure_cont",
            start: "top center",
            end: "bottom top",
            scrub: true,
            toggleClass: {
                targets: ".procedure_cont",
                className: "active"
            },
            once: true
        },

    });
</script>