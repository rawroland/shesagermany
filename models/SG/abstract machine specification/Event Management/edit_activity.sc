DiagramStyle: uml
DiagramName: editActivity

PageSize: auto, auto
PageMargins: 10, 10, 10, 10
Font: "Arial", "8", "Regular"
LineOffset: 20
Author: "
Company: ""
Date: ""
Version: ""
PrintFootLine: no

actor: ad,Admin;
process:sgwp,SGWebPage;
process: em,"SG_ActivityManagement","", 0, 0;
process:cl,"Activity","", 0, 0;

state: em, "ActivityExists",,t;

msg: ad,em,editActivity;

msg: em, cl,"editingActivity";
regionbegin: cl, Activation;
regionend: cl;
msg:cl,em,1,*;

msg:em,sgwp,ActivityEdited;
msg:sgwp,ad,"ActivityeditedRepresentation";
state:em,ActivityExists;




