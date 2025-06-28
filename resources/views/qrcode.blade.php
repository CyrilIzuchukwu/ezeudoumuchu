<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>In Memory of Chief Ezeokenwa | QR Memorial</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrious/4.0.2/qrious.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Georgia', 'Times New Roman', serif;
            background: linear-gradient(135deg, #1a1a2e 0%, #16213e 50%, #0f3460 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
            color: #333;
        }

        .container {
            background: rgba(255, 255, 255, 0.98);
            backdrop-filter: blur(15px);
            border-radius: 25px;
            padding: 0;
            box-shadow: 0 25px 50px rgba(0, 0, 0, 0.3);
            max-width: 600px;
            width: 100%;
            overflow: hidden;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .remembrance {
            background: linear-gradient(135deg, #2c3e50 0%, #34495e 100%);
            padding: 20px 20px;
            text-align: center;
            color: white;
            position: relative;
            overflow: hidden;
        }

        .remembrance::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="stars" patternUnits="userSpaceOnUse" width="20" height="20"><circle cx="10" cy="10" r="0.5" fill="rgba(255,255,255,0.1)"/></pattern></defs><rect width="100" height="100" fill="url(%23stars)"/></svg>');
            opacity: 0.3;
        }

        .memorial-photo {
            width: 100px;
            height: 100px;
            overflow: hidden;
            border-radius: 50%;
            border: 4px solid rgba(255, 255, 255, 0.8);
            margin: 0 auto 20px;
            background: linear-gradient(45deg, #f39c12, #e74c3c);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 48px;
            color: white;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            position: relative;
            z-index: 1;
        }

        .memorial-photo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: top;
        }

        .memorial-title {
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 10px;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
            position: relative;
            z-index: 1;
        }

        .memorial-subtitle {
            font-size: 14px;
            opacity: 0.9;
            font-style: italic;
            margin-bottom: 5px;
            position: relative;
            z-index: 1;
        }

        .memorial-dates {
            font-size: 0.95em;
            opacity: 0.8;
            font-weight: 300;
            position: relative;
            z-index: 1;
        }

        .qr-section {
            padding: 20px 20px;
            text-align: center;
        }

        .section-title {
            font-size: 1.4em;
            color: #2c3e50;
            margin-bottom: 20px;
            font-weight: 400;
        }

        .qr-wrapper {
            background: white;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
            box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset;
            margin: 20px 0;
        }

        #qrcode {
            display: flex;
            justify-content: center;
            /* margin: 20px 0; */
        }

        #qrcode canvas {
            /* border-radius: 15px; */
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
            width: 300px;
            height: 300px;
        }

        .instructions {
            background: linear-gradient(135deg, #74b9ff, #0984e3);
            color: white;
            border-radius: 15px;
            padding: 20px;
            margin: 25px 0;
            font-size: 1.05em;
            line-height: 1.6;
            text-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
        }

        .instructions strong {
            font-weight: 600;
        }

        .memorial-footer {
            background: #f8f9fa;
            padding: 25px 30px;
            text-align: center;
            color: #6c757d;
            font-size: 0.9em;
            line-height: 1.5;
            border-top: 1px solid #e9ecef;
        }

        .fade-in {
            animation: fadeIn 0.8s ease-in;
        }


        /* Decorative elements */
        .decorative-line {
            width: 60px;
            height: 2px;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.8), transparent);
            margin: 15px auto;
        }

        .info {
            background: rgba(52, 152, 219, 0.1);
            border: 1px solid rgba(52, 152, 219, 0.3);
            border-radius: 10px;
            padding: 15px;
            margin: 20px 0;
            color: #2c3e50;
        }

        .download-pdf-btn {
            background: linear-gradient(45deg, #2d3748, #4a5568);
            color: white;
            border: none;
            padding: 15px 30px;
            border-radius: 50px;
            font-size: 1.1em;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(45, 55, 72, 0.3);
            margin: 20px 0;
            display: inline-flex;
            align-items: center;
            gap: 10px;
        }

        .download-pdf-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 25px rgba(45, 55, 72, 0.4);
            background: linear-gradient(45deg, #4a5568, #2d3748);
        }

        .download-pdf-btn:active {
            transform: translateY(0);
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="remembrance">
            <div class="memorial-photo">
                <img src="{{ asset('assets/images/img2.jpg') }}" alt="Profile">
            </div>
            <div class="decorative-line"></div>
            <h1 class="memorial-title">Chief (Hon) Sir Sylvester A. C. Ezeokenwa, KSJI</h1>
            <p class="memorial-subtitle">Ezeudo Umuchu (Ichie Ezenwata)</p>
            <p class="memorial-dates">June 26, 1954 - May 15, 2025</p>
            <div class="decorative-line"></div>
        </div>

        <div class="qr-section">
            <h2 class="section-title">Remembering Ezeudo Umuchu</h2>

            <div class="qr-wrapper" id="qrContainer">
                <div id="qrcode"></div>
            </div>

            <div class="info">
                <strong>Visit the Memorial Website:</strong><br>
                Scan this QR code with any smartphone camera or QR code reader to visit the memorial website.
            </div>
        </div>

        <button class="download-pdf-btn" onclick="downloadAsPDF()">
            📄 Download Memorial Card as PDF
        </button>

        <!-- <div class="memorial-footer">
            <p><strong>Memorial Website Features:</strong></p>
            <p>Biography • Photo Gallery • Tributes • Funeral Details • Memory Sharing</p>
            <p style="margin-top: 15px; font-style: italic;">
                "A life well lived leaves a legacy that touches hearts and inspires generations."
            </p>
        </div> -->
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
                    size: 280,
                    background: '#ffffff',
                    foreground: '#2c3e50',
                    level: 'M'
                });

                // Add canvas to container
                qrCodeElement.appendChild(canvas);

                // Store the data URL for download
                qrCodeDataURL = canvas.toDataURL('image/png');

                // Show the QR container with animation
                qrContainer.classList.add('fade-in');
                canvas.classList.add('pulse');

            } catch (error) {
                console.error('QR Code generation error:', error);
                qrCodeElement.innerHTML = '<p style="color: #e74c3c; font-weight: 500;">Unable to generate QR code. Please check your connection and refresh the page.</p>';
            }
        }

        // Auto-generate QR code on page load
        window.addEventListener('load', function() {
            setTimeout(generateQR, 150);
        });

        // Add some interactive touches
        document.addEventListener('DOMContentLoaded', function() {
            const memorialPhoto = document.querySelector('.memorial-photo');

            memorialPhoto.addEventListener('mouseenter', function() {
                this.style.transform = 'scale(1.1)';
                this.style.transition = 'transform 0.3s ease';
            });

            memorialPhoto.addEventListener('mouseleave', function() {
                this.style.transform = 'scale(1)';
            });
        });
    </script>

    <script>
        async function downloadAsPDF() {
            const container = document.querySelector('.container');
            const button = document.querySelector('.download-pdf-btn');

            // Hide the download button temporarily
            button.style.display = 'none';

            try {
                // Create canvas from the container
                const canvas = await html2canvas(container, {
                    scale: 2,
                    useCORS: true,
                    allowTaint: true,
                    backgroundColor: null,
                    width: container.offsetWidth,
                    height: container.offsetHeight
                });

                // Create PDF
                const {
                    jsPDF
                } = window.jspdf;
                const pdf = new jsPDF({
                    orientation: 'portrait',
                    unit: 'mm',
                    format: 'a4'
                });

                // Calculate dimensions to fit the page
                const imgWidth = 210; // A4 width in mm
                const imgHeight = (canvas.height * imgWidth) / canvas.width;

                // Add image to PDF
                pdf.addImage(canvas.toDataURL('image/png'), 'PNG', 0, 0, imgWidth, imgHeight);

                // Save the PDF
                pdf.save('Chief-Ezeokenwa-Memorial-Card.pdf');

            } catch (error) {
                console.error('Error generating PDF:', error);
                alert('Error generating PDF. Please try again.');
            } finally {
                // Show the button again
                button.style.display = 'inline-flex';
            }
        }
    </script>
</body>

</html>
