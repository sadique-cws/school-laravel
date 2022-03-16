@extends('base')


@section('content')
    <div class="container">

        <div class="row">
            <div class="col-3">
                @include('side')
            </div>
            <div class="col-9">
                <form action="{{ route('student.update',['student'=>$student]) }}" method="POST">
                    @method("put")
                    @csrf
                    <div class="mb-3">
                        <label for="">Name</label>
                        <input type="text" name="name" value="{{ $student->name }}" class="form-control @error('name') is-invalid @enderror">
                        @error('name')
                            <p class="text-danger small">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="">contact</label>
                        <input type="text" name="contact" value="{{ $student->contact }}" class="form-control @error('contact') is-invalid @enderror">
                        @error('contact')
                            <p class="text-danger small">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="">email</label>
                        <input type="text" name="email" value="{{ $student->email }}" class="form-control @error('email') is-invalid @enderror">
                        @error('email')
                            <p class="text-danger small">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="">city</label>
                        <input type="text" name="city" value="{{ $student->city }}" class="form-control @error('city') is-invalid @enderror">
                        @error('city')
                            <p class="text-danger small">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="">state</label>
                        <input type="text" name="state" value="{{ $student->state }}" class="form-control @error('state') is-invalid @enderror">
                        @error('state')
                            <p class="text-danger small">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <input type="submit" value="create student record" class="btn btn-success w-100">
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection