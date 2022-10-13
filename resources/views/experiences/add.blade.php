@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <!-- add experience page -->
    <h2>Add Experience</h2>

    <form action="/console/experiences/add" method="post"  novalidate class="w3-margin-bottom">

        @csrf

        <div class="w3-margin-bottom">
            <label for="company_name">Company Name</label>
            <input type="text" name="company_name" id="company_name" value="{{old('company_name')}}" required>

            @if ($errors->first('company_name'))
            <br>
            <span class="w3-text-red">{{$errors->first('company_name')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="position">Position</label>
            <input type="text" name="position" id="position" value="{{old('position')}}">

            @if ($errors->first('position'))
            <br>
            <span class="w3-text-red">{{$errors->first('position')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="job_role">Job Role</label>
            <input type="text" name="job_role" id="job_role" value="{{old('job_role')}}">

            @if ($errors->first('job_role'))
            <br>
            <span class="w3-text-red">{{$errors->first('job_role')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="start_date">Start Date</label>
            <input type="date" name="start_date" id="start_date" value="{{old('start_date')}}">

            @if ($errors->first('start_date'))
            <br>
            <span class="w3-text-red">{{$errors->first('start_date')}}</span>
            @endif
        </div>

        <div class="w3-margin-bottom">
            <label for="end_date">End Date</label>
            <input type="date" name="end_date" id="end_date" value="{{old('end_date')}}">

            @if ($errors->first('end_date'))
            <br>
            <span class="w3-text-red">{{$errors->first('end_date')}}</span>
            @endif
        </div>


        <button type="submit" class="w3-button w3-green">Add Experience</button>

    </form>

    <!-- redirecting to experiences list -->
    <a href="/console/experiences/list">Back to Experience List</a>
</section>

@endsection