@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <!-- company logo image page -->
    <h2>Company Logo</h2>

    <div class="w3-margin-bottom">
        @if($experience->image)
            <img src="{{asset('storage/'.$experience->image)}}" width="200">
        @endif
    </div>

    <form action="/console/experiences/image/{{$experience->id}}" method="post"  novalidate class="w3-margin-bottom" enctype="multipart/form-data">

        @csrf
        <div class="w3-margin-bottom">
            <label for="image">Image:</label>
            <input type="file" name="image" id="image" value="{{old('image')}}" required>
            @if ($errors->first('image'))
                <br>
                <span class="w3-text-red">{{$errors->first('image')}}</span>
            @endif
        </div>

        <button type="submit" class="w3-button w3-green">Add Image</button>

    </form>

    <!-- redirecting to experiences list -->
    <a href="/console/experiences/list">Back to experience List</a>
</section>
@endsection
