
// file: hooks/Donations-dv.js
var dv = AppGiniHelper.DV;
var layout = dv.createLayout([6, 6]);


AppGiniHelper.dv.createLayout([6, 6])
    .add(1, ["DonationDate", "Description", "CampaignID", "Paytype", "Number", "TransNo"])
    .add(2, ["Amount", "SupporterID", "DonationYear", "Notes", "MemoryOf", "HonorOf", "Matching", "Anonymous", "Acknowledged"]);