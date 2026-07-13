const input = document.getElementById('imageInput');

const preview = document.getElementById('previewImage');

input.addEventListener('change', function(e){

    const file = e.target.files[0];

    if(file){

        preview.src = URL.createObjectURL(file);

    }

});

const name = document.getElementById('category_name');

const slug = document.getElementById('category_slug');

name.addEventListener('keyup', function(){

    slug.value = this.value

        .toLowerCase()

        .trim()

        .replace(/[^a-z0-9]+/g,'-')

        .replace(/^-|-$/g,'');

});

document.addEventListener('DOMContentLoaded', function () {

    const nameInput = document.getElementById('category_name');
    const slugInput = document.getElementById('category_slug');

    if (nameInput && slugInput) {

        nameInput.addEventListener('input', function () {

            slugInput.value = this.value
                .toLowerCase()
                .trim()
                .replace(/[^a-z0-9]+/g, '-')
                .replace(/^-+|-+$/g, '');

        });

    }

});

document.addEventListener('DOMContentLoaded', function () {

    const imageInput = document.getElementById('imageInput');
    const preview = document.getElementById('previewImage');

    if (imageInput && preview) {

        imageInput.addEventListener('change', function (e) {

            const file = e.target.files[0];

            if (!file) return;

            preview.src = URL.createObjectURL(file);

        });

    }

});

document.addEventListener("DOMContentLoaded", () => {

    document.querySelectorAll(".delete-form").forEach(form => {

        form.addEventListener("submit", function (e) {

            e.preventDefault();

            Swal.fire({

                title: "Delete Category?",

                text: "This action cannot be undone.",

                icon: "warning",

                showCancelButton: true,

                confirmButtonColor: "#dc3545",

                cancelButtonColor: "#6c757d",

                confirmButtonText: "Yes, Delete",

                cancelButtonText: "Cancel"

            }).then((result) => {

                if(result.isConfirmed){

                    form.submit();

                }

            });

        });

    });

});
