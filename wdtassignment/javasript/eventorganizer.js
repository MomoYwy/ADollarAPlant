function submitEvent() {
    const eventName = document.getElementById('eventName').value;
    const organizer = document.getElementById('organizer').value;
    const eventDate = document.getElementById('eventDate').value;
    const eventTime = document.getElementById('eventTime').value;
    const description = document.getElementById('description').value;

    const formData = new FormData();
    formData.append('eventName', eventName);
    formData.append('organizer', organizer);
    formData.append('eventDate', eventDate);
    formData.append('eventTime', eventTime);
    formData.append('description', description);

    fetch('save_event.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(result => {
        console.log(result);
    })
    .catch(error => console.error('Error submitting event:', error));
}