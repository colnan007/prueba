<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>prueba.app</title>
</head>
<body>
	<h2>Create Customer</h2>
	<form action="{{route('customers.store')}}" method="post">
		{{csrf_field()}}
		<label for="name">Name: </label>
		<input type="text" name="name">
		<br>
		<label for="company_name">Company Name: </label>
		<input type="text" name="company_name">
		<br>
		<label for="phone">Phone: </label>
		<input type="text" name="phone">
		<br>
		<label for="email">Email: </label>
		<input type="email" name="email">
		<br>
		<label for="address_1">Address 1: </label>
		<input type="text" name="address_1">
		<br>
		<label for="address_2">Address 2: </label>
		<input type="text" name="address_2">
		<br>
		<label for="city_id">City id: </label>
		<select name="city_id">
			@foreach($cities as $city)
				<option value="{{$city->id}}">{{$city->description}}</option>
			@endforeach
		</select>
		<br>
		<label for="zipcode_id">Zip Code id: </label>
		<select name="zipcode_id">
			@foreach($zipcodes as $zipcode)
				<option value="{{$zipcode->id}}">{{$zipcode->description}}</option>
			@endforeach
		</select>
		<br>
		<button>Create</button>
	</form>
</body>
</html>

