<div class="f_svg my-10 hidden md:block">
    <svg viewBox="0 0 1200 280" fill="none" xmlns="http://www.w3.org/2000/svg">
        <!-- Defs for Shadows/Gradients -->
        <defs>
            <filter id="shadow" x="-10" y="-10" width="300" height="300" filterUnits="userSpaceOnUse">
                <feDropShadow dx="0" dy="4" stdDeviation="6" flood-color="#000" flood-opacity="0.08" />
            </filter>
            <linearGradient id="grad_startup" x1="0" y1="0" x2="1" y2="1">
                <stop offset="0%" stop-color="#FF6B00" />
                <stop offset="100%" stop-color="#FF8E2B" />
            </linearGradient>
            <linearGradient id="grad_sb" x1="0" y1="0" x2="1" y2="1">
                <stop offset="0%" stop-color="#009D5E" />
                <stop offset="100%" stop-color="#00C075" />
            </linearGradient>
            <linearGradient id="grad_fund" x1="0" y1="0" x2="1" y2="1">
                <stop offset="0%" stop-color="#0C3A8D" />
                <stop offset="100%" stop-color="#1458D0" />
            </linearGradient>
            <linearGradient id="grad_trans" x1="0" y1="0" x2="1" y2="1">
                <stop offset="0%" stop-color="#7C3AED" />
                <stop offset="100%" stop-color="#9F67FF" />
            </linearGradient>
        </defs>

        <!-- Group 1: 창업지원사업 (Startup Support) -->
        <g transform="translate(10, 10)" style="cursor: pointer;" onclick="$('.page_tab span:eq(0)').click();">
            <rect x="0" y="0" width="280" height="240" rx="12" fill="white" filter="url(#shadow)" />
            <rect x="0" y="0" width="280" height="6" rx="3" fill="url(#grad_startup)" />
            <!-- Icon Background -->
            <circle cx="140" cy="80" r="40" fill="#FFF5EB" />
            <!-- Icon: Rocket -->
            <path
                d="M140 55 C140 55, 125 75, 125 90 C125 98, 131 105, 140 105 C149 105, 155 98, 155 90 C155 75, 140 55, 140 55 Z M125 90 Q115 100 120 110 M155 90 Q165 100 160 110 M140 105 V115"
                stroke="#FF6B00" stroke-width="3" fill="none" stroke-linecap="round" stroke-linejoin="round" />
            <text x="140" y="150" font-family="SUIT, sans-serif" font-size="22" font-weight="700" fill="#222"
                text-anchor="middle">창업지원사업</text>
            <text x="140" y="180" font-family="SUIT, sans-serif" font-size="15" fill="#666" text-anchor="middle">예비/초기창업
                패키지</text>
            <text x="140" y="200" font-family="SUIT, sans-serif" font-size="15" fill="#666"
                text-anchor="middle">청년창업사관학교</text>
        </g>

        <!-- Group 2: 소상공인 경영개선 (Small Business) -->
        <g transform="translate(310, 10)" style="cursor: pointer;" onclick="$('.page_tab span:eq(1)').click();">
            <rect x="0" y="0" width="280" height="240" rx="12" fill="white" filter="url(#shadow)" />
            <rect x="0" y="0" width="280" height="6" rx="3" fill="url(#grad_sb)" />
            <!-- Icon Background -->
            <circle cx="140" cy="80" r="40" fill="#E8F8F0" />
            <!-- Icon: Graph/Chart -->
            <path d="M115 100 L115 100 M120 95 L130 85 L140 95 L160 75" stroke="#009D5E" stroke-width="3"
                stroke-linecap="round" stroke-linejoin="round" />
            <path d="M160 75 L160 85 M160 75 L150 75" stroke="#009D5E" stroke-width="3" stroke-linecap="round"
                stroke-linejoin="round" />
            <rect x="115" y="60" width="50" height="50" rx="2" stroke="#009D5E" stroke-width="2" fill="none"
                opacity="0.3" />
            <text x="140" y="150" font-family="SUIT, sans-serif" font-size="22" font-weight="700" fill="#222"
                text-anchor="middle">소상공인 경영개선</text>
            <text x="140" y="180" font-family="SUIT, sans-serif" font-size="15" fill="#666"
                text-anchor="middle">희망리턴패키지</text>
            <text x="140" y="200" font-family="SUIT, sans-serif" font-size="15" fill="#666"
                text-anchor="middle">스마트상점/공방</text>
        </g>

        <!-- Group 3: 정책자금 연계 (Policy Fund) -->
        <g transform="translate(610, 10)" style="cursor: pointer;" onclick="$('.page_tab span:eq(2)').click();">
            <rect x="0" y="0" width="280" height="240" rx="12" fill="white" filter="url(#shadow)" />
            <rect x="0" y="0" width="280" height="6" rx="3" fill="url(#grad_fund)" />
            <!-- Icon Background -->
            <circle cx="140" cy="80" r="40" fill="#E8F0FA" />
            <!-- Icon: Coins/Money -->
            <circle cx="130" cy="80" r="14" stroke="#0C3A8D" stroke-width="2.5" fill="none" />
            <circle cx="150" cy="80" r="14" stroke="#0C3A8D" stroke-width="2.5" fill="none" />
            <path d="M130 80 H130.01" stroke="#0C3A8D" stroke-width="4" stroke-linecap="round" />
            <path d="M150 80 H150.01" stroke="#0C3A8D" stroke-width="4" stroke-linecap="round" />
            <text x="140" y="150" font-family="SUIT, sans-serif" font-size="22" font-weight="700" fill="#222"
                text-anchor="middle">정책자금 연계</text>
            <text x="140" y="180" font-family="SUIT, sans-serif" font-size="15" fill="#666" text-anchor="middle">정책자금
                융자/보증</text>
            <text x="140" y="200" font-family="SUIT, sans-serif" font-size="15" fill="#666" text-anchor="middle">투자 유치
                지원</text>
        </g>

        <!-- Group 4: 사업전환 컨설팅 (Transformation) -->
        <g transform="translate(910, 10)" style="cursor: pointer;" onclick="$('.page_tab span:eq(3)').click();">
            <rect x="0" y="0" width="280" height="240" rx="12" fill="white" filter="url(#shadow)" />
            <rect x="0" y="0" width="280" height="6" rx="3" fill="url(#grad_trans)" />
            <!-- Icon Background -->
            <circle cx="140" cy="80" r="40" fill="#F3EEFC" />
            <!-- Icon: Refresh/Cycle -->
            <path d="M140 60 V68 M140 60 L146 64 M140 60 L134 64" stroke="#7C3AED" stroke-width="2.5"
                stroke-linecap="round" stroke-linejoin="round" />
            <path d="M152 70 A 18 18 0 1 1 128 70" stroke="#7C3AED" stroke-width="2.5" fill="none"
                stroke-linecap="round" />
            <rect x="125" y="90" width="30" height="20" rx="2" stroke="#7C3AED" stroke-width="2.5" fill="none" />
            <text x="140" y="150" font-family="SUIT, sans-serif" font-size="22" font-weight="700" fill="#222"
                text-anchor="middle">사업전환 컨설팅</text>
            <text x="140" y="180" font-family="SUIT, sans-serif" font-size="15" fill="#666" text-anchor="middle">신사업
                창업사관학교</text>
            <text x="140" y="200" font-family="SUIT, sans-serif" font-size="15" fill="#666" text-anchor="middle">재도전 성공
                패키지</text>
        </g>
    </svg>
