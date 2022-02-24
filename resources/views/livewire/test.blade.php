<div>

    <p>User: {{auth()->user()->name}}</p>
    <p>Companies:
    <ul>
        @foreach(auth()->user()->companies as $company)
        <li>{{$company->name}}</li>
        @endforeach
    </ul>
    </p>


    <button wire:click.prevent="submit">Submit</button>
</div>