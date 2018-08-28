@extends('layout.master')
@section('content')
<section class="section card mb-5">

        <div class="card-body">

            <!--Section heading-->
            <h1 class="text-center my-5 h1">Add Game</h1>
            <form action="/admin/category" method="POST">
                {{ csrf_field() }}
                <!--Grid row-->
                <div class="row">
                    <div class="container">
                        <!--Grid column-->
                        <div class="col-md-6 mb-4">
                            <div class="md-form">
                                <input type="text" name="name" class="form-control">
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
                                        <select class="mdb-select" name="game">
                                            <option value="" disabled selected>Choose your option</option>
                                            <option value="1">Liên Minh Huyền Thoại</option>
                                            <option value="2">PUBG</option>
                                            <option value="3">CSGO</option>
                                        </select>
                                        <label>Game</label>
                                </div>
                            </div>  
                    </div>
                    
                </div>

                <div class="row">
                        <div class="container">
                            <!--Grid column-->
                            <div class="col-md-6 mb-4">
                                <div class="md-form">
                                    <input type="text" name="thumbnails" class="form-control">
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
                                <input type="text" name="description" class="form-control">
                                <label class="">Description </label>
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
@endsection