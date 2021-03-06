@extends('layouts.app', ['activePage' => 'account', 'titlePage' => 'User'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <!--TITEL SECTION-->
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title ">Here you can manage Users</h4>
                            <p class="card-category"> You have {{ $users->count() }} Users</p>
                        </div>
                        <div class="card-body">
                            <!--ADD USERS SECTION-->
                            <div class="row">
                                <div class="col-12 text-right">
                                    <a href="{{ route('users.create') }}" class="btn btn-sm btn-primary">Add
                                        user</a>
                                </div>
                            </div>
                            <!--STATIC INFO-->
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class=" text-primary">
                                        <tr>
                                            <th>
                                                Name
                                            </th>
                                            <th>
                                                Email
                                            </th>
                                            <th>
                                                Creation date
                                            </th>
                                            <th class="text-right">
                                                Actions
                                            </th>
                                        </tr>
                                    </thead>
                                    <!--DYNAMIC INFO-->
                                    @foreach ($users as $user)
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <a href="{{ route('users.show', $user) }}"> {{ $user->name }} </a>
                                                </td>
                                                <td>
                                                    {{ $user->email }}
                                                </td>
                                                <td>
                                                    {{ $user->created_at }}
                                                </td>
                                                <!-- EDIT -->
                                                <td class="td-actions text-right">
                                                    <form action="{{ route('users.destroy', $user) }}" method="POST">
                                                        @csrf
                                                        @method('delete')
                                                        <a rel="tooltip" class="btn btn-success btn-link"
                                                            href="{{ route('users.edit', $user) }}" data-original-title=""
                                                            title="">
                                                            <i class="material-icons">edit</i>
                                                            <div class="ripple-container"></div>
                                                        </a>
                                                        <button rel="tooltip" class="btn btn-danger btn-round"
                                                            type="submit">
                                                            <i class="material-icons">delete</i>
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        </tbody>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
