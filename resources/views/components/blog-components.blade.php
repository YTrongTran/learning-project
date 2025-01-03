@props([ 'data' => [], ])
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
    @if(!empty($data))
    {{ $data }}
    @endif
    <!-- Card 1 -->
    <div class="bg-white rounded-3xl overflow-hidden shadow-lg">
        <img src="{{ asset('images/card-blog.webp') }}" alt="Student learning" class="w-full h-48 object-cover" />
        <div class="p-6">
            <h3 class="text-lg font-semibold mb-2">
                Học tiếng Anh cho bé liệu có thực sự cần thiết cho bé giao tiếp
                với người nói?
            </h3>
            <p class="text-gray-600 text-sm mb-4">
                Bạn có biết, chỉ mới 3 phút không học tiếng Anh cho bé sẽ phụ
                hục có thể khiến con bạn bỏng cơ hội mà bé đáng có bởi khi các
                bạn trẻ con thế giới...
            </p>
            <button
                class="bg-rose-900 text-white px-4 py-2 rounded-full text-sm hover:bg-rose-700 transition-colors flex items-center gap-2">
                Xem thêm
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </button>
        </div>
    </div>

    <!-- Card 2 -->
    <div class="bg-white rounded-3xl overflow-hidden shadow-lg">
        <img src="{{ asset('images/card-blog.webp') }}" alt="Classroom" class="w-full h-48 object-cover" />
        <div class="p-6">
            <h3 class="text-lg font-semibold mb-2">
                Tổng hợp toàn bộ 10 vựng tiếng Anh lớp 6 Global Success, Friend
                Plus và Expert English
            </h3>
            <p class="text-gray-600 text-sm mb-4">
                Khi bước vào lớp 6, việc học tiếng Anh không chỉ dừng thuần là
                học từ vựng mà còn là cách sử dụng các đơn vị...
            </p>
            <button
                class="bg-rose-900 text-white px-4 py-2 rounded-full text-sm hover:bg-rose-700 transition-colors flex items-center gap-2">
                Xem thêm
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </button>
        </div>
    </div>

    <!-- Card 3 -->
    <div class="bg-white rounded-3xl overflow-hidden shadow-lg">
        <img src="{{ asset('images/card-blog.webp') }}" alt="Writing" class="w-full h-48 object-cover" />
        <div class="p-6">
            <h3 class="text-lg font-semibold mb-2">
                App học tiếng Anh cho bé: Liệu có đủ sức mạnh mê lôi học truyền
                thống?
            </h3>
            <p class="text-gray-600 text-sm mb-4">
                Trước khi quyết định chọn một app học tiếng Anh cho bé, các bậc
                phụ huynh nên tìm hiểu kỹ những ưu và nhược điểm của từng app
                học...
            </p>
            <button
                class="bg-rose-900 text-white px-4 py-2 rounded-full text-sm hover:bg-rose-700 transition-colors flex items-center gap-2">
                Xem thêm
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                </svg>
            </button>
        </div>
    </div>
</div>