@props([
'title' => 'KarlieFit',
'description'
])

<title>{{ $title }}</title>
<meta name="author" content="Karlie Snelgar">
<meta name="description" content="{{ $description }}">
<meta property="og:image" content="{{ asset('/images/karliefit_logo.jpg') }}">
<meta property="og:description" content="{{ $description }}">
<meta property="og:title" content="{{ $title }}">
<link rel="shortcut icon" href="{{ asset('/images/kf_32.jpg') }}">
<link rel="icon" type="image/jpg" sizes="16x16" href="{{ asset('/images/kf_16.jpg') }}">
<link rel="icon" type="image/jpg" sizes="32x32" href="{{ asset('/images/kf_32.jpg') }}">
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/images/kf_180.jpg') }}">