<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>New Portfolio Inquiry</title>
</head>
<body style="font-family: 'Segoe UI', Helvetica, Arial, sans-serif; padding: 0; margin: 0; background-color: #f9fafb; color: #1f2937;">
    <div style="max-width: 600px; margin: 20px auto; background-color: #ffffff; border: 1px solid #e5e7eb; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 6px rgba(0,0,0,0.05);">
        
        <div style="background-color: #149ddd; padding: 20px; text-align: center;">
            <h2 style="color: #ffffff; margin: 0; font-size: 20px; letter-spacing: 1px;">New Portfolio Inquiry</h2>
        </div>

        <div style="padding: 30px;">
            <p style="font-size: 16px; margin-bottom: 25px;">You have received a new message via the contact form on <strong>dipty.info</strong>.</p>
            
            <table style="width: 100%; border-collapse: collapse; margin-bottom: 25px;">
                <tr>
                    <td style="padding: 10px 0; border-bottom: 1px solid #f3f4f6; color: #6b7280; width: 100px;"><strong>Name:</strong></td>
                    <td style="padding: 10px 0; border-bottom: 1px solid #f3f4f6; color: #111827;">{{ $data['name'] }}</td>
                </tr>
                <tr>
                    <td style="padding: 10px 0; border-bottom: 1px solid #f3f4f6; color: #6b7280;"><strong>Email:</strong></td>
                    <td style="padding: 10px 0; border-bottom: 1px solid #f3f4f6; color: #111827;">{{ $data['email'] }}</td>
                </tr>
                <tr>
                    <td style="padding: 10px 0; border-bottom: 1px solid #f3f4f6; color: #6b7280;"><strong>Subject:</strong></td>
                    <td style="padding: 10px 0; border-bottom: 1px solid #f3f4f6; color: #111827;">{{ $data['subject'] }}</td>
                </tr>
            </table>

            <div style="background-color: #f3f4f6; padding: 20px; border-radius: 6px;">
                <h3 style="margin-top: 0; font-size: 14px; color: #4b5563; text-transform: uppercase; letter-spacing: 1px;">Message Content:</h3>
                <p style="white-space: pre-wrap; color: #1f2937; line-height: 1.6; margin-bottom: 0;">{{ $data['message'] }}</p>
            </div>
        </div>

        <div style="background-color: #f9fafb; padding: 20px; text-align: center; border-top: 1px solid #e5e7eb;">
            <p style="font-size: 11px; color: #9ca3af;">
                Arman Hossain | Developer Portfolio | Chattogram, Bangladesh
            </p>
            <p style="font-size: 12px; color: #9ca3af; margin: 0;">
                This email was sent from the contact form on <a href="https://hozyn.net" style="color: #149ddd; text-decoration: none;">hozyn.net</a>.<br>
                Host: {{ request()->ip() }} | Timestamp: {{ now()->format('Y-m-d H:i:s') }}
            </p>
        </div>
    </div>
</body>
</html>