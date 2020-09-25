@extends('layout')
@section('content')
<form action="{{ route('form-personal') }}" method="POST">
    @csrf
    <div><input type="text" name="name" id="" placeholder="full name"></div>
    <div>
        <label for="address" class="block">Address</label>
    </div>
    <div>
        <textarea name="address" id="" cols="30" rows="10"></textarea>
    </div>
    <div>
        <label for="gender">Male
            <input type="radio" name="gender" value="male">
        </label><br>
        <label for="gender">Female
            <input type="radio" name="gender" value="female">
        </label>
    </div>
    <div>
        <button class="bg-blue-500 px-4 py-2" type="submit">Submit Form</button>
    </div>
<input type="hidden" name="uri" value="{{ url()->current() }}">
</form>    
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@endsection
