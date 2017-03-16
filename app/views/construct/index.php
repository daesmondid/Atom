<!-- Page Metadata -->
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<!-- External Link -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>

<div>Object Class (singular form, no space, no underscore, no capitals, unique)</div>
<input type = "text" name = "entName" form = "constForm" />
<br /><br />
<div>Object Display Name</div>
<input type = "text" name = "entDisplay" form = "constForm" />
<br /><br />
<div>Object does not have a name for main reference</div>
<input type = "checkbox" id = "cb" style = "-webkit-appearance: checkbox;"/>
<br /><br />
<table border = 1 id = "field0">
    <tr>
        <th>Type</th>
        <th>Field Name (no capital, no space, underscore is allowed, unique within an object)</th>
        <th>Display Name</th>
    </tr>
    <tr>
        <td>
            Text
            <input type = "hidden" value = "1" name = "field0type" form = "constForm" />
        </td>
        <td>
            name
            <input type = "hidden" value = "name" name = "field0name" form = "constForm" />
        </td>
        <td><input type = "text" name = "field0display" form = "constForm" /></td>
    </tr>
</table>

<div id = "fieldList">

<!--Field Listing Area-->

</div>
<br />
<button onclick = "addField()">Add Field</button>

<form action = "construct/process" method = "POST" id = "constForm">
    <input id = "counterVal" name = "counterVal" type = "hidden" value = "1" />
    <input type = "submit" />
</form>

