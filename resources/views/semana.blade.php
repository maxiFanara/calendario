@extends('main')
@section('header')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            eventClick: function(info) {
                var eventObj = info.event;

                window.location.href ='http://127.0.0.1:8000/evento/' + eventObj.id;

            },
            locale: 'es',
            timeZone: 'America/Argentina/Buenos_Aires',
            initialView: 'dayGridMonth',
            headerToolbar: {
                left: 'prev,next',
                center: 'title',
                right: ''
            },
            locale: 'es',
            timeZone: 'America/Argentina/Buenos_Aires',
            initialView: 'dayGridWeek',
            headerToolbar: {
                left: 'prev,next',
                center: 'title',
                right: ''
            },
            events: 'http://127.0.0.1:8000/eventos',
            editable: true,
            selectable: true
            
        });
        calendar.render();
    });
</script>
@endsection

@section('contenido')

<div id='calendar'></div>
@endsection