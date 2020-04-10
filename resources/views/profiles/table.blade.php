<div class="table-responsive-sm">
    <table class="table table-striped" id="profiles-table">
        <thead>
            <tr>
                <th>User Id</th>
        <th>Title</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Phone Number</th>
        <th>Email</th>
        <th>Address</th>
        <th>Date Of Birth</th>
        <th>Career Description</th>
        <th>Personal Website</th>
        <th>Gender</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($profiles as $profile)
            <tr>
                <td>{{ $profile->user_id }}</td>
            <td>{{ $profile->title }}</td>
            <td>{{ $profile->first_name }}</td>
            <td>{{ $profile->last_name }}</td>
            <td>{{ $profile->phone_number }}</td>
            <td>{{ $profile->email }}</td>
            <td>{{ $profile->address }}</td>
            <td>{{ $profile->date_of_birth }}</td>
            <td>{{ $profile->career_description }}</td>
            <td>{{ $profile->personal_website }}</td>
            <td>{{ $profile->gender }}</td>
                <td>
                    {!! Form::open(['route' => ['profiles.destroy', $profile->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('profiles.show', [$profile->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('profiles.edit', [$profile->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>