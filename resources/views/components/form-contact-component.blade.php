<div class="flex flex-wrap items-center">
    <div class="w-full md:w-2/5 flex justify-center relative">
        <img src="/assets/img/kid.svg" alt="Superhero Kid" class="object-contain">
    </div>

    <div class="w-full md:flex-1 bg-white shadow-lg rounded-lg p-6 py-10 relative">
        <h2 class="text-xl lg:text-2xl font-bold text-blue-900 uppercase mb-4">Đăng ký tư vấn</h2>

        <div class="items-center absolute -right-6 top-20 px-11 py-4 rounded-sm shadow-lg bg-white">
            <a href="#">
                <img src="/assets/img/Frame-request.svg" alt="Quote" class="w-16 h-16 mb-4">
                <span class="capitalize text-[#3A3A3A] font-semibold text-sm">Báo Giá</span>
            </a>
        </div>
        <form action="#" method="POST" class="space-y-4 md:pr-[180px]">
            <div>
                <label for="name" class="sr-only">Tên</label>
                <input type="text" id="name" name="name" placeholder="Tên" required
                    class="w-full h-12 px-4 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>
            <div>
                <label for="phone" class="sr-only">Số Điện Thoại</label>
                <input type="tel" id="phone" name="phone" placeholder="Số Điện Thoại" required
                    class="w-full h-12 px-4 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>
            <div>
                <label for="email" class="sr-only">Email</label>
                <input type="email" id="email" name="email" placeholder="Email"
                    class="w-full h-12 px-4 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>
            <div>
                <label for="address" class="sr-only">Địa Chỉ</label>
                <input type="text" id="address" name="address" placeholder="Địa Chỉ"
                    class="w-full h-12 px-4 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
            </div>
            <div>
                <label for="message" class="sr-only">Nội Dung</label>
                <textarea id="message" name="message" placeholder="Nội Dung" rows="3"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"></textarea>
            </div>
            <div class="text-center">
                <button type="submit"
                    class="btn-primary">
                    <span class="relative z-10">
                        Gửi yêu cầu
                    </span>
                </button>
            </div>
        </form>

    </div>
</div>
