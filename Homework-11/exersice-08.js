/**
 * 
 */
function addRow() {
		var row = document.createElement('tr');	
		var tbody = document.querySelector('table tbody');
		var rowsCount = tbody.querySelectorAll('tr').length;
		row.id = 'row-' + (rowsCount + 1);
		
		var numberCell = document.createElement('td');
		numberCell.innerHTML = rowsCount + 1;
		row.appendChild(numberCell);
		
		var nameCell = document.createElement('td');
		nameCell.innerHTML = document.getElementById('name').value;
		row.appendChild(nameCell);
		
		var actionCell = document.createElement('td');
		var link = document.createElement('a');
		link.innerHTML = 'Delete';
		link.href="javascript:void(0);";

		link.className = 'delete-link';
		actionCell.appendChild(link);
		row.appendChild(actionCell);
		
		tbody.appendChild(row);
	}
function deleteRow(event) {
	var target = event.target;
	var isLink = target.tagName.toLowerCase() == 'a';
	var hasClass = target.className.split(' ').indexOf('delete-link') != -1; 
	
	if (!isLink || !hasClass) {
		return ;
	}
	
	var tbody = document.querySelector('table tbody');
	tbody.removeChild(target.parentElement.parentElement);
}