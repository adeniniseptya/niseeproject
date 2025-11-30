<x-auth-layout>

    <div class="feature-card" style="width:380px; padding:40px;">
        <h2 style="text-align:center; font-size:28px; margin-bottom:15px; color:#6b4bff;">Welcome, Neefriends!</h2>

        {{-- LOGIN FORM --}}
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div style="margin-bottom:20px;">
                <label>Email</label>
                <input type="email" name="email" required
                    style="width:100%; padding:12px; border-radius:12px; border:1px solid #ddd;" />
            </div>

            <div style="margin-bottom:20px;">
                <label>Password</label>
                <input type="password" name="password" required
                    style="width:100%; padding:12px; border-radius:12px; border:1px solid #ddd;" />
            </div>

            <button type="submit"
                style="
                    width:100%;
                    padding:12px;
                    background:#6b4bff;
                    color:white;
                    border:none;
                    border-radius:14px;
                    font-size:16px;
                    margin-top:10px;
                ">
                Login
            </button>
        </form>

        {{-- GOOGLE LOGIN --}}
        <a href="{{ route('google.redirect') }}"
            style="
                display:block;
                text-align:center;
                margin-top:22px;
                padding:12px;
                background:white;
                border-radius:14px;
                border:2px solid #ddd;
                text-decoration:none;
                font-weight:600;
                color:#444;
            ">
            Continue with Google
        </a>

        <p style="text-align:center; margin-top:18px; font-size:14px;">
            Belum punya akun?
            <a href="{{ route('register') }}" style="color:#6b4bff;">Sign up</a>
        </p>
    </div>

</x-auth-layout>
