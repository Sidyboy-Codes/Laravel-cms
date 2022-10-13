@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Manage Skills</h2>

    <table class="w3-table w3-stripped w3-bordered w3-margin-bottom">
        <tr class="w3-red">
            <th>Logo</th>
            <th>Skill Name</th>
            <th>Skill Level</th>
            <!-- image -->
            <th></th>
            <!-- edit -->
            <th></th>
            <!-- delete -->
            <th></th>
        </tr>
        @foreach ($skills as $skill)
        <tr>
            <td>
                @if ($skill->image)
                <img src="{{asset('storage/'.$skill->image)}}" width="200">
                @endif
            </td>
            <td>{{$skill->skill_name}}</td>
            <td>
                {{$skill->skill_level}}
            </td>
            <td><a href="/console/skills/image/{{$skill->id}}"><i class="bi bi-camera"></i></a></td>
            <td><a href="/console/skills/edit/{{$skill->id}}"><i class="bi bi-pen"></i></a></td>
            <td><a href="/console/skills/delete/{{$skill->id}}"><i class="bi bi-trash3"></i></a></td>
        </tr>
        @endforeach
    </table>

    <a href="/console/skills/add" class="add_btn">New Skill</a>

</section>

@endsection