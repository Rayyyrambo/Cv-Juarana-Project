<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $messages = Message::latest('created_at')->get();
        return view('pages.admin.masages.index', compact('messages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
     
        // return view('partials.publik.modal', compact('messages'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'user' => 'required|string|max:255',
            'email' => 'required|string|email|max:100|unique:massages,email',
            'description' => 'nullable|string',
            
        ]);
        $data['created_at'] = now();
        
        Message::create($data);
        return back()->with('success', 'Pesan Anda telah terkirim! Terima kasih sudah menghubungi kami.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
           try {
            $messages=Message::findOrFail($id);
            $messages->delete();
            return to_route('admin.masages.index')->with('success', 'Pesan berhasil di hapus');
           } catch (\Throwable $th) {
             return back()->with('error', $th->getMessage());
           }
    }
}
