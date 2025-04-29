<?php

namespace App\Http\Controllers;

use App\Models\reservation;
use App\Repositories\Interfaces\CommentInterface;
use App\Repositories\Interfaces\UserInterface;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    protected $commentRepo;
    protected $userRepo;

    public function __construct(CommentInterface $commentRepo,UserInterface $userRepo){
        $this->commentRepo=$commentRepo;
        $this->userRepo=$userRepo;

    }
    public function store(Request $request)
    {
        $user = auth()->user();
    
        // Check if user has completed a reservation for the provider
        $hasReserved = reservation::where('user_id', $user->id)
            ->where('provider_id', $request->provider_id)
            ->where('status', 'completed')
            ->exists();
    
        if (!$hasReserved) {
            return back()->with('error', 'You must complete a reservation before leaving a comment.');
        }
    
        $this->commentRepo->store([
            'user_id' => $user->id,
            'provider_id' => $request->provider_id,
            'rating' => $request->rating,
            'comment' => $request->comment,
        ]);
    
        return back()->with('success', 'Thanks for your review!');
    }

    public function Reviews(){
        $data = $this->userRepo->getAuthenticatedProviderWithComments(4);
        return view('components.provider.Reviews',[
            'provider' => $data['provider'],
            'comments' => $data['comments'],
        ]);
    }

    public function destroy($id){
        $user=$this->commentRepo->destroy($id);
        return redirect()->back()->with('success', 'comment deleted successfully.');
    }

    public function delete($id)
    {
        $comment = $this->commentRepo->findById($id);

        if (!$comment || auth()->id() !== $comment->user_id) {
            abort(403);
        }

        $this->commentRepo->delete($id);

        return back()->with('success', 'Comment deleted successfully.');
    }
}
    
