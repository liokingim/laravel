<div class="form-group form-inline mt-2">
	<div class="form-inline">
		@foreach(config('const.orders.status_list') as $key =>$val)
		<div class="form-check mr-2">
			<label class="form-check-label">{{Form::checkbox('status[]', $key,old('status')))}}{{$val}}</label>
		</div>
		@endforeach
	</div>
</div>