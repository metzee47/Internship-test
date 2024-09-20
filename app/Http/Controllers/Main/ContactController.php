<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('contact.index', ['contacts' => Contact::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $contact = new Contact();
        return view('contact.create', ['contact' => $contact]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ContactRequest $request)
    {
        $data = $request->validated();

        $contact = Contact::create($data);

        return redirect()->route('contacts.index')->with('nouveau', 'Nouveau Contact crée avec succes');
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
        $contact = Contact::findOrFail($id);
        return view('contact.edit', ['contact' => $contact]);
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ContactRequest $request, string $id)
    {
        $data = $request->validated();

        $contact = Contact::findOrFail($id);
        $contact->update($data);

        return redirect()->route('contacts.index')->with('modification', 'Contact modifié avec succes');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();
        return redirect(route('contacts.index'))->with(['suppression' => 'Contact supprimé avec succes']);
    }
}
