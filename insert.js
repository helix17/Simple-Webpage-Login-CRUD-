
function validate(field, query) {
if (str.length != 0) {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById(field).innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "validate.php?field=" + field + "&query=" + query, true);
        xmlhttp.send();
}
}