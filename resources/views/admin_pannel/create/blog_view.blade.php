@extends('admin_pannel.layouts.main')
@section('body')


    <div class="container-fluid">

        <div class="table-responsive">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">S.No</th>
                        <th scope="col">Id</th>
                        <th scope="col">Blog Title</th>
                        <th scope="col">User Name</th>
                        <th scope="col">Approval</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($blogs as $key=>$blog)
                    <tr class="">
                        <td scope="row">{{$key+1}}</td>
                        <td>{{$blog->id}}</td>
                        <td>{{$blog->tilte}}</td>
                        <td>{{$blog->user_id}}</td>
                        <td>{{$blog->approve}}</td>
                        <td>R1C3</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


@endsection


