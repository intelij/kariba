@extends('layouts.app')
@section('content')
    <div class="page-content row">
        <!-- Page header -->
        <div class="page-header">
            <div class="page-title">
                <h3> Contract Agreements {{--{{ $pageTitle }}--}}
                    <small>Manage Contract Agreements {{--{{ $pageNote }}--}}</small>
                </h3>
            </div>

            <ul class="breadcrumb">
                <li><a href="{{ URL::to('dashboard') }}"> Dashboard </a></li>
                <li class="active">Manage Contract Agreements  {{--{{ $pageTitle }}--}}</li>
            </ul>

        </div>

        <div class="page-content-wrapper m-t">

        </div>


        <div class="page-content-wrapper m-t">

            <div class="sbox">
                <div class="sbox-content">
                    {{--{!! dd($data) !!}--}}
                    @foreach($data as $info)
                        {{--<p>{!! $info->first_name !!}</p>--}}
                    @endforeach



                    <table class="table table-striped ">
                        <thead>
                        <tr>
                            <th class="number"><span> No </span> </th>
                            <th> <input type="checkbox" class="checkall" /></th>
                            <th class="number"><span> Fullname </span> </th>
                            <th class="number"><span> Loan Amount </span> </th>
                            <th class="number"><span> Repayment </span> </th>
                            <th class="number"><span> Rate </span> </th>
                            <th class="number"><span> Due Date </span> </th>
                            <th width="70" ><span>{{ Lang::get('core.btn_action') }}</span></th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach ($data as $row)
                            <tr>
                                <td width="10">{!! $row->application_id !!}</td>
                                <td width="10"><input type="checkbox" class="ids" name="ids[]" value="{{ $row->id }}" />  </td>
                                <td width="30">{!! $row->first_name !!} {!! $row->middle_name !!} {!! $row->last_name !!}</td>
                                <td width="30">&pound; {{ number_format($row->loan_amount, 2) }}</td>
                                <td width="30">{!! $row->repayment_amount !!}</td>
                                <td width="30">{!! $row->interest_rate !!}</td>
                                <td width="30">{!! $row->due_date !!}</td>

                                <td>
                                        <a href="{{ URL::to('blank/show/'.$row->application_id.'?return=')}}" class="tips btn btn-xs btn-primary" title="View"><i class="fa  fa-search "></i></a>
                                        <a  href="{{ URL::to('contracts/update/'.$row->id.'?return=') }}" class="tips btn btn-xs btn-success" title="Edit"><i class="fa fa-edit "></i></a>
                                </td>
                            </tr>

                        @endforeach

                        </tbody>

                    </table>




                </div>

            </div>
        </div>


@stop