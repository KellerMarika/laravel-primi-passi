<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>LARAVEL HOME</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">

<body class="">
  <nav class="navbar navbar-expand-lg bg-body-tertiary bg-danger">
    <div class="container-fluid">
        <a class="navbar-brand text-light" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                @foreach ($nav as $key => $navLink)
                    @if (!isset($navLink['dropdown']))
                        <li class="nav-item">
                            <a class="nav-link text-light active" aria-current="page"
                                href="{{ $navLink['href'] }}">{{ $navLink['name'] }}</a>
                        </li>
                    @else
                        <li class="nav-item dropdown">
                            <a class="nav-link text-light  dropdown-toggle " href="#" role="button"
                              {{--   data-bs-toggle="dropdown" aria-expanded="true" --}}>
                                {{ $navLink['name'] }}
                            </a>
                            <ul {{-- class="dropdown-menu" --}}>

                                @forelse ($navLink['dropdown'] as $key => $dropdownLink)

                                    <li><a {{-- class="dropdown-item" --}}
                                            href="{{ $dropdownLink['href'] }}">{{ $dropdownLink['name'] }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    @endif
                @endforeach
            </ul>

            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-light" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>

    <h1>ABOUT</h1>
</body>

<style>

  body{
    background-color: rgb(45, 141, 219);
    color:white
  }
</style>