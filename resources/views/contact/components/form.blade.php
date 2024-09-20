

@section('content')
    <a href="{{route('contacts.index')}}">
        <button>Retour au listing</button>
    </a>
    <form class="crud-form" action="{{$contact->exists ? route('contacts.update', $contact->id) : route('contacts.store')}}" method="post">
        @csrf

        @method($contact->exists ? 'put' : 'post')
        <h1 class="title">
            {{$contact->exists ? 'Modification' : 'Nouveau'}} Contact

        </h1>
        @include('contact.components.field', ['label' => 'Nom', 'name'=> 'name', 'placeholder' => 'Charles Patochiq', 'value' => $contact->name])
        @include('contact.components.field', ['label' => 'Telephone', 'name'=> 'phone', 'placeholder' => '+22178.....', 'value' => $contact->phone])
        @include('contact.components.field', ['label' => 'Email', 'name'=> 'email', 'placeholder' => 'email@email.com', 'value' => $contact->email])
        <div>
            <button class="crud-button">
                {{$contact->exists ? 'Modifier' : 'Ajouter'}}
            </button>
        </div>
    </form>
@endsection