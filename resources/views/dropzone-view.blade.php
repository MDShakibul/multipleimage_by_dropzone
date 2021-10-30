<!DOCTYPE html>
<html>
<head>
    <title>Drag & Drop File Uploading using Laravel 8 Dropzone JS</title>
    <link rel="stylesheet" href="http://demo.itsolutionstuff.com/plugin/bootstrap-3.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.0.1/min/dropzone.min.css" rel="stylesheet">
    <style>
        .dz-remove{
                background-color: red;
                border-radius: 5px;
                color: #FFFFFF;
                text-decoration: none;
                font-weight: bold;
                padding: 3px;
                margin-top: 3px;
        }
    </style>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.2.0/min/dropzone.min.js"></script>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Drag & Drop File Uploading using Dropzone</h1>

            <form action="{{ URL::to('dropzone/store') }}" method="post" enctype="multipart/form-data" id="image-upload" class="dropzone">
                @csrf
                <div>
                    <h3>Upload Multiple Image</h3>
                </div>

            </form>
        </div>
    </div>
</div>

<script type="text/javascript">
        Dropzone.options.imageUpload = {
            maxFilesize: 1,
            addRemoveLinks: true,
            acceptedFiles: ".jpeg,.jpg,.png,.gif"
        };
</script>

</body>
</html>
