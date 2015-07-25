DiagramStyle: uml
DiagramName: addActivity

PageSize: auto, auto
PageMargins: 10, 10, 10, 10
Font: "Arial", "8", "Regular"
LineOffset: 20
Author: ""
Company: ""
Date: ""
Version: ""
PrintFootLine: no

actor: ad,Admin;
process:sgwp,SGWebPage;
process: em,"SG_ActivityManagement","", 0, 0;
process:cl,"Activity","", 0, 0;

state: em, "¬ActivityExists",,t;

msg: ad,em,addActivity;

msg: em, cl,"addingActivity";
regionbegin: cl, Activation;
regionend: cl;
msg:cl,em,1,*;

msg:em,sgwp,ActivityAdded;
msg:sgwp,ad,"ActivityAddedRepresentation";
state:em,ActivityExists;





