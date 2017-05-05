@extends('layouts.master')

@section('content')
    <h1 class="mytext">Department List</h1>
    <div class="row">
        <div class="col-md-12">

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            {!! Form::open(['url' => 'department/store','class'=>'form-horizontal']) !!}

            <div class="form-group">
                {{Form::label('name', 'enter department name', ['class' => 'col-sm-2 control-label'])}}
                <div class="col-sm-10">
                    {{Form::text('name', '',['class'=>'form-control'])}}
                </div>
            </div>
            <div class="form-group">
                {{Form::label('code', 'enter department code', ['class' => 'col-sm-2 control-label'])}}
                <div class="col-sm-10">
                    {{Form::text('code', '',['class'=>'form-control'])}}
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    {{Form::submit('Save',['class'=>'btn btn-primary'])}}
                </div>
            </div>
            {!! Form::close() !!}
        </div>
        <div class="col-md-12">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Code</th>
                    <th>my date</th>
                    <th>Created_at</th>
                    <th>Updated_at</th>
                </thead>
                <tbody>
                @foreach ($departments as $key=> $department)
                    <tr>
                        <td>{{++$key}}</td>
                        <td>{{$department->name}}</td>
                        <td>{{$department->code}}</td>
                        <td>{{$department->my_date->diffForHumans(\Carbon\Carbon::now())}}</td>
                        <td>{{$department->created_at->diffForHumans(\Carbon\Carbon::now())}}</td>
                        <td>{{$department->updated_at->toDayDateTimeString()}}</td>
                    </tr>
                @endforeach


                </tbody>
            </table>
            {{ $departments->links() }}
        </div>
    </div>
@endsection