</div>
<!-- Mobile Fallback / List -->
<div class="md:hidden my-8 px-4">
    <div class="grid grid-cols-2 gap-4">
        <div class="bg-white p-4 rounded-lg shadow-md border-t-4 border-orange-500"
            onclick="$('.page_tab span:eq(0)').click();">
            <p class="font-bold text-center text-lg">창업지원</p>
            <p class="text-xs text-gray-500 text-center mt-1">예비/초기창업</p>
        </div>
        <div class="bg-white p-4 rounded-lg shadow-md border-t-4 border-green-600"
            onclick="$('.page_tab span:eq(1)').click();">
            <p class="font-bold text-center text-lg">경영개선</p>
            <p class="text-xs text-gray-500 text-center mt-1">희망리턴</p>
        </div>
        <div class="bg-white p-4 rounded-lg shadow-md border-t-4 border-blue-800"
            onclick="$('.page_tab span:eq(2)').click();">
            <p class="font-bold text-center text-lg">정책자금</p>
            <p class="text-xs text-gray-500 text-center mt-1">융자/보증/투자</p>
        </div>
        <div class="bg-white p-4 rounded-lg shadow-md border-t-4 border-purple-600"
            onclick="$('.page_tab span:eq(3)').click();">
            <p class="font-bold text-center text-lg">사업전환</p>
            <p class="text-xs text-gray-500 text-center mt-1">재도전/신사업</p>
        </div>
    </div>
</div>