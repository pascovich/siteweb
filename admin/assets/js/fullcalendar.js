$(document).ready(function(){
	"use strict";
	
	/************************************************
	*				External Dragging				*
	************************************************/

	/* initialize the calendar
	-----------------------------------------------------------------*/

	$('#fc-external-drag').fullCalendar({
		header: {
			left: 'prev,next today',
			center: 'title',
			right: 'month,agendaWeek,agendaDay'
		},
		editable: true,
		droppable: true, // this allows things to be dropped onto the calendar
		defaultDate: '2018-01-12',
		events: [
			{
				title: 'All Day Event',
				start: '2018-01-01',
				color: '#967ADC'
			},
			{
				title: 'Long Event',
				start: '2018-01-07',
				end: '2018-01-10',
				color: '#37BC9B'
			},
			{
				id: 999,
				title: 'Repeating Event',
				start: '2018-01-09T16:00:00',
				color: '#37BC9B'
			},
			{
				id: 999,
				title: 'Repeating Event',
				start: '2018-01-16T16:00:00',
				color: '#F6BB42'
			},
			{
				title: 'Conference',
				start: '2018-01-11',
				end: '2018-01-13',
				color: '#f4516c'
			},

		],
		drop: function() {
			// is the "remove after drop" checkbox checked?
			if ($('#drop-remove').is(':checked')) {
				// if so, remove the element from the "Draggable Events" list
				$(this).remove();
			}
		}
	});

	/* initialize the external events
	-----------------------------------------------------------------*/

	$('#external-events .fc-event').each(function() {
		// store data so the calendar knows to render an event upon drop
		$(this).data('event', {
			title: $.trim($(this).text()), // use the element's text as the event title
			className: $(this).data('class'),
			stick: true // maintain when user navigates (see docs on the renderEvent method)
		});

		// make the event draggable using jQuery UI
		$(this).draggable({
			zIndex: 999,
			revert: true,      // will cause the event to go back to its
			revertDuration: 0  //  original position after the drag
		});

	});
});