// cookies-banner
document.addEventListener('DOMContentLoaded', 
function() {
    
    let cookiesBanner = document.querySelector('.cookies-banner');
    let cookiesBannerCloseButton = document.querySelector('.cookies-banner-button .button');

    let cookiesBannerDelay = 2000;
    if (cookiesBanner) {
       setTimeout(showBanner,cookiesBannerDelay);
    }
    if (cookiesBannerCloseButton) {
        cookiesBannerCloseButton.addEventListener('click', cookiesBannerCloseButtonClicked)
    }
    
    function cookiesBannerCloseButtonClicked(event) { 
        event.preventDefault();
        hideBanner();
    }
    function showBanner() {
        cookiesBanner.classList.add('show');
    }
    function hideBanner() {
        cookiesBanner.classList.remove('show');
    }
})

// back to the top button
const showOnPx = 100;
const backToTopButton = document.querySelector(".back-to-top");

const scrollContainer = () => {
    return document.documentElement || document.body;
};

const goToTop = () => {
    document.body.scrollIntoView({
        behavior: "smooth"
    });
};

document.addEventListener("scroll", () => {
    if (scrollContainer().scrollTop > showOnPx) {
        backToTopButton.classList.remove("hidden");
    } else {
        backToTopButton.classList.add("hidden");
    }
});

backToTopButton.addEventListener("click", goToTop);
