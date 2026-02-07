<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="' . $board_skin_url . '/style.css">', 0);
?>
<!-- <section class="department">
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
                        공지사항
                    </li>
                </ul>
                <p class="txt01"></p>
            </div>
        </div>
    </div>
</section> -->

<!-- 탭 및 폼 스타일 -->
<style>
    .tabs {
        margin-bottom: 20px;
    }

    .tab-menu {
        display: flex;
        list-style-type: none;
        padding: 0;
    }

    .tab-menu li {
        margin-right: 10px;
    }

    .tab-menu li a {
        text-decoration: none;
        padding: 10px 20px;
        border: 1px solid #ddd;
        color: #333;
        display: block;
    }

    .tab-menu li.active a {
        background-color: #007bff;
        color: white;
    }

    .frm-item {
        margin-bottom: 20px;
    }

    .frm_input {
        width: 100%;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 4px;
    }

    .radio-buttons {
        display: flex;
        gap: 10px;
    }

    .radio-buttons label {
        margin-left: 5px;
    }

    .privacy-box textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 4px;
        resize: none;
    }

    .checkbox {
        margin-top: 10px;
    }

    .submit-btn {
        background-color: #007bff;
        color: white;
        padding: 10px 20px;
        border: none;
        cursor: pointer;
    }

    .submit-btn:hover {
        background-color: #0056b3;
    }
</style>


