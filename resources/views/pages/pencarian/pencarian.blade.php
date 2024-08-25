@extends('pages.layout.baselayout')
@section('content')
<section class="container mt-5">
    <h2>Search Recipes</h2>
    <form id="searchForm">
        <div class="input-group mb-3">
            <input type="text" class="form-control" id="searchInput" placeholder="Search for a recipe...">
            <button class="btn btn-primary" type="submit">Search</button>
        </div>
    </form>
    <div id="results" class="row"></div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.getElementById('searchForm').addEventListener('submit', function (e) {
        e.preventDefault();
        const query = document.getElementById('searchInput').value;

        fetch(`https://www.themealdb.com/api/json/v1/1/search.php?s=${query}`)
            .then(response => response.json())
            .then(data => {
                let output = '';
                if (data.meals) {
                    data.meals.forEach(meal => {
                        output += `
                        <div class="col-md-4">
                            <div class="card mb-4">
                                <img src="${meal.strMealThumb}" class="card-img-top" alt="${meal.strMeal}">
                                <div class="card-body">
                                    <h5 class="card-title">${meal.strMeal}</h5>
                                        <a href="{{ url('/pencarian/detail') }}/${meal.idMeal}" class="btn btn-primary">View Details</a>
                                </div>
                            </div>
                        </div>`;
                    });
                } else {
                    output = '<p>No recipes found.</p>';
                }
                document.getElementById('results').innerHTML = output;
            })
            .catch(error => console.error('Error:', error));
    });
</script>
@endsection