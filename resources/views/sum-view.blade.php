<form action="{{route('sum')}}" method="POST">
	@csrf
	<input type="number" placeholder="so1" name="so1">
	<input type="number" placeholder="so2" name="so2">
	<input type="number" placeholder="so3" name="so3">
	<button type="submit">Sum</button>
</form>