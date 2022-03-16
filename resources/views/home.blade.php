@extends('base')


@section('content')
    <div class="container-fluid">

        <div class="row">
            <div class="col-3">
                @include('side')
            </div>
            <div class="col-9">
                <table class="table table-sm">
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>email</th>
                        <th>contact</th>
                        <th>city</th>
                        <th>state</th>
                        <td>Action</td>
                    </tr>
                    @foreach ($students as $std)
                        <tr>
                            <td>{{ $std->id }}</td>
                            <td>{{ $std->name }}</td>
                            <td>{{ $std->email }}</td>
                            <td>{{ $std->contact }}</td>
                            <td>{{ $std->city }}</td>
                            <td>{{ $std->state }}</td>
                            <td class="d-flex">
                                <form action="{{ route('student.destroy', ['student'=> $std]) }}" method="POST">
                                    @csrf
                                    @method("delete")
                                    <input type="submit" class="btn btn-danger m-1" value="Delete">
                                </form>
                                <a href="{{ route('student.show',['student'=>$std]) }}" class="btn btn-success m-1">View</a>
                                <a href="{{ route('student.edit',['student'=>$std]) }}" class="btn btn-info m-1">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>

    </div>
@endsection