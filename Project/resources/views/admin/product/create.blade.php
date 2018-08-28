@extends('layout.master')
@section('content')
<section class="section card mb-5">

        <div class="card-body">

            <!--Section heading-->
            <h1 class="text-center my-5 h1">Add  Product</h1>
            <form action="/admin/product" method="POST">
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
                                        <select class="mdb-select" id="game-option">
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

                <div class="row" id="lol-rank" hidden>
                        <div class="container">
                                <div class="col-md-6 mb-4">
                                    <div class="md-form">
                                            <select class="mdb-select" name="categoryId" id="lol-rank-option">
                                                <option value="" disabled selected>Choose your option</option>
                                                <option value="0">Chưa rank</option>
                                                <option value="4">Đồng đoàn</option>
                                                <option value="5">Bạc đoàn</option>
                                                <option value="6">Vàng đoàn</option>
                                                <option value="7">Bạch kim</option>
                                                <option value="8">Kim cương</option>
                                                <option value="9">Cao thủ</option>
                                                <option value="10">Thách đấu</option>
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
                                <input type="text" name="price" class="form-control">
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
                                <input type="text" name="discount" class="form-control">
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
                                <input type="text" name="description" class="form-control">
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
                                        <textarea class="form-control rounded-0" name="detail" rows="10"></textarea>
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
        $(document).ready(function(){
            $("#game-option").change(()=>{
                if($("#game-option").val() == 1){
                    $("#lol-rank").removeAttr("hidden");
                }
            });
        });
    </script>
@endsection