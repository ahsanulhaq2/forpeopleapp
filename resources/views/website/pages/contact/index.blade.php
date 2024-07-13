@extends('layouts.website')
@section('content')
    <section class="bg-white dark:bg-gray-900">
        <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
            <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white">Get In Touch</h2>
            <p class="mb-8 lg:mb-16 font-light text-center text-gray-500 dark:text-gray-400 sm:text-xl">Untuk pertanyaan, feedback atau informasi lebih lanjut mengenai kemitraan silahkan hubungi kami dibawah ini.</p>
            <div class="grid grid-cols-2 sm:px-12 px-4 gap-x-8">
                <div class="sm:px-4 px-2 flex flex-col justify-center items-center">
                    <span class="!h-48 !w-48">
                        <img style="transform: scale(1.5)" 
                        src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgdmlld0JveD0iMCAwIDUxMiA1MTIiIHN0eWxlPSJjb2xvcjpjdXJyZW50Q29sb3IiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgY2xhc3M9ImgtZnVsbCB3LWZ1bGwiP
                        jxyZWN0IHdpZHRoPSI1MTIiIGhlaWdodD0iNTEyIiB4PSIwIiB5PSIwIiByeD0iMzAiIGZpbGw9InRyYW5zcGFyZW50IiBzdHJva2U9InRyYW5zcGFyZW50IiBzdHJva2Utd2lkdGg9IjAiIHN0cm9rZS1vcGFjaXR5PSIxMDAlIiBwYWludC1vcmRlcj0ic3Ryb2tlIj48L3JlY3Q+
                        PHN2ZyB3aWR0aD0iODRweCIgaGVpZ2h0PSI4NHB4IiB2aWV3Qm94PSIwIDAgMTAyNCAxMDI0IiBmaWxsPSJjdXJyZW50Q29sb3IiIHg9IjIxNCIgeT0iMjE0IiByb2xlPSJpbWciIHN0eWxlPSJkaXNwbGF5OmlubGluZS1ibG9jazt2ZXJ0aWNhbC1hbGlnbjptaWRkbGUiIHhtbG5
                        zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGcgZmlsbD0iY3VycmVudENvbG9yIj48cGF0aCBmaWxsPSJjdXJyZW50Q29sb3IiIGQ9Ik04ODUuNiAyMzAuMkw3NzkuMSAxMjMuOGE4MC44MyA4MC44MyAwIDAgMC01Ny4zLTIzLjhjLTIxLjcgMC00Mi4xIDguNS01Ny40IDI
                        zLjhMNTQ5LjggMjM4LjRhODAuODMgODAuODMgMCAwIDAtMjMuOCA1Ny4zYzAgMjEuNyA4LjUgNDIuMSAyMy44IDU3LjRsODMuOCA4My44QTM5My44MiAzOTMuODIgMCAwIDEgNTUzLjEgNTUzQTM5NS4zNCAzOTUuMzQgMCAwIDEgNDM3IDYzMy44TDM1My4yIDU1MGE4MC44MyA4MC4
                        4MyAwIDAgMC01Ny4zLTIzLjhjLTIxLjcgMC00Mi4xIDguNS01Ny40IDIzLjhMMTIzLjggNjY0LjVhODAuODkgODAuODkgMCAwIDAtMjMuOCA1Ny40YzAgMjEuNyA4LjUgNDIuMSAyMy44IDU3LjRsMTA2LjMgMTA2LjNjMjQuNCAyNC41IDU4LjEgMzguNCA5Mi43IDM4LjRjNy4zIDA
                        gMTQuMy0uNiAyMS4yLTEuOGMxMzQuOC0yMi4yIDI2OC41LTkzLjkgMzc2LjQtMjAxLjdDODI4LjIgNjEyLjggODk5LjggNDc5LjIgOTIyLjMgMzQ0YzYuOC00MS4zLTYuOS04My44LTM2LjctMTEzLjh6Ij48L3BhdGg+PC9nPjwvc3ZnPjwvc3ZnPg=="
                         alt="phone-filled" style="color:currentColor"></img>
                    </span>
                <p class="text-center text-sm sm:text-md">Untuk informasi lebih lanjut mengenai kerjasama silahkan hubungi kami</p>
                <a href="https://wa.me/08988622280" class="px-8 py-2 bg-blue-400 mt-6 rounded-lg">
                    Hubungi
                </a>
                </div>
                <div class="sm:px-4 px-2 flex flex-col justify-center items-center">
                    <span class="!h-48 !w-48">
                        <img src="data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNTEyIiBoZWlnaHQ9IjUxMiIgdmlld0JveD0iMCAwIDUxMiA1MTIiIHN0eWxlPSJjb2xvcjpjdXJyZW50Q29sb3IiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgY2xhc3M9ImgtZnVsbCB3LWZ1bG
                        wiPjxyZWN0IHdpZHRoPSI1MTIiIGhlaWdodD0iNTEyIiB4PSIwIiB5PSIwIiByeD0iMzAiIGZpbGw9InRyYW5zcGFyZW50IiBzdHJva2U9InRyYW5zcGFyZW50IiBzdHJva2Utd2lkdGg9IjAiIHN0cm9rZS1vcGFjaXR5PSIxMDAlIiBwYWludC1vcmRlcj0ic3Ryb2tlIj48L3JlY3Q+
                        PHN2ZyB3aWR0aD0iMTcwcHgiIGhlaWdodD0iMTcwcHgiIHZpZXdCb3g9IjAgMCAxMDI0IDEwMjQiIGZpbGw9ImN1cnJlbnRDb2xvciIgeD0iMTcxIiB5PSIxNzEiIHJvbGU9ImltZyIgc3R5bGU9ImRpc3BsYXk6aW5saW5lLWJsb2NrO3ZlcnRpY2FsLWFsaWduOm1pZGRsZSIgeG1sbn
                        M9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj48ZyBmaWxsPSJjdXJyZW50Q29sb3IiPjxwYXRoIGZpbGw9ImN1cnJlbnRDb2xvciIgZD0iTTkyOCAxNjBIOTZjLTE3LjcgMC0zMiAxNC4zLTMyIDMydjY0MGMwIDE3LjcgMTQuMyAzMiAzMiAzMmg4MzJjMTcuNyAwIDMyLTE0LjMg
                        MzItMzJWMTkyYzAtMTcuNy0xNC4zLTMyLTMyLTMyem0tODAuOCAxMDguOUw1MzEuNyA1MTQuNGMtNy44IDYuMS0xOC43IDYuMS0yNi41IDBMMTg5LjYgMjY4LjlBNy4yIDcuMiAwIDAgMSAxOTQgMjU2aDY0OC44YTcuMiA3LjIgMCAwIDEgNC40IDEyLjl6Ij48L3BhdGg+PC9nPjwvc3ZnPjwvc3ZnPg==" 
                        alt="mail-filled" style="color:currentColor"></img>
                    </span>
                    <p class="text-center text-sm sm:text-md">Untuk pertanyaan atau feedback dapat menghubungi lewat email kami</p>
                    <a  href="https://mail.google.com/mail/?view=cm&fs=1&to=kerjasama.forpeople@gmail.com" rel="noreferrer" class="px-8 py-2 bg-blue-400 mt-6 rounded-lg">
                        Bantuan
                    </a>
                </div>
            </div>
        </div>
    </section>
@endsection
