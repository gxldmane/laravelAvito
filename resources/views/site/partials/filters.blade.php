<div class="card">
    <div class="card-body">
        <h5 class="card-title">Фильтры</h5>
        <form id="filter-form">
            <div class="form-group">
                <label for="city">Город:</label>
                <select class="form-control" id="city" name="city">
                    @foreach($cities as $city)
                        <option value="{{$city->id}}">{{$city->title}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="category">Категория:</label>
                <select class="form-control" id="category" name="category">
                    @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->title}}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Применить фильтр</button>
        </form>
    </div>
</div>
