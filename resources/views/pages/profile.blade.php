@extends('layouts.main')
@section('title', 'Profile')

@section('content')

    <div class="relative bg-cover bg-center py-48" style="background-image: url('/assets/img/banner1.jpg');">
        <div class="absolute top-0 mt-20 right-0 bottom-0 left-0 bg-gradient-to-b from-transparent to-gray-900"></div>
        <div class="max-w-3xl mx-auto text-center relative z-10">
            <h1 class="text-4xl font-bold uppercase text-white">My Profile</h1>
        </div>
    </div>
    <div class="container mx-auto">
        <div class="lg:pb-20 pb-10 pt-10 flex flex-col lg:flex-row gap-8">
            <div class="w-full lg:w-1/4 bg-white shadow rounded-lg border border-[#E5E7EB] p-4">
                <form action="" method="post" enctype="multipart/form-data" id="avatarForm"
                    class="flex flex-col items-center">
                    @csrf
                    <div class="relative">
                        <!-- Avatar Image -->
                        <img id="avatarPreview" class="w-24 h-24 lg:w-28 lg:h-28 rounded-full border-2 border-gray-300"
                            src="{{ asset('assets/img/avt5.svg') }}" alt="Avatar">

                        <!-- Edit Button -->
                        <label for="avatarInput"
                            class="absolute bottom-0 right-0 bg-white p-2 rounded-full shadow-lg cursor-pointer">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-5 h-5 text-blue-500">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M16.862 3.487a2.121 2.121 0 113.001 3.002l-1.998 2a1.5 1.5 0 01-.35.274l-9 5.5a.75.75 0 01-1.028-.267l-2.5-4a.75.75 0 01.176-.967l8.5-6.5a1.5 1.5 0 01.999-.275l2.5.5z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 21h4.5M12 17.25v3.75" />
                            </svg>
                        </label>
                        <input type="file" name="avatar" id="avatarInput" class="hidden" accept="image/*">
                    </div>

                    <button type="submit" class="btn-primary mt-4 py-2"><span class="relative z-10">Save
                            Image</span></button>
                </form>
                <h2 class="mt-2 font-semibold text-xl text-center">Thang Hoang</h2>

                <nav class="mt-2">
                    <a href="#" class="block py-2 px-4 font-medium navbar" data-id="personal-info">Personal
                        Information</a>
                    <a href="#" class="block py-2 px-4 font-medium" data-id="test-history">Test History</a>
                </nav>
            </div>

            <div id="content-section" class="w-full lg:w-3/4 bg-white shadow-md border border-[#E5E7EB] rounded-lg p-6">
                <div id="personal-info" class="content active">
                    <form class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label class="text-gray-600">Full Name</label>
                            <input type="text" class="w-full border p-2 rounded-lg" value="Thang Hoang">
                        </div>
                        <div>
                            <label class="text-gray-600">Email</label>
                            <input type="email" class="w-full border p-2 rounded-lg" value="thang@gmail.com.vn">
                        </div>
                        <div>
                            <label class="text-gray-600">Password</label>
                            <input type="password" class="w-full border p-2 rounded-lg" value="************">
                            <a href="#" class="text-blue-600 text-sm">Change password</a>
                        </div>
                        <div>
                            <label class="text-gray-600">Phone</label>
                            <input type="text" class="w-full border p-2 rounded-lg" value="090500500">
                        </div>
                        <div class="mt-6 flex space-x-4">
                            <button type="submit" class="btn-primary uppercase"><span
                                    class="relative z-10">Save</span></button>
                            <button type="reset" class="text-gray-500">Cancel</button>
                        </div>
                    </form>
                </div>

                <div id="test-history" class="content hidden">
                    <h3 class="text-lg font-semibold mb-4">Summary of your previous attempts</h3>
                    <div class="border rounded-lg overflow-hidden">
                        <table class="w-full text-sm">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th class="px-6 py-3 text-left">State</th>
                                    <th class="px-6 py-3 text-left">Grade/50</th>
                                    <th class="px-6 py-3 text-left">Reviews</th>
                                    <th class="px-6 py-3 text-left">Feedback</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-t">
                                    <td class="px-6 py-4">
                                        <div>Finished</div>
                                        <div class="text-gray-500 text-xs">Submitted Wednesday, 8 January 2025, 2:16 PM
                                        </div>
                                    </td>
                                    <td class="px-6 py-4">6</td>
                                    <td class="px-6 py-4">Not permitted</td>
                                    <td class="px-6 py-4">
                                        <p class="font-medium mb-2">Khả năng Anh ngữ của bạn còn hạn chế!</p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('nav a').click(function(e) {
                e.preventDefault();
                var target = $(this).data('id');
                $('.content').addClass('hidden');
                $('nav a').removeClass('navbar');
                $(this).addClass('navbar');
                $('#' + target).removeClass('hidden');
            });
        });
    </script>

@stop
