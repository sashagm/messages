<?php

namespace Sashagm\Messages\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Sashagm\Messages\Models\Dialog;
use App\Http\Controllers\Controller;

class DialogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dialogs = Dialog::where('user1_id', auth()->id())
            ->orWhere('user2_id', auth()->id())
            ->orderBy('updated_at', 'desc')
            ->get();

        return view('messages::dialogs.index', compact('dialogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();

        return view('messages::dialogs.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dialog = Dialog::create([
            'user1_id' => auth()->id(),
            'user2_id' => $request->user2_id,
            'type'     => 0,
        ]);

        return redirect()->route('messages::dialogs.show', $dialog->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Dialog $dialog)
    {
        $messages = $dialog->messages()->orderBy('created_at')->get();
        
        $user = auth()->user();
        if ($dialog->user1_id == $user->id || $dialog->user2_id == $user->id) {


        } else {
            abort(403, 'Unauthorized'); // выводим ошибк
        }



        return view('messages::dialogs.show', compact('dialog', 'messages'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $dialog = Dialog::where($id)->first();
        dd($dialog);
    }
}
