<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CandidateProfile;
use App\Models\Skill;

class ProfileCreationController extends Controller
{
public function create()
{
    // If user already has a profile, redirect to dashboard
    if (auth()->user()->candidateProfile) {
        return redirect()->route('dashboard');
    }

    $skills = Skill::all();
    return view('profile.create', compact('skills'));
}

public function store(Request $request)
{
    // If user already has a profile, redirect to dashboard
    if (auth()->user()->candidateProfile) {
        return redirect()->route('dashboard');
    }

    $validated = $request->validate([
        'headline' => 'required|string|max:255',
        'location' => 'nullable|string|max:255',
        'city' => 'nullable|string|max:255',
        'state' => 'nullable|string|max:255',
        'country' => 'nullable|string|max:255',
        'summary' => 'nullable|string',
        'skills' => 'nullable|array',
        'skills.*' => 'exists:skills,id',
    ]);

    $profile = CandidateProfile::create([
        'user_id' => auth()->id(),
        'headline' => $validated['headline'],
        'location' => $validated['location'] ?? null,
        'city' => $validated['city'] ?? null,
        'state' => $validated['state'] ?? null,
        'country' => $validated['country'] ?? null,
        'summary' => $validated['summary'] ?? null,
    ]);

    if (!empty($validated['skills'])) {
        $profile->skills()->attach($validated['skills']);
    }

    return redirect()->route('dashboard')->with('success', 'Profile created successfully!');
}
}
