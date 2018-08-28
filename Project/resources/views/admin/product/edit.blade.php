@extends('layout.master')
@section('content')
<section class="section card mb-5">

<h1>{{$game->id}}</h1>
        <div class="card-body">

            <!--Section heading-->
            <h1 class="text-center my-5 h1">Edit  Product</h1>
            <form action="/admin/product/{{$obj->id}}" method="POST">
                @method('PUT')
                {{ csrf_field() }}
                <!--Grid row-->
                <div class="row">
                    <div class="container">
                        <!--Grid column-->
                        <div class="col-md-6 mb-4">
                            <div class="md-form">
                                <input type="text" name="name" value="{{$obj->name}}" class="form-control">
                                <label class="">Name </label>
                            </div>   
                        </div>    
                        <!--Grid column-->
                    </div>
                </div>
                <!--Grid row-->

                <div class="row">
                    <div class="container">
                            <div class="col-md-6 mb-4">
                                <div class="md-form">
                                        <select class="mdb-select" name="categoryId" id="game-option">
                                            <option value="" disabled>Choose your option</option>
                                            @foreach($big_category as $item)
                                                <option value="{{$item->id}}" {{$item->id==$game->parent->id ? 'selected' : 'disabled'}}>{{$item->name}}</option>
                                            @endforeach
                                        </select>
                                        <label>Game</label>
                                </div>
                            </div>  
                    </div>
                </div>

                <div class="row" id="lol-rank">
                        <div class="container">
                                <div class="col-md-6 mb-4">
                                    <div class="md-form">
                                            <select class="mdb-select" name="categoryId" id="lol-rank-option">
                                                <option value="" disabled selected>Choose your option</option>
                                                @foreach($game->parent->children as $item)
                                                    <option value="{{$item->id}}" {{$item->id==$game->id ? 'selected' : ''}}>{{$item->name}}</option>
                                                @endforeach
                                            </select>
                                            <label>Rank</label>
                                    </div>
                                </div>  
                        </div>
                        
                </div>
                    
                

                <div class="row">
                        <div class="container">
                            <!--Grid column-->
                            <div class="col-md-6 mb-4">
                                <div class="md-form">
                                    <input type="text" name="thumbnails" value="{{$obj->thumbnails}}" class="form-control">
                                    <label class="">Thumbnails </label>
                                </div>   
                            </div>    
                            <!--Grid column-->
                        </div>
                </div>

                <div class="row">
                    <div class="container">
                        <!--Grid column-->
                        <div class="col-md-6 mb-4">
                            <div class="md-form">
                                <input type="text" name="price" value="{{$obj->price}}" class="form-control">
                                <label class="">Price </label>
                            </div>   
                        </div>    
                        <!--Grid column-->
                    </div>
                </div>

                <div class="row">
                    <div class="container">
                        <!--Grid column-->
                        <div class="col-md-6 mb-4">
                            <div class="md-form">
                                <input type="text" name="discount" value="{{$obj->discount}}" class="form-control">
                                <label class="">Discount </label>
                            </div>   
                        </div>    
                        <!--Grid column-->
                    </div>
                </div>


                <div class="row">
                    <div class="container">
                        <!--Grid column-->
                        <div class="col-md-6 mb-4">
                            <div class="md-form">
                                <input type="text" name="description" value="{{$obj->description}}" class="form-control">
                                <label class="">Description </label>
                            </div>   
                        </div>    
                        <!--Grid column-->
                    </div>
                </div>


                <div class="row">
                    <div class="container">
                        <!--Grid column-->
                        <div class="col-md-6 mb-4">
                            
                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Detail</label>
                                        <textarea class="form-control rounded-0" name="detail" rows="10">{{$obj->detail}}"</textarea>
                                    </div>
                               
                        </div>    
                        <!--Grid column-->
                    </div>
                </div>

                <div class="row">
                    <div class="container">
                        <div class="col-md-6 mb-4">
                            <button type="submit" value="Save" class="btn btn-fill btn-success">Save
                                <div class="ripple-container"></div>
                            </button>
                            <button type="reset" value="Reset" class="btn btn-fill btn-rose">Reset
                                <div class="ripple-container"></div>
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <!--Section: Inputs-->
    <script>
        
    </script>
@endsection