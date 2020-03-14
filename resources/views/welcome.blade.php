<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="identifier-url" content="failedjobs.com" />
    <meta name="title" content="Laravel Failed Jobs Formatter" />
    <meta name="description" content="laravel failed job payload formatter" />
    <meta name="abstract" content="laravel failed job payload formatter" />
    <meta name="keywords" content="laravel failed jobs formatter, laravel payload formatter" />
    <meta name="author" content="murat topuz" />
    <meta name="revisit-after" content="15" />
    <meta name="language" content="EN" />
    <meta name="robots" content="All" />
    <title>Laravel Failed Jobs Formatter</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@0.7.4/dist/tailwind.min.css" rel="stylesheet">
    <style>

        /* Tailwind.config.js */

        .text-xxs {
            font-size: .7rem;
        }

        .sidebar {
            width: 17.5rem;
        }

        select {
            -webkit-appearance: none;

            background-repeat: no-repeat;
            background-size: 1rem auto;
            background-position: right 0.25rem center;
            padding-right: 1rem;

            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' stroke='#eee' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' class='feather feather-chevron-down' viewBox='0 0 24 24'%3e %3cpath d='M6 9l6 6 6-6'/%3e %3c/svg%3e")
        }


        /*colors*/
        .bg-grey-lightest {
            background-color: #ECECEC;
        }

        .bg-grey-lighter {
            background-color: #B4B4B4;
        }

        .bg-grey-light {
            background-color: #7C7C7C;
        }

        .bg-grey {
            background-color: #444444;
        }

        .bg-grey-dark {
            background-color: #3D3D3D;
        }

        .bg-grey-darker {
            background-color: #292929;
        }

        .bg-grey-darkest {
            background-color: #131313;
        }

        .border-grey-darkest {
            border-color: #131313;
        }

        .border-black {
            border-color: #000;
        }

        .text-grey-lightest {
            color: #ECECEC;
        }

        .text-grey-lighter {
            color: #B4B4B4;
        }

        .text-grey-light {
            color: #7C7C7C;
        }

        .text-grey {
            color: #444444;
        }

        .text-grey-dark {
            color: #3D3D3D;
        }

        .text-grey-darker {
            color: #292929;
        }

        .text-grey-darkest {
            color: #131313;
        }

        #loader {
            position: absolute;
            left: 50%;
            top: 50%;
            z-index: 1;
            width: 150px;
            height: 150px;
            margin: -75px 0 0 -75px;
            border: 16px solid #f3f3f3;
            border-radius: 50%;
            border-top: 16px solid #000000;
            width: 120px;
            height: 120px;
            -webkit-animation: spin 2s linear infinite;
            animation: spin 2s linear infinite;
        }

        @-webkit-keyframes spin {
            0% {
                -webkit-transform: rotate(0deg);
            }
            100% {
                -webkit-transform: rotate(360deg);
            }
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }
            100% {
                transform: rotate(360deg);
            }
        }

        /* Add animation to "page content" */
        .animate-bottom {
            position: relative;
            -webkit-animation-name: animatebottom;
            -webkit-animation-duration: 1s;
            animation-name: animatebottom;
            animation-duration: 1s
        }

        @-webkit-keyframes animatebottom {
            from {
                bottom: -100px;
                opacity: 0
            }
            to {
                bottom: 0px;
                opacity: 1
            }
        }

        @keyframes animatebottom {
            from {
                bottom: -100px;
                opacity: 0
            }
            to {
                bottom: 0;
                opacity: 1
            }
        }

    </style>
</head>
<body bgcolor="#292929">
<div id="loader"></div>

