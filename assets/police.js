function changeAddress(){   //When the user clicks off the address field
    document.querySelector('#addressButton').disabled = false;
}

function clickedAddressButton(){    //When a user clicks on the 'Save Address' Button
    document.querySelector('#addressButton').disabled = true;
    var postal1 = document.getElementById("postalInput").value;
    var street1 = document.getElementById("streetInput").value;
    $.post("php/postAddress.php",
           {
            id: 1,
            postal: postal1,
            street: street1
            });
}

function changeType(){
    var incident1 = document.getElementById("incidentType").value;
    $.post("php/postType.php",
           {
            id: 1,
            incidentType: incident1
            });
}


//The following allows drag and drop elements

function allowDrop(ev) { //Allow a callsign to be dropped
  ev.preventDefault();
}

function drag(ev) { //When dragging a callsign run the following
  ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev) { // When dropping a callsign run the following
  ev.preventDefault();
  var data = ev.dataTransfer.getData("text");
  ev.target.appendChild(document.getElementById(data));
}
//


document.getElementById('incidentInput').onkeydown = function(e){ //When adding notes to the incident run the following
    if(e.keyCode == 13){
        var input1 = document.getElementById('incidentInput').value;
        var originalText = document.getElementById('incidentText').value;
        
        const d = new Date();
        var fullTime = String(d.getHours()) + ':' + String(d.getMinutes()) + ':' + String(d.getSeconds());
        var input1 = String(fullTime) + ' ' + input1;
        var input2 = originalText + "\n" + input1;
        document.getElementById('incidentText').value =  input2;
        document.getElementById('incidentInput').value = ""
        
        $.post("php/postNote.php",
               {
                id: 1,
                incidentNotes: input2
                });
    }
}