@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Add Connect</h2>

    <form method="post" action="/console/connects/add" novalidate class="w3-margin-bottom">

        @csrf

        <div class="w3-margin-bottom">
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" value="{{old('title')}}" required>

            @if ($errors->first('title'))
            <br>
            <span class="w3-text-red">{{$errors->first('title')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="link">Link:</label>
            <input type="text" name="link" id="link" value="{{old('link')}}">

            @if ($errors->first('link'))
            <br>
            <span class="w3-text-red">{{$errors->first('link')}}</span>
            @endif
        </div>


        <button type="submit" class="w3-button w3-green">Add Connection</button>

    </form>

    <a href="/console/connects/list">Back to Connection's List</a>

</section>

@endsection