<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Account</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <h2>Manage Account</h2>
            <ul>
                <li onclick="showPage('editProfile')">Edit Profile</li>
                <li onclick="showPage('bookmark')">Bookmark</li>
                <li onclick="showPage('requestAttraction')">Request Attraction</li>
                <li onclick="showPage('requestEvent')">Request Event</li>
                <li onclick="logout()">Logout</li>
            </ul>
        </div>

        <div class="content">
            <div id="editProfile" class="page">
                <h2>Edit Profile</h2>
                <form>
                    <label>First Name:</label>
                    <input type="text" placeholder="Enter First Name"><br>
                    <label>Last Name:</label>
                    <input type="text" placeholder="Enter Last Name"><br>
                    <label>Email:</label>
                    <input type="email" placeholder="Enter Email"><br>
                    <label>Address:</label>
                    <input type="text" placeholder="Enter Address"><br>
                    <label>Contact Number:</label>
                    <input type="text" placeholder="Enter Contact Number"><br>
                    <label>City:</label>
                    <input type="text" placeholder="Enter City"><br>
                    <label>Password:</label>
                    <input type="password" placeholder="Enter Password"><br>
                    <button type="submit">Save</button>
                </form>
            </div>

            <div id="bookmark" class="page">
                <h2>Bookmark</h2>
                <p>List of saved tourist attractions:</p>
                <div class="bookmark-item">Lakeside Blue Resort</div>
                <div class="bookmark-item">Mountain View Park</div>
            </div>

            <div id="requestAttraction" class="page">
                <h2>Request Tourist Attraction</h2>
                <form>
                    <label>Tourist Attraction Name:</label>
                    <input type="text" placeholder="Enter Attraction Name"><br>
                    <label>Tourist Attraction Type:</label>
                    <select>
                        <option>Nature</option>
                        <option>History</option>
                        <option>Art</option>
                        <option>Playground</option>
                    </select><br>
                    <label>Address:</label>
                    <input type="text" placeholder="Enter Address"><br>
                    <label>Upload Photo:</label>
                    <input type="file"><br>
                    <button type="submit">Save</button>
                </form>
            </div>

            <div id="requestEvent" class="page">
                <h2>Request Event</h2>
                <form>
                    <label>Event Name:</label>
                    <input type="text" placeholder="Enter Event Name"><br>
                    <label>Event Description:</label>
                    <input type="text" placeholder="Enter Event Description"><br>
                    <label>Event Location:</label>
                    <input type="text" placeholder="Enter Event Location"><br>
                    <label>Event Period:</label>
                    <input type="text" placeholder="Enter Event Period"><br>
                    <button type="submit">Save</button>
                </form>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>
