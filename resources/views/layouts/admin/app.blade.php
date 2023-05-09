<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Boxicons -->
    <link href="https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css" rel="stylesheet">
    <!-- My CSS -->
    <script src="https://kit.fontawesome.com/822b01aa44.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('content/admin/style.css') }}">

    <!--slim-->
    <link rel="stylesheet" href="{{ asset('plugins/slim-cropping-plugin/example/css/slim.min.css') }}">
    <title>Dashboard</title>
    @livewireStyles
</head>

<body class="scrollbarLight">
   <div class="overlay hidden"></div>
@include('layouts.admin.partials.sidebar')

<div id="notification-container" class="notification-container">
    <div class="top-notification position-relative ">
        <h5 class="position-relative d-inline-block ">Notifications
            <span class="num">8</span>
        </h5>
        <br>
        <a href="">Mark all as read</a>
        <a href="">• Clear</a>
        <span id="notification-close" class="xmark">
                    <i class="fa-solid fa-xmark"></i>
                </span>
    </div>
    <div class="single-notification">
            <span class="xmark">
                    <i class="fa-solid fa-xmark"></i>
                </span>
        <span class="mt-2  ">
                    <i class="fa-solid fa-bag-shopping"></i>
                </span>
        <div>
            <h3>New order</h3>
            <span>7 minutes ago</span>
            <p>Delmer Metz ordered 4 products.</p>
            <button class="btn">View</button>
        </div>
    </div>
</div>
<!-- CONTENT -->
<section id="content">
    <!-- NAVBAR -->
    @include('layouts.admin.partials.header')
    <!-- NAVBAR -->


    <!-- MAIN -->
      <main>
         {{ $slot }}
{{--        <div class="overlay hidden"></div>--}}
      </main>

</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
<!-- jQuery Modal -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
   <!--Slim-->
   <script src="{{ asset('plugins/slim-cropping-plugin/example/js/slim.kickstart.min.js') }}"></script>


   <script src="{{ asset('content/admin/script.js') }}"></script>
<script>
    var quill = new Quill('#editor', {
        theme: 'snow'
    });

    const modal = document.querySelector(".modal");
    const overlay = document.querySelector(".overlay");
    const openModalBtn = document.querySelector("#add");
    const closeModalBtn = document.querySelector(".btn-close");
    const openModal = function () {
        modal.classList.remove("hidden");
        overlay.classList.remove("hidden");
    };
    openModalBtn.addEventListener("click", openModal);
    const closeModal = function () {
        modal.classList.add("hidden");
        overlay.classList.add("hidden");
    };
    closeModalBtn.addEventListener("click", closeModal);
    overlay.addEventListener("click", closeModal);
    document.addEventListener("keydown");
    document.addEventListener("keydown", function (e) {
        if (e.key === "Escape" && !modal.classList.contains("hidden")) {
            modalClose();
        }
    });

</script>
@livewireScripts
</body>
</html>
