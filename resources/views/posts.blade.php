<x-layout>
    <x-slot:judul>selamat datang di {{ $judul }}</x-slot:judul>
    <div class="container">

        <div class="row">
            <form action="">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if (request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">
                @endif
                <div class="input-group mb-5">
                    <input type="text" class="form-control" placeholder="search" name="search" id="search"m
                        autocomplete="off">
                    <button class="btn btn-primary" type="button" id="button-addon1">Search</button>
                </div>
            </form>

            <div class="row d-flex">
                <div class="col-md-9 justify-content-center">
                    {{ $posts->links() }}
                </div>
            </div>
            @forelse ($posts as $post)
                <div class="col-lg-4 col-md-6 col-xs-12 mb-3 mt-4">
                    <article>
                        <div class="card p-4 border-0 shadow">
                            <div class="card-body">
                                <h4 class="card-title">{{ Str::limit($post['title'], 10) }}</h4>
                                <h6><a class="text-dark" href="/posts?author={{ $post->author->username }}">Autor :
                                        {{ $post->author->name }}</a> ||
                                    {{ $post->created_at->diffForHumans() }}</h6>
                                <h6><a class="text-dark" href="/posts?category={{ $post->category->slug }}">Tentang :
                                        {{ $post->category->name }}</a>
                                    <p class="card-text">{{ Str::limit($post['body'], 50) }}</p>
                                    <a href="/posts/{{ $post['slug'] }}">baca selengkapnya
                                        &raquo;</a>
                            </div>
                        </div>
                    </article>
                </div>
            @empty
                <h2 class="text-bold text-center">Opps.. yang anda cari tidak ditemukan !</h2>
            @endforelse
        </div>
        <div class="col-md-9 justify-content-center">
            {{ $posts->links() }}
        </div>
        <a href="/posts" class="text-white btn btn-danger">KEMBALI</a>


    </div>

</x-layout>
