<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="form.css">
    <title>User Registration</title>
</head>
<body>
    <h2>User Registration</h2>
    <div class="container">
    <form action="save_user.php" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" required><br>

        <label for="gender">Gender:</label>
        <select name="gender" required>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
        </select>

        <label for="city">City:</label>
        <select name="city" required>
            <option value="Mumbai">Mumbai</option>
            <option value="Delhi">Delhi</option>
            <option value="Bangalore">Bangalore</option>
            <option value="Chennai">Chennai</option>
            <option value="Hyderabad">Hyderabad</option>
            <option value="Kolkata">Kolkata</option>
            <option value="Pune">Pune</option>
            <option value="Ahmedabad">Ahmedabad</option>
            <option value="Jaipur">Jaipur</option>
            <option value="Lucknow">Lucknow</option>
            <option value="Surat">Surat</option>
            <option value="Kanpur">Kanpur</option>
            <option value="Nagpur">Nagpur</option>
            <option value="Indore">Indore</option>
            <option value="Thane">Thane</option>
            <option value="Bhopal">Bhopal</option>
            <option value="Visakhapatnam">Visakhapatnam</option>
            <option value="Patna">Patna</option>
            <option value="Vadodara">Vadodara</option>
            <option value="Ludhiana">Ludhiana</option>
            <option value="Agra">Agra</option>
            <option value="Nashik">Nashik</option>
            <option value="Rajkot">Rajkot</option>
            <option value="Varanasi">Varanasi</option>
            <option value="Madurai">Madurai</option>
            <option value="Meerut">Meerut</option>
            <option value="Coimbatore">Coimbatore</option>
            <option value="Amritsar">Amritsar</option>
            <option value="Allahabad">Allahabad</option>
            <option value="Chandigarh">Chandigarh</option>
        </select><br>

        <div class="buttons_bar">
            <div>
                <input class="button_submit" type="submit" value="Submit">
                <input class="button_reset" type="reset" value="Reset">
            </div>
            <div>
                <a href="user_list.php" class="view_users">View List</a>
            </div>
        </div>
    </form>
</body>
</html>
