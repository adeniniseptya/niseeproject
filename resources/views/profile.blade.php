<x-app-layout>

{{-- HILANGKAN HEADER JETSTREAM --}}
@section('header') @endsection

<style>
    .profile-display {
        max-width: 900px;
        margin: 140px auto 60px;
        padding: 45px;
        background: rgba(255,255,255,0.55);
        backdrop-filter: blur(12px);
        border-radius: 28px;
        box-shadow: 0 8px 25px rgba(0,0,0,0.08);
        border: 2px solid rgba(255,255,255,0.4);
        animation: fadeIn 0.5s ease;
        text-align: center;
    }

    .profile-avatar {
        width: 160px;
        height: 160px;
        border-radius: 50%;
        object-fit: cover;
        border: 5px solid #ff7eb8;
        box-shadow: 0 6px 18px rgba(0,0,0,0.12);
        margin-bottom: 20px;
    }

    .profile-name {
        font-size: 32px;
        font-weight: 700;
        color: #272727;
        margin-bottom: 8px;
    }

    .profile-email {
        font-size: 17px;
        color: #555;
        margin-bottom: 18px;
    }

    .profile-bio {
        font-size: 16px;
        color: #444;
        margin: 20px auto;
        line-height: 1.7;
        max-width: 650px;
        padding: 18px 24px;
        background: rgba(255,255,255,0.55);
        border-radius: 20px;
        border: 2px solid #ffe3f0;
    }

    .edit-btn {
        margin-top: 25px;
        padding: 14px 28px;
        background: #6b4bff;
        color: white;
        border-radius: 18px;
        font-size: 17px;
        font-weight: 600;
        border: none;
        cursor: pointer;
        text-decoration: none;
        display: inline-block;
        box-shadow: 0 5px 20px rgba(107,75,255,0.25);
        transition: 0.25s;
    }

    .edit-btn:hover {
        transform: scale(1.05);
        background: #5a3df0;
    }
</style>

{{-- TITLE --}}
<div class="gallery-header">
    <h1>My Profile</h1>
    <p>Lihat informasi akunmu ✨</p>
</div>

{{-- PROFILE CARD --}}
<div class="profile-display">

    {{-- FOTO PROFIL --}}
    <img class="profile-avatar"
         src="{{ Auth::user()->profile_photo_url ?? 'https://via.placeholder.com/160' }}"
         alt="Profile Photo">

    {{-- NAMA --}}
    <div class="profile-name">{{ Auth::user()->name }}</div>

    {{-- EMAIL --}}
    <div class="profile-email">{{ Auth::user()->email }}</div>

    {{-- BIO --}}
    @if(Auth::user()->bio)
    <div class="profile-bio">
        {{ Auth::user()->bio }}
    </div>
    @endif

    {{-- TOMBOL EDIT PROFILE --}}
    <a href="{{ route('profile.edit') }}" class="edit-btn">
        Edit Profile
    </a>
</div>

</x-app-layout>
