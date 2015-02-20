<?php $this->extend('/Common/schedule'); ?>
<?= $this->start('Common_Content') ?>
	<script>
		$(document).ready(function() {
			$('#calendar').fullCalendar({
				editable: true,
				monthNames:['Janeiro','Fevereiro','Março','Abril','Maio','Junho','Julho','Agosto','Setembro','Outubro','Novembro','Dezembro'],
				
				dayNamesShort:['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sab'],
				events: "/schedules/calendar",

				/*eventDrop: function(event, delta) {
					alert(event.title + ' was moved ' + delta + ' days\n' +
						'(should probably update your database)');
				},*/
				
				loading: function(bool) {
					if (bool) $('#loading').show();
					else $('#loading').hide();
				}
			})
			
		});
	</script>
	<div id='loading' style='display:none'>Aguarde...</div>
	<div id='calendar'></div>

<?= $this->end() ?>