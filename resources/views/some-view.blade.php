<div>
	<form action="{{ route('sum') }}" method="post">
		@csrf
		N1 <input type="number" name="n_1">
		N2	<input type="number" name="n_2">
		N2	<input type="number" name="n_3">
		<button type="submit"> gửi</button>
	</form>
</div>