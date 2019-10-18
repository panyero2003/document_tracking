@extends('layouts.app');
@section('content')

<br><br>
<table class="table" >
<td>
 <a href="{{URL('my-search_prs')}}">{!! Html::image('images/user_doc.jpg') !!}</a>

</td>
<td>
	 <a href="{{URL('my-search_pos')}}">{!! Html::image('images/purchase_order_doc.png') !!}</a>

	</td>

	<td>
	 <a href="{{URL('my-search_payroll')}}">{!! Html::image('images/payroll_doc.png') !!}</a>

	</td>

	<td>
	<a href="{{URL('my-search_voucher')}}"> {!! Html::image('images/voucher_doc.png') !!}</a>

	</td>
</tr>

</table>
@stop