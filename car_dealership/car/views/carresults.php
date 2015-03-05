<html>
    <head>
        <title>Car Results</title>
    </head>
    <body>
        <h1>Cars to Sell</h1>
        <h2>Dealership Cars</h2>

        <h2>User Cars</h2>

                    {% if usercars is not empty %}

                        <p>Here are the sweet cars you want to get rid of:</p>
                        <ul>
                                {% for car in usercars %}
                                <ul>
                                    <li>{{ car.getImage }}</li>
                                    <li>{{ car.getMake }}</li>
                                    <li>{{ car.getMileage }}</li>
                                    <li>{{ car.getPrice }}</li>
                                </ul>

                                {% endfor %}
                        </ul>

                    {% endif %}

    <div>
        <a href="/">
        <button type="submit">Submit a new car</button>
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
