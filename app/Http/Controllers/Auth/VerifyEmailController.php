<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Verified;
use App\Models\User;

class VerifyEmailController extends Controller
{
    public function __invoke(Request $request, $id, $hash)
    {
        $user = User::findOrFail($id);

        // Verify the hash matches
        if (!hash_equals(sha1($user->getEmailForVerification()), (string) $hash)) {
            abort(403, 'Invalid verification link.');
        }

        // Mark email as verified if not already
        if (!$user->hasVerifiedEmail()) {
            $user->markEmailAsVerified();
            event(new Verified($user));
        }

        // Log out any authenticated user and redirect to login
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login')->with('status', 'Your email has been verified! Please log in to continue.');
    }
}
