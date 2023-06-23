<script src="{{ asset('js/tinymce/tinymce.min.js') }}" referrerpolicy="origin"></script>
<script>
    tinymce.init({
        selector: 'textarea#myeditorinstance', // Replace this CSS selector to match the placeholder element for TinyMCE
        plugins: 'code table lists',
        toolbar: 'undo redo | blocks | forecolor | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | table',
        language_url: 'js/tinymce/langs/pt_BR.js',
        language: 'pt_BR',
        width: "95%",
        height: 460,
    });
</script>
