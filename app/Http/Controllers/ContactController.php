<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // Validasi data form
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
        ]);

        // Simpan data ke database menggunakan model
        $contact = new Contact();
        $contact->name = $validated['name'];
        $contact->email = $validated['email'];
        $contact->phone = $validated['phone'];
        $contact->save();

         // Tambahkan kode untuk debug
    // session()->flash('success', 'Pesan Anda telah terkirim!');
    // dd(session('success')); // Debug, pastikan nilai 'success' ter-set

        // Redirect atau lakukan tindakan lain setelah penyimpanan
        return redirect()->back()->with('success', 'Pesan Anda telah terkirim!');
    }
}