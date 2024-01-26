<header>
    <div class="container">
        <div class="row py-3 d-flex text-center">
            <div class="col-6 ">
                <button type="submit" class="btnHeader">
                    <a class="colorLink" href="{{ route('comics.index') }}">Home</a>
                </button>
            </div>
            <div class="col-6 ">
                <button type="submit" class="btnHeaderAdd">
                    <a class="colorLink" href="{{ route('comics.create') }}">Aggiungi Un Fumetto</a>
                </button>
            </div>
        </div>
    </div>
</header>