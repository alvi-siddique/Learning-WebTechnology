function loadUsers() {
    // Create a new XMLHttpRequest object
    let xhr = new XMLHttpRequest();

    // Set the URL and method for the request
    xhr.open('GET', '../controllers/allUsers.php');


    // Define a function to handle the response
    xhr.onload = function () {
        if (xhr.status === 200 && xhr.readyState === 4) {
            let students = JSON.parse(xhr.response);
            let html = '';
            for (let i = 0; i < students.length; i++) {
                html += '<tr>';
                html += '<td>' + students[i].username + '</td>';
                html += '<td>' + students[i].email + '</td>';
                html += '</tr>';
            }
            document.getElementById('info-data').innerHTML = html;

        } else {
            // There was an error, handle it here
            console.log('Error: ' + xhr.status);
        }
    };

    // Send the request
    xhr.send();
}

function removeData() {
    document.getElementById('info-data').innerHTML = '';
}