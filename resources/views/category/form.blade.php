<div class="box-body">
    <div class="form-group">
        <label>Category Name</label>
        <input type="text" class="form-control" name="name"
               value="{{ old('name', isset($data->name) ? $data->name:'') }}" placeholder="Enter category name">
    </div>
    <div class="form-group">
        <label>Category Details</label>
        <textarea name="details" class="form-control"
                  placeholder="Enter Category Details">{{old('details', isset($data->details) ? $data->details:'') }}</textarea>
    </div>
    <div class="form-group">
        <label for="exampleInputFile">Category Image</label>
        <input type="file" id="exampleInputFile" name="image">
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


