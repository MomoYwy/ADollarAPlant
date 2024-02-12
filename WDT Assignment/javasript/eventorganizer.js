function submitEvent() {
    // Collect form data
    const eventName = document.getElementById('eventName').value;
    const organizer = document.getElementById('organizer').value;
    const eventDate = document.getElementById('eventDate').value;
    const eventTime = document.getElementById('eventTime').value;
    const description = document.getElementById('description').value;

    // Create a FormData object and append form data
    const formData = new FormData();
    formData.append('eventName', eventName);
    formData.append('organizer', organizer);
    formData.append('eventDate', eventDate);
    formData.append('eventTime', eventTime);
    formData.append('description', description);

    // Send a POST request to save_event.php
    fetch('save_event.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(result => {
        console.log(result); // Log the result, you can handle it as needed
        // Optionally, you can redirect the user or show a success message
    })
    .catch(error => console.error('Error submitting event:', error));
}