@extends('layouts.main')

@section('content')
<div class="max-w-4xl mx-auto py-12 px-4">

    {{-- BACK BUTTON --}}
    <a 
        href="{{ url()->previous() }}" 
        class="inline-flex items-center gap-2 text-gray-600 hover:text-gray-800 mb-6 transition"
    >
        <span class="text-xl">←</span>
        <span class="font-medium">Back</span>
    </a>

    {{-- TITLE --}}
    <div class="text-center mb-10">
        <h1 class="text-4xl font-bold text-gray-800">Your Profile</h1>
        <p class="text-gray-500 mt-2">Manage your personal information and orders</p>
    </div>

    {{-- PROFILE CARD --}}
    <div class="bg-white rounded-2xl shadow-lg p-8 flex flex-col md:flex-row gap-8 items-center">

        {{-- PHOTO --}}
        <div class="w-32 h-32 rounded-full overflow-hidden border-4 border-gray-200 shadow">
            <img 
                src="{{ $user->profile_photo ? asset('storage/'.$user->profile_photo) : 'https://ui-avatars.com/api/?background=0D8ABC&color=fff&size=200&name='.urlencode($user->name) }}"
                class="w-full h-full object-cover"
            >
        </div>

        {{-- INFO --}}
        <div class="flex-1">
            <h2 class="text-3xl font-semibold text-gray-800">{{ $user->name }}</h2>
            <p class="text-gray-500 text-sm">{{ $user->email }}</p>

            @if ($user->bio)
                <p class="mt-3 text-gray-700 leading-relaxed">{{ $user->bio }}</p>
            @endif

            <a 
                href="{{ route('profile.edit') }}"
                class="mt-5 inline-block px-5 py-2.5 bg-blue-600 text-white rounded-xl shadow hover:bg-blue-700 transition"
            >
                Edit Profile
            </a>
        </div>

    </div>

    {{-- ORDERS LIST --}}
    <div class="mt-14">
        <h3 class="text-2xl font-semibold text-gray-800 mb-6">Your Orders</h3>

        @forelse ($orders as $order)
            <div class="p-5 bg-white border rounded-xl shadow-sm hover:shadow-md transition mb-4">
                <div class="flex justify-between items-center">
                    <div>
                        <p class="font-semibold text-lg">Order #{{ $order->id }}</p>
                        <p class="text-gray-600 text-sm">Status: {{ ucfirst($order->status) }}</p>
                    </div>

                    @if ($order->review)
                        <span class="text-green-600 font-medium text-sm">Reviewed</span>
                    @endif
                </div>
            </div>
        @empty
            <p class="text-gray-500 text-center">You have no orders yet.</p>
        @endforelse
    </div>

</div>
@endsection
