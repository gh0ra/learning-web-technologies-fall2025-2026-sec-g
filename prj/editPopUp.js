function editItem(index) {
    var item = items[index];

    document.getElementById("editIndex").value = index;
    document.getElementById("editType").value = item.type;
    document.getElementById("editTitle").value = item.title;
    document.getElementById("editCategory").value = item.category;
    document.getElementById("editLocation").value = item.location;
    document.getElementById("editDate").value = item.date;
    document.getElementById("editStatus").value = item.status;
    document.getElementById("editDescription").value = item.description;
    document.getElementById("editPopUp").style.display = "block";
}
function closeEditPopUp() {
    document.getElementById("editPopUp").style.display = "none";
}
function updateItem() {

    var index = document.getElementById("editIndex").value;
    var type = document.getElementById("editType").value;
    var title = document.getElementById("editTitle").value;
    var category = document.getElementById("editCategory").value;
    var location = document.getElementById("editLocation").value;
    var date = document.getElementById("editDate").value;
    var status = document.getElementById("editStatus").value;
    var description = document.getElementById("editDescription").value;

    items[index].type = type;
    items[index].title = title;
    items[index].category = category;
    items[index].location = location;
    items[index].date = date;
    items[index].status = status;
    items[index].description = description;
    
    closeEditPopUp();
    renderTable();
    alert("Item updated successfully!");

    return false;
}