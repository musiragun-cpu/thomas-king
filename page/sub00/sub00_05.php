<?php

include_once('../../common.php');
// 페이지 제목 
$g5['title'] = "새로운 페이지";
include_once(G5_PATH . '/head.php');

?>
<section class="reser">
    <div class="inner">
        <article class="">
            <div class="sub_banner">
                <div class="txt_con">
                    <ul>
                        <li>
                            <img src="<?php echo G5_IMG_URL ?>/ico/ico_home.png" alt="">
                        </li>
                        <li>
                            진료안내
                        </li>
                        <li>
                            진료예약 안내
                        </li>
                    </ul>
                    <p class="txt01">환자의 권리와 의무</p>
                    <p class="txt02">신세계요양병원은 환자, 보호자의 요구와 권리에 대한 존중을 기반으로 하여 병원 정책을 운영한다. 환자의 권리와 의무는 병원을 이용하는 환자, 보호자의 권리와 의무를 구체적으로 명시함으로써, 권리를 증진시키고 최상의 의료 서비스를 제공하는데 목적이 있다.</p>
                </div>
            </div>
            <div class="mt-12 mb-1 text-2xl font-semibold">환자의 권리</div>
            <div class="tableBox2">
                <table class="w-full mt-5 text-xl text-left text-gray-500 whitespace-pre-line cTable rtl:text-right">
                    
                    <tbody>
                        <tr class="">
                            <th scope="row" class="px-3 py-4 font-medium text-center border whitespace-nowrap dark:text-white">
                                인격을 존중받을 권리
                            </th>
                            <th scope="row" class="px-3 py-4 font-medium text-left border">환자는 가치관이나 신념, 종교적 요구를 존중받을 권리가 있고, 병원에서 발생할 수 있는 위험으로부터 보호받고 신체의 안전을 취할 권리가 있다.</th> 
                        </tr>
                        <tr class="">
                            <th scope="row" class="px-3 py-4 font-medium text-center border whitespace-nowrap dark:text-white">
                                진료를 받을 권리
                            </th>
                            <th scope="row" class="px-3 py-4 font-medium text-left border">환자는 자신의 건강 보호와 증진을 위하여 적절한 진료를 받을 권리를 갖고, 성별·나이·종교·신분 및 재산에 의거 차별을 이유로 진료 받을 권리를 침해 받지 아니하며, 의료인은 정당한 사유 없이 진료를 거부하지 못한다.</th>
                        </tr>

                        <tr class="">
                            <th scope="row" class="px-3 py-4 font-medium text-center border whitespace-nowrap dark:text-white">
                                진료과정의 설명을 듣고 선택할 권리
                            </th>
                            <th scope="row" class="px-3 py-4 font-medium text-left border">환자는 의료인으로부터 본인의 질병과 치료, 검사, 수술, 입원 등의 의료행위에 관하여 충분한 설명을 듣고 이를 선택하거나 거부할 수 있는 권리가 있으며, 제기된 질문에 대한 답변과 진료가 시작되기 이전 충분한 상담과 대안적 진료에 대한 설명을 듣고 이에 관한 동의여부를 결정할 권리가 있다.</th>
                        </tr>
                        <tr class="">
                            <th scope="row" class="px-3 py-4 font-medium text-center border whitespace-nowrap dark:text-white">개인 사생활 및 진료 정보 보호 받을 권리</th>
                            <th scope="row" class="px-3 py-4 font-medium text-left border">환자는 질병, 치료에 관련된 신체적·정신적 상태와 건강상의 비밀과 상담의 비밀을 침해 받지 아니하며, 법적으로 허용된 경우를 제외하고는 본인의 의무와 동의를 감시하여 진료상 비밀을 보장 받을 권리가 있다.</th>
                        </tr>
                        <tr class="">
                            <th scope="row" class="px-3 py-4 font-medium text-center border whitespace-nowrap dark:text-white">
                                상담·조정을 신청할 권리
                            </th>
                            <th scope="row" class="px-3 py-4 font-medium text-left border">환자는 의료서비스와 관련된 불만사항을 ‘환자 의료조정중재센터’ 등에 상담 및 조정을 신청할 권리가 있다.</th>
                        </tr>

                    </tbody>
                </table>
            </div>
            <div class="mt-12 mb-1 text-2xl font-semibold">환자의 의무
            </div>
            <div class="tableBox2">
                <table class="w-full mt-5 text-xl text-left text-gray-500 whitespace-pre-line cTable rtl:text-right">

                    <tbody>
                        <tr class="">
                            <th scope="row" class="px-3 py-4 font-medium text-center border whitespace-nowrap dark:text-white">
                                의료인에 대한 신뢰 존중의 의무
                            </th>
                            <th scope="row" class="px-3 py-4 font-medium text-left border">환자는 자신의 건강 관련 정보를 의료인에게 정확히 알리고 의료인의 치료계획에 대하여 신뢰하고 존중하여야 한다.</th>
                        </tr>
                        <tr class="">
                            <th scope="row" class="px-3 py-4 font-medium text-center border whitespace-nowrap dark:text-white">
                                치료계획을 준수할 의무
                            </th>
                            <th scope="row" class="px-3 py-4 font-medium text-left border">환자는 진료과정에서 지켜야할 치료계획을 준수하고 치료계획 불이행 결과에 대한 의무가 있다.</th>
                        </tr>

                        <tr class="">
                            <th scope="row" class="px-3 py-4 font-medium text-center border whitespace-nowrap dark:text-white">
                                직원과 타인의 안전을 위한 의무
                            </th>
                            <th scope="row" class="px-3 py-4 font-medium text-left border">환자는 병원 내의 다른 환자를 존중하고 병원에서의 직원과 다른 사람의 정당한 의료와 치료를 방해하지 않을 의무가 있다.
                            </th>
                        </tr>
                        <tr class="">
                            <th scope="row" class="px-3 py-4 font-medium text-center border whitespace-nowrap dark:text-white">
                                병원 규정을 준수할 의무
                            </th>
                            <th scope="row" class="px-3 py-4 font-medium text-left border">환자는 진료와 관련하여 병원과 체결된 재정적 의무를 충실히 이행하여야 하며 병원의 제반규정을 준수할 의무가 있다.
                            </th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </article>

    </div>






</section>
<script>
    $(document).ready(function() {
        $('.sub-menuWrap').addClass('tabDefault');
    });
</script>
<?php
include_once(G5_PATH . '/tail.php');
?>