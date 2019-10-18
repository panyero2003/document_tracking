@extends('layouts.admin')

@section('content')

    <h1>Vouchers with No Obligations</h1>

  
    {!! Form::button('Add Vouchers No OBR Record ', [
        'onClick' => "parent.location='" . url('/vnoobrs/create') . "'", 'class'=>'btn btn-success',
        'formtarget' => 'fromtarget'
    ]) 
!!}

      <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Department</th>        
            <th>Contractor.</th>
            <th>Claimant</th>
            <th>Payee</th>
            <th>Acct Rec Date</th>
           
        </tr>
        </thead>
        <tbody>

        @if($vnoobrs)

            @foreach($vnoobrs as $vnoobr)


                <tr>
                    <td>{{$vnoobr->id}}</td>
                    <td><a href="{{route('vnoobrs.edit', $vnoobr->id)}}">{{$vnoobr->department ? $vnoobr->department->depname : 'Uncategorized'}}</a></td>
                    <td>{{$vnoobr->contractor ? $vnoobr->contractor->constname : 'Uncategorized'}}</a></td>
                    <td>{{$vnoobr->claimant ? $vnoobr->claimant->claimantname : 'Uncategorized'}}</a></td>                                     
                   
                    <td>{{$vnoobr->payee}}</td>
                    <td>{{$vnoobr->pacctorecdate}}</td>
                                     
                    
                </tr>

            @endforeach
        @endif

        </tbody>
    </table>

{!! $vnoobrs->render() !!}

@stop

