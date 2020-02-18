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
                    <li class="breadcrumb-item active">Edit Magazine</li>
                </ol>
            </div>
            <h4 class="page-title">Edit Magazine</h4>
        </div><!--end page-title-box-->
    </div><!--end col-->
</div>


<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">  
                <form  action="{{url("update_magazine/".$magazine->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="row">
                    <div class="col-lg-6">

                        <div class="card">
                            <div class="card-body">
                                <h4 class="mt-0 header-title">Magazine Cover</h4>
                                <p class="text-muted mb-3">Magazine image only</p>
                            <input type="file" name="magazine_cover"   id="cover" class="dropify" data-default-file="{{url('/')}}/public/storage/magazine_cover/{{$magazine->magazine_cover}}" />
                            </div><!--end card-body-->
                        </div><!--end card-->

                        <div class="form-group row">
                            <label for="year" class="col-sm-2 col-form-label text-right">Year</label>
                            <div class="col-sm-10">
                                <input class="form-control" value="{{$magazine->year}}" type="text" name="year" placeholder="20"  id="year">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-right">Month</label>
                            <div class="col-sm-10">
                              <select name="month" class="select2 form-control lg-3 custom-select" style="width: 100%; height:36px;">
                                        <option>Select</option>
                                        <option @if($magazine->month == "jan"){{'selected'}} @endif value="jan">01-January</option>
                                        <option @if($magazine->month == "feb"){{'selected'}} @endif value="feb">02=February</option> 
                                        <option @if($magazine->month == "mar"){{'selected'}} @endif value="mar">03-March</option>
                                        <option @if($magazine->month == "apr"){{'selected'}} @endif value="apr">04-April</option> 
                                        <option @if($magazine->month == "may"){{'selected'}} @endif value="may">05-May</option>
                                        <option @if($magazine->month == "jun"){{'selected'}} @endif value="jun">06-June</option> 
                                        <option @if($magazine->month == "jul"){{'selected'}} @endif value="jul">07-July</option>
                                        <option @if($magazine->month == "aug"){{'selected'}} @endif value="aug">08-August</option> 
                                        <option @if($magazine->month == "sep"){{'selected'}} @endif value="sep">09-September</option>
                                        <option @if($magazine->month == "oct"){{'selected'}} @endif value="oct">10-October</option>
                                         <option @if($magazine->month == "nov"){{'selected'}} @endif value="nov">11-November</option>
                                        <option @if($magazine->month == "dec"){{'selected'}} @endif value="dec">12-December</option>
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
                                <input type="file" name="magazine_pdf" id="magazine_pdf" class="dropify"
                                data-default-file="{{url('/')}}/public/storage/magazine_pdf/{{$magazine->magazine_pdf}}" />                                                   
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