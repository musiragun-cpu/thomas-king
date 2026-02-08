// GSAP 플러그인 등록
gsap.registerPlugin(ScrollTrigger, ScrollSmoother, ScrollToPlugin);

document.addEventListener("DOMContentLoaded", function () {
  // 1. Hero Section Text Reveal (Staggered)
  // 메인 슬라이드 텍스트 등장 효과
  const heroTl = gsap.timeline({ defaults: { ease: "power3.out" } });

  heroTl.from(".swiperType01 .sectionContainer h2", {
    y: 50,
    opacity: 0,
    duration: 1,
    delay: 0.5
  })
    .from(".swiperType01 .sectionContainer p", {
      y: 30,
      opacity: 0,
      duration: 1,
    }, "-=0.6") // 0.6초 겹쳐서 실행
    .from(".swiperType01 .swiper-button-next, .swiperType01 .swiper-button-prev", {
      opacity: 0,
      duration: 1
    }, "-=0.6");


  // 2. Parallax Scrolling Effect
  // 배경 이미지 패럴랙스 (섹션 2 서브 이미지 등)
  gsap.utils.toArray('.sec02img').forEach((img) => {
    gsap.to(img, {
      yPercent: -15, // 스크롤 시 위로 살짝 이동
      ease: "none",
      scrollTrigger: {
        trigger: img,
        start: "top bottom",
        end: "bottom top",
        scrub: true
      }
    });
  });

  // 참고: section01의 swiper-slide 이미지 패럴랙스
  gsap.utils.toArray(".swiper-slide img").forEach((img) => {
    gsap.to(img, {
      yPercent: 20, // 스크롤에 따라 이미지가 20% 정도 아래로 이동 (시차 효과)
      ease: "none",
      scrollTrigger: {
        trigger: img.closest("section"),
        start: "top top",
        end: "bottom top",
        scrub: true
      }
    });
  });


  // 3. Section Title Reveal (공통 타이틀 애니메이션)
  gsap.utils.toArray(".sectionContainer h2.text-primary").forEach((title) => {
    gsap.from(title, {
      scrollTrigger: {
        trigger: title,
        start: "top 85%",
        end: "bottom center",
        toggleActions: "play none none reverse"
      },
      y: 30,
      opacity: 0,
      duration: 0.8,
      ease: "power2.out"
    });
  });

  gsap.utils.toArray(".sectionContainer p.text-3xl").forEach((text) => {
    gsap.from(text, {
      scrollTrigger: {
        trigger: text,
        start: "top 85%",
        end: "bottom center",
        toggleActions: "play none none reverse"
      },
      y: 40,
      opacity: 0,
      duration: 1,
      delay: 0.2, // 타이틀보다 약간 늦게
      ease: "power2.out"
    });
  });


  // 4. Card Hover Animations (Javascript 보조)
  // CSS hover로 처리하지만, 필요시 JS로 정교한 타임라인 추가 가능
  // 현재는 CSS transition을 권장하므로 여기서는 패스하거나 부가적인 효과만 줌
});

// ScrollTrigger 갱신
window.addEventListener("load", () => {
  ScrollTrigger.refresh();
});

// 기존 유틸리티 함수들 유지 (모바일 감지 등)
function isMobileDevice() {
  return /Android|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent);
}

// 퀵 메뉴 및 탑 버튼 로직
const topBtn = document.getElementById("top-button");
if (topBtn) {
  topBtn.addEventListener("click", (e) => {
    e.preventDefault();
    gsap.to(window, { duration: 1, scrollTo: 0, ease: "power3.inOut" });
  });
}

