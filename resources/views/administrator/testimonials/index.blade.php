@extends('administrator.layouts.admin')
@section('content')
<div class="col-12">
	@if($testimonials)
		<div class="card">
			<div class="card-header d-flex flex-wrap justify-content-between gap-3">
				<div class="card-title mb-0 me-1">
					<h5 class="mb-1"> {{ count($testimonials) }} Records found</h5>
				</div>
				<div class="d-flex justify-content-md-end align-items-center gap-3 flex-wrap">
					<div class="position-relative">
						<a href="{{ route('admin-add-testimonial') }}" class="btn btn-secondary add-new btn-primary" tabindex="0">
							<span>
								<i class="bx bx-plus me-0 me-sm-1"></i>
								<span class="d-none d-sm-inline-block">Add New Testimonial</span>
							</span>
						</a>
					</div>
				</div>
			</div>
			<div class="card-body">
				<h5 class="card-title"> Datatable</h5>
				<div class="table-responsive">
					<table id="" class="table table-striped">
						<thead>
							<tr>
								<th>Name</th>
								<th>Comment</th>
								<th>Dasignation</th>
								<th>Status</th>
								<th>Options</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($testimonials as $value)
							<tr>
								<td>{{ $value->name }}</td>													
								<td>{!! $value->comment !!}</td>													
								<td>{{ $value->dasignation }}</td>													
								<td>{{ ($value->status== 1)?"Active":"Deactivate" }}</td>													
								<td>									
									<a href="{{ url('administrator/view-testimonial') }}/{{ $value->id }}" class="btn btn-primary btn-lg">Edit</a>
									<!-- <a href="{{ url('administrator/delete-review') }}/{{ $value->id }}" class="btn btn-danger btn-lg" onclick="return confirm('Are you sure?')"; >Delete </a> -->
								</td>
							</tr>
							@endforeach							
						</tbody>
					</table>
				</div>
			</div>

		</div>

	@endif

</div>                   

@endsection

@section('script')

<!-- ============================================================== -->

<!-- CHARTS -->

@endsection

