
<form action="{{route('product.update',$product->id)}}" method="POST"enctype="multipart/form-data">
@csrf
@method('PUT')
<div>
    <label for="">Product Name</label>
     <input type="text" name="title" value="{{ $product->title }}">
</div>
<div>
    <label for="">Price</label>
    <input type="text" name="price" value="{{$product->price}}">
</div>
<div>
    <label>Product image</label>
    <input type="file" name="image">
    <p>Current Image:</p>
    <img src="{{ asset('storage/'.$product->image)}}"width="70">
</div>
<button type ="submit" class="btn btn-primary">Update Product</button>
</form>