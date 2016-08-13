@extends("admin.layout.master")
@section("styles")
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
@endsection
@section("content")
<div class="row">
	<hr class="hr-primary" />
	<ol class="breadcrumb bread-primary ">
		<a href="/admin/rooms" class="btn btn-primary"><i class="fa fa-bed fa-lg"></i> Room Management </a>
		<li><a href="/admin/rooms/meal-plans">Meal Plans</a></li>
		<li class="active">Create Meal Plans</li>
	</ol>
</div>

<div class="row row2">
	@include("admin.partial.notifications")
	<input type="hidden" id="csrf_token" value="{{ csrf_token() }}" name="csrf_token">
	<form method="POST" action="/admin/rooms/meal-plans/{{ $meal_plan->id }}">
		{{ csrf_field() }}
		<input type="hidden" name="_method" value="PATCH">
		<table class="table table-hover">
			<tr>
				<td>
					Meal Plan Name
				</td>
				<td>
					<input required name="name" type="text" class='form-control' value="{{ $meal_plan->name }}">
				</td>
			</tr>
			<tr>
				<td>
					Price Per Person
				</td>
				<td>
					<input required type="text" name="price" value="{{ $meal_plan->price }}" class="form-control" placeholder="0.00">
				</td>
			</tr>
			<tr>
				<td>
					
				</td>
				<td>
					<button type="submit" class="btn btn-lg btn-primary"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span> Submit</button>
				</td>
			</tr>
		</table>
	</form>
</div>

@endsection