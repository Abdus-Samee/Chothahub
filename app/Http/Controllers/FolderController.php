<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Folder;
use App\Models\Notice;
use App\Notifications\UpdatedNotice;

class FolderController extends Controller
{
    public function index($id){
        $folder = Folder::find($id);

        return view('document.view')->with(['file'=> $folder->documents, 'notices' => $folder->notices, 'id' => $id]);
    }

    public function notice(){
        $notice = new Notice();
        $notice->text = request('notice');
        $notice->folder_id = request('folder_id');
        $notice->save();

        $id = request('folder_id');

        $users = User::all();
        $folder = Folder::find($id);

        // foreach($users as $user){
        //     if(auth()->user()->id !== $user->id) $user->notify(new UpdatedNotice($folder));
        // }

        return redirect('/folder/'.$id);
    }
}
