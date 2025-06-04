<!DOCTYPE html>
<html>
<head>
    <title>Account Sign Up</title>
    <!-- Bootstrap CSS -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous">
    </script>
</head>

<body>
    <main>
    <h1>Account Sign Up</h1>
    <form action="display_results.php" method="post">

    <fieldset>
    <legend>Account Information</legend>
        <label>E-Mail:</label>
        <input type="text" name="email" value="" class="textbox">
        <br>

        <label>Password:</label>
        <input type="password" name="password" value="" class="textbox">
        <br>

        <label>Phone Number:</label>
        <input type="text" name="phone" value="" class="textbox">
    </fieldset>

    <fieldset>
    <legend>Settings</legend>

        <p>How did you hear about us?</p>
        <input type="radio" name="heard_from" value="Search Engine">
        Search engine<br>
        <input type="radio" name="heard_from" value="Friend">
        Word of mouth<br>
        <input type=radio name="heard_from" value="Other">
        Other<br>

        <p>Would you like to receive announcements about new products
           and special offers?</p>
        <input type="checkbox" name="wants_updates">YES, I'd like to receive
        information about new products and special offers.<br>

        <p>Contact via:</p>
        <select name="contact_via">
                <option value="email">Email</option>
                <option value="text">Text Message</option>
                <option value="phone">Phone</option>
        </select>

        <p>Comments:</p>
        <textarea name="comments" rows="4" cols="50"></textarea>
    </fieldset>

    <input type="submit" value="Submit">
    <br>

    </form>    
    </main>
</body>
</html>