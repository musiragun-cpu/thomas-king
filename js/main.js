// GSAP 플러그인 등록
gsap.registerPlugin(ScrollTrigger, ScrollSmoother, ScrollToPlugin);

// 디바이스가 모바일인지 확인하는 함수
function isMobileDevice() {
  return /Android|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(
    navigator.userAgent
  );
}



// ScrollSmoother 초기화
document.addEventListener("DOMContentLoaded", function () {
//   if (!isMobileDevice()) {
//     ScrollSmoother.create({
//       wrapper: "#smooth-wrapper",
//       content: "#smooth-content",
//       smooth: 1.5,
//       smoothTouch: 0.1,
//     });
//   }

  // ScrollTrigger 갱신 및 초기화
  ScrollTrigger.refresh();
});

// 현재 페이지가 메인 페이지(index)인지 확인하는 함수
function isIndexPage() {
  const path = window.location.pathname;
  return path === "/" || path.endsWith("index.php");
}

// 메인 페이지에서만 애니메이션 실행
if (isIndexPage()) {
//   gsap.to(".swiperType01", {
//     scrollTrigger: {
//       trigger: ".swiperType01",
//       start: "top top", // 애니메이션이 시작되는 시점을 조정할 수 있습니다.
//       end: "bottom top", // 애니메이션이 끝나는 시점을 조정할 수 있습니다.
//       scrub: true, // 스크롤에 따라 애니메이션이 진행되도록 설정
//       //toggleClass: { targets: "header", className: "headerWhite" }, // header에 headerWhite 클래스를 토글
//       // markers: true, // 디버깅용 마커 추가
//     },
//   });
//   gsap.to(".swiperType01 h2", {
//     scrollTrigger: {
//       trigger: ".section01",
//       start: "center center", // 애니메이션이 시작되는 시점을 조정할 수 있습니다.
//       end: "bottom bottom", // 애니메이션이 끝나는 시점을 조정할 수 있습니다.
//       scrub: true, // 스크롤에 따라 애니메이션이 진행되도록 설정
//     },
//     opacity: 1, // 불투명도를 0으로 설정하여 요소를 사라지게 만듦
//   });

  //   document.addEventListener("DOMContentLoaded", function () {
  //     const isMobile = window.matchMedia("(max-width: 992px)").matches;

  //     gsap.to(".swiperType01", {
  //       scrollTrigger: {
  //         trigger: ".swiperType01",
  //         start: "top top",
  //         end: "bottom top",
  //         scrub: true,
  //         // pin: !isMobile, // 모바일에서는 pin을 false로 설정
  //         pin: !isMobile, // 모바일에서는 pin을 false로 설정
  //         pinSpacing: !isMobile, // 모바일에서는 pinSpacing도 false
  //         onUpdate: () => {
  //           if (!isMobile) {
  //             const pinSpacer =
  //               document.querySelector(".swiperType01").parentNode;
  //             if (pinSpacer && pinSpacer.classList.contains("pin-spacer")) {
  //               pinSpacer.style.margin = "0"; // margin 값 제거
  //               pinSpacer.style.width = "100%";
  //             }
  //           }
  //         },
  //         // markers: true, // 디버깅용 마커 추가
  //       },
  //       width: "100%",
  //       borderRadius: "0",
  //       duration: 2,
  //     });
  //   });
}

// GSAP 애니메이션 설정 (공통 함수화)
function createAnimation(selector, animationProps, triggerProps) {
  gsap.from(selector, {
    ...animationProps,
    scrollTrigger: {
      ...triggerProps,
      once: true, // 트리거 한 번만 작동
      markers: false, // 디버깅용 마커 비활성화
    },
  });
}

