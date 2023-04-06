
const drag_first = document.getElementById("drag-first");

var flag = 0; // course is in first slot
function allowDrop(ev) {
    ev.preventDefault();
  }
  
  function drag(ev) {
    ev.dataTransfer.setData("text", ev.target.id);
    
    // if we're dragging from the original spot
    if (flag == 0) {
        // show colored box of drop slot
        document.getElementById("drag-second").style.background = "#E2F0CB";
        document.getElementById("drag-second").style.opacity = "0.5";
    } else {
        document.getElementById("drag-first").style.background = "#E2F0CB";    
        document.getElementById("drag-first").style.opacity = "0.5";

    }
    
    }

  function drop(ev) {
    ev.preventDefault();
    var data = ev.dataTransfer.getData("text");
    ev.target.appendChild(document.getElementById(data));

    if (flag == 0) {
        document.getElementById("drag-second").style.opacity = "1.0";
        document.getElementById("drag-item").textContent = "7:00-10:00";
    } else {
        document.getElementById("drag-first").style.opacity = "1.0";
        document.getElementById("drag-item").textContent = "2:30-5:30";

    }
    flag = flag == 0 ? 1: 0;

  }

  function dragend(ev) {
    ev.preventDefault();
    if (flag == 0) {
    document.getElementById("drag-second").style.background = "transparent";
    
    } else {
    document.getElementById("drag-first").style.background = "transparent";
    }
   }