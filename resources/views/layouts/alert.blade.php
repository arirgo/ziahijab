 
@if(session()->has('success'))
 <div class="alert alert-warning alert-dismissible fade show" role="alert"><strong>{{ session('success') }}</strong>
	<button class="close" type="button" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
</div>
@endif