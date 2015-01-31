DiagramStyle: uml
DiagramName: browseEvents

PageSize: auto, auto
PageMargins: 10, 10, 10, 10
Font: "Arial", "8", "Regular"
LineOffset: 20
Author: ""
Company: ""
Date: ""
Version: ""
PrintFootLine: no

actor: visitor,"Visitor","", 0, 0;
process:sgwp,SGWebPage;
process: em,SG_EventManagement;
process:ev,Event;

msg: visitor,em,"browseEvents";

msg: em, ev, getEvents;
regionbegin: ev, Activation;
regionend: ev;
msg:ev,em,"events",*;

msg:em,sgwp,"events";
msg:sgwp,visitor,"eventsView";

