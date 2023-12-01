let quill = new Quill('#editor',{
    modules: {
        toolbar: [
            [{ header: [1, 2, false] }],
            ['bold', 'italic', 'underline'],
            ['image', 'code-block']
        ]
    },
    placeholder: 'Compose an epic...',
    theme: 'snow'  // or 'bubble'
});
$(document).ready(()=>{
    $("#editor").on("keypress", function() {
    $("#text").val($(".ql-editor").html());
})
$("#form-text").on("submit", function(event) { // Adicione 'event' como parâmetro
    event.preventDefault(); // Mova esta linha para cima
    if ($("#text").val() == "") {
        alert("Preencha o campo de texto");
        return false;
    } else {
        $.ajax({
            url: "#",
            type: "POST",
            data: {
                texto: $("#text").val(),
                post: "submit"
            },
            success: function(data) {
                $("#textresult").html(data);
                $("#exampleModal").modal("show");
            }
        });
    }
});
})
