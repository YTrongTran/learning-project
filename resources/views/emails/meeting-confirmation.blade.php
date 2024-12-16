<!DOCTYPE html>
<html>
<head>
    <title>Meeting Confirmation</title>
</head>
<body>
    <h1>Meeting Confirmation</h1>
    <p>Your meeting has been scheduled successfully.</p>
    <p>Meeting Details:</p>
    <ul>
        <li>Topic: {{ $meeting['topic'] }}</li>
        <li>Start Time: {{ \Carbon\Carbon::parse($meeting['start_time'])->format('Y-m-d H:i:s') }}</li>
        <li>Duration: {{ $meeting['duration'] }} minutes</li>
        <li>Join URL: <a href="{{ $meeting['join_url'] }}">{{ $meeting['join_url'] }}</a></li>
    </ul>
</body>
</html>