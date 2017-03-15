<?php
$this->load->view("skeleton/head");
?>
<link rel="stylesheet" href="http://fullcalendar.io/js/fullcalendar-2.7.2/fullcalendar.css" media="screen" title="no title" charset="utf-8">
<link rel="stylesheet" href="http://fullcalendar.io/js/fullcalendar-2.7.2/fullcalendar.print.css" media="print" title="no title" charset="utf-8">
<body>

    <div class="wrapper">

        <?php
        $this->load->view("skeleton/sidebar")
        ?>

        <?php
        $this->load->view("skeleton/topmenu")
        ?>
<br>

<center><iframe src="https://calendar.google.com/calendar/embed?src=newrey9227%40gmail.com&ctz=Asia/Jakarta" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe></center>

<!--         <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                      <h2 class="title">Timeline</h2>
                      <div class="row">
                        <div class="col-md-4">
                          <div class="card">
                              <div class="header">
                                <h4 class="title">Calendar Usage</h4>
                              </div>
                              <div class="content">
                                <p>
                                  This timeline use Google Calendar as a basis. You have to log in to Google Calendar and add event into <strong>EEPIS Timeline</strong>. Here is the complete step :
                                  <ol>
                                    <li>Open <a href="https://calendar.google.com" target="_blank">Google Calendar</a> and log in to your account</li>
                                    <li>Click create, and add appropiate information to your event. Make sure that you choose EEPIS Timeline on calendar section</li>
                                    <li>You can also add image by attaching image into that event. It will use your Google Drive space.</li>
                                    <li>Click save</li>
                                  </ol>
                                </p>
                              </div>
                          </div>
                        </div>
                        <div class="col-md-8">
                          <div class="card">
                              <div class="content">
                                <div id="calendar"></div>
                              </div>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div> -->

        <?php
        //$this->load->view("skeleton/footer")
        ?>

    </div>
</body>

<?php
//$this->load->view("skeleton/mainscript")
?>


<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.13.0/moment.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.7.2/fullcalendar.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.7.2/gcal.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  $('#calendar').fullCalendar({

			// THIS KEY WON'T WORK IN PRODUCTION!!!
			// To make your own Google API key, follow the directions here:
			// http://fullcalendar.io/docs/google_calendar/
			googleCalendarApiKey: ' AIzaSyBmQxlRhYkBD1ItimpVK3WDECo5yBgT-uc ',

			// US Holidays
			events: 'et4hak47ne0785bdt140t4sae0@group.calendar.google.com',


			eventClick: function(event) {
				// opens events in a popup window
				window.open(event.url, 'gcalevent', 'width=700,height=600');
				return false;
			},

			loading: function(bool) {
				$('#loading').toggle(bool);
			}

		});
})
</script> -->
</html>
