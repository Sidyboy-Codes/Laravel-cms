@extends ('layout.console')

@section ('content')

<section>

    <ul id="dashboard">
        <li><a href="/console/projects/list">Manage Projects</a></li>
        <li><a href="/console/types/list">Manage Types</a></li>
        <li><a href="/console/users/list">Manage Users</a></li>
        <li><a href="/console/skills/list">Manage Skills</a></li>
        <li><a href="/console/experiences/list">Manage Experience</a></li>
        <li><a href="/console/abouts/list">Manage About me</a></li>
        <li><a href="/console/connects/list">Manage Connect me</a></li>
        <li><a href="/console/educations/list">Manage Education me</a></li>
        <li><a href="/console/messages/list">Read Messages</a></li>
    </ul>

</section>

@endsection
