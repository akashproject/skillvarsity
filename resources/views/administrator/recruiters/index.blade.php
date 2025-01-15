@extends('administrator.layouts.admin')
@section('content')
<div class="col-12">
	@if($recruiters)
		<div class="card">
			<div class="card-header d-flex flex-wrap justify-content-between gap-3">
				<div class="card-title mb-0 me-1">
					<h5 class="mb-1"> {{ count($recruiters) }} Records found</h5>
				</div>
				<div class="d-flex justify-content-md-end align-items-center gap-3 flex-wrap">
					<div class="position-relative">
						<a href="{{ route('admin-add-recruiter') }}" class="btn btn-secondary add-new btn-primary" tabindex="0">
							<span>
								<i class="bx bx-plus me-0 me-sm-1"></i>
								<span class="d-none d-sm-inline-block">Add New Recruiters</span>
							</span>
						</a>
					</div>
				</div>
			</div>
			<div class="card-body">
				<div class="table-responsive">
					<table id="zero_config" class="table">
						<thead>
							<tr>
								<th>Name</th>								
								<th>Status</th>
								<th>Options</th>
							</tr>
						</thead>
						<tbody>
							@foreach ($recruiters as $value)
							<tr>
								<td>{{ $value->name }}</td>																													
								<td>{{ ($value->status== 1)?"Active":"Deactivate" }}</td>													
								<td>									
									<a href="{{ url('administrator/view-recruiter') }}/{{ $value->id }}" class="btn btn-primary btn-lg">Edit</a>
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

