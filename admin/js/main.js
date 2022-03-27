function Delete(event) {
    let request_ID = event.currentTarget.parentElement.parentElement.children[0].children[0].children[0].children[1].innerText;
    request_ID = parseInt(request_ID);
    let accept = confirm("Delete request(ID: "+request_ID+")?");
    if (accept) {
        $.post(
            "vendor/delete.php", {
                deleted_id:request_ID
            }, DeletedSuccessfully
        )
    } else {
        alert("Delete unaccept")
    }
}

function DeletedSuccessfully() {
    alert("Deleted Successfully!");
    location.reload();
}