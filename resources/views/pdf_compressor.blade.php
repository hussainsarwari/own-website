<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>Time management</title>
    @vite(['resources/css/bootstrap.min.css'])
    @vite(['resources/css/owl-carousel.css'])
    @vite(['resources/css/templatemo-art-factory.css'])
    @vite(['resources/css/style.css'])
    @vite(['resources/css/app.css'])
    @vite(['resources/js/compressor.js'])


    <script type="module" src="{{ asset('js/jquery-2.1.0.min.js') }}"></script>
    <script type="module" src="{{ asset('js/jquery.counterup.min.js') }}"></script>
    <script type="module" src="{{ asset('js/popper.js') }}"></script>
    <script type="module" src="{{ asset('js/imgfix.min.js') }}"></script>
    <script type="module" src="{{ asset('js/owl-carousel.js') }}"></script>
    <script type="module" src="{{ asset('js/scrollreveal.min.js') }}"></script>
    <script type="module" src="{{ asset('js/waypoints.min.js') }}"></script>
    <script type="module" src="{{ asset('js/custom.js') }}"></script>

</head>

<body class="overflow-x-hidden">


    <div id="preloader">
        <div class="flex justify-center loader" style="align-items: center;">
            <div class="box box0">
                <div></div>
            </div>
            <div class="box box1">
                <div></div>
            </div>
            <div class="box box2">
                <div></div>
            </div>
            <div class="box box3">
                <div></div>
            </div>
            <div class="box box4">
                <div></div>
            </div>
            <div class="box box5">
                <div></div>
            </div>
            <div class="box box6">
                <div></div>
            </div>
            <div class="box box7">
                <div></div>
            </div>
            <div class="ground">
                <div></div>
            </div>
        </div>
    </div>



    <header class="header-area header-sticky h-[80px] md:h-[140px]">
        <div class="flex justify-between p-3 bg-blue-300 col d-none d-md-flex">
            <div class="d-flex">
                <a class="text-[.5em] d-flex align-items-center text-decoration-none text-light md:text-xl"
                    href="tel:+93766805049"><svg class="bi bi-phone" fill="currentColor" height="20"
                        viewbox="0 0 16 16" width="20" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z">
                        </path>
                        <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"></path>
                    </svg> <span class="ms-1">+93 766805049 </span></a>
                <a class="text-[.5em] md:text-xl mx-2 d-flex align-items-center ms-lg-4 text-decoration-none text-light"
                    href="mailto:info@gmail.com"><svg class="bi bi-envelope" fill="currentColor" height="20"
                        viewbox="0 0 16 16" width="20" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z">
                        </path>
                    </svg>
                    <span class="ms-2">S@Solution.com</span></a>
            </div>
            <div class="flex flex-row ">
                <form action="" method="post" class="flex flex-row mx-5 search">
                    @csrf
                    <input
                        class="p-1 mx-2 text-white bg-blue-300 border-b border-blue-500 outline-none focus:outline-none focus:bg-blue-400 placeholder:text-white"
                        placeholder="Search" type="search" name="search" required id="search">
                    <button type="submit">
                        <svg class="mx-2 bi bi-search" fill="#fff" height="20" viewbox="0 0 16 16" width="20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z">
                            </path>
                        </svg>
                    </button>
                </form>



                <div class="d-flex justify-content-end">
                   
                  {{-- facebook --}}
                  <a class="text-light" href="{{url('https://facebook.com/')}}"><svg class="bi bi-facebook-f" fill="#fff" height="16" viewbox="0 0 24 24" width="16" xmlns="http://www.w3.org/2000/svg">
                    <path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"></path></svg></a> 
                  {{-- twitter --}}
                  <a class="ml-2 me-2" href="">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="#fff" height="16" width="16" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 512 462.799">
                        <path fill-rule="nonzero" d="M403.229 0h78.506L310.219 196.04 512 462.799H354.002L230.261 301.007 88.669 462.799h-78.56l183.455-209.683L0 0h161.999l111.856 147.88L403.229 0zm-27.556 415.805h43.505L138.363 44.527h-46.68l283.99 371.278z"/>
                    </svg>
                </a> 
                  {{-- instagram --}}
                    <a class="text-light ms-3" href="{{url('https://instagram.com/')}}"><svg class="bi bi-instagram" fill="#fff" height="16" viewbox="0 0 16 16" width="16" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"></path></svg></a>
                </div>
            </div>
        </div>
        <div class="2xl:overflow-x-hidden">
            <div class="row">

                <div class="col-12">
                    <nav class="flex justify-around w-full main-nav">
                        <p style="align-items:center;" class="flex align-middle title logo">
                            <a href="{{ url('http://localhost:8000/') }}"><img class="w-[13em]"
                                    src="{{ asset('images/logo.png') }}" alt="logo" srcset=""></a>
                        </p>
                        <ul class="nav">

                            <li class="scroll-to-section "><a href="{{ url('http://localhost:8000/') }}">Home</a></li>


                            <div class="">

                                <li class="px-3 py-2 text-white cursor-pointer scroll-to-section peer new-ite active"
                                    id="blog"
                                    style="padding: 10px 20px;  color: white; border: none; cursor: pointer;">Tools</li>

                                <div
                                    class="fixed flex-col hidden p-4 mt-0 bg-white shadow-lg download rounded-xl peer-hover:flex hover:flex h-fit">


                                    <a class="px-1 w-[15em] text-center py-2 text-black hover:bg-gray-300 hover:text-white"
                                        href="{{ url('instagram-online-video-downloader') }}">Instagram video
                                        downloader</a>
                                    <a class="px-1 w-[15em] text-center py-2 text-black hover:bg-gray-300 hover:text-white"
                                        href="{{ url('youtube-online-video-downloader') }}">youtube video
                                        downloader</a>
                                    <a class="px-1 w-[15em] text-center py-2 text-black hover:bg-gray-300 hover:text-white"
                                        href="{{ url('short-url') }}">Short URL</a>
                                    <a class="px-1 w-[15em] text-center py-2 text-black hover:bg-gray-300 hover:text-white"
                                        href="{{ url('Paraphrase') }}">Paraphrase</a>
                                    <a class="px-1 w-[15em] text-center py-2 text-black hover:bg-gray-300 hover:text-white"
                                        href="{{ url('CV-generator') }}">CV generator</a>
                                    <a class="px-1 w-[15em] text-center py-2 text-black hover:bg-gray-300 hover:text-white"
                                        href="{{ url('Online-code-editor') }}">Online coding</a>
                                    <a class="px-1 w-[15em] text-center py-2 text-black hover:bg-gray-300 hover:text-white"
                                        href="{{ url('online-pdf-editor') }}">PDF Editor</a>
                                    <a class="px-1 w-[15em] text-center py-2 text-black hover:bg-gray-300 hover:text-white"
                                        href="{{ url('online-pdf-compressor') }}">PDF Compression</a>
                                    <a class="px-1 w-[15em] text-center py-2 text-black hover:bg-gray-300 hover:text-white"
                                        href="{{ url('online-pdf-merging') }}">PDF merging</a>
                                    <a class="px-1 w-[15em] text-center py-2 text-black hover:bg-gray-300 hover:text-white"
                                        href="{{ url('online-pdf-splitting') }}">PDF Splitting</a>
                                    <a class="px-1 w-[15em] text-center py-2 text-black hover:bg-gray-300 hover:text-white"
                                        href="{{ url('pdf-to-image') }}">PDF to Image </a>
                                    <a class="px-1 w-[15em] text-center py-2 text-black hover:bg-gray-300 hover:text-white"
                                        href="{{ url('html-to-pdf') }}">HTML To PDF </a>
                                    <a class="px-1 w-[15em] text-center py-2 text-black hover:bg-gray-300 hover:text-white"
                                        href="{{ url('image-to-pdf') }}">Image To PDF </a>
                                    <a class="px-1 w-[15em] text-center py-2 text-black hover:bg-gray-300 hover:text-white"
                                        href="{{ url('online-Image-converter') }}">Image converter </a>
                                    <a class="px-1 w-[15em] text-center py-2 text-black hover:bg-gray-300 hover:text-white"
                                        href="{{ url('online-images-compression') }}">images Compression </a>
                      
                                    <a class="px-1 w-[15em] text-center py-2 text-black hover:bg-gray-300 hover:text-white"
                                        href="{{ url('extract-text-from-image') }}">Extract Text From Image </a>



                                </div>

                            </div>

                            <div class="">
                                <li class="px-3 py-2 text-white cursor-pointer scroll-to-section peer new-ite"
                                    id="blog"
                                    style="padding: 10px 20px;  color: white; border: none; cursor: pointer;">Blog</li>
                                <!-- Dropdown menu -->
                                <div
                                    class="fixed flex-col hidden p-4 mt-0 bg-white shadow-lg blog rounded-xl peer-hover:flex hover:flex h-fit">
                                    <a class="px-1 w-[10em] text-center py-2 text-black hover:bg-gray-300 hover:text-white "
                                        href="{{ url('blog/Technology') }}">Technology</a>
                                    <a class="px-1 w-[10em] text-center py-2 text-black hover:bg-gray-300 hover:text-white "
                                        href="{{ url('blog/sport') }}">Sport</a>
                                    <a class="px-1 w-[10em] text-center py-2 text-black hover:bg-gray-300 hover:text-white "
                                        href="{{ url('blog/lifestyle') }}">Lifestyle</a>
                                    <a class="px-1 w-[10em] text-center py-2 text-black hover:bg-gray-300 hover:text-white "
                                        href="{{ url('blog/information') }}">Information</a>
                                    <a class="px-1 w-[10em] text-center py-2 text-black hover:bg-gray-300 hover:text-white "
                                        href="{{ url('blog/islamic') }}">Islamic</a>
                                    <a class="px-1 w-[10em] text-center py-2 text-black hover:bg-gray-300 hover:text-white "
                                        href="{{ url('blog/fashion') }}">fashion</a>
                                    <a class="px-1 w-[10em] text-center py-2 text-black hover:bg-gray-300 hover:text-white "
                                        href="{{ url('blog/movie') }}">Movies</a>
                                    <a class="px-1 w-[10em] text-center py-2 text-black hover:bg-gray-300 hover:text-white "
                                        href="{{ url('blog/food') }}">Food</a>
                                    <a class="px-1 w-[10em] text-center py-2 text-black hover:bg-gray-300 hover:text-white "
                                        href="{{ url('blog/travel') }}">Travel</a>
                                    <a class="px-1 w-[10em] text-center py-2 text-black hover:bg-gray-300 hover:text-white "
                                        href="{{ url('blog/business') }}">Business</a>
                                </div>
                            </div>
                            <li class="scroll-to-section"><a
                                    href="{{ url('http://localhost:8000/#services') }}">Services</a></li>

                            <li class="scroll-to-section"><a
                                    href="{{ url('http://localhost:8000/#contacts') }}">Contacts</a></li>
                            <li class="scroll-to-section"><a
                                    href="{{ url('http://localhost:8000/#about-us') }}">About Us</a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>


    {{-- main section --}}
    <div class="relative w-full h-screen mb-20 ">
        <div
            class="w-[55em] h-[55em] lg:w-[80em] lg:h-[80em] bg-blue-500 shadow-md absolute top-[-18em] right-[-5em] rounded-full">
        </div>
        <div class="w-full flex-row  flex justify-center absolute  top-[6em] text-white">

            <h1 class="w-full  flex justify-center absolute  text-sm lg:text-3xl top-16 lg:top-[6em] text-white">Online
                PDF Compressor for free</h1>
            <form action="" method="post" class="flex flex-col justify-center mx-5 ">
                @csrf


                <label
                    class="relative top-[10em] lg:top-[20em] inline-block cursor-pointer bg-white text-primary font-medium py-2 px-4 border border-blue-500 rounded-lg shadow-sm  transition duration-300 ease-in-out">
                    <span class="flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" class="w-5 h-5 mr-2">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 4v16m8-8H4" />
                        </svg>
                        Upload File
                    </span>
                    <input type="file" id="compressor" class="absolute inset-0 opacity-0 cursor-pointer">
                </label>
                <span id="errorMessage"
                    class="text-red-300 absolute top-[14em] md:top-[13em] lg:top-[23.5em] hidden">Please choose pdf
                </span>
                <span id="successMessage"
                    class="text-green-300 absolute top-[14em] md:top-[13em] lg:top-[23.5em] hidden">File added
                    succesfully </span>

            </form>
        </div>

    </div>



    {{-- pdf compressor section  --}}
    <section class="absolute w-full p-2 pdf-compressor top-[25em] lg:top-[35em] hidden">
        <div class="m-auto w-[20em] lg:w-[60em] bg-slate-50 shadow-xl rounded-md h-[30em] flex flex-col justify-center">
            <p class="w-full p-2 text-sm font-bold text-center pdf-compression-header md:text-md">Free pdf compression
                <hr>
            </p>
            <div class="container p-2 h-[22em]  flex items-center ">
                <div class="flex items-center w-full border border-primary  rounded-md p-[1em] justify-evenly">
                    <span>math</span>
                    <span>24kb</span>
                    <span><input type="checkbox" name="select" id="select"></span>
                </div>
            </div>




            {{-- btn compression --}}
            <div class="w-full btn-conteiner">
                <a class="btn-content" href="#">
                    <span class="text-sm btn-title">Compress</span>
                    <span class="icon-arrow">
                        <svg width="60px" height="40px" viewBox="0 0 66 43" version="1.1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g id="arrow" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <path id="arrow-icon-one"
                                    d="M40.1543933,3.89485454 L43.9763149,0.139296592 C44.1708311,-0.0518420739 44.4826329,-0.0518571125 44.6771675,0.139262789 L65.6916134,20.7848311 C66.0855801,21.1718824 66.0911863,21.8050225 65.704135,22.1989893 C65.7000188,22.2031791 65.6958657,22.2073326 65.6916762,22.2114492 L44.677098,42.8607841 C44.4825957,43.0519059 44.1708242,43.0519358 43.9762853,42.8608513 L40.1545186,39.1069479 C39.9575152,38.9134427 39.9546793,38.5968729 40.1481845,38.3998695 C40.1502893,38.3977268 40.1524132,38.395603 40.1545562,38.3934985 L56.9937789,21.8567812 C57.1908028,21.6632968 57.193672,21.3467273 57.0001876,21.1497035 C56.9980647,21.1475418 56.9959223,21.1453995 56.9937605,21.1432767 L40.1545208,4.60825197 C39.9574869,4.41477773 39.9546013,4.09820839 40.1480756,3.90117456 C40.1501626,3.89904911 40.1522686,3.89694235 40.1543933,3.89485454 Z"
                                    fill="#FFFFFF"></path>
                                <path id="arrow-icon-two"
                                    d="M20.1543933,3.89485454 L23.9763149,0.139296592 C24.1708311,-0.0518420739 24.4826329,-0.0518571125 24.6771675,0.139262789 L45.6916134,20.7848311 C46.0855801,21.1718824 46.0911863,21.8050225 45.704135,22.1989893 C45.7000188,22.2031791 45.6958657,22.2073326 45.6916762,22.2114492 L24.677098,42.8607841 C24.4825957,43.0519059 24.1708242,43.0519358 23.9762853,42.8608513 L20.1545186,39.1069479 C19.9575152,38.9134427 19.9546793,38.5968729 20.1481845,38.3998695 C20.1502893,38.3977268 20.1524132,38.395603 20.1545562,38.3934985 L36.9937789,21.8567812 C37.1908028,21.6632968 37.193672,21.3467273 37.0001876,21.1497035 C36.9980647,21.1475418 36.9959223,21.1453995 36.9937605,21.1432767 L20.1545208,4.60825197 C19.9574869,4.41477773 19.9546013,4.09820839 20.1480756,3.90117456 C20.1501626,3.89904911 20.1522686,3.89694235 20.1543933,3.89485454 Z"
                                    fill="#FFFFFF"></path>
                                <path id="arrow-icon-three"
                                    d="M0.154393339,3.89485454 L3.97631488,0.139296592 C4.17083111,-0.0518420739 4.48263286,-0.0518571125 4.67716753,0.139262789 L25.6916134,20.7848311 C26.0855801,21.1718824 26.0911863,21.8050225 25.704135,22.1989893 C25.7000188,22.2031791 25.6958657,22.2073326 25.6916762,22.2114492 L4.67709797,42.8607841 C4.48259567,43.0519059 4.17082418,43.0519358 3.97628526,42.8608513 L0.154518591,39.1069479 C-0.0424848215,38.9134427 -0.0453206733,38.5968729 0.148184538,38.3998695 C0.150289256,38.3977268 0.152413239,38.395603 0.154556228,38.3934985 L16.9937789,21.8567812 C17.1908028,21.6632968 17.193672,21.3467273 17.0001876,21.1497035 C16.9980647,21.1475418 16.9959223,21.1453995 16.9937605,21.1432767 L0.15452076,4.60825197 C-0.0425130651,4.41477773 -0.0453986756,4.09820839 0.148075568,3.90117456 C0.150162624,3.89904911 0.152268631,3.89694235 0.154393339,3.89485454 Z"
                                    fill="#FFFFFF"></path>
                            </g>
                        </svg>
                    </span>
                </a>
            </div>
        </div>

    </section>



    {{-- footer section --}}


    <footer class="py-4 relative top-[60em] h-[130em] md:h-[70em] w-full ">
        <img class="absolute bottom-[58em] lg:bottom-[15em]  left-0 w-full rotate-180 d-none d-sm-inline"
            src="{{ asset('images/banner-bg.svg') }}" alt="footer-background-1">
        <img class="absolute bottom-[55em] left-0 w-full d-sm-none footer-img"
            src="{{ asset('images/banner-bg2.svg') }}" alt="footer-background-2">
        <div class="w-full h-[70em] absolute block bottom-[-4em] lg:hidden" id="xx"
            style="background: rgb(16 139 233);"></div>
        <div class="w-full h-[30em] absolute  bottom-[-4em] hidden lg:block" id="xx"
            style="background: rgb(16 139 233);"></div>
        <div class="absolute bottom-[-4em] left-0  w-[99%] px-5 text-white">
            <div class="py-4 row">
                <div class="mb-4 col-12 col-lg-3 mb-lg-0">
                    <img alt="Free Frontend Logo" class="mb-3 img-fluid" height=""
                        src="{{ asset('images/logo.png') }}" width="300">

                    <p class="mb-1 text-sm text-white small lg:text-md">Mazar-e-sharif, Afghanistan</p>

                    <p class="mb-1 text-sm text-white small lg:text-md">Tel:<a href="tel:+93766805049"> +93
                            766805049</a></p>
                    <p class="mb-0 small"><a class="text-sm text-white text-decoration-none lg:text-md"
                            href="{{ url('company-email') }}">s@solution.com</a></p>
                </div>
                <div class="mb-4 col-6 col-lg-2 mb-lg-0">
                    <h4 class="text-sm lg:text-md">blogs</h4>
                    <hr>
                    <ul class="list-unstyled">
                        <li class="mb-0">
                            <a class="text-sm text-white lg:text-md text-decoration-none"
                                href="{{ url('blog/Technology') }}">Technology</a>
                        </li>
                        <li class="mb-0">
                            <a class="text-sm text-white lg:text-md text-decoration-none"
                                href="{{ url('blog/sport') }}">Sport</a>
                        </li>
                        <li class="mb-0">
                            <a class="text-sm text-white lg:text-md text-decoration-none"
                                href="{{ url('blog/lifestyle') }}">Lifestyle</a>
                        </li>
                        <li class="mb-0">
                            <a class="text-sm text-white lg:text-md text-decoration-none"
                                href="{{ url('blog/information') }}">Information</a>
                        </li>
                        <li class="mb-0">
                            <a class="text-sm text-white lg:text-md text-decoration-none"
                                href="{{ url('blog/islamic') }}">Islamic</a>
                        </li>
                        <li class="mb-0">
                            <a class="text-sm text-white lg:text-md text-decoration-none"
                                href="{{ url('blog/fashion') }}">fashion</a>
                        </li>
                        <li class="mb-0">
                            <a class="text-sm text-white lg:text-md text-decoration-none"
                                href="{{ url('blog/movie') }}">Movies</a>
                        </li>
                        <li class="mb-0">
                            <a class="text-sm text-white lg:text-md text-decoration-none"
                                href="{{ url('blog/food') }}">Food</a>
                        </li>
                        <li class="mb-0">
                            <a class="text-sm text-white lg:text-md text-decoration-none"
                                href="{{ url('blog/travel') }}">Travel</a>
                        </li>
                        <li class="mb-0">
                            <a class="text-sm text-white lg:text-md text-decoration-none"
                                href="{{ url('blog/business') }}">Business</a>
                        </li>






                    </ul>
                </div>
                <div class="mb-4 col-6 col-lg-2 mb-lg-0">
                    <h4 class="text-sm lg:text-md">Tools</h4>
                    <hr>
                    <ul class="list-unstyled">

                        <li class="mb-0">



                            <a class="text-sm text-white lg:text-md text-decoration-none"
                                href="{{ url('instagram-online-video-downloader') }}">Instagram video downloader</a>
                        </li>
                        <li class="mb-0">
                            <a class="text-sm text-white lg:text-md text-decoration-none"
                                href="{{ url('youtube-online-video-downloader') }}">youtube video downloader</a>
                        </li>
                        <li class="mb-0">
                            <a class="text-sm text-white lg:text-md text-decoration-none"
                                href="{{ url('short-url') }}">Short URL</a>
                        </li>
                        <li class="mb-0">
                            <a class="text-sm text-white lg:text-md text-decoration-none"
                                href="{{ url('Paraphrase') }}">Paraphrase</a>
                        </li>
                        <li class="mb-0">
                            <a class="text-sm text-white lg:text-md text-decoration-none"
                                href="{{ url('CV-generator') }}">CV generator</a>
                        </li>
                        <li class="mb-0">
                            <a class="text-sm text-white lg:text-md text-decoration-none"
                                href="{{ url('Online-code-editor') }}">Online coding</a>
                        </li>
                        <li class="mb-0">
                            <a class="text-sm text-white lg:text-md text-decoration-none"
                                href="{{ url('online-pdf-editor') }}">PDF Editor</a>
                        </li>
                        <li class="mb-0">
                            <a class="text-sm text-white lg:text-md text-decoration-none"
                                href="{{ url('online-pdf-compressor') }}">PDF Compression</a>
                        </li>
                        <li class="mb-0">
                            <a class="text-sm text-white lg:text-md text-decoration-none"
                                href="{{ url('online-pdf-merging') }}">PDF merging</a>
                        </li>
                        <li class="mb-0">
                            <a class="text-sm text-white lg:text-md text-decoration-none"
                                href="{{ url('online-pdf-splitting') }}">PDF Splitting</a>
                        </li>
                      
                        <li class="mb-0">
                            <a class="text-sm text-white lg:text-md text-decoration-none"
                                href="{{ url('pdf-to-image') }}">PDF to Image </a>
                        </li>
                        <li class="mb-0">
                            <a class="text-sm text-white lg:text-md text-decoration-none"
                                href="{{ url('html-to-pdf') }}">HTML To PDF </a>
                        </li>
                        <li class="mb-0">
                            <a class="text-sm text-white lg:text-md text-decoration-none"
                                href="{{ url('image-to-pdf') }}">Image To PDF </a>
                        </li>
                        <li class="mb-0">
                            <a class="text-sm text-white lg:text-md text-decoration-none"
                                href="{{ url('online-Image-converter') }}">Image converter </a>
                        </li>
                        <li class="mb-0">
                            <a class="text-sm text-white lg:text-md text-decoration-none"
                                href="{{ url('online-images-compression') }}">images Compression </a>
                        </li>
                      
                        <li class="mb-0">
                            <a class="text-sm text-white lg:text-md text-decoration-none"
                                href="{{ url('extract-text-from-image') }}">Extract Text From Image  </a>
                        </li>
                    </ul>
                </div>
                <div class="mb-4 col-6 col-lg-2 mb-lg-0">
                    <h4 class="text-sm lg:text-md">Quick Links</h4>
                    <hr>
                    <ul class="list-unstyled">
                        <li class="mb-1">
                            <a class="text-sm text-white lg:text-md text-decoration-none"
                                href="{{ url('https://localhost:8000/#about-us') }}">About us</a>
                        </li>
                        <li class="mb-1">
                            <a class="text-sm text-white lg:text-md text-decoration-none"
                                href="{{ url('https://localhost:8000/#contacts') }}">Contacts</a>
                        </li>
                        <li class="mb-1">
                            <a class="text-sm text-white lg:text-md text-decoration-none"
                                href="{{ url('Guest-post') }}">Guest post</a>
                        </li>
                        <li class="mb-1">
                            <a class="text-sm text-white lg:text-md text-decoration-none"
                                href="{{ url('privacy-policy') }}">Privacy Policy</a>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-lg-3">
                    <div class="pt-4 border-top d-lg-none"></div>
                    <h4 class="text-sm lg:text-md">Subscribe</h4>
                    <div class="mb-2 input-group">
                        <input class="text-sm form-control bg-light lg:text-md" placeholder="Email address"
                            type="text"> <button class="btn btn-primary" type="button">Subscribe</button>
                    </div>
                    <p class="mb-0 text-sm text-white small lg:text-md">Sign up for our newsletter to get the latest
                        updates on features and releases.</p>
                    <p class="mb-0 text-sm text-white small lg:text-md">Created by: <a href="http://">Mohammad Hussain
                            "Sarvari"</a></p>
                </div>
            </div>
            <div class="py-3 d-lg-flex align-item-ceneter justify-content-between border-top py-lg-2 mt-lg-5">
                <div class="mb-2 text-sm text-white small mb-lg-0 lg:text-md">
                    © Copyright 2024 Mohammad hussain "sarvari".
                    <p class="text-sm text-white lg:text-md">thank <a href="https://icons8.com/illustrations"
                            class="text-white">icons8</a>'s designer for there beautifull Illustrations.</p>

                    <a class="mb-2 text-sm text-white lg:text-md d-block d-lg-inline ms-lg-3 mb-lg-0"
                        href="">Privacy Policy</a>
                    <a class="mb-2 text-sm text-white lg:text-md d-block d-lg-inline ms-lg-3 mb-lg-0"
                        href="">Terms of Service</a>
                </div>

                <div class="flex">
                     {{-- instagram --}}
                     <a class="ml-2 me-2" href="">
                        <svg class="bi bi-instagram"
                        fill="#fff" height="16" viewbox="0 0 16 16" width="16"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z">
                        </path>
                    </svg>
                    </a>
                    {{-- x --}}
                    <a class="ml-2 me-2" href="">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#fff" height="16" width="16" shape-rendering="geometricPrecision" text-rendering="geometricPrecision" image-rendering="optimizeQuality" fill-rule="evenodd" clip-rule="evenodd" viewBox="0 0 512 462.799">
                            <path fill-rule="nonzero" d="M403.229 0h78.506L310.219 196.04 512 462.799H354.002L230.261 301.007 88.669 462.799h-78.56l183.455-209.683L0 0h161.999l111.856 147.88L403.229 0zm-27.556 415.805h43.505L138.363 44.527h-46.68l283.99 371.278z"/>
                        </svg>
                    </a>
                    {{-- facebook --}}
                    <a class="ml-2 me-2" href="">
                        <svg class="bi bi-facebook text-primary" fill="#fff" height="16" viewbox="0 0 16 16"
                            width="16" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z">
                            </path>
                        </svg></a>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>
