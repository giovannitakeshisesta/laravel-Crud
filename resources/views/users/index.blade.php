@extends('users.layout')

@section('content')
    <div class="">

        <h2>Laravel CRUD </h2>
        <a class=" btn btn-success" href="{{ route('users.create') }}"> Create New user</a>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
        @foreach ($users as $user)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    <form action="{{ route('users.destroy', $user->id) }}" method="POST">
                        {{-- show details --}}
                        <a class="btn btn-info" href="{{ route('users.show', $user->id) }}">Show</a>

                        {{-- edit --}}
                        <a class="btn btn-primary" href="{{ route('users.edit', $user->id) }}">Edit</a>

                        {{-- delete --}}
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>


    {!! $users->links() !!}
@endsection
