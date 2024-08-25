@extends('pages.layout.baselayout')

@section('content')

<section class="container mt-5">
    <div id="recipeDetail" class="row"></div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    const params = new URLSearchParams(window.location.search);
    const id = params.get('id');

    fetch(`https://www.themealdb.com/api/json/v1/1/lookup.php?i=${id}`)
        .then(response => response.json())
        .then(data => {
            const meal = data.meals[0];
            let output = `
            <div class="col-md-6">
                <img src="${meal.strMealThumb}" class="img-fluid" alt="${meal.strMeal}">
            </div>
            <div class="col-md-6">
                <h2>${meal.strMeal}</h2>
                <p><strong>Category:</strong> ${meal.strCategory}</p>
                <p><strong>Area:</strong> ${meal.strArea}</p>
                <p><strong>Instructions:</strong></p>
                <p>${meal.strInstructions}</p>
                <h4>Ingredients:</h4>
                <ul>`;
            
            for (let i = 1; i <= 20; i++) {
                if (meal[`strIngredient${i}`]) {
                    output += `<li>${meal[`strIngredient${i}`]} - ${meal[`strMeasure${i}`]}</li>`;
                }
            }

            output += `</ul>
            <a href="${meal.strYoutube}" class="btn btn-primary" target="_blank">Watch on YouTube</a>
            </div>`;
            document.getElementById('recipeDetail').innerHTML = output;
        })
        .catch(error => console.error('Error:', error));
</script>
@endsection
