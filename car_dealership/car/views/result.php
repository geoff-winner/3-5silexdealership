<html>
    <head>
        <title>Search Results</title>
    </head>
    <body>
        <h1>Buy Some Cars!</h1>

        <p>{{ search.getMiles }}</p>
        {% if search is not empty %}

            <p>Search Results:</p>

                    {% for car in search %}
                    <ul>
                        <img src="{{ car.getImage }}"/>
                        <li>Car Make/Model: {{ car.getMake }}</li>
                        <li>Mileage: {{ car.getMiles }} Miles</li>
                        <li>Price: ${{ car.getPrice }}</li>
                    </ul>

                    {% endfor %}


        {% endif %}
            <a href="/"><button type="submit">Go to results</button></a>
    </body>
</html>
