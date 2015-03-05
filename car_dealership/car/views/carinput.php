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
                    <input id='price' name='price' class='form-control' type='number'>
                    <label for='mileage'>Enter Miles:</label>
                    <input id='mileage' name='mileage' class='form-control' type='number'>
                    <label for='make'>Make and Model:</label>
                    <input id='make' name='make' class='form-control' type='text'>
                    <label for='pic'>Add a link to a picture of your car</label>
                    <input id='pic' name='pic' class='form-control' type='url'>
                </div>

                <button type='submit' class='btn-success'>Submit</button>
            </form>
        </div>
    </body>
    </html>
