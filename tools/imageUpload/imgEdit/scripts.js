/*
Andrew Nyland, 24060, 7/10/17
Provides deletion client side code
*/
function deleteImg(id) {
    var repo = new XMLHttpRequest();
    repo.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            console.log(this.responseText);
            location.reload(true);
        }
    };
    repo.open("GET", "data.php?id=" + id, true);
    repo.send();
    console.log("done");
}