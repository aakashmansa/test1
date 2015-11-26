/*!
 * FullCalendar v1.6.4
 * Docs & License: http://arshaw.com/fullcalendar/
 * (c) 2013 Adam Shaw
 */
$(document).ready(function(){
  
  var date = new Date();
  var d = date.getDate();
  var m = date.getMonth();
  var y = date.getFullYear();
  
  $('#calendar').fullCalendar({
    header: {
      left: 'prev,next today',
      center: 'title',
      right: 'month,agendaWeek,agendaDay'
    },
    editable: true,
    defaultView: 'month',
    events: [
      {
        id: 999,
        title: 'Sports Talk Show 1',
        start: new Date(y, m, d-3,13,0),
        end: new Date(y, m, d-3, 14, 0),
        allDay: false
      },
      {
        id: 1000,
        title: 'Sports Talk Show 2',
        start: new Date(y, m, d-2,14,0),
        end: new Date(y, m, d-2, 15, 0),
        allDay: false
      },
      {
        id: 1001,
        title: 'Sports Talk Show 3',
        start: new Date(y, m, d-1,15,0),
        end: new Date(y, m, d-1, 16, 0),
        allDay: false
      },
      {
        id: 1002,
        title: 'Sports Talk Show 4',
        start: new Date(y, m, d,16,0),
        end: new Date(y, m, d, 18, 0),
        allDay: false
      },
      {
        id: 1003,
        title: 'Sports Talk Show 5',
        start: new Date(y, m, d+2,13,0),
        end: new Date(y, m, d+2, 14, 0),
        allDay: false
      },
    ]
  });
});