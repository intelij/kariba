@extends('layouts.app')
@section('content')
    <div class="page-content row">
        <!-- Page header -->
        <div class="page-header">
            <div class="page-title">
                <h3> {{ $pageTitle }}
                    <small>{{ $pageNote }}</small>
                </h3>
            </div>

            <ul class="breadcrumb">
                <li><a href="{{ URL::to('dashboard') }}"> Dashboard </a></li>
                <li class="active">{{ $pageTitle }}</li>
            </ul>

        </div>

        <div class="page-content-wrapper m-t">

            <div class="sbox animated fadeInRight">
                <div class="sbox-title"><h5><i class="icon-cloud-download"></i> Export XML File</h5>

                    <div class="sbox-tools">
                        <a href="" class="btn btn-xs btn-white tips" title="Clear Search"><i class="fa fa-trash-o"></i>
                            Clear Search </a>
                    </div>
                </div>

                <div class="sbox-content">
                    <div class="toolbar-line ">

                        <div class="container">
                            <div class='col-md-12'>
                                <div class="form-group">
                                    <div class='input-group' id=''>
                                        <input type='date' class="form-control  input-lg" placeholder="Enter Start Date"/>
                                    </div>
                                </div>
                            </div>
                            <div class='col-md-12'>
                                <div class="form-group">
                                    <div class='input-group' id=''>
                                        <input type='date' class="form-control  input-lg" placeholder="Enter End Date"/>
                                    </div>
                                </div>
                            </div>

                            <div class='col-md-12'>
                                <div class="form-group">
                                    <div class='input-group' id=''>
                                        <a href="/generateXMLFile" class="btn btn-primary"><i class="icon-cloud-download"></i> Download Product Sales Data (XML Format)</a>
                                    </div>
                                </div>
                            </div>

                        </div>


                    </div>


                </div>
            </div>

@stop