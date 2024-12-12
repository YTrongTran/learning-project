@extends('layouts.main') @section('title', 'Thi thu') @section('content')
<div class="container">
    <div class="w-full m-auto max-w-md mt-10 flex flex-col justify-center">
        <!-- Header -->
        <div class="flex items-center gap-4 mb-6">
            <span
                class="bg-rose-900 text-white px-4 py-2 rounded-full font-bold"
            >
                THI THỬ
            </span>
            <h1 class="text-navy-900 text-2xl font-bold">NHẬN KẾT QUẢ NGAY</h1>
        </div>

        <!-- Form Card -->
        <div class="bg-white rounded-lg p-6 shadow-lg">
            <h2 class="text-navy-900 text-xl font-bold mb-6 border-b pb-2">
                ĐĂNG KÝ ĐĂNG NHẬP NHANH
            </h2>
            <form class="space-y-4">
                <div>
                    <input
                        type="text"
                        placeholder="Họ Tên"
                        class="w-full px-4 py-3 rounded-full border border-gray-300 focus:border-blue-500 focus:ring-1 focus:ring-blue-500 outline-none"
                    />
                </div>

                <div>
                    <input
                        type="tel"
                        placeholder="Điện thoại"
                        class="w-full px-4 py-3 rounded-full border border-gray-300 focus:border-blue-500 focus:ring-1 focus:ring-blue-500 outline-none"
                    />
                </div>

                <div>
                    <input
                        type="email"
                        placeholder="Email"
                        class="w-full px-4 py-3 rounded-full border border-gray-300 focus:border-blue-500 focus:ring-1 focus:ring-blue-500 outline-none"
                    />
                </div>

                <button
                    type="submit"
                    class="btn-primary w-full flex items-center justify-center gap-2"
                >
                    ĐĂNG KÝ
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        class="h-5 w-5"
                        viewBox="0 0 20 20"
                        fill="currentColor"
                    >
                        <path
                            fill-rule="evenodd"
                            d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                            clip-rule="evenodd"
                        />
                    </svg>
                </button>
            </form>
            <br />
            <hr />
            <!-- Social Follow -->
            <div class="pt-4 border-t flex gap-4 items-center justify-center">
                <p class="text-gray-700 mb-2">Follow OA NES:</p>
                <button
                    class="bg-blue-500 text-white px-4 py-2 rounded-md flex items-center gap-2 hover:bg-blue-600 transition-colors"
                >
                    <svg
                        class="h-5 w-5"
                        viewBox="0 0 24 24"
                        fill="currentColor"
                    >
                        <path
                            d="M12 2C6.48 2 2 6.48 2 12c0 5.52 4.48 10 10 10s10-4.48 10-10c0-5.52-4.48-10-10-10zm5 7h-3v3h3v3h-3v3h-3v-3H8v-3h3V9H8V6h3V3h3v3h3v3z"
                        />
                    </svg>
                    Quan tâm
                </button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    jQuery(document).ready(function () {
        console.log("ready!");
    });
</script>
@stop
