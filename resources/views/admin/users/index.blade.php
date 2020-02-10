@extends ('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header bg-primary">
                <h3>Users</h3>
                <a href="{{ route('user.create') }}" class="btn btn-info">Create New User</a>
            </div>
            <div class="card-body">
                <table width="100%" class="table table-hover table-responsive">
                    <tr>
                        <th>ID</th>
                        <th>Avatar</th>
                        <th>Name</th>
                        <th>Permission</th>
                        <th>Action</th>
                    </tr>

                    @if($users->count()>0)
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>
                                    <img src="{{ asset($user->profile->avatar) }}" class="border" alt="" width="60px" height="60px" style="border-radius:50%;">
                                </td>
                                <td>{{ $user->name }}</td>
                                <td>
                                    @if(Auth::id()!==$user->id)
                                    @if($user->admin)
                                        <a href="{{ route('user.not.admin',['id' => $user->id]) }}" class="btn btn-sm btn-info"><i class="far fa-edit"></i>Remove Admin</a>
                                    @else
                                        <a href="{{ route('user.admin',['id' => $user->id]) }}" class="btn btn-sm btn-success"><i class="far fa-edit"></i>Make Admin</a>
                                    @endif
                                    @endif
                                </td>
                                <td>
                                    @if(Auth::id()!==$user->id)
                                        <a href="{{ route('user.delete',['id' => $user->id]) }}" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i>Delete</a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td  colspan="4" class="text-center">No Users</td>
                        </tr>
                    @endif
                </table>
            </div>
        </div>
    </div>
@endsection