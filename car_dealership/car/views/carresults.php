<html>
    <head>
        <title>Car Results</title>
    </head>
    <body>
        <h1>Cars to Sell</h1>
        <h2>Dealership Cars</h2>
            <p>These cars are better than your cars</p>
            {% for cars in ourcars %}
            <ul>
                <img src="{{ cars.getImage }}"/>
                <li>Car Make/Model: {{ cars.getMake }}</li>
                <li>Mileage: {{ cars.getMiles }} Miles</li>
                <li>Price: ${{ cars.getPrice }}</li>
            </ul>

            {% endfor %}
        <h2>User Cars</h2>

                    {% if usercars is not empty %}

                        <p>Here are the sweet cars you want to get rid of:</p>

                                {% for car in usercars %}
                                <ul>
                                    <img src="{{ car.getImage }}"/>
                                    <li>Car Make/Model: {{ car.getMake }}</li>
                                    <li>Mileage: {{ car.getMiles }} Miles</li>
                                    <li>Price: ${{ car.getPrice }}</li>
                                </ul>

                                {% endfor %}


                    {% endif %}

    <div>
        <a href="/">
        <button type="submit">Submit a car or search a car</button>
        </a>
    </div>
    <br>
    <div>
        <form action="/delete" method="post">
            <button type="submit">Delete your cars</button>
        </form>
    </div>

</body>
</html>
