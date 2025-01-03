<div class="bg-white border-gray-200 border shadow-lg">
    <div class="flex container justify-between items-center">
        <div class="logo">
            <a href="/">
                <img src="/logo.avif" alt="Logo" />
            </a>
        </div>
        <button class="menu-toggle lg:hidden" aria-label="Toggle Menu">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>
        <nav class="hidden lg:flex">
            <ul class="flex gap-6 text-base font-bold transition-all">
                <li><a class="hover:text-rose-900" href="/">Trang chủ</a></li>
                <li>
                    <a class="hover:text-rose-900" href="/thi-thu"
                        >Các khóa học</a
                    >
                </li>
                <li>
                    <a class="hover:text-rose-900" href="/thi-thu"
                        >Chúng tôi là ai</a
                    >
                </li>
                <li>
                    <a class="hover:text-rose-900" href="/thi-thu">Đối tác</a>
                </li>
                <li>
                    <a class="hover:text-rose-900" href="/thi-thu"
                        >Cơ hội việc làm</a
                    >
                </li>
                <li>
                    <a class="hover:text-rose-900" href="/thi-thu"
                        >Chương trình online</a
                    >
                </li>
                <li>
                    <a class="hover:text-rose-900" href="/blog"
                        >Blog</a
                    >
                </li>
            </ul>
        </nav>
        <div class="hidden lg:flex">
            <button class="btn-primary"><span class="relative z-10">Đăng ký ngay</span></button>
        </div>
    </div>
    <div class="overlay hidden"></div>
    <nav class="mobile-menu overflow-hidden h-screen">
        <a href="/" class="block text-center w-full">
            <img src="/logo.avif" alt="Logo" class="mx-auto" />
        </a>
        <ul class="flex flex-col gap-4 text-xl font-bold">
            <li><a class="hover:text-rose-900 block border-b-2 border-rose-900 pb-2" href="/">Trang chủ</a></li>
            <li><a class="hover:text-rose-900 block border-b-2 border-rose-900 pb-2" href="/thi-thu">Các khóa học</a>
            </li>
            <li><a class="hover:text-rose-900 block border-b-2 border-rose-900 pb-2" href="/thi-thu">Chúng tôi là ai</a>
            </li>
            <li><a class="hover:text-rose-900 block border-b-2 border-rose-900 pb-2" href="/thi-thu">Đối tác</a></li>
            <li><a class="hover:text-rose-900 block border-b-2 border-rose-900 pb-2" href="/thi-thu">Cơ hội việc làm</a>
            </li>
            <li><a class="hover:text-rose-900 block border-b-2 border-rose-900 pb-2" href="/thi-thu">Chương trình
                    online</a></li>
            <li><a class="hover:text-rose-900 block border-b-2 border-rose-900 pb-2" href="/blog">Blog</a></li>
        </ul>
        <button class="btn-primary w-full mt-4"><span class="relative z-10">Đăng ký ngay</span></button>
    </nav>
</div>

<style>
    .container {
        padding: 0 16px;
        max-width: 1200px;
        margin: 0 auto;
    }

    .menu-toggle {
        background: none;
        border: none;
        cursor: pointer;
    }

    .mobile-menu {
        position: fixed;
        top: 0;
        right: -300px;
        /* Start off-screen */
        height: sc;
        width: 300px;
        background-color: white;
        border-left: 1px solid #ddd;
        box-shadow: -5px 0 10px rgba(0, 0, 0, 0.1);
        padding: 16px;
        transition: right 0.3s ease;
        /* Smooth slide-in animation */
        z-index: 1001;
        /* Higher than the overlay */
    }

    .mobile-menu.active {
        right: 0;
        /* Slide in */
    }

    .overlay {
        position: fixed;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        /* Semi-transparent black */
        z-index: 1000;
        /* Below the menu */
    }

    .overlay.active {
        display: block;
    }

    @media (min-width: 1024px) {
        .menu-toggle {
            display: none;
        }

        .overlay {
            display: none !important;
        }
    }
</style>


<script>
    jQuery(document).ready(function () {
    const $menuToggle = $('.menu-toggle');
    const $mobileMenu = $('.mobile-menu');
    const $overlay = $('.overlay');

    $menuToggle.on('click', () => {
        $("body").addClass('overflow-hidden');
        $mobileMenu.toggleClass('active');
        $overlay.toggleClass('active');
    });

    $overlay.on('click', () => {
        $("body").removeClass('overflow-hidden');
        $mobileMenu.removeClass('active');
        $overlay.removeClass('active');
    });
    });

</script>