<?php
include_once('../../common.php');
// 페이지 제목
$g5['title'] = "문의하기";
include_once(G5_PATH . '/head.php');
?>

<style>
    .inquiry-form input[type="text"],
    .inquiry-form input[type="tel"],
    .inquiry-form input[type="email"],
    .inquiry-form select,
    .inquiry-form textarea {
        width: 100%;
        padding: 12px;
        border: 1px solid #ddd;
        border-radius: 6px;
        margin-top: 6px;
        font-size: 16px;
    }

    .inquiry-form input:focus,
    .inquiry-form select:focus,
    .inquiry-form textarea:focus {
        border-color: #0B3FC4;
        outline: none;
    }

    .inquiry-form label {
        font-weight: 600;
        font-size: 16px;
        color: #333;
    }

    .agree-box {
        border: 1px solid #eee;
        padding: 15px;
        height: 150px;
        overflow-y: scroll;
        background: #f9f9f9;
        font-size: 14px;
        color: #666;
        margin-bottom: 10px;
    }
</style>

<section class="ppbSpWrap py-10 md:py-20 section00">
    <div class="container mx-auto px-6">
        <div class="subTitle mb-12 text-center">
            <h2 class="font-extrabold text-3xl md:text-4xl mb-4">컨설팅 <b class="text-primary">문의하기</b></h2>
            <p class="text-gray-600 text-lg">최고의 전문가들이 귀사의 성공적인 비즈니스를 지원합니다.<br>궁금하신 사항을 남겨주시면 신속하게 답변 드리겠습니다.</p>
        </div>

        <div class="max-w-4xl mx-auto bg-white p-8 md:p-12 shadow-lg rounded-xl inquiry-form">
            <form name="finquiry" method="post" action="./inquiry_update.php" onsubmit="return finquiry_submit(this);"
                autocomplete="off">
                <input type="hidden" name="token" value="">

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <label for="company_name">회사명 (단체명) <span class="text-red-500">*</span></label>
                        <input type="text" name="company_name" id="company_name" required placeholder="회사명을 입력해주세요">
                    </div>
                    <div>
                        <label for="pic_name">담당자명 <span class="text-red-500">*</span></label>
                        <input type="text" name="pic_name" id="pic_name" required placeholder="담당자 성함을 입력해주세요">
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                    <div>
                        <label for="contact">연락처 <span class="text-red-500">*</span></label>
                        <input type="tel" name="contact" id="contact" required placeholder="010-0000-0000">
                    </div>
                    <div>
                        <label for="email">이메일 <span class="text-red-500">*</span></label>
                        <input type="email" name="email" id="email" required placeholder="example@email.com">
                    </div>
                </div>

                <div class="mb-6">
                    <label for="inquiry_type">문의 유형 <span class="text-red-500">*</span></label>
                    <select name="inquiry_type" id="inquiry_type" required>
                        <option value="">선택해주세요</option>
                        <option value="정부조달 및 R&D">정부조달 및 R&D</option>
                        <option value="기술·경영 컨설팅">기술·경영 컨설팅</option>
                        <option value="창업 및 소상공인 지원">창업 및 소상공인 지원</option>
                        <option value="인증 취득">인증 취득</option>
                        <option value="ESG 경영">ESG 경영</option>
                        <option value="기타">기타</option>
                    </select>
                </div>

                <div class="mb-6">
                    <label for="subject">제목 <span class="text-red-500">*</span></label>
                    <input type="text" name="subject" id="subject" required placeholder="문의 제목을 입력해주세요">
                </div>

                <div class="mb-8">
                    <label for="content">문의 내용 <span class="text-red-500">*</span></label>
                    <textarea name="content" id="content" rows="6" required
                        placeholder="구체적인 문의 내용을 입력해주시면 더 정확한 상담이 가능합니다."></textarea>
                </div>

                <div class="border-t border-gray-200 pt-6 mb-8">
                    <h3 class="font-bold text-lg mb-3">개인정보 수집 및 이용 동의 <span class="text-red-500">*</span></h3>
                    <div class="agree-box rounded scroll-inner">
                        <strong>[개인정보 수집 및 이용 안내]</strong><br>
                        1. 수집하는 개인정보 항목: 회사명, 담당자명, 연락처, 이메일<br>
                        2. 개인정보의 수집 및 이용 목적: 문의에 대한 상담 및 답변, 컨설팅 관련 정보 제공<br>
                        3. 개인정보의 보유 및 이용 기간: 문의 접수일로부터 1년 또는 정보주체의 삭제 요청 시까지<br>
                        <br>
                        ※ 귀하는 개인정보 수집 및 이용에 대한 동의를 거부할 권리가 있습니다. 단, 동의를 거부할 경우 상담 및 문의 접수가 제한될 수 있습니다.
                    </div>
                    <div class="flex items-center mt-2">
                        <input type="checkbox" id="agree_privacy" name="agree_privacy" value="1" required
                            style="width:auto; margin-top:0; margin-right:8px;">
                        <label for="agree_privacy" class="text-sm cursor-pointer select-none">개인정보 수집 및 이용에
                            동의합니다.</label>
                    </div>
                </div>

                <div class="text-center">
                    <button type="submit"
                        class="bg-primary hover:bg-blue-800 text-white font-bold py-4 px-12 rounded-lg text-lg transition duration-300">
                        문의하기
                    </button>
                </div>

            </form>
        </div>
    </div>
</section>

<script>
    function finquiry_submit(f) {
        if (!f.agree_privacy.checked) {
            alert("개인정보 수집 및 이용에 동의해주셔야 합니다.");
            f.agree_privacy.focus();
            return false;
        }

        // 실제 전송 로직 (현재는 메일 발송 기능이 없으므로 알림만 표시)
        alert("문의가 정상적으로 접수되었습니다.\n담당자 확인 후 빠르게 연락드리겠습니다.");
        // f.submit(); // 백엔드 처리 파일이 없으므로 submit 막음
        // window.location.reload(); // 새로고침
        return false; // 폼 전송 막음 (데모용)
    }
</script>

<?php
include_once(G5_PATH . '/tail.php');
?>