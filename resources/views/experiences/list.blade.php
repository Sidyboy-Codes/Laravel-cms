@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <!-- experience list page -->
    <h2>Manage Experiences</h2>

    <table class="w3-table w3-stripped w3-bordered w3-margin-bottom">
        <tr class="w3-red">
            <th>Company Logo</th>
            <th>Company Name</th>
            <th>Position</th>
            <th>Job Role</th>
            <th>Star Date</th>
            <th>End Date</th>
            <th></th><!-- image -->
            <th></th><!-- edit -->
            <th></th><!-- delete -->
        </tr>
        @foreach ($experiences as $experience)
        <tr>
            <td>
                @if ($experience->image)
                <img src="{{asset('storage/'.$experience->image)}}" width="200">
                @endif
            </td>
            <td>{{$experience->company_name}}</td>
            <td>
                {{$experience->position}}
            </td>
            <td>
                {{$experience->job_role}}
            </td>
            <td>
                {{$experience->start_date}}
            </td>
            <td>
                {{$experience->end_date}}
            </td>
            <td><a href="/console/experiences/image/{{$experience->id}}"><i class="bi bi-camera"></a></td>
            <td><a href="/console/experiences/edit/{{$experience->id}}"><i class="bi bi-pen"></i></a></td>
            <td><a href="/console/experiences/delete/{{$experience->id}}"><i class="bi bi-trash3"></i></a></td>
        </tr>
        @endforeach
    </table>

    <!-- redirecting to add new experience page -->
    <a href="/console/experiences/add" class="add_btn">New Experience</a>
</section>
@endsection