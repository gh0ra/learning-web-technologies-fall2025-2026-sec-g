let items = [];

function renderTable(){
    var table = document.getElementById("itemsTable");
    var html = "";
    var i;

    for(i = 0; i < items.length; i++){
        html =html+ "<tr>";
        html =html+"<td>" +items[i].title + "</td>";
        html =html+ "<td>"+ items[i].type + "</td>";
        html =html+ "<td>" +items[i].category + "</td>";
        html =html+ "<td>"+items[i].location + "</td>";
        html =html+ "<td>" +items[i].date + "</td>";
        html =html+"<td>" +items[i].status + "</td>";
        html =html+ "<td>";
        html =html+ "<button onclick='viewItem(" + i + ")'>View</button>";
        html =html+ "<button onclick='editItem(" + i + ")'>Edit</button>";
        html =html+"<button onclick='deleteItem(" +i+ ")'>Delete</button>";
        html = html+ "</td>";
        html = html+"</tr>";
    }
    table.innerHTML = html;
}