<div class="box-body">
    <div class="form-group">
        <label>Category</label>
        <select class="form-control custom-select" name="category_id">
            <option selected disabled>Select Category</option>
            @foreach($category as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label>Product Name</label>
        <input type="text" class="form-control" name="name"
               value="{{ old('name', isset($data->name) ? $data->name:'') }}" placeholder="Enter Product Name">
    </div>
    <div class="form-group">
        <label>Product Details</label>
        <textarea name="details" class="form-control"
                  placeholder="Enter Product Details">{{old('details', isset($data->details) ? $data->details:'') }}</textarea>
    </div>
    <div class="form-group">
        <label>Product original price</label>
        <input type="text" class="form-control" id="original_price" name="original_price"
               value="{{ old('original_price', isset($data->original_price) ? $data->original_price:'') }}"
               placeholder="Enter Product original price">

    </div>
    <div class="form-group">
        <label>Discout Percentage</label>
        <input type="number" min="0" max="99" class="form-control" id="discount_percentage" name="discount_percentage"
               value="{{ old('discount_percentage', isset($data->discount_percentage) ? $data->discount_percentage:'') }}"
               placeholder="Enter Discout Percentage" onkeyup="getPrice()">
    </div>
    <div class="form-group">
        <label>Discount Ammount</label>
        <input type="text" class="form-control" readonly id="discount_amount" name="discount_amount"
               value="{{ old('discount_amount', isset($data->discount_amount) ? $data->discount_amount:'') }}">

    </div>
    <div class="form-group">
        <label>Price</label>
        <input type="text" class="form-control" name="price" readonly id="price"
               value="{{ old('price', isset($data->price) ? $data->price:'') }}">
    </div>
    <div class="form-group">
        <div class="">
            <input type="radio" name="status" id="active" class="with-gap"
                   value="active" {{ isset($data->status) && $data->status == 'active' ? 'checked':'' }}>
            <label for="active">Active</label>
        </div>
        <div class="">
            <input type="radio" name="status" id="inactive" class="with-gap"
                   value="inactive" {{ isset($data->status) && $data->status == 'inactive' ? 'checked':'' }}>
            <label for="inactive">Inactive</label>
        </div>
    </div>
</div>

<script>
    getPrice = function () {
        var orgPrice = Number(document.getElementById("original_price").value);
        var percent = Number(document.getElementById("discount_percentage").value);
        var disAmount = ((orgPrice * percent) / 100);
        document.getElementById("discount_amount").value = disAmount.toFixed(2);
        var totalValue = (orgPrice - disAmount)
        document.getElementById("price").value = totalValue.toFixed(2);

    }
</script>


