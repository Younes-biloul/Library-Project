@if(Session::has('global'))
				<div class="d-flex justify-content-center" style="margin-top: 20px;">
					<div class="alert alert-danger w-60" role="alert" style="width: 60%; text-align: center;">
						{{ Session::get('global') }}
						<button type="button" class="close" data-dismiss="alert" style="margin-left: 20px" >&times;</button>
					</div>
				</div>
				</div>
@endif