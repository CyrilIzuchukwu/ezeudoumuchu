<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Code Generator</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrious/4.0.2/qrious.min.js"></script>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding-block: 20px;
        }

        .container {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 500px;
            width: 90%;
        }

        .header-text {
            font-size: 16px;
        }

        h1 {
            color: #333;
            margin-bottom: 30px;
            font-size: 2.5em;
            font-weight: 300;
        }

        .url-display {
            background: #f8f9fa;
            border: 2px solid #e9ecef;
            border-radius: 12px;
            padding: 15px;
            margin: 20px 0;
            font-family: 'Courier New', monospace;
            color: #495057;
            word-break: break-all;
        }

        .generate-btn {
            background: linear-gradient(45deg, #ff6b6b, #ee5a24);
            color: white;
            border: none;
            padding: 15px 30px;
            border-radius: 50px;
            font-size: 1.1em;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(238, 90, 36, 0.4);
        }

        .generate-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 25px rgba(238, 90, 36, 0.5);
        }

        .generate-btn:active {
            transform: translateY(0);
        }

        .qr-container {
            /* margin: 30px 0; */
            padding: 20px;
            background: white;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            display: block;
        }

        #qrcode {
            display: flex;
            justify-content: center;
            margin: 20px 0;
        }

        .download-btn {
            background: linear-gradient(45deg, #4ecdc4, #44a08d);
            color: white;
            border: none;
            padding: 12px 25px;
            border-radius: 25px;
            font-size: 1em;
            cursor: pointer;
            transition: all 0.3s ease;
            margin: 10px 5px;
        }

        .download-btn:hover {
            transform: translateY(-1px);
            box-shadow: 0 4px 15px rgba(68, 160, 141, 0.4);
        }

        .info {
            background: rgba(52, 152, 219, 0.1);
            border: 1px solid rgba(52, 152, 219, 0.3);
            border-radius: 10px;
            padding: 15px;
            margin: 20px 0;
            color: #2c3e50;
        }

        .fade-in {
            animation: fadeIn 0.5s ease-in;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="remeberance">

        </div>

        <!-- <button class="generate-btn" onclick="generateQR()">
            Regenerate QR Code
        </button> -->

        <div class="qr-container" id="qrContainer">
            <h3 class="header-text">Remembering Ezeudo Umuchu (Ichie Ezenwata)</h3>


            <div class="qrborder">
                <div id="qrcode"></div>
            </div>

            <div class="info">
                Scan this QR code with any smartphone camera or QR code reader to visit the memorial website.
            </div>
            <!-- <button class="download-btn" onclick="downloadQR()">Download PNG</button>
            <button class="download-btn" onclick="downloadSVG()">Download SVG</button> -->
        </div>
    </div>

    <script>
        let qrCodeDataURL = '';

        function generateQR() {
            const url = 'https://inmemoryofezeudoumuchu.life';
            const qrContainer = document.getElementById('qrContainer');
            const qrCodeElement = document.getElementById('qrcode');

            // Clear previous QR code
            qrCodeElement.innerHTML = '';

            try {
                // Create canvas element
                const canvas = document.createElement('canvas');

                // Generate QR code using QRious
                const qr = new QRious({
                    element: canvas,
                    value: url,
                    size: 300,
                    background: '#ffffff',
                    foreground: '#333333',
                    level: 'M'
                });

                // Add canvas to container
                qrCodeElement.appendChild(canvas);

                // Store the data URL for download
                qrCodeDataURL = canvas.toDataURL('image/png');

                // Show the QR container with animation
                qrContainer.classList.add('fade-in');

            } catch (error) {
                console.error('QR Code generation error:', error);
                qrCodeElement.innerHTML = '<p style="color: red;">Error generating QR code. Please check your internet connection and try again.</p>';
            }
        }

        function downloadQR() {
            if (!qrCodeDataURL) {
                alert('Please generate a QR code first');
                return;
            }

            const link = document.createElement('a');
            link.download = 'inmemoryofezeudoumuchu-qrcode.png';
            link.href = qrCodeDataURL;
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
        }

        function downloadSVG() {
            // For SVG, we'll convert the canvas to SVG
            if (!qrCodeDataURL) {
                alert('Please generate a QR code first');
                return;
            }

            // Create a simple SVG wrapper for the PNG data
            const svg = `<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="400" height="400">
                <image width="400" height="400" xlink:href="${qrCodeDataURL}"/>
            </svg>`;

            const blob = new Blob([svg], {
                type: 'image/svg+xml'
            });
            const url = URL.createObjectURL(blob);
            const link = document.createElement('a');
            link.download = 'inmemoryofezeudoumuchu-qrcode.svg';
            link.href = url;
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
            URL.revokeObjectURL(url);
        }

        // Auto-generate QR code on page load with a small delay to ensure library loads
        window.addEventListener('load', function() {
            setTimeout(generateQR, 100);
        });
    </script>
</body>
<style>
    .qrborder {
        box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset;
        padding: 20px;
    }
</style>

</html>
