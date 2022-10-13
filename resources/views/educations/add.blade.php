@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Add Education</h2>

    <form method="post" action="/console/educations/add" novalidate class="w3-margin-bottom">

        @csrf

        <div class="w3-margin-bottom">
            <label for="institutename">Institution Name</label>
            <input type="title" name="institutename" id="institutename" value="{{old('institutename')}}" required>

            @if ($errors->first('institutename'))
            <br>
            <span class="w3-text-red">{{$errors->first('institutename')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="location">Location</label>
            <input type="title" name="location" id="location" value="{{old('location')}}" >

            @if ($errors->first('location'))
            <br>
            <span class="w3-text-red">{{$errors->first('location')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="degree">Degree</label>
            <input type="title" name="degree" id="degree" value="{{old('degree')}}">

            @if ($errors->first('degree'))
            <br>
            <span class="w3-text-red">{{$errors->first('degree')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="completedate">Complete date</label>
            <input type="date" name="completedate" id="completedate" value="{{old('completedate')}}">

            @if ($errors->first('completedate'))
            <br>
            <span class="w3-text-red">{{$errors->first('completedate')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="info">Info:</label>
            <input type="text" name="info" id="info" value="{{old('info')}}">

            @if ($errors->first('info'))
            <br>
            <span class="w3-text-red">{{$errors->first('info')}}</span>
            @endif
        </div>


        <button type="submit" class="w3-button w3-green">Add Education</button>

    </form>

    <a href="/console/educations/list">Back to Education's List</a>

</section>

@endsection