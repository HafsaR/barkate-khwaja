@extends('backend.app')

@section('content')

<!-- page title -->
<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="float-right">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Metrica</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Others</a></li>
                    <li class="breadcrumb-item active">Edit Section</li>
                </ol>
            </div>
            <h4 class="page-title">Edit Section</h4>
        </div><!--end page-title-box-->
    </div><!--end col-->
</div>


<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">  
                <form  action="{{url("update_section/".$section->section_id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="row">
                    <div class="col-lg-6">

                       
                        <div class="form-group row">
                            <label for="n" class="col-sm-2 col-form-label text-right">Section Name</label>
                            <div class="col-sm-10">
                                <input class="form-control" value="{{$section->section_name}}" type="text" name="year" placeholder="Section name"  id="n">
                            </div>
                        </div>

                        
                        <div class="form-group row">
                            <label for="ng" class="col-sm-2 col-form-label text-right">Section Name(in Gujarati)</label>
                            <div class="col-sm-10">
                                <input class="form-control" value="{{$section->section_name_in_gujarati}}" type="text" name="section_name_in_gujarati" placeholder="Section name"  id="ng">
                            </div>
                        </div>


                      
                     
                        <div class="form-group row" >
                            <div class="col-sm-2"></div>
                            <div class="col-sm-10">
                        <button  type="submit" class="btn btn-dark">Upload Section</button>
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