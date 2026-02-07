<?php

include_once('../../common.php');
// 페이지 제목 
$g5['title'] = "오시는 길";
include_once(G5_PATH . '/head.php');

?>

<section class="ppbSpWrap ppbBg">
    <div class="container">
        <div class="container h-full w-full">
            <div class="subTitle mt-20">
                
                <h2 class="font-extrabold">오시는 길</h2>
                <span class="block mt-4">(주)케이비즈업 홈페이지에 방문해 주셔서 감사합니다.</span>
            </div>
            <div id="map" style="width:100%;height:24rem;">

                <div class="p-8 py-10 bg-white rounded-2xl shadow-md border border-gray-200 max-w-md z-10 lg:absolute relative top-10 mapModal left-4">
                    <!-- Location -->
                    <h2 class="text-lg font-semibold text-primary mb-1">Location</h2>
                    <!-- 회사 이름 -->
                    <h1 class="text-3xl font-bold text-gray-900 mb-6">(주)케이비즈업</h1>

                    <!-- 주소 -->
                    <div class="mb-4">
                        <h3 class="text-lg font-semibold text-black">주소</h3>
                        <p class="text-gray-700">부산광역시 부산진구 서면문화로 27
                            유원골든타워 1905호</p>
                    </div>

                    <!-- 연락처 -->
                    <div>
                        <h3 class="text-lg font-semibold text-black">연락처</h3>
                        <p class="text-gray-700">TEL. 051-714-2770</p>
                        <p class="text-gray-700">FAX. 070-8230-2779</p>
                    </div>
                </div>

            </div>
        </div>
        <script type="text/javascript" src="https://openapi.map.naver.com/openapi/v3/maps.js?ncpClientId=9tb5io11c2"></script>

    </div>

    <script>
        // 지도 초기화
        var mapOptions = {
            center: new naver.maps.LatLng(35.0950893, 128.84), // 대중특수강 위치로 중심 설정
            zoom: 15
        };
        var map = new naver.maps.Map('map', mapOptions);

        // 마커 추가
        var marker = new naver.maps.Marker({
            position: new naver.maps.LatLng(35.0950893, 128.8418997),
            map: map,
            title: '대중특수강(주)'
        });

        // 정보 창 생성
        var infoWindow = new naver.maps.InfoWindow({
            content: '<div style="padding:10px;">대중특수강(주)<br class="dt_on">부산광역시 강서구 녹산산단261로73번길 37</div>'
        });

        // 마커 클릭 이벤트
        naver.maps.Event.addListener(marker, 'click', function() {
            infoWindow.open(map, marker);
        });
    </script>

</section>

<?php
include_once(G5_PATH . '/tail.php');
?>