
// file: hooks/Supporters-dv.js
var dv = AppGiniHelper.DV;
var layout = dv.createLayout([6, 6]);


AppGiniHelper.dv.createLayout([6, 6])
    .add(1, ["FirstName", "SpouseName", "Address1", "City", "Zip", "Phone", "Email", "TotalDonated", "TotalMatched" ])
    .add(2, ["LastName", "Business","Address2", "State", "Country", "Cell", "Status", "Grouping", "ContactMethod"]);