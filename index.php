<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emails Powered by HTML Generator</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Generate modern emails here</h1>
        <form id="inputForm" class="mb-4">
            <div class="form-group">
                <label for="content">Enter a Welcoming text:</label>
                <input type="text" class="form-control" id="title" name="title" required>
                <br>
                <label for="content">Enter your email content:</label>
                <input type="textarea" class="form-control" id="content" name="content" required>
                <br>
                <label for="content">Enter ending sentences if required:</label>
                <input type="textarea" class="form-control" value=" " id="content2" name="content2">
            </div>
            <button type="submit" class="btn btn-primary">Generate HTML</button>
        </form>
        <div class="form-group">
            <textarea class="form-control" id="output" rows="10" readonly></textarea>
        </div>
        <button id="copyButton" class="btn btn-secondary" onclick="copyToClipboard()">Copy</button>
    </div>

    <script>
        document.getElementById('inputForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent the form from submitting normally
            const title = document.getElementById('title').value;
            const content = document.getElementById('content').value;
            const content2 = document.getElementById('content2').value;
            const output = document.getElementById('output');

            //const generatedHtml = `<p>${content}</p>`;
            const generatedHtml = `<!DOCTYPE html> <html lang="en"> <head> <meta charset="UTF-8"> <meta name="viewport" content="width=device-width, initial-scale=1.0"> <title>Email from Dream Code</title> </head> <body style="font-family: Arial, sans-serif; margin: 0; padding: 0;"> <table width="100%" cellpadding="0" cellspacing="0" style="background-color: #045de9;"> <tr> <td> <img align="left" src="https://dreamcodemw.com/admin/Files/images/logo2.png" alt="Dream Code Logo" width="200" style="display: block;padding: 40px 0 30px 0; margin-left: 10px"> <p align="right" style="padding: 40px 10px 10px 0; color: white;"><span style="font-size: 10px; padding-top: 0px;">P.O. Box 80123<br>Phone: 0999 746 941 | 0888 747 052 <br>Website: <a href="dreamcodemw.com" style="color: white; text-decoration: none;">dreamcodemw.com</a> </span></p> </td> </tr> <tr> <td bgcolor="#ffffff" style="padding: 40px 30px 40px 30px;"> <table width="100%" cellpadding="0" cellspacing="0"> <tr> <td style="color: #153643; font-size: 28px; text-align: center; margin: 0; padding: 0;">    <b>${title}    </b> </td> </tr> <tr> <td style="padding: 20px 0 30px 0; color: #153643; font-size: 16px; line-height: 25px;"> <p>    ${content}   </p> <p>   ${content2}   </p></td> </tr> <tr> <td style="color: #153643; font-size: 16px; text-align: center; padding: 0 0 40px 0;"> <p>Follow us on social media:</p> <p> <a href="https://facebook.com/profile.php?id=100083534344386" style="color: #3b5998; text-decoration: none;">Facebook</a> | <a href="https://twitter.com/DreamCodeMalawi" style="color: #1da1f2; text-decoration: none;">Twitter</a> | <a href="https://www.linkedin.com/company/dream-code-malawi" style="color: #0077b5; text-decoration: none;">LinkedIn</a> </p> </td> </tr> </table> </td> </tr> <tr> <td bgcolor="#00255e" style="padding: 30px 30px;"> <table width="100%" cellpadding="0" cellspacing="0"> <tr> <td style="color: #ffffff; font-size: 14px;" width="75%"> &reg; Dream Code Malawi, 2024. All rights reserved. </td> <td align="right"> <table cellpadding="0" cellspacing="0"> <tr> <td style="font-family: Arial, sans-serif; font-size: 12px; font-weight: bold;"> <a href="dreamcodemw.com" style="color: #ffffff; text-decoration: none;">Visit our Website</a> </td> </tr> </table> </td> </tr> </table> </td> </tr> </table> </body> </html>`
            output.value = generatedHtml;
        });

        function copyToClipboard() {
            const output = document.getElementById('output');
            output.select();
            document.execCommand('copy');
            alert('Copied to clipboard!');
        }
    </script>
</body>
</html>
    
