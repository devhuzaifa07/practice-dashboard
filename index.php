<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Practice</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/all.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"> -->
</head>

<body>
    <section class="navbar-section">
        <div class="container">
            <div class="d-flex">
                <div class="navbar-logo align-self-center">
                    <a href="/">
                        <img src="assets/img/logo.svg" alt="Logo">
                    </a>
                </div>
                <div class="search-bar">
                    <form action="/">
                        <input class="search-input" type="text" placeholder="Search Files.." name="search">
                        <!-- <input class="search-filter" type="text" placeholder="Filter" name="search"> -->
                    </form>
                    <div class="dropdown">
                        <div class="filter-dropdown-btn">
                            Filter
                        </div>
                    </div>
                </div>
                <div class="profile-part">
                    <div class="profile-bell-icon align-self-center justify-self-center">
                        <img src="assets/img/bell-icon.svg" alt="Notification Bell">
                    </div>
                    <div class="profile-info">
                        <div class="profile-img align-self-center">
                            <img src="assets/img/profile.png" alt="Profile">
                        </div>
                        <div class="profile-name align-self-center">
                            <h6> AR Shakir </h6>
                            <p> shakir260@gmail.com </p>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <section class="main-section">
        <div class="container">
            <div class="d-flex">
                <div class="sidebar-strip">
                    <div class="sidebar-row">
                        <div class="sidebar-option">
                            <a href="/">
                                <div class="side-opt-img">
                                    <img src="assets/img/dashboard-img.png" alt="Dashboard" class="f-img-inv">
                                </div>
                                <div class="side-opt-name">
                                    <p> Dashboard </p>
                                </div>
                            </a>
                        </div>
                        <div class="sidebar-option">
                            <a href="/">
                                <div class="side-opt-img">
                                    <img src="assets/img/files-img.png" alt="All Files">
                                </div>
                                <div class="side-opt-name">
                                    <p> All Files </p>
                                </div>
                            </a>
                        </div>
                        <div class="sidebar-option">
                            <a href="/">
                                <div class="side-opt-img">
                                    <img src="assets/img/shared-img.png" alt="Shared">
                                </div>
                                <div class="side-opt-name">
                                    <p> Shared </p>
                                </div>
                            </a>
                        </div>
                        <div class="sidebar-option">
                            <a href="/">
                                <div class="side-opt-img">
                                    <img src="assets/img/favorite-img.png" alt="Favorites">
                                </div>
                                <div class="side-opt-name">
                                    <p> Favorites </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="sidebar-row">
                        <div class="sidebar-option">
                            <a href="/">
                                <div class="side-opt-img">
                                    <img src="assets/img/recent-img.png" alt="Recent">
                                </div>
                                <div class="side-opt-name">
                                    <p> Recent </p>
                                </div>
                            </a>
                        </div>
                        <div class="sidebar-option">
                            <a href="/">
                                <div class="side-opt-img">
                                    <img src="assets/img/request-img.png" alt="Request">
                                </div>
                                <div class="side-opt-name">
                                    <p> Request </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="sidebar-row">
                        <div class="sidebar-option">
                            <a href="/">
                                <div class="side-opt-img">
                                    <img src="assets/img/picture-img.png" alt="Picture">
                                </div>
                                <div class="side-opt-name">
                                    <p> Picture </p>
                                </div>
                            </a>
                        </div>
                        <div class="sidebar-option">
                            <a href="/">
                                <div class="side-opt-img">
                                    <img src="assets/img/videos-img.png" alt="Videos">
                                </div>
                                <div class="side-opt-name">
                                    <p> Videos </p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="sidebar-row">
                        <div class="sidebar-option">
                            <a href="/">
                                <div class="side-opt-img">
                                    <img src="assets/img/document-img.png" alt="Document">
                                </div>
                                <div class="side-opt-name">
                                    <p> Document </p>
                                </div>
                            </a>
                        </div>
                        <div class="sidebar-option">
                            <a href="/">
                                <div class="side-opt-img">
                                    <img src="assets/img/signed-img.png" alt="Signed">
                                </div>
                                <div class="side-opt-name">
                                    <p> Signed </p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <section class="folder-section">
                    <div class="container">
                        <div class="d-flex folder-row">
                            <!-- First Box -->
                            <div class="folder-box">
                                <a href="#!">
                                    <div class="d-flex">
                                        <img src="assets/img/file.png" alt="Desgin Folder">
                                        <img src="assets/img/option-dots.png" alt="Option Dots">
                                    </div>
                                    <h5> Design </h5>
                                    <div class="d-flex">
                                        <p> 17 files </p>
                                        <p> 12 GB </p>
                                    </div>
                                </a>
                            </div>
                            <!-- Second Box -->
                            <div class="folder-box green-folder">
                                <a href="#!">
                                    <div class="d-flex">
                                        <img src="assets/img/file-green.png" alt="Document Folder">
                                        <img src="assets/img/option-dots.png" alt="Option Dots">
                                    </div>
                                    <h5> Documents </h5>
                                    <div class="d-flex">
                                        <p> 17 files </p>
                                        <p> 12 GB </p>
                                    </div>
                                </a>
                            </div>
                            <!-- Third Box -->
                            <div class="folder-box yellow-folder">
                                <a href="#!">
                                    <div class="d-flex">
                                        <img src="assets/img/file-yellow.png" alt="Music Folder">
                                        <img src="assets/img/option-dots.png" alt="Option Dots">
                                    </div>
                                    <h5> Music </h5>
                                    <div class="d-flex">
                                        <p> 1,200 files </p>
                                        <p> 24 GB </p>
                                    </div>
                                </a>
                            </div>
                            <!-- Fourth Box -->
                            <div class="folder-box orange-folder">
                                <a href="#!">
                                    <div class="d-flex">
                                        <img src="assets/img/file-orange.png" alt="Images Folder">
                                        <img src="assets/img/option-dots.png" alt="Option Dots">
                                    </div>
                                    <h5> Images </h5>
                                    <div class="d-flex">
                                        <p> 270 files </p>
                                        <p> 8 GB </p>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-------- Quick Access Section Start -------->

                        <div class="quick-access-part">
                            <h4> Quick Access </h4>
                            <div class="d-flex quick-access-row">
                                <div class="quick-access-box">
                                    <img src="assets/img/building-img.png" alt="Quick Access Building Image">
                                    <div class="quick-access-box-name d-flex">
                                        <img src="assets/img/image-icon.png" alt="Image Icon" class="img-fluid">
                                        <h6> Building Image<span>.jpeg</span> </h6>
                                    </div>
                                </div>
                                <div class="quick-access-box">
                                    <img src="assets/img/video-img.png" alt="Quick Access Video Image">
                                    <div class="quick-access-box-name d-flex">
                                        <img src="assets/img/video-icon.png" alt="Video Icon" class="img-fluid">
                                        <h6> Product Video<span>.mp4</span> </h6>
                                    </div>
                                </div>
                                <div class="quick-access-box">
                                    <img src="assets/img/Customer-img.png" alt="Quick Access Building Image">
                                    <div class="quick-access-box-name d-flex">
                                        <img src="assets/img/pdf-icon.png" alt="PDF Icon" class="img-fluid">
                                        <h6> Customers<span>.pdf</span> </h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-------- Quick Access Section End -------->

                        <!-------- Recent Upload Section Start -------->

                        <div class="recent-upload-part">
                            <div class="container">
                                <div class="recent-upload-heading">
                                    <h4>Table</h4>
                                    <table width:100%;>
                                        <thead>
                                            <tr>
                                                <th>Icon</th>
                                                <th>Name</th>
                                                <th>Size</th>
                                                <th>Act</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr>
                                                <td>
                                                    <img src="assets/img/marcus-family.png" alt="Marcus Family">
                                                </td>
                                                <td>
                                                    <!-- <div class="d-flex recent-upload-box"> -->
                                                    <div class="recent-file-name">
                                                        <h5> Marcus Family.jpeg </h5>
                                                        <p> 10 Oct, 10:23 pm </p>
                                                    </div>
                                                    <!-- </div> -->
                                                </td>
                                                <td>
                                                    <h5 class="recent-file-size"> 1.28 MB </h5>
                                                </td>
                                                <td>
                                                    <!-- <h5> Action </h5> -->
                                                    <img src="assets/img/option-dots.png" alt="Option Dots">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="assets/img/marcus-family-1.png" alt="Marcus Family">
                                                </td>
                                                <td>
                                                    <!-- <div class="d-flex recent-upload-box"> -->
                                                    <div class="recent-file-name">
                                                        <h5> Marcus Family.jpeg </h5>
                                                        <p> 10 Oct, 10:23 pm </p>
                                                    </div>
                                                    <!-- </div> -->
                                                </td>
                                                <td>
                                                    <h5 class="recent-file-size"> 12 MB </h5>
                                                </td>
                                                <td>
                                                    <!-- <h5> Action </h5> -->
                                                    <img src="assets/img/option-dots.png" alt="Option Dots">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="assets/img/marcus-family-2.png" alt="Marcus Family">
                                                </td>
                                                <td>
                                                    <!-- <div class="d-flex recent-upload-box"> -->
                                                    <div class="recent-file-name">
                                                        <h5> Marcus Family.jpeg </h5>
                                                        <p> 10 Oct, 10:23 pm </p>
                                                    </div>
                                                    <!-- </div> -->
                                                </td>
                                                <td>
                                                    <h5 class="recent-file-size"> 12 MB </h5>
                                                </td>
                                                <td>
                                                    <!-- <h5> Action </h5> -->
                                                    <img src="assets/img/option-dots.png" alt="Option Dots">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="assets/img/marcus-family-3.png" alt="Marcus Family">
                                                </td>
                                                <td>
                                                    <!-- <div class="d-flex recent-upload-box"> -->
                                                    <div class="recent-file-name">
                                                        <h5> Marcus Family.jpeg </h5>
                                                        <p> 10 Oct, 10:23 pm </p>
                                                    </div>
                                                    <!-- </div> -->
                                                </td>
                                                <td>
                                                    <h5 class="recent-file-size"> 12 MB </h5>
                                                </td>
                                                <td>
                                                    <!-- <h5> Action </h5> -->
                                                    <img src="assets/img/option-dots.png" alt="Option Dots">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <img src="assets/img/marcus-family-4.png" alt="Marcus Family">
                                                </td>
                                                <td>
                                                    <!-- <div class="d-flex recent-upload-box"> -->
                                                    <div class="recent-file-name">
                                                        <h5> Marcus Family.jpeg </h5>
                                                        <p> 10 Oct, 10:23 pm </p>
                                                    </div>
                                                    <!-- </div> -->
                                                </td>
                                                <td>
                                                    <h5 class="recent-file-size"> 12 MB </h5>
                                                </td>
                                                <td>
                                                    <!-- <h5> Action </h5> -->
                                                    <img src="assets/img/option-dots.png" alt="Option Dots">
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!-------- Recent Upload Section End -------->

                    </div>
                </section>

            </div>
        </div>
    </section>

    <script src="js/bootstrap.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script> -->

</body>

</html>