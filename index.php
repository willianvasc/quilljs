<!DOCTYPE html>
<?php
if (isset($_POST["post"])) {
    $texto = $_POST["texto"];
    echo $texto;
    exit;
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quilljs</title>
    <link rel="stylesheet" href="https://cdn.quilljs.com/1.3.6/quill.snow.css">
    <link rel="stylesheet" href="https://cdn.quilljs.com/1.3.6/quill.core.css">
    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/quill-image-resize-module@3.0.0/image-resize.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>

<body>

    <div class="w-100 bg-dark  d-flex flex-column justify-content-center" style="height: 100vh;">
        <div class="row">
            <div class="col-8 bg-white mx-auto px-0 d-flex flex-column" style="height:400px">
                <div id="editor"></div>
                <script src="./index.js"></script>
            </div>
        </div>
        <div class="row">
            <div class="col-8 mx-auto py-2 text-end">
                <form action="#" method="post" id="form-text">
                    <textarea name="texto" class="d-none" cols="30" rows="10" id="text"></textarea>
                    <input type="submit" class="btn btn-warning text-white" value="submit">
                </form>
            </div>
        </div>
    </div>
    <!-- Modal Sucesso-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-success" id="exampleModalLabel">Cadastrado com sucesso!</h5>
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <span id="textresult"></span>
                </div>
            </div>
        </div>
    </div>
</body>

</html>