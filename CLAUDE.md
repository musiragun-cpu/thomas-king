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
│   └── sub04/            # 고객지원
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

## 최근 수정 이력

### 2026-02-07 전체 정리 완료

**이미지 경로 수정 (102개)**
| 폴더 | 파일 수 | 경로 수정 |
|------|---------|-----------|
| 루트 (index.php) | 1개 | 8개 |
| sub01 | 7개 | 65개 |
| sub02 | 4개 | 21개 |
| sub03 | 2개 | 3개 |
| sub04 | 2개 | 5개 |

**불필요한 파일 삭제 (15개, 57,789줄)**
- sub01_02a.php ~ sub01_02n.php (13개): 유니드경산병원 템플릿
- sub01_02b.php: 병원 템플릿
- suv01_02m.php: 파일명 오타

### 이전 작업
- sub02_01 ~ sub02_04 이미지 경로 통일 (절대→상대)
- 총 21개 SVG 로고 생성