// 공통 애니메이션 적용
createAnimation(
  ".fade-right",
  { x: 100, opacity: 0 },
  { trigger: ".fade-right", start: "top 50%", end: "bottom 20%", scrub: true }
);
createAnimation(
  ".fade-left",
  { x: -100, opacity: 0 },
  { trigger: ".fade-left", start: "top 80%", end: "top 20%", scrub: true }
);
createAnimation(
  ".fade-up",
  { y: 100, opacity: 0 },
  { trigger: ".fade-up", start: "top 80%", end: "top 20%", scrub: true }
);

// 메인 타이틀 애니메이션 함수
function createMainTitleAnimation(section) {
  gsap
    .timeline({
      scrollTrigger: {
        trigger: section,
        start: "top bottom",
        end: "200",
        scrub: 1,
      },
    })
    .fromTo(
      `${section} .mainTitle span`,
      { y: "100%", opacity: 0 },
      { y: "0%", opacity: 1, duration: 2 }
    )
    .fromTo(
      `${section} .mainTitle h2`,
      { y: "100%", opacity: 0 },
      { y: "0%", opacity: 1, duration: 2 },
      "-=0.5"
    );
}

// 섹션별 타이틀 애니메이션 적용
[".section01", ".section02", ".section03", ".section04", ".section05"].forEach(
  (section) => createMainTitleAnimation(section)
);

// 반응형 설정 최적화
ScrollTrigger.matchMedia({
  "(min-width: 768px)": function () {
    createAnimation(
      ".cardItems01 .imgBox",
      { x: "100%" },
      {
        trigger: ".cardItems01 .imgBox",
        start: "top center",
        end: "bottom center",
      }
    );
    createAnimation(
      ".cardItems02 .imgBox",
      { x: "-250%" },
      { trigger: ".cardItems02 img", start: "top center", end: "bottom center" }
    );
  },
  //   "(max-width: 767px)": function () {
  //     // 모바일에서는 애니메이션 비활성화
  //     ScrollTrigger.getAll().forEach((st) => st.kill());
  //   },
});

// 페이지 상단으로 스크롤하는 버튼
const topBtn = document.querySelector(".topBtn");

topBtn.addEventListener("click", () => {
  gsap.to(window, {
    duration: 2,
    scrollTo: { y: 0, autoKill: true },
    ease: "power2.inOut",
  });
});

// 버튼 표시/숨기기
ScrollTrigger.create({
  start: "top 100vh",
  end: "bottom 100px",
  onUpdate: (self) => {
    const isVisible = self.scroll() > 100;
    gsap.to(topBtn, {
      duration: 0.5,
      opacity: isVisible ? 1 : 0,
      y: isVisible ? 0 : 20,
      ease: "power2.out",
      onStart: () => {
        if (isVisible) {
          topBtn.style.display = "flex";
        }
      },
      onComplete: () => {
        if (!isVisible) {
          topBtn.style.display = "none";
        }
      },
    });
  },
});

// 모바일 메뉴  tab
var tabBtn = $(".mob_box > .mob_tab > ul > li");
var tabCont = $(".mob_depth1 > div");

tabCont.hide().eq(0).show();
//.tab_cont 직계자손 div를 다 가리고!
//.tab_cont 직계자손 div의 첫째만 보이게 하라!

tabBtn.click(function (e) {
  e.preventDefault();
  var target = $(this); //tabBtn.click<--target
  var index = target.index();
  tabBtn.removeClass("on_1");
  target.addClass("on_1");
  tabCont.css("display", "none"); //.css({display:"none"})
  tabCont.eq(index).css("display", "block");
});

//서브페이지 tab
document.querySelectorAll(".page_tab span").forEach((tab, index) => {
  tab.addEventListener("click", () => {
    document
      .querySelectorAll(".page_tab span")
      .forEach((tab) => tab.classList.remove("active"));
    document
      .querySelectorAll(".tabItems")
      .forEach((item) => item.classList.remove("tabActive"));

    tab.classList.add("active");
    document.querySelector(`.tab${String(index + 1).padStart(2, '0')}`).classList.add("tabActive");
  });
});
