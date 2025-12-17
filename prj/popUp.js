function openPopUp() {
    document.getElementById("addPopUp").style.display = "block";
}

function closePopUp() {
    document.getElementById("addPopUp").style.display = "none";
}

function saveItem() {

    var type = document.getElementById("newType").value;
    var title = document.getElementById("newTitle").value;
    var category = document.getElementById("newCategory").value;
    var location = document.getElementById("newLocation").value;
    var date = document.getElementById("newDate").value;
    var status = document.getElementById("newStatus").value;
    var description = document.getElementById("newDescription").value;
    

    var newItem = {};
    newItem.type = type;
    newItem.title = title;
    newItem.category = category;
    newItem.location = location;
    newItem.date = date;
    newItem.status = status;
    newItem.description = description;
    items.push(newItem);
    renderTable();
    

    closePopUp();
    
    document.getElementById("newTitle").value = "";
    document.getElementById("newLocation").value = "";
    document.getElementById("newDate").value = "";
    document.getElementById("newDescription").value = "";
    
    alert("Item added successfully!");

    return false;
    
}