<section id="bo_w" style="">
    <div class="inner">
        <!-- <h2 class="sound_only"><?php echo $g5['title'] ?></h2> -->

        <!-- 탭 메뉴 -->
        <div class="tabs">
            <ul class="tab-menu page_tab">
                <li class="active"><a href="#">부정부패 · 비윤리적 이슈 신고 채널</a></li>
                <li><a href="#">고충처리 / 직장내 괴롭힘 / 성희롱 신고 채널</a></li>
                <li><a href="#">안전 보건에 대한 개선 제안 / 건의</a></li>
            </ul>

        </div>

        <form name="fwrite" class="frm-info" id="fwrite" action="<?php echo $action_url ?>" onsubmit="return fwrite_submit(this);" method="post" enctype="multipart/form-data" autocomplete="off" style="width:<?php echo $width; ?>">
        <?php if ($is_category) { ?>
                <div class="bo_w_select frm-item">
                    <label for="ca_name" class="sound_only">분류<strong>필수</strong></label>
                    <select name="ca_name" id="ca_name" required>
                        <option value="">분류를 선택하세요</option>
                        <?php echo $category_option ?>
                    </select>
                </div>
            <?php } ?>
            <!-- Hidden Inputs -->
            <input type="hidden" name="uid" value="<?php echo get_uniqid(); ?>">
            <input type="hidden" name="w" value="<?php echo $w ?>">
            <input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
            <input type="hidden" name="wr_id" value="<?php echo $wr_id ?>">
            <input type="hidden" name="sca" value="<?php echo $sca ?>">

            <!-- 개인정보 수집 선택 -->
            <div class="bo_w_tit frm-item">
                <label for="personal_info_type" class="">개인정보 수집 선택</label>
                <button id="personal_info_surname" class="info-button">성명</button>
                <button id="personal_info_givenname" class="info-button">익명</button>
            </div>
            <div>
                <button id="submit_button" class="submit-button" disabled>제출</button>
            </div>
            <script>
                const surnameButton = document.getElementById("personal_info_surname");
                const givennameButton = document.getElementById("personal_info_givenname");
                const submitButton = document.getElementById("submit_button");

                let surnameSelected = false;
                let givennameSelected = false;

                // 성 버튼 활성화/비활성화 토글
                surnameButton.addEventListener("click", function() {
                    surnameSelected = !surnameSelected;
                    surnameButton.classList.toggle("active");
                    checkFormCompletion();
                });

                // 이름 버튼 활성화/비활성화 토글
                givennameButton.addEventListener("click", function() {
                    givennameSelected = !givennameSelected;
                    givennameButton.classList.toggle("active");
                    checkFormCompletion();
                });

                // 모든 버튼이 활성화되었을 때만 제출 버튼 활성화
                function checkFormCompletion() {
                    if (surnameSelected && givennameSelected) {
                        submitButton.disabled = false;
                    } else {
                        submitButton.disabled = true;
                    }
                }
            </script>
            <!-- 이름 입력 -->
            <div class="bo_w_tit frm-item">
                <label for="wr_name" class="">이름</label>
                <input class="frm_input full_input required" type="text" name="wr_name" value="<?php echo $name ?>" id="wr_name" required placeholder="이름을 입력해주세요">
            </div>

            <!-- 이메일 입력 -->
            <div class="bo_w_tit frm-item">
                <label for="wr_email" class="">이메일</label>
                <input class="frm_input full_input required" type="email" name="wr_email" value="<?php echo $email ?>" id="wr_email" placeholder="이메일을 입력해주세요">
            </div>

            <!-- 휴대폰 번호 입력 -->
            <div class="bo_w_tit frm-item">
                <label for="wr_phone" class="">휴대폰 번호</label>
                <input class="frm_input full_input required" type="text" name="wr_phone" value="<?php echo $wr_phone ?>" id="wr_phone" placeholder="휴대폰 번호를 입력해주세요">
            </div>

            <!-- 제목 입력 -->
            <div class="bo_w_tit frm-item">
                <label for="wr_subject" class="">제목</label>
                <input class="frm_input full_input required" type="text" name="wr_subject" id="wr_subject" placeholder="제목을 입력해주세요">
            </div>

            <!-- 문의 내용 입력 -->
            <div class="bo_w_tit frm-item">
                <label for="wr_content" class="">문의내용</label>
                <textarea name="wr_content" id="wr_content" required class="frm_input full_input" rows="5" placeholder="문의 내용을 입력해주세요"></textarea>
            </div>

            <!-- 파일 첨부 -->
            <div class="bo_w_tit frm-item">
                <label for="file_upload">파일 첨부</label>
                <?php for ($i = 0; $i < 1; $i++) { ?>
                    <input type="file" name="file_upload_<?php echo $i; ?>" id="file_upload_<?php echo $i; ?>" class="frm_input full_input">
                <?php } ?>
            </div>

            <!-- 제보 방식 선택 -->
            <div class="form-group">
                <label>제보방식</label>
                <div class="radio-buttons">
                    <input type="radio" id="email_option" name="report_method" value="email" checked>
                    <label for="email_option">이메일</label>

                    <input type="radio" id="phone_option" name="report_method" value="phone">
                    <label for="phone_option">전화</label>
                </div>
            </div>

            <!-- 개인정보 수집·이용 동의 -->
            <div class="privacy-box">
                <p>개인정보 수집·이용에 대한 안내</p>
                <textarea readonly>개인정보 수집 및 이용 목적에 대해 안내하는 내용...</textarea>
                <div class="checkbox">
                    <input type="checkbox" id="privacy_agreement" name="privacy_agreement" required>
                    <label for="privacy_agreement">위 내용에 동의합니다.</label>
                </div>
            </div>

            <!-- 제출 버튼 -->
            <div class="btn-wrapper">
                <button type="submit" class="submit-btn">제보하기</button>
            </div>

        </form>

        <script>
            // 탭 메뉴 클릭 시 활성화 처리
            document.addEventListener('DOMContentLoaded', function() {
                var tabs = document.querySelectorAll('.tab-menu li');

                tabs.forEach(function(tab) {
                    tab.addEventListener('click', function(event) {
                        event.preventDefault();
                        tabs.forEach(function(t) {
                            t.classList.remove('active');
                        });
                        tab.classList.add('active');
                    });
                });
            });

            // 제출 시 처리 로직
            function fwrite_submit(f) {
                // 기타 필요한 처리 로직 추가
                return true;
            }
        </script>


    </div>
</section>


<!-- } 게시물 작성/수정 끝 -->