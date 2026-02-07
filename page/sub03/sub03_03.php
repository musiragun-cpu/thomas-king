<?php

include_once('../../common.php');
// 페이지 제목 
$g5['title'] = "인증현황";
include_once(G5_PATH . '/head.php');

?>

<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
<link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css" />
<style>
    .fancybox__button--close {
        background: #fff;
        border-radius: 50%;
        border: 1px solid #ccc;
        width: 30px;
        height: 30px;
        color: #333;
        font-size: 20px;
        line-height: 28px;
        text-align: center;
        position: absolute;
        right: 15px;
        top: 15px;
        cursor: pointer;
    }
</style>
<section class="ppbSpWrap py-10">
    <div class="container mx-auto px-6">

        <div class="tab01 tabItems tabActive">
            <div class="w-full mt-20">
                <div class="subTitle">
                    <span class="block text-center">Product</span>
                    <h2 class=" text-center">선박부품</h2>
                </div>
            </div>
        </div>

    </div>

    </div>
</section>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        Fancybox.bind("[data-fancybox='gallery']", {
            animated: false,
            showClass: 'fancybox-fade-in',
            hideClass: 'fancybox-fade-out',
            transitionEffect: false,
            closeEffect: false,
            openEffect: false,
            zoom: false, // 확대/축소 효과 비활성화

            // 닫기 버튼 추가
            closeButton: "top", // "top", "inside", "outside" 중 선택 가능
        });
    });



    function dateDayFormat(date) {
        let dateFormat2 = date.getFullYear() +
            '.' + ((date.getMonth() + 1) < 9 ? "0" + (date.getMonth() + 1) : (date.getMonth() + 1)) +
            '.' + ((date.getDate()) < 9 ? "0" + (date.getDate()) : (date.getDate()));
        return dateFormat2;
    }

    // 7월 26일 추가사항 더보기 버튼 작동
    function certificateMoreButtonClicked(button) {
        button.style.display = 'none';
        const elements = document.querySelectorAll('div.col-lg-4.py-3.dt_on');
        elements.forEach(element => {
            element.classList.remove('dt_on');
        });
    }

    function brandMoreButtonClicked(button) {
        button.style.display = 'none';
        const elements = document.querySelectorAll('div.brand.dt_on');
        elements.forEach(element => {
            element.classList.remove('dt_on');
        });
    }

    function benderMoreButtonClicked(button) {
        button.style.display = 'none';
        const elements = document.querySelectorAll('div.bender.dt_on');
        elements.forEach(element => {
            element.classList.remove('dt_on');
        });
    }
</script>
<?php
include_once(G5_PATH . '/tail.php');
?>