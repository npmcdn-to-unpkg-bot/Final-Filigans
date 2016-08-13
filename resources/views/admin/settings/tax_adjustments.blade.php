@extends("admin.layout.master")
<style type="text/css">
	td
	{
		font-size:20px;
	}
	tr td:first-of-type
	{
		text-align:right;
		width:20%;

	}	

	.table > tbody > tr > td {
		vertical-align: middle;
	}


	.table tr:first-of-type td
	{
		border:0;
	}
	tr td:nth-of-type(2)
	{
		font-weight:bold;
	}
	
	.box-tiles
	{
		cursor:pointer;
	}
</style>
@section("content")
<div class="row">
	<hr class="hr-primary" />
	<ol class="breadcrumb bread-primary ">
		<button href="#" class="btn btn-primary"><i class="fa fa-cogs"></i> Website Settings</button>
		<li>
			Tax Adjustments
		</li>
	</ol>
</div>

<div class="row row2">
	@include("admin.partial.notifications")
	<form method="POST" action="/admin/settings/1">
		<input type="hidden" name="_method" value="PATCH">
		{{ csrf_field() }}
		<table class="table table-hover">
			<td>
				Tax(%)
			</td>
			<td>
				<input name="tax" type="text" class="form-control" value="{{ $tax }}">
			</td>
		</tr>
		<tr>
			<td></td>
			<td>
				<button type="submit" class="btn btn-lg btn-primary"><span class="glyphicon glyphicon-glyphicon glyphicon-chevron-right" aria-hidden="true"></span> Submit</button>
			</td>
		</tr>
	</table>
</form>
</div>
@endsection