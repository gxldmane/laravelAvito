<div class="card">
    <div class="card-body">
        <h5 class="card-title">Фильтры</h5>
        <form id="filter-form">
            <div class="form-group">
                <label for="city">Город:</label>
                <select class="form-control" id="city_id" name="city_id">
                    <option value="all">Все города</option>
                    @foreach($cities as $city)
                        <option value="{{$city->id}}">{{$city->title}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="category">Категория:</label>
                <select class="form-control" id="category_id" name="category_id">
                    <option value="all">Все категории</option>
                    @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->title}}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" id="apply-filter" class="btn btn-primary">Применить фильтр</button>
        </form>
    </div>
</div>

<script>
    // Функция для обновления URL с параметрами фильтрации
    function updateURL() {
        var selectedCity = document.getElementById('city_id').value;
        var selectedCategory = document.getElementById('category_id').value;

        var url = window.location.href.split('?')[0].split('#')[0]; // Получаем текущий URL без параметров и хэша
        var params = [];

        if (selectedCity !== 'all') {
            params.push('city_id=' + selectedCity);
        }
        if (selectedCategory !== 'all') {
            params.push('category_id=' + selectedCategory);
        }

        if (params.length > 0) {
            url += '?' + params.join('&');
        }

        history.pushState({}, '', url); // Обновляем URL без перезагрузки страницы
    }

    // Сохраняем выбранные значения при изменении полей
    document.getElementById('city_id').addEventListener('change', updateURL);
    document.getElementById('category_id').addEventListener('change', updateURL);

    // Восстанавливаем выбранные значения при загрузке страницы
    var urlParams = new URLSearchParams(window.location.search);
    var selectedCityFromURL = urlParams.get('city_id');
    var selectedCategoryFromURL = urlParams.get('category_id');

    var hash = window.location.hash;
    if (hash) {
        // Распарсим хэш и извлечем параметры, если они есть
        var hashParams = new URLSearchParams(hash.slice(1));
        var hashSelectedCity = hashParams.get('city_id');
        var hashSelectedCategory = hashParams.get('category_id');

        // Если параметры в хэше присутствуют, используем их вместо параметров из URL
        if (hashSelectedCity) {
            selectedCityFromURL = hashSelectedCity;
        }
        if (hashSelectedCategory) {
            selectedCategoryFromURL = hashSelectedCategory;
        }
    }

    if (selectedCityFromURL) {
        document.getElementById('city_id').value = selectedCityFromURL;
    }

    if (selectedCategoryFromURL) {
        document.getElementById('category_id').value = selectedCategoryFromURL;
    }

    // Обработка клика по кнопке
    document.getElementById('apply-filter').addEventListener('click', function() {
        // Вызываем функцию updateURL для обновления URL
        updateURL();

        // Добавьте здесь код для обработки фильтрации данных с учетом выбранных значений.
        // Вы можете использовать selectedCityFromURL и selectedCategoryFromURL для получения выбранных значений из URL.
    });
</script>
