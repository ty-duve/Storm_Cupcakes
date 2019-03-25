<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8"> 
        
               
        <title>Storm Cupcakes</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
         <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.2.1/journal/bootstrap.min.css">
    </head>

    <body>
        <?php include '../resources/navigation.php'; ?>
       
        <div class="container">
        <header>
            <h1>Flavors 
            <img src="cupcake.png" alt="Cupcake">
            </h1>
        </header>
            <div class="alert alert-secondary" role="alert">
                Mix-and-match any cake with any frosting!
            </div>
           
            <h3>Cake Flavors</h3>
       
    <div class="row">
        <div class="col-sm-12 col-lg-8">        
    <table class="table table-bordered">
        <tbody>
            <tr>
                <td>Chocolate</td>
                <td>Vanilla</td>
                <td>Peanut Butter</td>
                <td>Strawberry</td>
            </tr>
            <tr>
                <td>Blueberry</td>
                <td>Red Velvet</td>
                <td>Wedding cake</td>
                <td>Cookies and Cream</td>
            </tr>
            <tr>
                <td>Monster</td>
                <td>Marble</td>
                <td>Mango</td>
                <td>Birthday</td>
            </tr>
        </tbody>
    </table>
    </div>
    <div class="col-sm-12 col-lg-4">
    <img src="choccake.png" alt="Chocolate Cupcake">
    </div>
    </div>
    
        <h3>Frosting Flavors</h3>
    <table class="table table-bordered">
        <tbody>
            <tr>
                <td>Vanilla</td>
                <td>Chocolate</td>
                <td>Peanut Butter</td>
            </tr>
            <tr>
                <td>Cream Cheese</td>
                <td>Almond</td>
                <td>Coffee</td>
            </tr>
        </tbody>
    </table>
    
    <form action="/action_page.php" target="_self">
        <h2>Cupcake Order Form</h2>
        First name:<br>
        <input type="text" name="firstname"><br>
        Last name:<br>
        <input type="text" name="lastname"><br>
        Amount of Cupcakes:<br>
        <input type="text" name="amountofcupcakes"><br>
        Time of Pickup:<br>
        <input type="text" name="timeofpickup"><br>
        Type of Cupcakes:<br>
        <input type="text" name="typeofcupcakes"><br>
        <input type="submit" value="Submit">
    </form>

     <?php include '../resources/footer.php'; ?>
    </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    
    </body>
</html>
    

        
    
        