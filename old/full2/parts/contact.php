<form method="post" action="">
	<fieldset>
		Name:<br>
		<input type="text" name="name" class="send-item" label="Dr.Example"/>
		Email:<br>
		<input type="email" name="email" class="send-item" label="you@wat.com"/>
		Message:<br>
		<textarea class="send-item"></textarea>
	</fieldset>
	<input type="submit" value="Submit" onclick="submit();"/>
</form>
<script>
function submit(e) {
	e.preventDefault();
	var elems = document.getElementsByClassName("send-item");
	var args = ["name=", "&email=", "&message="];
	var response = "";
	for (i=0; i<elems.length; i++) {
		response += args[i] + elems[i];
	}
    var repo = new XMLHttpRequest();
    repo.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    repo.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            console.log("response: " + this.responseText);
        }
    };
    repo.open("POST", "data.php", true);
    repo.send(response);
    console.log("sent");
}
</script>