<script>
    
    $("#cb").change(function() {
                    if(this.checked) {
                    $("#field1").hide();
                    }
                    else {
                    $("#field1").show();
                    }
                    });
    
    let counter = 1;
    
    function fieldDetail(fieldTable) {
        
        if (document.getElementById(fieldTable+"select").value == 1) {
            
            document.getElementById(fieldTable).innerHTML =
            '<tr><th>Type</th><th>Field Name (no capital, no space, underscore is allowed, unique within an object)</th><th>Display Name</th></tr><tr><td><select onchange = "fieldDetail(&quot;'+fieldTable+'&quot;)" id = "'+fieldTable+'select" name = "'+fieldTable+'type" form = "constForm"><option value = "1" selected>Text</option><option value = "2">Number</option><option value = "3">Date &amp; Time</option><option value = "4">Date</option><option value = "5">Time</option><option value = "6">Year</option><option value = "7">Relational</option></select></td><td><input type = "text" name = "'+fieldTable+'name" form = "constForm" /></td><td><input type = "text" name = "'+fieldTable+'display" form = "constForm" /></td></tr>';
            
        }
        else if (document.getElementById(fieldTable+"select").value == 2) {
            
            document.getElementById(fieldTable).innerHTML = '<tr><th>Type</th><th>Field Name (no capital, no space, underscore is allowed, unique within an object)</th><th>Display Name</th><th>Min</th><th>Max</th></tr><tr><td><select onchange = "fieldDetail(&quot;'+fieldTable+'&quot;)" id = "'+fieldTable+'select" name = "'+fieldTable+'type" form = "constForm"><option value = "1">Text</option><option value = "2" selected>Number</option><option value = "3">Date &amp; Time</option><option value = "4">Date</option><option value = "5">Time</option><option value = "6">Year</option><option value = "7">Relational</option><option value = "8">Other</option></select></td><td><input type = "text" name = "'+fieldTable+'name" form = "constForm" /></td><td><input type = "text" name = "'+fieldTable+'display" form = "constForm" /></td><td><input type = "text" name = "'+fieldTable+'min" form = "constForm" /></td><td><input type = "text" name = "'+fieldTable+'max" form = "constForm" /></td></tr>';
            
        }
        else if (document.getElementById(fieldTable+"select").value == 3) {
            
            document.getElementById(fieldTable).innerHTML = '<tr><th>Type</th><th>Field Name (no capital, no space, underscore is allowed, unique within an object)</th><th>Display Name</th></tr><tr><td><select onchange = "fieldDetail(&quot;'+fieldTable+'&quot;)" id = "'+fieldTable+'select" name = "'+fieldTable+'type" form = "constForm"><option value = "1">Text</option><option value = "2">Number</option><option value = "3" selected>Date &amp; Time</option><option value = "4">Date</option><option value = "5">Time</option><option value = "6">Year</option><option value = "7">Relational</option><option value = "8">Other</option></select></td><td><input type = "text" name = "'+fieldTable+'name" form = "constForm" /></td><td><input type = "text" name = "'+fieldTable+'display" form = "constForm" /></td></tr>';
            
        }
        else if (document.getElementById(fieldTable+"select").value == 4) {
            
            document.getElementById(fieldTable).innerHTML = '<tr><th>Type</th><th>Field Name (no capital, no space, underscore is allowed, unique within an object)</th><th>Display Name</th></tr><tr><td><select onchange = "fieldDetail(&quot;'+fieldTable+'&quot;)" id = "'+fieldTable+'select" name = "'+fieldTable+'type" form = "constForm"><option value = "1">Text</option><option value = "2">Number</option><option value = "3">Date &amp; Time</option><option value = "4" selected>Date</option><option value = "5">Time</option><option value = "6">Year</option><option value = "7">Relational</option><option value = "8">Other</option></select></td><td><input type = "text" name = "'+fieldTable+'name" form = "constForm" /></td><td><input type = "text" name = "'+fieldTable+'display" form = "constForm" /></td></tr>';
            
        }
        else if (document.getElementById(fieldTable+"select").value == 5) {
            
            document.getElementById(fieldTable).innerHTML = '<tr><th>Type</th><th>Field Name (no capital, no space, underscore is allowed, unique within an object)</th><th>Display Name</th></tr><tr><td><select onchange = "fieldDetail(&quot;'+fieldTable+'&quot;)" id = "'+fieldTable+'select" name = "'+fieldTable+'type" form = "constForm"><option value = "1">Text</option><option value = "2">Number</option><option value = "3">Date &amp; Time</option><option value = "4">Date</option><option value = "5" selected>Time</option><option value = "6">Year</option><option value = "7">Relational</option><option value = "8">Other</option></select></td><td><input type = "text" name = "'+fieldTable+'name" form = "constForm" /></td><td><input type = "text" name = "'+fieldTable+'display" form = "constForm" /></td></tr>';
            
        }
        else if (document.getElementById(fieldTable+"select").value == 6) {
            
            document.getElementById(fieldTable).innerHTML = '<tr><th>Type</th><th>Field Name (no capital, no space, underscore is allowed, unique within an object)</th><th>Display Name</th></tr><tr><td><select onchange = "fieldDetail(&quot;'+fieldTable+'&quot;)" id = "'+fieldTable+'select" name = "'+fieldTable+'type" form = "constForm"><option value = "1">Text</option><option value = "2">Number</option><option value = "3">Date &amp; Time</option><option value = "4">Date</option><option value = "5">Time</option><option value = "6" selected>Year</option><option value = "7">Relational</option><option value = "8">Other</option></select></td><td><input type = "text" name = "'+fieldTable+'name" form = "constForm" /></td><td><input type = "text" name = "'+fieldTable+'display" form = "constForm" /></td></tr>';
            
        }
        else if (document.getElementById(fieldTable+"select").value == 7) {
            
            document.getElementById(fieldTable).innerHTML = '<tr><th>Type</th><th>Field Name (no capital, no space, underscore is allowed, unique within an object)</th><th>Display Name</th><th>Related Model</th><th>Relation Type</th></tr><tr><td><select onchange = "fieldDetail(&quot;'+fieldTable+'&quot;)" id = "'+fieldTable+'select" name = "'+fieldTable+'type" form = "constForm"><option value = "1">Text</option><option value = "2">Number</option><option value = "3">Date &amp; Time</option><option value = "4">Date</option><option value = "5">Time</option><option value = "6">Year</option><option value = "7" selected>Relational</option><option value = "8">Other</option></select></td><td><input type = "text" name = "'+fieldTable+'name" form = "constForm" /></td><td><input type = "text" name = "'+fieldTable+'display" form = "constForm" /></td><td><input type = "text" name = "'+fieldTable+'relmodel" form = "constForm" /></td><td><input type = "text" name = "'+fieldTable+'reltype" form = "constForm" /></td></tr>';
            
        }
        else if (document.getElementById(fieldTable+"select").value == 8) {
            
            document.getElementById(fieldTable).innerHTML = '<tr><th>Type</th><th>Field Name (no capital, no space, underscore is allowed, unique within an object)</th><th>Display Name</th></tr><tr><td><select onchange = "fieldDetail(&quot;'+fieldTable+'&quot;)" id = "'+fieldTable+'select" name = "'+fieldTable+'type" form = "constForm"><option value = "1">Text</option><option value = "2">Number</option><option value = "3">Date &amp; Time</option><option value = "4">Date</option><option value = "5">Time</option><option value = "6">Year</option><option value = "7">Relational</option><option value = "8" selected>Other</option></select></td><td><input type = "text" name = "'+fieldTable+'name" form = "constForm" /></td><td><input type = "text" name = "'+fieldTable+'display" form = "constForm" /></td></tr>';
            
        }
        
    }

function addField(){
    
    $("#fieldList").append('<br /><table border = 1 id = "field'+counter+'"><tr><th>Type</th></tr><tr><td><select onchange = "fieldDetail(&quot;field'+counter+'&quot;)" id = "field'+counter+'select"><option value = "0">--</option><option value = "1">Text</option><option value = "2">Number</option><option value = "3">Date &amp; Time</option><option value = "4">Date</option><option value = "5">Time</option><option value = "6">Year</option><option value = "7">Relational</option><option value = "8">Other</option></select></td></tr></table>');
    
    counter++;
    document.getElementById("counterVal").setAttribute("value", counter);
    
}
</script>