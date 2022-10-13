@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <!-- add page -->
    <h2>Add About</h2>

    <form action="/console/abouts/add" method="post"  novalidate class="w3-margin-bottom">

        @csrf

        <div class="w3-margin-bottom">
            <label for="tagline">Tagline</label>
            <input type="text" name="tagline" id="tagline" value="{{old('tagline')}}" required>

            @if ($errors->first('tagline'))
            <br>
            <span class="w3-text-red">{{$errors->first('tagline')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="description">Description</label>
            <input type="text" name="description" id="description" value="{{old('description')}}">

            @if ($errors->first('description'))
            <br>
            <span class="w3-text-red">{{$errors->first('description')}}</span>
            @endif
        </div>
        <button type="submit" class="w3-button w3-green">Add About</button>

    </form>
    <!-- redirecting to about list page -->
    <a href="/console/abouts/list">Back to About List</a>
</section>

@endsection