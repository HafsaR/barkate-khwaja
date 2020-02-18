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
                    <li class="breadcrumb-item active">Upload Magazine</li>
                </ol>
            </div>
            <h4 class="page-title">Upload Magazine</h4>
        </div><!--end page-title-box-->
    </div><!--end col-->
</div>


<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">  
                <form  action="{{url("insert_magazine")}}" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="row">
                    <div class="col-lg-6">

                        <div class="card">
                            <div class="card-body">
                                <h4 class="mt-0 header-title">Magazine Cover</h4>
                                <p class="text-muted mb-3">Magazine image only</p>
                                <input type="file" name="magazine_cover" id="cover" class="dropify" data-default-file="public/backend_theme/image/magazine_cover/default.jpg" />
                            </div><!--end card-body-->
                        </div><!--end card-->

                        <div class="form-group row">
                            <label for="year" class="col-sm-2 col-form-label text-right">Year</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="year" placeholder="20"  id="year">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-right">Month</label>
                            <div class="col-sm-10">
                              <select name="month" class="select2 form-control lg-3 custom-select" style="width: 100%; height:36px;">
                                        <option>Select</option>
                                        <option value="jan">01-January</option>
                                        <option value="feb">02=February</option> 
                                        <option value="mar">03-March</option>
                                        <option value="apr">04-April</option> 
                                        <option value="may">05-May</option>
                                        <option value="jun">06-June</option> 
                                        <option value="jul">07-July</option>
                                        <option value="aug">08-August</option> 
                                        <option value="sep">09-September</option>
                                        <option value="oct">10-October</option>
                                         <option value="nov">11-November</option>
                                        <option value="dec">12-December</option>
                              </select>
                            </div>
                        </div>
                     
                        <div class="form-group row" >
                            <div class="col-sm-2"></div>
                            <div class="col-sm-10">
                        <button  type="submit" class="btn btn-dark">Upload Magazine</button>
                            </div>
                        </div>




                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mt-0 header-title">Select Magazine</h4>
                                <p class="text-muted mb-3">PDF file only</p>
                                <input type="file" name="magazine_pdf" id="magazine_pdf" class="dropify" />                                                   
                            </div><!--end card-body-->
                        </div><!--end card-->
                        </div>
                </div>
                </form>

            </div>
        </div>
    </div>
</div>


@endsection