<div class="app h-screen flex font-sans">
    <div class="sidebar bg-grey-darkest h-screen flex flex-col">
        <a href="#"
           class="logo m-4 no-underline text-grey-light font-bold text-sm inline-flex items-center tracking-wide hover:text-white">

            <svg class="stroke-current w-6 h-6 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="8631.5 -29.959 20 22">
                <path fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M8642.5-28.959l-10 12h9l-1 8 10-12h-9z"/>
            </svg>
            <h1 class="font-normal tracking-wide text-2xl text-grey-lighter">Failed Jobs</h1>
        </a>

        <div class="settings px-4 mt-5 text-grey-light">
            <div class="section">
                <h3 class="section-name font-medium tracking-wide text-xxs text-grey uppercase">Code</h3>
                <div class="section-item flex items-center mt-4">
                    <div class="setting-label w-24 text-sm">
                        Export type
                    </div>
                    <div class="setting-input flex-1 ml-4">
                        <select
                            id="exportType"
                            class="bg-grey-dark text-grey-lighter w-full text-sm py-1 pl-2 rounded focus:outline-none focus:shadow-outline">
                            <option value="dd">dd</option>
                            <option value="print_r">print_r</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div class="about mt-auto">

            <div class="section px-4 my-4">
                <h3 class="section-name font-medium text-xxs text-grey uppercase">About</h3>
                <div class="section-item flex items-center mt-4">
                    <p class="text-sm font-normal text-grey-light">
                        <3
                        <br>
                        <a href="http://murattopuz.com.tr" class="no-underline text-grey-light font-bold">
                            Created by M.T
                        </a>
                        <br>Frontend by <a href="https://codepen.io/koca"
                                           class="no-underline text-grey-light font-bold">M.K</a>
                    </p>
                </div>
            </div>

        </div>

    </div>
    <div class="main border-l-2 border-black bg-grey-darker flex-1 flex flex-col">
        <header class="bg-grey-darkest flex items-center justify-between p-4">
      <span class="text-grey-light text-sm flex items-center">
        <code class="w-2 h-2 rounded-full bg-green-dark mr-2"></code> New Features Coming Soon 👍
      </span>
            <button id="run"
                    class="bg-grey-darker text-grey-lighter hover:text-white font-bold text-sm py-2 px-6 rounded-full inline-flex items-center tracking-wide focus:outline-none focus:shadow-outline focus:text-white">

                <svg class="stroke-current w-3 h-3 mr-2" xmlns="http://www.w3.org/2000/svg"
                     viewBox="9971 -24 8.766 10.985">
                    <path fill="none" stroke="currentColor" stroke-width="1.3" stroke-linecap="round"
                          stroke-linejoin="round" d="M9971.5-23.5l7.766 4.992-4.5 2.892-3.266 2.101z"/>
                </svg>
                <span class="font-normal">Run</span>
            </button>
        </header>
        <main class="flex flex-1">
            <div class="editor overflow-hidden flex-1 py-4 pb-8">
                <h3 class="px-4 font-medium tracking-wide text-xxs text-grey-light uppercase">Payload</h3>
                <textarea id="payload"
                          class="xborder overflow-auto text-grey-light w-full h-full bg-transparent p-0 px-4 mt-4 focus:outline-none focus:text-white"
                          placeholder="Paste Your Payload"></textarea>
            </div>
            <div class="output  flex-1 border-l-2 border-grey-darkest py-4" id="outputs">
                <h3 class="px-4 font-medium tracking-wide text-xxs text-grey-light uppercase">Output</h3>
                <p
                    id="outputDD"
                    class="xborder overflow-auto text-grey-light w-full h-full bg-transparent p-0 px-4 mt-4 focus:outline-none"
                    readonly>Prettified code will be here</p>
            </div>
        </main>
    </div>
</div>
<script>
    let run = document.getElementById('run');
    let exportType = document.getElementById("exportType");
    exportType.addEventListener('change', e => {
        let val = e.target.value;
        var html = `<h3 class="px-4 font-medium tracking-wide text-xxs text-grey-light uppercase">Output</h3>`;
        if (val === 'dd') {
            html += `<p style="margin:10px !important;"
                        id="outputDD"
                        class="xborder overflow-auto text-grey-light w-full h-full bg-transparent p-0 px-4 mt-4 focus:outline-none"
                        readonly>Prettified code will be here</p>`;
        } else if (val === 'print_r') {
            html += `<textarea
                    id="outputPrint_r"
                    class="xborder overflow-auto text-grey-light w-full h-full bg-transparent p-0 px-4 mt-4 focus:outline-none"
                    readonly>Prettified code will be here</textarea>`;
        }

        $('#outputs').html(html);
    });

    run.addEventListener('click', e => {
        showSpin();
        console.log('clicked');
        let textField = document.getElementById("payload");
        console.log(exportType.value);
        fetch("{{ route('generator') }}", {
            method: 'POST',
            credentials: "same-origin",
            body: JSON.stringify({
                job: textField.value,
                exportType: exportType.value
            }),
            headers: {
                "Content-Type": "application/json",
                "Accept": "application/json",
                "X-Requested-With": "XMLHttpRequest",
                "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr('content')
            }
        })
            .then(function (res) {
                return res.text();
            })
            .then(data => {
                hideSpin();
                let outputId = '#outputDD';
                console.log(exportType.value);
                if (exportType.value === 'print_r') {
                    outputId = '#outputPrint_r';
                }

                $(outputId).html(data);
                let searchBox = document.querySelector('.sf-dump-search-wrapper');
                if (searchBox) {
                    searchBox.classList.remove('sf-dump-search-hidden');
                    let searchInput = document.querySelector('.sf-dump-search-input');
                    searchInput.setAttribute('onkeyup', 'searchText(this.value)');
                    searchInput.value = localStorage.getItem('searchText');
                }

            })
            .catch(function (err) {
                console.log(err);
            });
    });

    function searchText(value) {
        localStorage.setItem('searchText', value);
    }

    function hideSpin() {
        document.getElementById("loader").style.display = "none";
    }

    function showSpin() {
        document.getElementById("loader").style.display = "block";
    }

    hideSpin();

</script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-159662758-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());

    gtag('config', 'UA-159662758-1');
</script>
</body>
</html>
