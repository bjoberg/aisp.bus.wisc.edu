<?php require("../includes/header.php"); ?>
<div id="schedule" class="container-fluid no-padding no-margin">
	<link href='fullcalendar.css' rel='stylesheet' />
	<link href='fullcalendar.print.css' rel='stylesheet' media='print' />
	<script src='lib/jquery.min.js'></script>
	<script src='lib/moment.min.js'></script>
	<script src='fullcalendar.min.js'></script>
	<script>
	$(document).ready(function() {
		
		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay'
			},
			//defaultDate: '2015-02-12',
			editable: false,
			eventLimit: true, // allow "more" link when too many events
			events: {
				url: 'php/get-events.php',
				error: function() {
					$('#script-warning').show();
				}
			},
			loading: function(bool) {
				$('#loading').toggle(bool);
			},
			eventRender: function(event, element) {
				element.find('.fc-title').append("<br/>" + event.description);
			}
		});
		
	});

	</script>
	<div id='script-warning'>
		<code>php/get-events.php</code> must be running.
	</div>

	<div id='loading'>loading...</div>

	<div id='calendar'></div>
</div>
<?php require("../includes/footer.php"); ?>