DiagramStyle: uml
DiagramName: deleteActivity

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

state: em, "ActivityExists",,t;

msg: ad,em,deleteActivity;

msg: em, cl,"deletingActivity";
regionbegin: cl, Activation;
regionend: cl;
msg:cl,em,1,*;

msg:em,sgwp,ActivityDeleted;
msg:sgwp,ad,"ActivityDeletedRepresentation";
state:em,ActivityExists;




