!function(t){t(".gl-b-projects-wrapper").addClass("color"),t(".gl-b-about-wrapper ").addClass("color"),gsap.utils.toArray(".color").forEach(function(o){const t=o.getAttribute("data-bg");ScrollTrigger.create({trigger:o,start:"top+=100 50%",end:"bottom+=150 50%",onEnter:()=>gsap.to(".gl-b-about-wrapper, .gl-b-projects-wrapper",{backgroundColor:t}),onEnterBack:()=>gsap.to(".gl-b-about-wrapper, .gl-b-projects-wrapper",{backgroundColor:t}),scrub:1})}),t(document).ready(function(){function o(o){t("html, body").animate({scrollTop:t(o).offset().top},100)}t("#btnWorks").click(function(){o("#worksSection")}),t("#btnContact").click(function(){o("#contactSection")})})}(jQuery);