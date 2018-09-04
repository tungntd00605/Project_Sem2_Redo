@extends('layout.master')
@section('content')
    <!-- Editable table -->
    <div class="card">
        <h3 class="card-header text-center font-weight-bold text-uppercase py-4">Product table</h3>
        <div class="card-body">
            <div id="table" class="table-editable">
                <span class="table-add float-right mb-3 mr-2"><a href="./product/create" class="text-success"><i class="fa fa-plus fa-2x" aria-hidden="true"></i></a></span>
                <div class="row">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="checkAll">
                        <label class="custom-control-label" for="checkAll">Check All</label>
                    </div>
                    <div class="col">
                        <button type="button" class="btn btn-danger btn-rounded btn-sm my-0" id="btn-apply">Remove Selected</button>
                    </div>
                    <div class="col">
                        <form action="/admin/product" method="GET" name="category-form">
                            <select class="mdb-select colorful-select dropdown-primary" name="categoryId">
                                <option value="" choosed>Choose game</option>
                                @foreach ($big_category as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                @endforeach
                            </select>
                        </form>
                        
                    </div>
                    
                </div>
                
                

                <div class="alert alert-success d-none" role="alert" id="messageSuccess"></div>
                <div class="alert alert-danger d-none" role="alert" id="messageError"></div>
                <table class="table table-bordered table-responsive-md table-striped text-center">
                    <tr>
                        <th class="text-center"></th>
                        <th class="text-center">Name</th>
                        <th class="text-center">Game</th>
                        <th class="text-center">Price</th>
                        <th class="text-center">Thumbnails</th>
                        <th class="text-center">Discount</th>
                        <th class="text-center">Description</th>
                        <th class="text-center">Option</th>
                    </tr>
                    @foreach ($list_obj as $item)
                    <tr id="row-{{$item->id}}">
                        <td class="pt-3-half"> 
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input check-item" id="check-{{$item->id}}">
                                <label class="custom-control-label" for="check-{{$item->id}}"></label>
                            </div>
                        <td class="pt-3-half">{{$item->name}}</td>
                        <td class="pt-3-half">{{$item->category->name}}</td>
                        <td class="pt-3-half">{{$item->price}}</td>
                        <td class="pt-3-half"><img src="{{$item->thumbnail}}" alt="" width="200px"></td>
                        <td class="pt-3-half">{{$item->discount}}</td>
                        <td class="pt-3-half">{{$item->description}}</td>
                        <td>
                            <a href="/admin/product/{{$item->id}}/edit">Edit</a>
                            <form action="/admin/product/{{$item->id}}" method="POST">
                                @method('DELETE')
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-danger btn-rounded btn-sm my-0">Remove</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    
                </table>
            </div>
        </div>
    </div>


    <script src="{{asset('js/product.js')}}"></script>

@endsection