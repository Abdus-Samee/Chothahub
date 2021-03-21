<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Notifications\UpdatedNotice;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);

        return view('dashboard')->with('posts', $user->documents);
    }

    public function markRead()
    {
        //auth()->user()->unreadNotifications->markAsRead();

        $notif_id = request('notif_id');
        $folder_id = request('folder_id');

        auth()->user()->unreadNotifications->find($notif_id)->markAsRead();

        return redirect('/folder/'.$folder_id);
    }
}
