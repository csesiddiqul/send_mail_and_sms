<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @font-face {
            font-family: 'AdorshoLipi';
            src: url('fonts/Nikosh.ttf') format('truetype');
            font-weight: normal;
            font-style: normal;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            max-width: 800px;
            width: 100%;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border: 1px solid #ddd;
        }

        .header, .footer {
            text-align: center;
            margin-bottom: 50px;
        }

        .header img, .footer img {
            max-width: 100%;
            height: auto;
        }

        .header h1, .content, .footer {
            font-family: 'AdorshoLipi', Arial, sans-serif;
        }

        .header h1 {
            font-size: 24px;
            margin: 10px 0;
        }

        .content {
            margin-bottom: 20px;
        }

        .content table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .content td {
            padding: 8px;
            vertical-align: middle;
            text-align: center;
        }

        .content td.label {
            /* font-weight: bold; */
            width: 150px;
            background-color: #f9f9f9;
            font-size: 15px;
            border-radius: 5px;
        }

        .content td.label2 {
            background-color: #f9f9f9;
            font-size: 15px;
            border-bottom: 1px dotted;
            border-radius: 5px;
            color: #454242cc;
        }

        .content .highlight {
            background-color: #e0e0e0;
            font-weight: bold;
            padding: 10px;
            text-align: center;
            border-radius: 5px;
        }

        .content img {
            width: 100px;
            height: auto;
            border: 1px solid #ddd;
        }

        .content .application-number {
            text-align: center;
            padding: 15px;
            background-color: #b8b8b8;
            color: #fff;
            font-weight:300;
            line-height: 0.5;
            border-radius: 5px;
        }

        .content .signature {
            padding-top: 40px;
            text-align: right;
        }

        .message {
            border-top: 1px dotted #ccc;
            padding-top: 12px;
            margin-top: 20px;
            text-align: left;
        }

        .footer {
            font-size: 12px;
            color: #454242;
            border-top: 1px dotted #ccc;
            padding-top: 12px;
        }

        .footer p {
            margin-top: 10px;
        }

        @media (max-width: 600px) {
            .container {
                padding: 10px;
            }

            .content td.label {
                width: 100px;
            }
        }
    </style>
</head>
<body>
<div class="container">
    <!-- Header Section -->
    <div class="header">
        <img src="path_to_logo1.png" alt="Logo 1">
    </div>

    <!-- Content Section -->
    <div class="content">
        <table>
            <tr>
                <td rowspan="8" class="highlight">
                    <img src="./path_to_logo2.jpg" class="applicant" alt="Applicant">
                    <div class="application-number">
                        আবেদন নম্বর<br>
                        <p style="border:1px dotted #e0e0e0; border-right: 2px;"></p>
                        <span>CRF-20243057-00296</span>
                    </div>
                </td>
                <td class="label">আবেদনকারীর নামঃ</td>
                <td class="label2">Emrul Hasan</td>
            </tr>
            <tr>
                <td class="label">কর্মটির শিরোনামঃ</td>
                <td class="label2">N/A</td>
            </tr>
            <tr>
                <td class="label">কপিরাইট শ্রেণিঃ</td>
                <td class="label2">সাহিত্য কর্ম</td>
            </tr>
            <tr>
                <td class="label">কপিরাইট উপশ্রেণিঃ</td>
                <td class="label2">কবিতা</td>
            </tr>
            <tr>
                <td class="label">আবেদনকারীর ঠিকানাঃ</td>
                <td class="label2">N/A</td>
            </tr>
            <tr>
                <td class="label">ই-মেইলঃ</td>
                <td class="label2">emrul.01745@gmail.com</td>
            </tr>
            <tr>
                <td class="label">মোবাইল নম্বরঃ</td>
                <td class="label2">01745371324</td>
            </tr>
            <tr>
                <td class="label">আবেদনের সময় ও তারিখঃ</td>
                <td class="label2">2024-04-05 03:05:00</td>
            </tr>
        </table>
        <div class="message">
            <p>জনাব , <br><br>
                উপরোক্ত বিষয়ে কপিরাইটের আবেদন করার জন্য আপনাকে ধন্যবাদ। <br><br>
                এ বিষয়ে আপনাকে যথা সময়ে জানানো হবে। এছাড়াও, আপনার আবেদন নম্বর দিয়ে কাজের অগ্রগতি সম্পর্কে যে কোন সময় কপিরাইটের ওয়েবসাইট থেকে জানতে পারবেন। <br><br>
                ধন্যবাদ।
            </p>
        </div>

        <p class="signature">
            রেজিস্টার <br>
            বাংলাদেশ কপিরাইট অফিস
        </p>

        <p style="text-align: center; margin-top: 10px; font-size: 14px;">
            জাতীয় গ্রন্থাগার ভবন (৩য় তলা) সংস্কৃতি বিষয়ক মন্ত্রণালয় <br>
            ৩২, বিচারপতি এস এম মোরশেদ স্মরনি, আগারগাও, শেরেবাংলা নগর, ঢাকা-১২০৭ <br>
            ওয়েবসাইটঃ www.copyrightoffice.gov.bd
        </p>
    </div>

    <!-- Footer Section -->
    <div class="footer">
        <p>&copy; Design, Developed & Maintained by: ISPITA COMPUTERS PTE LTD</p>
    </div>
</div>
</body>
</html>
