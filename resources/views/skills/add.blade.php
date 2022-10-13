@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Add Skill</h2>

    <form method="post" action="/console/skills/add" novalidate class="w3-margin-bottom">

        @csrf

        <div class="w3-margin-bottom">
            <label for="skill_name">Skill Name</label>
            <input type="title" name="skill_name" id="skill_name" value="{{old('skill_name')}}" required>

            @if ($errors->first('skill_name'))
            <br>
            <span class="w3-text-red">{{$errors->first('skill_name')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="skill_level">Skill Level:</label>
            <input type="range" name="skill_level" id="skill_level" value="{{old('skill_level')}}">

            @if ($errors->first('skill_level'))
            <br>
            <span class="w3-text-red">{{$errors->first('skill_level')}}</span>
            @endif
        </div>


        <button type="submit" class="w3-button w3-green">Add Skill</button>

    </form>

    <a href="/console/skills/list">Back to Skill's List</a>

</section>

@endsection