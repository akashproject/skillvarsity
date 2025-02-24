@extends('administrator.layouts.admin')
@section('content')
<div class="col-12">
	@if($gallery)
		<div class="card">
			<div class="card-header d-flex flex-wrap justify-content-between gap-3">
				<div class="card-title mb-0 me-1">
					<h5 class="mb-1"> {{ count($gallery) }} Records found</h5>
				</div>
				<div class="d-flex justify-content-md-end align-items-center gap-3 flex-wrap">
					<div class="position-relative">
						<a href="{{ route('admin-add-gallery') }}" class="btn btn-secondary add-new btn-primary" tabindex="0">
							<span>
								<i class="bx bx-plus me-0 me-sm-1"></i>
								<span class="d-none d-sm-inline-block">Add New Gallery</span>
							</span>
						</a>
					</div>
				</div>
			</div>
			<div class="card-body">
				<h5 class="card-title"> All Gallery</h5>
				<div class="table-responsive">
					<table id="" class="table table-striped">
						<thead>
							<tr>
								<th>Name</th>
								<th>Slug</th>
								<th>Status</th>
								<th>Created At</th>
								<th>Actions</th>
							</tr>
						</thead>

						<tbody>
							@foreach ($gallery as $value)
							<tr>
								<td>{{ $value->name }}</td>													
								<td>{{ $value->slug }}</td>									
								<td>{{ ($value->status == "1")?'Active':'Deactive' }}</td>									
								<td>{{ $value->created_at->format("d M, Y") }}</td>									
								<td>
									<div class="d-inline-block text-nowrap">
										@can('update')
										<a href="{{ route('admin-view-gallery',$value->id) }}" class="btn btn-sm btn-icon">
											<i class="bx bx-edit"></i>
										</a>
										@endcan
										@can('delete')
										<a href="{{ route('admin-delete-gallery',$value->id) }}" onclick="return confirm('Are you sure?')"; class="btn btn-sm btn-icon delete-record">
											<i class="bx bx-trash"></i>
										</a>
										@endcan
									</div>
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



