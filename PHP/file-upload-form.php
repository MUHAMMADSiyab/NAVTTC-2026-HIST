<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP File Uploads</title>

    <script src="https://code.jquery.com/jquery-4.0.0.min.js" integrity="sha256-OaVG6prZf4v69dPg6PhVattBXkcOWQB62pdZ3ORyrao=" crossorigin="anonymous"></script>

    <style>
        .progress {
            width: 50%;
            height: 20px;
            background: linear-gradient(gray, lightgray);
            border-radius: 15px;
            margin-inline: auto;
            margin-block: 50px;
            display: none;
        }

        .progress-bar {
            height: 100%;
            background: linear-gradient(green, darkolivegreen);
            border-radius: inherit;
            width: 0%;
        }
    </style>
</head>

<body>

    <form enctype="multipart/form-data">
        <input type="file" name="file" id="file">

        <input type="submit" value="Upload File">
    </form>

    <!-- <div style="margin-block: 30px">
        <progress value="0" max="100" style="display: none"></progress>
    </div> -->

    <div class="progress">
        <div class="progress-bar"></div>
    </div>

    <script>
        $(function() {
            $('form').submit(function(e) {
                e.preventDefault();

                const formData = new FormData(this);
                // const file = $('#file')[0].files[0];

                // formData.append('file', file);

                // XHR

                // file related properties can be access in the following way:
                // file.type
                // file.size

                $.ajax({
                    url: 'file-upload-processing.php',
                    type: "POST",
                    data: formData,
                    contentType: false,
                    processData: false,
                    xhr: function() {
                        const xhr = new XMLHttpRequest();

                        xhr.upload.addEventListener('progress', function(e) {
                            if (e.lengthComputable) {
                                const percent = (e.loaded / e.total) * 100;

                                // $('progress').show().val(percent);

                                $('.progress').show();
                                $('.progress-bar').css({
                                    width: `${percent}%`
                                })

                            }
                        });

                        return xhr;
                    },
                    success: function(res) {
                        $('body').append(res);
                    },
                    error: function(err) {
                        $('body').append(err.responseText);

                    }
                })
            })
        })
    </script>
</body>


</html>