<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Vendor styles -->
        <link rel="stylesheet" href="vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" href="vendors/bower_components/animate.css/animate.min.css">
        <link rel="stylesheet" href="vendors/bower_components/fullcalendar/dist/fullcalendar.min.css">
        <link rel="stylesheet" href="vendors/bower_components/sweetalert2/dist/sweetalert2.min.css">
        <link rel="stylesheet" href="vendors/bower_components/jquery.scrollbar/jquery.scrollbar.css">

        <!-- App styles -->
        <link rel="stylesheet" href="css/app.min.css">
    </head>

    <body data-ma-theme="green">
        <main class="main">
            <?php Include 'topmenu.php';?>
            <?php Include 'mainmenu.php';?>
            <section class="content">
                <div class="content__inner">
                    <header class="content__title content__title--calendar">
                        <h1>Calendar</h1>
                        <small>FullCalendar is a highly customizable open source javaScript event calendar.</small>

                        <div class="actions actions--calendar">
                            <a href="" class="actions__item actions__calender-prev"><i class="zmdi zmdi-long-arrow-left"></i></a>
                            <a href="" class="actions__item actions__calender-next"><i class="zmdi zmdi-long-arrow-right"></i></a>
                            <i class="actions__item actions__item--active zmdi zmdi-view-comfy" data-calendar-view="month"></i>
                            <i class="actions__item zmdi zmdi-view-week" data-calendar-view="basicWeek"></i>
                            <i class="actions__item zmdi zmdi-view-day" data-calendar-view="basicDay"></i>
                        </div>
                    </header>

                    <div class="calendar card"></div>

                    <!-- Add new event -->
                    <div class="modal fade" id="new-event" data-backdrop="static" data-keyboard="false">
                        <div class="modal-dialog modal-sm">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">New Event</h5>
                                </div>
                                <div class="modal-body">
                                    <form class="new-event__form">
                                        <div class="form-group">
                                            <input type="text" class="form-control new-event__title" placeholder="Event Title">
                                            <i class="form-group__bar"></i>
                                        </div>

                                        <div class="btn-group btn-group--colors event-tag" data-toggle="buttons">
                                            <label class="btn bg-light-blue active"><input type="radio" name="event-tag" value="bg-light-blue" autocomplete="off" checked></label>
                                            <label class="btn bg-teal"><input type="radio" name="event-tag" value="bg-teal" autocomplete="off"></label>
                                            <label class="btn bg-red"><input type="radio" name="event-tag" value="bg-red" autocomplete="off"></label>
                                            <label class="btn bg-purple"><input type="radio" name="event-tag" value="bg-purple" autocomplete="off"></label>
                                            <label class="btn bg-amber"><input type="radio" name="event-tag" value="bg-amber" autocomplete="off"></label>
                                            <label class="btn bg-cyan"><input type="radio" name="event-tag" value="bg-cyan" autocomplete="off"></label>
                                        </div>

                                        <input type="hidden" class="new-event__start" />
                                        <input type="hidden" class="new-event__end" />
                                    </form>
                                </div>

                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-link new-event__add">Add Event</button>
                                    <button type="button" class="btn btn-link" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Edit event -->
                    <div class="modal fade" id="edit-event" data-backdrop="static" data-keyboard="false">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <form class="edit-event__form">
                                        <div class="form-group">
                                            <input type="text" class="form-control edit-event__title" placeholder="Event Title">
                                            <i class="form-group__bar"></i>
                                        </div>

                                        <div class="btn-group btn-group--colors event-tag" data-toggle="buttons">
                                            <label class="btn bg-light-blue active"><input type="radio" name="event-tag" value="bg-light-blue" autocomplete="off" checked></label>
                                            <label class="btn bg-teal"><input type="radio" name="event-tag" value="bg-teal" autocomplete="off"></label>
                                            <label class="btn bg-red"><input type="radio" name="event-tag" value="bg-red" autocomplete="off"></label>
                                            <label class="btn bg-purple"><input type="radio" name="event-tag" value="bg-purple" autocomplete="off"></label>
                                            <label class="btn bg-amber"><input type="radio" name="event-tag" value="bg-amber" autocomplete="off"></label>
                                            <label class="btn bg-cyan"><input type="radio" name="event-tag" value="bg-cyan" autocomplete="off"></label>
                                        </div>

                                        <div class="form-group">
                                            <textarea class="form-control edit-event__description textarea-autosize" placeholder="Event Desctiption"></textarea>
                                            <i class="form-group__bar"></i>
                                        </div>

                                        <input type="hidden" class="edit-event__id">
                                    </form>
                                </div>

                                <div class="modal-footer">
                                    <button class="btn btn-link" data-calendar="update">Update</button>
                                    <button class="btn btn-link" data-calendar="delete">Delete</button>
                                    <button class="btn btn-link" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <!-- Older IE warning message -->
            <!--[if IE]>
                <div class="ie-warning">
                    <h1>Warning!!</h1>
                    <p>You are using an outdated version of Internet Explorer, please upgrade to any of the following web browsers to access this website.</p>

                    <div class="ie-warning__downloads">
                        <a href="http://www.google.com/chrome">
                            <img src="img/browsers/chrome.png" alt="">
                        </a>

                        <a href="https://www.mozilla.org/en-US/firefox/new">
                            <img src="img/browsers/firefox.png" alt="">
                        </a>

                        <a href="http://www.opera.com">
                            <img src="img/browsers/opera.png" alt="">
                        </a>

                        <a href="https://support.apple.com/downloads/safari">
                            <img src="img/browsers/safari.png" alt="">
                        </a>

                        <a href="https://www.microsoft.com/en-us/windows/microsoft-edge">
                            <img src="img/browsers/edge.png" alt="">
                        </a>

                        <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                            <img src="img/browsers/ie.png" alt="">
                        </a>
                    </div>
                    <p>Sorry for the inconvenience!</p>
                </div>
            <![endif]-->

        <!-- Javascript -->
        <!-- Vendors -->
        <script src="vendors/bower_components/jquery/dist/jquery.min.js"></script>
        <script src="vendors/bower_components/tether/dist/js/tether.min.js"></script>
        <script src="vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="vendors/bower_components/Waves/dist/waves.min.js"></script>
        <script src="vendors/bower_components/jquery.scrollbar/jquery.scrollbar.min.js"></script>
        <script src="vendors/bower_components/jquery-scrollLock/jquery-scrollLock.min.js"></script>

        <script src="vendors/bower_components/moment/min/moment.min.js"></script>
        <script src="vendors/bower_components/fullcalendar/dist/fullcalendar.min.js"></script>
        <script src="vendors/bower_components/autosize/dist/autosize.min.js"></script>
        <script src="vendors/bower_components/sweetalert2/dist/sweetalert2.min.js"></script>

        <!-- App functions and actions -->
        <script src="js/app.min.js"></script>

        <!-- Calendar Script -->
        <script type="text/javascript">
            'use strict';
            $(document).ready(function() {
                var date = new Date();
                var m = date.getMonth();
                var y = date.getFullYear();

                $('.calendar').fullCalendar({
                    header: {
                        right: '',
                        center: '',
                        left: ''
                    },
                    buttonIcons: {
                        prev: 'calendar__prev',
                        next: 'calendar__next'
                    },
                    theme: false,
                    selectable: true,
                    selectHelper: true,
                    editable: true,
                    events: [
                        {
                            id: 1,
                            title: 'Fusce dapibus tellus',
                            start: new Date(y, m, 1),
                            allDay: true,
                            className: 'bg-cyan',
                            description: 'Nullam id dolor id nibh ultricies vehicula ut id elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.'
                        },
                        {
                            id: 2,
                            title: 'Fusce dapibus tellus',
                            start: new Date(y, m, 10),
                            allDay: true,
                            className: 'bg-amber',
                            description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.'
                        },
                        {
                            id: 3,
                            title: 'Egestas Justo',
                            start: new Date(y, m, 18),
                            allDay: true,
                            className: 'bg-green',
                            description: ''
                        },
                        {
                            id: 4,
                            title: 'Bibendum Vehicula Quam',
                            start: new Date(y, m, 20),
                            allDay: true,
                            className: 'bg-blue',
                            description: ''
                        },
                        {
                            id: 5,
                            title: 'Venenatis Dolor Porta',
                            start: new Date(y, m, 5),
                            allDay: true,
                            className: 'bg-teal',
                            description: 'Sed posuere consectetur est at lobortis. Nullam quis risus eget urna mollis ornare vel eu leo. Aenean lacinia bibendum nulla sed consectetur. Donec ullamcorper nulla non metus auctor fringilla. Donec sed odio dui. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.'
                        },
                        {
                            id: 6,
                            title: 'Sem Pharetra',
                            start: new Date(y, m, 21),
                            allDay: true,
                            className: 'bg-red',
                            description: 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.'
                        },
                        {
                            id: 7,
                            title: 'Ullamcorper Porta',
                            start: new Date(y, m, 5),
                            allDay: true,
                            className: 'bg-amber',
                            description: 'Malesuada Ullamcorper Nullam'
                        },
                        {
                            id: 8,
                            title: 'Egestas',
                            start: new Date(y, m, 5),
                            allDay: true,
                            className: 'bg-green',
                            description: ''
                        },
                        {
                            id: 9,
                            title: 'Purus',
                            start: new Date(y, m, 1),
                            allDay: true,
                            className: 'bg-green',
                            description: 'Sed posuere consectetur est at lobortis. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.'
                        },
                        {
                            id: 10,
                            title: 'Risus Elit',
                            start: new Date(y, m, 15),
                            allDay: true,
                            className: 'bg-cyan',
                            description: 'Etiam porta sem malesuada magna mollis euismod. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.'
                        },
                        {
                            id: 11,
                            title: 'Risus Fermentum Justo',
                            start: new Date(y, m, 25),
                            allDay: true,
                            className: 'bg-blue',
                            description: 'Vehicula Cras'
                        },
                        {
                            id: 12,
                            title: 'Porta Ornare Euismod',
                            start: new Date(y, m, 30),
                            allDay: true,
                            className: 'bg-red',
                            description: ''
                        },
                        {
                            id: 13,
                            title: 'Amet Adipiscing',
                            start: new Date(y, m, 30),
                            allDay: true,
                            className: 'bg-teal',
                            description: ''
                        },
                    ],

                    dayClick: function(date) {
                        var isoDate = moment(date).toISOString();
                        $('#new-event').modal('show');
                        $('.new-event__title').val('');
                        $('.new-event__start').val(isoDate);
                        $('.new-event__end').val(isoDate);
                    },

                    viewRender: function (view) {
                        var calendarDate = $('.calendar').fullCalendar('getDate');
                        var calendarMonth = calendarDate.month();

                        //Set data attribute for header. This is used to switch header images using css
                        $('.calendar .fc-toolbar').attr('data-calendar-month', calendarMonth);

                        //Set title in page header
                        $('.content__title--calendar > h1').html(view.title);
                    },

                    eventClick: function (event, element) {
                        $('#edit-event input[value='+event.className+']').prop('checked', true);
                        $('#edit-event').modal('show');
                        $('.edit-event__id').val(event.id);
                        $('.edit-event__title').val(event.title);
                        $('.edit-event__description').val(event.description);
                    }
                });


                //Add new Event
                $('body').on('click', '.new-event__add', function(){
                    var eventTitle = $('.new-event__title').val();

                    // Generate ID
                    var GenRandom =  {
                        Stored: [],
                        Job: function(){
                            var newId = Date.now().toString().substr(6); // or use any method that you want to achieve this string

                            if( !this.Check(newId) ){
                                this.Stored.push(newId);
                                return newId;
                            }
                            return this.Job();
                        },
                        Check: function(id){
                            for( var i = 0; i < this.Stored.length; i++ ){
                                if( this.Stored[i] == id ) return true;
                            }
                            return false;
                        }
                    };

                    if (eventTitle != '') {
                        $('.calendar').fullCalendar('renderEvent', {
                            id: GenRandom.Job(),
                            title: eventTitle,
                            start: $('.new-event__start').val(),
                            end:  $('.new-event__end').val(),
                            allDay: true,
                            className: $('.event-tag input:checked').val()
                        }, true);

                        $('.new-event__form')[0].reset();
                        $('.new-event__title').closest('.form-group').removeClass('has-danger');
                        $('#new-event').modal('hide');
                    }
                    else {
                        $('.new-event__title').closest('.form-group').addClass('has-danger');
                        $('.new-event__title').focus();
                    }
                });


                //Update/Delete an Event
                $('body').on('click', '[data-calendar]', function(){
                    var calendarAction = $(this).data('calendar');
                    var currentId = $('.edit-event__id').val();
                    var currentTitle = $('.edit-event__title').val();
                    var currentDesc = $('.edit-event__description').val();
                    var currentClass = $('#edit-event .event-tag input:checked').val();
                    var currentEvent = $('.calendar').fullCalendar('clientEvents', currentId);

                    //Update
                    if(calendarAction === 'update') {
                        if (currentTitle != '') {
                            currentEvent[0].title = currentTitle;
                            currentEvent[0].description = currentDesc;
                            currentEvent[0].className = currentClass;

                            $('.calendar').fullCalendar('updateEvent', currentEvent[0]);
                            $('#edit-event').modal('hide');
                        }
                        else {
                            $('.edit-event__title').closest('.form-group').addClass('has-error');
                            $('.edit-event__title').focus();
                        }
                    }

                    //Delete
                    if(calendarAction === 'delete') {
                        $('#edit-event').modal('hide');
                        setTimeout(function () {
                            swal({
                                title: 'Are you sure?',
                                text: "You won't be able to revert this!",
                                type: 'warning',
                                showCancelButton: true,
                                buttonsStyling: false,
                                confirmButtonClass: 'btn btn-danger',
                                confirmButtonText: 'Yes, delete it!',
                                cancelButtonClass: 'btn btn-secondary'
                            }).then(function() {
                                $('.calendar').fullCalendar('removeEvents', currentId);
                                swal({
                                    title: 'Deleted!',
                                    text: 'Your list has been deleted.',
                                    type: 'success',
                                    buttonsStyling: false,
                                    confirmButtonClass: 'btn btn-primary'
                                });
                            })
                        }, 200);
                    }
                });


                //Calendar views switch
                $('body').on('click', '[data-calendar-view]', function(e){
                    e.preventDefault();

                    $('[data-calendar-view]').removeClass('actions__item--active');
                    $(this).addClass('actions__item--active');
                    var calendarView = $(this).attr('data-calendar-view');
                    $('.calendar').fullCalendar('changeView', calendarView);
                });


                //Calendar Next
                $('body').on('click', '.actions__calender-next', function (e) {
                    e.preventDefault();
                    $('.calendar').fullCalendar('next');
                });


                //Calendar Prev
                $('body').on('click', '.actions__calender-prev', function (e) {
                    e.preventDefault();
                    $('.calendar').fullCalendar('prev');
                });
            });
        </script>
    </body>
</html>