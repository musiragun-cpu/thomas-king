<?php

include_once('../../common.php');
// 페이지 제목 
$g5['title'] = "새로운 페이지";
include_once(G5_PATH . '/head.php');

?>
<div class="inner">
    <div class="sub_banner">
        <div class="txt_con">
            <ul>
                <li>
                    <img src="<?php echo G5_IMG_URL ?>/ico/ico_home.png" alt="">
                </li>
                <li>
                    고객센터
                </li>
                <li>
                    고객의 소리
                </li>
            </ul>
            <p class="txt01">온라인 병원보</p>
        </div>
    </div>
    <section class="customer">
        <div class="reser_con">
            <!-- <div class="page_tab">
                <span class="active">접수 안내</span>
                <span class="">접수 하기</span>
            </div> -->
            <img class="tab01 tabItems tabActive" src="/img/sub05_02.png" alt="">
        </div>
        <!-- <div class="inner">
        <div class="sub_banner">
            <div class="txt_con">
                <ul>
                    <li>
                        <img src="<?php echo G5_IMG_URL ?>/ico/ico_home.png" alt="">
                    </li>
                    <li>
                        고객센터
                    </li>
                    <li>
                        고객의 소리
                    </li>
                </ul>
                <p class="txt01">고객의 소리</p>
            </div>
        </div>

        <div class="bg_gray">
            <div class="txt_list">
                <p class="bar pt_tit">접수방법</p>
                <p class="txt01">병원을 이용하면서 겪은 칭찬할 점이나, 불편하신 점, 개선할 점이 있는 경우 작성해주세요.</p>
                <ul class="ico_box">
                    <li>
                        <img src="<?php echo G5_IMG_URL ?>/ico/ico_internet.png" alt="인터넷">
                        <p class="txt03">인터넷</p>
                        <p class="txt04">홈페이지에서 접수</p>
                    </li>
                    <li>
                        <img src="<?php echo G5_IMG_URL ?>/ico/ico_tel.png" alt="전화">
                        <p class="txt03">전화</p>
                        <p class="txt04">
                            대표번호
                            <span class="nl">053) 715. 0100</span>
                        </p>
                    </li>
                    <li>
                        <img src="<?php echo G5_IMG_URL ?>/ico/ico_buliding.png" alt="방문">
                        <p class="txt03">방문</p>
                        <p class="txt04">
                            1층 고객센터
                            <span class="nl">053) 715. 0100</span>
                        </p>
                    </li>
                </ul>
            </div>

            <div class="txt_list">
                <p class="bar pt_tit">온라인 처리 절차</p>
                <p class="txt01">건의 접수 후 일주일 이내 답변 드릴 예정이며, 사안에 따라 1주일 이상 소요되는 경우 사전 통지 드리겠습니다.</p>
                <img class="mt60" src="<?php echo G5_IMG_URL ?>/img/img_customer01.png" alt="온라인 처리 절차">
            </div>

            <div class="txt_list">
                <p class="bar pt_tit">작성 시 유의사항</p>
                <p class="txt01">정확한 연락처(전화번호, 이메일 주소 등)을 기재해 주셔야 답변을 드릴 수 있습니다.</p>
                <p class="txt01">불만 및 건의사항 게시판 성격에 맞지 않거나, 정확하게 작성되지 않은 모호한 질문, 욕설이 섞인 글, 광고 등은 답변을 드리지 않으며,
                    작성자의 동의 없이 임의 삭제될 수 있습니다.</p>
            </div>
        </div> -->

        <!-- <div class="bg_gray">

            <div class="txt_list">
                <div class="agree_con">
                    <div class="txt_box01">
                        <p class="txt01">※ 개인정보 취급 방침</p>
                    </div>
                    <div class="txt_box01">
                        <p class="txt01">수집하는 개인정보의 항목</p>
                        <p class="txt01">회사는 회원가입, 상담, 서비스 신청 등등을 위해 아래와 같은 개인정보를 수집하고 있습니다.</p>
                    </div>
                    <div class="txt_box01">
                        <p class="txt01">ο 수집항목 : 이름, 연락처, 휴대폰번호, 이메일, 상담유형, 제목, 내용, 이메일수신여부</p>
                        <p class="txt01">ο 개인정보 수집방법 : 홈페이지(회원가입)</p>
                    </div>
                    <div class="txt_box01">
                        <p class="txt01">개인정보의 수집 및 이용목적</p>
                        <p class="txt01">회사는 수집한 개인정보를 다음의 목적을 위해 활용합니다.</p>
                    </div>
                    <div class="txt_box01">
                        <p class="txt01">ο 서비스 제공에 관한 계약 이행 및 서비스 제공에 따른 요금정산</p>
                        <p class="txt01">구매 및 요금 결제, 물품배송 또는 청구지 등 발송</p>
                        <p class="txt01">ο 회원 관리</p>
                        <p class="txt01">회원제 서비스 이용에 따른 본인확인, 개인 식별, 불량회원의 부정 이용 방지와 비인가 사용 방지, 가입 의사 확인, 연령확인</p>
                    </div>
                    <div class="txt_box01">
                        <p class="txt01">개인정보의 보유 및 이용기간</p>
                        <p class="txt01">회사는 개인정보 수집 및 이용목적이 달성된 후에는 예외 없이 해당 정보를 지체 없이 파기합니다.</p>
                    </div>
                </div>
                <div class="agree_box">
                    <input type="checkbox" id="agreeBtn" name="agreeBtn">
                    <label class="txt01 bold" for="agreeBtn" style="color:#FF0000">개인정보취급방침 동의</label>
                </div>

                <div class="form_con">
                    <form action="" method="" name="">
                        <div class="flex">
                            <div class="type">
                                <p>성함</p>
                            </div>
                            <div class="info_box">
                                <input type="text" placeholder="성함">
                            </div>
                        </div>
                        <div class="flex">
                            <div class="type">
                                <p>연락처</p>
                            </div>
                            <div class="info_box">
                                <input type="text" placeholder="연락처">
                            </div>
                        </div>
                        <div class="flex">
                            <div class="type">
                                <p>이메일</p>
                            </div>
                            <div class="info_box">
                                <input type="text" placeholder="이메일">
                            </div>
                        </div>
                        <div class="flex">
                            <div class="type">
                                <p>제목</p>
                            </div>
                            <div class="info_box">
                                <input type="text" placeholder="제목">
                            </div>
                        </div>
                        <div class="flex">
                            <div class="type">
                                <p>내용</p>
                            </div>
                            <div class="info_box">
                                <textarea name="" id="" cols="30" rows="10" placeholder="내용"></textarea>
                            </div>
                        </div>

                    </form>
                    <div class="email_check">
                        <div class="flex">
                            <div class="email_type">
                                <p>이메일 수신 여부</p>
                            </div>
                            <div class="check_con">
                                <div class="check_box">
                                    <input type="radio" id="r1" name="rr" />
                                    <label for="r1">
                                        <span></span>
                                        수신함
                                    </label>
                                </div>
                                <div class="check_box">
                                    <input type="radio" id="r2" name="rr" />
                                    <label for="r2">
                                        <span></span>
                                        수신안함
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sendBtn">
                        <a href="javascript:void(0)">
                            <span class="ct">확인</span>
                        </a>
                    </div>
                </div>
            </div>
        </div> -->
</div>



</section>

<?php
include_once(G5_PATH . '/tail.php');
?>