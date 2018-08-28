@extends('layout.master')
@section('content')
    <!-- Editable table -->
    <div class="card">
        <h3 class="card-header text-center font-weight-bold text-uppercase py-4">Category table</h3>
        <div class="card-body">
            <div id="table" class="table-editable">
                <span class="table-add float-right mb-3 mr-2"><a href="./category/create" class="text-success"><i class="fa fa-plus fa-2x" aria-hidden="true"></i></a></span>
                <table class="table table-bordered table-responsive-md table-striped text-center">
                    <tr>
                        <th class="text-center">Id</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">Game</th>
                        <th class="text-center">Description</th>
                        <th class="text-center">Thumbnail</th>
                        <th class="text-center">Created At</th>
                        <th class="text-center">Updated At</th>
                        <th class="text-center">Option</th>
                    </tr>
                    @foreach ($list_obj as $item)
                        <tr>
                            <td class="pt-3-half">{{$item->id}}</td>
                            <td class="pt-3-half">{{$item->name}}</td>
                            <td class="pt-3-half">{{$item->id}}</td>
                            <td class="pt-3-half">{{$item->description}}</td>
                            <td class="pt-3-half">
                                <img src="{{$item->thumbnail}}" alt="" width="200px">
                            </td>
                            <td class="pt-3-half">{{$item->created_at}}</td>
                            <td class="pt-3-half">{{$item->updated_at}}</td>
                            <td>
                                <span class="table-remove"><button type="button" class="btn btn-danger btn-rounded btn-sm my-0">Remove</button></span>
                            </td>
                        </tr>
                    @endforeach
                    
                </table>
            </div>
        </div>
    </div>
    <!-- Editable table -->
@endsection