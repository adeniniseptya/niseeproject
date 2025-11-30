<x-auth-layout>

    <div class="feature-card" style="width:380px; padding:40px;">
        <h2 style="text-align:center; font-size:28px; margin-bottom:15px; color:#6b4bff;">
            Create Your Account
        </h2>

        {{-- REGISTER FORM --}}
        <form method="POST" action="{{ route('register') }}">
            @csrf

            {{-- Name --}}
            <div style="margin-bottom:20px;">
                <label>Name</label>
                <input type="text" name="name" required value="{{ old('name') }}"
                    style="width:100%; padding:12px; border-radius:12px; border:1px solid #ddd;" />
                @error('name')
                    <p style="color:red; font-size:13px; margin-top:5px;">{{ $message }}</p>
                @enderror
            </div>

            {{-- Email --}}
            <div style="margin-bottom:20px;">
                <label>Email</label>
                <input type="email" name="email" required value="{{ old('email') }}"
                    style="width:100%; padding:12px; border-radius:12px; border:1px solid #ddd;" />
                @error('email')
                    <p style="color:red; font-size:13px; margin-top:5px;">{{ $message }}</p>
                @enderror
            </div>

            {{-- Password --}}
            <div style="margin-bottom:20px;">
                <label>Password</label>
                <input type="password" name="password" required
                    style="width:100%; padding:12px; border-radius:12px; border:1px solid #ddd;" />
                @error('password')
                    <p style="color:red; font-size:13px; margin-top:5px;">{{ $message }}</p>
                @enderror
            </div>

            {{-- Confirm Password --}}
            <div style="margin-bottom:20px;">
                <label>Confirm Password</label>
                <input type="password" name="password_confirmation" required
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
                Register
            </button>
        </form>

        <p style="text-align:center; margin-top:18px; font-size:14px;">
            Sudah punya akun?
            <a href="{{ route('login') }}" style="color:#6b4bff;">Login</a>
        </p>
    </div>

</x-auth-layout>
