<html>
    <head>
        <title>Police CAD - Home</title>
        <link rel="stylesheet" href="style.css">
        <script src="assets/jquery-3.7.0.js"></script>
        <?php require "include/connect.php";?>
        <?php require "php/getDetails.php";?>
    </head>
    
    
    
    <div id="banner">
        <a class="whiteLink" href="#">All incidents</a>
        <line></line>
    </div>
    <div id="UI">
        <div id="incidentNotes" class="grid-item">
            <input id="incidentInput" placeholder="Type here to add incident notes..." type="text">
            <textarea id="incidentText" readonly placeholder=""><?php echo $incidentNotes?></textarea>
        </div>
        
        <div id="incidentType" class="grid-item">
            <div id="table">
                <!--<?php $types = ['', ''] ?>-->
                <select id="incidentType" onchange="changeType()">
                    <option>Select an incident type:</option>
                    <option>1T -Traffic Stop</option>
                </select>
                <br><br>
                <button class="greenButton">Make a priority incident</button>
            </div>
        </div>
        
        <div id="address" class="grid-item">
            <div id="table">
                <input id="postalInput" type="text" value="<?php echo $postal;?>" onchange="changeAddress()" placeholder="Postal Number...">
                <input id="streetInput" type="text" value="<?php echo $streetAddress;?>" onchange="changeAddress()" placeholder="Street Name...">
                <br><br>
                <button id="addressButton" disabled onclick="clickedAddressButton()" class="greenButton">Save Address Change</button>
            </div>
        </div>
        <div id="viewMap" class="grid-item"><p class="header">This is the map box</p>
            <button class="greyButton" id="mapButton">Access GTA Map</button>
        </div>
        
        <div id="onScene" class="grid-item" ondrop="drop(event)" ondragover="allowDrop(event)"><p class="header">Units 10-7</p></div>
        <div id="responding" class="grid-item" ondrop="drop(event)" ondragover="allowDrop(event)"><p class="header">Units 10-2</p></div>
        
        <div id="eventTimes" class="grid-item"><p class="header">Incident History</p>
            <p class="boldText">Created: 14:02</p>
            <p>1st Unit Assigned: 14:03</p>
            <p>1st Unit Arrival: 14:07</p>
            <p>Incident Closed: 14:15</p>
        </div>
        
        <div id="availableUnits" class="grid-item" ondrop="drop(event)" ondragover="allowDrop(event)">
            <p class="header">Units 10-3</p>
            <br>
            <button class="unitDrag" id="WTG1" draggable="true" ondragstart="drag(event)">WNI1</button>
            
        </div>
        
        <div id="interCad" class="grid-item"><p class="header">Intercad</p>
            <span>
                <button disabled class="greyButton">POL2FIR</button> 
                <button disabled class="greyButton">POL2AMB</button>
            </span>
            Unavailable while in beta
        </div>
        
        <div id="callsignInfo" class="grid-item"><p class="header">Callsign wiki</p>
            <p class="boldText">Prefix: W = Wellington Region</p>
        </div>
        
        <div id="sops" class="grid-item"><p class="header">Standard Operating Procedures</p>
            <form action="#" method="get" target="_blank">
                <button type="submit" class="greyButton">Armed Offenders</button>
            </form>
            <form action="#" method="get" target="_blank">
                <button type="submit" class="greyButton">Example SOP Link</button>
            </form>
        </div>
        
        <div id="lookup" class="grid-item"><p class="header">Lookup details</p>
            <!--<span> Use when can access civ details
                <form action="#">
                    <button type="submit" class="greyButton" id="rego">Rego Lookup</button>
                </form>
                <form action="#">
                    <button type="submit" class="greyButton" id="person">Person Lookup</button>
                </form>
            </span>
            <span>
                <form action="#">
                    <button type="submit" class="greyButton">Building Lookup</button>
                </form>
                <form action="#">
                    <button typpe="submit" class="greyButton">Staff Lookup</button>
                </form>
            </span>--> Unavailable while in Beta
        </div>
        
        <div id="close" class="grid-item"><p class="header">Incident complete</p>
            <span>
                <p>Mark Incident as closed?</p>
                <button class="greenButton">Confirm</button>
            </span>
        </div>
        
    </div>
</html>

<script src="assets/police.js"></script>