# CLAUDE.md - 케이비즈업 홈페이지 프로젝트

## 프로젝트 개요
케이비즈업 중소기업 컨설팅 홈페이지 (Gnuboard CMS 기반 PHP)

## 기술 스택
- PHP 7.4+ / Gnuboard 5.x CMS
- Tailwind CSS 3.x
- GSAP (ScrollTrigger, ScrollToPlugin)
- Font Awesome 4.x

## 주요 작업 내역

### 컨설팅 서비스 페이지 (page/sub02/)
| 파일 | 내용 | 탭 수 |
|------|------|-------|
| sub02_01.php | 정부조달 및 R&D 컨설팅 | 12개 |
| sub02_02.php | 경영 및 기술 컨설팅 | 8개 |
| sub02_03.php | 창업 및 소상공인 지원 | 4개 |
| sub02_04.php | 인증 컨설팅 | 5개 |

### 생성된 SVG 로고 (img/)
- 정부조달/R&D: rnd_logo.svg, epc_logo.svg, net_logo.svg 등
- 경영/기술: strategy_logo.svg, diagnosis_logo.svg 등
- 창업/소상공인: startup_logo.svg, small_biz_logo.svg 등
- 인증: iso_cert_logo.svg, venture_cert_logo.svg, innobiz_logo.svg, mainbiz_logo.svg, research_lab_logo.svg

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

### 이미지 경로
- 상대경로 사용: `../../img/파일명.svg`

## Git 저장소
- URL: https://github.com/musiragun-cpu/thomas-king
- 브랜치: main

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
