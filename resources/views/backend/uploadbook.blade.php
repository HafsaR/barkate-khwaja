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
                    <li class="breadcrumb-item active">Upload Book</li>
                </ol>
            </div>
            <h4 class="page-title">Upload Book</h4>
        </div><!--end page-title-box-->
    </div><!--end col-->
</div>


<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">        
               
            <form action="{{url("insert_book")}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="mt-0 header-title">Book Cover</h4>
                                <p class="text-muted mb-3">Cover image only</p>
                                <input type="file" name="book_cover" id="cover" class="dropify" data-default-file="public/backend_theme/image/book_cover/default.jpg" />
                            </div><!--end card-body-->
                        </div><!--end card-->
                        <div class="form-group row">
                            <label for="pages" class="col-sm-2 col-form-label text-right">Pages</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="pages" placeholder="Total pages" id="pages">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label text-right">Book Section</label>
                            <div class="col-sm-10">
                              <select name="book_section" class="select2 form-control lg-3 custom-select" style="width: 100%; height:36px;">
                                        <option>Select</option>
                                        <optgroup label="Alaskan/Hawaiian Time Zone">
                                            <option value="AK">Alaska</option>
                                            <option value="HI">Hawaii</option>
                                        </optgroup>
                                        <optgroup label="Pacific Time Zone">
                                            <option value="CA">California</option>
                                            <option value="NV">Nevada</option>
                                            <option value="OR">Oregon</option>
                                            <option value="WA">Washington</option>
                                        </optgroup>
                                        <optgroup label="Mountain Time Zone">
                                            <option value="AZ">Arizona</option>
                                            <option value="CO">Colorado</option>
                                            <option value="ID">Idaho</option>
                                            <option value="MT">Montana</option>
                                            <option value="NE">Nebraska</option>
                                            <option value="NM">New Mexico</option>
                                            <option value="ND">North Dakota</option>
                                            <option value="UT">Utah</option>
                                            <option value="WY">Wyoming</option>
                                        </optgroup>
                                      
                                    </select>
                       </div>
                        </div>
                        <div class="form-group row">
                            <label for="author" class="col-sm-2 col-form-label text-right">Author</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="author" placeholder="Author name" id="author">
                            </div>
                        </div> 
                        <div class="form-group row">
                            <label for="edit" class="col-sm-2 col-form-label text-right">Editor</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="editor" placeholder="Editor name" id="edit">
                            </div>
                        </div>
                       
                        <div class="form-group row">
                            <label for="translator" class="col-sm-2 col-form-label text-right">Translator</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="translator" placeholder="Translator" id="translator">
                            </div>
                        </div>
                      
                        <div class="form-group mb-0 row">
                            <label class="col-md-3 my-2 control-label">Languages</label>
                            <div class="col-md-9">

                                <div class="form-check-inline my-2">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" name="gujarati" class="custom-control-input" id="gujarati" data-parsley-multiple="groups" data-parsley-mincheck="2">
                                        <label class="custom-control-label" for="gujarati">Gujarati</label>
                                    </div>
                                </div>
                                <div class="form-check-inline my-2">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" name="english" class="custom-control-input" id="english" data-parsley-multiple="groups" data-parsley-mincheck="2">
                                        <label class="custom-control-label" for="english">English</label>
                                    </div>
                                </div>
                                <div class="form-check-inline my-2">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" name="urdu" class="custom-control-input" id="urdu" data-parsley-multiple="groups" data-parsley-mincheck="2">
                                        <label class="custom-control-label" for="urdu">Urdu</label>
                                    </div>
                                </div>
                                <div class="form-check-inline my-2">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" name="hindi" class="custom-control-input" id="hindi" data-parsley-multiple="groups" data-parsley-mincheck="2">
                                        <label class="custom-control-label" for="hindi">Hindi</label>
                                    </div>
                                </div>
                                <div class="form-check-inline my-2">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" name="arabic" class="custom-control-input" id="arabic" data-parsley-multiple="groups" data-parsley-mincheck="2">
                                        <label class="custom-control-label" for="arabic">Arabic</label>
                                    </div>
                                </div>
                   
                            </div>
                        </div><!--end row-->  
                       <br/>
                        <div class="form-group row">
                            <label for="note" class="col-sm-2 col-form-label text-right">Note</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" type="text" name="note" placeholder="Note" id="note"></textarea>
                            </div>
                        </div>
                        
                        <div class="form-group row" >
                            <div class="col-sm-2"></div>
                            <div class="col-sm-10">
                        <button  type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                                                     
                    </div>


                    <div class="col-lg-6">
                         

    <div class="card">
        <div class="card-body">
            <h4 class="mt-0 header-title">Select Book</h4>
            <p class="text-muted mb-3">PDF file only</p>
            <input type="file" name="book_pdf" id="book_pdf" class="dropify" />                                                   
        </div><!--end card-body-->
    </div><!--end card-->
                            
                    </div>
                </div>  
                </form>                                                                    
            </div><!--end card-body-->
        </div><!--end card-->
    </div><!--end col-->
</div><!--end row-->


@endsection