<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    // Get all contacts from database
    public function index()
    {
        return Contact::all();
    }

    // Create a new contact
    public function store(ContactRequest $request)
    {
        $data = $request->validated();

        $contact = Contact::create($data);
        return response()->json($contact, 201);
    }

    // Get a specific contact
    public function show($id)
    {
        $contact = Contact::findOrFail($id);
        return response()->json($contact);
    }

    // Update a specific contact
    public function update(ContactRequest $request, $id)
    {
        $data = $request->validated();

        $contact = Contact::findOrFail($id);
        $contact->update($data);

        return response()->json($contact);
    }

    // Remove a speciifc contact
    public function destroy($id)
    {
        $contact = Contact::findOrFail($id);
        $contact->delete();

        return response()->json(null, 204);
    }
}
