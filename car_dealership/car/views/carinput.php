<!DOCTYPE html>
    <html>
    <head>
        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css' type='text/css'>
        <title>Car Search</title>
    </head>
    <body>
        <div class='container'>
            <h1>Enter a car to sell!</h1>
            <form action='/view_car' method='post'>
        <div class='form-group'>
                    <label for='price'>Enter Price:</label>
                    <input id='price' name='price' class='form-control' type='number' required>
                    <label for='mileage'>Enter Miles:</label>
                    <input id='mileage' name='mileage' class='form-control' type='number' required>
                    <label for='make'>Make and Model:</label>
                    <input id='make' name='make' class='form-control' type='text' required>
                    <label for='pic'>Add a link to a picture of your car</label>
                    <input id='pic' name='pic' class='form-control' type='url'>
                </div>

                <button type='submit' class='btn-success'>Submit</button>
            </form>

                <div>
                    <form action='/results' method='post'>
                        <div class='form-group'>
                            <label for='searchprice'>Search Max Price</label>
                            <input id='searchprice' name='searchprice' class='form-control' type='number' required>
                            <label for='searchmiles'>Search Mileage</label>
                            <input id='searchmiles' name='searchmiles' class='form-control' type='number' required>
                        </div>

                    <button type='submit' class='btn-success'>Search</button>
                </div>

            </div>


    </body>
    </html>
