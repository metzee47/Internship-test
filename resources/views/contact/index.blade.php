@extends('layout')

@section('title')
    Listing des Contacts
@endsection

@section('content')
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Telephone</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $contact)
                <tr>
                    <td>{{$contact->name}}</td>
                    <td>{{$contact->phone}}</td>
                    <td>{{$contact->email}}</td>
                    <td class="actions">
                        <a href="{{route('contacts.edit', $contact->id)}}">
                            <button class="edit">Modifier</button>
                        </a>
                        <form action="{{route('contacts.destroy', $contact->id)}}" method="post">
                            @csrf
                            @method('delete')
                            <button class="delete">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection