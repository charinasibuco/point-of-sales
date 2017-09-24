@extends('layouts.default.master')

@section('custom-style')
	<style>
		body {
			background-color: #efefef;
		}
	</style>
@endsection

@section('content')
	<div class="container-fluid">
		<div class="row">
			<div class="col">Column 1.1</div>
			<div class="col">Column 1.2</div>
			<div class="col-6">Column 2</div>
		</div>
	</div>
@endsection

@section('custom-script')
	<script>
		alert('custom scripts here.')
	</script>
@endsection