<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    /**
     * Show profile display page
     */
    public function show(Request $request)
    {
        $user = $request->user();

        // Ambil semua order + review user
        $orders = $user->orders()->with('review')->get();

        return view('profile.show', compact('user', 'orders'));
    }

    /**
     * Show edit page
     */
    public function edit(Request $request)
    {
        return view('profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update profile
     */
    public function update(Request $request)
    {
        $user = $request->user();

        $request->validate([
            'name' => 'required|string|max:255',
            'bio' => 'nullable|string|max:300',
            'email' => 'required|email',
            'profile_photo' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        // Upload photo
        if ($request->hasFile('profile_photo')) {
            // Hapus foto lama
            if ($user->profile_photo && Storage::exists('public/'.$user->profile_photo)) {
                Storage::delete('public/'.$user->profile_photo);
            }

            $photoPath = $request->file('profile_photo')->store('profiles', 'public');
            $user->profile_photo = $photoPath;
        }

        // Jika email berubah reset verifikasi
        if ($request->email !== $user->email) {
            $user->email_verified_at = null;
        }

        // Update user fields
        $user->fill([
            'name'  => $request->name,
            'bio'   => $request->bio,
            'email' => $request->email,
        ]);

        $user->save();

        return Redirect::route('profile.show')->with('success', 'Profile updated!');
    }

    /**
     * Delete account
     */
    public function destroy(Request $request)
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        // Hapus foto profil
        if ($user->profile_photo && Storage::exists('public/'.$user->profile_photo)) {
            Storage::delete('public/'.$user->profile_photo);
        }

        Auth::logout();
        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
