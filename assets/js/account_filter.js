function sortTable() {
  var table, rows, switching, i, x, y, shouldSwitch, sortBy;
  table = document.getElementById("favTable");
  switching = true;
  sortBy = document.getElementById("sortSelect").value;
  while (switching) {
      switching = false;
      rows = table.rows;
      for (i = 1; i < (rows.length - 1); i++) {
          shouldSwitch = false;
          switch (sortBy) {
              // Sort by highest average rating
            // Sort by highest average rating
            case 'highestAvg':
                x = parseFloat(rows[i].getElementsByTagName("TD")[4].innerHTML);
                y = parseFloat(rows[i + 1].getElementsByTagName("TD")[4].innerHTML);
                if (x < y) {
                    shouldSwitch = true;
                }
                break;
            // Sort by lowest average rating
            case 'lowestAvg':
                x = parseFloat(rows[i].getElementsByTagName("TD")[4].innerHTML);
                y = parseFloat(rows[i + 1].getElementsByTagName("TD")[4].innerHTML);
                if (x > y) {
                    shouldSwitch = true;
                }
                  break;
              // Sort by highest user rating
              case 'highestUser':
                  x = rows[i].getElementsByTagName("TD")[3];
                  y = rows[i + 1].getElementsByTagName("TD")[3];
                  if (x.innerHTML == 'N/A' && y.innerHTML != 'N/A') {
                      shouldSwitch = true;
                  } else if (x.innerHTML != 'N/A' && y.innerHTML != 'N/A' && parseFloat(x.innerHTML) < parseFloat(y.innerHTML)) {
                      shouldSwitch = true;
                  }
                  break;
              // Sort by lowest user rating
              case 'lowestUser':
                  x = rows[i].getElementsByTagName("TD")[3];
                  y = rows[i + 1].getElementsByTagName("TD")[3];
                  if (x.innerHTML != 'N/A' && y.innerHTML == 'N/A') {
                      shouldSwitch = true;
                  } else if (x.innerHTML != 'N/A' && y.innerHTML != 'N/A' && parseFloat(x.innerHTML) > parseFloat(y.innerHTML)) {
                      shouldSwitch = true;
                  }
                  break;
          }
          if (shouldSwitch) {
              rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
              switching = true;
          }
      }
  }
}

function searchTable() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("searchInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("favTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[1];
      if (td) {
          txtValue = td.textContent || td.innerText;
          if (txtValue.toUpperCase().indexOf(filter) > -1 ||
              (td == tr[i].getElementsByTagName("td")[3] && td.innerHTML.toLowerCase() == filter.toLowerCase())) {
              tr[i].style.display = "";
          } else {
              tr[i].style.display = "none";
          }
      }
  }
}