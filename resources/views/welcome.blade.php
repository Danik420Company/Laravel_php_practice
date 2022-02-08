@extends('layouts.master')

@section('style')
    <style>
        body {background: green; color: white;}
    </style>
@endsection

@section('content')
    <p>저는 자식 뷰의 'content' 섹션입니다.</p>
    @include('partials.footer')
@endsection

@section('content_2')
    <p>저는 git commit 테스트용 섹션입니다.</p>
@endsection

@section('script')
    <script>
        alert("저는 자식 뷰의 'script' 섹션입니다.");
    </script>
@endsection

<ul>
    @forelse($items as $item)
        <li>{{ $item }}</li>
    @empty
        <li>엥~ 아무것도 없는데요!</li>
    @endforelse
</ul>
