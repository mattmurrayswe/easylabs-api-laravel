@vite(['resources/js/app.js'])
<script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
<script>

  // Enable pusher logging - don't include this in production
  Pusher.logToConsole = true;

  var pusher = new Pusher('6b5cc6e162f72b773f02', {
    cluster: 'sa1'
  });

  var channel = pusher.subscribe('my-channel');
  channel.bind('my-event', function(data) {
    alert(JSON.stringify(data));
  });

  var channel = pusher.subscribe('sininho-channel');
  channel.bind('sininho-event', function(data) {
    alert(JSON.stringify(data));
  });
  
</script>
<body>
    <h1>Pusher Test</h1>
    <p>
      Try publishing an event to channel <code>my-channel</code>
      with event name <code>my-event</code>.
    </p>
  </body>
