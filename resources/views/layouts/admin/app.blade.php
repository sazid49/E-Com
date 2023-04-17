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
    <title>AdminHub</title>
</head>

<body class="scrollbarLight">
<!-- SIDEBAR -->
<section id="sidebar">
    <a href="#" class=" brand">
            <span class="menu-toggle" id="menu-toggle">
                    <svg
                            id="span-1"
                            class="h-6 w-6"
                            width="24"
                            height="24"
                            viewBox="0 0 24 24"
                            fill="none"
                            xmlns="http://www.w3.org/2000/svg"
                    >
                        <path
                                d="M20.25 7.5L16 12L20.25 16.5M3.75 12H12M3.75 17.25H16M3.75 6.75H16"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round"
                        ></path>
                    </svg>
                    <svg
                            id="span-2"
                            class="w-6 p-2 d-none h-6"
                            xmlns="http://www.w3.org/2000/svg"
                            fill="none"
                            viewBox="0 0 24 24"
                            stroke-width="2"
                            stroke="currentColor"
                    >
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
                    </svg>
                </span>
        <span id="logo" class="text">Website</span>
    </a>
    <ul id="submenu" class="side-menu border-bottom pb-4 top ps-0">
        <li class="active">
            <a href="#">
                <i class="bx bxs-dashboard"></i>
                <span class="tooltip">ToolTip</span>
                <span class="text">Dashboard</span>
            </a>
        </li>
        <li class="">
            <a href="#">
                <i class="bx bxs-dashboard"></i>
                <span class="tooltip">ToolTip</span>
                <span class="text">Dashboard</span>
            </a>
        </li>
    </ul>
    <div>
        <ul>
            <li id="submenu-1" class="d-flex justify-content-between align-items-center px-3">
                <span>Store</span>
                <span>
                            <i class="fa-solid fa-chevron-down"></i>
                        </span>
            </li>
        </ul>
        <ul id="submenu-1-open" class="side-menu border-bottom pb-3 close ps-0 mt-0">
            <li>
                <a href="#">
                    <i class="bx bxs-shopping-bag-alt"></i>
                    <span class="tooltip">ToolTip</span>
                    <span class="text">My Store</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="bx bxs-doughnut-chart"></i>
                    <span class="tooltip">ToolTip</span>
                    <span class="text ">Analytics</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="bx bxs-message-dots"></i>
                    <span class="tooltip">ToolTip</span>
                    <span class="text">Message</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="bx bxs-group"></i>
                    <span class="tooltip">ToolTip</span>
                    <span class="text">Team</span>
                </a>
            </li>
        </ul>
    </div>
    <div>
        <ul>
            <li id="submenu-2" class="d-flex justify-content-between align-items-center px-3">
                <span>Store</span>
                <span>
                            <i class="fa-solid fa-chevron-down"></i>
                        </span>
            </li>
        </ul>
        <ul id="submenu-2-open" class="side-menu close ps-0 mt-0">
            <li>
                <a href="#">
                    <span class="tooltip">ToolTip</span>
                    <i class="bx bxs-shopping-bag-alt"></i>
                    <span class="text">My Store</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="bx bxs-doughnut-chart"></i>
                    <span class="tooltip">ToolTip</span>
                    <span class="text">Analytics</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="bx bxs-message-dots"></i>
                    <span class="tooltip">ToolTip</span>
                    <span class="text">Message</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="bx bxs-group"></i>
                    <span class="tooltip">ToolTip</span>
                    <span class="text">Team</span>
                </a>
            </li>
        </ul>
    </div>
</section>
<!-- SIDEBAR -->
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
    <nav>
        <a href="#" class="brand d-block d-md-none">
                <span class="menu-toggle" id="menu-toggle-2">
                        <svg
                                id="span-1"
                                class="h-6 w-6"
                                width="24"
                                height="24"
                                viewBox="0 0 24 24"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg"
                        >
                            <path
                                    d="M20.25 7.5L16 12L20.25 16.5M3.75 12H12M3.75 17.25H16M3.75 6.75H16"
                                    stroke="currentColor"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                            ></path>
                        </svg>
                        <svg
                                id="span-2"
                                class="w-6 p-2 d-none h-6"
                                xmlns="http://www.w3.org/2000/svg"
                                fill="none"
                                viewBox="0 0 24 24"
                                stroke-width="2"
                                stroke="currentColor"
                        >
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
                        </svg>
                    </span>

        </a>
        <form action="#">
            <div class="form-input">
                <input type="search" placeholder="Search...">
                <button type="submit" class="search-btn">
                    <i class="bx bx-search"></i>
                </button>
            </div>
        </form>
        <a id="notification-open" href="#" class="notification">
            <i class="bx bxs-bell"></i>
            <span class="num">8</span>
        </a>
        <a href="#" class="profile">
            <img src="img/people.png">
        </a>
    </nav>
    <!-- notification container design -->
    <!-- NAVBAR -->
    <!-- MAIN -->
    <main>

         {{ $slot }}


        <div class="overlay hidden"></div>
        <!-- <button class="btn btn-open">Open Modal</button> -->


    </main>

</section>

<section class="modal modal-1 hidden">
    <div class="flex">
        <h4>Create customer</h4>
        <button class="btn-close">⨉</button>
    </div>
    <div>
        <div class="editor-box">
            <div class="input-box">
                <label for="name">Number <span>*</span></label>
                <input type="text">
            </div>
        </div>
        <div class="editor-box">
            <div class="input-box">
                <label for="name">Number <span>*</span></label>
                <input type="text">
            </div>
        </div>
        <div class="editor-box">
            <div class="input-box">
                <label for="name">Number <span>*</span></label>
                <input type="text">
            </div>
        </div>
    </div>
    <button class="btn btn-sus">Submit</button>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

<!-- jQuery Modal -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

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
</body>

</html>
