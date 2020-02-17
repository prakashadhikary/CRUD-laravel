@include('dashboard.header')
<div class="container">
	<h2>Update Product</h2>
	<form action="{{route('product.update', $data->id)}}" method="post" enctype="multipart/form-data">
		@csrf
		@method('PUT')
		<div class="form-group col-md-6">
			<label>Select Category</label>
			<select name="category_id" class="form-control">
				<option value="0">Select Category</option>
				@foreach($category as $value)
				<option value="{{$value->id}}" @if($data->category_id==$value->id) selected @endif>{{$value->name}}</option>
				@endforeach
			</select>
		</div>

		<div class="form-group col-md-6">
			<label>Name</label>
			<input type="text" name="name" class="form-control" placeholder="Enter Name" value="{{$data->name}}" required="">
		</div>

		<div class="form-group col-md-6">
			<label>Quantity</label>
			<input type="text" name="quantity" class="form-control" placeholder="Enter Quantity" value="{{$data->quantity}}" required="">
		</div>

		<div class="form-group col-md-6">
			<label>Price</label>
			<input type="text" name="price" class="form-control" placeholder="Enter Price" value="{{$data->price}}" required="">
		</div>

		<div class="form-group col-md-6">
			<label>Upload Image</label>
			<input type="file" name="image" accept="image/*" >
			<input type="hidden" name="image_url" value="{{$data->image}}">
			@if($data->image)
					<img src="{{asset($data->image)}}" height="50" width="50">
					@endif
		</div>

		<div class="form-group col-md-6">
			<label>Description</label>
			<textarea name="description" class="form-control" placeholder="Enter description">{{$data->description}}</textarea>
		</div>

		<div class="form-group col-md-6">
			<button type="submit" class="btn btn-primary">Update</button>
		</div>

	</form>
</div>

@include('dashboard.footer')