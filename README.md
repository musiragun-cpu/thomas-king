# 케이비즈업 (K-BizUp) 홈페이지

중소기업 컨설팅 전문 기업 케이비즈업의 공식 홈페이지입니다.

## 프로젝트 개요

- **프레임워크**: Gnuboard CMS 기반 PHP
- **스타일**: Tailwind CSS + Custom CSS
- **애니메이션**: GSAP (ScrollTrigger, ScrollToPlugin)
- **반응형**: 모바일/태블릿/데스크톱 지원

## 디렉토리 구조

```
├── css/                  # 스타일시트
│   ├── common.css
│   ├── main.css
│   ├── sub.css
│   ├── tailwind.css
│   └── mobile.css
├── js/                   # JavaScript
│   ├── common.js
│   └── font-awesome/
├── img/                  # 이미지 리소스
│   ├── logo.png
│   ├── *_logo.svg        # 서비스 아이콘
│   └── bg/               # 배경 이미지
├── page/                 # 서브페이지
│   ├── sub01/            # 회사소개
│   ├── sub02/            # 컨설팅 서비스
│   ├── sub03/            # 지원사업 안내
│   └── sub04/            # 고객지원
├── common.php            # 공통 설정
├── head.php              # 헤더 템플릿
├── tail.php              # 푸터 템플릿
└── index.php             # 메인 페이지
```

## 주요 페이지

### 컨설팅 서비스 (sub02)

| 페이지 | 설명 | 탭 수 |
|--------|------|-------|
| sub02_01.php | 정부조달 및 R&D 컨설팅 | 12개 |
| sub02_02.php | 경영 및 기술 컨설팅 | 8개 |
| sub02_03.php | 창업 및 소상공인 지원 | 4개 |
| sub02_04.php | 인증 컨설팅 | 5개 |

### 인증 서비스 (sub02_04)
- ISO 인증 (9001, 14001, 45001, 27001 등)
- 벤처기업 인증
- 이노비즈(Inno-Biz) 인증
- 메인비즈(Main-Biz) 인증
- 기업부설연구소 설립

## 기술 스택

- PHP 7.4+
- Gnuboard 5.x CMS
- Tailwind CSS 3.x
- GSAP 3.x
- Font Awesome 4.x

## 설치 및 실행

1. 웹서버 (Apache/Nginx)에 파일 업로드
2. PHP 및 MySQL 설정
3. Gnuboard 설치 및 설정
4. `common.php` 경로 설정 확인

## 라이선스

All Rights Reserved - 케이비즈업

---

*Developed with assistance from Claude Code*
