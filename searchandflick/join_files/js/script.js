function prepareEventHandlers() {
    document.getElementById("search_form").onsubmit = function() {
        if (document.getElementById("search").value == "") {
           document.getElementById("error_message").innerHTML = "Please input a search term";
           return false;
        } else {
            document.getElementById("error_message").innerHTML = "";
            return true;
        }
    };
}
window.onload = function() {
    prepareEventHandlers();
}