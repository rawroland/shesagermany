DiagramStyle: uml
DiagramName: addEvent

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
process: em,"SG_EventManagement","", 0, 0;
process:cl,"Event","", 0, 0;

state: em, "¬EventExists",,t;

msg: ad,em,addEvent;

msg: em, cl,"addingEvent";
regionbegin: cl, Activation;
regionend: cl;
msg:cl,em,1,*;

msg:em,sgwp,EventAdded;
msg:sgwp,ad,"EventAddedRepresentation";
state:em,EventExists;




