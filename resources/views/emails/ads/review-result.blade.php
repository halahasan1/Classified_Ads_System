<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Your Ad Has Been Reviewed</title>
</head>
<body>
<h2>Hello {{ $user->name }},</h2>

<p>Your ad titled "<strong>{{ $ad->title }}</strong>" has been reviewed by the admin</p>

<p>You can now view your ad's status in your dashboard</p>

<p>If your ad was approved, it will be visible to other users</p>

<br>

<p>Best wishes,<br>The Support Team</p>
</body>
</html>
