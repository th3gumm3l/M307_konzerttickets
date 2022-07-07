<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<style>
    * {
        margin: 0px;
        padding: 0px;
        font-family: 'Courier New', Courier, monospace;
    }

    body{
        margin-left: 20px;
        margin-right: 20px;
    }
    nav {
        width: 100%;
        background-color: lightgray;
    }
</style>

<body>
    <main>
        <nav>
            - Navbar [links...]
        </nav>
        <br>

        <h1>Forms</h1>
        <form action="" method="post">
            <fieldset>
                <legend>Person</legend>
                <label for="name">Name:</label> <br>
                <input type="text" id="name" name="name"><br>

                <label for="prename">Prename:</label> <br>
                <input type="text" id="prename" name="prename"><br>

                <label for="phone">Phone:</label> <br>
                <input type="text" id="phone" name="phone"><br>

                <label for="email">Email:</label> <br>
                <input type="email" id="email" name="email"><br>
                <br>
            </fieldset>
            <fieldset>
                <legend>Concert</legend>

                <label for="artists">Artists:</label> <br>
                <select name="artists" id="artists">
                    <option value="">Option 1</option>
                    <option value="">Option 2</option>
                    <option value="">Option 3</option>
                    <option value="">Option 4</option>
                </select>

                <br>

                <label for="amount">Amount:</label> <br>
                <input type="number" name="amount" id="amount" min="1"><br>

                <label for="simpathy">Simpathy:</label> <br>
                <input type="radio" id="dc0" name="simpathy" value="0" checked>
                <label for="dc0">No discount</label> <br>
                <input type="radio" id="dc1" name="simpathy" value="1">
                <label for="dc1">5% discount</label> <br>
                <input type="radio" id="dc2" name="simpathy" value="2">
                <label for="dc2">10% discount</label> <br>
                <input type="radio" id="dc3" name="simpathy" value="3">
                <label for="dc3">15% discount</label> <br>
            </fieldset>
            <input type="submit" name="submit" value="Overview">
        </form>
        
        <h1>Overview</h1>
        <fieldset>
            <legend>Person</legend>
            <label for="name">Name:</label> <br>
            <input type="text" id="name" name="name"><br>

            <label for="prename">Prename:</label> <br>
            <input type="text" id="prename" name="prename"><br>

            <label for="phone">Phone:</label> <br>
            <input type="text" id="phone" name="phone"><br>

            <label for="email">Email:</label> <br>
            <input type="email" id="email" name="email"><br>
            <br>
        </fieldset>
        <fieldset>
            <legend>Concert</legend>

            <label for="artists">Artists:</label> <br>
            <input type="text" id="artists" name="artists"><br>

            <br>

            <label for="amount">Amount:</label> <br>
            <input type="number" name="amount" id="amount" min="1"><br>
            <label>Simpathy:</label> <br>
            <label>discount</label> <br>
        </fieldset>
        <input type="submit" name="submit" value="Overview">
    </form>
    <button>Discard</button>

    </main>
</body>

</html>