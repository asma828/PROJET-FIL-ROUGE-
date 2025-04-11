<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\registerRequest;
use Illuminate\Support\Facades\Auth;
use App\Repositories\Interfaces\AuthRepositoryInterface;

class AuthController extends Controller
{
    protected $authRepo;

    public function __construct(AuthRepositoryInterface $authRepo)
    {
        $this->authRepo = $authRepo;
    }

    public function showRegister()
    {
        return view('components.auth.register');
    }

    public function register(registerRequest $request)
    {
        $validated = $request->validated();
        
        $this->authRepo->register($validated);

        return redirect()->route(route: 'components.auth.login')->with('success', 'Account created! Please login.');
    }

    public function showLogin()
    {
        return view('components.auth.login');
    }

    public function login(Request $request)
{
    // dd($request);
    $validated = $request->validate([
        'email'    => 'required|email',
        'password' => 'required',
    ]);

    $token = $this->authRepo->login($validated);

    if (!$token) {
        return back()->withErrors(['email' => 'Invalid credentials']);
    }

    $user = Auth::user();

    switch ($user->role_id) {
        case 1:
            return redirect()->route('components.admin.dashboard')->with('token', $token);
        case 2:
            return redirect()->route('components.client.home')->with('token', $token);
        case 3:
            return redirect()->route('components.provider.dashboard')->with('token', $token);
        default:
            Auth::logout();
            return redirect()->route('login')->withErrors(['role' => 'Unauthorized role.']);
    }
}

    public function logout(Request $request)
    {
        $this->authRepo->logout();

        return redirect()->route('components.auth.login')->with('success', 'Logged out successfully');
    }
}
