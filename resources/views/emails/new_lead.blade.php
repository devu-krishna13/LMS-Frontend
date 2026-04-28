<!DOCTYPE html>
<html>
<head>
    <style>
        body { font-family: sans-serif; line-height: 1.6; color: #333; }
        .container { padding: 20px; border: 1px solid #eee; border-radius: 10px; max-width: 600px; }
        .header { background: #6366f1; color: white; padding: 10px; border-radius: 5px; text-align: center; }
        .detail { margin: 10px 0; }
        .label { font-weight: bold; color: #6366f1; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>New Demo Lead Registration</h2>
        </div>
        <p>A new user has registered to watch the LMS Demo.</p>
        
        <div class="detail">
            <span class="label">Institute Name:</span> {{ $leadData['inst_name'] }}
        </div>
        <div class="detail">
            <span class="label">Location:</span> {{ $leadData['inst_location'] }}
        </div>
        <div class="detail">
            <span class="label">Phone:</span> {{ $leadData['country_code'] }} {{ $leadData['inst_phone'] }}
        </div>
        <div class="detail">
            <span class="label">Email:</span> {{ $leadData['inst_email'] }}
        </div>
        
        <hr>
        <p style="font-size: 0.8rem; color: #666;">This is an automated notification from the LMS Landing Page.</p>
    </div>
</body>
</html>
