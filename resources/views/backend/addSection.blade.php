@extends('backend.app');

@section('content')

<!-- page title -->
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="float-right">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Metrica</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Others</a></li>
                    <li class="breadcrumb-item active">Upload Magazine</li>
                </ol>
            </div>
            <h4 class="page-title">Add Section</h4>
        </div><!--end page-title-box-->
    </div><!--end col-->
</div>
    

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">  
                <form  action="{{url("add_section")}}" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="row">
                    <div class="col-lg-6">

                      

                        <div class="form-group row">
                            <label for="year" class="col-sm-2 col-form-label text-right">Section Name</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="section_name" placeholder="Section name"  id="year">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="year" class="col-sm-2 col-form-label text-right">Section Name (in Gujarati)</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="section_name_in_gujarati" placeholder="Section name"  id="year">
                            </div>
                        </div>


                       
                     
                        <div class="form-group row" >
                            <div class="col-sm-2"></div>
                            <div class="col-sm-10">
                        <button  type="submit" class="btn btn-dark">Upload Magazine</button>
                            </div>
                        </div>




                    </div>
                   
                </div>
                </form>

            </div>
        </div>
    </div>
</div>

@endsection