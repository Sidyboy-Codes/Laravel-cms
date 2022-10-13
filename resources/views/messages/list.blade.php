@extends ('layout.console')

@section ('content')

<section class="w3-padding">

    <h2>Read Messages</h2>

    <table class="w3-table w3-stripped w3-bordered w3-margin-bottom">
        <tr class="w3-red">
            <th>User Name</th>
            <th>User Email</th>
            <th>User's Message</th>
            <!-- reply -->
            <th></th>
            <!-- delete -->
            <th></th>

        </tr>
        @foreach ($messages as $message)
        <tr>
            <td>{{$message->user_name}}</td>
            <td>
                {{$message->user_email}}
            </td>
            <td>
                {{$message->message}}
            </td>
            <td><a href="mailto:{{$message->user_email}}"><i class="bi bi-reply"></i></a></td>
            <td><a href="/console/messages/delete/{{$message->id}}"><i class="bi bi-trash3"></i></a></td>
        </tr>
        @endforeach
    </table>

</section>

@endsection