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
    ],
    dayClick: function(date, jsEvent, view) {
        var modal = $("#myModal"),
            currentDate = new Date();

            if(date > currentDate){
              modal.modal('show');

              $(modal).find('#datetimepicker1').datetimepicker({
                defaultDate: date,
                sideBySide: true
              });

              $(modal).find('#datetimepicker1').data("DateTimePicker").date(date);
            }
            else
            {
              alert('Please select future time');
            }

    },
    eventClick: function(event, element) {
        event.title = "CLICKED!";
    },
    dragStart: function(_dragElement, ev, ui){
      console.log(_dragElement);
    }
  });



  $('#weekcalendar').fullCalendar({
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
        title: 'Free for talk',
        start: new Date(y, m, d+3,8,0),
        end: new Date(y, m, d+3, 10, 0),
        allDay: false
      },
      {
        id: 1000,
        title: 'Free for talk',
        start: new Date(y, m, d+2,14,0),
        end: new Date(y, m, d+2, 15, 0),
        allDay: false
      },
      {
        id: 1001,
        title: 'Free for talk',
        start: new Date(y, m, d+1,15,0),
        end: new Date(y, m, d+1, 16, 0),
        allDay: false
      },
      {
        id: 1002,
        title: 'Free for talk',
        start: new Date(y, m, d,16,0),
        end: new Date(y, m, d, 18, 0),
        allDay: false
      },
      {
        id: 1003,
        title: 'Free for talk',
        start: new Date(y, m, d+2,13,0),
        end: new Date(y, m, d+2, 14, 0),
        allDay: false
      }, 
    ],
    dayClick: function(date, jsEvent, view) {
        var modal = $("#myotherModal"),
            currentDate = new Date();

            if(date > currentDate){
              modal.modal('show');

              $(modal).find('#datetimepicker1').datetimepicker({
                defaultDate: date,
                sideBySide: true
              });
              $(modal).find('#datetimepicker2').datetimepicker({
                sideBySide: true
              });

              $(modal).find('#datetimepicker1').data("DateTimePicker").date(date);
            }
            else
            {
              alert('Please select future time');
            }
    },
  });

  $(document).on("click","#addfreetime",function(){
      var modal = $("#myotherModal"),
          start_time = $(modal).find("input[name='start_time']").val(),
          end_time = $(modal).find("input[name='end_time']").val(),
          duration = $(modal).find("select[name='duration']").val(),
          start = new Date(start_time),
          end = new Date(end_time);

      var newevent = {
          id: Math.floor(Math.random() * (9999 - 999)) + 999,
          title: "Free for call",
          start: start,
          end: end,
          allDay: false
        };

        $("#weekcalendar").fullCalendar('renderEvent',newevent);

        modal.modal('hide');
  });

  $(document).on("click","#addshow",function(){
      var modal = $("#myModal"),
          title = $(modal).find("input[name='title']").val(),
          start_time = $(modal).find("input[name='start_time']").val(),
          duration = $(modal).find("select[name='duration']").val(),
          start = new Date(start_time),
          end = new Date(start_time);

      end.setMinutes(parseInt(end.getMinutes()) + parseInt(duration));

      var newevent = {
          id: Math.floor(Math.random() * (9999 - 999)) + 999,
          title: title,
          start: start,
          end: end,
          allDay: false
        };

        $("#calendar").fullCalendar('renderEvent',newevent);

        modal.modal('hide');
  });


    var $gallery = $( "#gallery" ),
      $trash = $( "#trash" );
 
    // let the gallery items be draggable
    $( "div", $gallery ).draggable({
      cancel: "a.ui-icon", // clicking an icon won't initiate dragging
      revert: "invalid", // when not dropped, the item will revert back to its initial position
      containment: "document",
      helper: "clone",
      cursor: "move"
    });
 
    // let the trash be droppable, accepting the gallery items
    $trash.droppable({
      accept: "#gallery > div",
      activeClass: "ui-state-highlight",
      drop: function( event, ui ) {
        ui.draggable.clone().removeClass('btn-default').addClass('btn-success').appendTo($trash);
        
        console.log( ui.draggable );
      }
    });
 
    // let the gallery be droppable as well, accepting items from the trash
    $gallery.droppable({
      accept: "#trash div",
      activeClass: "custom-state-active",
      drop: function( event, ui ) {
        recycleImage( ui.draggable );
      }
    });






});