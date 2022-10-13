@extends ('layout.console')

@section ('content')

<section class="w3-padding">
  
  <!-- edit page -->
    <h2>Edit About</h2>

    <form method="post" action="/console/abouts/edit/{{$about->id}}" novalidate class="w3-margin-bottom">

        @csrf

        <div class="w3-margin-bottom">
            <label for="tagline">Tagline</label>
            <!-- getting added tagline  -->
            <input type="text" name="tagline" id="tagline" value="{{old('tagline', $about->tagline)}}" required> 

            @if ($errors->first('tagline'))
            <br>
            <span class="w3-text-red">{{$errors->first('tagline')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="description">description</label>
            <!-- getting added description -->
            <input type="text" name="description" id="description" value="{{old('description', $about->description)}}">

            @if ($errors->first('description'))
            <br>
            <span class="w3-text-red">{{$errors->first('description')}}</span>
            @endif
        </div>
       
        <!-- edit btn -->
        <button type="submit" class="w3-button w3-green">Edit About</button>

    </form>

    <a href="/console/abouts/list">Back to About List</a> 
    <!-- redirecting to about list page -->

</section>

@endsection
