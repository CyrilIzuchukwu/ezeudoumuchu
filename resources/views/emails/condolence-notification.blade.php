<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Condolence Message</title>
</head>

<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; line-height: 1.6; margin: 0; padding: 0; background-color: #f8f9fa;">
    <div style="max-width: 600px; margin: 20px auto; background: white; border-radius: 10px; box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1); overflow: hidden;">

        <!-- Header -->
        <div style="background: linear-gradient(135deg, #2c3e50 0%, #3498db 100%); color: white; padding: 30px 20px; text-align: center;">
            <span style="font-size: 48px; margin-bottom: 10px; display: block;">🕊️</span>
            <h1 style="margin: 0; font-size: 24px; font-weight: 300;">New Condolence Message</h1>
            <p style="margin: 10px 0 0 0;">Chief Sir Sylvester Ezeokenwa Memorial</p>
        </div>

        <!-- Content -->
        <div style="padding: 30px;">
            <p>Dear Family,</p>
            <p>A new condolence message has been submitted to the memorial page for <strong>Chief Sir Sylvester Chukwudozie Ezeokenwa, KSJI (Ezeudo Umuchu)</strong>.</p>

            <!-- Tribute Info Box -->
            <div style="background: #f8f9fa; padding: 20px; border-radius: 8px; margin: 20px 0; border-left: 4px solid #3498db;">
                <h3 style="margin-top: 0; color: #2c3e50; font-size: 18px;">Condolence Details</h3>

                <div style="margin: 10px 0; display: flex; align-items: center;">
                    <span style="font-weight: bold; color: #34495e; min-width: 80px; margin-right: 10px;">👤 Name:</span>
                    <span style="color: #2c3e50;">{{ $condolence->fullName }}</span>
                </div>

                <div style="margin: 10px 0; display: flex; align-items: center;">
                    <span style="font-weight: bold; color: #34495e; min-width: 80px; margin-right: 10px;">📧 Email:</span>
                    <span style="color: #2c3e50;">{{ $condolence->email }}</span>
                </div>

                <div style="margin: 10px 0; display: flex; align-items: center;">
                    <span style="font-weight: bold; color: #34495e; min-width: 80px; margin-right: 10px;">📅 Date:</span>
                    <span style="color: #2c3e50;">{{ $condolence->created_at->format('l, F j, Y \a\t g:i A') }}</span>
                </div>
            </div>

            <!-- Button -->
            <div style="text-align: center;">
                <a href="{{ url('/') }}" style="display: inline-block; padding: 12px 24px; background: #3498db; color: white; text-decoration: none; border-radius: 5px; margin: 20px 0; font-weight: 500;">View All Condolences</a>
            </div>

            <!-- Memorial Quote -->
            <div style="text-align: center; font-style: italic; color: #7f8c8d; padding: 20px; border-top: 1px solid #ecf0f1; margin-top: 30px;">
                <p style="margin: 0 0 10px 0;"><em>"Peace is not absence of conflict, but the ability to handle conflict by peaceful means"</em></p>
                <p style="margin: 0;"><strong>- Ronald Reagan</strong></p>
            </div>
        </div>

        <!-- Footer -->
        <div style="background: #f8f9fa; padding: 20px; text-align: center; color: #6c757d; font-size: 14px; border-top: 1px solid #e9ecef;">
            <p>This notification was sent automatically from the Chief Ezeokenwa Memorial Website.</p>
            <p>📧 If you have any questions, please contact the website administrator.</p>
            <p style="margin-top: 15px; font-size: 12px; color: #adb5bd;">
                Memorial Page: <a href="{{ url('/') }}" style="color: #3498db;">{{ url('/') }}</a>
            </p>
        </div>
    </div>
</body>

</html>