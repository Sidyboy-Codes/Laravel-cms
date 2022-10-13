@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Manage Education</h2>

    <table class="w3-table w3-stripped w3-bordered w3-margin-bottom">
        <tr class="w3-red">
            <th>Institution Name</th>
            <th>Location</th>
            <th>Degree</th>
            <th>Complete Date</th>
            <th>Info </th>
            <!-- edit -->
            <th></th>
            <!-- delete -->
            <th></th>
        </tr>
        @foreach ($educations as $education)
        <tr>
            <td>{{$education->institutename}}</td>
            <td>
                {{$education->location}}
            </td>
            <td>
                {{$education->degree}}
            </td>
            <td>
                {{$education->completedate}}
            </td>
            <td>
                {{$education->info}}
            </td>
            <td><a href="/console/educations/edit/{{$education->id}}"><i class="bi bi-pen"></i></a></td>
            <td><a href="/console/educations/delete/{{$education->id}}"><i class="bi bi-trash3"></i></a></td>
        </tr>
        @endforeach
    </table>

    <a href="/console/educations/add" class="add_btn">New Education</a>

</section>

@endsection