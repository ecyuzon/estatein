// document.addEventListener('DOMContentLoaded', function () {
//     if (window.lucide && typeof window.lucide.createIcons === 'function') {
//         window.lucide.createIcons();
//     }

//     var mobileMenuToggle = document.getElementById('mobile-menu-toggle');
//     var mobileMenu = document.getElementById('mobile-menu');

//     if (mobileMenuToggle && mobileMenu) {
//         mobileMenuToggle.addEventListener('click', function () {
//             mobileMenu.classList.toggle('hidden');
//         });
//     }

//     var banner = document.getElementById('top-banner');
//     var bannerClose = document.getElementById('top-banner-close');
//     var bannerStorageKey = 'estateinTopBannerHidden';

//     if (banner && window.localStorage && localStorage.getItem(bannerStorageKey) === '1') {
//         banner.style.display = 'none';
//     }

//     if (banner && bannerClose) {
//         bannerClose.addEventListener('click', function () {
//             banner.style.display = 'none';

//             if (window.localStorage) {
//                 localStorage.setItem(bannerStorageKey, '1');
//             }
//         });
//     }
// });
