<?php

include_once('../../common.php');
// 페이지 제목 
$g5['title'] = "새로운 페이지";
include_once(G5_PATH . '/head.php');

?>

<section class="medicine">
    <div class="inner">

        <div class="sub_banner type01">
            <div class="txt_con">
                <ul>
                    <li>
                        <img src="<?php echo G5_IMG_URL ?>/ico/ico_home.png" alt="">
                    </li>
                    <li>
                        진료안내
                    </li>
                    <li>
                        진료과
                    </li>
                    <li>
                        내과
                    </li>
                </ul>
                <p class="txt01">내과</p>
            </div>
        </div>

       


        <article class="doctor_itemWrap">
            <div class="doctor_item neurosurgery" style="opacity: 0; display: none;">
                <div class="img">
                    <img src="https://unidgyeongsan.mycafe24.com/img/doctor26.png" alt="">
                </div>
                <div class="content">
                    <h2>
                        구일권 병원장
                        <span>
                            <svg width="2" height="28" viewBox="0 0 2 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="2" height="28" fill="#191919"></rect>
                            </svg>
                        </span>
                        <small>신경외과</small>
                    </h2>
                    <p>뇌졸중, 뇌종양, 선천성 뇌기형, 두부외상, 뇌좌상, 치매, 어지럼증, 허리디스크, 목 디스크, 척추협착증, 신경 통증치료 등</p>
                    <div class="d_btn">
                        <p class="openModalBtn" data-modal="modal01">약력 정보</p>
                        <p class="openModalBtn" data-modal="modal02">진료 일정</p>
                    </div>
                </div>
                <div id="modal01" class="modal modal01">
                    <div class="modal-content">
                        <span class="close">×</span>
                        <p>약력정보</p>
                        <h2>구일권 병원장 <span>
                                <svg width="2" height="28" viewBox="0 0 2 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="2" height="28" fill="#191919"></rect>
                                </svg>
                            </span> <small>신경외과</small></h2>
                        <ul>
                            <li>- 영남대학교 의과대학 졸업</li>
                            <li>- 영남대학교 신경외과 전문의 취득</li>
                            <li>- 영남대학교 영천병원 임상교수 역임</li>
                            <li>- 대한 신경외과학회ㆍ신경손상학회 정회원</li>
                        </ul>
                    </div>
                </div>
                <div id="modal02" class="modal modal02">
                    <div class="modal-content">
                        <span class="close">×</span>
                        <p>진료 일정</p>
                        <h2>구일권
                            <span>
                                <svg width="2" height="28" viewBox="0 0 2 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="2" height="28" fill="#191919"></rect>
                                </svg>
                            </span>
                            <small>신경외과</small>
                        </h2>
                        <li class="doctor_info">
                            <div class="info_con">
                                <div>
                                    <div class="legend">
                                        <div class="legend-item">
                                            <span class="darkblue-circle"></span> 진료
                                        </div>
                                        <div class="legend-item">
                                            <span class="lightblue-circle"></span> 검사
                                        </div>
                                    </div>
                                    <table>
                                        <colgroup>
                                            <col width="16%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                        </colgroup>
                                        <thead>
                                            <tr>
                                                <th scope="col">시간</th>
                                                <th scope="col">월</th>
                                                <th scope="col">화</th>
                                                <th scope="col">수</th>
                                                <th scope="col">목</th>
                                                <th scope="col">금</th>
                                                <th scope="col">토</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                                <div class="work">
                                    <table>
                                        <colgroup>
                                            <col width="16%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                        </colgroup>
                                        <tbody>
                                            <tr>
                                                <td class="bold">오전</td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                            </tr>
                                            <tr>
                                                <td class="bold">오후</td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </li>
                    </div>
                </div>

            </div>
            <div class="doctor_item internal" style="opacity: 1; display: flex;">
                <div class="img">
                    <img src="https://unidgyeongsan.mycafe24.com/img/doctor30.png" alt="">
                </div>
                <div class="content">
                    <h2>
                        이종명 명예원장
                        <span>
                            <svg width="2" height="28" viewBox="0 0 2 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="2" height="28" fill="#191919"></rect>
                            </svg>
                        </span>
                        <small>내과</small>
                    </h2>
                    <p>호흡기 질환, 류마티스 질환, 만성기침, 천식, 알레르기비염, 두드러기, 면역 이상</p>
                    <div class="d_btn">
                        <p class="openModalBtn" data-modal="modal01">약력 정보</p>
                        <p class="openModalBtn" data-modal="modal02">진료 일정</p>
                    </div>
                </div>
                <div id="modal01" class="modal modal01" style="display: none;">
                    <div class="modal-content">
                        <span class="close">×</span>
                        <p>약력정보</p>
                        <h2>이종명 명예원장<span>
                                <svg width="2" height="28" viewBox="0 0 2 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="2" height="28" fill="#191919"></rect>
                                </svg>
                            </span> <small>호흡기 질환</small></h2>
                        <ul>
                            <li>- 경북대학교 의과대학졸업</li>
                            <li>- 의학박사, 내과 전문의, 알레르기 분과전문의</li>
                            <li>- 경북대학교병원 내과주임교수 (2012-2014)</li>
                            <li>- 경북대학교 의과대학 32·33대 학장 (2016-2020)</li>
                            <li>- 대한직업성천식폐질환학회 회장 (2016-2018)</li>
                            <li>- 대한천식알레르기학회 회장 (2019-2020)</li>
                        </ul>
                    </div>
                </div>
                <div id="modal02" class="modal modal02">
                    <div class="modal-content">
                        <span class="close">×</span>
                        <p>진료 일정</p>
                        <h2>이종명 명예원장
                            <span>
                                <svg width="2" height="28" viewBox="0 0 2 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="2" height="28" fill="#191919"></rect>
                                </svg>
                            </span>
                            <small>내과</small>
                        </h2>
                        <li class="doctor_info">
                            <div class="info_con">
                                <div>
                                    <div class="legend">
                                        <div class="legend-item">
                                            <span class="darkblue-circle"></span> 진료
                                        </div>
                                        <div class="legend-item">
                                            <span class="lightblue-circle"></span> 검사
                                        </div>
                                    </div>
                                    <table>
                                        <colgroup>
                                            <col width="16%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                        </colgroup>
                                        <thead>
                                            <tr>
                                                <th scope="col">시간</th>
                                                <th scope="col">월</th>
                                                <th scope="col">화</th>
                                                <th scope="col">수</th>
                                                <th scope="col">목</th>
                                                <th scope="col">금</th>
                                                <th scope="col">토</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                                <div class="work">
                                    <table>
                                        <colgroup>
                                            <col width="16%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                        </colgroup>
                                        <tbody>
                                            <tr>
                                                <td class="bold">오전</td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                            </tr>
                                            <tr>
                                                <td class="bold">오후</td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="lightblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="lightblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </li>
                    </div>
                </div>

            </div>


            <div class="doctor_item internal">
                <div class="img">
                    <img src="<?php echo G5_IMG_URL ?>/doctor27.png" alt="">
                </div>
                <div class="content">
                    <h2>
                        정다은 주임과장
                        <span>
                            <svg width="2" height="28" viewBox="0 0 2 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="2" height="28" fill="#191919" />
                            </svg>
                        </span>
                        <small>내과</small>
                    </h2>
                    <p>내시경 (위/대장/치료)
                        간질환
                        호흡기 질환, 갑상선 질환
                        고혈압, 당뇨병
                    </p>
                    <div class="d_btn">
                        <p class="openModalBtn" data-modal="modal01">약력 정보</p>
                        <p class="openModalBtn" data-modal="modal02">진료 일정</p>
                    </div>
                </div>
                <div id="modal01" class="modal modal01">
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <p>약력정보</p>
                        <h2>정다은 주임과장 <span>
                                <svg width="2" height="28" viewBox="0 0 2 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="2" height="28" fill="#191919" />
                                </svg>
                            </span> <small>내과</small></h2>
                        <ul>
                            <li>- 영남대학교 의과대학 졸업 및 내과 전문의 취득</li>
                            <li>- 소화기내시경 세부전문의</li>
                            <li>- 대한내과학회 소화기내과 분과전문의</li>
                            <li>- (현) 경산북도의사회 의무이사                            </li>
                            <li>- [TBC클리닉건강365] 위암과 헬리코박터균 2020. 10. 05 방송
                            </li>
                            <li>- [TBC닥터리포트] 대장암과 대장내시경, 2023. 01. 07 방송
                            </li>
                        </ul>
                    </div>
                </div>
                <div id="modal02" class="modal modal02">
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <p>진료 일정</p>
                        <h2>정다은 주임과장
                            <span>
                                <svg width="2" height="28" viewBox="0 0 2 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="2" height="28" fill="#191919" />
                                </svg>
                            </span>
                            <small>내과</small>
                        </h2>
                        <li class="doctor_info">
                            <div class="info_con">
                                <div>
                                    <div class="legend">
                                        <div class="legend-item">
                                            <span class="darkblue-circle"></span> 진료
                                        </div>
                                        <div class="legend-item">
                                            <span class="lightblue-circle"></span> 검사
                                        </div>
                                    </div>
                                    <table>
                                        <colgroup>
                                            <col width="16%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                        </colgroup>
                                        <thead>
                                            <tr>
                                                <th scope="col">시간</th>
                                                <th scope="col">월</th>
                                                <th scope="col">화</th>
                                                <th scope="col">수</th>
                                                <th scope="col">목</th>
                                                <th scope="col">금</th>
                                                <th scope="col">토</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                                <div class="work">
                                    <table>
                                        <colgroup>
                                            <col width="16%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                        </colgroup>
                                        <tbody>
                                            <tr>
                                                <td class="bold">오전</td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="lightblue-circle"></span></td>
                                            </tr>
                                            <tr>
                                                <td class="bold">오후</td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="lightblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="lightblue-circle"></span></td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </li>
                    </div>
                </div>

            </div>
            <div class="doctor_item internal">
                    <div class="img">
                        <img src="https://unidgyeongsan.mycafe24.com/img/doctor28.png" alt="">
                    </div>
                    <div class="content">
                        <h2>
                            여준엽 진료과장
                            <span>
                                <svg width="2" height="28" viewBox="0 0 2 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="2" height="28" fill="#191919"></rect>
                                </svg>
                            </span>
                            <small>내과</small>
                        </h2>
                        <p>내시경 (위/대장/치료), 간질환, 호흡기 질환, 갑상선 질환, 고혈압, 당뇨병, 고지혈증</p>
                        <div class="d_btn">
                            <p class="openModalBtn" data-modal="modal01">약력 정보</p>
                            <p class="openModalBtn" data-modal="modal02">진료 일정</p>
                        </div>
                    </div>
                    <div id="modal01" class="modal modal01">
                        <div class="modal-content">
                            <span class="close">×</span>
                            <p>약력정보</p>
                            <h2>여준엽 진료과장 <span>
                                    <svg width="2" height="28" viewBox="0 0 2 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="2" height="28" fill="#191919"></rect>
                                    </svg>
                                </span> <small>내과</small></h2>
                            <ul>
                                <li>- 영남대학교 의학전문대학원 졸업</li>
                                <li>- 대구파티마병원 내과 전문의 취득</li>
                                <li>- 소화기내시경 세부전문의</li>
                                <li>- 대한내과학회 정회원</li>
                                <li>- 대한소화기학회 정회원</li>
                                <li>- 대한소화기내시경학회 정회원</li>
                            </ul>
                        </div>
                    </div>
                    <div id="modal02" class="modal modal02">
                        <div class="modal-content">
                            <span class="close">×</span>
                            <p>진료 일정</p>
                            <h2>여준엽 진료과장
                                <span>
                                    <svg width="2" height="28" viewBox="0 0 2 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="2" height="28" fill="#191919"></rect>
                                    </svg>
                                </span>
                                <small>내과</small>
                            </h2>
                            <li class="doctor_info">
                                <div class="info_con">
                                    <div>
                                        <div class="legend">
                                            <div class="legend-item">
                                                <span class="darkblue-circle"></span> 진료
                                            </div>
                                            <div class="legend-item">
                                                <span class="lightblue-circle"></span> 검사
                                            </div>
                                        </div>
                                        <table>
                                            <colgroup>
                                                <col width="16%">
                                                <col width="10%">
                                                <col width="10%">
                                                <col width="10%">
                                                <col width="10%">
                                                <col width="10%">
                                                <col width="10%">
                                            </colgroup>
                                            <thead>
                                                <tr>
                                                    <th scope="col">시간</th>
                                                    <th scope="col">월</th>
                                                    <th scope="col">화</th>
                                                    <th scope="col">수</th>
                                                    <th scope="col">목</th>
                                                    <th scope="col">금</th>
                                                    <th scope="col">토</th>
                                                </tr>
                                            </thead>
                                        </table>
                                    </div>
                                    <div class="work">
                                        <table>
                                            <colgroup>
                                                <col width="16%">
                                                <col width="10%">
                                                <col width="10%">
                                                <col width="10%">
                                                <col width="10%">
                                                <col width="10%">
                                                <col width="10%">
                                            </colgroup>
                                            <tbody>
                                                <tr>
                                                    <td class="bold">오전</td>
                                                    <td><span class="darkblue-circle"></span></td>
                                                    <td><span class="darkblue-circle"></span></td>
                                                    <td><span class="lightblue-circle"></span></td>
                                                    <td><span class="darkblue-circle"></span></td>
                                                    <td><span class="darkblue-circle"></span></td>
                                                    <td><span class="lightblue-circle"></span><span class="darkblue-circle"></span></td>
                                                </tr>
                                                <tr>
                                                    <td class="bold">오후</td>
                                                    <td><span class="darkblue-circle"></span></td>
                                                    <td><span class="lightblue-circle"></span></td>
                                                    <td><span class="darkblue-circle"></span></td>
                                                    <td><span class="lightblue-circle"></span></td>
                                                    <td><span class="darkblue-circle"></span></td>
                                                    <td></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </li>
                        </div>
                    </div>

                </div>
                <div class="doctor_item internal">
                <div class="img">
                    <img src="https://unidgyeongsan.mycafe24.com/img/doctor29.png" alt="">
                </div>
                <div class="content">
                    <h2>
                        이상직 진료과장
                        <span>
                            <svg width="2" height="28" viewBox="0 0 2 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="2" height="28" fill="#191919"></rect>
                            </svg>
                        </span>
                        <small>내과</small>
                    </h2>
                    <p>내시경 (위/대장/치료), 식도, 위, 대장 질환, 간, 췌장 질환, 호흡기 질환, 갑상선 질환, 고혈압, 당뇨병, 고지혈증</p>
                    <div class="d_btn">
                        <p class="openModalBtn" data-modal="modal01">약력 정보</p>
                        <p class="openModalBtn" data-modal="modal02">진료 일정</p>
                    </div>
                </div>
                <div id="modal01" class="modal modal01">
                    <div class="modal-content">
                        <span class="close">×</span>
                        <p>약력정보</p>
                        <h2>이상직 진료과장 <span>
                                <svg width="2" height="28" viewBox="0 0 2 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="2" height="28" fill="#191919"></rect>
                                </svg>
                            </span> <small>내과</small></h2>
                        <ul>
                            <li>- 경북대학교 의과대학 졸업</li>
                            <li>- 경북대학교병원 내과 전문의 취득</li>
                            <li>- 소화기내시경 세부전문의</li>
                            <li>- 대한내과학회 소화기내과 분과전문의</li>
                            <li>- 대한소화기학회 정회원</li>
                            <li>- 대한소화기내시경학회 정회원</li>
                        </ul>
                    </div>
                </div>
                <div id="modal02" class="modal modal02">
                    <div class="modal-content">
                        <span class="close">×</span>
                        <p>진료 일정</p>
                        <h2>이상직 진료과장
                            <span>
                                <svg width="2" height="28" viewBox="0 0 2 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="2" height="28" fill="#191919"></rect>
                                </svg>
                            </span>
                            <small>내과</small>
                        </h2>
                        <li class="doctor_info">
                            <div class="info_con">
                                <div>
                                    <div class="legend">
                                        <div class="legend-item">
                                            <span class="darkblue-circle"></span> 진료
                                        </div>
                                        <div class="legend-item">
                                            <span class="lightblue-circle"></span> 검사
                                        </div>
                                    </div>
                                    <table>
                                        <colgroup>
                                            <col width="16%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                        </colgroup>
                                        <thead>
                                            <tr>
                                                <th scope="col">시간</th>
                                                <th scope="col">월</th>
                                                <th scope="col">화</th>
                                                <th scope="col">수</th>
                                                <th scope="col">목</th>
                                                <th scope="col">금</th>
                                                <th scope="col">토</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                                <div class="work">
                                    <table>
                                        <colgroup>
                                            <col width="16%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                        </colgroup>
                                        <tbody>
                                            <tr>
                                                <td class="bold">오전</td>
                                                <td><span class="lightblue-circle"></span></td>
                                                <td><span class="lightblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                            </tr>
                                            <tr>
                                                <td class="bold">오후</td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="lightblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="lightblue-circle"></span></td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </li>
                    </div>
                </div>
            </div>
            <div class="doctor_item internal">
                <div class="img">
                    <img src="https://unidgyeongsan.mycafe24.com/img/doctor31.png" alt="">
                </div>
                <div class="content">
                    <h2>
                        이상원 진료과장
                        <span>
                            <svg width="2" height="28" viewBox="0 0 2 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="2" height="28" fill="#191919"></rect>
                            </svg>
                        </span>
                        <small>내과</small>
                    </h2>
                    <p>내시경 (위/대장/치료),식도, 위, 대장 질환, 간, 췌장 질환, 호흡기 질환, 갑상선 질환, 고혈압, 당뇨병</p>
                    <div class="d_btn">
                        <p class="openModalBtn" data-modal="modal01">약력 정보</p>
                        <p class="openModalBtn" data-modal="modal02">진료 일정</p>
                    </div>
                </div>
                <div id="modal01" class="modal modal01">
                    <div class="modal-content">
                        <span class="close">×</span>
                        <p>약력정보</p>
                        <h2>이상원 소화기센터장 <span>
                                <svg width="2" height="28" viewBox="0 0 2 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="2" height="28" fill="#191919"></rect>
                                </svg>
                            </span> <small>내과</small></h2>
                        <ul>
                            <li>- 경북대학교 의과대학 졸업</li>
                            <li>- 경북대학교병원 내과 전문의 취득</li>
                            <li>- 경북대학교병원 소화기내과 외래교수 역임</li>
                            <li>- 소화기내시경 세부전문의</li>
                            <li>- 대한소화기학회 정회원</li>
                            <li>- 대한소화기내시경학회 정회원</li>
                        </ul>
                    </div>
                </div>
                <div id="modal02" class="modal modal02">
                    <div class="modal-content">
                        <span class="close">×</span>
                        <p>진료 일정</p>
                        <h2>이상원 소화기센터장
                            <span>
                                <svg width="2" height="28" viewBox="0 0 2 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="2" height="28" fill="#191919"></rect>
                                </svg>
                            </span>
                            <small>내과</small>
                        </h2>
                        <li class="doctor_info">
                            <div class="info_con">
                                <div>
                                    <div class="legend">
                                        <div class="legend-item">
                                            <span class="darkblue-circle"></span> 진료
                                        </div>
                                        <div class="legend-item">
                                            <span class="lightblue-circle"></span> 검사
                                        </div>
                                    </div>
                                    <table>
                                        <colgroup>
                                            <col width="16%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                        </colgroup>
                                        <thead>
                                            <tr>
                                                <th scope="col">시간</th>
                                                <th scope="col">월</th>
                                                <th scope="col">화</th>
                                                <th scope="col">수</th>
                                                <th scope="col">목</th>
                                                <th scope="col">금</th>
                                                <th scope="col">토</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                                <div class="work">
                                    <table>
                                        <colgroup>
                                            <col width="16%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                        </colgroup>
                                        <tbody>
                                            <tr>
                                                <td class="bold">오전</td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="lightblue-circle"></span></td>
                                                <td><span class="lightblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                            </tr>
                                            <tr>
                                                <td class="bold">오후</td>
                                                <td><span class="lightblue-circle"></span></td>
                                                <td><span class="lightblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </li>
                    </div>
                </div>

            </div>
            <div class="doctor_item internal">
                <div class="img">
                    <img src="https://unidgyeongsan.mycafe24.com/img/doctor24.png" alt="">
                </div>
                <div class="content">
                    <h2>
                        백은지 진료과장
                        <span>
                            <svg width="2" height="28" viewBox="0 0 2 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="2" height="28" fill="#191919"></rect>
                            </svg>
                        </span>
                        <small>내과</small>
                    </h2>
                    <p>신장질환 (급·만성신부전, 투석, 단백뇨, 혈뇨, 신우신염), 심장질환, 심초음파, 고혈압, 당뇨병, 호흡기 질환, 갑상선 질환</p>
                    <div class="d_btn">
                        <p class="openModalBtn" data-modal="modal01">약력 정보</p>
                        <p class="openModalBtn" data-modal="modal02">진료 일정</p>
                    </div>
                </div>
                <div id="modal01" class="modal modal01">
                    <div class="modal-content">
                        <span class="close">×</span>
                        <p>약력정보</p>
                        <h2>백은지 진료과장 <span>
                                <svg width="2" height="28" viewBox="0 0 2 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="2" height="28" fill="#191919"></rect>
                                </svg>
                            </span> <small>내과</small></h2>
                        <ul>
                            <li>- University of Pennsylvania 대학 졸업</li>
                            <li>- 분당서울대학교병원 내과 전문의 취득</li>
                            <li>- 분당서울대학교병원 신장내과 외래교수 역임</li>
                            <li>- 대한신장학회 투석전문의, 신장내과 분과전문의</li>
                            <li>- 한국심초음파학회 정회원</li>
                            <li>- [TBC클리닉건강365] 당뇨병콩팥병 2023.7 방송</li>
                        </ul>
                    </div>
                </div>
                <div id="modal02" class="modal modal02">
                    <div class="modal-content">
                        <span class="close">×</span>
                        <p>진료 일정</p>
                        <h2>백은지 진료과장
                            <span>
                                <svg width="2" height="28" viewBox="0 0 2 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="2" height="28" fill="#191919"></rect>
                                </svg>
                            </span>
                            <small>내과</small>
                        </h2>
                        <li class="doctor_info">
                            <div class="info_con">
                                <div>
                                    <div class="legend">
                                        <div class="legend-item">
                                            <span class="darkblue-circle"></span> 진료
                                        </div>
                                        <div class="legend-item">
                                            <span class="lightblue-circle"></span> 검사
                                        </div>
                                    </div>
                                    <table>
                                        <colgroup>
                                            <col width="16%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                        </colgroup>
                                        <thead>
                                            <tr>
                                                <th scope="col">시간</th>
                                                <th scope="col">월</th>
                                                <th scope="col">화</th>
                                                <th scope="col">수</th>
                                                <th scope="col">목</th>
                                                <th scope="col">금</th>
                                                <th scope="col">토</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                                <div class="work">
                                    <table>
                                        <colgroup>
                                            <col width="16%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                        </colgroup>
                                        <tbody>
                                            <tr>
                                                <td class="bold">오전</td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td class="bold">오후</td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </li>
                    </div>
                </div>


            </div>
            <div class="doctor_item internal">
                <div class="img">
                    <img src="https://unidgyeongsan.mycafe24.com/img/doctor25.png" alt="">
                </div>
                <div class="content">
                    <h2>
                        권중헌 진료과장
                        <span>
                            <svg width="2" height="28" viewBox="0 0 2 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="2" height="28" fill="#191919"></rect>
                            </svg>
                        </span>
                        <small>내과</small>
                    </h2>
                    <p>신장질환 (급·만성신부전, 투석, 단백뇨, 혈뇨, 신우신염), 고혈압, 당뇨병, 호흡기 질환, 갑상선 질환,</p>
                    <div class="d_btn">
                        <p class="openModalBtn" data-modal="modal01">약력 정보</p>
                        <p class="openModalBtn" data-modal="modal02">진료 일정</p>
                    </div>
                </div>
                <div id="modal01" class="modal modal01">
                    <div class="modal-content">
                        <span class="close">×</span>
                        <p>약력정보</p>
                        <h2>권중헌 진료과장 <span>
                                <svg width="2" height="28" viewBox="0 0 2 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="2" height="28" fill="#191919"></rect>
                                </svg>
                            </span> <small>내과</small></h2>
                        <ul>
                            <li>- 울산대학교 의과대학 졸업</li>
                            <li>- 계명대학교 동산병원 내과 전문의 취득</li>
                            <li>- 계명대학교 동산병원 신장내과 임상교수 역임</li>
                            <li>- 대한신장학회 투석전문의</li>
                            <li>- 대한내과학회 정회원</li>
                            <li>- 대한신장학회 정회원</li>
                        </ul>
                    </div>
                </div>
                <div id="modal02" class="modal modal02">
                    <div class="modal-content">
                        <span class="close">×</span>
                        <p>진료 일정</p>
                        <h2>권중헌 진료과장
                            <span>
                                <svg width="2" height="28" viewBox="0 0 2 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="2" height="28" fill="#191919"></rect>
                                </svg>
                            </span>
                            <small>내과</small>
                        </h2>
                        <li class="doctor_info">
                            <div class="info_con">
                                <div>
                                    <div class="legend">
                                        <div class="legend-item">
                                            <span class="darkblue-circle"></span> 진료
                                        </div>
                                        <div class="legend-item">
                                            <span class="lightblue-circle"></span> 검사
                                        </div>
                                    </div>
                                    <table>
                                        <colgroup>
                                            <col width="16%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                        </colgroup>
                                        <thead>
                                            <tr>
                                                <th scope="col">시간</th>
                                                <th scope="col">월</th>
                                                <th scope="col">화</th>
                                                <th scope="col">수</th>
                                                <th scope="col">목</th>
                                                <th scope="col">금</th>
                                                <th scope="col">토</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                                <div class="work">
                                    <table>
                                        <colgroup>
                                            <col width="16%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                        </colgroup>
                                        <tbody>
                                            <tr>
                                                <td class="bold">오전</td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                            </tr>
                                            <tr>
                                                <td class="bold">오후</td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="lightblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </li>
                    </div>
                </div>

            </div>
            <div class="doctor_item surgery" style="opacity: 0; display: none;">
                <div class="img">
                    <img src="https://unidgyeongsan.mycafe24.com/img/doctor35.png" alt="">
                </div>
                <div class="content">
                    <h2>
                        조현진
                        <span>
                            <svg width="2" height="28" viewBox="0 0 2 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="2" height="28" fill="#191919"></rect>
                            </svg>
                        </span>
                        <small>외과</small>
                    </h2>
                    <p>유방, 갑상선 질환, 화상</p>
                    <div class="d_btn">
                        <p class="openModalBtn" data-modal="modal01">약력 정보</p>
                        <p class="openModalBtn" data-modal="modal02">진료 일정</p>
                    </div>
                </div>
                <div id="modal01" class="modal modal01">
                    <div class="modal-content">
                        <span class="close">×</span>
                        <p>약력정보</p>
                        <h2>조현진 <span>
                                <svg width="2" height="28" viewBox="0 0 2 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="2" height="28" fill="#191919"></rect>
                                </svg>
                            </span> <small>외과</small></h2>
                        <ul>
                            <li>- 계명대학교 의과대학 졸업</li>
                            <li>- 대구파티마병원 외과 전문의 취득</li>
                            <li>- 대한외과학회 정회원</li>
                            <li>- 한국유방암학회 정회원</li>
                        </ul>
                    </div>
                </div>
                <div id="modal02" class="modal modal02">
                    <div class="modal-content">
                        <span class="close">×</span>
                        <p>진료 일정</p>
                        <h2>조현진
                            <span>
                                <svg width="2" height="28" viewBox="0 0 2 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="2" height="28" fill="#191919"></rect>
                                </svg>
                            </span>
                            <small>외과</small>
                        </h2>
                        <li class="doctor_info">
                            <div class="info_con">
                                <div>
                                    <div class="legend">
                                        <div class="legend-item">
                                            <span class="darkblue-circle"></span> 진료
                                        </div>
                                    </div>
                                    <table>
                                        <colgroup>
                                            <col width="16%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                        </colgroup>
                                        <thead>
                                            <tr>
                                                <th scope="col">시간</th>
                                                <th scope="col">월</th>
                                                <th scope="col">화</th>
                                                <th scope="col">수</th>
                                                <th scope="col">목</th>
                                                <th scope="col">금</th>
                                                <th scope="col">토</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                                <div class="work">
                                    <table>
                                        <colgroup>
                                            <col width="16%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                        </colgroup>
                                        <tbody>
                                            <tr>
                                                <td class="bold">오전</td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td class="bold">오후</td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </li>
                    </div>
                </div>

            </div>
            <div class="doctor_item surgery" style="opacity: 0; display: none;">
                <div class="img">
                    <img src="https://unidgyeongsan.mycafe24.com/img/doctor12.png" alt="">
                </div>
                <div class="content">
                    <h2>
                        권의영
                        <span>
                            <svg width="2" height="28" viewBox="0 0 2 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="2" height="28" fill="#191919"></rect>
                            </svg>
                        </span>
                        <small>외과</small>
                    </h2>
                    <p>유방, 갑상선질환, 복강경수술, 대장, 항문질환, 담낭질환, 탈장</p>
                    <div class="d_btn">
                        <p class="openModalBtn" data-modal="modal01">약력 정보</p>
                        <p class="openModalBtn" data-modal="modal02">진료 일정</p>
                    </div>
                </div>
                <div id="modal01" class="modal modal01">
                    <div class="modal-content">
                        <span class="close">×</span>
                        <p>약력정보</p>
                        <h2>권의영 <span>
                                <svg width="2" height="28" viewBox="0 0 2 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="2" height="28" fill="#191919"></rect>
                                </svg>
                            </span> <small>외과</small></h2>
                        <ul>
                            <li>- 동국대학교 의과대학 졸업</li>
                            <li>- 전주예수병원 외과 전문의 취득</li>
                            <li>- 대한갑상선내분비외과학회 정회원</li>
                            <li>- 대한대장항문학회 평생회원</li>
                        </ul>
                    </div>
                </div>
                <div id="modal02" class="modal modal02">
                    <div class="modal-content">
                        <span class="close">×</span>
                        <p>진료 일정</p>
                        <h2>권의영
                            <span>
                                <svg width="2" height="28" viewBox="0 0 2 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="2" height="28" fill="#191919"></rect>
                                </svg>
                            </span>
                            <small>외과</small>
                        </h2>
                        <li class="doctor_info">
                            <div class="info_con">
                                <div>
                                    <div class="legend">
                                        <div class="legend-item">
                                            <span class="darkblue-circle"></span> 진료
                                        </div>
                                    </div>
                                    <table>
                                        <colgroup>
                                            <col width="16%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                        </colgroup>
                                        <thead>
                                            <tr>
                                                <th scope="col">시간</th>
                                                <th scope="col">월</th>
                                                <th scope="col">화</th>
                                                <th scope="col">수</th>
                                                <th scope="col">목</th>
                                                <th scope="col">금</th>
                                                <th scope="col">토</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                                <div class="work">
                                    <table>
                                        <colgroup>
                                            <col width="16%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                        </colgroup>
                                        <tbody>
                                            <tr>
                                                <td class="bold">오전</td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                            </tr>
                                            <tr>
                                                <td class="bold">오후</td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </li>
                    </div>
                </div>

            </div>
            <div class="doctor_item neurology" style="opacity: 0; display: none;">
                <div class="img">
                    <img src="https://unidgyeongsan.mycafe24.com/img/doctor36.png" alt="">
                </div>
                <div class="content">
                    <h2>
                        김시현 주임과장
                        <span>
                            <svg width="2" height="28" viewBox="0 0 2 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="2" height="28" fill="#191919"></rect>
                            </svg>
                        </span>
                        <small>신경과</small>
                    </h2>
                    <p>치매, 파킨슨병, 뇌졸중, 뇌전증, 두통, 어지럼증, 말초신경 및 척수신경 질환</p>
                    <div class="d_btn">
                        <p class="openModalBtn" data-modal="modal01">약력 정보</p>
                        <p class="openModalBtn" data-modal="modal02">진료 일정</p>
                    </div>
                </div>
                <div id="modal01" class="modal modal01">
                    <div class="modal-content">
                        <span class="close">×</span>
                        <p>약력정보</p>
                        <h2>김시현 주임과장<span>
                                <svg width="2" height="28" viewBox="0 0 2 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="2" height="28" fill="#191919"></rect>
                                </svg>
                            </span> <small>신경과</small></h2>
                        <ul>
                            <li>- 영남대학교 의과대학 졸업</li>
                            <li>- 영남대학교 신경과 전문의 취득</li>
                            <li>- 대한신경과학회 정회원</li>
                            <li>- 대한치매학회 정회원</li>
                        </ul>
                    </div>
                </div>
                <div id="modal02" class="modal modal02">
                    <div class="modal-content">
                        <span class="close">×</span>
                        <p>진료 일정</p>
                        <h2>김시현 주임과장
                            <span>
                                <svg width="2" height="28" viewBox="0 0 2 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="2" height="28" fill="#191919"></rect>
                                </svg>
                            </span>
                            <small>신경과</small>
                        </h2>
                        <li class="doctor_info">
                            <div class="info_con">
                                <div>
                                    <div class="legend">
                                        <div class="legend-item">
                                            <span class="darkblue-circle"></span> 진료
                                        </div>
                                        <div class="legend-item">
                                            <span class="lightblue-circle"></span> 검사
                                        </div>
                                    </div>
                                    <table>
                                        <colgroup>
                                            <col width="16%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                        </colgroup>
                                        <thead>
                                            <tr>
                                                <th scope="col">시간</th>
                                                <th scope="col">월</th>
                                                <th scope="col">화</th>
                                                <th scope="col">수</th>
                                                <th scope="col">목</th>
                                                <th scope="col">금</th>
                                                <th scope="col">토</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                                <div class="work">
                                    <table>
                                        <colgroup>
                                            <col width="16%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                        </colgroup>
                                        <tbody>
                                            <tr>
                                                <td class="bold">오전</td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                            </tr>
                                            <tr>
                                                <td class="bold">오후</td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span> <span>/</span> <span class="lightblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </li>
                    </div>
                </div>

            </div>
            <div class="doctor_item neurology" style="opacity: 0; display: none;">
                <div class="img">
                    <img src="https://unidgyeongsan.mycafe24.com/img/doctor13.png" alt="">
                </div>
                <div class="content">
                    <h2>
                        이혜원
                        <span>
                            <svg width="2" height="28" viewBox="0 0 2 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="2" height="28" fill="#191919"></rect>
                            </svg>
                        </span>
                        <small>신경과</small>
                    </h2>
                    <p>치매, 파킨슨병
                        뇌졸중, 뇌전증, 두통, 어지럼증
                        말초신경 및 척수신경 질환</p>
                    <div class="d_btn">
                        <p class="openModalBtn" data-modal="modal01">약력 정보</p>
                        <p class="openModalBtn" data-modal="modal02">진료 일정</p>
                    </div>
                </div>
                <div id="modal01" class="modal modal01">
                    <div class="modal-content">
                        <span class="close">×</span>
                        <p>약력정보</p>
                        <h2>이혜원 <span>
                                <svg width="2" height="28" viewBox="0 0 2 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="2" height="28" fill="#191919"></rect>
                                </svg>
                            </span> <small>신경과</small></h2>
                        <ul>
                            <li>- 영남대학교 의과대학 졸업
                            </li>
                            <li>- 영남대학교 신경과 전문의 취득
                            </li>
                            <li>- 영남대학교 신경과 뇌졸중분야 전임의 수료
                            </li>
                            <li>- 대한신경과학회 정회원
                            </li>
                        </ul>
                    </div>
                </div>
                <div id="modal02" class="modal modal02">
                    <div class="modal-content">
                        <span class="close">×</span>
                        <p>진료 일정</p>
                        <h2>이혜원
                            <span>
                                <svg width="2" height="28" viewBox="0 0 2 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="2" height="28" fill="#191919"></rect>
                                </svg>
                            </span>
                            <small>신경과</small>
                        </h2>
                        <li class="doctor_info">
                            <div class="info_con">
                                <div>
                                    <div class="legend">
                                        <div class="legend-item">
                                            <span class="darkblue-circle"></span> 진료
                                        </div>
                                        <div class="legend-item">
                                            <span class="lightblue-circle"></span> 검사
                                        </div>
                                    </div>
                                    <table>
                                        <colgroup>
                                            <col width="16%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                        </colgroup>
                                        <thead>
                                            <tr>
                                                <th scope="col">시간</th>
                                                <th scope="col">월</th>
                                                <th scope="col">화</th>
                                                <th scope="col">수</th>
                                                <th scope="col">목</th>
                                                <th scope="col">금</th>
                                                <th scope="col">토</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                                <div class="work">
                                    <table>
                                        <colgroup>
                                            <col width="16%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                        </colgroup>
                                        <tbody>
                                            <tr>
                                                <td class="bold">오전</td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                            </tr>
                                            <tr>
                                                <td class="bold">오후</td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span> <span>/</span> <span class="lightblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </li>
                    </div>
                </div>

            </div>
            <div class="doctor_item orthopedic" style="opacity: 0; display: none;">
                <div class="img">
                    <img src="https://unidgyeongsan.mycafe24.com/img/doctor11.png" alt="">
                </div>
                <div class="content">
                    <h2>
                        박재영
                        <span>
                            <svg width="2" height="28" viewBox="0 0 2 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="2" height="28" fill="#191919"></rect>
                            </svg>
                        </span>
                        <small>정형외과</small>
                    </h2>
                    <p>어깨, 무릎 인공관절, 관절경 수술, 관절염, 골다공증, 퇴행성질환, 스포츠 손상 등</p>
                    <div class="d_btn">
                        <p class="openModalBtn" data-modal="modal01">약력 정보</p>
                        <p class="openModalBtn" data-modal="modal02">진료 일정</p>
                    </div>
                </div>
                <div id="modal01" class="modal modal01">
                    <div class="modal-content">
                        <span class="close">×</span>
                        <p>약력정보</p>
                        <h2>박재영 <span>
                                <svg width="2" height="28" viewBox="0 0 2 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="2" height="28" fill="#191919"></rect>
                                </svg>
                            </span> <small>정형외과</small></h2>
                        <ul>
                            <li>- 경북대학교 의과대학 졸업</li>
                            <li>- 대구파티마병원 정형외과 전문의 취득</li>
                            <li>- 대한정형외과학회 정회원</li>
                            <li>- 국제 골절학회 (AO) 골절 코스 수료</li>
                        </ul>
                    </div>
                </div>
                <div id="modal02" class="modal modal02">
                    <div class="modal-content">
                        <span class="close">×</span>
                        <p>진료 일정</p>
                        <h2>박재영
                            <span>
                                <svg width="2" height="28" viewBox="0 0 2 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="2" height="28" fill="#191919"></rect>
                                </svg>
                            </span>
                            <small>정형외과</small>
                        </h2>
                        <li class="doctor_info">
                            <div class="info_con">
                                <div>
                                    <div class="legend">
                                        <div class="legend-item">
                                            <span class="darkblue-circle"></span> 진료
                                        </div>
                                        <div class="legend-item">
                                            <span class="lightblue-circle"></span> 수술
                                        </div>
                                    </div>
                                    <table>
                                        <colgroup>
                                            <col width="16%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                        </colgroup>
                                        <thead>
                                            <tr>
                                                <th scope="col">시간</th>
                                                <th scope="col">월</th>
                                                <th scope="col">화</th>
                                                <th scope="col">수</th>
                                                <th scope="col">목</th>
                                                <th scope="col">금</th>
                                                <th scope="col">토</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                                <div class="work">
                                    <table>
                                        <colgroup>
                                            <col width="16%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                        </colgroup>
                                        <tbody>
                                            <tr>
                                                <td class="bold">오전</td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span> <span>/</span> <span class="lightblue-circle"></span></td>
                                                <td><span class="lightblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span> <span>/</span> <span class="lightblue-circle"></span></td>
                                            </tr>
                                            <tr>
                                                <td class="bold">오후</td>
                                                <td><span class="lightblue-circle"></span></td>
                                                <td></td>
                                                <td><span class="darkblue-circle"></span> <span>/</span> <span class="lightblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </li>
                    </div>
                </div>

            </div>
            <div class="doctor_item orthopedic" style="opacity: 0; display: none;">
                <div class="img">
                    <img src="https://unidgyeongsan.mycafe24.com/img/doctor34.png" alt="">
                </div>
                <div class="content">
                    <h2>
                        김기영
                        <span>
                            <svg width="2" height="28" viewBox="0 0 2 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="2" height="28" fill="#191919"></rect>
                            </svg>
                        </span>
                        <small>정형외과</small>
                    </h2>
                    <p>어깨, 무릎 인공관절, 관절경 수술, 관절염, 골다공증, 퇴행성질환, 스포츠 손상 등</p>
                    <div class="d_btn">
                        <p class="openModalBtn" data-modal="modal01">약력 정보</p>
                        <p class="openModalBtn" data-modal="modal02">진료 일정</p>
                    </div>
                </div>
                <div id="modal01" class="modal modal01">
                    <div class="modal-content">
                        <span class="close">×</span>
                        <p>약력정보</p>
                        <h2>김기영 <span>
                                <svg width="2" height="28" viewBox="0 0 2 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="2" height="28" fill="#191919"></rect>
                                </svg>
                            </span> <small>정형외과</small></h2>
                        <ul>
                            <li>- 경북대학교 의과대학 졸업ㆍ박사 학위 취득</li>
                            <li>- 국립의료원 정형외과 전문의 취득</li>
                            <li>- 대한정형외과학회 정회원</li>
                            <li>- 국제 골절학회 (AO) 골절 코스 수료</li>
                        </ul>
                    </div>
                </div>
                <div id="modal02" class="modal modal02">
                    <div class="modal-content">
                        <span class="close">×</span>
                        <p>진료 일정</p>
                        <h2>김기영
                            <span>
                                <svg width="2" height="28" viewBox="0 0 2 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="2" height="28" fill="#191919"></rect>
                                </svg>
                            </span>
                            <small>정형외과</small>
                        </h2>
                        <li class="doctor_info">
                            <div class="info_con">
                                <div>
                                    <div class="legend">
                                        <div class="legend-item">
                                            <span class="darkblue-circle"></span> 진료
                                        </div>
                                        <div class="legend-item">
                                            <span class="lightblue-circle"></span> 수술
                                        </div>
                                    </div>
                                    <table>
                                        <colgroup>
                                            <col width="16%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                        </colgroup>
                                        <thead>
                                            <tr>
                                                <th scope="col">시간</th>
                                                <th scope="col">월</th>
                                                <th scope="col">화</th>
                                                <th scope="col">수</th>
                                                <th scope="col">목</th>
                                                <th scope="col">금</th>
                                                <th scope="col">토</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                                <div class="work">
                                    <table>
                                        <colgroup>
                                            <col width="16%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                        </colgroup>
                                        <tbody>
                                            <tr>
                                                <td class="bold">오전</td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="lightblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="lightblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span> <span>/</span> <span class="lightblue-circle"></span></td>
                                            </tr>
                                            <tr>
                                                <td class="bold">오후</td>
                                                <td><span class="darkblue-circle"></span> <span>/</span> <span class="lightblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span> <span>/</span> <span class="lightblue-circle"></span></td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </li>
                    </div>
                </div>

            </div>
            <div class="doctor_item orthopedic" style="opacity: 0; display: none;">
                <div class="img">
                    <img src="https://unidgyeongsan.mycafe24.com/img/doctor33.png" alt="">
                </div>
                <div class="content">
                    <h2>
                        최창현
                        <span>
                            <svg width="2" height="28" viewBox="0 0 2 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="2" height="28" fill="#191919"></rect>
                            </svg>
                        </span>
                        <small>정형외과</small>
                    </h2>
                    <p>어깨, 무릎, 인공관절, 관절경 수술, 퇴행성질환, 스포츠 손상, 골다공증 등</p>
                    <div class="d_btn">
                        <p class="openModalBtn" data-modal="modal01">약력 정보</p>
                        <p class="openModalBtn" data-modal="modal02">진료 일정</p>
                    </div>
                </div>
                <div id="modal01" class="modal modal01">
                    <div class="modal-content">
                        <span class="close">×</span>
                        <p>약력정보</p>
                        <h2>최창현 <span>
                                <svg width="2" height="28" viewBox="0 0 2 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="2" height="28" fill="#191919"></rect>
                                </svg>
                            </span> <small>정형외과</small></h2>
                        <ul>
                            <li>- 영남대학교병원 의과대학 졸업</li>
                            <li>- 영남대학교병원 정형외과 임상교수 역임</li>
                            <li>- 대한정형외과학회 정회원
                            </li>
                            <li>- 국제 골절학회 (AO) All 코스 수료 및 최우수상 수상
                            </li>
                        </ul>
                    </div>
                </div>
                <div id="modal02" class="modal modal02">
                    <div class="modal-content">
                        <span class="close">×</span>
                        <p>진료 일정</p>
                        <h2>최창현
                            <span>
                                <svg width="2" height="28" viewBox="0 0 2 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="2" height="28" fill="#191919"></rect>
                                </svg>
                            </span>
                            <small>정형외과</small>
                        </h2>
                        <li class="doctor_info">
                            <div class="info_con">
                                <div>
                                    <div class="legend">
                                        <div class="legend-item">
                                            <span class="darkblue-circle"></span> 진료
                                        </div>
                                        <div class="legend-item">
                                            <span class="lightblue-circle"></span> 수술
                                        </div>
                                    </div>
                                    <table>
                                        <colgroup>
                                            <col width="16%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                        </colgroup>
                                        <thead>
                                            <tr>
                                                <th scope="col">시간</th>
                                                <th scope="col">월</th>
                                                <th scope="col">화</th>
                                                <th scope="col">수</th>
                                                <th scope="col">목</th>
                                                <th scope="col">금</th>
                                                <th scope="col">토</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                                <div class="work">
                                    <table>
                                        <colgroup>
                                            <col width="16%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                        </colgroup>
                                        <tbody>
                                            <tr>
                                                <td class="bold">오전</td>
                                                <td><span class="lightblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="lightblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span> <span>/</span> <span class="lightblue-circle"></span></td>
                                            </tr>
                                            <tr>
                                                <td class="bold">오후</td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span> <span>/</span> <span class="lightblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="lightblue-circle"></span></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </li>
                    </div>
                </div>

            </div>
            <div class="doctor_item psychiatry" style="opacity: 0; display: none;">
                <div class="img">
                    <img src="https://unidgyeongsan.mycafe24.com/img/doctor01.png" alt="">
                </div>
                <div class="content">
                    <h2>
                        이택희
                        <span>
                            <svg width="2" height="28" viewBox="0 0 2 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="2" height="28" fill="#191919"></rect>
                            </svg>
                        </span>
                        <small>정신건강의학과</small>
                    </h2>
                    <p>스트레스성 질환, 신경성 질환, 불면, 불안, 우울, 물질관련 장애, 정신증 등</p>
                    <div class="d_btn">
                        <p class="openModalBtn" data-modal="modal01">약력 정보</p>
                        <p class="openModalBtn" data-modal="modal02">진료 일정</p>
                    </div>
                </div>
                <div id="modal01" class="modal modal01">
                    <div class="modal-content">
                        <span class="close">×</span>
                        <p>약력정보</p>
                        <h2>이택희 <span>
                                <svg width="2" height="28" viewBox="0 0 2 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="2" height="28" fill="#191919"></rect>
                                </svg>
                            </span> <small>정신건강의학과</small></h2>
                        <ul>
                            <li>- 경북대학교 의과대학 졸업 * 박사학위 취득</li>
                            <li>- 경북대학교병원 정신건강의학과 전문의 취득</li>
                            <li>- 대구카톨릭대학교 조교수 역임</li>
                            <li>- 대한노인정신의학회 정회원</li>
                        </ul>
                    </div>
                </div>
                <div id="modal02" class="modal modal02">
                    <div class="modal-content">
                        <span class="close">×</span>
                        <p>진료 일정</p>
                        <h2>이택희
                            <span>
                                <svg width="2" height="28" viewBox="0 0 2 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="2" height="28" fill="#191919"></rect>
                                </svg>
                            </span>
                            <small>정신건강의학과</small>
                        </h2>
                        <li class="doctor_info">
                            <div class="info_con">
                                <div>
                                    <div class="legend">
                                        <div class="legend-item">
                                            <span class="darkblue-circle"></span> 진료
                                        </div>
                                    </div>
                                    <table>
                                        <colgroup>
                                            <col width="16%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                        </colgroup>
                                        <thead>
                                            <tr>
                                                <th scope="col">시간</th>
                                                <th scope="col">월</th>
                                                <th scope="col">화</th>
                                                <th scope="col">수</th>
                                                <th scope="col">목</th>
                                                <th scope="col">금</th>
                                                <th scope="col">토</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                                <div class="work">
                                    <table>
                                        <colgroup>
                                            <col width="16%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                        </colgroup>
                                        <tbody>
                                            <tr>
                                                <td class="bold">오전</td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td></td>
                                                <td></td>
                                                <td><span class="darkblue-circle"></span></td>
                                            </tr>
                                            <tr>
                                                <td class="bold">오후</td>
                                                <td></td>
                                                <td></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </li>
                    </div>
                </div>

            </div>
            <div class="doctor_item psychiatry" style="opacity: 0; display: none;">
                <div class="img">
                    <img src="https://unidgyeongsan.mycafe24.com/img/doctor14.png" alt="">
                </div>
                <div class="content">
                    <h2 class="">
                        이준영 부원장
                        <span>
                            <svg width="2" height="28" viewBox="0 0 2 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="2" height="28" fill="#191919"></rect>
                            </svg>
                        </span>
                        <small>정신건강의학과</small>
                    </h2>
                    <p>스트레스성 질환, 신경성 질환, 불면, 불안, 우울, 물질관련 장애, 정신증 등</p>
                    <div class="d_btn">
                        <p class="openModalBtn" data-modal="modal01">약력 정보</p>
                        <p class="openModalBtn" data-modal="modal02">진료 일정</p>
                    </div>
                </div>
                <div id="modal01" class="modal modal01">
                    <div class="modal-content">
                        <span class="close">×</span>
                        <p>약력정보</p>
                        <h2>이준영 부원장<span>
                                <svg width="2" height="28" viewBox="0 0 2 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="2" height="28" fill="#191919"></rect>
                                </svg>
                            </span> <small>정신건강의학과</small></h2>
                        <ul>
                            <li>- 경북대학교 의과대학 졸업</li>
                            <li>- 경북대학교병원 정신건강의학과 전문의 취득</li>
                            <li>- 포항의료원 정신건강의학과 과장</li>
                            <li>- 포항알코올상담센터 센터장 역임</li>
                        </ul>
                    </div>
                </div>
                <div id="modal02" class="modal modal02">
                    <div class="modal-content">
                        <span class="close">×</span>
                        <p>진료 일정</p>
                        <h2>이준영 부원장
                            <span>
                                <svg width="2" height="28" viewBox="0 0 2 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="2" height="28" fill="#191919"></rect>
                                </svg>
                            </span>
                            <small>정신건강의학과</small>
                        </h2>
                        <li class="doctor_info">
                            <div class="info_con">
                                <div>
                                    <div class="legend">
                                        <div class="legend-item">
                                            <span class="darkblue-circle"></span> 진료
                                        </div>
                                    </div>
                                    <table>
                                        <colgroup>
                                            <col width="16%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                        </colgroup>
                                        <thead>
                                            <tr>
                                                <th scope="col">시간</th>
                                                <th scope="col">월</th>
                                                <th scope="col">화</th>
                                                <th scope="col">수</th>
                                                <th scope="col">목</th>
                                                <th scope="col">금</th>
                                                <th scope="col">토</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                                <div class="work">
                                    <table>
                                        <colgroup>
                                            <col width="16%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                        </colgroup>
                                        <tbody>
                                            <tr>
                                                <td class="bold">오전</td>
                                                <td></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td><span class="darkblue-circle"></span></td>
                                            </tr>
                                            <tr>
                                                <td class="bold">오후</td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td></td>
                                                <td></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </li>
                    </div>
                </div>

            </div>
            <div class="doctor_item psychiatry" style="opacity: 0; display: none;">
                <div class="img">
                    <img src="https://unidgyeongsan.mycafe24.com/img/doctor02.png" alt="">
                </div>
                <div class="content">
                    <h2>
                        배민재
                        <span>
                            <svg width="2" height="28" viewBox="0 0 2 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="2" height="28" fill="#191919"></rect>
                            </svg>
                        </span>
                        <small>정신건강의학과</small>
                    </h2>
                    <p>스트레스성 질환, 신경성 질환, 불면, 불안, 우울, 물질관련 장애, 정신증 등</p>
                    <div class="d_btn">
                        <p class="openModalBtn" data-modal="modal01">약력 정보</p>
                        <p class="openModalBtn" data-modal="modal02">진료 일정</p>
                    </div>
                </div>
                <div id="modal01" class="modal modal01">
                    <div class="modal-content">
                        <span class="close">×</span>
                        <p>약력정보</p>
                        <h2>배민재 <span>
                                <svg width="2" height="28" viewBox="0 0 2 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="2" height="28" fill="#191919"></rect>
                                </svg>
                            </span> <small>정신건강의학과</small></h2>
                        <ul>
                            <li>- 경북대학교 의학전문대학원 졸업</li>
                            <li>- 경북대학교병원 정신건강의학과 전문의 취득</li>
                            <li>- 대한불안의학회 불안장애 심층치료 과정 수료</li>
                            <li>- 대한정서인지행동의학회 평생회원</li>
                        </ul>
                    </div>
                </div>
                <div id="modal02" class="modal modal02">
                    <div class="modal-content">
                        <span class="close">×</span>
                        <p>진료 일정</p>
                        <h2>배민재
                            <span>
                                <svg width="2" height="28" viewBox="0 0 2 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="2" height="28" fill="#191919"></rect>
                                </svg>
                            </span>
                            <small>정신건강의학과</small>
                        </h2>
                        <li class="doctor_info">
                            <div class="info_con">
                                <div>
                                    <div class="legend">
                                        <div class="legend-item">
                                            <span class="darkblue-circle"></span> 진료
                                        </div>
                                    </div>
                                    <table>
                                        <colgroup>
                                            <col width="16%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                        </colgroup>
                                        <thead>
                                            <tr>
                                                <th scope="col">시간</th>
                                                <th scope="col">월</th>
                                                <th scope="col">화</th>
                                                <th scope="col">수</th>
                                                <th scope="col">목</th>
                                                <th scope="col">금</th>
                                                <th scope="col">토</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                                <div class="work">
                                    <table>
                                        <colgroup>
                                            <col width="16%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                        </colgroup>
                                        <tbody>
                                            <tr>
                                                <td class="bold">오전</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                            </tr>
                                            <tr>
                                                <td class="bold">오후</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </li>
                    </div>
                </div>

            </div>
            <div class="doctor_item radiology" style="opacity: 0; display: none;">
                <div class="img">
                    <img src="https://unidgyeongsan.mycafe24.com/img/doctor05.png" alt="">
                </div>
                <div class="content">
                    <h2>
                        정영진 주임과장
                        <span>
                            <svg width="2" height="28" viewBox="0 0 2 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="2" height="28" fill="#191919"></rect>
                            </svg>
                        </span>
                        <small>영상의학과</small>
                    </h2>
                    <p>MRI, CT, X-ray 판독, 초음파촬영, 유방촬영, 골밀도 판독</p>
                    <div class="d_btn">
                        <p class="openModalBtn" data-modal="modal01">약력 정보</p>
                        <p class="openModalBtn" data-modal="modal02">진료 일정</p>
                    </div>
                </div>
                <div id="modal01" class="modal modal01">
                    <div class="modal-content">
                        <span class="close">×</span>
                        <p>약력정보</p>
                        <h2>정영진 주임과장 <span>
                                <svg width="2" height="28" viewBox="0 0 2 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="2" height="28" fill="#191919"></rect>
                                </svg>
                            </span> <small>영상의학과</small></h2>
                        <ul>
                            <li>- 영남대학교 의과대학 졸업</li>
                            <li>- 영남대학교 영상의학과 전문의 취득</li>
                            <li>- 대한영상의학회 정회원</li>
                            <li>- 대한초음파학회 정회원</li>
                        </ul>
                    </div>
                </div>
                <div id="modal02" class="modal modal02">
                    <div class="modal-content">
                        <span class="close">×</span>
                        <p>진료 일정</p>
                        <h2>정영진 주임과장
                            <span>
                                <svg width="2" height="28" viewBox="0 0 2 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="2" height="28" fill="#191919"></rect>
                                </svg>
                            </span>
                            <small>영상의학과</small>
                        </h2>
                        <li class="doctor_info">
                            <div class="info_con">
                                <div>
                                    <div class="legend">
                                        <div class="legend-item">
                                            <span class="darkblue-circle"></span> 진료
                                        </div>
                                    </div>
                                    <table>
                                        <colgroup>
                                            <col width="16%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                        </colgroup>
                                        <thead>
                                            <tr>
                                                <th scope="col">시간</th>
                                                <th scope="col">월</th>
                                                <th scope="col">화</th>
                                                <th scope="col">수</th>
                                                <th scope="col">목</th>
                                                <th scope="col">금</th>
                                                <th scope="col">토</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                                <div class="work">
                                    <table>
                                        <colgroup>
                                            <col width="16%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                        </colgroup>
                                        <tbody>
                                            <tr>
                                                <td class="bold">오전</td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                            </tr>
                                            <tr>
                                                <td class="bold">오후</td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </li>
                    </div>
                </div>

            </div>
            <div class="doctor_item radiology" style="opacity: 0; display: none;">
                <div class="img">
                    <img src="https://unidgyeongsan.mycafe24.com/img/doctor18.png" alt="">
                </div>
                <div class="content">
                    <h2>
                        윤형조
                        <span>
                            <svg width="2" height="28" viewBox="0 0 2 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="2" height="28" fill="#191919"></rect>
                            </svg>
                        </span>
                        <small>영상의학과</small>
                    </h2>
                    <p>MRI, CT, X-ray 판독, 초음파촬영, 유방촬영, 골밀도 판독</p>
                    <div class="d_btn">
                        <p class="openModalBtn" data-modal="modal01">약력 정보</p>
                        <p class="openModalBtn" data-modal="modal02">진료 일정</p>
                    </div>
                </div>
                <div id="modal01" class="modal modal01">
                    <div class="modal-content">
                        <span class="close">×</span>
                        <p>약력정보</p>
                        <h2>윤형조 <span>
                                <svg width="2" height="28" viewBox="0 0 2 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="2" height="28" fill="#191919"></rect>
                                </svg>
                            </span> <small>영상의학과</small></h2>
                        <ul>
                            <li>- 경북대학교 의과대학 졸업</li>
                            <li>- 대구파티마병원 영상의학과 전문의 취득</li>
                            <li>- 대한영상의학회 정회원</li>
                            <li>- 대한초음파학회 정회원</li>
                        </ul>
                    </div>
                </div>
                <div id="modal02" class="modal modal02">
                    <div class="modal-content">
                        <span class="close">×</span>
                        <p>진료 일정</p>
                        <h2>윤형조
                            <span>
                                <svg width="2" height="28" viewBox="0 0 2 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="2" height="28" fill="#191919"></rect>
                                </svg>
                            </span>
                            <small>영상의학과</small>
                        </h2>
                        <li class="doctor_info">
                            <div class="info_con">
                                <div>
                                    <div class="legend">
                                        <div class="legend-item">
                                            <span class="darkblue-circle"></span> 진료
                                        </div>
                                    </div>
                                    <table>
                                        <colgroup>
                                            <col width="16%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                        </colgroup>
                                        <thead>
                                            <tr>
                                                <th scope="col">시간</th>
                                                <th scope="col">월</th>
                                                <th scope="col">화</th>
                                                <th scope="col">수</th>
                                                <th scope="col">목</th>
                                                <th scope="col">금</th>
                                                <th scope="col">토</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                                <div class="work">
                                    <table>
                                        <colgroup>
                                            <col width="16%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                        </colgroup>
                                        <tbody>
                                            <tr>
                                                <td class="bold">오전</td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                            </tr>
                                            <tr>
                                                <td class="bold">오후</td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </li>
                    </div>
                </div>

            </div>
            <div class="doctor_item radiology" style="opacity: 0; display: none;">
                <div class="img">
                    <img src="https://unidgyeongsan.mycafe24.com/img/doctor06.png" alt="">
                </div>
                <div class="content">
                    <h2>
                        강명석
                        <span>
                            <svg width="2" height="28" viewBox="0 0 2 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="2" height="28" fill="#191919"></rect>
                            </svg>
                        </span>
                        <small>영상의학과</small>
                    </h2>
                    <p>MRI, CT, X-ray 판독, 초음파촬영, 유방촬영, 골밀도 판독</p>
                    <div class="d_btn">
                        <p class="openModalBtn" data-modal="modal01">약력 정보</p>
                        <p class="openModalBtn" data-modal="modal02">진료 일정</p>
                    </div>
                </div>
                <div id="modal01" class="modal modal01">
                    <div class="modal-content">
                        <span class="close">×</span>
                        <p>약력정보</p>
                        <h2>강명석 <span>
                                <svg width="2" height="28" viewBox="0 0 2 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="2" height="28" fill="#191919"></rect>
                                </svg>
                            </span> <small>영상의학과</small></h2>
                        <ul>
                            <li>- 경북대학교 의과대학 졸업</li>
                            <li>- 계명대학교 동산병원 영상의학과 전문의 취득</li>
                            <li>- 대한영상의학회 정회원</li>
                            <li>- 대한초음파학회 정회원</li>
                        </ul>
                    </div>
                </div>
                <div id="modal02" class="modal modal02">
                    <div class="modal-content">
                        <span class="close">×</span>
                        <p>진료 일정</p>
                        <h2>강명석
                            <span>
                                <svg width="2" height="28" viewBox="0 0 2 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="2" height="28" fill="#191919"></rect>
                                </svg>
                            </span>
                            <small>영상의학과</small>
                        </h2>
                        <li class="doctor_info">
                            <div class="info_con">
                                <div>
                                    <div class="legend">
                                        <div class="legend-item">
                                            <span class="darkblue-circle"></span> 진료
                                        </div>
                                    </div>
                                    <table>
                                        <colgroup>
                                            <col width="16%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                        </colgroup>
                                        <thead>
                                            <tr>
                                                <th scope="col">시간</th>
                                                <th scope="col">월</th>
                                                <th scope="col">화</th>
                                                <th scope="col">수</th>
                                                <th scope="col">목</th>
                                                <th scope="col">금</th>
                                                <th scope="col">토</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                                <div class="work">
                                    <table>
                                        <colgroup>
                                            <col width="16%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                        </colgroup>
                                        <tbody>
                                            <tr>
                                                <td class="bold">오전</td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                            </tr>
                                            <tr>
                                                <td class="bold">오후</td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </li>
                    </div>
                </div>

            </div>
            <div class="doctor_item family" style="opacity: 0; display: none;">
                <div class="img">
                    <img src="https://unidgyeongsan.mycafe24.com/img/doctor17.png" alt="">
                </div>
                <div class="content">
                    <h2>
                        정은영
                        <span>
                            <svg width="2" height="28" viewBox="0 0 2 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="2" height="28" fill="#191919"></rect>
                            </svg>
                        </span>
                        <small>가정의학과</small>
                    </h2>
                    <p>건강검진
                        급성만성질환 관리
                        영양상담 / 비만
                        예방접종</p>
                    <div class="d_btn">
                        <p class="openModalBtn" data-modal="modal01">약력 정보</p>
                        <p class="openModalBtn" data-modal="modal02">진료 일정</p>
                    </div>
                </div>
                <div id="modal01" class="modal modal01">
                    <div class="modal-content">
                        <span class="close">×</span>
                        <p>약력정보</p>
                        <h2>정은영 <span>
                                <svg width="2" height="28" viewBox="0 0 2 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="2" height="28" fill="#191919"></rect>
                                </svg>
                            </span> <small>가정의학과</small></h2>
                        <ul>
                            <li>- 영남대학교 의과대학 졸업</li>
                            <li>- 영남대학교 가정의학과 전문의 취득</li>
                            <li>- 임상영양학교 수료</li>
                            <li>- 대한가정의학회 정회원</li>
                        </ul>
                    </div>
                </div>
                <div id="modal02" class="modal modal02">
                    <div class="modal-content">
                        <span class="close">×</span>
                        <p>진료 일정</p>
                        <h2>정은영
                            <span>
                                <svg width="2" height="28" viewBox="0 0 2 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="2" height="28" fill="#191919"></rect>
                                </svg>
                            </span>
                            <small>가정의학과</small>
                        </h2>
                        <li class="doctor_info">
                            <div class="info_con">
                                <div>
                                    <div class="legend">
                                        <div class="legend-item">
                                            <span class="darkblue-circle"></span> 진료
                                        </div>
                                        <div class="legend-item">
                                            <span class="lightblue-circle"></span> 내시경
                                        </div>
                                    </div>
                                    <table>
                                        <colgroup>
                                            <col width="16%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                        </colgroup>
                                        <thead>
                                            <tr>
                                                <th scope="col">시간</th>
                                                <th scope="col">월</th>
                                                <th scope="col">화</th>
                                                <th scope="col">수</th>
                                                <th scope="col">목</th>
                                                <th scope="col">금</th>
                                                <th scope="col">토</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                                <div class="work">
                                    <table>
                                        <colgroup>
                                            <col width="16%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                        </colgroup>
                                        <tbody>
                                            <tr>
                                                <td class="bold">오전</td>
                                                <td><span class="lightblue-circle"></span></td>
                                                <td><span class="lightblue-circle"></span></td>
                                                <td><span class="lightblue-circle"></span></td>
                                                <td><span class="lightblue-circle"></span></td>
                                                <td><span class="lightblue-circle"></span></td>
                                                <td><span class="lightblue-circle"></span></td>
                                            </tr>
                                            <tr>
                                                <td class="bold">오후</td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </li>
                    </div>
                </div>

            </div>

            <div class="doctor_item pediatrics" style="opacity: 0; display: none;">
                <div class="img">
                    <img src="https://unidgyeongsan.mycafe24.com/img/doctor03.png" alt="">
                </div>
                <div class="content">
                    <h2>
                        윤은실
                        <span>
                            <svg width="2" height="28" viewBox="0 0 2 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="2" height="28" fill="#191919"></rect>
                            </svg>
                        </span>
                        <small>소아청소년과</small>
                    </h2>
                    <p>예방접종, 육아상담, 소아소화기(복통), 비만, 소아호흡기, 알러지, 아토피</p>
                    <div class="d_btn">
                        <p class="openModalBtn" data-modal="modal01">약력 정보</p>
                        <p class="openModalBtn" data-modal="modal02">진료 일정</p>
                    </div>
                </div>
                <div id="modal01" class="modal modal01">
                    <div class="modal-content">
                        <span class="close">×</span>
                        <p>약력정보</p>
                        <h2>윤은실 <span>
                                <svg width="2" height="28" viewBox="0 0 2 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="2" height="28" fill="#191919"></rect>
                                </svg>
                            </span> <small>소아청소년과</small></h2>
                        <ul>
                            <li>- 영남대학교 의과대학 졸업</li>
                            <li>- 영남대학교병원 소아청소년과 전문의 취득</li>
                            <li>- 영남대학교병원 소아청소년과 외래교수</li>
                            <li>- 대한 소아소화기영양학회 회원</li>
                        </ul>
                    </div>
                </div>
                <div id="modal02" class="modal modal02">
                    <div class="modal-content">
                        <span class="close">×</span>
                        <p>진료 일정</p>
                        <h2>윤은실
                            <span>
                                <svg width="2" height="28" viewBox="0 0 2 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="2" height="28" fill="#191919"></rect>
                                </svg>
                            </span>
                            <small>소아청소년과</small>
                        </h2>
                        <li class="doctor_info">
                            <div class="info_con">
                                <div>
                                    <div class="legend">
                                        <div class="legend-item">
                                            <span class="darkblue-circle"></span> 진료
                                        </div>
                                    </div>
                                    <table>
                                        <colgroup>
                                            <col width="16%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                        </colgroup>
                                        <thead>
                                            <tr>
                                                <th scope="col">시간</th>
                                                <th scope="col">월</th>
                                                <th scope="col">화</th>
                                                <th scope="col">수</th>
                                                <th scope="col">목</th>
                                                <th scope="col">금</th>
                                                <th scope="col">토</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                                <div class="work">
                                    <table>
                                        <colgroup>
                                            <col width="16%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                        </colgroup>
                                        <tbody>
                                            <tr>
                                                <td class="bold">오전</td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                            </tr>
                                            <tr>
                                                <td class="bold">오후</td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </li>
                    </div>
                </div>

            </div>
            <div class="doctor_item anesthesiology" style="opacity: 0; display: none;">
                <div class="img">
                    <img src="https://unidgyeongsan.mycafe24.com/img/doctor19.png" alt="">
                </div>
                <div class="content">
                    <h2>
                        서다미
                        <span>
                            <svg width="2" height="28" viewBox="0 0 2 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="2" height="28" fill="#191919"></rect>
                            </svg>
                        </span>
                        <small>마취통증의학과</small>
                    </h2>
                    <p>마취, 통증</p>
                    <div class="d_btn">
                        <p class="openModalBtn" data-modal="modal01">약력 정보</p>
                        <p class="openModalBtn" data-modal="modal02">진료 일정</p>
                    </div>
                </div>
                <div id="modal01" class="modal modal01">
                    <div class="modal-content">
                        <span class="close">×</span>
                        <p>약력정보</p>
                        <h2>서다미 <span>
                                <svg width="2" height="28" viewBox="0 0 2 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="2" height="28" fill="#191919"></rect>
                                </svg>
                            </span> <small>마취통증의학과</small></h2>
                        <ul>
                            <li>- 경북대학교 의과대학 졸업</li>
                            <li>- 대구파티마병원 마취통증의학과 전문의 취득</li>
                            <li>- 대한마취통증의학회 정회원</li>
                            <li>- 대한통증학회 정회원</li>
                        </ul>
                    </div>
                </div>
                <div id="modal02" class="modal modal02">
                    <div class="modal-content">
                        <span class="close">×</span>
                        <p>진료 일정</p>
                        <h2>서다미
                            <span>
                                <svg width="2" height="28" viewBox="0 0 2 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="2" height="28" fill="#191919"></rect>
                                </svg>
                            </span>
                            <small>마취통증의학과</small>
                        </h2>
                        <li class="doctor_info">
                            <div class="info_con">
                                <div>
                                    <div class="legend">
                                        <div class="legend-item">
                                            <span class="lightblue-circle"></span> 수술
                                        </div>
                                    </div>
                                    <table>
                                        <colgroup>
                                            <col width="16%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                        </colgroup>
                                        <thead>
                                            <tr>
                                                <th scope="col">시간</th>
                                                <th scope="col">월</th>
                                                <th scope="col">화</th>
                                                <th scope="col">수</th>
                                                <th scope="col">목</th>
                                                <th scope="col">금</th>
                                                <th scope="col">토</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                                <div class="work">
                                    <table>
                                        <colgroup>
                                            <col width="16%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                        </colgroup>
                                        <tbody>
                                            <tr>
                                                <td class="bold">오전</td>
                                                <td><span class="lightblue-circle"></span></td>
                                                <td><span class="lightblue-circle"></span></td>
                                                <td><span class="lightblue-circle"></span></td>
                                                <td><span class="lightblue-circle"></span></td>
                                                <td><span class="lightblue-circle"></span></td>
                                                <td><span class="lightblue-circle"></span></td>
                                            </tr>
                                            <tr>
                                                <td class="bold">오후</td>
                                                <td><span class="lightblue-circle"></span></td>
                                                <td><span class="lightblue-circle"></span></td>
                                                <td><span class="lightblue-circle"></span></td>
                                                <td><span class="lightblue-circle"></span></td>
                                                <td><span class="lightblue-circle"></span></td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </li>
                    </div>
                </div>

            </div>
            <div class="doctor_item anesthesiology" style="opacity: 0; display: none;">
                <div class="img">
                    <img src="https://unidgyeongsan.mycafe24.com/img/doctor07.png" alt="">
                </div>
                <div class="content">
                    <h2>
                        석지혜
                        <span>
                            <svg width="2" height="28" viewBox="0 0 2 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="2" height="28" fill="#191919"></rect>
                            </svg>
                        </span>
                        <small>마취통증의학과</small>
                    </h2>
                    <p>마취, 통증</p>
                    <div class="d_btn">
                        <p class="openModalBtn" data-modal="modal01">약력 정보</p>
                        <p class="openModalBtn" data-modal="modal02">진료 일정</p>
                    </div>
                </div>
                <div id="modal01" class="modal modal01">
                    <div class="modal-content">
                        <span class="close">×</span>
                        <p>약력정보</p>
                        <h2>석지혜 <span>
                                <svg width="2" height="28" viewBox="0 0 2 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="2" height="28" fill="#191919"></rect>
                                </svg>
                            </span> <small>마취통증의학과</small></h2>
                        <ul>
                            <li>- 제주대학교 의과대학 졸업</li>
                            <li>- 대구파티마병원 마취통증의학과 전문의 취득</li>
                            <li>- 대한마취통증의학회 정회원</li>
                            <li>- 대한통증학회 정회원</li>
                        </ul>
                    </div>
                </div>
                <div id="modal02" class="modal modal02">
                    <div class="modal-content">
                        <span class="close">×</span>
                        <p>진료 일정</p>
                        <h2>석지혜
                            <span>
                                <svg width="2" height="28" viewBox="0 0 2 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="2" height="28" fill="#191919"></rect>
                                </svg>
                            </span>
                            <small>마취통증의학과</small>
                        </h2>
                        <li class="doctor_info">
                            <div class="info_con">
                                <div>
                                    <div class="legend">
                                        <div class="legend-item">
                                            <span class="lightblue-circle"></span> 수술
                                        </div>
                                    </div>
                                    <table>
                                        <colgroup>
                                            <col width="16%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                        </colgroup>
                                        <thead>
                                            <tr>
                                                <th scope="col">시간</th>
                                                <th scope="col">월</th>
                                                <th scope="col">화</th>
                                                <th scope="col">수</th>
                                                <th scope="col">목</th>
                                                <th scope="col">금</th>
                                                <th scope="col">토</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                                <div class="work">
                                    <table>
                                        <colgroup>
                                            <col width="16%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                        </colgroup>
                                        <tbody>
                                            <tr>
                                                <td class="bold">오전</td>
                                                <td><span class="lightblue-circle"></span></td>
                                                <td><span class="lightblue-circle"></span></td>
                                                <td><span class="lightblue-circle"></span></td>
                                                <td><span class="lightblue-circle"></span></td>
                                                <td><span class="lightblue-circle"></span></td>
                                                <td><span class="lightblue-circle"></span></td>
                                            </tr>
                                            <tr>
                                                <td class="bold">오후</td>
                                                <td><span class="lightblue-circle"></span></td>
                                                <td><span class="lightblue-circle"></span></td>
                                                <td><span class="lightblue-circle"></span></td>
                                                <td><span class="lightblue-circle"></span></td>
                                                <td><span class="lightblue-circle"></span></td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </li>
                    </div>
                </div>

            </div>

            <div class="doctor_item emergency" style="opacity: 0; display: none;">
                <div class="img">
                    <img src="https://unidgyeongsan.mycafe24.com/img/doctor21.png" alt="">
                </div>
                <div class="content">
                    <h2>
                        이명갑 주임과장
                        <span>
                            <svg width="2" height="28" viewBox="0 0 2 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="2" height="28" fill="#191919"></rect>
                            </svg>
                        </span>
                        <small>응급의학과</small>
                    </h2>
                    <p>응급질환, 소생의학</p>
                    <div class="d_btn">
                        <p class="openModalBtn" data-modal="modal01">약력 정보</p>
                        <p class="openModalBtn" data-modal="modal02">진료 일정</p>
                    </div>
                </div>
                <div id="modal01" class="modal modal01">
                    <div class="modal-content">
                        <span class="close">×</span>
                        <p>약력정보</p>
                        <h2>이명갑 주임과장 <span>
                                <svg width="2" height="28" viewBox="0 0 2 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="2" height="28" fill="#191919"></rect>
                                </svg>
                            </span> <small>응급의학과</small></h2>
                        <ul>
                            <li>- 계명대학교 의과대학 졸업</li>
                            <li>- 계명대학교 동산병원 응급의학과 전문의 취득</li>
                            <li>- 순천향대학교 구미병원 응급의학과 과장 및 조교수 역임</li>
                            <li>- 대한 응급의학회 정회원</li>
                        </ul>
                    </div>
                </div>
                <div id="modal02" class="modal modal02">
                    <div class="modal-content">
                        <span class="close">×</span>
                        <p>진료 일정</p>
                        <h2>이명갑 주임과장 <span>
                                <svg width="2" height="28" viewBox="0 0 2 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="2" height="28" fill="#191919"></rect>
                                </svg>
                            </span> <small>응급의학과</small></h2>
                        <li class="doctor_info">
                            <div class="info_con">
                                <div>
                                    <div class="legend">
                                        <div class="legend-item">
                                            <span class="darkblue-circle"></span> 진료
                                        </div>
                                        <div class="legend-item">
                                            <span class="lightblue-circle"></span> 클리닉
                                        </div>
                                    </div>
                                    <table>
                                        <colgroup>
                                            <col width="16%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                        </colgroup>
                                        <thead>
                                            <tr>
                                                <th scope="col">시간</th>
                                                <th scope="col">월</th>
                                                <th scope="col">화</th>
                                                <th scope="col">수</th>
                                                <th scope="col">목</th>
                                                <th scope="col">금</th>
                                                <th scope="col">토</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                                <div class="work">
                                    <table>
                                        <colgroup>
                                            <col width="16%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                        </colgroup>
                                        <tbody>
                                            <tr>
                                                <td class="bold">오전</td>
                                                <td colspan="6" rowspan="2" class="text-red-700">24시간 응급의학전문의 <br>
                                                    항시 진료 중</td>
                                            </tr>
                                            <tr>
                                                <td class="bold">오후</td>

                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </li>
                    </div>
                </div>
            </div>
            <div class="doctor_item emergency" style="opacity: 0; display: none;">
                <div class="img">
                    <img src="https://unidgyeongsan.mycafe24.com/img/doctor09.png" alt="">
                </div>
                <div class="content">
                    <h2>
                        김영훈
                        <span>
                            <svg width="2" height="28" viewBox="0 0 2 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="2" height="28" fill="#191919"></rect>
                            </svg>
                        </span>
                        <small>응급의학과</small>
                    </h2>
                    <p>응급질환, 소생의학</p>
                    <div class="d_btn">
                        <p class="openModalBtn" data-modal="modal01">약력 정보</p>
                        <p class="openModalBtn" data-modal="modal02">진료 일정</p>
                    </div>
                </div>
                <div id="modal01" class="modal modal01">
                    <div class="modal-content">
                        <span class="close">×</span>
                        <p>약력정보</p>
                        <h2>김영훈 <span>
                                <svg width="2" height="28" viewBox="0 0 2 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="2" height="28" fill="#191919"></rect>
                                </svg>
                            </span> <small>응급의학과</small></h2>
                        <ul>
                            <li>- 영남대학교 의과대학 졸업</li>
                            <li>- 영남대학교병원 응급의학과 전문의 취득</li>
                            <li>- 영남대학교 의학석사 취득</li>
                            <li>- 대한 응급의학회 정회원</li>
                        </ul>
                    </div>
                </div>
                <div id="modal02" class="modal modal02">
                    <div class="modal-content">
                        <span class="close">×</span>
                        <p>진료 일정</p>
                        <h2>김영훈 <span>
                                <svg width="2" height="28" viewBox="0 0 2 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="2" height="28" fill="#191919"></rect>
                                </svg>
                            </span> <small>응급의학과</small></h2>
                        <li class="doctor_info">
                            <div class="info_con">
                                <div>
                                    <div class="legend">
                                        <div class="legend-item">
                                            <span class="darkblue-circle"></span> 진료
                                        </div>
                                        <div class="legend-item">
                                            <span class="lightblue-circle"></span> 클리닉
                                        </div>
                                    </div>
                                    <table>
                                        <colgroup>
                                            <col width="16%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                        </colgroup>
                                        <thead>
                                            <tr>
                                                <th scope="col">시간</th>
                                                <th scope="col">월</th>
                                                <th scope="col">화</th>
                                                <th scope="col">수</th>
                                                <th scope="col">목</th>
                                                <th scope="col">금</th>
                                                <th scope="col">토</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                                <div class="work">
                                    <table>
                                        <colgroup>
                                            <col width="16%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                        </colgroup>
                                        <tbody>
                                            <tr>
                                                <td class="bold">오전</td>
                                                <td colspan="6" rowspan="2" class="text-red-700">24시간 응급의학전문의 <br>
                                                    항시 진료 중</td>
                                            </tr>
                                            <tr>
                                                <td class="bold">오후</td>

                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </li>
                    </div>
                </div>
            </div>
            <div class="doctor_item emergency" style="opacity: 0; display: none;">
                <div class="img">
                    <img src="https://unidgyeongsan.mycafe24.com/img/doctor08.png" alt="">
                </div>
                <div class="content">
                    <h2>
                        박노한
                        <span>
                            <svg width="2" height="28" viewBox="0 0 2 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="2" height="28" fill="#191919"></rect>
                            </svg>
                        </span>
                        <small>응급의학과</small>
                    </h2>
                    <p>응급질환, 소생의학</p>
                    <div class="d_btn">
                        <p class="openModalBtn" data-modal="modal01">약력 정보</p>
                        <p class="openModalBtn" data-modal="modal02">진료 일정</p>
                    </div>
                </div>
                <div id="modal01" class="modal modal01">
                    <div class="modal-content">
                        <span class="close">×</span>
                        <p>약력정보</p>
                        <h2>박노한 <span>
                                <svg width="2" height="28" viewBox="0 0 2 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="2" height="28" fill="#191919"></rect>
                                </svg>
                            </span> <small>응급의학과</small></h2>
                        <ul>
                            <li>- 경북대학교 의과대학 졸업</li>
                            <li>- 경북대학교병원 응급의학과 전문의 취득</li>
                            <li>- 대한응급의학회 정회원</li>
                            <li>- 대한응급의료지도의사협의회 회원</li>
                        </ul>
                    </div>
                </div>
                <div id="modal02" class="modal modal02">
                    <div class="modal-content">
                        <span class="close">×</span>
                        <p>진료 일정</p>
                        <h2>박노한 <span>
                                <svg width="2" height="28" viewBox="0 0 2 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="2" height="28" fill="#191919"></rect>
                                </svg>
                            </span> <small>응급의학과</small></h2>
                        <li class="doctor_info">
                            <div class="info_con">
                                <div>
                                    <div class="legend">
                                        <div class="legend-item">
                                            <span class="darkblue-circle"></span> 진료
                                        </div>
                                        <div class="legend-item">
                                            <span class="lightblue-circle"></span> 클리닉
                                        </div>
                                    </div>
                                    <table>
                                        <colgroup>
                                            <col width="16%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                        </colgroup>
                                        <thead>
                                            <tr>
                                                <th scope="col">시간</th>
                                                <th scope="col">월</th>
                                                <th scope="col">화</th>
                                                <th scope="col">수</th>
                                                <th scope="col">목</th>
                                                <th scope="col">금</th>
                                                <th scope="col">토</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                                <div class="work">
                                    <table>
                                        <colgroup>
                                            <col width="16%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                        </colgroup>
                                        <tbody>
                                            <tr>
                                                <td class="bold">오전</td>
                                                <td colspan="6" rowspan="2" class="text-red-700">24시간 응급의학전문의 <br>
                                                    항시 진료 중</td>
                                            </tr>
                                            <tr>
                                                <td class="bold">오후</td>

                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </li>
                    </div>
                </div>
            </div>
            <div class="doctor_item emergency" style="opacity: 0; display: none;">
                <div class="img">
                    <img src="https://unidgyeongsan.mycafe24.com/img/doctor22.png" alt="">
                </div>
                <div class="content">
                    <h2>
                        장성원
                        <span>
                            <svg width="2" height="28" viewBox="0 0 2 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="2" height="28" fill="#191919"></rect>
                            </svg>
                        </span>
                        <small>응급의학과</small>
                    </h2>
                    <p>응급질환, 소생의학</p>
                    <div class="d_btn">
                        <p class="openModalBtn" data-modal="modal01">약력 정보</p>
                        <p class="openModalBtn" data-modal="modal02">진료 일정</p>
                    </div>
                </div>
                <div id="modal01" class="modal modal01">
                    <div class="modal-content">
                        <span class="close">×</span>
                        <p>약력정보</p>
                        <h2>장성원 <span>
                                <svg width="2" height="28" viewBox="0 0 2 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="2" height="28" fill="#191919"></rect>
                                </svg>
                            </span> <small>응급의학과</small></h2>
                        <ul>
                            <li>- 계명대학교 의과대학 졸업</li>
                            <li>- 계명대학교 동산병원 응급의학과 전문의 취득</li>
                            <li>- 계명대학교 의학 석사 취득</li>
                            <li>- 대한 응급의학회 정회원</li>
                        </ul>
                    </div>
                </div>
                <div id="modal02" class="modal modal02">
                    <div class="modal-content">
                        <span class="close">×</span>
                        <p>진료 일정</p>
                        <h2>장성원 <span>
                                <svg width="2" height="28" viewBox="0 0 2 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="2" height="28" fill="#191919"></rect>
                                </svg>
                            </span> <small>응급의학과</small></h2>
                        <li class="doctor_info">
                            <div class="info_con">
                                <div>
                                    <div class="legend">
                                        <div class="legend-item">
                                            <span class="darkblue-circle"></span> 진료
                                        </div>
                                        <div class="legend-item">
                                            <span class="lightblue-circle"></span> 클리닉
                                        </div>
                                    </div>
                                    <table>
                                        <colgroup>
                                            <col width="16%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                        </colgroup>
                                        <thead>
                                            <tr>
                                                <th scope="col">시간</th>
                                                <th scope="col">월</th>
                                                <th scope="col">화</th>
                                                <th scope="col">수</th>
                                                <th scope="col">목</th>
                                                <th scope="col">금</th>
                                                <th scope="col">토</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                                <div class="work">
                                    <table>
                                        <colgroup>
                                            <col width="16%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                        </colgroup>
                                        <tbody>
                                            <tr>
                                                <td class="bold">오전</td>
                                                <td colspan="6" rowspan="2" class="text-red-700">24시간 응급의학전문의 <br>
                                                    항시 진료 중</td>
                                            </tr>
                                            <tr>
                                                <td class="bold">오후</td>

                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </li>
                    </div>
                </div>
            </div>
            <div class="doctor_item emergency" style="opacity: 0; display: none;">
                <div class="img">
                    <img src="https://unidgyeongsan.mycafe24.com/img/doctor10.png" alt="">
                </div>
                <div class="content">
                    <h2>
                        백창석
                        <span>
                            <svg width="2" height="28" viewBox="0 0 2 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="2" height="28" fill="#191919"></rect>
                            </svg>
                        </span>
                        <small>응급의학과</small>
                    </h2>
                    <p>응급질환, 소생의학</p>
                    <div class="d_btn">
                        <p class="openModalBtn" data-modal="modal01">약력 정보</p>
                        <p class="openModalBtn" data-modal="modal02">진료 일정</p>
                    </div>
                </div>
                <div id="modal01" class="modal modal01">
                    <div class="modal-content">
                        <span class="close">×</span>
                        <p>약력정보</p>
                        <h2>백창석 <span>
                                <svg width="2" height="28" viewBox="0 0 2 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="2" height="28" fill="#191919"></rect>
                                </svg>
                            </span> <small>응급의학과</small></h2>
                        <ul>
                            <li>- 영남대학교 의과대학 졸업</li>
                            <li>- 영남대학교 외과 전문의 취득</li>
                            <li>- 영천영대병원, 청도대남병원 외과 및 응급실 책임 과장 역임</li>
                            <li>- 경북 소방본부 119 구급대 응급처치 지도의사</li>
                        </ul>
                    </div>
                </div>
                <div id="modal02" class="modal modal02">
                    <div class="modal-content">
                        <span class="close">×</span>
                        <p>진료 일정</p>
                        <h2>백창석 <span>
                                <svg width="2" height="28" viewBox="0 0 2 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="2" height="28" fill="#191919"></rect>
                                </svg>
                            </span> <small>응급의학과</small></h2>
                        <li class="doctor_info">
                            <div class="info_con">
                                <div>
                                    <div class="legend">
                                        <div class="legend-item">
                                            <span class="darkblue-circle"></span> 진료
                                        </div>
                                        <div class="legend-item">
                                            <span class="lightblue-circle"></span> 클리닉
                                        </div>
                                    </div>
                                    <table>
                                        <colgroup>
                                            <col width="16%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                        </colgroup>
                                        <thead>
                                            <tr>
                                                <th scope="col">시간</th>
                                                <th scope="col">월</th>
                                                <th scope="col">화</th>
                                                <th scope="col">수</th>
                                                <th scope="col">목</th>
                                                <th scope="col">금</th>
                                                <th scope="col">토</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                                <div class="work">
                                    <table>
                                        <colgroup>
                                            <col width="16%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                        </colgroup>
                                        <tbody>
                                            <tr>
                                                <td class="bold">오전</td>
                                                <td colspan="6" rowspan="2" class="text-red-700">24시간 응급의학전문의 <br>
                                                    항시 진료 중</td>
                                            </tr>
                                            <tr>
                                                <td class="bold">오후</td>

                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </li>
                    </div>
                </div>
            </div>
            <div class="doctor_item dentistry" style="opacity: 0; display: none;">
                <div class="img">
                    <img src="https://unidgyeongsan.mycafe24.com/img/doctor16.png" alt="">
                </div>
                <div class="content">
                    <h2>
                        김영현
                        <span>
                            <svg width="2" height="28" viewBox="0 0 2 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="2" height="28" fill="#191919"></rect>
                            </svg>
                        </span>
                        <small>치과</small>
                    </h2>
                    <p>심미보철, 치주질환, 보존치료</p>
                    <div class="d_btn">
                        <p class="openModalBtn" data-modal="modal01">약력 정보</p>
                        <p class="openModalBtn" data-modal="modal02">진료 일정</p>
                    </div>
                </div>
                <div id="modal01" class="modal modal01">
                    <div class="modal-content">
                        <span class="close">×</span>
                        <p>약력정보</p>
                        <h2>김영현 <span>
                                <svg width="2" height="28" viewBox="0 0 2 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="2" height="28" fill="#191919"></rect>
                                </svg>
                            </span> <small>치과</small></h2>
                        <ul>
                            <li>- 부산대학교 치의학전문대학원 졸업</li>
                            <li>- 대구카톨릭대학교 구강악안면외과 전문의 취득</li>
                            <li>- 통합치의학전문의</li>
                            <li>- 악안면성형재건외과학회 인정의</li>
                        </ul>
                    </div>
                </div>
                <div id="modal02" class="modal modal02">
                    <div class="modal-content">
                        <span class="close">×</span>
                        <p>진료 일정</p>
                        <h2>김영현
                            <span>
                                <svg width="2" height="28" viewBox="0 0 2 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="2" height="28" fill="#191919"></rect>
                                </svg>
                            </span>
                            <small>치과</small>
                        </h2>
                        <li class="doctor_info">
                            <div class="info_con">
                                <div>
                                    <div class="legend">
                                        <div class="legend-item">
                                            <span class="darkblue-circle"></span> 진료
                                        </div>
                                    </div>
                                    <table>
                                        <colgroup>
                                            <col width="16%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                        </colgroup>
                                        <thead>
                                            <tr>
                                                <th scope="col">시간</th>
                                                <th scope="col">월</th>
                                                <th scope="col">화</th>
                                                <th scope="col">수</th>
                                                <th scope="col">목</th>
                                                <th scope="col">금</th>
                                                <th scope="col">토</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                                <div class="work">
                                    <table>
                                        <colgroup>
                                            <col width="16%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                        </colgroup>
                                        <tbody>
                                            <tr>
                                                <td class="bold">오전</td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                            </tr>
                                            <tr>
                                                <td class="bold">오후</td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </li>
                    </div>
                </div>

            </div>
            <div class="doctor_item dentistry" style="opacity: 0; display: none;">
                <div class="img">
                    <img src="https://unidgyeongsan.mycafe24.com/img/doctor04.png" alt="">
                </div>
                <div class="content">
                    <h2>
                        전희주
                        <span>
                            <svg width="2" height="28" viewBox="0 0 2 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="2" height="28" fill="#191919"></rect>
                            </svg>
                        </span>
                        <small>치과</small>
                    </h2>
                    <p>심미보철, 치주질환, 보존치료</p>
                    <div class="d_btn">
                        <p class="openModalBtn" data-modal="modal01">약력 정보</p>
                        <p class="openModalBtn" data-modal="modal02">진료 일정</p>
                    </div>
                </div>
                <div id="modal01" class="modal modal01">
                    <div class="modal-content">
                        <span class="close">×</span>
                        <p>약력정보</p>
                        <h2>전희주 <span>
                                <svg width="2" height="28" viewBox="0 0 2 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="2" height="28" fill="#191919"></rect>
                                </svg>
                            </span> <small>치과</small></h2>
                        <ul>
                            <li>- 경북대학교 치과대학 치의학과 졸업</li>
                            <li>- 영남대학교병원 구강외과 수료</li>
                            <li>- 대한심미치과학회 정회원</li>
                            <li>- NYU Implant continuing program 수료</li>
                        </ul>
                    </div>
                </div>
                <div id="modal02" class="modal modal02">
                    <div class="modal-content">
                        <span class="close">×</span>
                        <p>진료 일정</p>
                        <h2>전희주
                            <span>
                                <svg width="2" height="28" viewBox="0 0 2 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="2" height="28" fill="#191919"></rect>
                                </svg>
                            </span>
                            <small>치과</small>
                        </h2>
                        <li class="doctor_info">
                            <div class="info_con">
                                <div>
                                    <div class="legend">
                                        <div class="legend-item">
                                            <span class="darkblue-circle"></span> 진료
                                        </div>
                                    </div>
                                    <table>
                                        <colgroup>
                                            <col width="16%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                        </colgroup>
                                        <thead>
                                            <tr>
                                                <th scope="col">시간</th>
                                                <th scope="col">월</th>
                                                <th scope="col">화</th>
                                                <th scope="col">수</th>
                                                <th scope="col">목</th>
                                                <th scope="col">금</th>
                                                <th scope="col">토</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                                <div class="work">
                                    <table>
                                        <colgroup>
                                            <col width="16%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                        </colgroup>
                                        <tbody>
                                            <tr>
                                                <td class="bold">오전</td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                            </tr>
                                            <tr>
                                                <td class="bold">오후</td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </li>
                    </div>
                </div>

            </div>
            <div class="doctor_item obgyn" style="opacity: 0; display: none;">
                <div class="img">
                    <img src="https://unidgyeongsan.mycafe24.com/img/doctor15.png" alt="">
                </div>
                <div class="content">
                    <h2>
                        이탁
                        <span>
                            <svg width="2" height="28" viewBox="0 0 2 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="2" height="28" fill="#191919"></rect>
                            </svg>
                        </span>
                        <small>산부인과</small>
                    </h2>
                    <p>산전진찰, 월경이상, 폐경기관리, 불임검사, 부인암검사, 일반 부인과</p>
                    <div class="d_btn">
                        <p class="openModalBtn" data-modal="modal01">약력 정보</p>
                        <p class="openModalBtn" data-modal="modal02">진료 일정</p>
                    </div>
                </div>
                <div id="modal01" class="modal modal01">
                    <div class="modal-content">
                        <span class="close">×</span>
                        <p>약력정보</p>
                        <h2>이탁 <span>
                                <svg width="2" height="28" viewBox="0 0 2 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="2" height="28" fill="#191919"></rect>
                                </svg>
                            </span> <small>산부인과</small></h2>
                        <ul>
                            <li>- 경북대학교 의과대학 졸업 및 의학박사 취득</li>
                            <li>- 계명의대 산부인과 교수 역임</li>
                            <li>- 대구경북병원회 회장, 대한 산부인과학회 부회장 역임</li>
                            <li>- 보건복지부 장관상 3회 수상</li>
                        </ul>
                    </div>
                </div>
                <div id="modal02" class="modal modal02">
                    <div class="modal-content">
                        <span class="close">×</span>
                        <p>진료 일정</p>
                        <h2>이 탁
                            <span>
                                <svg width="2" height="28" viewBox="0 0 2 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="2" height="28" fill="#191919"></rect>
                                </svg>
                            </span>
                            <small>산부인과</small>
                        </h2>
                        <li class="doctor_info">
                            <div class="info_con">
                                <div>
                                    <div class="legend">
                                        <div class="legend-item">
                                            <span class="darkblue-circle"></span> 진료
                                        </div>
                                    </div>
                                    <table>
                                        <colgroup>
                                            <col width="16%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                        </colgroup>
                                        <thead>
                                            <tr>
                                                <th scope="col">시간</th>
                                                <th scope="col">월</th>
                                                <th scope="col">화</th>
                                                <th scope="col">수</th>
                                                <th scope="col">목</th>
                                                <th scope="col">금</th>
                                                <th scope="col">토</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                                <div class="work">
                                    <table>
                                        <colgroup>
                                            <col width="16%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                        </colgroup>
                                        <tbody>
                                            <tr>
                                                <td class="bold">오전</td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td class="bold">오후</td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </li>
                    </div>
                </div>

            </div>
            <div class="doctor_item labmed" style="opacity: 0; display: none;">
                <div class="img">
                    <img src="https://unidgyeongsan.mycafe24.com/img/doctor20.png" alt="">
                </div>
                <div class="content">
                    <h2>
                        박경희
                        <span>
                            <svg width="2" height="28" viewBox="0 0 2 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect width="2" height="28" fill="#191919"></rect>
                            </svg>
                        </span>
                        <small>진단검사의학과</small>
                    </h2>
                    <p>진단혈액학, 수혈의학, 면역혈청, 임상화학, 임상미생물, 유전 및 분자진단 등</p>
                    <div class="d_btn">
                        <p class="openModalBtn" data-modal="modal01">약력 정보</p>
                        <p class="openModalBtn" data-modal="modal02">진료 일정</p>
                    </div>
                </div>
                <div id="modal01" class="modal modal01">
                    <div class="modal-content">
                        <span class="close">×</span>
                        <p>약력정보</p>
                        <h2>박경희 <span>
                                <svg width="2" height="28" viewBox="0 0 2 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="2" height="28" fill="#191919"></rect>
                                </svg>
                            </span> <small>진단검사의학과</small></h2>
                        <ul>
                            <li>- 영남대학교 의과대학 졸업</li>
                            <li>- 서울 순천향대학병원 진단검사의학과 전문의 취득</li>
                            <li>- 서울 순천향대학병원 외래교수</li>
                            <li>- 국민보험공단 건강검진기관 검사실 심사위원</li>
                        </ul>
                    </div>
                </div>
                <div id="modal02" class="modal modal02">
                    <div class="modal-content">
                        <span class="close">×</span>
                        <p>진료 일정</p>
                        <h2>박경희
                            <span>
                                <svg width="2" height="28" viewBox="0 0 2 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect width="2" height="28" fill="#191919"></rect>
                                </svg>
                            </span>
                            <small>진단검사의학과</small>
                        </h2>
                        <li class="doctor_info">
                            <div class="info_con">
                                <div>
                                    <div class="legend">
                                        <div class="legend-item">
                                            <span class="darkblue-circle"></span> 진료
                                        </div>
                                    </div>
                                    <table>
                                        <colgroup>
                                            <col width="16%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                        </colgroup>
                                        <thead>
                                            <tr>
                                                <th scope="col">시간</th>
                                                <th scope="col">월</th>
                                                <th scope="col">화</th>
                                                <th scope="col">수</th>
                                                <th scope="col">목</th>
                                                <th scope="col">금</th>
                                                <th scope="col">토</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                                <div class="work">
                                    <table>
                                        <colgroup>
                                            <col width="16%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                            <col width="10%">
                                        </colgroup>
                                        <tbody>
                                            <tr>
                                                <td class="bold">오전</td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                            </tr>
                                            <tr>
                                                <td class="bold">오후</td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td><span class="darkblue-circle"></span></td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </li>
                    </div>
                </div>

            </div>

        </article>
        <article class="summary subBg">
            <div class="txt_con">
                <p class="txt01">
                    경산중앙병원 내과는 소화기내과, 순환기내과, 호흡기내과, 신장내과, 내분비내과, 류마티스
                    내과와 같이 세분화된 진료와 검사를 통해 건강관리에 최선을 다하고 있습니다.
                </p>
                <p class="txt01">
                    건강검진센터, 내시경센터, 진료과 등과 협진시스템을 구축하고 있어 정확한 진단이 가능하며,
                    적극적인 자세로 치료에 임하고 있습니다.
                </p>

            </div>
            <div class="img_con">
                <img src="<?php echo G5_IMG_URL ?>/img/img_summary01.jpg" alt="내과 이미지">
                <div class="icon_box">
                    <img src="<?php echo G5_IMG_URL ?>/ico/ico_department01.png" alt="내과 아이콘">
                </div>
            </div>
        </article>


    </div>
</section>

<?php
include_once(G5_PATH . '/tail.php');
?>