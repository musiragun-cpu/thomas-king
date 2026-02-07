# CLAUDE.md - 케이비즈업 홈페이지 프로젝트

## 프로젝트 개요
케이비즈업 중소기업 컨설팅 홈페이지 (Gnuboard CMS 기반 PHP)

## 기술 스택
- PHP 7.4+ / Gnuboard 5.x CMS
- Tailwind CSS 3.x
- GSAP (ScrollTrigger, ScrollToPlugin)
- Font Awesome 4.x

## 디렉토리 구조
```
├── css/                  # 스타일시트
├── js/                   # JavaScript
├── img/                  # 이미지 및 SVG 로고
├── page/
│   ├── sub01/            # 회사소개
│   ├── sub02/            # 컨설팅 서비스 ★
│   ├── sub03/            # 지원사업 안내
│   ├── sub04/            # 고객지원
│   └── sub05/            # 기타
├── common.php            # 공통 설정
├── head.php / tail.php   # 헤더/푸터
└── index.php             # 메인 페이지
```

## 주요 작업 내역

### 컨설팅 서비스 페이지 (page/sub02/)

| 파일 | 내용 | 탭 수 | SVG 로고 |
|------|------|-------|----------|
| sub02_01.php | 정부조달 및 R&D 컨설팅 | 12개 | 12개 |
| sub02_02.php | 경영 및 기술 컨설팅 | 8개 | 8개 |
| sub02_03.php | 창업 및 소상공인 지원 | 4개 | 4개 |
| sub02_04.php | 인증 컨설팅 | 5개 | 5개 |

### 생성된 SVG 로고 (img/)

**정부조달/R&D (sub02_01)**
- rnd_logo.svg, epc_logo.svg, net_logo.svg, nep_logo.svg
- green_logo.svg, eco_label_logo.svg, innovative_logo.svg
- mas_logo.svg, venturenara_logo.svg
- tech_strategy_logo.svg, tech_transfer_logo.svg, smart_mfg_logo.svg

**경영/기술 (sub02_02)**
- tech_mgmt_logo.svg, strategy_logo.svg, bizplan_logo.svg
- tech_value_logo.svg, diagnosis_logo.svg, innovation_logo.svg
- hr_logo.svg, org_dev_logo.svg

**창업/소상공인 (sub02_03)**
- startup_logo.svg, small_biz_logo.svg
- policy_fund_logo.svg, biz_transform_logo.svg

**인증 (sub02_04)**
- iso_cert_logo.svg, venture_cert_logo.svg
- innobiz_logo.svg, mainbiz_logo.svg, research_lab_logo.svg

## 코딩 컨벤션

### PHP Include 경로
```php
include_once('../../common.php');
include_once(G5_PATH . '/head.php');
include_once(G5_PATH . '/tail.php');
```

### 페이지 래퍼 구조
```html
<section class="ppbSpWrap py-10">
    <div class="container mx-auto px-0">
        <!-- 콘텐츠 -->
    </div>
</section>
```

### 탭 UI 구조
```html
<div class="page_tab my-16">
    <span class="active">탭1</span>
    <span>탭2</span>
</div>
<div class="tab01 tabItems tabActive">...</div>
<div class="tab02 tabItems">...</div>
```

### 이미지 경로 (중요!)
- **절대경로(`/img/`) 사용 금지**
- 루트 파일 (index.php): `./img/파일명`
- 서브 페이지 (page/sub*/): `../../img/파일명`
- CSS 파일 (css/): `../img/파일명`
- 스킨 파일 (skin/board/*/): `../../../img/파일명`

### STEP 박스 UI
```html
<div class="step_box bg-blue-100 border-blue-500">
    <span class="step_num bg-blue-500">STEP 1</span>
    <p class="step_title">제목</p>
    <p class="step_desc">설명</p>
</div>
<div class="step_arrow text-blue-500">→</div>
```

## Git 저장소
- **URL**: https://github.com/musiragun-cpu/thomas-king
- **브랜치**: main

## 자주 사용하는 명령어

### 변경사항 저장
```bash
git add .
git commit -m "변경 내용"
git push
```

### 서버에서 최신 코드 받기
```bash
git pull
```

### 오류 확인 체크리스트
1. PHP include 경로 확인 (`../../common.php`)
2. 이미지 경로 확인 (`../../img/`)
3. HTML 태그 닫힘 확인
4. 탭 구조 확인 (tabItems, tabActive)

## 컨설팅 서비스 표현 규정 (중요!)

### R&D지원사업 / 창업지원사업
- **"작성" 표현 금지** → "작성 지도" 사용
- 사업계획서, 연구개발계획서 등은 기업이 직접 작성해야 함
- 컨설팅은 "지도/코칭/자문" 형태만 가능
- 대리 작성 시 **부정행위로 선정 취소 및 참여 제한**

### 인증 컨설팅 (ISO, 벤처, 이노비즈 등)
- 서류 작성 대행 **가능**
- 온라인 신청 대행 **가능**
- 경쟁 선발이 아닌 요건 충족 심사이므로 허용

### 파일별 적용 현황
| 파일 | 유형 | 표현 |
|------|------|------|
| sub02_01.php | R&D | 연구개발계획서 작성 **지도** |
| sub02_02.php | 창업지원사업 포함 | 사업계획서 작성 **지도** |
| sub02_03.php | 창업지원사업 | 사업계획서 작성 **지도** |
| sub02_04.php | 인증 | 서류 작성/대행 (허용) |

## 최근 수정 이력

### 2026-02-07 규정 준수 수정

**컨설팅 표현 수정 (R&D/창업지원사업)**
| 파일 | 수정 내용 |
|------|-----------|
| sub02_01.php | 연구개발계획서 작성 → 작성 지도 |
| sub02_02.php | 사업계획서 작성 → 작성 지도 (4건) |
| sub02_03.php | 사업계획서 작성 코칭 → 작성 지도 (4건) |

### 2026-02-07 이미지 경로 수정 (총 209개)

**1차 수정 (126개)**
| 폴더 | 파일 수 | 경로 수정 |
|------|---------|-----------|
| 루트 (index.php) | 1개 | 8개 |
| sub01 | 7개 | 65개 |
| sub02 | 4개 | 21개 |
| sub03 | 2개 | 3개 |
| sub04 | 2개 | 5개 |
| css (default.css, common.css) | 2개 | 24개 |

**2차 수정 (82개)**
| 폴더 | 파일 | 경로 수정 |
|------|------|-----------|
| css | sub.css | 3개 |
| sub02 | sub02_02_01.php | 5개 |
| sub02 | sub02_02_02.php | 6개 |
| sub02 | sub02_07.php | 64개 |
| sub05 | sub05_02.php | 1개 |
| skin/board | resume, gallery, custom_gallery, program | 4개 |

**불필요한 파일 삭제 (23개, 58,658줄)**

*1차 삭제 (sub01, 15개, 57,789줄)*
- sub01_02a.php ~ sub01_02n.php (13개): 유니드경산병원 템플릿
- sub01_02b.php: 병원 템플릿
- suv01_02m.php: 파일명 오타

*2차 삭제 (sub00/sub02, 8개, 869줄)*
- page/sub00/ 폴더 전체 (5개, 603줄): 병원 템플릿
  - sub00_01.php, sub00_02.php, sub00_03.php, sub00_04.php, sub00_05.php
- page/sub02/ 백업 파일 (3개, 266줄):
  - sub02_02_backup.php, sub02_03_backup.php, sub02_04_backup.php

### 이전 작업
- sub02_01 ~ sub02_04 이미지 경로 통일 (절대→상대)
- 총 21개 SVG 로고 생성
