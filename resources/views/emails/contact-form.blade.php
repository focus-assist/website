<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form Submission</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
            line-height: 1.6;
            color: #1a1a2e;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }
        .email-wrapper {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .email-container {
            background-color: #ffffff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .email-header {
            background: linear-gradient(135deg, #0a1628 0%, #0f2035 100%);
            color: #ffffff;
            padding: 30px;
            text-align: center;
        }
        .email-header h1 {
            margin: 0;
            font-size: 24px;
            font-weight: 600;
        }
        .email-header p {
            margin: 10px 0 0;
            color: #68bfd1;
            font-size: 14px;
        }
        .email-body {
            padding: 30px;
        }
        .info-section {
            margin-bottom: 25px;
        }
        .info-section h2 {
            font-size: 14px;
            font-weight: 600;
            color: #7088a8;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin: 0 0 15px 0;
            padding-bottom: 10px;
            border-bottom: 2px solid #e8e8e8;
        }
        .info-row {
            display: flex;
            margin-bottom: 12px;
        }
        .info-label {
            font-weight: 600;
            color: #4a6280;
            min-width: 100px;
            flex-shrink: 0;
        }
        .info-value {
            color: #1a1a2e;
        }
        .info-value a {
            color: #1a6fdf;
            text-decoration: none;
        }
        .info-value a:hover {
            text-decoration: underline;
        }
        .topic-badge {
            display: inline-block;
            background: linear-gradient(135deg, #68bfd1 0%, #1a6fdf 100%);
            color: #ffffff;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 13px;
            font-weight: 500;
        }
        .message-section {
            background-color: #f8fafc;
            border-radius: 8px;
            padding: 20px;
            margin-top: 20px;
        }
        .message-section h2 {
            font-size: 14px;
            font-weight: 600;
            color: #7088a8;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin: 0 0 15px 0;
        }
        .message-content {
            color: #1a1a2e;
            white-space: pre-wrap;
            word-wrap: break-word;
        }
        .email-footer {
            background-color: #f8fafc;
            padding: 20px 30px;
            text-align: center;
            font-size: 12px;
            color: #7088a8;
        }
        .email-footer p {
            margin: 5px 0;
        }
        .meta-info {
            margin-top: 20px;
            padding-top: 20px;
            border-top: 1px solid #e8e8e8;
            font-size: 12px;
            color: #9ca3af;
        }
        .meta-info span {
            display: block;
            margin-bottom: 5px;
        }
    </style>
</head>
<body>
    <div class="email-wrapper">
        <div class="email-container">
            <div class="email-header">
                <h1>New Contact Form Submission</h1>
                <p>Focus Assist Website</p>
            </div>

            <div class="email-body">
                <div class="info-section">
                    <h2>Contact Information</h2>
                    <div class="info-row">
                        <span class="info-label">Name:</span>
                        <span class="info-value">{{ $formData['full_name'] }}</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Email:</span>
                        <span class="info-value">
                            <a href="mailto:{{ $formData['email'] }}">{{ $formData['email'] }}</a>
                        </span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Company:</span>
                        <span class="info-value">{{ $formData['company'] }}</span>
                    </div>
                    <div class="info-row">
                        <span class="info-label">Topic:</span>
                        <span class="info-value">
                            <span class="topic-badge">{{ $formData['topic'] }}</span>
                        </span>
                    </div>
                </div>

                <div class="message-section">
                    <h2>Message</h2>
                    <div class="message-content">{{ $formData['message'] }}</div>
                </div>

                <div class="meta-info">
                    <span><strong>Submitted:</strong> {{ $formData['submitted_at'] }}</span>
                    <span><strong>IP Address:</strong> {{ $formData['ip_address'] }}</span>
                    <span><strong>User Agent:</strong> {{ Str::limit($formData['user_agent'], 100) }}</span>
                </div>
            </div>

            <div class="email-footer">
                <p>This message was sent from the Focus Assist website contact form.</p>
                <p>Reply directly to this email to respond to {{ $formData['full_name'] }}.</p>
            </div>
        </div>
    </div>
</body>
</html>
