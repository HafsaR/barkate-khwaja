
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
                    <li class="breadcrumb-item active">Datatable</li>
                </ol>
            </div>
            <h4 class="page-title">Datatable</h4>
        </div><!--end page-title-box-->
    </div><!--end col-->
</div>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <h4 class="mt-0 header-title">Default Datatable</h4>
                <p class="text-muted mb-3">DataTables has most features enabled by
                    default, so all you need to do to use it with your own tables is to call
                    the construction function: <code>$().DataTable();</code>.
                </p>

                <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                    <thead>
                    <tr>
                        <th>Sr No.</th>
                        <th>Magazine Name</th>
                        <th>Cover</th>
                        <th>Year</th>
                        <th>Month</th>
                        <th>Options</th>
                    </tr>
                    </thead> 
@php
    $count=0;
@endphp


                    <tbody>
                    <tr>
                        @foreach ($magazines as $magazine)
                            
                       <td>{{++$count}}</td>
                        <td>{{$magazine->magazine_pdf}}</td>
                        <td>{{$magazine->magazine_cover}}</td>
                        <td>{{$magazine->year}}</td>
                        <td>{{$magazine->month}}</td>
                       
                        <td><a href="{{url('/admin'.'/'.$magazine->id.'/edit')}}" class="btn btn-secondary waves-effect waves-light"><i class="mdi mdi-square-edit-outline"></i> Edit </a> 
                            <a href="{{url('/delete_magazine'.'/'.$magazine->id)}}" class="btn btn-danger waves-effect waves-light"><i class="mdi mdi-delete"></i> Delete</a>  
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div> <!-- end col -->
</div> <!-- end row -->

    
@endsection