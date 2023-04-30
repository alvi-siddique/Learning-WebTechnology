function searchUser() {
    var username = document.getElementById('username').value;
    var xmlhttp = new XMLHttpRequest();

    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById('searchResults').innerHTML = this.responseText;
      }
    };

    xmlhttp.open('GET', '../controllers/searchCheck.php?username=' + username, true);
    xmlhttp.send();
  }

  function removeData() {
    document.getElementById('searchResults').innerHTML = '';
}