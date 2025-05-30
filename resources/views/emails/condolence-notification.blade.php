<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Condolence Message</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            overflow: hidden;
        }
        .header {
            background: linear-gradient(135deg, #2c3e50 0%, #3498db 100%);
            color: white;
            padding: 30px 20px;
            text-align: center;
        }
        .header h1 {
            margin: 0;
            font-size: 24px;
            font-weight: 300;
        }
        .header .icon {
            font-size: 48px;
            margin-bottom: 10px;
            display: block;
        }
        .content {
            padding: 30px;
        }
        .tribute-info {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            margin: 20px 0;
            border-left: 4px solid #3498db;
        }
        .tribute-info h3 {
            margin-top: 0;
            color: #2c3e50;
            font-size: 18px;
        }
        .info-row {
            margin: 10px 0;
            display: flex;
            align-items: center;
        }
        .info-label {
            font-weight: bold;
            color: #34495e;
            min-width: 80px;
            margin-right: 10px;
        }
        .info-value {
            color: #2c3e50;
        }
        .message-box {
            background: #ffffff;
            border: 1px solid #e9ecef;
            border-radius: 8px;
            padding: 20px;
            margin: 20px 0;
            font-style: italic;
            line-height: 1.8;
            color: #495057;
        }
        .footer {
            background: #f8f9fa;
            padding: 20px;
            text-align: center;
            color: #6c757d;
            font-size: 14px;
            border-top: 1px solid #e9ecef;
        }
        .btn {
            display: inline-block;
            padding: 12px 24px;
            background: #3498db;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin: 20px 0;
            font-weight: 500;
        }
        .memorial-quote {
            text-align: center;
            font-style: italic;
            color: #7f8c8d;
            padding: 20px;
            border-top: 1px solid #ecf0f1;
            margin-top: 30px;
        }
        @media (max-width: 600px) {
            .container {
                margin: 10px;
                border-radius: 0;
            }
            .content {
                padding: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <span class="icon">🕊️</span>
            <h1>New Condolence Message</h1>
            <p>Chief Sir Sylvester Ezeokenwa Memorial</p>
        </div>

        <div class="content">
            <p>Dear Family,</p>
            <p>A new condolence message has been submitted to the memorial page for <strong>Chief Sir Sylvester Chukwudozie Ezeokenwa, KSJI (Ezeudo Umuchu)</strong>.</p>

            <div class="tribute-info">
                <h3>Condolence Details</h3>
                
                <div class="info-row">
                    <span class="info-label">👤 Name:</span>
                    <span class="info-value">{{ $condolence->fullName }}</span>
                </div>
                
                <div class="info-row">
                    <span class="info-label">📧 Email:</span>
                    <span class="info-value">{{ $condolence->email }}</span>
                </div>
                
                <div class="info-row">
                    <span class="info-label">📅 Date:</span>
                    <span class="info-value">{{ $condolence->created_at->format('l, F j, Y \a\t g:i A') }}</span>
                </div>
            </div>
{{-- 
            <h3>💝 Tribute Message:</h3>
            <div class="message-box">
                "{!! $condolence->tribute !!}"
            </div> --}}

            <div style="text-align: center;">
                <a href="{{ url('/') }}" class="btn text-white">View All Condolences</a>
            </div>

            <div class="memorial-quote">
                <p><em>"Peace is not absence of conflict, but the ability to handle conflict by peaceful means"</em></p>
                <p><strong>- Ronald Reagan</strong></p>
            </div>
        </div>

        <div class="footer">
            <p>This notification was sent automatically from the Chief Ezeokenwa Memorial Website.</p>
            <p>📧 If you have any questions, please contact the website administrator.</p>
            <p style="margin-top: 15px; font-size: 12px; color: #adb5bd;">
                Memorial Page: <a href="{{ url('/') }}" style="color: #3498db;">{{ url('/') }}</a>
            </p>
        </div>
    </div>
</body>
</html>