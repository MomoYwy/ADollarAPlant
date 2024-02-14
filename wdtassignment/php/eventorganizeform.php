<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/wdtassignment/css/eventorganizer.css">
    <link rel="stylesheet" href="../css/root.css">
    <title>Create Event</title>

    <style>
    .event-form-container {
        background-color: #FCFBF4;
        max-width: 750px;
        margin: 150px auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-shadow: 0 10px 10px rgba(0, 0, 0, 0.5);
    }

    input[type=text], select, input[type=text]{
        width: 100%;
        padding: 12px 20px;
        margin: 25px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    input[type=date], input[type=time], input[type=number], input[type=address] {
        width: 30%;
        padding: 12px 10px;
        margin: 25px 5px;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    input[type=submit] {
        width: 100%;
        justify-content: center;
        align-items: center;
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: #45a049;
    }

    div {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
    }

    button {
        padding: 10px 20px;
        font-size: 16px;
        cursor: pointer;
        background-color: #4CAF50;
        color: white;
        border: none;
        border-radius: 5px;
    }

    button:hover {
        background-color: #45a049;
    }
    </style>

</head>

<body>
    <div class="event-form-container">
        <h2>Create an Event</h2>
        <form id="event-form" action="/ADollarAPlant/wdtassignment/php/eventorganizer.php" method="POST">
            <label for="EventName">Event Name:</label>
            <input type="text" id="eventName" name="EventName" required>

            <label for="organizer">Organizer:</label>
            <input type="text" id="organizer" name="Organizer" required>

            <label for="Date">Date:</label>
            <input type="date" id="eventDate" name="Date" required>

            <label for="Time">Time:</label>
            <input type="time" id="eventTime" name="Time" required>

            <label for="NumberofVolunterr"></br>No. of Volunteers(Currently):</label>
            <input type="number" id="NumberofVolunteer" name="NumberofVolunteer" required></input>

            <label for="Venue"></br>Venue:</label>
            <input type="address" id="eventVenue" name="Venue" required>

            <button type="submit" onclick="submitEvent()">Submit Event</button>
        </form>
    </div>

    <script></script>
</body>
</html>