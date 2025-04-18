<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\tag;
use App\Repositories\Interfaces\UserInterface;
use Illuminate\Http\Request;
use Storage;

class ProfileController extends Controller
{
    protected $userRepository;

    public function __construct(UserInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function show()
    {
            $user = $this->userRepository->getAuthenticatedUserProfile();
            $allTags = tag::all();
        return view('components.provider.Profile',compact('user','allTags'));
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:100',
            'last_name' => 'required|string|max:100',
            'email' => 'required|email',
            'service_area' => 'nullable|string|max:100',
            'description' => 'nullable|string',
            'profile_image' => 'nullable|image|max:2048',
            'tags' => 'nullable|array',
            'tags.*' => 'exists:tags,id'
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('profiles', 'public');
        }

        $user = $this->userRepository->updateProfile($validated);

        return redirect()->back()->with('success', 'Profile updated successfully');

    }

    public function updateProfileImage(Request $request)
{
    $request->validate([
        'profile_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $user = auth()->user();

    $path = $request->file('profile_image')->store('profile_images', 'public');
    $user->update([
        'image' => $path
    ]);

    return redirect()->back()->with('success', 'Profile image updated!');
}
}
