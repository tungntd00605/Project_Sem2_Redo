@extends('layout.master')
@section('content')
    <!-- Editable table -->
    <div class="card">
        <h3 class="card-header text-center font-weight-bold text-uppercase py-4">Product table</h3>
        <div class="card-body">
            <div id="table" class="table-editable">
                <span class="table-add float-right mb-3 mr-2"><a href="./product/create" class="text-success"><i class="fa fa-plus fa-2x" aria-hidden="true"></i></a></span>
                <table class="table table-bordered table-responsive-md table-striped text-center">
                    <tr>
                        <th class="text-center"></th>
                        <th class="text-center">Name</th>
                        <th class="text-center">Game</th>
                        <th class="text-center">Price</th>
                        <th class="text-center">Thumbnails</th>
                        <th class="text-center">Discount</th>
                        <th class="text-center">Description</th>
                        <th class="text-center">Created At</th>
                        <th class="text-center">Updated At</th>
                        <th class="text-center">Option</th>
                    </tr>
                    @foreach ($list_obj as $item)
                    <tr>
                        <td class="pt-3-half"> 
                        </td>
                        <td class="pt-3-half">{{$item->name}}</td>
                        <td class="pt-3-half">{{$item->category->name}}</td>
                        <td class="pt-3-half"><img src="{{$item->thumbnails}}" alt="" width="200px"></td>
                        <td class="pt-3-half">{{$item->price}}</td>
                        <td class="pt-3-half">{{$item->discount}}</td>
                        <td class="pt-3-half">{{$item->description}}</td>
                        <td class="pt-3-half">
                                {{$item->created_at}}
                        </td>
                        <td class="pt-3-half">
                                {{$item->updated_at}}
                        </td>
                        <td>
                            <a href="/admin/product/{{$item->id}}/edit">Edit</a>
                            <a href="/admin/product/{{$item->id}}/edit">Detele</a>
                        </td>
                    </tr>
                    @endforeach
                    
                </table>
            </div>
        </div>
    </div>
    <!-- Editable table -->
@endsection