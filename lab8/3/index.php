<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab8.3</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

</head>
<style>
    body{
        background: hsl(0, 0%, 30%);
    }
    .card {
        margin: 0 auto;
        float: none;
        margin-bottom: 10px;
        max-width: 800px;
    }
    .card img{
        width: 50%;
        margin: auto;
    }
    .card-text{
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 4; /* number of lines to show */
        -webkit-box-orient: vertical;
    }
    .btn-icon{
        width: 60px;
        height: 60px;
    }
</style>
<body>
    <?php
        $url = "https://www.themealdb.com/api/json/v1/1/random.php";
        $response = file_get_contents($url);
        $result = json_decode($response);
        $menu = $result->meals[0]->strMeal;
        $img = $result->meals[0]->strMealThumb;
        $info = $result->meals[0]->strInstructions;
        $learn = $result->meals[0]->strSource;
        $reIcon = "https://image.flaticon.com/icons/png/512/61/61225.png";
        echo "<div class='container mt-3'>";
        echo "<div class='row'>";
        echo "<div class='col text-center'>";

        echo "<div class='card shadow pt-3'>";
        echo "<img class='card-img-top p-2' src='$img'>";
        echo "<div class='card-header'><h3 class='text-info'><b>$menu</b><h3></div>";
        echo "<div class='card-body'>";
        echo "<p class='card-text'>";
        echo "$info";
        echo "</p>";
        echo "<button class='btn btn-icon' onClick='window.location.reload();'><img src='$reIcon'></button>";
        echo "<label class='btn btn-info'><a class='text-light text-decoration-none' target='_blank' href='$learn'>Learn more</a></label>";
        echo "</div>";
        echo "</div>";

        echo "</div>";
        echo "</div>";
        echo "</div>";

    ?>
    
    <!-- {"meals":
        [
            {
                "idMeal":"52809",
                "strMeal":"Recheado Masala Fish",
                "strDrinkAlternate":null,"strCategory":"Seafood",
                "strArea":"Indian",
                "strInstructions":"Soak all the spices, ginger, garlic, tamarind pulp and kashmiri chilies except oil in vinegar.\r\nAdd sugar and salt.\r\nAlso add turmeric powder.\r\nCombine all nicely and marinate for 35-40 mins.\r\nGrind the mixture until soft and smooth. Add more vinegar if required but ensure the paste has to be thick so add vinegar accordingly. If the masala paste is thin then it would not stick to the fish.\r\nRinse the fish slit from the center and give some incision from the top. You could see the fish below for clarity.\r\nNow stuff the paste into the center and into the incision. Coat the entire fish with this paste. Marinate the fish for 30 mins.\r\nPlace oil in a shallow pan, once oil is quite hot shallow fry the stuffed mackerels.\r\nFry until golden brown from both sides\r\nServe the recheado mackerels hot with salad, lime wedges, rice and curry.\r\nNotes\r\n1. Ensure the masala paste is thick else the result won't be good.\r\n2. If you aren't able to find kashmiri chilies then use bedgi chilies or kashmiri red chili powder.\r\n3. You could use white vinegar or coconut vinegar.\r\n4. Any left over paste could be stored in the fridge for future use.\r\n5. Cinnamon could be avoided as it's a strong spice used generally for meat or chicken.",
                "strMealThumb":"https:\/\/www.themealdb.com\/images\/media\/meals\/uwxusv1487344500.jpg",
                "strTags":"Fish,Spicy",
                "strYoutube":"https:\/\/www.youtube.com\/watch?v=FXtCris37nE",
                "strIngredient1":"Mackerel",
                "strIngredient2":"Red Chili",
                "strIngredient3":"Ginger",
                "strIngredient4":"Garlic",
                "strIngredient5":"Pepper",
                "strIngredient6":"Cumin",
                "strIngredient7":"Turmeric",
                "strIngredient8":"Cinnamon stick",
                "strIngredient9":"Clove",
                "strIngredient10":"Cardamom",
                "strIngredient11":"Sugar",
                "strIngredient12":"Tamarind ball",
                "strIngredient13":"Vinegar",
                "strIngredient14":"Oil",
                "strIngredient15":"",
                "strIngredient16":"",
                "strIngredient17":"",
                "strIngredient18":"",
                "strIngredient19":"",
                "strIngredient20":"",
                "strMeasure1":"4",
                "strMeasure2":"18 dried",
                "strMeasure3":"1 inch",
                "strMeasure4":"8 cloves",
                "strMeasure5":"1.5 tsp",
                "strMeasure6":"1 tsp",
                "strMeasure7":"\u00bd tsp",
                "strMeasure8":"",
                "strMeasure9":"4",
                "strMeasure10":"2",
                "strMeasure11":"1 tbsp",
                "strMeasure12":"2 marble sized",
                "strMeasure13":"2.5 tbsp",
                "strMeasure14":"for frying",
                "strMeasure15":"",
                "strMeasure16":"",
                "strMeasure17":"",
                "strMeasure18":"",
                "strMeasure19":"",
                "strMeasure20":"",
                "strSource":"http:\/\/www.flavorsofmumbai.com\/fish-recheado-masala-recipe\/",
                "dateModified":null
            }
        ]
    } -->
</body>
</html>