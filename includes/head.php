<!-- favicon -->
<!-- <link rel="shortcut icon" href="admin/assets/logo/logo.png" type="image/x-icon"> -->
<!-- favicon -->

<!-- icon -->
<link rel="stylesheet" href="fontawesome-free-6.2.1-web/css/all.min.css">
<!-- icon -->

<!-- bootstrap icon -->
<link rel="stylesheet" href="bootstrap-icons-1.10.5/font/bootstrap-icons.min.css">
<!-- bootstrap icon -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<link rel="stylesheet" href="./css/academics.css">
<link rel="stylesheet" href="./css/admission.css">
<link rel="stylesheet" href="index.css">
<link rel="stylesheet" href="./css/gallery.css">

<link rel="stylesheet" href="admin/assets/css/app.min.css">
<!-- Template CSS -->
<!-- <link rel="stylesheet" href="admin/assets/css/style.css"> -->
<link rel="stylesheet" href="admin/assets/css/components.css">
<!-- Custom style CSS -->
<!-- <link rel="stylesheet" href="admin/assets/css/custom.css"> -->
<!-- <link rel='shortcut icon' type='image/x-icon' href='./admin/assets/img/logo/logo.png' /> -->
<link rel='shortcut icon' type='image/x-icon' href='logo/logo.png' />

<link rel="stylesheet" href="./css/contact.css"> <!-- head -->

<!-- bootstrap -->
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/bootstrap.bundle.js"></script>
<!-- bootstrap -->

<style>
    .project {
        position: relative;
        overflow: hidden;
        border-radius: 5px;
        border: 5px solid white;

    }

    .project .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(21, 20, 51, 0.8);
        padding: 30px;
        display: flex;
        align-items: flex-end;
        transition: all 0.4 ease;
        opacity: 0;
    }

    .project img {
        transition: all 0.4s ease;

    }

    .project:hover .overlay {
        opacity: 1;
    }

    .project:hover img {
        transform: scale(1.1);
    }


    .social-icons {
        display: flex;
        justify-content: center;

    }

    .edit-icons a {
        width: 34px;
        height: 34px;
        background-color: yellow;
        border-radius: 2px solid yellow;
        color: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 100px;
        margin-left: 5px;
        transition: all 0.4s ease;
        border: 2px solid yellow;

    }

    .edit-icons a:hover {
        color: yellow;
        background-color: transparent;
        border-color: yellow;
    }

    .trash-icons a {
        width: 34px;
        height: 34px;
        background-color: red;
        border-radius: 2px solid red;
        color: #fff;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 100px;
        margin-left: 5px;
        transition: all 0.4s ease;
        border: 2px solid red;

    }

    .trash-icons a:hover {
        color: red;
        background-color: transparent;
        border-color: red;
    }
</style>